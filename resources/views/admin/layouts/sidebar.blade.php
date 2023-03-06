<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-6" src="http://rubick.left4code.com/dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3">
            Rubick
        </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="javascript:;" class="side-menu {{ (Route::is('admin.dashboard'))? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                    <div class="side-menu__sub-icon transform rotate-180">
                        <i data-lucide="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="side-menu__sub-open">
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1"
                        class="side-menu side-menu--active">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 1
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-2" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 2
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-3" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 3
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-4" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 4
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.banners') }}" class="side-menu {{ (Route::is('admin.banners'))? 'side-menu--active' : '' }}">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="airplay" data-lucide="airplay" class="lucide lucide-airplay block mx-auto"><path d="M5 17H4a2 2 0 01-2-2V5a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                </div>
                <div class="side-menu__title">
                    Banner
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-lucide="box"></i>
                </div>
                <div class="side-menu__title">
                    Products
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-lucide="box"></i>
                </div>
                <div class="side-menu__title">
                    Users
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-lucide="box"></i>
                </div>
                <div class="side-menu__title">
                    Users
                </div>
            </a>
        </li>
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="shopping-bag"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    E-Commerce--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/categories" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Categories--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/add-product" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Add Product--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Products--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/product-list" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Product List</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/product-grid" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Product Grid</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Transactions--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/transaction-list"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Transaction List</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/transaction-detail"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Transaction Detail</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Sellers--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/seller-list" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Seller List</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/seller-detail" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Seller Detail</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/reviews" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Reviews--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="http://rubick.left4code.com/page/side-menu/dark/inbox" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="inbox"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Inbox--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="http://rubick.left4code.com/page/side-menu/dark/file-manager" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="hard-drive"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    File Manager--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="http://rubick.left4code.com/page/side-menu/dark/point-of-sale" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="credit-card"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Point of Sale--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="http://rubick.left4code.com/page/side-menu/dark/chat" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="message-square"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Chat--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="http://rubick.left4code.com/page/side-menu/dark/post" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="file-text"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Post--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="http://rubick.left4code.com/page/side-menu/dark/calendar" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="calendar"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Calendar--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="side-nav__devider my-6"></li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="edit"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Crud--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/crud-data-list" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Data List--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/crud-form" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Form--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="users"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Users--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/users-layout-1" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Layout 1--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/users-layout-2" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Layout 2--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/users-layout-3" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Layout 3--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="trello"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Profile--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/profile-overview-1" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Overview 1--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/profile-overview-2" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Overview 2--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/profile-overview-3" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Overview 3--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="layout"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Pages--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Wizards--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wizard-layout-1" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 1</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wizard-layout-2" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 2</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wizard-layout-3" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 3</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Blog--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/blog-layout-1" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 1</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/blog-layout-2" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 2</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/blog-layout-3" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 3</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Pricing--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/pricing-layout-1"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 1</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/pricing-layout-2"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 2</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Invoice--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/invoice-layout-1"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 1</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/invoice-layout-2"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 2</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            FAQ--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/faq-layout-1" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 1</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/faq-layout-2" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 2</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/faq-layout-3" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Layout 3</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/login/dark/login" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Login--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/login/dark/register" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Register--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/main/dark/error-page" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Error Page--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/update-profile" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Update profile--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/change-password" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Change Password--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="side-nav__devider my-6"></li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="inbox"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Components--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Table--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/regular-table" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Regular Table</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/tabulator" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Tabulator</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Overlay--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/modal" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Modal</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/slide-over" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Slide Over</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/notification" class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Notification</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/tab" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Tab--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/accordion" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Accordion--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/button" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Button--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/alert" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Alert--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/progress-bar" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Progress Bar--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/tooltip" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Tooltip--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/dropdown" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Dropdown--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/typography" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Typography--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/icon" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Icon--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/loading-icon" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Loading Icon--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="sidebar"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Forms--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/regular-form" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Regular Form--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/datepicker" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Datepicker--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/tom-select" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Tom Select--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/file-upload" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            File Upload--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="javascript:;" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Wysiwyg Editor--}}
{{--                            <div class="side-menu__sub-icon ">--}}
{{--                                <i data-lucide="chevron-down"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <ul class="">--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-classic"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Classic</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-inline"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Inline</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-balloon"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Balloon</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-balloon-block"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Balloon Block</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-document"--}}
{{--                                class="side-menu">--}}
{{--                                <div class="side-menu__icon">--}}
{{--                                    <i data-lucide="zap"></i>--}}
{{--                                </div>--}}
{{--                                <div class="side-menu__title">Document</div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/validation" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Validation--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="side-menu">--}}
{{--                <div class="side-menu__icon">--}}
{{--                    <i data-lucide="hard-drive"></i>--}}
{{--                </div>--}}
{{--                <div class="side-menu__title">--}}
{{--                    Widgets--}}
{{--                    <div class="side-menu__sub-icon ">--}}
{{--                        <i data-lucide="chevron-down"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <ul class="">--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/chart" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Chart--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/slider" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Slider--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://rubick.left4code.com/page/side-menu/dark/image-zoom" class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <i data-lucide="activity"></i>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Image Zoom--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
    </ul>
</nav>
