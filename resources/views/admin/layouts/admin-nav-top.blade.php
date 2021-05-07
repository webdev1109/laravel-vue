<!-- NAV ================================================== -->
<nav class="navbar  navbar-fixed-top wowmenu navbar-expand-md" role="navigation">
    <div class="container">
        <a class="navbar-brand logo-nav" href="/">
            <img src="/images/Pottorff-Logo-Black.png" alt="logo">
        </a>
        <ul id="nav" class="nav navbar-nav float-right">
            <li class="{{request()->is('admin')? "active": ""}} nav-item"><a href="/admin" class="nav-link">HOME</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    PRODUCTS
                </a>
                <div class="dropdown-menu">
                    <a href="/" class="dropdown-item">Products</a>
                    <a href="/" class="dropdown-item">Categories</a>
                </div>
            </li>
            <li class="{{request()->is('news')? "active": ""}} nav-item"><a href="{{route('admin.news.index')}}"
                                                                            class="nav-link">News</a></li>
            @can('run-special-commands')
                <li class="nav-divider"></li>
                <li class="{{request()->is('admin/commands*')? "active": ""}} nav-item"><a
                        href="{{route('admin.special.commands.index')}}" class="nav-link text-danger">COMMANDS</a></li>
            @endcan
        </ul>
    </div>
</nav>
<!-- /nav end--->
