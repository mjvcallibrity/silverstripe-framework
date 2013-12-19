<?php

/**
 * Bulgarian (Bulgaria) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('bg_BG', $lang) && is_array($lang['bg_BG'])) {
	$lang['bg_BG'] = array_merge($lang['en_US'], $lang['bg_BG']);
} else {
	$lang['bg_BG'] = $lang['en_US'];
}

$lang['bg_BG']['AdvancedSearchForm']['ALLWORDS'] = 'Всички думи';
$lang['bg_BG']['AdvancedSearchForm']['ATLEAST'] = 'Поне една от думите';
$lang['bg_BG']['AdvancedSearchForm']['EXACT'] = 'Точната Фраза';
$lang['bg_BG']['AdvancedSearchForm']['FROM'] = 'От';
$lang['bg_BG']['AdvancedSearchForm']['GO'] = 'Давай';
$lang['bg_BG']['AdvancedSearchForm']['LASTUPDATED'] = 'Последно Променено';
$lang['bg_BG']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'ПОСЛЕДНО ПРОМЕНЕНО';
$lang['bg_BG']['AdvancedSearchForm']['PAGETITLE'] = 'Заглавие на Страница';
$lang['bg_BG']['AdvancedSearchForm']['RELEVANCE'] = 'Съответствие';
$lang['bg_BG']['AdvancedSearchForm']['SEARCHBY'] = 'ТЪРСИ ПО';
$lang['bg_BG']['AdvancedSearchForm']['SORTBY'] = 'СОРТИРАЙ РЕЗУЛТАТИТЕ ПО';
$lang['bg_BG']['AdvancedSearchForm']['TO'] = 'За';
$lang['bg_BG']['AdvancedSearchForm']['WITHOUT'] = 'Без Думите';
$lang['bg_BG']['BankAccountField']['VALIDATIONJS'] = 'Моля въведете валиден банков номер';
$lang['bg_BG']['BasicAuth']['ENTERINFO'] = 'Моля, въведете потребителско име и парола.';
$lang['bg_BG']['BasicAuth']['ERRORNOTADMIN'] = 'Този потребител не е администратор.';
$lang['bg_BG']['BasicAuth']['ERRORNOTREC'] = 'Това потребителско име / парола не е разпознато';
$lang['bg_BG']['BBCodeParser']['ALIGNEMENT'] = 'Подреждане';
$lang['bg_BG']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'подреди в дясно';
$lang['bg_BG']['BBCodeParser']['BOLD'] = 'Удебелен текст';
$lang['bg_BG']['BBCodeParser']['BOLDEXAMPLE'] = 'Удебелен';
$lang['bg_BG']['BBCodeParser']['CODE'] = 'Блок код';
$lang['bg_BG']['BBCodeParser']['CODEDESCRIPTION'] = 'Неформатиран блок код';
$lang['bg_BG']['BBCodeParser']['CODEEXAMPLE'] = 'Блок код';
$lang['bg_BG']['BBCodeParser']['COLORED'] = 'Цветен текст';
$lang['bg_BG']['BBCodeParser']['COLOREDEXAMPLE'] = 'син текст';
$lang['bg_BG']['BBCodeParser']['EMAILLINK'] = 'Мейл връзка';
$lang['bg_BG']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Създай връзка към мейл адрес';
$lang['bg_BG']['BBCodeParser']['IMAGE'] = 'Изображение';
$lang['bg_BG']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Показва изображение във вашата публикация';
$lang['bg_BG']['BBCodeParser']['ITALIC'] = 'Наклонен текст';
$lang['bg_BG']['BBCodeParser']['ITALICEXAMPLE'] = 'Наклонено';
$lang['bg_BG']['BBCodeParser']['LINK'] = 'Уебсайт връзка';
$lang['bg_BG']['BBCodeParser']['LINKDESCRIPTION'] = 'Връзка към друг уебсайт или URL';
$lang['bg_BG']['BBCodeParser']['STRUCK'] = 'Задраскан Текст';
$lang['bg_BG']['BBCodeParser']['STRUCKEXAMPLE'] = 'Задраскай';
$lang['bg_BG']['BBCodeParser']['UNDERLINE'] = 'Подчертан текст';
$lang['bg_BG']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Подчертано';
$lang['bg_BG']['BBCodeParser']['UNORDERED'] = 'Неподреден лист';
$lang['bg_BG']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Неподреден лист';
$lang['bg_BG']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'Неподреден предмет 1';
$lang['bg_BG']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Вие сменихте вашата парола за';
$lang['bg_BG']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Вече можете да ползвате следните данни за вход:';
$lang['bg_BG']['ChangePasswordEmail.ss']['EMAIL'] = 'Email';
$lang['bg_BG']['ChangePasswordEmail.ss']['HELLO'] = 'Здравей!';
$lang['bg_BG']['ChangePasswordEmail.ss']['PASSWORD'] = 'Парола';
$lang['bg_BG']['ComplexTableField.ss']['ADDITEM'] = 'Добави %s';
$lang['bg_BG']['ComplexTableField.ss']['CSVEXPORT'] = 'Изнеси на CSV';
$lang['bg_BG']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Нито един от елементите не беше открит';
$lang['bg_BG']['ComplexTableField.ss']['SORTASC'] = 'Възходящ';
$lang['bg_BG']['ComplexTableField.ss']['SORTDESC'] = 'Низходящ';
$lang['bg_BG']['ComplexTableField']['SUCCESSADD'] = 'Добавено %s %s %s';
$lang['bg_BG']['ComplexTableField']['SUCCESSEDIT'] = 'Съхранено %s %s %s';
$lang['bg_BG']['ComplexTableField_popup.ss']['NEXT'] = 'Следващо';
$lang['bg_BG']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Предишно';
$lang['bg_BG']['CompositeDateField']['DAY'] = 'Ден';
$lang['bg_BG']['CompositeDateField']['DAYJS'] = 'ден';
$lang['bg_BG']['CompositeDateField']['MONTH'] = 'Месец';
$lang['bg_BG']['CompositeDateField']['MONTHJS'] = 'месец';
$lang['bg_BG']['CompositeDateField']['VALIDATIONJS1'] = 'Моля осигурете се че сте нагласили';
$lang['bg_BG']['CompositeDateField']['VALIDATIONJS2'] = 'правилно.';
$lang['bg_BG']['CompositeDateField']['YEARJS'] = 'година';
$lang['bg_BG']['ConfirmedPasswordField']['ATLEAST'] = 'Паролите трябва да бъдат поне %s символа дълги.';
$lang['bg_BG']['ConfirmedPasswordField']['BETWEEN'] = 'Паролите трябва да бъдат от %s до %s символа дълги.';
$lang['bg_BG']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Паролите трябва да съвпадат.';
$lang['bg_BG']['ConfirmedPasswordField']['LEASTONE'] = 'Паролите трябва да съдържат поне една цифра и една буква.';
$lang['bg_BG']['ConfirmedPasswordField']['MAXIMUM'] = 'Паролите може да бъдат най-много %s символа дълги.';
$lang['bg_BG']['ConfirmedPasswordField']['NOEMPTY'] = 'Паролите неможе да бъдат празни.';
$lang['bg_BG']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Трябва да влезете с вашата CMS парола, за да видите черновата или архивираното съдържание. <a href="%s">Натиснете тук, за да се върнете обратно към публикувания сайт.</a>';
$lang['bg_BG']['Controller']['FILE'] = 'Файл';
$lang['bg_BG']['Controller']['IMAGE'] = 'Изображение';
$lang['bg_BG']['CreditCardField']['FIRST'] = 'първи';
$lang['bg_BG']['CreditCardField']['FOURTH'] = 'четвърти';
$lang['bg_BG']['CreditCardField']['SECOND'] = 'втори';
$lang['bg_BG']['CreditCardField']['THIRD'] = 'трети';
$lang['bg_BG']['CreditCardField']['VALIDATIONJS1'] = 'Моля подсигурете се че сте въвели правилно';
$lang['bg_BG']['CreditCardField']['VALIDATIONJS2'] = 'номера на кредитната карта';
$lang['bg_BG']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['bg_BG']['CurrencyField']['VALIDATIONJS'] = 'Моля въведете валидна валута.';
$lang['bg_BG']['Date']['DAY'] = 'ден';
$lang['bg_BG']['Date']['DAYS'] = 'дни';
$lang['bg_BG']['Date']['HOUR'] = 'час';
$lang['bg_BG']['Date']['HOURS'] = 'часове';
$lang['bg_BG']['Date']['MIN'] = 'минута';
$lang['bg_BG']['Date']['MINS'] = 'минути';
$lang['bg_BG']['Date']['MONTH'] = 'месец';
$lang['bg_BG']['Date']['MONTHS'] = 'месеци';
$lang['bg_BG']['Date']['SEC'] = 'секунда';
$lang['bg_BG']['Date']['SECS'] = 'секунди';
$lang['bg_BG']['Date']['YEAR'] = 'година';
$lang['bg_BG']['Date']['YEARS'] = 'години';
$lang['bg_BG']['DateField']['NOTSET'] = 'Не нагласено';
$lang['bg_BG']['DateField']['TODAY'] = 'днес';
$lang['bg_BG']['DateField']['VALIDATIONJS'] = 'Моля въведете правилен формат за дата (ДД/ММ/ГГГГ).';
$lang['bg_BG']['DateField']['VALIDDATEFORMAT'] = 'Моля, въведете правилен формат на дата (ДД/ММ/ГГГГ).';
$lang['bg_BG']['DMYDateField']['VALIDDATEFORMAT'] = 'Моля въведете правилен формат за дата (ДД-ММ-ГГГГ).';
$lang['bg_BG']['DropdownField']['CHOOSE'] = '(Избери)';
$lang['bg_BG']['EmailField']['VALIDATION'] = 'Моля, въведете email адрес';
$lang['bg_BG']['EmailField']['VALIDATIONJS'] = 'Моля въведете мейл адрес.';
$lang['bg_BG']['ErrorPage']['400'] = '400 - Лошо Поискване';
$lang['bg_BG']['ErrorPage']['401'] = '401 - Неауторизирано';
$lang['bg_BG']['ErrorPage']['403'] = '403 - Забранено';
$lang['bg_BG']['ErrorPage']['404'] = '404 - Не Намерено';
$lang['bg_BG']['ErrorPage']['405'] = '405 - Не позволен Метод';
$lang['bg_BG']['ErrorPage']['406'] = '406 - Не е допустимо';
$lang['bg_BG']['ErrorPage']['407'] = '407 - Нужна е Proxy Автентификация';
$lang['bg_BG']['ErrorPage']['408'] = '408 - Времето за искане изтече';
$lang['bg_BG']['ErrorPage']['409'] = '409 - Конфликт';
$lang['bg_BG']['ErrorPage']['410'] = '410 - Изчезнал';
$lang['bg_BG']['ErrorPage']['411'] = '411 - Задължена е Дължина';
$lang['bg_BG']['ErrorPage']['412'] = '412 - Предпоставката се провали';
$lang['bg_BG']['ErrorPage']['413'] = '413 - Поисканото лице е прекалено дълго';
$lang['bg_BG']['ErrorPage']['414'] = '414 - Поисканото-URI е прекалено дълго';
$lang['bg_BG']['ErrorPage']['415'] = '415 - Неподдържан тип медия';
$lang['bg_BG']['ErrorPage']['416'] = '416 - Поисканият обсег не е удоволетворен';
$lang['bg_BG']['ErrorPage']['417'] = '417 - Очакването се провали';
$lang['bg_BG']['ErrorPage']['500'] = '500 - Вътрешна грешка при сървъра';
$lang['bg_BG']['ErrorPage']['501'] = '501 - Не реализирано';
$lang['bg_BG']['ErrorPage']['502'] = '502 - Лош Gateway';
$lang['bg_BG']['ErrorPage']['503'] = '503 - Услугата не е налична';
$lang['bg_BG']['ErrorPage']['504'] = '504 - Gateway времето изтече';
$lang['bg_BG']['ErrorPage']['505'] = '505 - HTTP Версия не се поддържа';
$lang['bg_BG']['ErrorPage']['CODE'] = 'Грешка в кода';
$lang['bg_BG']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Съжелявам, изглежда че се опитвате да влезните в страница която не съществува.</p><p>Моля проверете спелуването на адреса и опитайте отново. </p>';
$lang['bg_BG']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Не намерена страница';
$lang['bg_BG']['File']['NOFILESIZE'] = 'Размер на файла е нула байта.';
$lang['bg_BG']['Folder']['CREATED'] = 'Първо качени';
$lang['bg_BG']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Изтрий неизползвани миниатури';
$lang['bg_BG']['Folder']['DELSELECTED'] = 'Изтрий избраните файлове';
$lang['bg_BG']['Folder']['DETAILSTAB'] = 'Детайли';
$lang['bg_BG']['Folder']['FILENAME'] = 'Файл име';
$lang['bg_BG']['Folder']['FILESTAB'] = 'Файлове';
$lang['bg_BG']['Folder']['LASTEDITED'] = 'Последно променени';
$lang['bg_BG']['Folder']['TITLE'] = 'Заглавие';
$lang['bg_BG']['Folder']['TYPE'] = 'Вид';
$lang['bg_BG']['Folder']['UNUSEDFILESTAB'] = 'Неизползвани файлове';
$lang['bg_BG']['Folder']['UNUSEDFILESTITLE'] = 'Неизползвани файлове';
$lang['bg_BG']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Неизползвани миниатури';
$lang['bg_BG']['Folder']['UPLOADTAB'] = 'Качи ';
$lang['bg_BG']['Folder']['URL'] = 'URL';
$lang['bg_BG']['Folder']['VIEWASSET'] = 'Виж Актив';
$lang['bg_BG']['Folder']['VIEWEDITASSET'] = 'Виж/Промени Актив';
$lang['bg_BG']['ForgotPasswordEmail.ss']['HELLO'] = 'Здравей!';
$lang['bg_BG']['ForgotPasswordEmail.ss']['TEXT1'] = 'Ето вашият';
$lang['bg_BG']['ForgotPasswordEmail.ss']['TEXT2'] = 'адрес за рестартирване на парола';
$lang['bg_BG']['ForgotPasswordEmail.ss']['TEXT3'] = 'за';
$lang['bg_BG']['Form']['DATENOTSET'] = '(няма зададена дата)';
$lang['bg_BG']['Form']['FIELDISREQUIRED'] = 'нужно е %s';
$lang['bg_BG']['Form']['LANGAOTHER'] = 'Други езици';
$lang['bg_BG']['Form']['LANGAVAIL'] = 'Налични езици';
$lang['bg_BG']['Form']['NOTSET'] = '(не е зададено)';
$lang['bg_BG']['Form']['VALIDATIONALLDATEVALUES'] = 'Моля, подсигурете се, че сте въвели всички стойности за датата';
$lang['bg_BG']['Form']['VALIDATIONBANKACC'] = 'Моля, въведете валиден банков номер';
$lang['bg_BG']['Form']['VALIDATIONCREDITNUMBER'] = 'Моля, проверете дали сте въвели %s правилно номера на кредитната карта.';
$lang['bg_BG']['Form']['VALIDATIONFAILED'] = 'Валидацията неуспешна';
$lang['bg_BG']['Form']['VALIDATIONNOTUNIQUE'] = 'Въведената стойност не е уникална';
$lang['bg_BG']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Паролите не съвпадат';
$lang['bg_BG']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Паролите не може да бъдат празни';
$lang['bg_BG']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Паролите трябва да съдържат поне една цифра и една буква.';
$lang['bg_BG']['Form']['VALIDATOR'] = 'Валидатор';
$lang['bg_BG']['Form']['VALIDCURRENCY'] = 'Моля, въведете валидна валута.';
$lang['bg_BG']['FormField']['NONE'] = 'никой';
$lang['bg_BG']['GhostPage']['NOLINKED'] = 'Тази призрачна страница няма препратка към други страници.';
$lang['bg_BG']['GSTNumberField']['VALIDATION'] = 'Моля, въведете валиден GST Номер';
$lang['bg_BG']['GSTNumberField']['VALIDATIONJS'] = 'Моля въведете валиден GST Номер';
$lang['bg_BG']['HtmlEditorField']['ALTTEXT'] = 'Описание';
$lang['bg_BG']['HtmlEditorField']['ANCHOR'] = 'Вкарай/промени котва';
$lang['bg_BG']['HtmlEditorField']['ANCHORVALUE'] = 'Котва';
$lang['bg_BG']['HtmlEditorField']['BULLETLIST'] = 'Списък с точки';
$lang['bg_BG']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Центрирай';
$lang['bg_BG']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Равностранно';
$lang['bg_BG']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Подравни наляво';
$lang['bg_BG']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Подравни надясно';
$lang['bg_BG']['HtmlEditorField']['BUTTONBOLD'] = 'Удебелен (Ctrl+B)';
$lang['bg_BG']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Въведи Flash';
$lang['bg_BG']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Въведи изображение';
$lang['bg_BG']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Вмъкни препратка';
$lang['bg_BG']['HtmlEditorField']['BUTTONITALIC'] = 'Наклонен (Ctrl+I)';
$lang['bg_BG']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Премахни препратка';
$lang['bg_BG']['HtmlEditorField']['BUTTONSTRIKE'] = 'задраскан';
$lang['bg_BG']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Подчертан (Ctrl+U)';
$lang['bg_BG']['HtmlEditorField']['CHARMAP'] = 'Въведи символ';
$lang['bg_BG']['HtmlEditorField']['CLOSE'] = 'затвори';
$lang['bg_BG']['HtmlEditorField']['COPY'] = 'Копирай (Ctrl+C)';
$lang['bg_BG']['HtmlEditorField']['CREATEFOLDER'] = 'създай папка';
$lang['bg_BG']['HtmlEditorField']['CSSCLASS'] = 'Подравняване / стил';
$lang['bg_BG']['HtmlEditorField']['CSSCLASSCENTER'] = 'Центрирано';
$lang['bg_BG']['HtmlEditorField']['CSSCLASSLEFT'] = 'В ляво, с текст който да се нанася около него';
$lang['bg_BG']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'В ляво, самостоятелно.';
$lang['bg_BG']['HtmlEditorField']['CSSCLASSRIGHT'] = 'В дясно, с текст който да се нанася около него';
$lang['bg_BG']['HtmlEditorField']['CUT'] = 'Изрежи (Ctrl+X)';
$lang['bg_BG']['HtmlEditorField']['DELETECOL'] = 'Изтрий колона';
$lang['bg_BG']['HtmlEditorField']['DELETEROW'] = 'Изтрий ред';
$lang['bg_BG']['HtmlEditorField']['EDITCODE'] = 'Промени HTML Код';
$lang['bg_BG']['HtmlEditorField']['EMAIL'] = 'email адрес';
$lang['bg_BG']['HtmlEditorField']['FILE'] = 'Файл';
$lang['bg_BG']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['bg_BG']['HtmlEditorField']['FOLDER'] = 'Папка';
$lang['bg_BG']['HtmlEditorField']['FOLDERCANCEL'] = 'отмени';
$lang['bg_BG']['HtmlEditorField']['FORMATADDR'] = 'Адрес';
$lang['bg_BG']['HtmlEditorField']['FORMATH1'] = 'Рубрика 1';
$lang['bg_BG']['HtmlEditorField']['FORMATH2'] = 'Рубрика 2';
$lang['bg_BG']['HtmlEditorField']['FORMATH3'] = 'Рубрика 3';
$lang['bg_BG']['HtmlEditorField']['FORMATH4'] = 'Рубрика 4';
$lang['bg_BG']['HtmlEditorField']['FORMATH5'] = 'Рубрика 5';
$lang['bg_BG']['HtmlEditorField']['FORMATH6'] = 'Рубрика 6';
$lang['bg_BG']['HtmlEditorField']['FORMATP'] = 'Параграф';
$lang['bg_BG']['HtmlEditorField']['HR'] = 'Въведи хоризонтална линия';
$lang['bg_BG']['HtmlEditorField']['IMAGE'] = 'Изображение';
$lang['bg_BG']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Размери';
$lang['bg_BG']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Височина';
$lang['bg_BG']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Широчина';
$lang['bg_BG']['HtmlEditorField']['INDENT'] = 'Увеличи отстояние';
$lang['bg_BG']['HtmlEditorField']['INSERTCOLAFTER'] = 'Вмъкни колона след';
$lang['bg_BG']['HtmlEditorField']['INSERTCOLBEF'] = 'Вмъкни колона преди';
$lang['bg_BG']['HtmlEditorField']['INSERTROWAFTER'] = 'Вмъкни ред след';
$lang['bg_BG']['HtmlEditorField']['INSERTROWBEF'] = 'Вмъкни ред преди';
$lang['bg_BG']['HtmlEditorField']['INSERTTABLE'] = 'Въведи таблица';
$lang['bg_BG']['HtmlEditorField']['LINK'] = 'Връзка';
$lang['bg_BG']['HtmlEditorField']['LINKANCHOR'] = 'Котва на тази страница';
$lang['bg_BG']['HtmlEditorField']['LINKDESCR'] = 'Описание на препратка';
$lang['bg_BG']['HtmlEditorField']['LINKEMAIL'] = 'email адрес';
$lang['bg_BG']['HtmlEditorField']['LINKEXTERNAL'] = 'Друг уебсайт';
$lang['bg_BG']['HtmlEditorField']['LINKFILE'] = 'Свали файл';
$lang['bg_BG']['HtmlEditorField']['LINKINTERNAL'] = 'Страница в сайта';
$lang['bg_BG']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Да се отвори ли препратката в нов прозорец?';
$lang['bg_BG']['HtmlEditorField']['LINKTO'] = 'Препратка към';
$lang['bg_BG']['HtmlEditorField']['OK'] = 'добре';
$lang['bg_BG']['HtmlEditorField']['OL'] = 'Номериран лист';
$lang['bg_BG']['HtmlEditorField']['OUTDENT'] = 'Намали отстояние';
$lang['bg_BG']['HtmlEditorField']['PAGE'] = 'Страница';
$lang['bg_BG']['HtmlEditorField']['PASTE'] = 'Постави (Ctrl+V)';
$lang['bg_BG']['HtmlEditorField']['PASTETEXT'] = 'Залепи обикновен текст';
$lang['bg_BG']['HtmlEditorField']['PASTEWORD'] = 'Залепи от Word';
$lang['bg_BG']['HtmlEditorField']['REDO'] = 'Направи отново (Ctrl+Y)';
$lang['bg_BG']['HtmlEditorField']['SELECTALL'] = 'Избери Всички (Ctrl+A)';
$lang['bg_BG']['HtmlEditorField']['UNDO'] = 'Върни обратно (Ctrl+Z)';
$lang['bg_BG']['HtmlEditorField']['UNLINK'] = 'Премахни перпратка';
$lang['bg_BG']['HtmlEditorField']['UPLOAD'] = 'качи';
$lang['bg_BG']['HtmlEditorField']['URL'] = 'URL';
$lang['bg_BG']['HtmlEditorField']['VISUALAID'] = 'Покажи/Скрий указанията';
$lang['bg_BG']['ImageField']['NOTEADDIMAGES'] = 'Можете да добавяте изображения след като сте съхранили веднъж.';
$lang['bg_BG']['ImageUplaoder']['ONEFROMFILESTORE'] = 'С някое от файловия архив';
$lang['bg_BG']['ImageUploader']['ATTACH'] = 'Прикачи %s';
$lang['bg_BG']['ImageUploader']['DELETE'] = 'Изтрий %s';
$lang['bg_BG']['ImageUploader']['FROMCOMPUTER'] = 'От вашия компютър ';
$lang['bg_BG']['ImageUploader']['FROMFILESTORE'] = 'От архива с файлове';
$lang['bg_BG']['ImageUploader']['ONEFROMCOMPUTER'] = 'С някое от вашият комютър';
$lang['bg_BG']['ImageUploader']['REALLYDELETE'] = 'Наистина ли искате да премахнете този %s?';
$lang['bg_BG']['ImageUploader']['REPLACE'] = 'Замени %s';
$lang['bg_BG']['Image_iframe.ss']['TITLE'] = 'Качване на изображението Iрамка';
$lang['bg_BG']['Member']['ADDRESS'] = 'Адрес';
$lang['bg_BG']['Member']['BUTTONCHANGEPASSWORD'] = 'Променете паролата';
$lang['bg_BG']['Member']['BUTTONLOGIN'] = 'Влез';
$lang['bg_BG']['Member']['BUTTONLOGINOTHER'] = 'Влез като някой друг';
$lang['bg_BG']['Member']['BUTTONLOSTPASSWORD'] = 'Загубих си паролата';
$lang['bg_BG']['Member']['CONFIRMNEWPASSWORD'] = 'Потвърдете новата парола';
$lang['bg_BG']['Member']['CONFIRMPASSWORD'] = 'Потвърдете паролата';
$lang['bg_BG']['Member']['CONTACTINFO'] = 'Информация за контакт';
$lang['bg_BG']['Member']['EMAIL'] = 'Еmail';
$lang['bg_BG']['Member']['EMAILSIGNUPINTRO1'] = 'Благодарим ви, че се записахте като нов член, вашите данни са показани по-долу за бъдеща справка.';
$lang['bg_BG']['Member']['EMAILSIGNUPINTRO2'] = 'Можете да влезете в уебсайта използвайки дадените по-долу данни ';
$lang['bg_BG']['Member']['EMAILSIGNUPSUBJECT'] = 'Благодарим ви, че се присъединихте!';
$lang['bg_BG']['Member']['ERRORLOCKEDOUT'] = 'Вашата сметка бе изключена временно защото имаше много неуспешни опити за влизане. Моля опитайте отново след 20 минути.';
$lang['bg_BG']['Member']['ERRORNEWPASSWORD'] = 'Въвели сте новата парола различно, моля опитайте пак';
$lang['bg_BG']['Member']['ERRORPASSWORDNOTMATCH'] = 'Вашата текуща парола не съвпада, моля опитайте пак';
$lang['bg_BG']['Member']['ERRORWRONGCRED'] = 'Това не изглежда да е правилен email адрес или парола. Моля опитайте отново.';
$lang['bg_BG']['Member']['FIRSTNAME'] = 'Име';
$lang['bg_BG']['Member']['GREETING'] = 'Добре дошли!';
$lang['bg_BG']['Member']['INTERFACELANG'] = 'Език';
$lang['bg_BG']['Member']['LOGGEDINAS'] = 'Вие сте влезнали като %s.';
$lang['bg_BG']['Member']['MOBILE'] = 'Мобилен телефон';
$lang['bg_BG']['Member']['NAME'] = 'Име';
$lang['bg_BG']['Member']['NEWPASSWORD'] = 'Нова парола';
$lang['bg_BG']['Member']['PASSWORD'] = 'Парола';
$lang['bg_BG']['Member']['PASSWORDCHANGED'] = 'Вашата парола е променена и е пратено копие на вашия email.';
$lang['bg_BG']['Member']['PERSONALDETAILS'] = 'Лични данни';
$lang['bg_BG']['Member']['PHONE'] = 'Домашен телефон';
$lang['bg_BG']['Member']['REMEMBERME'] = 'Запомни ме за следващия път?';
$lang['bg_BG']['Member']['SUBJECTPASSWORDCHANGED'] = 'Вашата парола беше променена';
$lang['bg_BG']['Member']['SUBJECTPASSWORDRESET'] = 'Връзка за изчистване на вашата парола';
$lang['bg_BG']['Member']['SURNAME'] = 'Фамилия';
$lang['bg_BG']['Member']['USERDETAILS'] = 'Потребителски данни';
$lang['bg_BG']['Member']['VALIDATIONMEMBEREXISTS'] = 'Вече съществува потребител с този email';
$lang['bg_BG']['Member']['WELCOMEBACK'] = 'Добре дошли отново, %s';
$lang['bg_BG']['Member']['YOUROLDPASSWORD'] = 'Вашата стара парола';
$lang['bg_BG']['MemberAuthenticator']['TITLE'] = 'email и парола';
$lang['bg_BG']['NumericField']['VALIDATION'] = '\'%s\' не е число, в това поле са позволени само числа';
$lang['bg_BG']['NumericField']['VALIDATIONJS'] = 'не е номер, само номера може да бъдат въведени тук';
$lang['bg_BG']['Permission']['FULLADMINRIGHTS'] = 'Пълни административни права';
$lang['bg_BG']['Permission']['PERMSDEFINED'] = 'Показаните разрешителни кодове са дефинирани';
$lang['bg_BG']['PhoneNumberField']['VALIDATION'] = 'Моля, въведете валиден телефонен номер';
$lang['bg_BG']['RedirectorPage']['HASBEENSETUP'] = 'Създадена е страница за пренасочване без да има накъде да се пренасочи.';
$lang['bg_BG']['RedirectorPage']['HEADER'] = 'Тази страница ще пренасочи потребители към друга страница';
$lang['bg_BG']['RedirectorPage']['OTHERURL'] = 'Друг уебсайт URL';
$lang['bg_BG']['RedirectorPage']['REDIRECTTO'] = 'Пренасочи към';
$lang['bg_BG']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Друг уебсайт';
$lang['bg_BG']['RedirectorPage']['REDIRECTTOPAGE'] = 'Страница на вашият уебсайт';
$lang['bg_BG']['RedirectorPage']['YOURPAGE'] = 'Страница на вашият уебсайт';
$lang['bg_BG']['RelationComplexTableField.ss']['ADD'] = 'Добави';
$lang['bg_BG']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Изнеси на CSV';
$lang['bg_BG']['RelationComplexTableField.ss']['DELETE'] = 'изтрий';
$lang['bg_BG']['RelationComplexTableField.ss']['EDIT'] = 'промени';
$lang['bg_BG']['RelationComplexTableField.ss']['NOTFOUND'] = 'Няма намерени предмети';
$lang['bg_BG']['RelationComplexTableField.ss']['SHOW'] = 'покажи';
$lang['bg_BG']['SearchForm']['GO'] = 'Давай';
$lang['bg_BG']['SearchForm']['SEARCH'] = 'Търси';
$lang['bg_BG']['Security']['ALREADYLOGGEDIN'] = 'Вие нямате достъп до тази страница. Ако имате друг акаунт, с който може да влезете в тази страница, въведете го по-долу.';
$lang['bg_BG']['Security']['BUTTONSEND'] = 'Пратете ми линка за промяна на паролата';
$lang['bg_BG']['Security']['CHANGEPASSWORDBELOW'] = 'Можете да смените вашата парола по-долу.';
$lang['bg_BG']['Security']['CHANGEPASSWORDHEADER'] = 'Сменете вашата парола';
$lang['bg_BG']['Security']['EMAIL'] = 'Мейл:';
$lang['bg_BG']['Security']['ENCDISABLED1'] = 'Дезактивирана енкриптацията на пароли!';
$lang['bg_BG']['Security']['ENCDISABLED2'] = 'За да енкриптирате вашите пароли променете вашите опций на паролите добавяйки';
$lang['bg_BG']['Security']['ENCDISABLED3'] = 'към mysite/_config.php';
$lang['bg_BG']['Security']['ENCRYPT'] = 'Енкриптиране на всички пароли';
$lang['bg_BG']['Security']['ENCRYPTEDMEMBERS'] = 'Енкриптирани данни за потребител &quot;';
$lang['bg_BG']['Security']['ENCRYPTWITH'] = 'Паролите ще бъдат енкриптирани използвайки &quot;%s&quot; алгоритъм';
$lang['bg_BG']['Security']['ENCRYPTWITHOUTSALT'] = 'без използването на сол за повишаване на сигурността.';
$lang['bg_BG']['Security']['ENCRYPTWITHSALT'] = 'с използването на сол за повишаване на сигурността. ';
$lang['bg_BG']['Security']['ENTERNEWPASSWORD'] = 'Моля, въведете нова парола.';
$lang['bg_BG']['Security']['ERRORPASSWORDPERMISSION'] = 'Трябва да сте влезли, за да можете да промените вашата парола!';
$lang['bg_BG']['Security']['ID'] = 'ID:';
$lang['bg_BG']['Security']['IPADDRESSES'] = 'IP Адреси';
$lang['bg_BG']['Security']['LOGGEDOUT'] = 'Вие излязохте. Ако искате да влезнете отново, въведете вашите данни по-долу.';
$lang['bg_BG']['Security']['LOGIN'] = 'Влезте в системата';
$lang['bg_BG']['Security']['LOSTPASSWORDHEADER'] = 'Забравена парола';
$lang['bg_BG']['Security']['NOTEPAGESECURED'] = 'Тази страница е защитена. Вкарайте вашите данни по-долу и ще ви препратим по-нататък.';
$lang['bg_BG']['Security']['NOTERESETPASSWORD'] = 'Въведете вашият email адрес и ще ви изпратим линк с който ще можете да смените паролата си';
$lang['bg_BG']['Security']['NOTHINGTOENCRYPT1'] = 'Няма пароли за енкриптиране';
$lang['bg_BG']['Security']['NOTHINGTOENCRYPT2'] = 'Няма потребители с чиста текстова парола която може да бъде енкриптирана!';
$lang['bg_BG']['Security']['PASSWORDSENTHEADER'] = 'Линк за смяна на паролата е изпратен на \'%s\'';
$lang['bg_BG']['Security']['PASSWORDSENTTEXT'] = 'Благодарим ви! Линка за смяна на паролота беше изпратен на \'%s\'.';
$lang['bg_BG']['Security']['PERMFAILURE'] = 'Тази страница е осигурена нужни са ви администраторски права за да я видите. Въведете вашите данни по-долу.';
$lang['bg_BG']['SecurityAdmin']['ADVANCEDONLY'] = 'Тази секция е само за напреднали потребители. Вижте <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">тази страница</a> за повече информация.';
$lang['bg_BG']['SecurityAdmin']['CODE'] = 'Код';
$lang['bg_BG']['SecurityAdmin']['GROUPNAME'] = 'Име на група';
$lang['bg_BG']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Можете да ограничите тази група на специфичен IP обсег. Въведете 1 обсег на линия. Може да бъдат въведени IP адрес по следния начин: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Ако въведете един или повече IP адреси тук, потребителите ще имат правата на тази група само когато се впишат използвайки някои от IP адресите посочени тук. Това няма да предотврати потребителите да се вписват. Това е защото същият потребител може да има права да се вписва и да има достъп до определени места в системата без да има някакви IP ограничения.';
$lang['bg_BG']['SecurityAdmin']['MEMBERS'] = 'Потребители';
$lang['bg_BG']['SecurityAdmin']['OPTIONALID'] = 'Опционално ID';
$lang['bg_BG']['SecurityAdmin']['PERMISSIONS'] = 'Разрешения';
$lang['bg_BG']['SecurityAdmin']['VIEWUSER'] = 'Виж Потребител';
$lang['bg_BG']['SimpleImageField']['NOUPLOAD'] = 'Няма качени изображения';
$lang['bg_BG']['SiteTree']['ACCESSANYONE'] = 'Всекиго';
$lang['bg_BG']['SiteTree']['ACCESSHEADER'] = 'Кой има достъп до тази страница на моят сайт?';
$lang['bg_BG']['SiteTree']['ACCESSLOGGEDIN'] = 'Влезнали потребители';
$lang['bg_BG']['SiteTree']['ACCESSONLYTHESE'] = 'Само тези хора (изберете от списъка)';
$lang['bg_BG']['SiteTree']['ADDEDTODRAFT'] = 'Добавено към черновата на сайта';
$lang['bg_BG']['SiteTree']['ALLOWCOMMENTS'] = 'Разрешавате ли коментари на тази страница?';
$lang['bg_BG']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Това съдържание също така се появява на виртуалните страници в %s секции.';
$lang['bg_BG']['SiteTree']['BUTTONCANCELDRAFT'] = 'Отмени промените в черновата';
$lang['bg_BG']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Изтрий черновата и отиди на текущата публикувана страница';
$lang['bg_BG']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Съхрани и Публикувай';
$lang['bg_BG']['SiteTree']['BUTTONUNPUBLISH'] = 'Премахни от публикация';
$lang['bg_BG']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Премахни тази страница от публикувания сайт';
$lang['bg_BG']['SiteTree']['CHANGETO'] = 'Смени на';
$lang['bg_BG']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Може да запълните тази страница със собствено съдържание, или да я изтриете и да създадете ваши собствени страници.<br /></p>';
$lang['bg_BG']['SiteTree']['DEFAULTABOUTTITLE'] = 'За Нас';
$lang['bg_BG']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Може да запълните тази страница със собствено съдържание, или да я изтриете и да създадете ваши собствени страници.<br /></p>';
$lang['bg_BG']['SiteTree']['DEFAULTCONTACTTITLE'] = 'За Контакт';
$lang['bg_BG']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Добре дошли в SilverStripe! Това е началната страница подразбиране. Може да промените тази страница отваряйки a href="admin/">CMS системата</a>. Сега можете да влезните в <a href="http://doc.silverstripe.com">документацията на 	
разработчика</a>, или започнете <a href="http://doc.silverstripe.com/doku.php?id=tutorials">уроците.</a></p';
$lang['bg_BG']['SiteTree']['DEFAULTHOMETITLE'] = 'Начало';
$lang['bg_BG']['SiteTree']['EDITANYONE'] = 'Всеки, който може да влезе в CMS';
$lang['bg_BG']['SiteTree']['EDITHEADER'] = 'Кой може да променя вътре в CMS?';
$lang['bg_BG']['SiteTree']['EDITONLYTHESE'] = 'Само тези хора (изберете от списъка)';
$lang['bg_BG']['SiteTree']['GROUP'] = 'Група';
$lang['bg_BG']['SiteTree']['HASBROKENLINKS'] = 'Тази страница съдържа невалидни препратки.';
$lang['bg_BG']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Домейн(и)';
$lang['bg_BG']['SiteTree']['HTMLEDITORTITLE'] = 'Съдържание';
$lang['bg_BG']['SiteTree']['MENUTITLE'] = 'Етикет на навигация';
$lang['bg_BG']['SiteTree']['METADESC'] = 'Описание';
$lang['bg_BG']['SiteTree']['METAEXTRA'] = 'Собствени етикети';
$lang['bg_BG']['SiteTree']['METAHEADER'] = 'Етикети за търсачката';
$lang['bg_BG']['SiteTree']['METAKEYWORDS'] = 'Ключови думи';
$lang['bg_BG']['SiteTree']['METATITLE'] = 'Заглавие';
$lang['bg_BG']['SiteTree']['MODIFIEDONDRAFT'] = 'Променено в черновата на сайта';
$lang['bg_BG']['SiteTree']['NOBACKLINKS'] = 'Към тази страница няма препратки от никакви други страници.';
$lang['bg_BG']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Използвайте тази страница като "начална страница" за следните домейни: (раздетеле различните домейни със запетайки)';
$lang['bg_BG']['SiteTree']['PAGESLINKING'] = 'Следните страници препращат към тази страница:';
$lang['bg_BG']['SiteTree']['PAGETITLE'] = 'Име на страница';
$lang['bg_BG']['SiteTree']['PAGETYPE'] = 'Вид страница';
$lang['bg_BG']['SiteTree']['REMOVEDFROMDRAFT'] = 'Премахнато от черновата на сайта';
$lang['bg_BG']['SiteTree']['SHOWINMENUS'] = 'Покажи в менютата?';
$lang['bg_BG']['SiteTree']['SHOWINSEARCH'] = 'Покажи в търсене?';
$lang['bg_BG']['SiteTree']['TABACCESS'] = 'Достъп';
$lang['bg_BG']['SiteTree']['TABBACKLINKS'] = 'Задни линкове';
$lang['bg_BG']['SiteTree']['TABBEHAVIOUR'] = 'Поведение';
$lang['bg_BG']['SiteTree']['TABCONTENT'] = 'Съдържание';
$lang['bg_BG']['SiteTree']['TABMAIN'] = 'Главно';
$lang['bg_BG']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['bg_BG']['SiteTree']['TABREPORTS'] = 'Доклади';
$lang['bg_BG']['SiteTree']['TODOHELP'] = '<p>Можете да използвате това за да водите записки на какво трябва да се направи със съдържанието на сайта ви. За да видите всичките страници с информация за довършване, отворете \'Сайт Доклади\' в ляво и изберете \'За Довършване\'</p>';
$lang['bg_BG']['SiteTree']['TOPLEVEL'] = 'Съдържание на сайта (Top level)';
$lang['bg_BG']['SiteTree']['URL'] = 'URL';
$lang['bg_BG']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Друга страница изполва този URL. URL-то трябва да е уникално за всяка страница';
$lang['bg_BG']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL адреси могат да съдържат единствено букви, цифри и тирета.';
$lang['bg_BG']['TableField']['ISREQUIRED'] = 'В %s \'%s\' е нужно.';
$lang['bg_BG']['TableField.ss']['ADD'] = 'Добави нов ред';
$lang['bg_BG']['TableField.ss']['CSVEXPORT'] = 'Експортирай в CSV';
$lang['bg_BG']['TableListField']['CSVEXPORT'] = 'Експортирай на CSV';
$lang['bg_BG']['TableListField']['PRINT'] = 'Принтирай';
$lang['bg_BG']['TableListField_PageControls.ss']['DISPLAYING'] = 'Показани';
$lang['bg_BG']['TableListField_PageControls.ss']['OF'] = 'от';
$lang['bg_BG']['TableListField_PageControls.ss']['TO'] = 'за';
$lang['bg_BG']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Преглед на първото';
$lang['bg_BG']['TableListField_PageControls.ss']['VIEWLAST'] = 'Преглед на последното';
$lang['bg_BG']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Преглед на следващото';
$lang['bg_BG']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Преглед на предишното';
$lang['bg_BG']['ToggleCompositeField.ss']['HIDE'] = 'Скрий';
$lang['bg_BG']['ToggleCompositeField.ss']['SHOW'] = 'Покажи';
$lang['bg_BG']['ToggleField']['LESS'] = 'по-малко';
$lang['bg_BG']['ToggleField']['MORE'] = 'повече';
$lang['bg_BG']['Translatable']['CREATE'] = 'Създай нов превод';
$lang['bg_BG']['Translatable']['CREATEBUTTON'] = 'Създай';
$lang['bg_BG']['Translatable']['EXISTING'] = 'Съществуващи преводи:';
$lang['bg_BG']['Translatable']['NEWLANGUAGE'] = 'Нов език';
$lang['bg_BG']['Translatable']['TRANSLATIONS'] = 'Преводи';
$lang['bg_BG']['TreeSelectorField']['CANCEL'] = 'отмени';
$lang['bg_BG']['TreeSelectorField']['SAVE'] = 'съхрани';
$lang['bg_BG']['TypeDropdown']['NONE'] = 'Никакъв';
$lang['bg_BG']['VirtualPage']['CHOOSE'] = 'Изберете страница към която да обвържете';
$lang['bg_BG']['VirtualPage']['EDITCONTENT'] = 'натиснете тук за да промените съдържанието';
$lang['bg_BG']['VirtualPage']['HEADER'] = 'Това е виртуална страница';

?>