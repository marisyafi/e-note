<?php
/**
 * Created by PhpStorm.
 * User: NinjaRasel
 * Date: 25-Oct-17
 * Time: 12:45 AM
 */
?>

@php
    // write your breadcrumb here
        $breadcrumb = [
            [
                'icon' => 'fa fa-home',
                'href' => route('dashboard'),
                'name' => 'Dashboard'
            ],
            [
                'name' => 'Test'
            ],
        ];
@endphp

@extends('layouts.master', $breadcrumb)

@section('title', 'Dashboard')

@section('head_style')
    {{-- write your page css here--}}
@endsection

@section('head_script')
    {{-- write your page scripts for head here --}}
@endsection

@section('content_header')
    Welcome
    <small>
        Sample page
    </small>
@endsection

@section('page_content')
    <h4>This is Test Content</h4>
@endsection

@section('body_script')
    {{-- wrtie your page java script here --}}
@endsection
