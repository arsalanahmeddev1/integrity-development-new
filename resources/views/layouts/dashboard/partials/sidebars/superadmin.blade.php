@role('super_admin')
                    
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a href="{{ route('admin.companies.index') }}" class="sidebar-link sidebar-title link-nav">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Companies</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Companies List</a></li>
                            <li><a href="">Add Companies</a></li>
                        </ul> --}}
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a href="{{ route('superadmin.projects.index') }}" class="sidebar-link sidebar-title link-nav">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Projects</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Companies List</a></li>
                            <li><a href="">Add Companies</a></li>
                        </ul> --}}
                    </li>
                    
                    {{-- @include('layouts.dashboard.partials.sidebars.common')  Projects --}}
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a href="{{ route('superadmin.billing.index') }}" class="sidebar-link sidebar-title link-nav">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Billings</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a href="" class="sidebar-link sidebar-title link-nav">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Users</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Users List</a></li>
                            <li><a href="">Add User</a></li>
                        </ul> --}}
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a href="" class="sidebar-link sidebar-title link-nav">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Notifications</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Projects List</a></li>
                            <li><a href="">Add Projects</a></li>
                        </ul> --}}
                    </li>
                @endrole