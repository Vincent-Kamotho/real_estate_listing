<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{url('admin1')}}"><img src="{{asset('myassets/img/logo.png')}}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('myassets/img/menu-icon/dashboard.svg')}}" alt>
                </div>
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a class="active" href="index.html">Sales</a></li>
                <li><a href="#">Default</a></li>
                <li><a href="#">Dark Menu</a></li>
            </ul>
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('myassets/img/menu-icon/4.svg')}}" alt>
                </div>
                <span>Configurations</span>
            </a>
            <ul>
                <li><a href="{{route('property-types')}}">Property Types</a></li>
                <li><a href="{{route('property-subtypes')}}">Property SubTypes</a></li>
                <li><a href="{{route('property')}}">Property SubType Hierarchies</a></li>
            </ul>
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('myassets/img/menu-icon/download.png')}}" alt>
                </div>
                <span>Users</span>
            </a>
            <ul>
                <li><a href="{{route('clients')}}">Clients</a></li>
            </ul>
        </li>
    </ul>
</nav>