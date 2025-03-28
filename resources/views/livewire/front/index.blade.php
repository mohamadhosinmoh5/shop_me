<!-- resources/views/dashboard.blade.php -->
@extends('master')

@section('title', 'داشبورد')

@section('content')

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s"
        @if (App::getLocale() == 'fa') dir="rtl" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>{{ translate('front.get_latest_app') }}</h2>
                                        <p>{{ translate('front.chain_app_dev_desc') }}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button scroll-to-section">
                                            <a href="#contact">{{ translate('front.free_quote') }} <i
                                                    class="fab fa-apple"></i></a>
                                        </div>
                                        <div class="white-button scroll-to-section">
                                            <a href="#contact">{{ translate('front.free_quote') }} <i
                                                    class="fab fa-google-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('assets/images/slider-dec.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section" @if (App::getLocale() == 'fa') dir="rtl" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4>{!! translate('front.amazing_services_features') !!}</h4>
                        <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
                        <p>{!! translate('front.visit_toocss') !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="icon"></div>
                        <h4>{{ translate('front.app_maintenance') }}</h4>
                        <p>{{ translate('front.app_maintenance_desc') }}</p>
                        <div class="text-button">
                            <a href="#">{{ translate('front.read_more') }} <i
                                    class="fa fa-arrow-{{ App::getLocale() == 'fa' ? 'left' : 'right' }}"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="icon"></div>
                        <h4>{{ translate('front.rocket_speed') }}</h4>
                        <p>{{ translate('front.rocket_speed_desc') }}</p>
                        <div class="text-button">
                            <a href="#">{{ translate('front.read_more') }} <i
                                    class="fa fa-arrow-{{ App::getLocale() == 'fa' ? 'left' : 'right' }}"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="icon"></div>
                        <h4>{{ translate('front.multi_workflow') }}</h4>
                        <p>{!! translate('front.multi_workflow_desc') !!}</p>
                        <div class="text-button">
                            <a href="#">{{ translate('front.read_more') }} <i
                                    class="fa fa-arrow-{{ App::getLocale() == 'fa' ? 'left' : 'right' }}"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="icon"></div>
                        <h4>{{ translate('front.support_24_7') }}</h4>
                        <p>{{ translate('front.support_24_7_desc') }}</p>
                        <div class="text-button">
                            <a href="#">{{ translate('front.read_more') }} <i
                                    class="fa fa-arrow-{{ App::getLocale() == 'fa' ? 'left' : 'right' }}"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section" @if (App::getLocale() == 'fa') dir="rtl" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>{!! translate('front.about_what_we_do') !!}</h4>
                        <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
                        <p>{{ translate('front.about_desc') }}</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">{{ translate('front.maintenance_problems') }}</a></h4>
                                {{-- <p>{{ translate('front.lorem_ipsum') }}</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">{{ translate('front.issue2') }}</a></h4>
                                {{-- <p>{{ translate('front.lorem_ipsum') }}</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">{{ translate('front.fixing_issues') }}</a></h4>
                                {{-- <p>{{ translate('front.lorem_ipsum') }}</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">{{ translate('front.co_development') }}</a></h4>
                                {{-- <p>{{ translate('front.lorem_ipsum') }}</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>{{ translate('front.about_extra_desc') }}</p>
                            <div class="gradient-button">
                                <a href="#">{{ translate('front.start_14_day_trial') }}</a>
                            </div>
                            <span>{{ translate('front.no_credit_card') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="{{ asset('assets/images/about-right-dec.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="clients" class="the-clients" @if (App::getLocale() == 'fa') dir="rtl" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>{!! translate('front.clients_say') !!}</h4>
                        <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
                        <p>{{ translate('front.clients_desc') }}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-7 align-self-center">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>{{ translate('front.david_martino_co') }}</h4>
                                                        <span
                                                            class="date">{{ translate('front.date_30_nov_2021') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span
                                                            class="category">{{ translate('front.financial_apps') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>{{ translate('front.jake_harris_nyo') }}</h4>
                                                        <span
                                                            class="date">{{ translate('front.date_29_nov_2021') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span
                                                            class="category">{{ translate('front.digital_business') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.5</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>{{ translate('front.may_catherina') }}</h4>
                                                        <span
                                                            class="date">{{ translate('front.date_27_nov_2021') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span
                                                            class="category">{{ translate('front.business_economics') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.7</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>{{ translate('front.random_user') }}</h4>
                                                        <span
                                                            class="date">{{ translate('front.date_24_nov_2021') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span
                                                            class="category">{{ translate('front.new_app_ecosystem') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">3.9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>{{ translate('front.mark_amber_do') }}</h4>
                                                        <span
                                                            class="date">{{ translate('front.date_21_nov_2021') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span
                                                            class="category">{{ translate('front.web_development') }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ asset('assets/images/quote.png') }}"
                                                                    alt="">
                                                                <p>{{ translate('front.client_testimonial1') }}</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ asset('assets/images/homeenger.svg') }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>{{ translate('front.david_martino') }}</h4>
                                                                    <span>{{ translate('front.ceo_david_company') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ asset('assets/images/quote.png') }}"
                                                                    alt="">
                                                                <p>{{ translate('front.client_testimonial2') }}</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ asset('assets/images/homeenger.svg') }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>{{ translate('front.jake_h_nyo') }}</h4>
                                                                    <span>{{ translate('front.cto_digital_company') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ asset('assets/images/quote.png') }}"
                                                                    alt="">
                                                                <p>{{ translate('front.client_testimonial3') }}</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ asset('assets/images/karobin.png') }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>{{ translate('front.may_c') }}</h4>
                                                                    <span>{{ translate('front.founder_catherina_co') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ asset('assets/images/quote.png') }}"
                                                                    alt="">
                                                                <p>{{ translate('front.client_testimonial4') }}</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ asset('assets/images/safiran.jpg') }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>{{ translate('front.random_staff') }}</h4>
                                                                    <span>{{ translate('front.manager_digital_company') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="{{ asset('assets/images/quote.png') }}"
                                                                    alt="">
                                                                <p>{{ translate('front.client_testimonial5') }}</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="{{ asset('assets/images/yar.png') }}"
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>{{ translate('front.mark_am') }}</h4>
                                                                    <span>{{ translate('front.cto_amber_do_company') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing" class="pricing-tables" @if (App::getLocale() == 'fa') dir="rtl" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>{!! translate('front.best_preorder_prices') !!}</h4>
                        <img src="{{ asset('assets/images/heading-line-dec.png') }}" alt="">
                        <p>{{ translate('front.pricing_desc') }}</p>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$12</span>
                        <h4>{{ translate('front.standard_plan_app') }}</h4>
                        <div class="icon">
                            <img src="{{ asset('assets/images/pricing-table-01.png') }}" alt="">
                        </div>
                        <ul>
                            <li>{{ translate('front.lorem_ipsum_dolores') }}</li>
                            <li>{{ translate('front.storage_20tb') }}</li>
                            <li class="non-function">{{ translate('front.lifetime_support') }}</li>
                            <li class="non-function">{{ translate('front.premium_addons') }}</li>
                            <li class="non-function">{{ translate('front.fastest_network') }}</li>
                            <li class="non-function">{{ translate('front.more_options') }}</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">{{ translate('front.purchase_now') }}</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4">
                    <div class="pricing-item-pro">
                        <span class="price">$25</span>
                        <h4>{{ translate('front.business_plan_app') }}</h4>
                        <div class="icon">
                            <img src="{{ asset('assets/images/pricing-table-01.png') }}" alt="">
                        </div>
                        <ul>
                            <li>{{ translate('front.lorem_ipsum_dolores') }}</li>
                            <li>{{ translate('front.storage_50tb') }}</li>
                            <li>{{ translate('front.lifetime_support') }}</li>
                            <li>{{ translate('front.premium_addons') }}</li>
                            <li class="non-function">{{ translate('front.fastest_network') }}</li>
                            <li class="non-function">{{ translate('front.more_options') }}</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">{{ translate('front.purchase_now') }}</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$66</span>
                        <h4>{{ translate('front.premium_plan_app') }}</h4>
                        <div class="icon">
                            <img src="{{ asset('assets/images/pricing-table-01.png') }}" alt="">
                        </div>
                        <ul>
                            <li>{{ translate('front.lorem_ipsum_dolores') }}</li>
                            <li>{{ translate('front.storage_120tb') }}</li>
                            <li>{{ translate('front.lifetime_support') }}</li>
                            <li>{{ translate('front.premium_addons') }}</li>
                            <li>{{ translate('front.fastest_network') }}</li>
                            <li>{{ translate('front.more_options') }}</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">{{ translate('front.purchase_now') }}</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>


        {{-- @livewire('dashboard-component') <!-- نمایش کامپوننت لایو وایر --> --}}
    @endsection

    @section('scripts')
        <script>
            console.log('Dashboard Page Loaded');
        </script>
    @endsection
