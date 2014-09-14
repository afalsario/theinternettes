@extends('layouts.master')

@section('content')

<!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery">

          <!--   <ul id="filterOptions" class="gallery-cats clearfix">
                <li class="active"><a href="#" class="all">All</a></li> 
                <li><a href="#" class="tag1">Tag 1</a></li>
                <li><a href="#" class="tag2">Tag 2</a></li>
                <li><a href="#" class="tag3">Tag 3</a></li>
                <li><a href="#" class="tag4">Tag 4</a></li>
            </ul> -->

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <!-- Common Art -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/gallery/commonart-home.png" class="item-details-link lightbox" title="Common Art" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <img src="/img/gallery/gallery-commonart-home.png" alt="Gallery">
                        <span class="project-details"><h6>Common Art</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://commonart-sa.com" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Chart Babe -->
                     <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/big-cb.png" class="item-details-link lightbox" title="Chart Babe" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <img src="/img/gallery/gallery-cb.png" alt="Gallery">
                        <span class="project-details"><h6>Chart Babe</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://chartbabe.com" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Ruff Love -->
                     <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/largerufflove.png" class="item-details-link lightbox" title="Ruff Love" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <img src="/img/rufflove.png" alt="Gallery">
                        <span class="project-details"><h6>Ruff Love</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://ruff-love.com" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Amanda -->
                     <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/bigamandarosebeller.png" class="item-details-link lightbox" title="Amanda Beller" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <img src="/img/amandarosebeller.png" alt="Gallery">
                        <span class="project-details"><h6>Amanda</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://amandarosebeller.club" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Greg -->
                     <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/big-greg.png" class="item-details-link lightbox" title="Greg Vallejo" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <img src="/img/gallery/gallery-greg.png" alt="Gallery">
                        <span class="project-details"><h6>Greg</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://gregvallejo.com" target="_blank">View Site</a></button></span>
                    </li>

                    <!-- Ashley -->
                     <li  class="span4 gallery-item" data-id="id-1" data-type="tag1">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="/img/big-blog.png" class="item-details-link lightbox" title="AshleyFalsario.com" data-rel="prettyPhoto"></a>
                            </span>
                        </span>
                        <img src="/img/gallery/gallery-blog.png" alt="Gallery">
                        <span class="project-details"><h6>Ashley</h6><button class="btn btn-mini btn-warning" type="button"><a href="http://ashleyfalsario.com" target="_blank">View Site</a></button></span>
                    </li>


                </ul>
            </div>

            <!-- Pagination -->
            <!-- <div class="pagination">
                <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
                </ul>
            </div> -->

        </div><!-- End gallery list-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

@stop
