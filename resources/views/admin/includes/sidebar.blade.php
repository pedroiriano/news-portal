<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('backend/assets/images/logo/prokopim-dark.png') }}" alt="">
                <img class="img-fluid for-dark" src="{{ asset('backend/assets/images/logo/prokopim-light.png') }}" alt="">
            </a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid" src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt="">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
            </div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end">
                            <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title">
                            <i data-feather="home"></i><span>Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="{{ (Route::currentRouteName() == 'Admin.Dashboard') ? 'active' : '' }}" aria-current="{{ (Route::currentRouteName() == 'Admin.Dashboard') ? 'true' : 'false' }}">
                                    <span>Overview</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0);">
                            <i data-feather="anchor"></i><span>Starter kit</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a class="submenu-title" href="javascript:void(0);">
                                    color version<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="javascript:void(0);">Layout Light</a></li>
                                    <li><a href="javascript:void(0);">Layout Dark</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0);">
                                    Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="javascript:void(0);">Boxed</a></li>
                                    <li><a href="javascript:void(0);">RTL</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><span>Hide menu on Scroll</span></a>
                            </li>
                            <li>
                                <a class="submenu-title" href="javascript:void(0);">
                                    Footers<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="javascript:void(0);">Footer Light</a></li>
                                    <li><a href="javascript:void(0);">Footer Dark</a></li>
                                    <li><a href="javascript:void(0);">Footer Fixed</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0);">
                            <i data-feather="headphones"></i><span>Raise Support</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0);">
                            <i data-feather="file-text"></i><span>Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>