<?php
include_once 'inc/theme-setup.php';


function assets($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}


