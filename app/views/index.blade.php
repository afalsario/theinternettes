@extends('layouts.master')

@section('content')
    <div class="row headline"><!-- Begin Headline -->

     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="img/gallery/g4300.png" alt="slider"></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/class-slide3.jpg" alt="slider"></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider3.jpg" alt="slider"></a></li>
              </ul>
            </div>
        </div>
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Let us do the complicated stuff.</h3>
            <p class="lead">Our sole purpose is to provide you with great service and an <bold style="color:purple;">awesome</bold> product. Whether you need a website redesign or a site built from scratch, we can create something you'll love.</p>
            <p class="lead">Do you need an app with <bold style="color:blue;">super cool</bold> features? We can code that too.</p>
        </div>
    </div><!-- End Headline -->

    <div class="row gallery-row"><!-- Begin Gallery Row -->

    	<div class="span12">
            <h5 class="title-bg">Take a Look
                <small>at our recent work</small>
                <button class="btn btn-mini hidden-phone" type="button"><a href="portfolio">View Portfolio</a></button>
            </h5>

        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/gallery/commonart-home.png" class="item-details-link lightbox" title="Common Art" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/gallery/gallery-commonart-home.png" alt="Gallery"></a>
                        <span class="project-details"><h6>Common Art</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://commonart-sa.com" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/big-cb.png" class="item-details-link lightbox" title="Chart Babe" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/gallery/gallery-cb.png" alt="Gallery"></a>
                        <span class="project-details"><h6>Chart Babe</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://chartbabe.com" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/largerufflove.png" class="item-details-link lightbox" title="Common Art" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/rufflove.png" alt="Gallery"></a>
                        <span class="project-details"><h6>Ruff Love</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://ruff-love.com" target="_blank">View Site</a></button></span>
                    </li>

                </ul>
                </div>
            </div>

    </div><!-- End Gallery Row -->

    <!-- <div class="row">Begin Bottom Section -->

    	<!-- Blog Preview
        ================================================== -->
    	<!-- <div class="span6">

            <h5 class="title-bg">From the Blog
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide "> -->

            <!-- Carousel items -->
            <!-- <div class="carousel-inner"> -->

                 <!-- Blog Item 1 -->
                <!-- <div class="active item">
                    <a href="blog-single.htm"><img src="/img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview"></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">You are Super Awesome.</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Aug 14, 2013<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">8</a><li>
                            <li><i class="icon-tags"></i> <a href="#">artwork</a>, <a href="#">craft</a>,
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. <a href="#">Read more</a><p>
                </div> -->

                <!-- Blog Item 2 -->
                 <!-- <div class="item">
                    <a href="blog-single.htm"><img src="/img/gallery/blog-med-img-2.jpg" alt="" class="align-left blog-thumb-preview"></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">Han Shot First!</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> May 7, 2013<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">6</a><li>
                            <li><i class="icon-tags"></i> <a href="#">artwork</a>, <a href="#">draw</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. <a href="#">Read more</a><p>
                </div> -->

            <!-- </div>
            </div>
        </div> -->

        <!-- Video Area
        ================================================== -->
        <!-- <div class="span6">
            <h5 class="title-bg">Recent Video
                <small>created by us</small>
            </h5>
			<iframe src="http://player.vimeo.com/video/44049449" width="100%"  height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div> -->

    <!-- </div>End Bottom Section -->

    </div> <!-- End Container -->

@stop
