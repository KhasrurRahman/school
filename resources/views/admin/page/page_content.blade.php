@extends('layouts.backend.app')
@section('title','menu')
@push('css')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush
@section('content')

<div class="container">
    <form action="{{route('admin.page_content_save',$page->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{$page->title}} -- page
                        </h2>
                    </div>

                    <div class="body">
                        <textarea name="page_content" class="form-control my-editor">
                            {{$page->content}}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="card">
                <div class="header">
                    <h2>
                        Upload a banner image for the top of the page(1140x321)
                    </h2>

                </div>
                <div class="body">
                    <input type="file" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="image">

                    <img src="{{asset('assets/frontend/banner_image/'.$page->image)}}" style="height: 100px">
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">save</button>

    </form>

</div>


@endsection
@push('js')

    <script>
        var editor_config = {
            path_absolute : "/school2/",
            selector: "textarea.my-editor",
            theme: "modern",
            height: 300,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endpush
