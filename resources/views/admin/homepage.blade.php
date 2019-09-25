@extends('layouts.backend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Add home page content
                </h2>
            </div>
            <div class="body">
                <form action="{{route('admin.home_page_content_save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="email_address">left side bar url</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"  class="form-control" name="left_link" value="{{$hoem_page_content->left_link}}">
                        </div>
                    </div>

                    <label for="password">left side bar image</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="left_image">
                        </div>
                        <img src="{{asset('public/assets/frontend/home_page_image/'.$hoem_page_content->left_image)}}" style="height: 100px">
                    </div>

                    <label for="email_address">right side bar url</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"  class="form-control" name="link" value="{{$hoem_page_content->link}}">
                        </div>
                    </div>

                    <label for="password">right side bar image</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="right_image">
                        </div>
                        <img src="{{asset('public/assets/frontend/home_page_image/'.$hoem_page_content->right_image)}}" style="height: 100px">
                    </div>

                    <label for="email_address">Youtube Link</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"  class="form-control" name="youtube_link" value="{{$hoem_page_content->youtube_link}}">
                        </div>
                    </div>

                    <label for="email_address">Buttom left side Image</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file"  class="form-control" name="buttom_image">
                        </div>
                        <img src="{{asset('public/assets/frontend/home_page_image/'.$hoem_page_content->buttom_image)}}" style="height: 100px">
                    </div>

                    <label for="email_address">Map</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text"  class="form-control" name="map" value="{{$hoem_page_content->map}}">
                        </div>
                    </div>

                    <label for="email_address">About Section</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  class="form-control" name="about">{{$hoem_page_content->about}}</textarea>
                        </div>
                    </div>

                    <label for="email_address">student life section</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea type="text"  class="form-control" name="student_life" >{{$hoem_page_content->about}}</textarea>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">save</button>
                </form>
            </div>
        </div>
    </div>



@endsection

@push('js')
@endpush
