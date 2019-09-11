{{-- Main Sidebar Container --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- Brand Logo --}}
    <a href="/" class="brand-link">
        <img src="{{ asset('admin-lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar user panel (optional) --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        {{-- Sidebar Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library --}}
                <li class="nav-item has-treeview {{ $page == 'dashboard' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/" class="nav-link {{ $section == 'index' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/index_2" class="nav-link {{ $section == 'index_2' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v2</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/index_3" class="nav-link {{ $section == 'index_3' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v3</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                <a href="/widgets" class="nav-link {{ $page == 'widgets' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                    </p>
                </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                    Layout Options
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Boxed</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                    </a>
                    </li>
                </ul>
                </li>

                <li class="nav-item has-treeview {{ $page == 'charts' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'charts' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/charts/chart_js" class="nav-link {{ $section == 'chart_js' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ChartJS</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/charts/flot" class="nav-link {{ $section == 'flot' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Flot</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/charts/inline" class="nav-link {{ $section == 'inline' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inline</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview {{ $page == 'ui' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ $page == 'ui' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                    UI Elements
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="/ui/general" class="nav-link {{ $section == 'general' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/icons" class="nav-link {{ $section == 'icons' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Icons</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/buttons" class="nav-link {{ $section == 'buttons' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Buttons</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/sliders" class="nav-link {{ $section == 'sliders' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sliders</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/modals" class="nav-link {{ $section == 'modals' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Modals & Alerts</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/navbar" class="nav-link {{ $section == 'navbar' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Navbar & Tabs</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="/ui/timeline" class="nav-link {{ $section == 'timeline' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Timeline</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/UI/ribbons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ribbons</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General Elements</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editors</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                    Tables
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="pages/tables/simple.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Simple Tables</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/tables/data.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>DataTables</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>jsGrid</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                    </p>
                </a>
                </li>
                <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                    Gallery
                    </p>
                </a>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inbox</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Compose</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Read</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/profile.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/e_commerce.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>E-commerce</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/projects.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Projects</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/project_add.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Add</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/project_edit.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Edit</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/project_detail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Detail</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/contacts.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contacts</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/lockscreen.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lockscreen</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Legacy User Menu</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/language-menu.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Language Menu</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/404.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Error 404</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/500.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Error 500</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/examples/blank.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blank Page</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="starter.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Starter Page</p>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                <a href="https://adminlte.io/docs/3.0" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Documentation</p>
                </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Important</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-warning"></i>
                    <p>Warning</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Informational</p>
                </a>
                </li>
            </ul>
        </nav>
        {{-- /.sidebar-menu --}}
    </div>
    {{-- /.sidebar --}}
</aside>