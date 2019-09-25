@extends('layouts.backend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Add slider Image
                </h2>
            </div>
            <div class="body">
                <form action="{{route('admin.slider_save')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="password">Image</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="image">
                        </div>
                        <img src="" style="height: 100px">
                    </div>

                    <label for="password">Image Text</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="text">
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">save</button>
                </form>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    slider image
                </h2>

            </div>
            <div class="body">


                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    @foreach($image as $img)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <img class="img-responsive thumbnail" src="{{asset('public/assets/frontend/slider/'.$img->image)}}">
                        <span>
                            <a href="{{route('admin.slider_delete',$img->id)}}"><button type="button" class="btn btn-success waves-effect">Delete</button></a>
                        </span>
                    </div>
                    @endforeach
                </div>



            </div>
        </div>
    </div>



@endsection

@push('js')
@endpush
