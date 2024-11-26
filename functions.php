<?php

function enqueue_css_js(){
    wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/assets/css/bootstrap.min.css");
    wp_enqueue_style("bootstrap-css", get_template_directory_uri()."/assets/css/custom.css");
    wp_enqueue_script("bootstrap-js", get_template_directory_uri()."/assets/css/bootstrap.min.js");
    wp_enqueue_script("bootstrap-js", get_template_directory_uri()."/assets/css/custom.js");
}