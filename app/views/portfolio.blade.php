@extends('layouts.master')

@section('content')

<!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery">

            <ul id="filterOptions" class="gallery-cats clearfix">
                <li class="active"><a href="#" class="all">All</a></li> 
                <li><a href="#" class="tag1">Tag 1</a></li>
                <li><a href="#" class="tag2">Tag 2</a></li>
                <li><a href="#" class="tag3">Tag 3</a></li>
                <li><a href="#" class="tag4">Tag 4</a></li>
            </ul>

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Project Name Here</a>Add a beautiful description below.</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-2-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Project Name Here</a>Add a beautiful description below.</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag2">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-3-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Project Name Here</a>Add a beautiful description below.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag4">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-4-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Project Name Here</a>Add a beautiful description below.</span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag2">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-5-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Project Name Here</a>Add a beautiful description below.</span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag3">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.htm" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.htm"><img src="img/gallery/gallery-img-6-3col.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Project Name Here</a>Add a beautiful description below.</span>
                    </li>


                </ul>
            </div>

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

        </div><!-- End gallery list-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

@stop