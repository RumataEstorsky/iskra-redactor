<?php

class Controller_Doc extends Controller {

    private $config;

    public function before() {
        parent::before();
        $config = Kohana::$config->load('vredactor');
    }

    /**
     * Загрузка файлов на сервер 
     */
    public function action_upload() {
        $file_name = 'xcvxxcvxcvxcvxcvVSDVSgsdfgsd';
        $file_ico = 'rar';
        echo '<a href="javascript:void(null);" rel="' . $file_name . '" class="redactor_file_link redactor_file_ico_' . $file_ico . '">' . $file_name . '</a>';
    }

    /**
     * Скачивание файлов с сервера
     */
    public function action_download() {
        
    }

    /**
     * Удаление файла с сервера
     */
    public function action_delete() {
        $id = $this->request->param('file_id');
        Kohana::$log->add(Log::INFO, "Удалён файл " . $id);
    }

}