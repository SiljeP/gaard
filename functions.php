<?php 
//theme support

add_theme_support("custom-logo");
add_theme_support("post-thumbnails");

// Add support for custom header
 add_theme_support('custom-header', array(
        'width'              => 1600,   // Set your desired width
        'height'             => 500,    // Set your desired height
        'flex-height'        => true,   // Allows flexible height
        'flex-width'         => true,   // Allows flexible width
        'header-text'        => false,  // Disable header text
     
    ));


//register custom widgets
function my_widgets(){
    register_sidebar([
        "name" => "Footer 1",
        "id" => "footer1",
        "before_widget" => "<div class='widget widget-f1'>'",
        "after_widget" => "</div>"
    ]);
    register_sidebar([
        "name" => "Footer 2",
        "id" => "footer2",
        "before_widget" => "<div class='widget widget-f2'>'",
        "after_widget" => "</div>"
        ]);

    register_sidebar([
        "name" => "Footer 3",
        "id" => "footer3",
        "before_widget" => "<div class='widget widget-f3'>'",
        "after_widget" => "</div>"
    ]);
    register_sidebar([
        "name" => "Header W",
        "id" => "headerw",
        "before_widget" => "<div class='widget widget-header'>'",
        "after_widget" => "</div>"
    ]);


}

add_action("widgets_init", "my_widgets");


?>


