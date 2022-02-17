<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

            @if(\Illuminate\Support\Facades\Auth::user()->role==0)
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

                <li class="nav-item {{  request()->routeIs('admin.klaster.index') ? 'active' : '' }}">
                    <a href="{{route('admin.klaster.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Кластер</p>
                    </a>
                </li>
                @endif
            </ul>


        </div>
    </div>
</div>


