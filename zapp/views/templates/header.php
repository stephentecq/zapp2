<?php
/**
 * Created by PhpStorm.
 * User: munabste
 * Date: 8/7/2015
 * Time: 10:35 AM
 */
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>College02</title>
        <!-- Stylesheet -->
        <link href="<?php base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/ddsmoothmenu.css" />
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>public/css/jquery.fancybox-1.3.4.css" media="screen" />
        <!-- Javascript -->
        <script src="<?php base_url(); ?>public/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php base_url(); ?>public/js/ddsmoothmenu.js" type="text/javascript"></script>
        <script src="<?php base_url(); ?>public/js/contentslider.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js/jcarousellite_1.0.1.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//jquery.easing.1.1.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//cufon-yui.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//DIN_500.font.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//menu.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//tabs.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="<?php base_url(); ?>public/js//jquery.fancybox-1.3.4.pack.js"></script>
    </head>
    <body>
        <div id="bg">
            <!-- Wapper Sec -->
            <div id="wrapper_sec">
                <!-- masterhead -->
                <div id="masterhead">
                    <!-- Logo -->
                    <div class="logo"><a href="index.php"><img src="<?php base_url(); ?>public/images/logo.png" alt="" /></a></div>
                    <!-- masterhead Right Section -->
                    <div class="topright_sec">
                        <!-- top navigation -->
                        <div class="topnavigation">
                            <ul>
                                <li class="first">&nbsp;</li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Student Profile </a></li>
                                <li><a href="#">Our Campuses</a></li>
                                <li><a class="nobg" href="#"><img src="<?php base_url(); ?>public/images/rss.gif"  alt="" /></a></li>
                                <li class="last">&nbsp;</li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <!-- top search -->
                        <div class="top_search">
                            <div class="advance_search"><a href="#">Advance Option</a></div>
                            <ul>
                                <li><input name="txt" value="Search you any keyword"
                                           onfocus="if(this.value=='Search you any keyword') {this.value='';}"
                                           onblur="if(this.value=='') {this.value='Search you any keyword';}"   type="text" /></li>
                                <li><a class="search" href="#">Search</a></li>
                            </ul>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="clear"></div>
                    <!-- Navigation -->
                    <div class="navigation">
                        <div id="smoothmenu1" class="ddsmoothmenu">
                            <ul>
                                <li class="first"><a class="selected" href="index.php">Home</a></li>
                                <li><a href="index.php?/about">About Us</a></li>
                                <li><a href="#">Admissions</a></li>
                                <li><a href="course.php">Academics</a>
                                    <!-- Sub Menu level 1 -->
                                    <ul>
                                        <li><a href="course.php">Integer eu mi lorem, sit amet</a></li>
                                        <li><a href="course.php" class="dropdown">Accumsan neque</a>
                                            <!-- Sub Menu Level 2 -->
                                            <ul>
                                                <li><a href="course.php">nteger eu mi lorem, sit amet</a></li>
                                                <li><a href="course.php">Accumsan neque</a></li>
                                                <li><a href="course.php">Donec varius arcu eu quam</a></li>
                                                <li><a href="course.php">Rutrum rhoncus.</a></li>
                                                <li><a href="course.php">Donec suscipit enim et</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="course.php">Donec varius arcu eu quam</a></li>
                                        <li><a href="course.php">Rutrum rhoncus.</a></li>
                                        <li><a href="course.php">Donec suscipit enim et </a></li>
                                        <li><a href="course.php">Ipsum eleifend quis luctus</a></li>
                                        <li><a href="course.php">Arcu scelerisque.</a></li>
                                        <li><a href="course.php">Duis a tortor tellusvel egestas</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Research</a> </li>
                                <li><a href="#">Campus &amp; Community</a></li>
                                <li><a href="#">Support Us</a> </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="index.php?/course">Courses</a></li>
                                        <li><a href="blogdetail.php">Blog Detail</a></li>
                                        <li><a href="news.php">News</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="static.php">Static</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php?/blog" class="last">Blog</a>
                                <li><a href="">Blog</a></li>
                                </li>
                            </ul>
                        </div>
                        <!-- navigation ends -->
