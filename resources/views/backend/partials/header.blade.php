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
                    <button type="submit" class="btn btn-info d-flex align-items-center">
                        <i class="fas fa-sign-out-alt me-2"></i>
                        <span class="link-name">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</nav>
