<!-- Header -->
<header class="header fixed top-0 z-10 start-0 end-0 flex items-stretch shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]" data-sticky="true" data-sticky-class="shadow-sm" data-sticky-name="header" id="header">
    <!-- Container -->
    <div class="container-fluid flex justify-between items-stretch lg:gap-4" id="header_container">
        <!-- Mobile Logo -->
        <div class="flex gap-1 lg:hidden items-center -ms-1">
            <a class="shrink-0" href="html/demo1.html">
                <img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg" />
            </a>
            <div class="flex items-center">
                <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
                    <i class="ki-filled ki-menu">
                    </i>
                </button>
                <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#mega_menu_wrapper">
                    <i class="ki-filled ki-burger-menu-2">
                    </i>
                </button>
            </div>
        </div>
        <!-- End of Mobile Logo -->
        <!--Megamenu Contaoner-->
        <div class="flex items-stretch" id="mega_menu_container">
            <!--Megamenu Inner-->
            <div class="flex items-stretch" data-reparent="true" data-reparent-mode="prepend|lg:prepend" data-reparent-target="body|lg:#mega_menu_container">
                <!--Megamenu Wrapper-->
                <div class="hidden lg:flex lg:items-stretch" data-drawer="true" data-drawer-class="drawer drawer-start fixed z-10 top-0 bottom-0 w-full me-5 max-w-[250px] p-5 lg:p-0 overflow-auto" data-drawer-enable="true|lg:false" id="mega_menu_wrapper">
                    <!--Megamenu-->
                    <div class="menu header-breadcrumb-menu flex-col lg:flex-row gap-5 lg:gap-7.5" data-menu="true" id="mega_menu">

                        <!--Megamenu Item-->
                        <div class="menu-item ">
                            <a class="menu-link text-nowrap text-sm text-gray-800 font-medium menu-item-hover:text-primary menu-item-active:text-gray-900 menu-item-active:font-medium" href="/">
                                <span class="menu-title text-nowrap">
                                    Home
                                </span>
                            </a>
                        </div>
                        <!--End of Megamenu Item-->

                        @yield('breadcrumb-header')
                    
                        
                    </div>
                    <!--End of Megamenu-->
                </div>
                <!--End of Megamenu Wrapper-->
            </div>
            <!--End of Megamenu Inner-->
        </div>
        <!--End of Megamenu Contaoner-->
        <!-- Topbar -->
        <div class="flex items-center gap-2 lg:gap-3.5">

            <!-- Search Button -->
            <button class="btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary text-gray-500" data-modal-toggle="#search_modal">
                <i class="ki-filled ki-magnifier">
                </i>
            </button>
            <!-- End of Search Button -->
            
            <!-- Profile Menu -->
            <div class="menu" data-menu="true">
                <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-offset-rtl="-20px, 10px" data-menu-item-placement="bottom-end" data-menu-item-placement-rtl="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                    <div class="menu-toggle btn btn-icon rounded-full">
                        <img alt="" class="size-9 rounded-full border-2 border-success shrink-0" src="assets/media/avatars/300-2.png">
                        </img>
                    </div>
                    <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                        <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                            <div class="flex items-center gap-2">
                                <img alt="" class="size-9 rounded-full border-2 border-success" src="assets/media/avatars/300-2.png">
                                <div class="flex flex-col gap-1.5">
                                    <span class="text-sm text-gray-800 font-semibold leading-none">
                                        Cody Fisher
                                    </span>
                                    <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none" href="html/demo1/account/home/get-started.html">
                                        c.fisher@gmail.com
                                    </a>
                                </div>
                                </img>
                            </div>
                            <span class="badge badge-xs badge-primary badge-outline">
                                Pro
                            </span>
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="flex flex-col">
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo1/public-profile/profiles/default.html">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-badge">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Public Profile
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo1/account/home/user-profile.html">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-profile-circle">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        My Profile
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-50px, 0" data-menu-item-placement="left-start" data-menu-item-placement-rtl="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-setting-2">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        My Account
                                    </span>
                                    <span class="menu-arrow">
                                        <i class="ki-filled ki-right text-3xs rtl:transform rtl:rotate-180">
                                        </i>
                                    </span>
                                </div>
                                <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/home/get-started.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-coffee">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Get Started
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/home/user-profile.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-some-files">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                My Profile
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="#">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-icon">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Billing
                                            </span>
                                            <span class="menu-badge" data-tooltip="true" data-tooltip-placement="top">
                                                <i class="ki-filled ki-information-2 text-md text-gray-500">
                                                </i>
                                                <span class="tooltip" data-tooltip-content="true">
                                                    Payment and subscription info
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/security/overview.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-medal-star">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Security
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/members/teams.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-setting">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Members & Roles
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/integrations.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-switch">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Integrations
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-separator">
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/security/overview.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-shield-tick">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Notifications
                                            </span>
                                            <label class="switch switch-sm">
                                                <input checked="" name="check" type="checkbox" value="1">
                                                </input>
                                            </label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://devs.keenthemes.com">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-message-programming">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Dev Forum
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-10px, 0" data-menu-item-placement="left-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-icon">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Language
                                    </span>
                                    <div class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
                                        English
                                        <img alt="" class="inline-block size-3.5 rounded-full" src="assets/media/flags/united-states.svg" />
                                    </div>
                                </div>
                                <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
                                    <div class="menu-item active">
                                        <a class="menu-link h-10" href="?dir=ltr">
                                            <span class="menu-icon">
                                                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/united-states.svg" />
                                            </span>
                                            <span class="menu-title">
                                                English
                                            </span>
                                            <span class="menu-badge">
                                                <i class="ki-solid ki-check-circle text-success text-base">
                                                </i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link h-10" href="?dir=rtl">
                                            <span class="menu-icon">
                                                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/saudi-arabia.svg" />
                                            </span>
                                            <span class="menu-title">
                                                Arabic(Saudi)
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link h-10" href="?dir=ltr">
                                            <span class="menu-icon">
                                                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/spain.svg" />
                                            </span>
                                            <span class="menu-title">
                                                Spanish
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link h-10" href="?dir=ltr">
                                            <span class="menu-icon">
                                                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/germany.svg" />
                                            </span>
                                            <span class="menu-title">
                                                German
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link h-10" href="?dir=ltr">
                                            <span class="menu-icon">
                                                <img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/japan.svg" />
                                            </span>
                                            <span class="menu-title">
                                                Japanese
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="flex flex-col">
                            <div class="menu-item mb-0.5">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-moon">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Dark Mode
                                    </span>
                                    <label class="switch switch-sm">
                                        <input data-theme-state="dark" data-theme-toggle="true" name="check" type="checkbox" value="1">
                                        </input>
                                    </label>
                                </div>
                            </div>
                            <div class="menu-item px-4 py-1.5">
                                <a class="btn btn-sm btn-light justify-center" href="html/demo1/authentication/classic/sign-in.html">
                                    Log out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Profile Menu -->


        </div>
        <!-- End of Topbar -->
    </div>
    <!-- End of Container -->
</header>
<!-- End of Header -->