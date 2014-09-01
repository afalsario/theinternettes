@extends('layouts.master')

@section('content')

<!-- Blog Content
    ================================================== --> 
    <div class="row">

        <!-- Blog Posts
        ================================================== --> 
        <div class="span8 blog">

            <!-- Blog Post 1 -->
            <article>
                <div class="row">
                    <div class="span2 blog-style-2">
                        <h4 class="title-bg">11/02/13</h4>
                        <ul class="post-data">
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">8 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">HTML</a>, <a href="#">design</a></li>
                        </ul>
                    </div>
                    <div class="span6">       
                        <a href="blog-single.htm"><img src="img/gallery/post-img-1.jpg" alt="Post Thumb"></a>
                        <h4 class="title-bg">Post Title 1</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    </div>    
                </div>
            </article>

            <!-- Blog Post 2 -->
             <article>
                <div class="row">
                    <div class="span2 blog-style-2">
                        <h4 class="title-bg">11/02/13</h4>
                        <ul class="post-data">
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">8 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">HTML</a>, <a href="#">design</a></li>
                        </ul>
                    </div>
                    <div class="span6">       
                        <a href="blog-single.htm"><img src="img/gallery/post-img-2.jpg" alt="Post Thumb"></a>
                        <h4 class="title-bg">Post Title 2</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    </div>    
                </div>
            </article>

             <!-- Blog Post 3 -->
             <article>
                <div class="row">
                    <div class="span2 blog-style-2">
                        <h4 class="title-bg">11/02/13</h4>
                        <ul class="post-data">
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">8 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">HTML</a>, <a href="#">design</a></li>
                        </ul>
                    </div>
                    <div class="span6">       
                        <a href="blog-single.htm"><img src="img/gallery/post-img-3.jpg" alt="Post Thumb"></a>
                        <h4 class="title-bg">Post Title 3</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    </div>    
                </div>
            </article>

            <!-- Pagination -->
            <div class="pagination">
                <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">

            <!--Search-->
            <section>
                <div class="input-append">
                    <form action="#">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Search"><button class="btn" type="button"><i class="icon-search"></i></button>
                    </form>
                </div>
            </section>

            <!--Categories-->
            <h6 class="title-bg">Categories</h6>
            <ul class="post-category-list">
                <li><a href="#"><i class="icon-plus-sign"></i>Design</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Photoshop</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>HTML</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Wordpress</a></li>
            </ul>
            <br>
            <br>

            <!--Popular Posts-->
            <h6 class="title-bg">Latest Posts</h6>
            <ul class="popular-posts">
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-6-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 02/21/13</em>
                </li>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-7-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 03/01/13</em>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-8-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 05/16/13</em>
                </li>
            </ul>

            <!--Tabbed Content-->
            <h6 class="title-bg">More Info</h6>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#comments" data-toggle="tab">Comments</a></li>
                <li><a href="#tweets" data-toggle="tab">Tweets</a></li>
                <li><a href="#about" data-toggle="tab">About</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="comments">
                     <ul>
                        <li><i class="icon-comment"></i>admin on <a href="#">Project 1</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Project 2</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Project 3</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="tweets">
                    <ul>
                        <li><a href="#"><i class="icon-comment"></i>@Basicoh_</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><a href="#"><i class="icon-comment"></i>@Basicoh_</a> In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. </li>
                        <li><a href="#"><i class="icon-comment"></i>@Basicoh_</a> Vivamus nec lectus sed orci molestie molestie.</li>
                    </ul>
                </div>
                <div class="tab-pane" id="about">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie.</p>
                </div>
            </div>

            <!--Video Widget-->
            <h6 class="title-bg">Video Widget</h6>
			<iframe src="http://player.vimeo.com/video/44049449" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

    </div>
    
    </div> <!-- End Container -->

@stop