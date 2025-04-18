<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل مدیریت')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="description" content="@yield('meta_description', '')">
    <meta name="author" content="@yield('meta_author', '')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    @livewireStyles

    @yield('styles') <!-- امکان افزودن استایل سفارشی در صفحات فرزند -->
</head>

<body @if (App::getLocale() == 'fa') dir="rtl" @endif>
    <div class="container-fluid" @if (App::getLocale() == 'fa') dir="rtl" @endif>
        {{-- header --}}

        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">
                                <img src="assets/images/logo.png" alt="Chain App Dev">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section"><a href="#top"
                                        class="active">{{ translate('front.home') }}</a></li>
                                <li class="scroll-to-section"><a href="#services">{{ translate('front.services') }}</a>
                                </li>
                                <li class="scroll-to-section"><a href="#about">{{ translate('front.about') }}</a></li>
                                <li class="scroll-to-section"><a href="#pricing">{{ translate('front.pricing') }}</a>
                                </li>
                                <li class="scroll-to-section"><a
                                        href="#newsletter">{{ translate('front.newsletter') }}</a></li>
                                <li>
                                    <div class="gradient-button">
                                        <a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i>
                                            {{ translate('front.sign_in') }}</a>
                                    </div>
                                </li>
                            </ul>
                            <a class='menu-trigger'>
                                <span>{{ translate('front.menu') }}</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- ***** Header Area End ***** -->

        <div id="modal" class="popupContainer" style="display:none;">
            <div class="popupHeader">
                <span class="header_title">{{ translate('front.login') }}</span>
                <span class="modal_close"><i class="fa fa-times"></i></span>
            </div>

            <section class="popupBody">
                <!-- Social Login -->
                <div class="social_login">
                    <div class="">
                        <a href="#" class="social_box fb">
                            <span class="icon"><i class="fab fa-facebook"></i></span>
                            <span class="icon_title">{{ translate('front.connect_facebook') }}</span>
                        </a>

                        <a href="#" class="social_box google">
                            <span class="icon"><i class="fab fa-google-plus"></i></span>
                            <span class="icon_title">{{ translate('front.connect_google') }}</span>
                        </a>
                    </div>

                    <div class="centeredText">
                        <span>{{ translate('front.or_use_email') }}</span>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" id="login_form"
                                class="btn">{{ translate('front.login_btn') }}</a></div>
                        <div class="one_half last"><a href="#" id="register_form"
                                class="btn">{{ translate('front.signup_btn') }}</a></div>
                    </div>
                </div>

                <!-- Username & Password Login form -->
                <div class="user_login">
                    <form>
                        <label>{{ translate('front.username') }}</label>
                        <input type="text" />
                        <br />

                        <label>{{ translate('front.password') }}</label>
                        <input type="password" />
                        <br />

                        <div class="checkbox">
                            <input id="remember" type="checkbox" />
                            <label for="remember">{{ translate('front.remember_me') }}</label>
                        </div>

                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i
                                        class="fa fa-angle-double-left"></i>
                                    {{ translate('front.forgot_password') }}</a></div>
                            <div class="one_half last"><a href="#"
                                    class="btn btn_red">{{ translate('front.login_btn') }}</a></div>
                        </div>
                    </form>

                    <a href="#" class="forgot_password">{{ translate('front.forgot_password') }}</a>
                </div>

                <!-- Register Form -->
                <div class="user_register">
                    <form>
                        <label>{{ translate('front.full_name') }}</label>
                        <input type="text" />
                        <br />

                        <label>{{ translate('front.email_address') }}</label>
                        <input type="email" />
                        <br />

                        <label>{{ translate('front.password') }}</label>
                        <input type="password" />
                        <br />

                        <div class="checkbox">
                            <input id="send_updates" type="checkbox" />
                            <label for="send_updates">{{ translate('front.send_updates') }}</label>
                        </div>

                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i
                                        class="fa fa-angle-double-left"></i>
                                    {{ translate('front.forgot_password') }}</a></div>
                            <div class="one_half last"><a href="#"
                                    class="btn btn_red">{{ translate('front.register_btn') }}</a></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        {{-- end header  --}}

        @yield('content') <!-- بخش محتوای صفحات فرزند -->

        {{-- footer --}}
        <footer id="newsletter" @if (App::getLocale() == 'fa') dir="rtl" @endif>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-heading">
                            <h4>{{ translate('front.newsletter_heading') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <form id="search" action="#" method="GET">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <fieldset>
                                        <input type="address" name="address" class="email"
                                            placeholder="Email Address..." autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <fieldset>
                                        <button type="submit"
                                            class="main-button">{{ translate('front.subscribe_button') }} <i
                                                class="fa fa-angle-right"></i></button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer-widget">
                            <h4>{{ translate('front.contact_us') }}</h4>
                            <div class="row">
                                <div class="col-6">
                                    <a href="https://wa.me/989390230313" target="_blank">
                                        <img style="width:50px !important;"
                                            src="{{ asset('assets/images/watsapp.png') }}"
                                            alt="{{ translate('front.watsapp') }}" width="50">
                                    </a>
                                    <p>{{ translate('front.watsapp') }}</p>
                                </div>
                                <div class="col-6">
                                    <a href="https://t.me/mohamadhosinmoh" target="_blank">
                                        <img style="width:50px !important;"
                                            src="{{ asset('assets/images/telegram.png') }}"
                                            alt="{{ translate('front.telegram') }}" width="50">
                                    </a>
                                    <p>{{ translate('front.telegram') }}</p>
                                </div>
                            </div>
                            <p><a href="#">{{ translate('front.email') }}</a></p>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>{{ translate('front.about_us') }}</h4>
                            <ul>
                                <li><a href="#">{{ translate('front.home') }}</a></li>
                                <li><a href="#">{{ translate('front.services') }}</a></li>
                                <li><a href="#">{{ translate('front.about') }}</a></li>
                                <li><a href="#">{{ translate('front.testimonials') }}</a></li>
                                <li><a href="#">{{ translate('front.pricing') }}</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">{{ translate('front.about') }}</a></li>
                                <li><a href="#">{{ translate('front.testimonials') }}</a></li>
                                <li><a href="#">{{ translate('front.pricing') }}</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>{{ translate('front.useful_links') }}</h4>
                            <ul>
                                <li><a href="#">{{ translate('front.free_apps') }}</a></li>
                                <li><a href="#">{{ translate('front.app_engine') }}</a></li>
                                <li><a href="#">{{ translate('front.programming') }}</a></li>
                                <li><a href="#">{{ translate('front.development') }}</a></li>
                                <li><a href="#">{{ translate('front.app_news') }}</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">{{ translate('front.app_dev_team') }}</a></li>
                                <li><a href="#">{{ translate('front.digital_web') }}</a></li>
                                <li><a href="#">{{ translate('front.normal_apps') }}</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="footer-widget">
                            <h4>{{ translate('front.about_company') }}</h4>
                            <div class="logo">
                                <img src="assets/images/white-logo.png" alt="">
                            </div>
                            <p>{{ translate('front.company_description') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <p>{{ translate('front.copyright') }}
                                <br>{{ translate('front.design') }}: <a href="https://templatemo.com/"
                                    target="_blank" title="css templates">vitrinow.ir</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    @livewireScripts

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/popup.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('scripts') <!-- امکان افزودن اسکریپت سفارشی در صفحات فرزند -->
</body>

</html>
