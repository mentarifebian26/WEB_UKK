<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block bg-white">
    <div class="logo">
        <a href="#">
            <img src="{{asset('images/bunight2.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                    </ul>
                </li>
                <li>
                    <a href="{{route('contacts.index')}}">
                        <i class="fas fa-chart-bar"></i>Data Contacts Us</a>
                </li>
        
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->