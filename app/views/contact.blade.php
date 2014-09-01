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
            <h5 class="title-bg">Our Location</h5>
            <address>
            <strong>Wonder Bunker</strong><br>
            6064 Amazing St, <br>
            Madrid, Spain.<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
             
            <address>
            <strong>Email us!</strong><br>
            <a href="mailto:#">internettestx@gmail.com</a>
            </address>

            <h5 class="title-bg">Map</h5>
    <!-- "Map" Message -->
           	<div class="map"><iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;q=las+tablas,+madrid&amp;fb=1&amp;hq=las+tablas,&amp;hnear=0xd42287d383766c9:0xad469cc0ed50997d,Madrid,+Espa%C3%B1a&amp;cid=0,0,15011046097507982567&amp;t=m&amp;iwloc=A&amp;ll=40.421889,-3.713523&amp;spn=0.006295,0.006295&amp;output=embed"></iframe></div>

        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

@stop