<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div class="logo-wrapper">
        {{-- <a href="{{ route('admin.dashboard') }}"> --}}
        <a href="">
            <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="" />
            <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="" />
        </a>
        <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="">
            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" />
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" />
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div>
                        <h6>Pinned</h6>
                    </div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">General</h6>
                    </div>
                </li>
                {{-- super admin menu start --}}
                @include('layouts.dashboard.partials.sidebars.superadmin')
                {{-- super admin menu end --}}

                {{-- company admin menu start --}}
                @include('layouts.dashboard.partials.sidebars.companyadmin')

            </ul>
        </div>
        <div class="right-arrow" id="right-arrow">
            <i data-feather="arrow-right"></i>
        </div>
    </nav>
</div>
