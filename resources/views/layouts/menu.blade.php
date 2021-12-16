<!-- need to remove -->
<p class="container">MENU</p>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{'home' == request()->path() ? 'active' : ''}}">
        <i class="nav-icon fas fa-th-large"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('database') }}" class="nav-link {{'database' == request()->path() ? 'active' : ''}}">
            <i class="nav-icon fas fa-database"></i>
            <p>Database</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('ticket') }}" class="nav-link {{'ticket' == request()->path() ? 'active' : ''}}">
        <i class="nav-icon fas fa-ticket-alt"></i>
        <p>Tickets</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('camera') }}" class="nav-link {{'camera' == request()->path() ? 'active' : ''}}">
        <i class="nav-icon fas fa-video"></i>
        <p>Cameras</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('analytic') }}" class="nav-link {{'analytic' == request()->path() ? 'active' : ''}}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>Analytics</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('setting') }}" class="nav-link {{'setting' == request()->path() ? 'active' : ''}}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Settings</p>
    </a>
</li>



