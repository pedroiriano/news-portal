@extends('layouts.backend')

@section('content')
<div class="page-body-wrapper horizontal-menu">
    {{-- BEGIN::Page Sidebar --}}
    <div class="sidebar-wrapper">
        <div>
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="img-fluid for-light" src="{{ asset('backend/assets/images/logo/logo.png') }}" alt="">
                    <img class="img-fluid for-dark" src="{{ asset('backend/assets/images/logo/logo_dark.png') }}" alt="">
                </a>
                <div class="back-btn">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                </div>
            </div>
            <div class="logo-icon-wrapper">
                <a href="index.html">
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
                            <a class="sidebar-link sidebar-title" href="../theme/index.html" target="_blank">
                                <i data-feather="home"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="#">
                                <i data-feather="anchor"></i><span>Starter kit</span>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a class="submenu-title" href="#">
                                        color version<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="nav-sub-childmenu submenu-content">
                                        <li><a href="index.html">Layout Light</a></li>
                                        <li><a href="layout-dark.html">Layout Dark</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="submenu-title" href="#">
                                        Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="nav-sub-childmenu submenu-content">
                                        <li><a href="boxed.html">Boxed</a></li>
                                        <li><a href="layout-rtl.html">RTL</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="hide-on-scroll.html"><span>Hide menu on Scroll</span></a>
                                </li>
                                <li>
                                    <a class="submenu-title" href="#">
                                        Footers<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="nav-sub-childmenu submenu-content">
                                        <li><a href="footer-light.html">Footer Light</a></li>
                                        <li><a href="footer-dark.html">Footer Dark</a></li>
                                        <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="http://support.pixelstrap.com/help-center" target="_blank">
                                <i data-feather="headphones"></i><span>Raise Support</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title" href="https://docs.pixelstrap.com/cuba/all_in_one/document/index.html" target="_blank">
                                <i data-feather="file-text"></i><span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
        </div>
    </div>
    {{-- END::Page Sidebar --}}

    {{-- BEGIN::Page Body --}}
    <div class="page-body">
        {{-- BEGIN::Page Body Title --}}
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Layout Light</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Color version</li>
                            <li class="breadcrumb-item active">Layout light</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- END::Page Body Title --}}

        {{-- BEGIN::Page Body Container --}}
        <div class="container-fluid">
            <div class="row starter-main">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Kick start your project development !</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa-spin fa-cog"></i></li>
                                    <li><i class="view-html fa fa-code"></i></li>
                                    <li><i class="icofont icofont-maximize full-card"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                                    <li><i class="icofont icofont-error close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Cuba Admin provides useful features to kick start your project development with no efforts !</p>
                            <ul>
                                <li>
                                    <p>Cuba Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.</p>
                                </li>
                                <li>
                                    <p>Every components in Cuba Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.</p>
                                </li>
                                <li>
                                    <p>It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.</p>
                                </li>
                            </ul>
                            <div class="code-box-copy">
                                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy">
                                    <i class="icofont icofont-copy-alt"></i>
                                </button>
                                <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
                                &lt;p&gt;Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Cuba Admin provides useful features to kick start your project development with no efforts !&lt;/p&gt;
                                &lt;ul&gt;
                                &lt;li&gt;&lt;p&gt;Cuba Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.&lt;/p&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;p&gt;Every components in Cuba Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.&lt;/p&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;p&gt;It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.&lt;/p&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;!-- Cod Box Copy end --&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>With Header</h5>
                        </div>
                        <div class="card-body">
                            <h5>Content title</h5>
                            <p>Add a heading to card with <code>.card-header</code> class</p>
                            <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                            <p>Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-no-border">
                            <h5>With Header & No Border</h5>
                        </div>
                        <div class="card-body">
                            <h5>Content title</h5>
                            <p>Add a heading to card with <code>.card-header </code> class & without header border<code>.border-bottom-0</code> class.</p>
                            <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                            <p>Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END::Page Body Container --}}
    </div>
    {{-- END::Page Body --}}

    @include('includes.backend-footer')
</div>
@endsection
