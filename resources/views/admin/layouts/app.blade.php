<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="dark">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="http://rubick.left4code.com/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">

    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <!-- END: CSS Assets-->
    <!-- BEGIN: Alpine -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>
    <!-- END: Alpine -->
    @livewireStyles
</head>
<!-- END: Head -->

<body class="py-5">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Midone - HTML Admin Template" class="w-6"
                    src="http://rubick.left4code.com/dist/images/logo.svg">
            </a>
            <a href="javascript:;" class="mobile-menu-toggler">
                <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
            </a>
        </div>
        <div class="scrollable">
            <a href="javascript:;" class="mobile-menu-toggler">
                <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i>
            </a>
            <ul class="scrollable__content py-2">
                <li>
                    <a href="javascript:;" class="menu menu--active">
                        <div class="menu__icon">
                            <i data-lucide="home"></i>
                        </div>
                        <div class="menu__title">
                            Dashboard
                            <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i>
                        </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1"
                                class="menu menu--active">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-2" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-3" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 3
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-4" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 4
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="box"></i>
                        </div>
                        <div class="menu__title">
                            Menu Layout
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1"
                                class="menu menu--active">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Side Menu
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/simple-menu/dark/dashboard-overview-1"
                                class="menu menu--active">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Simple Menu
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/top-menu/dark/dashboard-overview-1"
                                class="menu menu--active">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Top Menu
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="shopping-bag"></i>
                        </div>
                        <div class="menu__title">
                            E-Commerce
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/categories" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Categories
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/add-product" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Add Product
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Products
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/product-list" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Product List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/product-grid" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Product Grid</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Transactions
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/transaction-list"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Transaction List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/transaction-detail"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Transaction Detail</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Sellers
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/seller-list" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Seller List</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/seller-detail"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Seller Detail</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/reviews" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Reviews
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/inbox" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="inbox"></i>
                        </div>
                        <div class="menu__title">
                            Inbox
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/file-manager" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="hard-drive"></i>
                        </div>
                        <div class="menu__title">
                            File Manager
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/point-of-sale" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="credit-card"></i>
                        </div>
                        <div class="menu__title">
                            Point of Sale
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/chat" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="message-square"></i>
                        </div>
                        <div class="menu__title">
                            Chat
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/post" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="file-text"></i>
                        </div>
                        <div class="menu__title">
                            Post
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://rubick.left4code.com/page/side-menu/dark/calendar" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="calendar"></i>
                        </div>
                        <div class="menu__title">
                            Calendar
                        </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="edit"></i>
                        </div>
                        <div class="menu__title">
                            Crud
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/crud-data-list" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Data List
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/crud-form" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Form
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="users"></i>
                        </div>
                        <div class="menu__title">
                            Users
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/users-layout-1" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Layout 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/users-layout-2" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Layout 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/users-layout-3" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Layout 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="trello"></i>
                        </div>
                        <div class="menu__title">
                            Profile
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/profile-overview-1" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 1
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/profile-overview-2" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 2
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/profile-overview-3" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overview 3
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="layout"></i>
                        </div>
                        <div class="menu__title">
                            Pages
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Wizards
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wizard-layout-1"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wizard-layout-2"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wizard-layout-3"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Blog
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/blog-layout-1"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/blog-layout-2"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/blog-layout-3"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Pricing
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/pricing-layout-1"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/pricing-layout-2"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Invoice
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/invoice-layout-1"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/invoice-layout-2"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    FAQ
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/faq-layout-1" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/faq-layout-2" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/faq-layout-3" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/login/dark/login" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Login
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/login/dark/register" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Register
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/main/dark/error-page" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Error Page
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/update-profile" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Update profile
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/change-password" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Change Password
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="inbox"></i>
                        </div>
                        <div class="menu__title">
                            Components
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Table
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/regular-table"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/tabulator" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Overlay
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/modal" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/slide-over" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/notification" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/tab" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Tab
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/accordion" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Accordion
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/button" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Button
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/alert" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Alert
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/progress-bar" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Progress Bar
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/tooltip" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Tooltip
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/dropdown" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Dropdown
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/typography" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Typography
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/icon" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Icon
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/loading-icon" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Loading Icon
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="sidebar"></i>
                        </div>
                        <div class="menu__title">
                            Forms
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/regular-form" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Regular Form
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/datepicker" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Datepicker
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/tom-select" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Tom Select
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/file-upload" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    File Upload
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Wysiwyg Editor
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-classic"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Classic</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-inline"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Inline</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-balloon"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Balloon</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-balloon-block"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Balloon Block</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick.left4code.com/page/side-menu/dark/wysiwyg-editor-document"
                                        class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="zap"></i>
                                        </div>
                                        <div class="menu__title">Document</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/validation" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Validation
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon">
                            <i data-lucide="hard-drive"></i>
                        </div>
                        <div class="menu__title">
                            Widgets
                            <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/chart" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Chart
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/slider" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Slider
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="http://rubick.left4code.com/page/side-menu/dark/image-zoom" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="menu__title">
                                    Image Zoom
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
            @include('admin.layouts.sidebar')
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
            {{ $slot }}
            @yield('admin_content')
        <!-- END: Content -->
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="http://rubick.left4code.com/page/side-menu/light/dashboard-overview-1"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
        <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: Main Color Switcher-->
    <div
        class="shadow-md fixed bottom-0 right-0 box border rounded-full h-12 px-5 flex items-center justify-center z-50 mb-10 mr-52">
        <div class="mr-4 hidden sm:block text-slate-600 dark:text-slate-200">Color Scheme</div>
        <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1?color_scheme=default"
            class="block w-8 h-8 cursor-pointer bg-blue-800 rounded-full border-4 mr-1 hover:border-slate-200 border-slate-300 dark:border-darkmode-800/80"></a>
        <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1?color_scheme=theme-1"
            class="block w-8 h-8 cursor-pointer bg-emerald-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1?color_scheme=theme-2"
            class="block w-8 h-8 cursor-pointer bg-blue-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1?color_scheme=theme-3"
            class="block w-8 h-8 cursor-pointer bg-cyan-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1?color_scheme=theme-4"
            class="block w-8 h-8 cursor-pointer bg-indigo-900 rounded-full border-4 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
    </div>
    <!-- END: Main Color Switcher-->

    <!-- BEGIN: JS Assets-->
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcUcow5QHjitBVOfkTdy44l7jnaoFzW1k&libraries=places">
    </script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/map.js') }}"></script>
    <!-- END: JS Assets-->
    @livewireScripts
</body>

</html>
