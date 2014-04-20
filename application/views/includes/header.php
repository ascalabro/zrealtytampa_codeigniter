<?php echo doctype('html5'); ?>
<html lang="en">
    <head>
        <title>Michael Zambito Realtor</title>

        <?php
        echo link_tag("http://fonts.googleapis.com/css?family=Patua+One");
        echo link_tag("http://fonts.googleapis.com/css?family=Istok+Web");
        echo link_tag("http://fonts.googleapis.com/css?family=Andika");
        echo link_tag("http://www.zrealtytampa.com/images/favicon-house-brown.ico");
        echo link_tag("assets/stylesheets/styles.css");
        echo link_tag("assets/stylesheets/jquery-ui.min.css");



        $meta = array(
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'description', 'content' => 'M. Zambito Agent for homes for sale in all of Tampa, Carrollwood, Northdale, Greater Tampa Bay Area'),
            array('name' => 'keywords', 'content' => 'Realtor, Real Estate Agent, Luxery Homes, Homes For Sale, Real Estate, Tampa, New Tampa, carrollwood, Tampa Bay Area, northdale, north tampa, west tampa, east tampa, south tampa, bay area, lakefront, lake magdalene, lake george, estates'),
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'viewport', 'content' => 'width=device-width'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
        );

        echo meta($meta);
        ?>	

        <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/common.js"></script>
        <script type="text/javascript" src="assets/js/slide.js"></script>
        <script type="text/javascript" src="assets/js/cycle.js"></script>
        <script type="text/javascript" src="assets/js/popUpbox.js"></script>

    </head>
    <body>

        <div id="pageOutlineContainer" >
            <div class="outlinecontainerbackground" ></div>


            <div class="topbanner" >
                <?php
                // I know there is 5 images to be displayed in the cycle js, so I create images below with loop
                for ($i = 1; $i < 6; $i++) {
                    $image_properties = array(
                        'src' => 'assets/images/Day_Panorama' . $i . '.jpg',
                        'alt' => $img_alt_tag,
                        'class' => 'topbanner'
                    );
                    echo img($image_properties);
                }
                ?>
            </div>

            <div id="header">

                <h1><span>Michael A. <span class="italic"><span style="color:#0019BE;">Z</span>ambito</span></span></h1>
                The end of your search for <font color="#ff0505">YOUR</font> Realtor
            </div>


            <!-- Left Info side, containing name, contact info on every page in this td section !-->
            <div style="position:absolute;top:325px;" class="left_info"><b>
                    <img alt="<?php echo $img_alt_tag; ?>"  src="assets/images/profile2.png"><br>
                    Contact Realtor:<br>
                    Michael Zambito<br>
                    P: 813-361-4717<br>
                    <font size="2">zrealtor@hotmail.com</font><br>
                    <a class="realtyclick" ><img alt="<?php echo $img_alt_tag; ?>" src="assets/images/realtor.gif"></a>			
            </div>
