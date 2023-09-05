@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp


<aside class="main-sidebar">
<!-- sidebar-->
<section class="sidebar">

    <div class="user-profile">
        <div class="ulogo">
            <a href="index.html">
                <!-- logo for regular state and mobile devices -->
                <div class="d-flex align-items-center justify-content-center">
                    {{-- <img src="{{ asset('backend/images/logo-dark.png') }}" alt=""> --}}
                    <h3><b>Webito</b> Admin</h3>
                </div>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

        <li class="{{ $route == 'dashboard' ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i data-feather="pie-chart"></i>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="{{ $route == 'clients.index' ? 'active' : '' }}">
            <a href="{{ route('clients.index') }}">
                <i data-feather="box"></i>
                <span>Clients</span>
            </a>
        </li>
        <li class="{{ $route == 'our-events.index' ? 'active' : '' }}">
            <a href="{{ route('our-events.index') }}">
                <i data-feather="box"></i>
                <span>Our Event</span>
            </a>
        </li>
        <li class="{{ $route == 'employee.index' ? 'active' : '' }}">
            <a href="{{ route('employee.index') }}">
                <i data-feather="box"></i>
                <span>Employee</span>
            </a>
        </li>

        <li class="{{ $route == 'testimonials.index' ? 'active' : '' }}">
            <a href="{{ route('testimonials.index') }}">
                <i data-feather="box"></i>
                <span>Testimonials</span>
            </a>
        </li>
        
        <li class="{{ $route == 'work-slider.index' ? 'active' : '' }}">
            <a href="{{ route('work-slider.index') }}">
                <i data-feather="box"></i>
                <span>Work Slider</span>
            </a>
        </li>
     

        @if (Auth::user()->role == 'Admin')
            <li class="treeview {{ $prefix == '/users' ? 'active' : '' }} ">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Manage User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
                    <li><a href="{{ route('users.add') }}"><i class="ti-more"></i>Add User</a></li>
                </ul>
            </li>
        @endif

        {{-- <li class="treeview {{ $prefix == '/profile' ? 'active' : '' }}">
            <a href="#">
                <i data-feather="grid"></i> <span>Manage Profile</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="ti-more"></i>Your Profile</a></li>
                <li><a href="#"><i class="ti-more"></i>Change Password</a></li>

            </ul>
        </li> --}}
        {{-- <li class="treeview {{ $prefix == '/accounts' ? 'active' : '' }}">
            <a href="#">
                <i data-feather="inbox"></i> <span> Accounts Management</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'student.fee.view' ? 'active' : '' }}"><a
                        href="{{ route('student.fee.view') }}"><i class="ti-more"></i>Student Fee</a></li>
                <li class="{{ $route == 'account.salary.view' ? 'active' : '' }}"><a
                        href="{{ route('account.salary.view') }}"><i class="ti-more"></i>Employee Salary</a>
                </li>

                <li class="{{ $route == 'other.cost.view' ? 'active' : '' }}"><a
                        href="{{ route('other.cost.view') }}"><i class="ti-more"></i>Other Cost</a></li>


            </ul>
        </li> --}}
    </ul>
</section>

<div class="sidebar-footer">
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
        aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
    <!-- item-->
    <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
            class="ti-email"></i></a>
    <!-- item-->
    <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
            class="ti-lock"></i></a>
</div>
</aside>
