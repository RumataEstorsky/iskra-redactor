<?php defined('SYSPATH') or die('No direct script access.');

#
# Подробнее по доументации см. на официальном сайте разработчика "Redactor"
# http://imperavi.com/redactor/docs/

return array(
    
    // air (true или false)
    // Включение режима AIR. По умолчанию false.
    'air' => FALSE,
    
    // focus (true или false)
    // Устанавливает фокус на конкретный Редактор, особенно полезно, когда на странице несколько Редакторов. По умолчанию false.
    'focus' => FALSE,
    
    // resize (true или false)
    // Включение и отключение изменения высоты Редактора. По умолчанию false.
    'resize' => FALSE,
    
    // toolbar (Возможные значения: false, main, mini) по умолчанию "main"
    // Указание, какой именно тулбар должен отобразиться в этом Редакторе. 
    'toolbar' => 'main',
    
    // imageUpload например: upload.php
    // Путь к файлу загрузки изображений.
    'imageUpload' => '/image/upload/',

    // Путь для сохранения изображений на диске
    'imageSaveDir' => '/home/v01/projects/starateli/public/images/',

    // Путь для доступа к изображениям с сервера
    'imageUrlPrefix' => '/images/',
    
    // Максимальный допустимый размер файла для загрузки (в байтах)
    'imageMaxSize' => 1024 * 1024,
    
    // imageUploadFunction function
    // 	Функция вызываемая после загрузки изображений.
    'imageUploadFunction' => '',
    
    // handler по умолчанию false
    // Путь к исполняемому скрипту, например: "/tests/typo.php" - в этом случае скрипту
    // передается переменная $_POST['redactor'], обрабатывается на сервере и передается обратно в редактор
    'handler' => '',
    
    // lang по умолчанию "ru" 	Язык интерфейса редактора, возможные значения: ru, en, fr, ua, pt_br, pl
    'lang' => 'ru',
    
    // autosave по умолчанию false 	Включение автосохранения. Для ключения необходимо указать путь к файлу,
    // который будет принимать данные редактора. Например: http://site.name/save.php
    'autosave' => FALSE,
    
    // interval по умолчанию "60"
    // Интервал автосохранения в секундах.
    'interval' => 60,
    
    // autoclear по умолчанию true
    // Включение автоматической очистки от мусорных тегов и стилей MS Word и прочих программ, при вставке в Редактор.
    'autoclear' => TRUE,
    
    // autoformat по умолчанию true
    // Если включено Редактор автоматически разбивает текст на параграфы.
    'autoformat' => TRUE,
    
    // overlay по умолчанию true
    // Отображения затемненного слоя при вызове модальных окон Редактора.
    'overlay' => TRUE,
    
    // removeClasses по умолчанию false
    // Удаление классов у тегов в тексте
    'removeClasses' => FALSE,
    
    // removeStyles по умолчанию false 	Удаление стилей у тегов в тексте.
    'removeStyles' => FALSE,
    
    // convertLinks по умолчанию true 	Автоматическое преобразование ссылок в тексте редактора.
    'convertLinks' => TRUE,
    
    // fileUpload 	Путь к обработчику загружаемых файлов. Например: "/tests/file.php"
    'fileUpload' => '/doc/upload/',
    
    // fileDownload 	Путь к обработчику скачиваемых файлов. Например: "/tests/file.php?file=".
    // GET переменная "file=" - обязательно в конце запроса, т.к. в конец запроса автоматически подставится ID файла.
    'fileDownload' => '/doc/download/',

    // Путь для сохранения файлов на диске
    'fileSaveDir' => '/home/v01/projects/starateli/public/files/',
    
    // Максимальный допустимый размер файла для загрузки (в байтах)
    'fileMaxSize' => 1024 * 1024,
    
    // Допустимые для загрузки расширения файлов
    'fileExtensions' => array('pdf', 'doc', 'docx', 'xls', 'rtf', 'ods', 'odt'),
    
    // fileDelete
    // Путь к обработчику удаления файлов. Например: "/tests/file.php?delete=". GET переменная "delete=" - обязательно в конце запроса, т.к. в конец запроса автоматически подставится ID файла.
    'fileDelete' => '/doc/delete/',
    
    // fileUploadFunction function
    // Функция вызываемая после загрузки файлов.    
    'fileUploadFunction' => '',
    
);