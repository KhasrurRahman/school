@extends('layouts.backend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Add teacher Profile
                </h2>
            </div>
            <div class="body">
                <form action="{{route('admin.teacher_save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="email_address">Teacher Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"  class="form-control" name="name">
                        </div>
                    </div>
                    <label for="password">Teacher designation</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="designation">
                        </div>
                    </div>

                    <label for="password">Teacher Image</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">save</button>
                </form>
            </div>
        </div>
    </div>



<div class="row">

    @foreach($teacher as $ns)
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>
                   {{$ns->name}}
                    <small>{{$ns->designation}}</small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('admin.teacher_delete',$ns->id)}}" class=" waves-effect waves-block">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <img src="{{asset('assets/frontend/teacher_image/'.$ns->image)}}" height="100">
            </div>
        </div>
    </div>

        @endforeach
</div>




@endsection

@push('js')
@endpush
