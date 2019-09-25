@extends('layouts.frontend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')
    <section class="news-events news">
        <div class="container">
            <div class="banner-box">
                <h3 class="btm-line">Teachers</h3>
            </div>
            <div class="row">
            @foreach($teacher as $ts)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="news-box">
                        <div class="news-img" style="background-image:url({{asset('assets/frontend/teacher_image/'.$ts->image)}});"></div>
                        <div class="news-content"> <strong class="news-date">{{$ts->name}}</strong>
                            <h4 class="media-heading"><a href="">{{$ts->designation}}</a></h4>
                        </div>
                    </div>
                </div>
               @endforeach

            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
