<div class="nav-bottom">
    <div class="container">
        <ul class="nav page-navigation">
            <li class="nav-item">
                <a href="index.html" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a href="pages/widgets.html" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">Settings</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item mega-menu">--}}
                {{--<a href="#" class="nav-link"><i class="link-icon icon-film"></i><span class="menu-title">UI Elements</span><i class="menu-arrow"></i></a>--}}
                {{--<div class="submenu">--}}
                    {{--<div class="col-group-wrapper row">--}}
                        {{--<div class="col-group col-md-4">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-12">--}}
                                    {{--<p class="category-heading">Basic Elements</p>--}}
                                    {{--<div class="submenu-item">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<ul>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Accordion</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<ul>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/tooltips.html">Tooltip</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-group col-md-4">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-12">--}}
                                    {{--<p class="category-heading">Advanced Elements</p>--}}
                                    {{--<div class="submenu-item">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<ul>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context Menu</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                                {{--<ul>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a></li>--}}
                                                    {{--<li class="nav-item"><a class="nav-link" href="pages/ui-features/notifications.html">Notification</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-group col-md-4">--}}
                            {{--<p class="category-heading">Icons</p>--}}
                            {{--<ul class="submenu-item">--}}
                                {{--<li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>--}}
                                {{--<li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>--}}
                                {{--<li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line Icons</a></li>--}}
                                {{--<li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Settings</span><i class="menu-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="{{ route('companies') }}">Company</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('departments') }}">Department</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('tender.index') }}">Tender</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('zones') }}">Zone</a></li>


                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Tender Management</span><i class="menu-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="{{ route('tender.index') }}">Tender</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('tender.applied.list') }}">Applied Tender</a></li>
                    </ul>
                </div>
            </li>


            <li class="nav-item mega-menu">
                <a href="#" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">Data</span><i class="menu-arrow"></i></a>
                <div class="submenu">
                    <div class="col-group-wrapper row">
                        <div class="col-group col-md-6">
                            <p class="category-heading">Charts</p>
                            <div class="submenu-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google Chart</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Table</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Maps</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item mega-menu">
                <a href="#" class="nav-link"><i class="link-icon icon-wallet"></i><span class="menu-title">Pages</span><i class="menu-arrow"></i></a>
                <div class="submenu">
                    <div class="col-group-wrapper row">
                        <div class="col-group col-md-3">
                            <p class="category-heading">User Pages</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">Error Pages</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">400</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/error-505.html">505</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">E-commerce</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-3">
                            <p class="category-heading">General</p>
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search Results</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
                <div class="submenu">
                    <ul class="submenu-item">
                        <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/documentation/documentation.html" class="nav-link"><i class="link-icon icon-docs"></i><span class="menu-title">Documentation</span></a>
            </li>
        </ul>
    </div>
</div>