@extends('layouts.backend.app')
@section('title','Home')
@push('css')

@endpush
@section('content')


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   Contact Information
                </h2>
            </div>
            <div class="body">
                <form action="{{route('admin.contact_info_save',$contact->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                    <label for="email_address">Mobile</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="mobile" name="mobile" value="{{$contact->mobile}}">
                        </div>
                    </div>
                    <label for="password">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="email" class="form-control" placeholder="Enter your Email" name="email" value="{{$contact->email}}">
                        </div>
                    </div>

                    <label for="password">Address</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Enter your address" name="address" value="{{$contact->address}}">
                        </div>
                    </div>

                    <label for="password">Logo</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="logo">
                        </div>
                        <img src="{{asset('public/assets/frontend/logo/'.$contact->logo)}}" style="height: 100px">
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
