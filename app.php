<?php

namespace Assets {
    define("APPS_LOC", "./app");

    class App {
        static function fetch_app_html($app_name) {
            return file_get_contents(APPS_LOC . "/$app_name/main.html");
        }
        static function fetch_app_js($app_name) {
            return file_get_contents(APPS_LOC . "/$app_name/main.js");
        }
    }
}

?>