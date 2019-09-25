<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('public/assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
            <div class="email"></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href=""><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">

                            <i class="material-icons">input</i>Log Out
                        </a>


                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if(Request::is('admin*'))
                <li class="{{Request::is('admin/dashbord')?'active': '' }}">
                    <a href="{{route('admin.dashbord')}}">
                        <i class="material-icons">home</i>
                        <span>Dashbord</span>
                    </a>
                </li>
            @endif

            <li class="">
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">schedule</i>
                    <span>menu</span>
                </a>
                <ul class="ml-menu" style="display: none;">
                    <li>
                        <a href="{{route('admin.menu')}}" class=" waves-effect waves-block">Add Menu
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.submenu')}}" class=" waves-effect waves-block">Add SubMenu
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="{{route('admin.contact_info')}}">
                    <i class="material-icons">home</i>
                    <span>Contact Info</span>
                </a>
            </li>

            <li class="">
                <a href="{{route('admin.gallery')}}">
                    <i class="material-icons">home</i>
                    <span>Gallery</span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.slider')}}">
                    <i class="material-icons">home</i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.teacher')}}">
                    <i class="material-icons">home</i>
                    <span>teachers</span>
                </a>
            </li>

            <li class="">
                <a href="{{route('admin.notice')}}">
                    <i class="material-icons">home</i>
                    <span>notice</span>
                </a>
            </li>

            <li class="">
                <a href="{{route('admin.home_page_content')}}">
                    <i class="material-icons">home</i>
                    <span>home Page Content</span>
                </a>
            </li>


        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2019 <a href="javascript:void(0);">developed by - Md.khasrur Rahman</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
