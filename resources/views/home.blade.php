@extends('layouts.app')

@section('title')
Home - Docsense
@endsection

@section('breadcrumb-header')
<div class="menu-item ">
    <a class="menu-link text-nowrap text-sm text-gray-800 font-medium menu-item-hover:text-primary menu-item-active:text-gray-900 menu-item-active:font-medium" href="/">
        <span class="menu-title text-nowrap">
            Dashboard
        </span>
    </a>
</div>
@endsection


@section('content')
<div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
    <div class="lg:col-span-1">
        <div class="card h-full">
            <div class="card-header">
                <h3 class="card-title">
                    Highlights
                </h3>
                <div class="menu" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-dots-vertical">
                            </i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo1/account/activity.html">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-cloud-change">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Activity
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-share">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Share
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-notification-status">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Notifications
                                    </span>
                                    <span class="menu-arrow">
                                        <i class="ki-filled ki-right text-3xs rtl:transform rtl:rotate-180">
                                        </i>
                                    </span>
                                </div>
                                <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-sms">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Email
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-message-notify">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                SMS
                                            </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-notification-status">
                                                </i>
                                            </span>
                                            <span class="menu-title">
                                                Push
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-dislike">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Report
                                    </span>
                                </a>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-setting-3">
                                        </i>
                                    </span>
                                    <span class="menu-title">
                                        Settings
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4">
                <div class="flex flex-col gap-0.5">
                    <span class="text-sm font-normal text-gray-700">
                        All time sales
                    </span>
                    <div class="flex items-center gap-2.5">
                        <span class="text-3xl font-semibold text-gray-900">
                            $295.7k
                        </span>
                        <span class="badge badge-outline badge-success badge-sm">
                            +2.7%
                        </span>
                    </div>
                </div>
                <div class="flex items-center gap-1 mb-1.5">
                    <div class="bg-success h-2 w-full max-w-[60%] rounded-sm">
                    </div>
                    <div class="bg-brand h-2 w-full max-w-[25%] rounded-sm">
                    </div>
                    <div class="bg-info h-2 w-full max-w-[15%] rounded-sm">
                    </div>
                </div>
                <div class="flex items-center flex-wrap gap-4 mb-1">
                    <div class="flex items-center gap-1.5">
                        <span class="badge badge-dot size-2 badge-success">
                        </span>
                        <span class="text-sm font-normal text-gray-800">
                            Metronic
                        </span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="badge badge-dot size-2 badge-danger">
                        </span>
                        <span class="text-sm font-normal text-gray-800">
                            Bundle
                        </span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="badge badge-dot size-2 badge-info">
                        </span>
                        <span class="text-sm font-normal text-gray-800">
                            MetronicNest
                        </span>
                    </div>
                </div>
                <div class="border-b border-gray-300">
                </div>
                <div class="grid gap-3">
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <div class="flex items-center gap-1.5">
                            <i class="ki-filled ki-shop text-base text-gray-500">
                            </i>
                            <span class="text-sm font-normal text-gray-900">
                                Online Store
                            </span>
                        </div>
                        <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                            <span class="lg:text-right">
                                $172k
                            </span>
                            <span class="lg:text-right">
                                <i class="ki-filled ki-arrow-up text-success">
                                </i>
                                3.9%
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <div class="flex items-center gap-1.5">
                            <i class="ki-filled ki-facebook text-base text-gray-500">
                            </i>
                            <span class="text-sm font-normal text-gray-900">
                                Facebook
                            </span>
                        </div>
                        <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                            <span class="lg:text-right">
                                $85k
                            </span>
                            <span class="lg:text-right">
                                <i class="ki-filled ki-arrow-down text-danger">
                                </i>
                                0.7%
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <div class="flex items-center gap-1.5">
                            <i class="ki-filled ki-instagram text-base text-gray-500">
                            </i>
                            <span class="text-sm font-normal text-gray-900">
                                Instagram
                            </span>
                        </div>
                        <div class="flex items-center text-sm font-medium text-gray-800 gap-6">
                            <span class="lg:text-right">
                                $36k
                            </span>
                            <span class="lg:text-right">
                                <i class="ki-filled ki-arrow-up text-success">
                                </i>
                                8.2%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:col-span-2">
        <div class="card h-full">
            <div class="card-header">
                <h3 class="card-title">
                    Earnings
                </h3>
                <div class="flex gap-5">
                    <label class="switch switch-sm">
                        <input class="order-2" name="check" type="checkbox" value="1" />
                        <span class="switch-label order-1">
                            Referrals only
                        </span>
                    </label>
                    <select class="select select-sm w-28" name="select">
                        <option value="1">
                            1 month
                        </option>
                        <option value="2">
                            3 month
                        </option>
                        <option value="3">
                            6 month
                        </option>
                        <option selected="" value="4">
                            12 month
                        </option>
                    </select>
                </div>
            </div>
            <div class="card-body flex flex-col justify-end items-stretch grow px-3 py-1">
                <div id="earnings_chart">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection