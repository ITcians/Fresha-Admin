<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/backend/uploads/site_logo/' . get_setting('site_logo')) }}" alt="" height="17">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/backend/uploads/site_logo/' . get_setting('site_logo')) }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.dashboard')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboard</span>
                    </a>
                    
                </li> <!-- end Dashboard Menu -->
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.category.index')}}">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Categories</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.calendar.index')}}">
                        <i class="ri-calendar-line"></i> <span data-key="t-apps">Calendar</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.sale.index')}}">
                        <i class="ri-price-tag-3-fill"></i> <span data-key="t-apps">Sales </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.client.index')}}">
                        <i class="ri-emotion-happy-line"></i> <span data-key="t-apps">Clients </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.catelog.index')}}">
                        <i class="ri-book-open-fill"></i> <span data-key="t-apps">Catalog </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.team.index')}}">
                        <i class="ri-team-fill"></i> <span data-key="t-apps">Team </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-line-chart-fill"></i> <span data-key="t-apps">Reports </span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admin.setting.index')}}">
                        <i class="ri-settings-4-fill"></i> <span data-key="t-apps">Settings </span>
                    </a>
                </li> --}}

                
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-settings-4-fill"></i> <span data-key="t-apps">Setting</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('admin.setting.index')}}" class="nav-link" data-key="t-calendar"> Admin Settings </a>
                            </li>
                            <hr class="text-light">
                            <li class="nav-item">
                                <a href="{{route('admin.setting.general')}}" class="nav-link" data-key="t-calendar"> General Settings </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.privacy-policy')}}" class="nav-link" data-key="t-overview"> Privacy Policy </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.terms-and-conditions')}}" class="nav-link" data-key="t-create-project"> Terms and Conditions </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>