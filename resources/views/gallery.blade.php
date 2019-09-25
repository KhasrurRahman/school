@extends('layouts.frontend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')
    <section class="photo-gallery">
        <div class="container-fluid">
            <div class="site-breadcrumb">
            </div>
            <h3 class="btm-line">Gallery</h3>
            <div id="lightgallery">
                @foreach($gallery as $image)
                    <a href="{{asset('assets/frontend/gallery/'.$image->image)}}" data-sub-html="<h4></h4><p></p>"><img class="img-responsive" src="{{asset('assets/frontend/gallery/'.$image->image)}}" /></a>
                    @endforeach
            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush
