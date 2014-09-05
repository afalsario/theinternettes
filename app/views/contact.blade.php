@extends('layouts.master')

@section('content')

<!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <div class="span8 contact"><!--Begin page content column-->

            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.</p>
                <ul class='errors'>
                    @foreach($errors->all('<li>:message</li>') as $message)
                    {{ $message }}
                    @endforeach
                </ul>
           
                {{ Form::open(array('url' => 'contact_request', 'id' => 'contact-form')) }}
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    {{ Form::text('name', Input::old('name'), ['class' => 'span4', 'id' => 'prependedInput', 'size' => '16', 'placeholder' => 'Name'])}}
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    {{ Form::email('email', Input::old('email'), ['class' => 'span4', 'id' => 'prependedInput', 'size' => '16', 'placeholder' => 'Email Address'])}} 
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-bell"></i></span>
                    {{ Form::text('phone', Input::old('phone'), ['class' => 'span4', 'id' => 'prependedInput', 'size' => '16', 'placeholder' => 'Phone Number'])}} 
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-globe"></i></span>
                    {{ Form::text('web', Input::old('web'), ['class' => 'span4', 'id' => 'prependedInput', 'size' => '16', 'placeholder' => 'Website URL'])}}
                </div>
                {{ Form::textarea('message', Input::old('message'), ['class' => 'span6'])}}
                <div class="row">
                    <div class="span2">
                        {{ Form::submit('Send Message', ['class' => 'btn btn-inverse']) }}
                    </div>
                </div>
            </form>

        </div> <!--End page content column-->

        <!-- Sidebar
        ================================================== --> 
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->
            <h5 class="title-bg">Social Media</h5>
            <!-- <address>
            <strong>Wonder Bunker</strong><br>
            6064 Amazing St, <br>
            Madrid, Spain.<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
            </address> -->

            <address>
            <strong>Email us!</strong><br>
            <a href="mailto:#">internettestx@gmail.com</a>
            </address>

            <ul class="social-icons">
                <li><a href="https://www.facebook.com/internettes" class="social-icon facebook"></a></li>
                <li><a href="https://twitter.com/InternettesTX" class="social-icon twitter"></a></li>
                <!-- <li><a href="#" class="social-icon dribble"></a></li>
                <li><a href="#" class="social-icon rss"></a></li>
                <li><a href="#" class="social-icon forrst"></a></li> -->
            </ul>

            <br>
            <br>
            

            <h5 class="title-bg">Map</h5>
    <!-- "Map" Message -->
           	<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d222400.96092930614!2d-98.75057265090561!3d29.42835757913188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5f53ace83499%3A0x9584ae946a1e0d61!2sGeekdom!5e0!3m2!1sen!2sus!4v1409879224366" width="355" height="300" frameborder="0" style="border:0"></iframe></div>
        
        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

@stop