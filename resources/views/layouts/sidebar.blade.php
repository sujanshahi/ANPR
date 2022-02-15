<aside class="main-sidebar sidebar-light-primary">
    <!-- <a href="{{ route('home') }}" class="brand-link">
        <img src="user8-128x128.jpg"
             alt=""
             class="brand-image img-circle elevation-1">
        <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
    </a> -->
    <a href="#" class="nav-link text-center">
        <img src="user1.jpg"
                class="img-circle" alt="User Image">
        <br>
        <span class="container text-lg">{{ Auth::user()->name }}</span>
        <br>
        <small href="#" class="container">MyProfile</small>
    </a>
    <hr>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

    <style>
        .img-circle{
            height: 90px;
            width: 90px;
        }
        .text-lg{
            color:black;
        }
    </style>

</aside>
