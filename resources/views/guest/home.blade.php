<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Event System</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{url('static/css/bootstrap.min.css')}}"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="{{url('static/css/slick.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{url('static/css/slick-theme.css')}}"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="{{url('static/css/nouislider.min.css')}}"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{url('static/css/font-awesome.min.css')}}">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{url('static/css/style.css')}}"/>

        

    </head>
    <body>
        <!-- HEADER -->
      
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/admin/dashboard">Admin</a></li>
                        
                        
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>

        <div id="hot-deal" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12" style="height: 250px;">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                
                            </ul>
                            <!-- <h2 class="text-uppercase">hot deal this week</h2>
                            <p>New Collection Up to 50% OFF</p>
                            <a class="primary-btn cta-btn" href="#">Shop now</a> -->
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>

            <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- ASIDE -->
                    
                    <div id="store" class="col-md-9">
                       <h3 style="text-align: center;">Available Events </h3>
                      
                        <div class="row">
                           @if (count($events) > 0)
                    @foreach ($events as $event)
                            <div class="col-md-4 ">
                               

                                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 500px;">
                                    
                                       @if( !empty($event->image))
                                  <img class="card-img-top" style="width:100%; height: 180px;" src="{{ URL::asset('static/images/events/'.$event->image )}}" alt="event image">
                                   @else
                                    <img class="card-img-top" style="width:100%; height: 180px;" src="{{ URL::asset('static/images/events/default.jpg')}}" alt="event image">
                                   @endif
                                      <div class="card-body">
                                        <div style="margin-left: 7px; margin-bottom: 100px !important; margin-top: 20px;">
                                        <h5 class="card-title">{{ $event->title }}</h5>
                                      
                                        <p><span class="label label-default">{{ $event->venue }}</span></p>
                                        <p> <span class="label label-info"> {{ $event->start_time }}</span></p>
                                          <p class="card-text">{!! $event->description !!}.</p>
                                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">Book Event</a>
                                    </div>
                                      </div>
                                    </div>
                                    
                                    

                            </div>
                            @if ($loop->index > 0 && ($loop->index + 1) % 3 == 0) </div><hr /><div class="row"> @endif
                    @endforeach
                @endif
                           
                          
                        </div>
                        
                        <!-- <div class="store-filter clearfix">
                           
                            <ul class="store-pagination">
                                <li class="active">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div> -->
                        <!-- /store bottom filter -->
                    </div>
                    <!-- /STORE -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>

   