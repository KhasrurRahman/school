@extends('layouts.frontend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')
    <section class="news-events newsletter">
        <div class="container">
            <div class="row">


                @foreach($notice as $ns)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="media">
                        <div class="media-left">
                            <div class="event-date"> <strong>{{$ns->date}}</strong></div>
                        </div>
                        <div class="media-body"> <a href="{{route('notice_single',$ns->id)}}" target="_blank">
                                <h4 class="media-heading">{{$ns->title}}</h4>
                            </a> </div>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </section>

@endsection

@push('js')
@endpush
