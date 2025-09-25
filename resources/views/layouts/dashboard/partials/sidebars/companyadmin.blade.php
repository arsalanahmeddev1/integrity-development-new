@role('company_admin')
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a href="" class="sidebar-link sidebar-title link-nav">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Company Profile</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Projects List</a></li>
                            <li><a href="">Add Projects</a></li>
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
                                <span>Profiles</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Projects List</a></li>
                            <li><a href="">Add Projects</a></li>
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
                                <span>Users</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Projects List</a></li>
                            <li><a href="">Add Projects</a></li>
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
                                <span>Billings</span>
                        </a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="">Projects List</a></li>
                            <li><a href="">Add Projects</a></li>
                        </ul> --}}
                    </li>
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a  class="sidebar-link sidebar-title">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                                <span>Submittals</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="">Total Submittals</a></li>
                            <li><a href="">Pending Submittals</a></li>
                            <li><a href="">Approved Submittals</a></li>
                            <li><a href="">Needs Revisions</a></li>
                        </ul>
                    </li>
                    {{-- super admin menu end --}}
                @endrole