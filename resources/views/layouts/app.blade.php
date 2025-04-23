<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" dir="ltr" lang="en">

<head>
    @include('layouts.includes.headtitle')


</head>

<body class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#fefefe] [--tw-page-bg-dark:var(--tw-coal-500)] demo1 sidebar-fixed header-fixed bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]">

    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('theme')) {
                themeMode = localStorage.getItem('theme');
            } else if (document.documentElement.hasAttribute('data-theme-mode')) {
                themeMode = document.documentElement.getAttribute('data-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- End of Theme Mode -->


    <!-- Page -->

    <!-- Main -->
    <div class="flex grow">

        <!-- Sidebar -->
        @include('layouts.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Wrapper -->
        <div class="wrapper flex grow flex-col">
            
            <!-- Header -->
            @include('layouts.includes.header')
            <!-- End of Header -->

            <!-- Content -->
            <main class="grow content pt-5" id="content" role="content">

            <div class="container-fluid" id="content_container">
                @yield('content')
            </div>
                
            </main>
            <!-- End of Content -->

            <!-- Footer -->
            @include('layouts.includes.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Wrapper -->

    </div>
    <!-- End of Main -->

    @include('layouts.includes.searchmodal')

    <!-- End of Page -->

    <!-- Scripts -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/widgets/general.js') }}"></script>
    <script src="{{ asset('assets/js/layouts/demo1.js') }}"></script>
    @yield('footerjs')
    <!-- End of Scripts -->

    <!-- End of Scripts -->

</body>

</html>