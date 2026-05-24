@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    }
@endphp
@php
      $captcha = strtoupper(substr(md5(rand()), 0, 6)); // Generate random text
@endphp
@extends('layouts.base')
@section('title', 'Home')


@section('content')



<div class="main">
    <section class="hero-equal-height pt-165 pb-100" style="background: linear-gradient(135deg, #1A0A10 0%, #12111C 60%, #170A0F 100%) !important; position: relative;">
            <div class="container">
                <div class='row'>
                    <div class="col-md-12">
                        <div id="google_translate_element">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme hero-content-slider custom-dot custom-dot-2">
                        <div class="item hero-bg-1">
                            <div class="col-md-8 col-lg-7 col-12">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-uppercase" style="letter-spacing: 0.1em; color: var(--cbn-gold); font-weight: 700; font-family: 'Noto Serif SC', serif;">数字化金融服务</span>
                                    <h1 class="text-white" style="font-family: 'Noto Serif SC', serif; font-weight: 800; font-size: 3.2rem; text-shadow: 0 4px 15px rgba(0,0,0,0.5);">便捷与安全的数字化金融<br><span style="font-size: 1.8rem; font-weight: 400; color: rgba(255,255,255,0.7); display: block; margin-top: 5px;">EASY AND SECURED DIGITAL BANKING</span></h1>
                                    <p class="lead" style="color: rgba(255,255,255,0.85) !important;">{{$settings->site_name}} is the best and secured way of performing transactions to people all over the world. No matter where you are in the world, you can save and transact with people conveniently and confidently.</p>
                                    <ul class="list-unstyled tech-feature-list text-white">
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>个人银行服务 / Personal banking</strong></li>
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>企业银行服务 / SME banking</strong></li>
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>公司金融服务 / Corporate banking</strong></li>
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>个人信贷服务 / Personal loans</strong></li>
                                    </ul>
                                    <div class="action-btns mt-4">
                                        <a href="register" class="btn secondary-solid-btn mr-3" style="background: linear-gradient(135deg, #9A0B22, #C8102E) !important; border: 1px solid var(--cbn-gold) !important; color:#fff !important;">Open Account &nbsp;·&nbsp; 立即开户</a>
                                        <a href="login" class="btn outline-white-btn" style="border: 1.5px solid var(--cbn-gold) !important; color: var(--cbn-gold) !important; background: transparent !important;">Online Banking &nbsp;·&nbsp; 网上银行</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item hero-bg-2">
                            <div class="col-md-8 col-lg-7 col-12">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-uppercase" style="letter-spacing: 0.1em; color: var(--cbn-gold); font-weight: 700; font-family: 'Noto Serif SC', serif;">21世纪数字银行</span>
                                    <h1 class="text-white" style="font-family: 'Noto Serif SC', serif; font-weight: 800; font-size: 3.2rem; text-shadow: 0 4px 15px rgba(0,0,0,0.5);">高效稳定的金融解决方案<br><span style="font-size: 1.8rem; font-weight: 400; color: rgba(255,255,255,0.7); display: block; margin-top: 5px;">FAST AND STABLE BANKING</span></h1>
                                    <p class="lead" style="color: rgba(255,255,255,0.85) !important;"> Join over 70,000 users from all over the world satisfied with our services. A place where everyone performs transactions with confidence. </p>
                                    <ul class="list-unstyled tech-feature-list text-white">
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>个人银行服务 / Personal banking</strong></li>
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>企业银行服务 / SME banking</strong></li>
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>公司金融服务 / Corporate banking</strong></li>
                                        <li class="py-1"><span class="ti-check-box mr-2" style="color: var(--cbn-gold);"></span><strong>个人信贷服务 / Personal loans</strong></li>
                                    </ul>
                                    <div class="action-btns mt-4">
                                        <a href="register" class="btn secondary-solid-btn mr-3" style="background: linear-gradient(135deg, #9A0B22, #C8102E) !important; border: 1px solid var(--cbn-gold) !important; color:#fff !important;">Open Account &nbsp;·&nbsp; 立即开户</a>
                                        <a href="login" class="btn outline-white-btn" style="border: 1.5px solid var(--cbn-gold) !important; color: var(--cbn-gold) !important; background: transparent !important;">Online Banking &nbsp;·&nbsp; 网上银行</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="promo-section pt-5 pb-5" style="background: #12111C !important; border-bottom: 2px solid var(--cbn-gold) !important; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="single-promo-block p-4 rounded d-flex justify-content-between" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(212, 175, 55, 0.2); transition: all 0.3s;">
                        <div class="promo-block-icon mr-3">
                            <span class="ti-user icon-sm text-white" style="color: var(--cbn-gold) !important;"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5 style="color: white; font-family: 'Noto Serif SC', serif; font-size: 16px; font-weight: 700;">个人金融服务 <br><span style="font-size: 12px; color: var(--cbn-gold);">Personal Banking</span></h5>
                            <p style="font-size: 12px; color: rgba(255,255,255,0.7); margin-top: 5px;">Enjoy convenience, security and premium personal banking services globally.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="single-promo-block p-4 rounded d-flex justify-content-between" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(212, 175, 55, 0.2); transition: all 0.3s;">
                        <div class="promo-block-icon mr-3">
                            <span class="ti-briefcase icon-sm text-white" style="color: var(--cbn-gold) !important;"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5 style="color: white; font-family: 'Noto Serif SC', serif; font-size: 16px; font-weight: 700;">中小企业金融 <br><span style="font-size: 12px; color: var(--cbn-gold);">SME Banking</span></h5>
                            <p style="font-size: 12px; color: rgba(255,255,255,0.7); margin-top: 5px;">Expand your business with secure capital credit and business assets.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="single-promo-block p-4 rounded d-flex justify-content-between" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(212, 175, 55, 0.2); transition: all 0.3s;">
                        <div class="promo-block-icon mr-3">
                            <span class="ti-crown icon-sm text-white" style="color: var(--cbn-gold) !important;"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5 style="color: white; font-family: 'Noto Serif SC', serif; font-size: 16px; font-weight: 700;">公司金融服务 <br><span style="font-size: 12px; color: var(--cbn-gold);">Corporate Banking</span></h5>
                            <p style="font-size: 12px; color: rgba(255,255,255,0.7); margin-top: 5px;">Comprehensive financial tools and enterprise fund management solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="single-promo-block p-4 rounded d-flex justify-content-between" style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(212, 175, 55, 0.2); transition: all 0.3s;">
                        <div class="promo-block-icon mr-3">
                            <span class="ti-wallet icon-sm text-white" style="color: var(--cbn-gold) !important;"></span>
                        </div>
                        <div class="promo-block-content">
                            <h5 style="color: white; font-family: 'Noto Serif SC', serif; font-size: 16px; font-weight: 700;">个人信贷服务 <br><span style="font-size: 12px; color: var(--cbn-gold);">Personal Loans</span></h5>
                            <p style="font-size: 12px; color: rgba(255,255,255,0.7); margin-top: 5px;">{{$settings->site_name}} offers a wide range of loans to suit your financial plans.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12 col-lg-6">
                    <div class="about-img-wrap">
                        <img src="temp/custom/img/bg2.jpg" alt="video" class="img-fluid rounded shadow-sm">

                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 32px; display: flex; flex-direction: column; align-items: start; line-height: 1.2;">
                            关于我们
                            <span style="font-size: 14px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 3px;">ABOUT US</span>
                        </h2>
                        <p style="margin-top: 15px;">A few years ago, a small team of people determined to transform banking launched a savings app for everyone. That app was the first step toward {{$settings->site_name}} Bank.
                        Today, we’re even more determined and we’ve built a Central Bank-licensed, microfinance bank to help you get the best out of your money without overcharging you.
                        {{$settings->site_name}} includes tools for tracking your spending habits, saving more and making the right money moves.
                        So no matter who you are or where you live, we’re here because of you. We know the pain that comes with using a regular bank and we will make things work better for everyone.
                        </p>
                        <div class="action-btns mt-3 mb-4">
                            <a href="about" class="btn btn-primary" style="background: linear-gradient(135deg, #9A0B22, #C8102E) !important; border: 1px solid var(--cbn-gold) !important; color:#fff !important; padding: 10px 24px; border-radius: 6px;">Read More &nbsp;·&nbsp; 了解更多</a>
                        </div>

                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-2"
                                        data-toggle="tab" style="border-radius: 6px; padding: 10px 16px;">
                                        <h6 class="mb-0" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">我们的使命 / Our Mission</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                        data-toggle="tab" style="border-radius: 6px; padding: 10px 16px;">
                                        <h6 class="mb-0" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">我们的愿景 / Our Vision</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="feature-tab-2">
                                    <p>The goal of {{$settings->site_name}} is to provide its users a unique, safe and secured platform for
                                        transactions in the field of finance and fintech. This is why we have used
                                        cutting-edge platform with extensive infrastructure intended to make things more
                                        convenient for our users.
                                    </p>
                                </div>
                                <div class="tab-pane" id="feature-tab-3">
                                    <p>We always try to expand our technical capabilities and financial prowess with the help of latest and advanced fintech technologies to facilitate transactions.<br><br>

                                        {{$settings->site_name}} envisions to widen our customer reach to people of different races, countries and continents.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-content-two ptb-100 gray-light-bg" style="background: #FAFBFC !important; border-top: 1px solid #EAEDF0; border-bottom: 1px solid #EAEDF0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 32px; display: inline-flex; flex-direction: column; align-items: center; line-height: 1.2;">
                            我们的优势
                            <span style="font-size: 14px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 5px;">WHY CHOOSE US</span>
                        </h2>
                        <p class="lead" style="margin-top: 10px;">
                            Here are some of the many features that define our uniqueness.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-feature-list p-4 text-center" style="background:#fff; border: 1.5px solid #EAEDF0; border-radius: 8px; transition: all 0.3s; height: 100%; box-shadow: var(--cbn-shadow-sm);">
                        <span class="ti-wallet icon-sm d-block mb-3" style="color: var(--cbn-red); font-size: 24px;"></span>
                        <h5 class="mb-2" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">多元支付方式 / Payment Options</h5>
                        <p style="font-size: 13px; color: #4A5568;">We support multiple payment methods: Visa, MasterCard, bank transfer, cryptocurrency and lots more</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-feature-list p-4 text-center" style="background:#fff; border: 1.5px solid #EAEDF0; border-radius: 8px; transition: all 0.3s; height: 100%; box-shadow: var(--cbn-shadow-sm);">
                        <span class="ti-world icon-sm d-block mb-3" style="color: var(--cbn-red); font-size: 24px;"></span>
                        <h5 class="mb-2" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">全球业务覆盖 / Global Coverage</h5>
                        <p style="font-size: 13px; color: #4A5568;">We provide services in 80% countries around all the globe located in various continents.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-feature-list p-4 text-center" style="background:#fff; border: 1.5px solid #EAEDF0; border-radius: 8px; transition: all 0.3s; height: 100%; box-shadow: var(--cbn-shadow-sm);">
                        <span class="ti-money icon-sm d-block mb-3" style="color: var(--cbn-red); font-size: 24px;"></span>
                        <h5 class="mb-2" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">优惠交易费率 / Low Fees</h5>
                        <p style="font-size: 13px; color: #4A5568;">Our transaction fees and rates are incredibly low for all customers and all market makers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-feature-list p-4 text-center" style="background:#fff; border: 1.5px solid #EAEDF0; border-radius: 8px; transition: all 0.3s; height: 100%; box-shadow: var(--cbn-shadow-sm);">
                        <span class="ti-key icon-sm d-block mb-3" style="color: var(--cbn-red); font-size: 24px;"></span>
                        <h5 class="mb-2" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">安全交易保障 / Secure Transactions</h5>
                        <p style="font-size: 13px; color: #4A5568;">Your finance is secured with our advanced technologies that protect you against digital thefts and hacks.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-feature-list p-4 text-center" style="background:#fff; border: 1.5px solid #EAEDF0; border-radius: 8px; transition: all 0.3s; height: 100%; box-shadow: var(--cbn-shadow-sm);">
                        <span class="ti-lock icon-sm d-block mb-3" style="color: var(--cbn-red); font-size: 24px;"></span>
                        <h5 class="mb-2" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">顶尖安全体系 / Strong Security</h5>
                        <p style="font-size: 13px; color: #4A5568;">We offer you an unbeatable protection against DDoS attacks with full data encryption for all your transactions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="feature-feature-list p-4 text-center" style="background:#fff; border: 1.5px solid #EAEDF0; border-radius: 8px; transition: all 0.3s; height: 100%; box-shadow: var(--cbn-shadow-sm);">
                        <span class="ti-headphone-alt icon-sm d-block mb-3" style="color: var(--cbn-red); font-size: 24px;"></span>
                        <h5 class="mb-2" style="font-family: 'Noto Serif SC', serif; font-weight: 700;">24/7 全天候支持 / 24/7 Support</h5>
                        <p style="font-size: 13px; color: #4A5568;">Our customer care service is available at all time to attend to you and also offer solutions to all your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section ptb-100 gray-light-bg" style="background: #F4F5F7 !important; border-bottom: 1px solid #EAEDF0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 32px; display: inline-flex; flex-direction: column; align-items: center; line-height: 1.2;">
                            账户利率
                            <span style="font-size: 14px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 5px;">OUR INTEREST RATES</span>
                        </h2>
                        <p class="lead" style="margin-top: 10px;">We understand the needs of our customers very much that our interest rates are attractive.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md mb-4">
                    <div class="card text-center single-pricing-pack" style="border: 1px solid #EAEDF0; border-top: 4px solid var(--cbn-red); border-radius: 12px; box-shadow: var(--cbn-shadow-sm); overflow: hidden; background: #fff;">
                        <div class="pt-4"><h5 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: #222; margin-bottom: 5px;">个人账户 / Personal</h5><span class="badge" style="background: var(--cbn-gold); color: #fff; font-weight: 600; padding: 5px 12px; border-radius: 100px;">Yield Account</span></div>
                        <div class="card-header py-4 border-0 pricing-header" style="background: transparent;">
                            <div class="h1 text-center mb-0">
                                <p class="pricing-rate" style="color: var(--cbn-red); font-family: 'Inter', sans-serif; font-weight: 800; font-size: 36px;">2.0 <sup>%</sup><span style="font-size: 12px; display: block; color: #718096; font-weight: 600; margin-top: 5px;">MONTHLY INTEREST</span></p>

                            </div>
                        </div>
                        <div class="card-body bg-transparent" style="padding: 20px 32px 32px;">
                            <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list" style="color: #4A5568; font-size: 13px;">
                                <li class="py-2" style="border-bottom: 1px solid #F0F2F5;"><span class="ti-check-box mr-2" style="color: var(--cbn-red);"></span><span>Minimum amount</span><b class="float-right" style="color: #222;">USD 1,000</b></li>
                                <li class="py-2" style="border-bottom: 1px solid #F0F2F5;"><span class="ti-check-box mr-2" style="color: var(--cbn-red);"></span><span>Interval Type</span><b class="float-right" style="color: #222;">Partial</b></li>
                                <li class="py-2" style="border-bottom: 1px solid #F0F2F5;"><span class="ti-check-box mr-2" style="color: var(--cbn-red);"></span><span>Get Interest every</span><b class="float-right" style="color: #222;">30 Days</b></li>
                            </ul>
                            <a href="register" class="btn btn-primary" style="width: 100%; background: linear-gradient(135deg, #9A0B22, #C8102E) !important; border: 1px solid var(--cbn-gold) !important; color:#fff !important; font-weight: 600; padding: 10px; border-radius: 6px;">Get Started Now &nbsp;·&nbsp; 立即开户</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md mb-4">
                    <div class="card text-center single-pricing-pack" style="border: 1px solid #EAEDF0; border-top: 4px solid var(--cbn-red); border-radius: 12px; box-shadow: var(--cbn-shadow-sm); overflow: hidden; background: #fff;">
                        <div class="pt-4"><h5 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: #222; margin-bottom: 5px;">公司账户 / Corporate</h5><span class="badge" style="background: var(--cbn-gold); color: #fff; font-weight: 600; padding: 5px 12px; border-radius: 100px;">Business Yield</span></div>
                        <div class="card-header py-4 border-0 pricing-header" style="background: transparent;">
                            <div class="h1 text-center mb-0">
                                <p class="pricing-rate" style="color: var(--cbn-red); font-family: 'Inter', sans-serif; font-weight: 800; font-size: 36px;">3.0 <sup>%</sup><span style="font-size: 12px; display: block; color: #718096; font-weight: 600; margin-top: 5px;">MONTHLY INTEREST</span></p>

                            </div>
                        </div>
                        <div class="card-body bg-transparent" style="padding: 20px 32px 32px;">
                            <ul class="list-unstyled text-left text-sm mb-4 pricing-feature-list" style="color: #4A5568; font-size: 13px;">
                                <li class="py-2" style="border-bottom: 1px solid #F0F2F5;"><span class="ti-check-box mr-2" style="color: var(--cbn-red);"></span><span>Minimum amount</span><b class="float-right" style="color: #222;">USD 10,000</b></li>
                                <li class="py-2" style="border-bottom: 1px solid #F0F2F5;"><span class="ti-check-box mr-2" style="color: var(--cbn-red);"></span><span>Interval Type</span><b class="float-right" style="color: #222;">Fixed</b></li>
                                <li class="py-2" style="border-bottom: 1px solid #F0F2F5;"><span class="ti-check-box mr-2" style="color: var(--cbn-red);"></span><span>Get Interest every</span><b class="float-right" style="color: #222;">30 Days</b></li>
                            </ul>
                            <a href="register" class="btn btn-primary" style="width: 100%; background: linear-gradient(135deg, #9A0B22, #C8102E) !important; border: 1px solid var(--cbn-gold) !important; color:#fff !important; font-weight: 600; padding: 10px; border-radius: 6px;">Get Started Now &nbsp;·&nbsp; 立即开户</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Section Features -->
    <section class="call-to-action pt-5 pb-5" style="background: linear-gradient(135deg, #6E0819 0%, #9A0B22 100%) !important; position: relative; overflow: hidden; border-top: 2px solid var(--cbn-gold); border-bottom: 2px solid var(--cbn-gold);">
        {{-- Chinese Pattern Overlay --}}
        <div class="absolute inset-0" style="background-image:url(\"data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg stroke='%23ffffff' stroke-width='0.4' opacity='0.05'%3E%3Cpath d='M0 20h40M20 0v40M0 0l40 40M40 0L0 40'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\"); pointer-events: none;"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1" style="font-family: 'Noto Serif SC', serif; font-weight: 700; font-size: 28px;">发展历程 / A Summary of Our Journey</h2>
                        <p class="lead">We have over the years garnered loads of experiences that has consequently boosted our portfolio in world financial services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white" style="background: rgba(255, 255, 255, 0.05); border: 1.5px solid rgba(212, 175, 55, 0.2); border-radius: 8px;">
                        <span class="ti-user icon-md" style="color: var(--cbn-gold); font-size: 28px;"></span>
                        <h3 class="mb-0 text-white" style="font-weight: 800; font-size: 26px;">62,492</h3>
                        <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 0; margin-top: 5px;">活跃用户 / Active Users</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white" style="background: rgba(255, 255, 255, 0.05); border: 1.5px solid rgba(212, 175, 55, 0.2); border-radius: 8px;">
                        <span class="ti-time icon-md" style="color: var(--cbn-gold); font-size: 28px;"></span>
                        <h3 class="mb-0 text-white" style="font-weight: 800; font-size: 26px;">2,945</h3>
                        <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 0; margin-top: 5px;">运营天数 / Running Days</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white" style="background: rgba(255, 255, 255, 0.05); border: 1.5px solid rgba(212, 175, 55, 0.2); border-radius: 8px;">
                        <span class="ti-cup icon-md" style="color: var(--cbn-gold); font-size: 28px;"></span>
                        <h3 class="mb-0 text-white" style="font-weight: 800; font-size: 26px;">371</h3>
                        <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 0; margin-top: 5px;">荣誉奖项 / Awards Won</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white" style="background: rgba(255, 255, 255, 0.05); border: 1.5px solid rgba(212, 175, 55, 0.2); border-radius: 8px;">
                        <span class="ti-world icon-md" style="color: var(--cbn-gold); font-size: 28px;"></span>
                        <h3 class="mb-0 text-white" style="font-weight: 800; font-size: 26px;">182</h3>
                        <p style="font-size: 13px; color: rgba(255,255,255,0.7); margin-bottom: 0; margin-top: 5px;">覆盖国家 / Global Presence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section ptb-100" style="background: #FAFBFC !important;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 30px; display: flex; flex-direction: column; align-items: start; line-height: 1.2;">
                            银行简史
                            <span style="font-size: 13px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 3px;">A BRIEF HISTORY</span>
                        </h2>
                        <p style="margin-top: 15px;">Our company, "{{$settings->site_name}}", was founded in 2012 by a group of socially-minded entrepreneurs who saw the need for accessible financial services for low-income individuals and small businesses. They believed that by providing small loans and other financial services to these underbanked populations, they could help to promote economic growth and reduce poverty in their community.<br><br>
                        In the early days, {{$settings->site_name}} focused on providing small loans to micro-entrepreneurs in their local area. They quickly realized that there was a high demand for their services.<br><br>
                        Throughout its history, {{$settings->site_name}} has always been guided by its mission to empower the underbanked and promote economic growth.
                        </p>
                        <!-- <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Security</strong>
                                High Tech
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                Blueback Global
                            </li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Insured</strong> AIICO Insurance American International</li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="counter-single">
                                    <h5 class="mb-0 color-secondary">USD 7.2 M</h5>
                                    <strong>Transactions</strong>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="action-btns mt-4">
                            <a href="about" class="btn primary-solid-btn mr-2">View Our Services</a>
                            <a href="contact" class="btn outline-btn">Contact Us</a>
                        </div> -->
                    </div>

                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="card border-0 shadow-sm text-white">
                        <img src="temp/custom/img/bg3.jpg" alt="video" class="img-fluid rounded shadow-sm">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-process-new ptb-100 gray-light-bg" style="background: #FAFBFC !important; border-top: 1px solid #EAEDF0; border-bottom: 1px solid #EAEDF0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 32px; display: inline-flex; flex-direction: column; align-items: center; line-height: 1.2;">
                            开户与交易流程
                            <span style="font-size: 14px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 5px;">OUR PROCESS</span>
                        </h2>
                        <p class="lead" style="margin-top: 10px;">Our process is simple, secure and completed in just a few minutes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="work-process-wrap text-center" style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
                        <div class="single-work-process" style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border: 1.5px solid #EAEDF0; border-radius: 8px; box-shadow: var(--cbn-shadow-sm); position: relative;">
                            <div class="work-process-icon-wrap rounded-circle" style="background: var(--cbn-red) !important; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative;">
                                <i class="ti-user icon-sm text-white"></i>
                                <span class="process-step text-white shadow-sm" style="background: var(--cbn-gold) !important; position: absolute; top: -5px; right: -5px; width: 22px; height: 22px; border-radius: 50%; font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center;">1</span>
                            </div>
                            <div class="work-process-content mt-2">
                                <h5 style="font-family: 'Noto Serif SC', serif; font-weight: 700;">申请注册 / Sign Up</h5>
                                <p style="font-size: 13px; color: #4A5568;">Click on register to submit details and open your online banking account in minutes.</p>
                            </div>
                        </div>
                        <div class="single-work-process" style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border: 1.5px solid #EAEDF0; border-radius: 8px; box-shadow: var(--cbn-shadow-sm); position: relative;">
                            <div class="work-process-icon-wrap rounded-circle" style="background: var(--cbn-red) !important; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative;">
                                <i class="ti-settings icon-sm text-white"></i>
                                <span class="process-step text-white shadow-sm" style="background: var(--cbn-gold) !important; position: absolute; top: -5px; right: -5px; width: 22px; height: 22px; border-radius: 50%; font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center;">2</span>
                            </div>
                            <div class="work-process-content mt-2">
                                <h5 style="font-family: 'Noto Serif SC', serif; font-weight: 700;">账户配置 / Setup</h5>
                                <p style="font-size: 13px; color: #4A5568;">Configure wallets, generate account number, and configure your secure transaction PIN.</p>
                            </div>
                        </div>
                        <div class="single-work-process" style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border: 1.5px solid #EAEDF0; border-radius: 8px; box-shadow: var(--cbn-shadow-sm); position: relative;">
                            <div class="work-process-icon-wrap rounded-circle" style="background: var(--cbn-red) !important; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative;">
                                <i class="ti-wallet icon-sm text-white"></i>
                                <span class="process-step text-white shadow-sm" style="background: var(--cbn-gold) !important; position: absolute; top: -5px; right: -5px; width: 22px; height: 22px; border-radius: 50%; font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center;">3</span>
                            </div>
                            <div class="work-process-content mt-2">
                                <h5 style="font-family: 'Noto Serif SC', serif; font-weight: 700;">存入资金 / Deposit</h5>
                                <p style="font-size: 13px; color: #4A5568;">Fund your account via secure transaction options to activate full banking services.</p>
                            </div>
                        </div>
                        <div class="single-work-process" style="flex: 1; min-width: 220px; background: #fff; padding: 24px; border: 1.5px solid #EAEDF0; border-radius: 8px; box-shadow: var(--cbn-shadow-sm); position: relative;">
                            <div class="work-process-icon-wrap rounded-circle" style="background: var(--cbn-red) !important; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 15px; position: relative;">
                                <i class="ti-money icon-sm text-white"></i>
                                <span class="process-step text-white shadow-sm" style="background: var(--cbn-gold) !important; position: absolute; top: -5px; right: -5px; width: 22px; height: 22px; border-radius: 50%; font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center;">4</span>
                            </div>
                            <div class="work-process-content mt-2">
                                <h5 style="font-family: 'Noto Serif SC', serif; font-weight: 700;">开始交易 / Transact</h5>
                                <p style="font-size: 13px; color: #4A5568;">Enjoy seamless and protected local/international money transactions around the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section ptb-100" style="background: #FAFBFC !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading mb-5 text-center">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 32px; display: inline-flex; flex-direction: column; align-items: center; line-height: 1.2;">
                            客户评价
                            <span style="font-size: 14px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 5px;">TESTIMONIALS</span>
                        </h2>
                        <p class="lead" style="margin-top: 10px;">
                            Our expertise in financial services has bettered the lives of our clients greatly, their testimony has encouraged us greatly.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-single shadow-sm rounded p-4" style="background: #fff; border: 1.5px solid #EAEDF0; border-radius: 8px; height: 100%;">
                        <blockquote style="font-size: 13.5px; color: #4A5568; line-height: 1.6;">
                            {{$settings->site_name}} is one of the best performing microfinance company I have ever experienced. Their transaction process are incredibly seamless!
                        </blockquote>
                        <div class="client-img d-flex align-items-center justify-content-between pt-4" style="border-top: 1px solid #F0F2F5;">
                            <div class="d-flex align-items-center">
                                <img src="temp/custom/base/img/avatars/3.jpg" alt="client" width="45" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                <div class="client-info">
                                    <h5 class="mb-0" style="font-weight: 700; font-size: 14px; color: #222;">Chloe Neil</h5>
                                    <small class="mb-0" style="color: var(--cbn-gold); font-weight: 600;">Verified Customer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-single shadow-sm rounded p-4" style="background: #fff; border: 1.5px solid #EAEDF0; border-radius: 8px; height: 100%;">
                        <blockquote style="font-size: 13.5px; color: #4A5568; line-height: 1.6;">
                            Great company With great vision. Their customer service is quite impressive. Their transaction fees is incredibly low which is also amazing.
                        </blockquote>
                        <div class="client-img d-flex align-items-center justify-content-between pt-4" style="border-top: 1px solid #F0F2F5;">
                            <div class="d-flex align-items-center">
                                <img src="temp/custom/base/img/avatars/2.jpg" alt="client" width="45" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                <div class="client-info">
                                    <h5 class="mb-0" style="font-weight: 700; font-size: 14px; color: #222;">Kim Thompson</h5>
                                    <small class="mb-0" style="color: var(--cbn-gold); font-weight: 600;">Verified Customer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="testimonial-single shadow-sm rounded p-4" style="background: #fff; border: 1.5px solid #EAEDF0; border-radius: 8px; height: 100%;">
                        <blockquote style="font-size: 13.5px; color: #4A5568; line-height: 1.6;">
                            This is just awesome!  One of the best service I had. You can trust them and deposit your funds. Their loans are really helpful and convenient too
                        </blockquote>
                        <div class="client-img d-flex align-items-center justify-content-between pt-4" style="border-top: 1px solid #F0F2F5;">
                            <div class="d-flex align-items-center">
                                <img src="temp/custom/base/img/avatars/4.jpg" alt="client" width="45" class="img-fluid rounded-circle shadow-sm mr-3"/>
                                <div class="client-info">
                                    <h5 class="mb-0" style="font-weight: 700; font-size: 14px; color: #222;">Kyle Waters</h5>
                                    <small class="mb-0" style="color: var(--cbn-gold); font-weight: 600;">Verified Customer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section FAQ -->
    <section class="promo-section ptb-100" style="background: #FAFBFC !important; border-top: 1px solid #EAEDF0; border-bottom: 1px solid #EAEDF0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-9">
                    <div class="section-heading mb-5">
                        <h2 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: var(--cbn-red); font-size: 32px; display: flex; flex-direction: column; align-items: start; line-height: 1.2;">
                            常见问题
                            <span style="font-size: 14px; color: var(--cbn-gold); font-weight: 600; font-family: 'Inter', sans-serif; letter-spacing: 0.1em; margin-top: 5px;">FREQUENTLY ASKED QUESTIONS</span>
                        </h2>
                        <p class="lead" style="margin-top: 10px;">
                            Have Any Question?
                        </p>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">
                <div class="col-lg-6">
                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button"
                                    data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What is {{$settings->site_name}}?</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                    data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>{{$settings->site_name}} our company provides a full investment service focused on the bitcoin and cryptocurrency market We are among the best platforms to invest and grow your bitcoin and other cryptocurrency</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>

                     <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-7" data-toggle="collapse" role="button"
                                    data-target="#collapse-2-7" aria-expanded="false" aria-controls="collapse-2-7">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What Is Bank Account?</h6>
                            </div>
                            <div id="collapse-2-7" class="collapse" aria-labelledby="heading-2-7"
                                    data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>A bank account is a financial account maintained by a bank or other financial institution in which the financial transactions between the bank and a customer are recorded.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button"
                                    data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I create my account?</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                    data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button  and fill in all the required fields</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button"
                                    data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How do I make a deposit?</h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                    data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>

                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-4" data-toggle="collapse" role="button"
                                    data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How long does my deposit take before it can reflect on my {{$settings->site_name}} account dashboard?</h6>
                            </div>
                            <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4"
                                    data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-5" data-toggle="collapse" role="button"
                                    data-target="#collapse-2-5" aria-expanded="false" aria-controls="collapse-2-5">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> What Are The Requirements For Business Loan?</h6>
                            </div>
                            <div id="collapse-2-5" class="collapse" aria-labelledby="heading-2-5"
                                    data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>If you received a Paycheck Protection Program (PPP) loan, loan forgiveness isn’t automatic. You need to apply if you want your loan forgiven. You may need to include bank account statements on your PPP forgiveness application. <br>
                                    Lenders want proof of your business’s incoming money. As a result, you may have to show your bank statements to the lender when you apply for a business loan. The lender reviews the statements to determine if you are a good fit for a loan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>

                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-6" data-toggle="collapse" role="button"
                                    data-target="#collapse-2-6" aria-expanded="false" aria-controls="collapse-2-6">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> How long does it take to process a withdrawal to an international bank?</h6>
                            </div>
                            <div id="collapse-2-6" class="collapse" aria-labelledby="heading-2-6"
                                    data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Once we receive your withdrawal request we process immediately and send to your Bank Account</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                    </div>



                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-9" data-toggle="collapse" role="button"
                                    data-target="#collapse-2-9" aria-expanded="false" aria-controls="collapse-2-9">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Can I have more than two accounts?</h6>
                            </div>
                            <div id="collapse-2-9" class="collapse" aria-labelledby="heading-2-9"
                                    data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>We do not allow multiple accounts except only for business purposes</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--pricing faq end-->
        </div>
    </section>

    <section class="contact-us-section py-5">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('error') }}

    </div>
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}

    </div>
