<?php
    /* URI変数 */
    $uri = get_template_directory_uri();
    $img_uri = get_template_directory_uri() . "/assets/img/";

    /* SCSSコンパイル */
    define('WP_SCSS_ALWAYS_RECOMPILE', true);
    /* css */
    function add_my_style () {
        wp_enqueue_style( "main-style", 
            get_theme_file_uri("/assets/css/style.css"), 
            array(), 
            filemtime(get_theme_file_path("/assets/css/style.css"))
        );
    }
    add_action( "wp_enqueue_scripts", "add_my_style");

    /* js */
    function add_my_scripts () {
        /* Wordpress内のjQueryを登録解除 */
        wp_deregister_script( "jquery" );
        /* jQueryをCDNから読み込む */
        wp_enqueue_script( "jquery", 
            "//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", 
            array(), 
            "3.3.1",
            true 
        );
        
        /* main.jsの読み込み */
        wp_enqueue_script("mainjs",
            get_theme_file_uri("assets/js/main.js"),
            array("jquery"),
            "20211212",
            false
        );
    }
    add_action("wp_enqueue_scripts", "add_my_scripts");
?>