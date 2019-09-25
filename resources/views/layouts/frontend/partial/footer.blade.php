<footer class="footer">
    @php
    $home = App\contact_info::all()->first();
    @endphp


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-5 wow slideInDown animated">
                <div class="footer-text">
                    <p>{{$home->address}}</p><a href="#" target="_blank"></a> <a href="#" target="_blank"><img alt="ibo-footer-logo" class="ib-logo" src="{{asset('public/assets/frontend/logo/'.$home->logo)}}"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-md-push-3 wow slideInDown animated">
                <address class="footer-address">
                    <h4>Office</h4>
                    <p>{{$home->address}}Mobile: {{$home->mobile}}<br>
                        E-mail : <a href="#"></a></p>
                </address>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-pull-3 wow slideInDown animated">
                <div class="quick-links">
                    <ul>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39" id="menu-item-39">
                            <a href="{{route('gallery')}}">Gallery</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37" id="menu-item-37">
                            <a href="{{route('notice')}}">Notice</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-369" id="menu-item-369">
                            <a href="{{route('teacher')}}">Teachers</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38" id="menu-item-38">
                            <a href="">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="social-links">
                        <ul class="list-inline">
                            <li>
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">

                </div>
            </div>
        </div>
    </div>
</footer>

