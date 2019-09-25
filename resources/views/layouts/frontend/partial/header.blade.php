<body class="home page page-id-4 page-template page-template-template-parts page-template-front-page page-template-template-partsfront-page-php">
<div class="header-top hidden-xs">
    @php
        $home = App\contact_info::all()->first();
    @endphp
    <div class="container-fluid">
        <ul class="list-inline">
            <li>
                <a href="{{route('home')}}"><img alt="logo" class="logo" src="{{asset('public/assets/frontend/logo/'.$home->logo)}}"></a>
            </li>
            <li class="pull-right">

            </li>
        </ul>
    </div>
</div>

@php
use App\contact_info;use App\menu;$menu = menu::all();
$contact = contact_info::all()->first();
@endphp


<nav class="navbar navbar-default navbar-site">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand visible-xs" href="{{route('home')}}"></a>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="home" style="display:none;">
                    <a href="{{route('home')}}"><img alt="logo navigation" src="{{asset('public/assets/frontend/logo/',$contact->logo)}}"></a>
                </li>
@foreach($menu as $m)

    @if(isset($m->submenu))
                        <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" href="{{route('Single_page_view',$m->url)}}" role="button">{{$m->title}}</a>
                            <ul class="dropdown-menu">
                                @foreach($m->submenu as $sub)
                                    <li>
                                        <a href="{{route('Single_page_view',$sub->url)}}">{{$sub->title}}</a>
                                    </li>
                                    @endforeach
                            </ul>
                        </li>

        @else
                        <li class="">
                            <a href="{{route('Single_page_view',$m->url)}}">{{$m->title}}</a>
                        </li>
    @endif

@endforeach

                <li class="">
                    <a href="{{route('gallery')}}">Gallery</a>
                </li>

                <li class="">
                    <a href="{{route('notice')}}">Notice</a>
                </li>

                <li class="">
                    <a href="{{route('teacher')}}">Teachers</a>
                </li>

                <li class="">
                    <a href="{{route('contact')}}">contact</a>
                </li>


                <li class="visible-xs">
                    <a class="search-icon" href="javascript:void(0)"></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    <div class="search-bar">
        <div class="container-fluid" style="display:none;">
            <form action="" method="" role="">
                <input class="form-control" name="s" placeholder="Search Programmes, Interest & More..." type="text">
            </form>
        </div>
    </div>
</nav>
