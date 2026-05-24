<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $bgmenu = 'blue';
    $bg = 'light';
    $text = 'dark';
} else {
    $bgmenu = 'dark';
    $bg = 'dark';
    $text = 'light';
}

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Noto+Serif+SC:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/chinese-bank-theme.css">
<style>
    .logo-header { background: #12111C !important; border-bottom: 1px solid rgba(212,175,55,0.15) !important; position: relative; }
    .logo-header::after { content:''; position:absolute; bottom:0; left:0; right:0; height:2px; background:linear-gradient(90deg,#C8102E,#D4AF37,#C8102E); }
    .navbar.navbar-header { background: #1A1A2E !important; border-bottom: 1px solid rgba(212,175,55,0.1) !important; }
    .navbar.navbar-header .navbar-nav .nav-link { color: rgba(255,255,255,0.7) !important; }
    .navbar.navbar-header .navbar-nav .nav-link:hover { color: #D4AF37 !important; }
</style>

<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="{{ $bgmenu }}" style="background:#12111C !important;">
        <a href="/" class="logo" style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;">
            <img src="/images/amhsrc-logo.svg" alt="AMHSRC" style="height:34px;width:34px;flex-shrink:0;">
            <div>
                <div style="font-family:'Inter',sans-serif;font-size:13px;font-weight:800;color:#fff;letter-spacing:0.08em;line-height:1.1;">AMHSRC</div>
                <div style="font-family:'Noto Serif SC',serif;font-size:8.5px;color:rgba(212,175,55,0.75);letter-spacing:0.06em;line-height:1.4;">国际商业银行</div>
            </div>
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="{{ $bgmenu }}">

        <div class="container-fluid">
            <div><a href='about' class='btn btn'></a></div>
            <div class="collapse" id="search-nav">
                <a href="{{ route('manageusers') }}">
                    <form class="navbar-left navbar-form nav-search mr-md-3" action="javascript:void(0)">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="pr-1 btn btn-search">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Manage users"
                                class="form-control text-{{ $text }} ">
                        </div>
                    </form>
                </a>

                <script>
                    document.getElementById('searchform').addEventListener('subit'
                        searchuser);

                    function searchuser() {
                        console.log('ddj');
                        let url = "{{ route('manageusers') }}";
                        window.location.href = url;
                    }
                </script>
            </div>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                {{-- <li>
                    <form action="javascript:void(0)" method="post" id="styleform">
                        <div class="form-group">
                            <label class="style_switch">
                                <input name="style" id="style" type="checkbox" value="true" class="modes">
                                <span class="slider round"></span>
                            </label>
                        </div> 
                        @if (Auth('admin')->User()->dashboard_style == 'dark')
                        <script>document.getElementById("style").checked= true;</script>
                         @endif
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                    
                </li> --}}

                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="text-white fas fa-user"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="{{ url('admin/dashboard/adminprofile') }}">Account
                                    Settings</a>
                                <a class="dropdown-item" href="{{ url('admin/dashboard/adminchangepassword') }}">Change
                                    Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('adminlogout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logoutform').submit();">
                                    Logout
                                </a>
                                <form id="logoutform" action="{{ route('adminlogout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    
    
</div>


<script type="text/javascript">
    //create investment
    $("#styleform").on('change', function() {
        $.ajax({
            url: "{{ url('admin/dashboard/changestyle') }}",
            type: 'POST',
            data: $("#styleform").serialize(),
            success: function(data) {
                location.reload(true);
            },
            error: function(data) {
                console.log('Something went wrong');
            },

        });
    });
</script>
