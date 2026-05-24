@extends('layouts.guest2')

@section('title', 'Create an Account')
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
                开户注册 · 安全便捷
            </h1>
            <p style="font-size:13px;color:rgba(255,255,255,0.6);text-align:center;max-width:300px;line-height:1.7;margin-bottom:40px;">
                Create your global AMHSRC account in minutes and manage your finances with complete security.
            </p>

            {{-- Feature pills --}}
            <div class="grid grid-cols-2 gap-4 w-full max-w-sm">
                @foreach([
                    ['shield','Secure Encryption','256-bit bank security'],
                    ['user-check','Multi-Step Validation','Easy onboarding'],
                    ['trending-up','Yield Accounts','Up to 3% monthly interest'],
                    ['globe','Multi-Currency','Global presence']
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

    {{-- ── RIGHT PANEL — Registration Form ── --}}
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12"
         style="background:#F4F5F7;min-height:100vh;">
        <div class="w-full max-w-xl">

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

            {{-- Registration Card --}}
            <div x-data="{ 
                step: 1,
                totalSteps: 4,
                formData: {
                    name: '{{ old('name') }}',
                    middlename: '{{ old('middlename') }}',
                    lastname: '{{ old('lastname') }}',
                    username: '{{ old('username') }}',
                    email: '{{ old('email') }}',
                    phone: '{{ old('phone') }}',
                    country: '{{ old('country') }}',
                    accounttype: '{{ old('accounttype', 'Checking Account') }}',
                    pin: '{{ old('pin') }}',
                    password: '',
                    password_confirmation: '',
                    terms: false
                },
                nextStep() {
                    if (this.validateCurrentStep()) {
                        if (this.step < this.totalSteps) {
                            this.step++;
                            window.scrollTo(0, 0);
                        }
                    }
                },
                prevStep() {
                    if (this.step > 1) {
                        this.step--;
                        window.scrollTo(0, 0);
                    }
                },
                validateCurrentStep() {
                    if (this.step === 1) {
                        return this.formData.name && this.formData.lastname && this.formData.username;
                    } else if (this.step === 2) {
                        return this.formData.email && this.formData.phone && this.formData.country;
                    } else if (this.step === 3) {
                        return this.formData.accounttype && this.formData.pin && this.formData.pin.length === 4;
                    } else if (this.step === 4) {
                        return this.formData.password && this.formData.password_confirmation && this.formData.password === this.formData.password_confirmation && this.formData.terms;
                    }
                    return true;
                },
                get progress() {
                    return (this.step / this.totalSteps) * 100;
                }
            }" style="background:#fff;border-radius:16px;border:1px solid #EAEDF0;border-top:3px solid #C8102E;box-shadow:0 8px 40px rgba(0,0,0,0.08);overflow:hidden;">

                {{-- Progress Header --}}
                <div style="background:#FAFBFC;padding:24px 32px;border-bottom:1px solid #EAEDF0;">
                    <div style="display:flex;justify-content:between;align-items:center;margin-bottom:12px;width:100%;">
                        <div style="flex:1;">
                            <h2 style="font-family:'Inter',sans-serif;font-size:20px;font-weight:800;color:#222;letter-spacing:-0.01em;line-height:1.2;">Create Your Account</h2>
                            <p style="font-size:12px;color:#718096;margin-top:2px;">在线申请开户 · amhsrc.com</p>
                        </div>
                        <span style="font-size:13px;font-weight:700;color:#C8102E;white-space:nowrap;background:var(--cbn-red-muted);padding:4px 10px;border-radius:100px;">
                            Step <span x-text="step"></span> / <span x-text="totalSteps"></span>
                        </span>
                    </div>

                    {{-- Progress Bar --}}
                    <div style="height:5px;width:100%;background:#E2E8F0;border-radius:100px;overflow:hidden;margin-top:16px;">
                        <div style="height:100%;background:linear-gradient(90deg,#C8102E,#D4AF37);transition:all 0.3s ease;" :style="'width: ' + progress + '%'"></div>
                    </div>

                    {{-- Step Labels --}}
                    <div style="display:flex;justify-content:space-between;margin-top:10px;font-size:11px;color:#A0AEC0;font-weight:600;">
                        <span :style="step >= 1 ? 'color:#C8102E' : ''">1. Profile</span>
                        <span :style="step >= 2 ? 'color:#C8102E' : ''">2. Contact</span>
                        <span :style="step >= 3 ? 'color:#C8102E' : ''">3. Account</span>
                        <span :style="step >= 4 ? 'color:#C8102E' : ''">4. Security</span>
                    </div>
                </div>

                {{-- Form Content --}}
                <form action="{{ route('register') }}" method="post" id="registration-form" style="padding:28px 32px 24px;">
                    @csrf

                    {{-- STEP 1: Personal Profile --}}
                    <div x-show="step === 1" x-transition>
                        <div style="margin-bottom:20px;text-align:center;">
                            <div style="width:48px;height:48px;border-radius:50%;background:#F9E5E8;display:inline-flex;align-items:center;justify-content:center;margin-bottom:10px;">
                                <i data-lucide="user" style="color:#C8102E;width:20px;height:20px;"></i>
                            </div>
                            <h3 style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:#222;">基本资料 / Personal Information</h3>
                            <p style="font-size:12px;color:#718096;margin-top:2px;">Please provide your legal name as it appears on your passport or ID</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4" style="margin-bottom:15px;">
                            {{-- First Name --}}
                            <div>
                                <label for="name" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">First Name *</label>
                                <input type="text" id="name" name="name" x-model="formData.name" required
                                       style="width:100%;padding:10px 12px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="Given Name"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            </div>

                            {{-- Last Name --}}
                            <div>
                                <label for="lastname" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Last Name *</label>
                                <input type="text" id="lastname" name="lastname" x-model="formData.lastname" required
                                       style="width:100%;padding:10px 12px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="Family Name"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            </div>
                        </div>

                        <div style="margin-bottom:18px;">
                            <label for="middlename" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Middle Name (Optional)</label>
                            <input type="text" id="middlename" name="middlename" x-model="formData.middlename"
                                   style="width:100%;padding:10px 12px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                   placeholder="Middle Name"
                                   onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                   onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                        </div>

                        <div style="margin-bottom:18px;">
                            <label for="username" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Username *</label>
                            <div style="position:relative;">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                    <i data-lucide="user-check" style="width:15px;height:15px;"></i>
                                </div>
                                <input type="text" id="username" name="username" x-model="formData.username" required
                                       style="width:100%;padding:10px 12px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="Pick a unique username"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            </div>
                        </div>
                    </div>

                    {{-- STEP 2: Contact Details --}}
                    <div x-show="step === 2" x-transition>
                        <div style="margin-bottom:20px;text-align:center;">
                            <div style="width:48px;height:48px;border-radius:50%;background:#FEFCF0;display:inline-flex;align-items:center;justify-content:center;margin-bottom:10px;">
                                <i data-lucide="mail" style="color:#D4AF37;width:20px;height:20px;"></i>
                            </div>
                            <h3 style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:#222;">联系方式 / Contact Details</h3>
                            <p style="font-size:12px;color:#718096;margin-top:2px;">We will send notifications and OTPs to these endpoints</p>
                        </div>

                        <div style="margin-bottom:18px;">
                            <label for="email" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Email Address *</label>
                            <div style="position:relative;">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                    <i data-lucide="mail" style="width:15px;height:15px;"></i>
                                </div>
                                <input type="email" id="email" name="email" x-model="formData.email" required
                                       style="width:100%;padding:10px 12px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="name@example.com"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            </div>
                        </div>

                        <div style="margin-bottom:18px;">
                            <label for="phone" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Phone Number *</label>
                            <div style="position:relative;">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                    <i data-lucide="phone" style="width:15px;height:15px;"></i>
                                </div>
                                <input type="tel" id="phone" name="phone" x-model="formData.phone" required
                                       style="width:100%;padding:10px 12px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="+1 (555) 000-0000"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            </div>
                        </div>

                        <div style="margin-bottom:18px;">
                            <label for="country" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Country of Residence *</label>
                            <div style="position:relative;">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;pointer-events:none;z-index:2;">
                                    <i data-lucide="globe" style="width:15px;height:15px;"></i>
                                </div>
                                <select id="country" name="country" x-model="formData.country" required
                                        style="width:100%;padding:10px 12px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;appearance:none;cursor:pointer;position:relative;z-index:1;"
                                        onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                        onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                                    <option value="" disabled selected>Select country</option>
                                    @include('auth.countries')
                                </select>
                                <div style="position:absolute;top:50%;right:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;pointer-events:none;z-index:2;">
                                    <i data-lucide="chevron-down" style="width:15px;height:15px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- STEP 3: Account Type & PIN --}}
                    <div x-show="step === 3" x-transition>
                        <div style="margin-bottom:20px;text-align:center;">
                            <div style="width:48px;height:48px;border-radius:50%;background:#FDF3F5;display:inline-flex;align-items:center;justify-content:center;margin-bottom:10px;">
                                <i data-lucide="landmark" style="color:#C8102E;width:20px;height:20px;"></i>
                            </div>
                            <h3 style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:#222;">账户类型 / Account Settings</h3>
                            <p style="font-size:12px;color:#718096;margin-top:2px;">Select account type and secure with a 4-digit PIN</p>
                        </div>

                        {{-- Checking vs Savings Selection --}}
                        <div style="margin-bottom:20px;">
                            <label style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:8px;">Primary Account Type *</label>
                            <div class="grid grid-cols-2 gap-3">
                                <label style="display:block;position:relative;cursor:pointer;">
                                    <input type="radio" name="accounttype" value="Checking Account" x-model="formData.accounttype" style="position:absolute;opacity:0;">
                                    <div style="border-radius:8px;padding:12px;border:1.5px solid #DDE1E7;transition:all 0.2s;"
                                         :style="formData.accounttype === 'Checking Account' ? 'border-color:#C8102E;background:#FDF3F5;box-shadow:0 0 0 2px rgba(200,16,46,0.1)' : ''">
                                        <div style="display:flex;align-items:center;gap:8px;">
                                            <i data-lucide="credit-card" style="width:16px;height:16px;color:#C8102E;"></i>
                                            <span style="font-size:13px;font-weight:700;color:#222;">Checking</span>
                                        </div>
                                        <p style="font-size:10px;color:#718096;margin-top:4px;line-height:1.2;">Daily transactions and banking card access</p>
                                    </div>
                                </label>

                                <label style="display:block;position:relative;cursor:pointer;">
                                    <input type="radio" name="accounttype" value="Savings Account" x-model="formData.accounttype" style="position:absolute;opacity:0;">
                                    <div style="border-radius:8px;padding:12px;border:1.5px solid #DDE1E7;transition:all 0.2s;"
                                         :style="formData.accounttype === 'Savings Account' ? 'border-color:#C8102E;background:#FDF3F5;box-shadow:0 0 0 2px rgba(200,16,46,0.1)' : ''">
                                        <div style="display:flex;align-items:center;gap:8px;">
                                            <i data-lucide="piggy-bank" style="width:16px;height:16px;color:#C8102E;"></i>
                                            <span style="font-size:13px;font-weight:700;color:#222;">Savings</span>
                                        </div>
                                        <p style="font-size:10px;color:#718096;margin-top:4px;line-height:1.2;">Grow deposits with dynamic interest yields</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        {{-- Select other types dropdown --}}
                        <div style="margin-bottom:20px;" x-data="{ open: false }">
                            <button type="button" @click="open = !open"
                                    style="width:100%;text-align:left;display:flex;justify-content:space-between;align-items:center;background:none;border:none;outline:none;font-size:12px;color:#C8102E;font-weight:600;cursor:pointer;padding:0;">
                                <span>Show alternative account types</span>
                                <i data-lucide="chevron-down" style="width:14px;height:14px;transition:transform 0.2s;" :style="open ? 'transform:rotate(180deg)' : ''"></i>
                            </button>

                            <div x-show="open" style="margin-top:10px;border-top:1px solid #EAEDF0;padding-top:10px;display:flex;flex-direction:column;gap:6px;">
                                @foreach([
                                    'Fixed Deposit Account' => 'Highest interest rates for fixed terms',
                                    'Current Account' => 'For everyday business transactions',
                                    'Crypto Currency Account' => 'For digital currency management',
                                    'Business Account' => 'For small to medium businesses',
                                    'Non Resident Account' => 'For international customers',
                                    'Cooperate Business Account' => 'For large corporations',
                                    'Investment Account' => 'For stocks and securities'
                                ] as $val => $desc)
                                <label style="display:flex;align-items:center;gap:8px;padding:6px 10px;border-radius:6px;background:#FAFBFC;cursor:pointer;border:1px solid #E2E8F0;">
                                    <input type="radio" name="accounttype" value="{{ $val }}" x-model="formData.accounttype" style="accent-color:#C8102E;">
                                    <div style="line-height:1.2;">
                                        <div style="font-size:12px;font-weight:700;color:#222;">{{ $val }}</div>
                                        <div style="font-size:10px;color:#718096;">{{ $desc }}</div>
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Transaction PIN --}}
                        <div style="margin-bottom:18px;">
                            <label for="pin" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Transaction PIN (4 digits) *</label>
                            <div style="position:relative;">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                    <i data-lucide="key" style="width:15px;height:15px;"></i>
                                </div>
                                <input type="password" id="pin" name="pin" x-model="formData.pin" required
                                       maxlength="4" pattern="[0-9]{4}" inputmode="numeric"
                                       style="width:100%;padding:10px 12px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;letter-spacing:0.4em;"
                                       placeholder="••••"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                            </div>
                            <span style="font-size:10px;color:#A0AEC0;margin-top:4px;display:block;">Required for withdrawals and outbound transactions. Numbers only.</span>
                        </div>
                    </div>

                    {{-- STEP 4: Password & Security --}}
                    <div x-show="step === 4" x-transition>
                        <div style="margin-bottom:20px;text-align:center;">
                            <div style="width:48px;height:48px;border-radius:50%;background:#FDE8EB;display:inline-flex;align-items:center;justify-content:center;margin-bottom:10px;">
                                <i data-lucide="shield" style="color:#C8102E;width:20px;height:20px;"></i>
                            </div>
                            <h3 style="font-family:'Noto Serif SC',serif;font-size:16px;font-weight:600;color:#222;">账户安全 / Account Security</h3>
                            <p style="font-size:12px;color:#718096;margin-top:2px;">Protect your digital wallet with a solid password</p>
                        </div>

                        {{-- Password --}}
                        <div style="margin-bottom:18px;">
                            <label for="password" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Password *</label>
                            <div style="position:relative;" x-data="{ showPwd: false }">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                    <i data-lucide="lock" style="width:15px;height:15px;"></i>
                                </div>
                                <input :type="showPwd ? 'text' : 'password'" id="password" name="password" x-model="formData.password" required
                                       style="width:100%;padding:10px 42px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="••••••••"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                                <button type="button" @click="showPwd = !showPwd"
                                        style="position:absolute;top:50%;right:12px;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:#A0AEC0;padding:0;">
                                    <i data-lucide="eye" style="width:15px;height:15px;" x-show="!showPwd"></i>
                                    <i data-lucide="eye-off" style="width:15px;height:15px;" x-show="showPwd"></i>
                                </button>
                            </div>
                        </div>

                        {{-- Password Confirmation --}}
                        <div style="margin-bottom:18px;">
                            <label for="password_confirmation" style="display:block;font-size:12px;font-weight:600;color:#4A5568;margin-bottom:5px;">Confirm Password *</label>
                            <div style="position:relative;" x-data="{ showPwd: false }">
                                <div style="position:absolute;top:50%;left:12px;transform:translateY(-50%);color:#A0AEC0;line-height:0;">
                                    <i data-lucide="lock" style="width:15px;height:15px;"></i>
                                </div>
                                <input :type="showPwd ? 'text' : 'password'" id="password_confirmation" name="password_confirmation" x-model="formData.password_confirmation" required
                                       style="width:100%;padding:10px 42px 10px 36px;border:1.5px solid #DDE1E7;border-radius:8px;font-size:14px;color:#222;outline:none;background:#FAFBFC;"
                                       placeholder="••••••••"
                                       onfocus="this.style.borderColor='#C8102E';this.style.boxShadow='0 0 0 3px rgba(200,16,46,0.1)'"
                                       onblur="this.style.borderColor='#DDE1E7';this.style.boxShadow='none'">
                                <button type="button" @click="showPwd = !showPwd"
                                        style="position:absolute;top:50%;right:12px;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:#A0AEC0;padding:0;">
                                    <i data-lucide="eye" style="width:15px;height:15px;" x-show="!showPwd"></i>
                                    <i data-lucide="eye-off" style="width:15px;height:15px;" x-show="showPwd"></i>
                                </button>
                            </div>
                            <div style="margin-top:6px;" x-show="formData.password && formData.password_confirmation">
                                <span x-show="formData.password === formData.password_confirmation" style="font-size:11px;color:#1A7A4A;font-weight:600;">✓ Passwords match</span>
                                <span x-show="formData.password !== formData.password_confirmation" style="font-size:11px;color:#9A0B22;font-weight:600;">✗ Passwords do not match</span>
                            </div>
                        </div>

                        {{-- Terms checkbox --}}
                        <div style="margin-bottom:20px;">
                            <label style="display:inline-flex;align-items:start;cursor:pointer;gap:8px;">
                                <input type="checkbox" id="terms" name="terms" x-model="formData.terms" required
                                       style="accent-color:#C8102E;width:15px;height:15px;margin-top:2px;">
                                <span style="font-size:12px;color:#4A5568;line-height:1.4;">
                                    I agree to the <a href="/terms" target="_blank" style="color:#C8102E;text-decoration:none;font-weight:600;">Terms of Service</a> and <a href="/privacy" target="_blank" style="color:#C8102E;text-decoration:none;font-weight:600;">Privacy Policy</a>.
                                </span>
                            </label>
                        </div>
                    </div>

                    {{-- Navigation buttons --}}
                    <div style="display:flex;justify-content:space-between;align-items:center;border-top:1px solid #EAEDF0;padding-top:20px;margin-top:10px;">
                        <div>
                            <button type="button" x-show="step > 1" @click="prevStep"
                                    style="padding:10px 20px;background:#F4F5F7;color:#4A5568;font-size:14px;font-weight:600;border:1.5px solid #DDE1E7;border-radius:8px;cursor:pointer;display:flex;align-items:center;gap:6px;"
                                    onmouseover="this.style.background='#EAEDF0'"
                                    onmouseout="this.style.background='#F4F5F7'">
                                <i data-lucide="chevron-left" style="width:15px;height:15px;"></i>
                                Previous
                            </button>
                        </div>

                        <div>
                            <button type="button" x-show="step < totalSteps" @click="nextStep"
                                    style="padding:10px 24px;background:linear-gradient(135deg,#9A0B22,#C8102E);color:#fff;font-size:14px;font-weight:700;border:none;border-radius:8px;cursor:pointer;display:flex;align-items:center;gap:6px;box-shadow:0 4px 12px rgba(200,16,46,0.25);"
                                    onmouseover="this.style.transform='translateY(-1px)'"
                                    onmouseout="this.style.transform=''">
                                Next
                                <i data-lucide="chevron-right" style="width:15px;height:15px;"></i>
                            </button>

                            <button type="submit" x-show="step === totalSteps" :disabled="!validateCurrentStep()"
                                    style="padding:10px 24px;background:linear-gradient(135deg,#9A0B22,#C8102E);color:#fff;font-size:14px;font-weight:700;border:none;border-radius:8px;cursor:pointer;display:flex;align-items:center;gap:6px;box-shadow:0 4px 12px rgba(200,16,46,0.25);"
                                    :style="!validateCurrentStep() ? 'opacity:0.65;cursor:not-allowed;' : ''"
                                    onmouseover="if(validateCurrentStep()) this.style.transform='translateY(-1px)'"
                                    onmouseout="this.style.transform=''">
                                <i data-lucide="user-plus" style="width:15px;height:15px;"></i>
                                Open Account · 提交开户
                            </button>
                        </div>
                    </div>

                    {{-- Hidden outputs for security and seamless wizard submission --}}
                    <input type="hidden" name="name" :value="formData.name">
                    <input type="hidden" name="middlename" :value="formData.middlename">
                    <input type="hidden" name="lastname" :value="formData.lastname">
                    <input type="hidden" name="username" :value="formData.username">
                    <input type="hidden" name="email" :value="formData.email">
                    <input type="hidden" name="phone" :value="formData.phone">
                    <input type="hidden" name="country" :value="formData.country">
                    <input type="hidden" name="accounttype" :value="formData.accounttype">
                    <input type="hidden" name="pin" :value="formData.pin">
                    <input type="hidden" name="password" :value="formData.password">
                    <input type="hidden" name="password_confirmation" :value="formData.password_confirmation">
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
                    Already have an account?
                    <a href="{{ route('login') }}" style="color:#C8102E;text-decoration:none;font-weight:600;">Sign in instead &nbsp;·&nbsp; 登录账户</a>
                </p>
                <p style="font-size:11px;color:#CBD5E0;margin-top:8px;">© {{ date('Y') }} AMHSRC 国际商业银行 · amhsrc.com</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function restrictSpaces(event) {
        if (event.keyCode === 32) {
            return false;
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();
        
        // Prevent spaces in username
        const usernameInput = document.getElementById('username');
        if (usernameInput) {
            usernameInput.addEventListener('keypress', restrictSpaces);
        }
        
        // Restrict PIN to numbers only
        const pinInput = document.getElementById('pin');
        if (pinInput) {
            pinInput.addEventListener('keypress', function(event) {
                const charCode = (event.which) ? event.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    event.preventDefault();
                    return false;
                }
                return true;
            });
        }
    });
</script>
@endsection