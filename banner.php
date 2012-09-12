    <link rel="stylesheet" href="<?php echo $site_url ?>/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $site_url ?>/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $site_url ?>/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $site_url ?>/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $site_url ?>/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="<?php echo $site_url ?>/nivo-slider/demo/images/toystory.jpg" data-thumb="<?php echo $base_url ?>/nivo-slider/demo/images/toystory.jpg" alt="" />
                <a href=""><img src="<?php echo $site_url ?>/nivo-slider/demo/images/up.jpg" data-thumb="<?php echo $base_url ?>/nivo-slider/demo/images/up.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="<?php echo $site_url ?>/nivo-slider/demo/images/walle.jpg" data-thumb="<?php echo $base_url ?>/nivo-slider/demo/images/walle.jpg" alt="" data-transition="slideInLeft" />
                <img src="<?php echo $site_url ?>/nivo-slider/demo/images/nemo.jpg" data-thumb="<?php echo $base_url ?>/nivo-slider/demo/images/nemo.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    <script type="text/javascript" src="<?php echo $site_url ?>/nivo-slider/demo/scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url ?>/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
