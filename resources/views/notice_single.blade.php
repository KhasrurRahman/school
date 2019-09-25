@extends('layouts.frontend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')
    <section class="principal-msg">
        <div class="container">
            <div class="site-breadcrumb">
                <ol class="breadcrumb">
                    <li class="item-home">
                        <a class="bread-link bread-home" href="{{route('notice')}}" title="Home">Notice</a>
                    </li>
                    <li class="item-current item-701"><strong title="Principal&#8217;s Message">{{$notice->title}}</strong></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="principal-content">
                        <h3><strong>{{$notice->title}}</strong></h3>

                        <p>{!! $notice->content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
