<div class="sidebar dark:bg-coal-600 bg-light border-e border-e-gray-200 dark:border-e-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false" id="sidebar">
    <div class="sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
        <a class="dark:hidden" href="{{ url('/') }}">
            <img class="default-logo min-h-[22px] max-w-none" src="{{ asset('assets/media/app/default-logo.svg') }}" />
            <img class="small-logo min-h-[22px] max-w-none" src="{{ asset('assets/media/app/mini-logo.svg') }}" />
        </a>
        <a class="hidden dark:block" href="{{ url('/') }}">
            <img class="default-logo min-h-[22px] max-w-none" src="{{ asset('assets/media/app/default-logo-dark.svg') }}" />
            <img class="small-logo min-h-[22px] max-w-none" src="{{ asset('assets/media/app/mini-logo.svg') }}" />
        </a>
        <button class="btn btn-icon btn-icon-md size-[30px] rounded-lg border border-gray-200 dark:border-gray-300 bg-light text-gray-500 hover:text-gray-700 toggle absolute start-full top-2/4 -translate-x-2/4 -translate-y-2/4 rtl:translate-x-2/4" data-toggle="body" data-toggle-class="sidebar-collapse" id="sidebar_toggle">
            <i class="ki-filled ki-black-left-line toggle-active:rotate-180 transition-all duration-300 rtl:translate rtl:rotate-180 rtl:toggle-active:rotate-0">
            </i>
        </button>
    </div>
    <div class="sidebar-content flex grow shrink-0 py-5 pe-2" id="sidebar_content">
        <div class="scrollable-y-hover grow shrink-0 flex ps-2 lg:ps-5 pe-1 lg:pe-3" data-scrollable="true" data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto" data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
            <!-- Sidebar Menu -->
            <div class="menu flex flex-col grow gap-3" data-menu="true" data-menu-accordion-expand-all="false" id="sidebar_menu">
                @php
                    $currentRoute = request()->path();
                @endphp

                <div class="menu-item">
                    <a class="menu-link rounded-lg flex items-center grow border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]
                        {{ $currentRoute === '/' ? 'bg-primary text-white' : '' }}"
                        href="{{ url('/') }}" tabindex="0">
                        <span class="menu-icon items-start w-[20px] 
                            {{ $currentRoute === '/' ? 'text-white' : 'text-gray-500 dark:text-gray-400' }}">
                            <i class="ki-filled ki-home-2 text-lg"></i>
                        </span>
                        <span class="menu-title text-sm font-medium">
                            Home
                        </span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link rounded-lg flex items-center grow border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]
                        {{ $currentRoute === 'other' ? 'bg-primary text-white' : '' }}"
                        href="{{ url('other') }}" tabindex="0">
                        <span class="menu-icon items-start w-[20px] 
                            {{ $currentRoute === 'other' ? 'text-white' : 'text-gray-500 dark:text-gray-400' }}">
                            <i class="ki-filled ki-category text-lg"></i>
                        </span>
                        <span class="menu-title text-sm font-medium">
                            Other
                        </span>
                    </a>
                </div>


            </div>
            <!-- End of Sidebar Menu -->
        </div>
    </div>
</div>