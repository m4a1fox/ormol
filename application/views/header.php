<?php $currentUrl = M4A1_HOST . trim($_SERVER['REQUEST_URI'], '/');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo META::TITLE();?></title>
    <meta name="description" content="<?php echo META::KEYWORD();?>" />
    <meta name="keywords" content="<?php echo META::DESCRIPTION();?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST; ?>public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo M4A1_HOST; ?>usefull/jqueryFileTree/jqueryFileTree.css" />
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/jQuery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/init.js"></script>
        <script type="text/javascript" src="<?php echo M4A1_HOST;?>public/js/slider.js"></script>
    <script src="/usefull/fckeditor/fckeditor.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo M4A1_HOST;?>usefull/jqueryFileTree/jqueryFileTree.js"></script>
    <link href="<?php echo M4A1_HOST;?>public/img/leaf.ico" rel="icon" type="image/x-icon" />
    <link href="<?php echo M4A1_HOST;?>public/img/leaf.ico" rel="shortcut icon" type="image/x-icon" />

    <script>
         var URL = '<?php echo M4A1_HOST; ?>';
         var currentUrl = '<?php echo $currentUrl; ?>';
    </script>
    <?php
        MOUNT::JS();
    ?>
</head>
<body>
<div id="header">
    	<!-- Start navigation area -->
        <div id="navigation">

        	<div id="navigation_wrap">

                <!-- Start contact info area -->
                <div id="conteactinfo"><strong>Email:</strong> fw.ormol@gmail.com</div>
                <!-- End contact info area -->
                <div id="search_block">
                    <form action="<?php echo M4A1_HOST;?>search" method="post" id="search-form">
                        <input type="text" placeholder="Search" name="search" maxlength="50">
                        <input type="reset" name="search" id="searchBtn" value="X">
                        <input type="submit" name="send" id="searchBtn" value="">
                    </form>
                   
                </div>
                <!-- Start navigation -->
                <div id="navi">
                
                    <ul>
                    
                        <li><a href="/" title="Response Home">Home</a></li>
                        <li><a href="#" title="Response Features">Features</a>
                        	<ul>
                                    <?php $link = Shortlink::allLink();?>
                                    <?php foreach ($link as $value):?>
                                        <li>
                                            <a href="<?php echo M4A1_HOST;?>content/show/<?php echo $value->link;?>">
                                                <?php echo $value->title?>
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                        </li>
                        <li><a href="<?php echo M4A1_HOST;?>about" title="Response's Blog">About</a>
                        	
                        </li>
                        <li><a href="<?php echo M4A1_HOST;?>folio">Portfolio</a></li>
                        <li><a href="contact-us.html" title="Contact Response">Contact Us</a></li>
                    
                    </ul>
                
                </div>
                <!-- End navigation -->
                
			</div>
        
        </div>
        <!-- End navigation area -->
        <div class="clear"></div>
        <!-- Start Social & Logo area -->
        <div id="header_small">
        	<!-- Start Social area -->
        	<div class="social">
            	
                <ul>
                <li><a href="<?php echo M4A1_HOST;?>help" class="help" title="FAQs"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>download" class="download" title="Dowload ORMOL"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>comment" class="comment" title="comments"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>structure" class="structure" title="structure"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>faq" class="faq" title="FAQs"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>setting" class="setting" title="Setting"></a></li>
                </ul>
                
            </div>
            <!-- End Socialarea -->
            
            <!-- Start Logo area -->
            <div id="logo">
              <a href="/" title="Ormol framework">ormol</a>
            </div>
            <!-- End Logo area -->
        
        </div>
        <!-- End Social & Logo area -->

</div>
    <div id="main">
        <div id="main-wrap">
