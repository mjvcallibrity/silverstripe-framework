<?php

namespace SilverStripe\i18n\Tests;

use SilverStripe\Control\Director;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Core\Manifest\ClassManifest;
use SilverStripe\Core\Manifest\ClassLoader;
use SilverStripe\i18n\i18n;
use SilverStripe\i18n\Messages\MessageProvider;
use SilverStripe\i18n\Messages\Symfony\ModuleYamlLoader;
use SilverStripe\i18n\Messages\Symfony\SymfonyMessageProvider;
use SilverStripe\i18n\Messages\YamlReader;
use SilverStripe\i18n\Tests\i18nTest\MyObject;
use SilverStripe\i18n\Tests\i18nTest\MySubObject;
use SilverStripe\i18n\Tests\i18nTest\TestDataObject;
use SilverStripe\View\SSViewer;
use SilverStripe\View\SSViewer_DataPresenter;
use SilverStripe\View\ThemeResourceLoader;
use SilverStripe\View\ThemeManifest;
use SilverStripe\View\ViewableData;
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\Translator;

/**
 * Helper trait for bootstrapping test manifest for i18n tests
 */
trait i18nTestManifest
{
    /**
     * Fake webroot with a single module /i18ntestmodule which contains some files with _t() calls.
     *
     * @var string
     */
    protected $alternateBasePath;

    /**
     * Number of test manifests
     *
     * @var int
     */
    protected $manifests = 0;

    protected function getExtraDataObjects()
    {
        return [
            TestDataObject::class,
            MyObject::class,
            MySubObject::class,
        ];
    }

    /**
     * @var ThemeResourceLoader
     */
    protected $oldThemeResourceLoader = null;

    /**
     * @var string
     */
    protected $originalLocale = null;

    public function setupManifest()
    {
        // force SSViewer_DataPresenter to cache global template vars before we switch to the
        // test-project class manifest (since it will lose visibility of core classes)
        $presenter = new SSViewer_DataPresenter(new ViewableData());
        unset($presenter);

        // Switch to test manifest
        $s = DIRECTORY_SEPARATOR;
        $this->alternateBasePath = __DIR__ . $s . 'i18nTest' . $s . "_fakewebroot";
        Director::config()->update('alternate_base_folder', $this->alternateBasePath);

        // Replace old template loader with new one with alternate base path
        $this->oldThemeResourceLoader = ThemeResourceLoader::instance();
        ThemeResourceLoader::set_instance($loader = new ThemeResourceLoader($this->alternateBasePath));
        $loader->addSet(
            '$default',
            new ThemeManifest(
                $this->alternateBasePath,
                project(),
                false,
                true
            )
        );

        SSViewer::set_themes([
            'testtheme1',
            '$default',
        ]);

        $this->originalLocale = i18n::get_locale();
        i18n::set_locale('en_US');

        // Set new manifest against the root
        $classManifest = new ClassManifest($this->alternateBasePath, true, true, false);
        $this->pushManifest($classManifest);

        // Setup uncached translator
        // This should pull the module list from the above manifest
        $translator = new Translator('en');
        $translator->setFallbackLocales(['en']);
        $loader = new ModuleYamlLoader();
        $loader->setReader(new YamlReader());
        $translator->addLoader('ss', $loader); // Standard ss module loader
        $translator->addLoader('array', new ArrayLoader()); // Note: array loader isn't added by default
        $provider = new SymfonyMessageProvider();
        $provider->setTranslator($translator);
        Injector::inst()->registerService($provider, MessageProvider::class);
    }

    public function tearDownManifest()
    {
        ThemeResourceLoader::set_instance($this->oldThemeResourceLoader);
        i18n::set_locale($this->originalLocale);

        // Reset any manifests pushed during this test
        $this->popManifests();
    }

    /**
     * Safely push a new class manifest.
     * These will be cleaned up on tearDown()
     *
     * @param ClassManifest $manifest
     */
    protected function pushManifest(ClassManifest $manifest)
    {
        $this->manifests++;
        ClassLoader::instance()->pushManifest($manifest);
    }

    /**
     * Pop off all extra manifests
     */
    protected function popManifests()
    {
        // Reset any manifests pushed during this test
        while ($this->manifests > 0) {
            ClassLoader::instance()->popManifest();
            $this->manifests--;
        }
    }
}
