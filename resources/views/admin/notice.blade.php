@extends('layouts.backend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Add Notice
                </h2>
            </div>
            <div class="body">
                <form action="{{route('admin.notice_save')}}" method="post">
                    @csrf
                    <label for="email_address">Notice Tttle</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"  class="form-control" name="title">
                        </div>
                    </div>
                    <label for="password">Password</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" class="form-control" name="date">
                        </div>
                    </div>

                    <label for="password">notice Content</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text" class="form-control" name="content"></textarea>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">save</button>
                </form>
            </div>
        </div>
    </div>



<div class="row">

    @foreach($notice as $ns)
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>
                   {{$ns->title}}
                    <small>{{$ns->date}}</small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('admin.notice_delete',$ns->id)}}" class=" waves-effect waves-block">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                {{$ns->content}}
            </div>
        </div>
    </div>

        @endforeach
</div>




@endsection

@push('js')
@endpush
