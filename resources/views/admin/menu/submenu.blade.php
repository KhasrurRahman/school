@extends('layouts.backend.app')
@section('title','Home')

@push('css')
    <link href="{{ asset('public/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Menu and dropdown menu and delete here
                    </h2>

                </div>
                <div class="body">

                    @foreach($menu  as $key=>$mnu )
                    <a class="btn bg-pink waves-effect m-b-15 collapsed" role="button" data-toggle="collapse" href="#{{$key+1}}" aria-expanded="false" aria-controls="collapseExample">
                        {{$mnu->title}}
                    </a>

                    <div class="collapse" id="{{$key+1}}" aria-expanded="false" style="height: 0px;">
                        <div class="well">

                                <ul class="list-group">
                                    @foreach($mnu->submenu as $submenu)
                                    <li class="list-group-item">{{$submenu->title}}<span class="badge bg-orange">
                                            <a href="{{route('admin.submenu_delete',$submenu->id)}}">Delete Menu</a></span>
                                        <span class="badge bg-orange">
                                            <a href="{{route('admin.single_page_content',$submenu->url)}}">Add content</a></span>
                                    </li>
                                    @endforeach
                                </ul>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add SubMenu
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.sub_menu_save')}}" method="get">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-5">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Title" name="title">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="category">select main Menu</label>
                                        <select name="menu" id="category" class="form-control show-tick" data-live-search="true">
                                            @foreach($menu as $mnu)
                                                <option value="{{ $mnu->id }}">
                                                    {{ $mnu->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg2 col-md2 col-sm2 col-xs-2">
                                <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
<script src="{{asset('public/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
@push('js')
@endpush
