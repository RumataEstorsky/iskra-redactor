<?php

class Controller_Image extends Controller {

    private $config;

    public function before() {
        parent::before();
        $this->config = Kohana::$config->load('iskra-redactor')->as_array();
    }

    public function action_upload() {
        $dir = $this->config['imageSaveDir'];

        if(!isset($_FILES['file']['tmp_name'])) {
            return;
        }
        
        $file_name = $_FILES['file']['tmp_name'];
        
        // Проверяем, действительно ли это картинка нжного нам формата
        list($width, $height, $type, $attr) = getimagesize($file_name);

        if (!($type == IMAGETYPE_JPEG || $type == IMAGETYPE_GIF || $type == IMAGETYPE_PNG)) {
            echo "Неподдерживаемый формат картинки, допустимы файлы форматов: JPEG/GIF/PNG";
            return;
        }
        // Не пропускаем большие файлы
        if (filesize($file_name) > $this->config['imageMaxSize'] ) {
            echo "Максимальный допустимый размер изображения для загрузки составляет " . round($this->config['imageMaxSize'] / 1024) . " Кб";
            return;
        }
       
        // даем файлу загадочное имя
        $new_name = md5(date('YmdHis')) . '.jpg';
        
        // копируем
        copy($file_name, $dir . $new_name);
        
        // отображаем файл
        echo HTML::image($this->config['imageUrlPrefix'] . $new_name, array('width' => $width, 'height' => $height));
        
        Kohana::$log->add(Log::INFO, "На сервер загружен файл " . $dir .  $new_name);
    }


}
