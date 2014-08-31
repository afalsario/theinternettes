@extends('layouts.master')

@section('content')
    <div class="row headline"><!-- Begin Headline -->

     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.htm"><img src="img/gallery/g4300.png" alt="slider"></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider2.jpg" alt="slider"></a></li>
                <li><a href="gallery-single.htm"><img src="img/gallery/slider3.jpg" alt="slider"></a></li>
              </ul>
            </div>
        </div>
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>This is Wonderful. <br />
            Wonder is a beautiful multipurpose HTML/CSS Theme.</h3>
            <p class="lead">18+ html pages crafted with love! Responsive Design. BUY ME!</p>
        </div>
    </div><!-- End Headline -->

    <div class="row gallery-row"><!-- Begin Gallery Row -->

    	<div class="span12">
            <h5 class="title-bg">Take a Look
                <small>at our recent work</small>
                <button class="btn btn-mini hidden-phone" type="button">View Portfolio</button>
            </h5>

        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Bad Dinosaur</a>Not so bad really.</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/gallery/gallery-img-2-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">I come in peace</a>Take me with your leader.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="#" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/gallery/gallery-img-3-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Pink Unicorn</a>Yes, Unicorns are Pink.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="/img/gallery/gallery-img-4-4col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Really Bad Guy</a>Also I love skates.</span>
                    </li>

                </ul>
                </div>
            </div>

    </div><!-- End Gallery Row -->

    <div class="row"><!-- Begin Bottom Section -->

    	<!-- Blog Preview
        ================================================== -->
    	<div class="span6">

            <h5 class="title-bg">From the Blog
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
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
                </div>

                <!-- Blog Item 2 -->
                 <div class="item">
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
                </div>

            </div>
            </div>
        </div>

        <!-- Video Area
        ================================================== -->
        <div class="span6">
            <h5 class="title-bg">Recent Video
                <small>created by us</small>
            </h5>
			<iframe src="http://player.vimeo.com/video/44049449" width="100%"  height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

    </div><!-- End Bottom Section -->

    </div> <!-- End Container -->

@stop
