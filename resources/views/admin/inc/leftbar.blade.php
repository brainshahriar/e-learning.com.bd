<div class="sb2-13">
    <ul class="collapsible" data-collapsible="accordion">
        <li><a href="admin.html" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
        </li>
        <li><a href="javascript:void(0)" class="collapsible-header" @yield('categories')><i class="fa fa-book" aria-hidden="true"></i> Categories</a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="{{ route('categories') }}" @yield('manage-categories')>Manage Categories</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>