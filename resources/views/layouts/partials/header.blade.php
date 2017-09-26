<?php
/**
 * Created by PhpStorm.
 * User: FoodArt
 * Date: 26-Sep-17
 * Time: 04:16 PM
 */
?>

<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>{{$app_name_short}}</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{$app_name_long}}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src={{$admin_image}} class="user-image" alt="User Image"
                             style="width: 25px; height: 25px;">
                        <span class="hidden-xs">{{$admin_name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src={{$admin_image}} class="img-circle" alt="User Image"
                                 style="width: 90px; height: 90px;">
                            <p>
                                <small>Email: {{$admin_email}}</small>
                                <small>Company: {{$admin_designation}}</small>
                                <small>Contact: {{$admin_contact_no}}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="javascript:void(0)" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                   class="btn btn-default btn-flat">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
