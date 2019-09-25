@extends('layouts.frontend.app')
@section('title',$page->title)
@push('css')

@endpush
@section('content')

    <section class="principal-msg">
        <div class="container">
            <img alt="Principal's Message banner" class="img-responsive" src="{{asset('public/assets/frontend/banner_image/'.$page->image)}}">
            <div class="site-breadcrumb">
                <ol class="breadcrumb">
                    <li class="item-home">
                        <a class="bread-link bread-home" href="{{route('home')}}" title="Home">Home</a>
                    </li>
                    <li class="item-current item-701"><strong title="Principal&#8217;s Message">{{$page->title}}</strong></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="principal-content">
                        <h3><strong>{{$page->title}}</strong></h3>

                        <p>{!! $page->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

@push('js')
@endpush
