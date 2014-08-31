<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>The Internettes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/bootstrap-responsive.css">
<link rel="stylesheet" href="/css/prettyPhoto.css">
<link rel="stylesheet" href="/css/flexslider.css">
<link rel="stylesheet" href="/css/styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css">
<![endif]-->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="/js/jquery.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="/js/jquery.flexslider.js" type="text/javascript"></script>
<script src="/js/jquery.custom.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });

});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
});

</script>

</head>

<body class="home">
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>

    <div class="container">

      <div class="row header"><!-- Begin Header -->

        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
            <a href='index'><img src="/img/logo.png" alt=""></a>
        </div>

        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">

                <ul class="nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="about-us">About Us</a></li>
                    <li><a href="features.htm">Portfolio</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page-full-width.htm">Full Width</a></li>
                            <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                            <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                            <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                            <li><a href="page-price-table.htm">Prices Table</a></li>
                            <li><a href="page-services.htm">Services</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                            <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                            <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                            <li><a href="gallery-single.htm">Gallery Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-style1.htm">Blog Style 1</a></li>
                            <li><a href="blog-style2.htm">Blog Style 2</a></li>
                            <li><a href="blog-single.htm">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.htm">Contact</a></li>
                </ul>

            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="/">Home</option>
                    <option value="about-us">About Us</option>
                    <option value="features.htm">Portfolio</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                        <option value="page-price-table.htm">- Prices Table</option>
                        <option value="page-services.htm">- Services</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>

      </div><!-- End Header -->
@yield('content')

<!-- Footer Area
        ================================================== -->

    <div class="footer-container"><!-- Begin Footer -->
        <div class="container">
            <div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>Contact Us</h5>
                   <img src="/img/logo.png" alt="Wonder" ><br><br>
                    <address>
                        <strong>Wonder Bunker</strong><br>
                        6064 Amazing St, <br>
                        Madrid, Spain.<br>
                    </address>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/internettes" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Tweets</h5>
                    <ul>
                        <li><a href="#">@Basicoh_</a> Hey! Buy this beautiful theme right now!.</li>
                        <li><a href="#">@Basicoh_</a> Wonder Theme is out Now!. You can buy it in Wrapbootstrap.com. Really easy to configure with a wonderful design.</li>
                        <li><a href="#">@Basicoh_</a> If you are an agency, freelancer or a studio, this theme is made for you. Take a look and enjoy it.</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <li><a href="#">Example post number 1</a></li>
                        <li><a href="#">Another example post title</a></li>
                        <li><a href="#">This is the third post title here</a></li>
                        <li><a href="#">Yet another post title for this list</a></li>
                        <li><a href="#">No more posts, this is the last one</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="/img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-2.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-3.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-4.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-5.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-6.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-7.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-8.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-9.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-10.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-11.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="/img/gallery/flickr-img-12.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Wonder Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>
</html>







