@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel ">
        <div class="content">
            <div class="page-inner">
                <div class="mt-2 mb-4">

                </div>
                <x-danger-alert />
                <x-success-alert />

                <div class="mb-5 row">
                    <div class="col-12 text-center p-4 card shadow ">
                        <h1 class="title1">About AMHSRC Bank</h1>
                        <p class="title1">Administration Panel</p>

                        <div class="mt-4">
                            <h2>Contact Support</h2>
                            <a class="btn btn-light" href="mailto:{{$settings->contact_email ?? 'support@amhsrc.com'}}">{{$settings->contact_email ?? 'support@amhsrc.com'}}</a>
                        </div>

                        <div class="mt-4">
                            <h2>Website</h2>
                           <a class="btn btn-light" href="https://www.amhsrc.com"> https://www.amhsrc.com</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
