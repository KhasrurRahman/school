@extends('layouts.frontend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')
{{--slider--}}
<section class="banner">
    <div class="banner-carousel">
        @foreach($slider as $sl)
        <div class="item" style="background-image:url({{asset('public/assets/frontend/slider/'.$sl->image)}});">
            <div class="banner-overlay">
                <p style="text-align: right;">{{$sl->text}}</p>
                <p><span style="font-size: small;"><span class="m_-4500872614417421631m_-8056137926775529832m_-5969979067811567736gmail-hscoswrapper">&nbsp;</span></span></p>
                <p>&nbsp;</p>
            </div>
        </div>
        @endforeach

    </div>
</section>
{{--middle section--}}
<section class="grid-home" style="margin-top: 10px">
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="grid-module grid-photo wow slideInUp animated" data-wow-delay="0.1s" style="background-image:url({{asset('public/assets/frontend/home_page_image/'.$hoem_page_content->left_image)}});"></div>


            <div class="grid-module grid-lifestyle wow slideInUp animated">
                <h3 class="grid-title">Notice</h3>
                <div class="about-carousel">
                    @foreach($notice as $ns)

                    <div class="item">
                        <div class="about-module">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <span class="key-points">{{$ns->date}}</span>
                                </div>
                                <div class="media-body">
                                    <span class="key-des">{{$ns->title}}</span>
                                    <p>{!!  substr(strip_tags($ns->content), 0, 350) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 wow slideInUp animated" data-wow-delay="0.1s">
            <div class="grid-module-big">
                <div class="center-carousel">
                    <div class="carousel-list">
                        <ul class="nav nav-justified text-center">
                            <li class="active">
                                <a href="javascript:void(0);" onclick="slideonlyme('homeAbout');">About</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="slideonlyme('studentLife');">Student Life</a>
                            </li>
                        </ul>
                    </div>
                    <div class="center-carousel-inner" id="homeAbout">
                        <p class="intro-txt"></p>
                        <p style="text-align: justify;">{{$hoem_page_content->about}}</p>
                        <p class="text-center"><a class="request-info" href="#">Learn More</a></p>
                    </div>
                    <div class="center-carousel-inner" id="studentLife" style="display:none;">
                        <p class="intro-txt">{{$hoem_page_content->student_life}}
                        <p class="text-center"><a class="request-info" href="#">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="grid-module wow slideInUp animated" data-wow-delay="0.1s" id="go-to-calendar">
                <h3 class="grid-title">Upcoming Event</h3>
                <div class="calender">
                    <!-- calendar - START -->
                    <iframe frameborder="0" height="300" scrolling="no" src="https://calendar.google.com/calendar/embed?src=pledgeharbor.org_97u5cl0h7b9l7o83rss7d7rats%40group.calendar.google.com&amp;ctz=Asia/Dhaka" style="border: 0" width="100%"></iframe> <!-- calendar - END -->
                </div>
            </div><a href="{{$hoem_page_content->link}}">
                <div class="grid-module grid-photo brochure-img wow slideInUp animated" data-wow-delay="0.1s" style="background-image:url({{asset('public/assets/frontend/home_page_image/'.$hoem_page_content->right_image)}});"></div></a>
        </div>
    </div>
</section>

{{--    youtube video--}}
<div class="container infographic">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe allowfullscreen class="embed-responsive-item wow fadeIn animated" frameborder="0" src="{{$hoem_page_content->youtube_link}}" width="100%"></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6"><img alt="infographic" class="img-responsive center-block wow fadeIn animated" src="{{asset('public/assets/frontend/home_page_image/'.$hoem_page_content->buttom_image)}}"></div>
    </div>
</div>


{{--    footer section--}}
<div class="parallax" style="background-image:url({{asset('public/assets/frontend/img/Buskate-Ball-6-Aktu-Bright.jpg')}});">
    <div class="parallax-inner">
        <a class="top-up" href="#news-section"><i class="fa fa-angle-down"></i></a>
        <h3 class="para-intro">PREPARING TOMORROW'S GLOBAL LEADERS</h3>
    </div>
</div>
<section class="news-events" id="news-section">
    <div class="container">
        <div class="wow zoomIn animated" data-wow-delay="0.1s">
            <img alt="news" class="center-block" src="{{asset('public/assets/frontend/images/news-icon.svg')}}">
            <h3 class="section-heading text-center">News & Events</h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="row">
                    @foreach($limit_notice as $lm)
                    <div class="col-xs-12 col-sm-6 col-md-6 wow slideInUp animated">
                        <div class="news-box">
                            <a href="#">
                            </a>
                            <div class="news-content">
                                <strong class="news-date">{{$lm->date}}</strong>
                                <h4 class="media-heading"><a href="#">{{$lm->title}}</a></h4>
                                <p>{!!  substr(strip_tags($lm->content), 0, 450) !!}</p><a class="read-more" href="#">Read Full Article <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
                <p class="text-center"><a class="view-all" href="#">view-all news</a></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="event wow slideInUp animated">
                    <!-- Nav tabs -->
                    <ul class="nav nav-justified" role="tablist">
                        <li class="active" role="presentation">
                            <a aria-controls="profile" class="active" data-toggle="tab" href="#newsletter-list" role="tab">Newsletter</a>
                        </li>
                        <li role="presentation">
                            <a aria-controls="home" data-toggle="tab" href="#comingEvent" role="tab">Events</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade" id="comingEvent" role="tabpanel">
                            <a class="view-all" href="#">Go to Calendar</a>
                        </div>
                        <div class="tab-pane in fade active" id="newsletter-list" role="tabpanel">
                            @foreach($notice as $key=>$ns)

                            <div class="media">
                                <div class="media-left">
                                    <div class="event-date">
                                        <strong>{{$key+1}}</strong>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="#" target="_blank">
                                        <h4 class="media-heading">{{$ns->date}}</h4>
                                        <p>{{$ns->title}}</p></a>
                                </div>
                            </div>
                            @endforeach

                            <a class="view-all" href="#">view all Notice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{--    map--}}

<section class="parallax" style="background-image:url({{asset('public/assets/frontend/img/Campus-Up-View-1.jpg')}});">
    <div class="parallax-inner">
        <div class="play-video">
            <a data-target="#video-modal" data-toggle="modal" href="#"><img alt="play-video" src="{{asset('public/assets/frontend/images/play-button.svg')}}">What people are saying!</a>
        </div>
    </div>
</section>
<div class="wow fadeIn animated" style="width:100%;height:400px;"><iframe src="{{$hoem_page_content->map}}" rameborder="0" style="border:0" allowfullscreen height="100%" width="100%"></iframe></div>





<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade yt-modal" id="video-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <a class="close-modal" data-dismiss="modal" href="#"></a> <iframe allowfullscreen frameborder="0" src="{{$hoem_page_content->youtube_link}}"></iframe>
            </div>
        </div>
    </div>
</div><!-- Modal -->
@endsection

@push('js')
@endpush
