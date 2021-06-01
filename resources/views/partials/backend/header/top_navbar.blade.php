<nav class="navbar-custom">
    <ul class="list-inline float-right mb-0">
        <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                <i class="far fa-envelope"></i>
                <span class="notif-bullet"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                <div class="dropdown-item noti-title">
                    <h5>
                        <small>
                            <span class="label label-danger pull-xs-right">12</span>Mailbox</small>
                    </h5>
                </div>
                <a href="mail-all.html" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                        <b>John Doe</b>
                        <span>New message received</span>
                        <small class="text-muted">3 minutes ago</small>
                    </p>
                </a>
                <a href="mail-all.html" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                        <b>Michael Smith</b>
                        <span>New message received</span>
                        <small class="text-muted">18 minutes ago</small>
                    </p>
                </a>
                <a href="mail-all.html" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                        <b>John Lenons</b>
                        <span>New message received</span>
                        <small class="text-muted">Yesterday, 18:27</small>
                    </p>
                </a>
                <a href="mail-all.html" class="dropdown-item notify-item notify-all">
                    View All Messages
                </a>
            </div>
        </li>
        <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                <i class="far fa-bell"></i>
                <span class="notif-bullet"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                <div class="dropdown-item noti-title">
                    <h5>
                        <small>
                            <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                    </h5>
                </div>
                <a href="#" class="dropdown-item notify-item">
                    <div class="notify-icon bg-faded">
                        <img src="{{ asset('assets/backend/images/avatars/avatar2.png') }}" alt="img" class="rounded-circle img-fluid">
                    </div>
                    <p class="notify-details">
                        <b>John Doe</b>
                        <span>User registration</span>
                        <small class="text-muted">3 minutes ago</small>
                    </p>
                </a>
                <a href="#" class="dropdown-item notify-item">
                    <div class="notify-icon bg-faded">
                        <img src="{{ asset('assets/backend/images/avatars/avatar3.png') }}" alt="img" class="rounded-circle img-fluid">
                    </div>
                    <p class="notify-details">
                        <b>Michael Cox</b>
                        <span>Task 2 completed</span>
                        <small class="text-muted">12 minutes ago</small>
                    </p>
                </a>
                <a href="#" class="dropdown-item notify-item">
                    <div class="notify-icon bg-faded">
                        <img src="{{ asset('assets/backend/images/avatars/avatar4.png') }}" alt="img" class="rounded-circle img-fluid">
                    </div>
                    <p class="notify-details">
                        <b>Michelle Dolores</b>
                        <span>New job completed</span>
                        <small class="text-muted">35 minutes ago</small>
                    </p>
                </a>
                <a href="#" class="dropdown-item notify-item notify-all">
                    View All Allerts
                </a>
            </div>
        </li>
        <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                <i class="fas fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                <div class="dropdown-item noti-title">
                    <h5>
                        <small>Settings</small>
                    </h5>
                </div>
                <a href="#" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                        <i class="fas fa-cog"></i>
                        <b>Settings 1</b>
                    </p>
                </a>
                <a href="#" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                        <i class="fas fa-cog"></i>
                        <b>Settings 2</b>
                    </p>
                </a>
                <a href="#" class="dropdown-item notify-item">
                    <p class="notify-details ml-0">
                        <i class="fas fa-cog"></i>
                        <b>Settings 3</b>
                    </p>
                </a>
            </div>
        </li>
        <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/backend/images/avatars/admin.png') }}" alt="Profile image" class="avatar-rounded">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <div class="dropdown-item noti-title">
                    <h5 class="text-overflow">
                        <small>Hello, admin</small>
                    </h5>
                </div>
                <a href="profile.html" class="dropdown-item notify-item">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
                <!-- <a href="#" class="dropdown-item notify-item">
                    <i class="fas fa-power-off"></i>
                    <span>Logout</span>
                </a> -->
                <div class="dropdown-item notify-item" onclick="document.getElementById('logout-form').submit();">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                    <i class="fas fa-power-off"></i>
                    <span>Logout</span>
                </div>
            </div>
        </li>
    </ul>
    <ul class="list-inline menu-left mb-0">
        <li class="float-left">
            <button class="button-menu-mobile open-left">
                <i class="fas fa-bars"></i>
            </button>
        </li>
    </ul>
</nav>
