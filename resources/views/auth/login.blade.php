@extends('layouts.guest2')

@section('title', 'Online Banking Login')
@section('content')

<div class="flex flex-col lg:flex-row min-h-screen">

    {{-- ── LEFT PANEL — Chinese Banking Branding ── --}}
    <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden"
         style="background:linear-gradient(160deg,#6E0819 0%,#9A0B22 35%,#C8102E 70%,#D63050 100%);">

        {{-- Lattice Pattern --}}
        <div class="absolute inset-0" style="background-image:url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='0.4' opacity='0.07'%3E%3Crect x='10' y='10' width='40' height='40'/%3E%3Crect x='20' y='20' width='20' height='20'/%3E%3Cline x1='10' y1='10' x2='50' y2='50'/%3E%3Cline x1='50' y1='10' x2='10' y2='50'/%3E%3C/g%3E%3C/svg%3E\");"></div>

        {{-- Gold glow --}}
        <div class="absolute inset-0" style="background:radial-gradient(ellipse at 25% 60%, rgba(212,175,55,0.12) 0%, transparent 65%);"></div>

        {{-- Floating orbs --}}
        <div class="absolute top-1/4 left-1/4 w-64 h-64 rounded-full opacity-5 floating-slow" style="background:#D4AF37;"></div>
        <div class="absolute bottom-1/3 right-1/4 w-48 h-48 rounded-full opacity-5 floating"   style="background:#fff;"></div>

        {{-- Content --}}
        <div class="relative flex flex-col justify-center items-center w-full h-full text-white p-12 z-10">

            {{-- AMHSRC Seal --}}
            <div class="mb-8 flex flex-col items-center">
                <div class="relative mb-4">
                    <div class="absolute inset-0 rounded-full opacity-20 animate-pulse"
                         style="background:radial-gradient(circle,#D4AF37,transparent);transform:scale(1.4);"></div>
                    <img src="{{ asset('images/amhsrc-logo.svg') }}" alt="AMHSRC"
                         style="width:100px;height:100px;filter:drop-shadow(0 4px 20px rgba(0,0,0,0.4));position:relative;z-index:1;">
                </div>
                <div style="font-family:'Inter',sans-serif;font-size:28px;font-weight:800;letter-spacing:0.12em;color:#fff;line-height:1;">AMHSRC</div>
                <div style="font-family:'Noto Serif SC',serif;font-size:14px;color:rgba(212,175,55,0.85);letter-spacing:0.15em;margin-top:4px;">国际商业银行</div>
                <div style="font-size:11px;color:rgba(255,255,255,0.45);letter-spacing:0.1em;margin-top:3px;">INTERNATIONAL COMMERCIAL BANK</div>
            </div>

            {{-- Gold divider --}}
            <div style="width:80px;height:1px;background:linear-gradient(90deg,transparent,#D4AF37,transparent);margin:4px 0 28px;"></div>

            {{-- Tagline --}}
            <h1 style="font-family:'Noto Serif SC',serif;font-size:22px;font-weight:600;text-align:center;line-height:1.5;color:rgba(255,255,255,0.95);max-width:320px;margin-bottom:12px;">
                安全·高效·信赖
            </h1>
            <p style="font-size:13px;color:rgba(255,255,255,0.6);text-align:center;max-width:300px;line-height:1.7;margin-bottom:40px;">
                Secure, Swift &amp; Trusted Banking Solutions for a Connected World
            </p>

            {{-- Feature pills --}}
            <div class="grid grid-cols-2 gap-4 w-full max-w-sm">
                @foreach([
                    ['shield','Secure','Bank-grade SSL'],
                    ['zap','Instant','Real-time transfers'],
                    ['globe','Global','180+ countries'],
                    ['headphones','24/7 Support','Always available']
                ] as $feat)
                <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:10px;padding:12px 14px;display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:rgba(212,175,55,0.15);border:1px solid rgba(212,175,55,0.3);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i data-lucide="{{ $feat[0] }}" style="width:17px;height:17px;color:#D4AF37;"></i>
                    </div>
                    <div>
                        <div style="font-size:12px;font-weight:600;color:#fff;">{{ $feat[1] }}</div>
                        <div style="font-size:10px;color:rgba(255,255,255,0.45);">{{ $feat[2] }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Domain badge --}}
            <div style="margin-top:40px;padding:8px 20px;background:rgba(255,255,255,0.06);border:1px solid rgba(212,175,55,0.2);border-radius:100px;">
                <span style="font-size:11px;color:rgba(212,175,55,0.7);letter-spacing:0.12em;">🔒 amhsrc.com</span>
            </div>
        </div>
    </div>

    {{-- ── RIGHT PANEL — Login Form ── --}}
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12"
         style="background:#F4F5F7;min-height:100vh;">
        <div class="w-full max-w-md">

            {{-- Mobile Logo --}}
            <div class="lg:hidden text-center mb-8">
                <a href="/" class="inline-flex flex-col items-center">
                    <img src="{{ asset('images/amhsrc-logo.svg') }}" alt="AMHSRC" style="height:56px;width:56px;margin-bottom:8px;">
                    <div style="font-family:'Inter',sans-serif;font-size:18px;font-weight:800;letter-spacing:0.1em;color:#222;">AMHSRC</div>
                    <div style="font-family:'Noto Serif SC',serif;font-size:11px;color:#A8892A;letter-spacing:0.1em;">国际商业银行</div>
                </a>
            </div>

            {{-- Session flash --}}
            @if (Session::has('status'))
                <div style="background:#FDE8EB;border-left:4px solid #C8102E;color:#9A0B22;padding:14px 16px;margin-bottom:20px;border-radius:8px;font-size:14px;">
                    {{ session('status') }}
                </div>
            @endif

            {{-- Validation errors --}}
            @if ($errors->any())
                <div style="background:#FDE8EB;border-left:4px solid #C8102E;color:#9A0B22;padding:14px 16px;margin-bottom:20px;border-radius:8px;">
                    <ul style="list-style:disc;padding-left:16px;font-size:14px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Login Card --}}
            <div style="background:#fff;border-radius:16px;border:1px solid #EAEDF0;border-top:3px solid #C8102E;box-shadow:0 8px 40px rgba(0,0,0,0.08);overflow:hidden;">

                {{-- Card header --}}
                <div style="padding:28px 32px 0;">
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:22px;">
                        <div style="width:4px;height:32px;background:linear-gradient(180deg,#C8102E,#D4AF37);border-radius:2px;flex-shrink:0;"></div>
                        <div>
                            <h2 style="font-family:'Inter',sans-serif;font-size:20px;font-weight:800;color:#222;letter-spacing:-0.01em;line-height:1.2;">Online Banking Login</h2>
                            <p style="font-size:12px;color:#718096;margin-top:2px;">网上银行登录 · amhsrc.com</p>
                        </div>
                    </div>
                </div>

                {{-- Form --}}
                <form method="POST" action="{{ route('login') }}" style="padding:0 32px 28px;">
                    @csrf

                    {{-- Email / Username --}}
                    <div style="margin-bottom:18px;">
                        <label for="email" style="display:block;font-size:13px;font-weight:600;color:#4A5568;margin-bottom:7px;">
                            Username / Email
                        </label>
                        <div style="position:relative;">
                            <div style="position:absolute;top:50%;left:13px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                <i data-lucide="mail" style="width:16px;height:16px;"></i>
                            </div>
                            <input
                                id="email" type="text" name="email"
                                style="width:100%;padding:12px 14px 12px 40px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;font-family:'Inter',sans-serif;"
                                placeholder="Enter your username or email"
                                required autocomplete="username"
                                onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                        </div>
                    </div>

                    {{-- Password --}}
                    <div style="margin-bottom:18px;">
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:7px;">
                            <label for="password" style="font-size:13px;font-weight:600;color:#4A5568;">Password</label>
                            <a href="{{ route('password.request') }}"
                               style="font-size:12px;color:#C8102E;font-weight:500;text-decoration:none;">Forgot Password?</a>
                        </div>
                        <div style="position:relative;">
                            <div style="position:absolute;top:50%;left:13px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                <i data-lucide="lock" style="width:16px;height:16px;"></i>
                            </div>
                            <input
                                id="password" type="password" name="password"
                                style="width:100%;padding:12px 46px 12px 40px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;font-family:'Inter',sans-serif;"
                                placeholder="••••••••"
                                required autocomplete="current-password"
                                onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            <button type="button" onclick="togglePwd()"
                                style="position:absolute;top:50%;right:13px;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:#A0AEC0;line-height:0;padding:0;">
                                <i data-lucide="eye" id="pwd-show" style="width:16px;height:16px;"></i>
                                <i data-lucide="eye-off" id="pwd-hide" style="width:16px;height:16px;display:none;"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Remember Me --}}
                    <div style="margin-bottom:22px;">
                        <label style="display:inline-flex;align-items:center;cursor:pointer;gap:8px;">
                            <input type="checkbox" name="remember_me" checked style="accent-color:#C8102E;width:15px;height:15px;cursor:pointer;">
                            <span style="font-size:13px;color:#718096;">Stay signed in for 30 days</span>
                        </label>
                    </div>

                    {{-- Submit --}}
                    <div style="display:flex;flex-direction:column;gap:10px;">
                        <button type="submit"
                            style="width:100%;padding:13px;background:linear-gradient(135deg,#9A0B22,#C8102E);color:#fff;font-size:15px;font-weight:700;border:none;border-radius:10px;cursor:pointer;letter-spacing:0.02em;box-shadow:0 4px 16px rgba(200,16,46,0.35);transition:all 0.2s;font-family:'Inter',sans-serif;display:flex;align-items:center;justify-content:center;gap:8px;"
                            onmouseover="this.style.transform='translateY(-1px)';this.style.boxShadow='0 6px 20px rgba(200,16,46,0.45)'"
                            onmouseout="this.style.transform='';this.style.boxShadow='0 4px 16px rgba(200,16,46,0.35)'">
                            <i data-lucide="log-in" style="width:16px;height:16px;"></i>
                            Sign In &nbsp;·&nbsp; 登录
                        </button>

                        <a href="{{ route('register') }}"
                           style="width:100%;padding:12px;background:#F4F5F7;color:#4A5568;font-size:14px;font-weight:600;border:1.5px solid #DDE1E7;border-radius:10px;text-align:center;text-decoration:none;display:flex;align-items:center;justify-content:center;gap:7px;transition:all 0.2s;font-family:'Inter',sans-serif;"
                           onmouseover="this.style.borderColor='#C8102E';this.style.color='#C8102E';this.style.background='#FDF3F5'"
                           onmouseout="this.style.borderColor='#DDE1E7';this.style.color='#4A5568';this.style.background='#F4F5F7'">
                            <i data-lucide="user-plus" style="width:15px;height:15px;"></i>
                            Open Account &nbsp;·&nbsp; 开户
                        </a>
                    </div>
                </form>

                {{-- Trust bar --}}
                <div style="padding:14px 32px;border-top:1px solid #F0F2F5;background:linear-gradient(90deg,#FDF3F5,#FEFCF0);display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;">
                    <div style="display:flex;align-items:center;gap:5px;font-size:11px;color:#A0AEC0;">
                        <i data-lucide="shield-check" style="width:13px;height:13px;color:#C8102E;"></i> 256-bit SSL
                    </div>
                    <div style="width:1px;height:14px;background:#E2E8F0;"></div>
                    <div style="display:flex;align-items:center;gap:5px;font-size:11px;color:#A0AEC0;">
                        <i data-lucide="lock" style="width:13px;height:13px;color:#D4AF37;"></i> Secure Session
                    </div>
                    <div style="width:1px;height:14px;background:#E2E8F0;"></div>
                    <div style="display:flex;align-items:center;gap:5px;font-size:11px;color:#A0AEC0;">
                        <i data-lucide="globe" style="width:13px;height:13px;color:#C8102E;"></i> amhsrc.com
                    </div>
                </div>
            </div>

            {{-- Footer notice --}}
            <div style="margin-top:24px;text-align:center;">
                <p style="font-size:12px;color:#A0AEC0;line-height:1.6;">
                    By signing in, you agree to our
                    <a href="#" style="color:#C8102E;text-decoration:none;font-weight:500;">Terms of Service</a> and
                    <a href="#" style="color:#C8102E;text-decoration:none;font-weight:500;">Privacy Policy</a>
                </p>
                <p style="font-size:11px;color:#CBD5E0;margin-top:8px;">© {{ date('Y') }} AMHSRC 国际商业银行 · amhsrc.com</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function togglePwd() {
        const p = document.getElementById('password');
        const s = document.getElementById('pwd-show');
        const h = document.getElementById('pwd-hide');
        if (p.type === 'password') {
            p.type = 'text';
            s.style.display = 'none';
            h.style.display = 'inline';
        } else {
            p.type = 'password';
            s.style.display = 'inline';
            h.style.display = 'none';
        }
    }
</script>
@endsection
