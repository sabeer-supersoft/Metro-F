<main class="main-content">
    <div class="sidebar-wrapper">
        <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
                <ul class="sidebar_nav">
                    {{-- <li class="menu-title mt-30">
                        <span>Applications</span>
                    </li> --}}

                    <li>
                        <a href="{{url('/')}}" class>
                            <span class="nav-icon uil uil-chat"></span>
                            <span class="menu-text">Dashboard</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{url('/cases')}}" class>
                            <span class="nav-icon uil uil-chat"></span>
                            <span class="menu-text">Cases</span>

                        </a>
                    </li>

                    <li class="has-child">
                        <a href="#" class="has-child">
                            <span class="nav-icon uil uil-users-alt"></span>
                            <span class="menu-text">Users</span>
                            <span class="toggle-icon"></span>
                        </a>
                        <ul>

                            <li class>
                                <a href="{{url('/adduser')}}">Add User</a>
                            </li>
                            <li class>
                                <a href="{{url('/users')}}">Users
                                    Table</a>
                            </li>
                        </ul>
                    </li>
                  
                </ul>
            </div>
        </div>
    </div>
