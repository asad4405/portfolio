<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="pb-10 weight-600 font-18">Header Background</h4>
            <div class="mb-10 sidebar-btn-group pb-30">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="pb-10 weight-600 font-18">Sidebar Background</h4>
            <div class="mb-10 sidebar-btn-group pb-30">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="pb-10 weight-600 font-18">Menu Dropdown Icon</h4>
            <div class="pb-10 mb-10 sidebar-radio-group">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-1" checked="" />
                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-2" />
                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-3" />
                    <label class="custom-control-label" for="sidebaricon-3"><i
                            class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="pb-10 weight-600 font-18">Menu List Icon</h4>
            <div class="mb-10 sidebar-radio-group pb-30">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-1" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-2" />
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                            aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-3" />
                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-4" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-4"><i
                            class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-5" />
                    <label class="custom-control-label" for="sidebariconlist-5"><i
                            class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-6" />
                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="text-center reset-options pt-30">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset($generalsetting->dark_logo) }}" alt=""
                class="dark-logo" width="130" />
            <img src="{{ asset($generalsetting->logo) }}"
                alt="" class="light-logo" width="130" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-person-lines-fill"></span><span class="mtext">Personal Info</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.banner.edit', App\Models\Banner::first()->id) }}">Edit Banner</a>
                        </li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.about.edit', App\Models\About::first()->id) }}">Edit About</a>
                        </li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.counter.index') }}">Counter</a>
                        </li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.education.index') }}">Education</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.experience.index') }}">Eexperience</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.skill.index') }}">Skills</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-briefcase"></span><span class="mtext">Portfolio</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.portfolio-category.index') }}">Portfolio Category</a></li>
                        <li><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-chat-quote"></span><span class="mtext">Testimonials</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.testimonial.index') }}">Testimonial</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-journal-text"></span><span class="mtext">Blogs</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.blog-category.index') }}">Blog Category</a></li>
                        <li><a href="{{ route('admin.blog.index') }}">Blog</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-gear"></span><span class="mtext">Settings</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.setting.index') }}">General Setting</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.setting.contact.index') }}">Contact</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.setting.social-media.index') }}">Social Media</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.contactus.list') }}">Contact Us List</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.theme.index') }}">Theme</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-journal-text"></span><span class="mtext">Preparation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.preparation-category.index') }}">Preparation Category</a></li>
                        <li><a href="{{ route('admin.preparation.index') }}">Preparation</a></li>
                    </ul>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank"
                        class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                        <span class="mtext">Landing Page
                            <img src="{{ asset('public/Backend/backend_asset/vendors') }}/images/coming-soon.png"
                                alt="" width="25" /></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
