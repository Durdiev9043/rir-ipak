<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.region.index') ? 'active' : '' }}">
                    <a href="{{route('admin.region.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Туманлар</p>
                    </a>
                </li>
{{--                <li class="nav-item {{  request()->routeIs('admin.kk.index') ? 'active' : '' }}">--}}
{{--                    <a href="{{route('admin.kk.index')}}">--}}
{{--                        <i class="fas fa-user"></i>--}}
{{--                        <p>klasterlar</p>--}}
{{--                    </a>--}}
{{--                </li>--}}

            </ul>


        </div>
    </div>
</div>


