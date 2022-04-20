<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            @auth
            @if(Auth::user()->utype === 'ADM')
            <ul>
                @if (request()->is('admin/dashboard'))
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif
                <li class="list-divider"></li>
                @if (request()->is('booking/view'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/add-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/edit-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-customer.html"> All customers </a></li>
                        <li><a href="edit-customer.html"> Edit Customer </a></li>
                        <li><a href="add-customer.html"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-staff.html">All Products </a></li>
                        <li><a href="add-staff.html"> Add Products </a></li>
                    </ul>
                </li>
            </ul>
            @else
            <ul>
                @if (request()->is('user/dashboard'))
                <li class="active">
                    <a href="{{ route('user.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('user.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @endif
                <li class="list-divider"></li>
                @if (request()->is('booking/view'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/add-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @elseif (request()->is('booking/edit-booking'))
                <li class="submenu">
                    <a class="subrop-booking" href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-suitcase"></i>
                        <span> Booking </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li>
                            <a href="{{ route('booking.view') }}"> All Booking </a>
                        </li>
                        <li>
                            <a href="{{ route('booking.add') }}"> Add Booking </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="submenu"> <a href="#"><i class="fab fa-product-hunt"></i> <span> Products </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">All Products</a></li>
                        <li><a href="payments.html">Request Products</a></li>
                    </ul>
                </li>
            </ul>
            @endif
            @endauth
        </div>
    </div>
</div>