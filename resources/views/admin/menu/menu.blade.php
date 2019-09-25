@extends('layouts.backend.app')
@section('title','menu')
@push('css')

@endpush
@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Menu
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">menu name</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Add content</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menu as $key=>$mnu)
                            <tr style="background: #c6d0d8">
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$mnu->title}}</td>
                                <td><a href="{{route('admin.menu_delete',$mnu->id)}}"><button class="btn btn-danger" type="submit">delete</button></a></td>
                                <td><a href="{{route('admin.single_page_content',$mnu->url)}}"><button class="btn btn-danger" type="submit">Add Content</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>


    <form action="{{route('admin.menu_save')}}" method="get">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Add Menu</span>
            </div>
            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="title">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>



@endsection

@push('js')
@endpush
