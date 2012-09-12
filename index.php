<?php
    $site_url = "/test/fun/ee4717";
#    $site_url = '/ee4717';
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>Hungry Jacks</title>
    <style type="text/css" media="screen">
        body {
                text-align:center;
        }

        #wrapper {
                margin: 0 auto;
                width: 1100px; /* Replace the xxxx with the the width of your site (eg 800px)*/
                text-align:left;
        }

        #header{
            height: 40px;
            width:  100%;
            background-color: #bebebe;
            position: fixed;
        }

        #logo{
            float:left;
        }

        #menu{
            float:left;
            margin: 10 0 0 30;
        }

        #search{
            float:right; 
            margin: 5 20 0 0;
        }

        #content{
            width: 100%;
            float: left;
        }

        #banner{
            height: 300px;
            width: 70%;
            float:left;
        }

        #sidebar-search{
            height: 300px;
            width: 29%;
            float:right;
            background-color: #bebebe;
        }

        .canteen{
            height: 300px;
            width: 70%;
            float:left;
            margin: 40 0 0 0;
        }

        .sidebar{
            height: 300px;
            width: 29%;
            float:right;
            background-color: #bebebe;
        }

        #footer{
            height: 80px;
            width: 100%;
            background-color: #bebebe;
        }

        .break{
            clear:both;
        }

    </style>

    <link rel="stylesheet" href="<?php echo $site_url; ?>/css/style.css" type="text/css" media="screen" charset="utf-8">
    
</head>

<body>
<div id="wrapper" class="name">
    
    <div id="header" class="name">
        <div id="logo" class="name">
            <img src="" height="40" width="50" />
        </div>
        <div id="menu" class="name">
            <span style="margin: 0 10 0 10;"><a href="">Home</a></span> 
            <span style="margin: 0 10 0 10;"><a href="">About</a></span> 
            <span style="margin: 0 10 0 10;"><a href="">Restaurant</a></span> 
            <span style="margin: 0 10 0 10;"><a href="">Contact</a></span> 
            <span style="margin: 0 10 0 10;"><a href="">Login</a></span> 
        </div>
        <div id="search" class="search">
            <form action="<?php echo $site_url ?>/search.php" method="get" accept-charset="utf-8">
            <input type="text" name="search" value="">
            <input type="submit" value="Go">

            </form>
        </div>
    </div>


    <div id="content" class="name">
        <div id="content-top" class="name" style="margin: 10 0;">
             <div id="banner" class="name" style="margin: 0 0 70 0">
                <?php
                    include "banner.php";
                ?>
             </div>
             <div id="sidebar-search" class="name">
                this is the sidebar-search    
             </div>
        </div>

        <div id="content-bottom" class="name">
            
             <div id="" class="canteen">
                <?php
                    include "jcarousel.php";
                ?>
             </div>
             <div id="" class="sidebar">
                Latest Review?
             </div>
                
        </div>
             
    </div>

    <div id="name" class="break">
    </div>


    <div id="footer" class="name">
        footer    
    </div>

</div>
</body>


</html>



