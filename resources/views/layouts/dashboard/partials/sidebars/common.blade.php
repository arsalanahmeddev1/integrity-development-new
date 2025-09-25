@hasrole('super_admin|company_admin')
    <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a href="{{ route('admin.projects.index') }}" class="sidebar-link sidebar-title link-nav">
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
    <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <a href="{{ route('admin.billing.index') }}" class="sidebar-link sidebar-title link-nav">
            <svg class="stroke-icon">
                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#stroke-blog') }}"></use>
            </svg>
            <svg class="fill-icon">
                <use href="{{ asset('assets/libs/svg/icon-sprite.svg#fill-blog') }}"></use>
                <span>Billings</span>
        </a>
    </li>
@endhasrole
