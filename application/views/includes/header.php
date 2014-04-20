<?php echo doctype('html5'); ?>
<html lang="en">
    <head>
        <?php 
        $meta = array(
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'description', 'content' => 'My Great Site'),
            array('name' => 'keywords', 'content' => 'love, passion, intrigue, deception'),
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
        );

        echo meta($meta); 
        ?>
        <title><?php echo $title; ?></title>

        <?php echo link_tag("assets/stylesheets/styles.css"); ?>
    </head>
    <body>