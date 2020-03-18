{{-- Vendor Styles --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/css/vendors.min.css">
<link rel="stylesheet" href="vendors/css/ui/prism.min.css">
<link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />

<!-- Vendor CSS -->

<!-- Theme Styles -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-extended.css') }}">
<link rel="stylesheet" href="{{ asset('css/colors.css') }}">
<link rel="stylesheet" href="{{ asset('css/components.css') }}">

{{-- {!! Helper::applClasses() !!} --}}
@php 
$configData = Helper::applClasses();
@endphp

@if($configData['theme'] == 'dark-layout')
    <link rel="stylesheet" href="{{ asset('css/themes/dark-layout.css') }}">
@endif
@if($configData['theme'] == 'semi-dark-layout')
    <link rel="stylesheet" href="{{ asset('css/themes/semi-dark-layout.css') }}">
@endif

<!-- Page Styles -->
<link rel="stylesheet" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
