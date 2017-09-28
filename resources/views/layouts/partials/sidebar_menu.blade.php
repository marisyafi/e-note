<?php
/**
 * Created by PhpStorm.
 * User: NinjaRasel
 * Date: 27-Aug-17
 * Time: 11:00 AM
 */
?>

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview {{ request()->route()->getName() === 'dashboard' ? ' active' : '' }}">
        <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Home</span>
        </a>
    </li>
    <li class="treeview">
        <a href="javascript:void(0)">
            <i class="fa fa-th"></i>
            <span>Menu</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Sub Menu 1 </a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-circle-o"></i> Sub Menu 2 </a></li>
        </ul>
    </li>
</ul>
