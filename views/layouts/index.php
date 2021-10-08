<?php
    /* @var $params */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>The News Reporter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../assets/font/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/font/font.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
    <div class="center">
        <div class="header_area">
            <div class="logo floatleft"><a href="#"><img src="../images/logo.png" alt="" /></a></div>
            <div class="top_menu floatleft">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/site/about">About</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Subscribe</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
            <div class="social_plus_search floatright">
                <div class="social">
                    <ul>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="feed"></a></li>
                    </ul>
                </div>
                <div class="search">
                    <form action="#" method="post" id="search_form">
                        <input type="text" value="Search news" id="s" />
                        <input type="submit" id="searchform" value="search" />
                        <input type="hidden" value="post" name="post_type" />
                    </form>
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <ul id="nav">
                <li><a href="#">world news</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a>
                            <ul>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">sports</a></li>
                <li><a href="#">tech</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">business</a></li>
                <li><a href="#">Movies</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a>
                            <ul>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                                <li><a href="#">Single item</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">entertainment</a></li>
                <li><a href="#">culture</a></li>
                <li><a href="#">Books</a>
                    <ul>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                        <li><a href="#">Single item</a></li>
                    </ul>
                </li>
                <li><a href="#">classifieds</a></li>
                <li><a href="#">blogs</a></li>
            </ul>
        </div>
        <div class="slider_area">
            <div class="slider">
                <ul class="bxslider">
                    <li><img src="../images/1.jpg" alt="" title="Slider caption text" /></li>
                    <li><img src="../images/2.jpg" alt="" title="Slider caption text" /></li>
                    <li><img src="../images/3.jpg" alt="" title="Slider caption text" /></li>
                </ul>
            </div>
        </div>
        <div class="content_area">
            <?php
                include_once BaseUrl."/views/{$params['controller']}/{$params['action']}.php";
            ?>
        </div>
        <div class="footer_bottom_area">
            <div class="footer_menu">
                <ul id="f_menu">
                    <li><a href="#">world news</a></li>
                    <li><a href="#">sports</a></li>
                    <li><a href="#">tech</a></li>
                    <li><a href="#">business</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">entertainment</a></li>
                    <li><a href="#">culture</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">classifieds</a></li>
                    <li><a href="#">blogs</a></li>
                </ul>
            </div>
            <div class="copyright_text">
                <p>Copyright &copy; 2045 The News Reporter Inc. All rights reserved | Design by <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
                <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../assets/js/jquery-min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="../assets/js/selectnav.min.js"></script>
<script type="text/javascript">
    selectnav('nav', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    selectnav('f_menu', {
        label: '-Navigation-',
        nested: true,
        indent: '-'
    });
    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true
    });
</script>
</body>
</html>