<?php
/**
 * Created by PhpStorm.
 * User: FoodArt
 * Date: 25-Oct-17
 * Time: 12:50AM
 */
?>

@php
    $app_name_short='F';
    $app_name_long='Food Art';

    $admin_image= asset('ap/dist/img/avatar04.png');
    $admin_name=Auth::user()->name;
    $admin_email=Auth::user()->email;
    $admin_designation='CoderBadge';
    $admin_contact_no= '+8801521224958';
@endphp

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Food Art">
    <title>
        FoodArt - @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.partials.head_style')
    @include('layouts.partials.head_script')
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="sidebar-mini skin-green">
<div class="wrapper">
@include('layouts.partials.header')
<!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src={{$admin_image}} class="img-circle" alt="User Image"
                         style="width: 45px; height: 45px;">
                </div>
                <div class="pull-left info">
                    <p>{{$admin_name}}</p>
                    <p>{{$admin_email}}</p>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Home</span>
                    </a>
                </li>
                @include('layouts.partials.sidebar_menu')
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('content_header')
            </h1>
            <ol class="breadcrumb">
                @if(isset($breadcrumb))
                    @foreach($breadcrumb as $b)
                        <li class="{{ $loop->last ? '' : 'active' }}">
                            @if(isset($b['icon']))
                                <i class="{{ $b['icon'] }}"></i>
                            @endif
                            @if(isset($b['href']))
                                <a href="{{ $b['href'] }}">
                                    {{ $b['name'] }}
                                </a>
                            @else
                                {{ $b['name'] }}
                            @endif
                        </li>
                    @endforeach
                @endif
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @yield('small_box')
            @yield('page_content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        @include('layouts.partials.footer')
    </footer>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
@include('layouts.partials.body_script')
</body>
</html>
