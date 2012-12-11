<?php

class Imperavi_Redactor {
    public static function init($name) {
        StaticCss::instance()->add('/js/redactor/css/redactor.css');
        StaticJs::instance()->add('/js/redactor/redactor.js');
        StaticJs::instance()->add_inline(View::factory('imperavi_redactor/init', array('name' => $name)));
    }
}