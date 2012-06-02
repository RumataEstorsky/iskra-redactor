<?php

class Imperavi_Redactor {
    public static function init($name) {
        StaticCss::instance()->addCss('/js/redactor/css/redactor.css');
        StaticJs::instance()->addJs('/js/redactor/redactor.js');
        StaticJs::instance()->addJsInline(View::factory('imperavi_redactor/init', array('name' => $name)));
    }
}