@endif
                    <div class="contact-us-form rounded p-5" style="background: #fff; border: 1.5px solid #EAEDF0; border-top: 4px solid var(--cbn-red); box-shadow: var(--cbn-shadow-sm);">
                        <h4 style="font-family: 'Noto Serif SC', serif; font-weight: 700; color: #222;">联系我们 / Ready to get started?</h4>
                        <p style="font-size: 13px; color: #718096; margin-bottom: 20px;">Send us a message and our support team will reply within 24 hours.</p>
                        <form method="post" class="contact-form" action="{{ route('enquiryfront') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" maxlength="50" required placeholder="Enter Name *" class="form-control" name="name"
                                               style="border-radius: 6px; border: 1.5px solid #DDE1E7; padding: 12px; font-size: 14px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" maxlength="50" required placeholder="Enter Email *" class="form-control" name="email"
                                               style="border-radius: 6px; border: 1.5px solid #DDE1E7; padding: 12px; font-size: 14px;">
                                    </div>
                                </div>
                                <input type="hidden" maxlength="50" id="location" name="location">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" maxlength="160" required placeholder="Enter Subject" class="form-control" name="subject"
                                               style="border-radius: 6px; border: 1.5px solid #DDE1E7; padding: 12px; font-size: 14px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea maxlength="3000" placeholder="Message *" required class="form-control" name="message" rows="5"
                                                  style="border-radius: 6px; border: 1.5px solid #DDE1E7; padding: 12px; font-size: 14px;"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-3">
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        <div class="captcha-box" style="padding: 10px 20px; background-color: #FAFBFC; border: 1.5px dashed var(--cbn-gold); font-family: monospace; font-size: 18px; color: var(--cbn-red); font-weight: 700; border-radius: 6px; letter-spacing: 0.1em;">
                                            {{$captcha}}
                                        </div>
                                        <div style="flex: 1;">
                                            <input type="text" maxlength="100" required placeholder="Enter Captcha *" class="form-control" name="captcha"
                                                   style="border-radius: 6px; border: 1.5px solid #DDE1E7; padding: 12px; font-size: 14px;">
                                            <input type="hidden" name="captcha_confirmation" value="{{$captcha}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <p class="contact-form-message"></p>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <button type="submit" title="Submit Your Message!" class="btn secondary-solid-btn contact-form-button" style="width: 100%; background: linear-gradient(135deg, #9A0B22, #C8102E) !important; border: 1px solid var(--cbn-gold) !important; color:#fff !important; font-weight: 600; padding: 12px; border-radius: 6px;">
                                        <span class="button-text">Send Message &nbsp;·&nbsp; 发送信息</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h3>Looking for an easy and secured place to save you money?</h3>
                        <p class="lead">Search no more! Click on the button below to get started.</p>

                        <a href="#" class="btn outline-btn align-items-center">Get Your Solution <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Headquarters / 总部</h5>
                        <address>
                            {{$settings->address}}
                        </address>
                        <br>
                        <!--<span>Phone: +44 7476 696749</span> <br>-->
                        <span>Email: <a href="cdn-cgi/l/email-protection.html#25565055554a57516556524c435108574046404c53400b464a48" class="link-color"><span class="__cf_email__" data-cfemail="c5b6b0b5b5aab7b185b6b2aca3b1e8b7a0a6a0acb3a0eba6aaa8">[email&#160;protected]</span></a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


    <div class="client-section gray-light-bg" style="padding: 10px 0px;">
        <div class="container">
            <!--clients logo start-->
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-01.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-02.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-03.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-04.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-05.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-06.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-07.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="temp/custom/base/img/clients-logo-08.png" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>



@endsection
