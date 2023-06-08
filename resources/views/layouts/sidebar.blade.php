<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{  Request::is('dashboard/barangs*') ? 'active' : ''  }}" href="/dashboard/barangs">
                    <span data-feather="box" class="align-text-bottom"></span>
                    Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{  Request::is('dashboard/cart') ? 'active' : ''  }}" href="/dashboard/cart">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Cart
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{  Request::is('dashboard/transaksi') ? 'active' : ''  }}" href="/dashboard/transaksi">
                    <span data-feather="dollar-sign" class="align-text-bottom"></span>
                    Transaksi
                </a>
            </li>
            <li class="nav-item {{  Request::is('dashboard/user') ? 'active' : ''  }}">
                <a class="nav-link" href="/dashboard/user">
                    <span data-feather="user" class="align-text-bottom"></span>
                    User
                </a>
            </li>
        </ul>
    </div>
</nav>
