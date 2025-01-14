<nav>
    <div class="logo-name">
        <div class="logo-image">
            <img src="{{asset('backend/images/logo.png')}}" alt="">
        </div>
        <span class="logo_name">CodingLab</span>
    </div>

    <div class="menu-items">
        <ul class="nav-links">

        </ul>

        <ul class="logout-mode">
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <i class="uil uil-signout"></i>
                    <button type="submit" class="logout-btn">
                        <span class="link-name">Logout</span>
                    </button>
                </form>
            </li>

            <li class="mode">
                <a href="#" class="mode-toggle-link">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>
