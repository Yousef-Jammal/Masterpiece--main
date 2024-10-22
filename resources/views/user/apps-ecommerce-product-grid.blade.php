@extends('user.master')

@section('content')

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        {{-- <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]"> --}}
        <div style="margin: 0" class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">

            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Grid View</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="#!" class="text-slate-400 dark:text-zink-200">Products</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Grid View
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1 2xl:grid-cols-12 gap-x-5 ">
                    <div class="hidden 2xl:col-span-3 2xl:block">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-3">
                                    <h6 class="text-15 grow">Filter</h6>
                                    <div class="shrink-0">
                                        <a href="#!" class="underline transition-all duration-200 ease-linear hover:text-custom-500">Clear All</a>
                                    </div>
                                </div>

                                <div class="relative mt-4">
                                    <input id="searchProducts" type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                    <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                </div>

                                <div class="mt-4 collapsible">
                                    <button class="flex items-center w-full text-left collapsible-header group">
                                        <h6 class="underline grow">Color</h6>
                                        <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                            <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                            <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                                        </div>
                                    </button>
                                    <div class="mt-4 collapsible-content">
                                        <div id="colors_parent" class="flex flex-wrap items-center gap-2">
                                            {{-- <input id="color1" class="border rounded-sm appearance-none cursor-pointer size-5 border-custom-500 bg-custom-500 checked:bg-custom-500 checked:border-custom-500" type="checkbox" value="">
                                            <input id="color2" class="bg-red-300 border border-red-300 rounded-sm appearance-none cursor-pointer size-5 checked:bg-red-300 checked:border-red-300" type="checkbox" value="">
                                            <input id="color3" class="bg-green-300 border border-green-300 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-300 checked:border-green-300" type="checkbox" value="">
                                            <input id="color4" class="border rounded-sm appearance-none cursor-pointer size-5 border-slate-500 bg-slate-500 checked:bg-slate-500 checked:border-slate-500" type="checkbox" value="">
                                            <input id="color5" class="bg-purple-500 border border-purple-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500" type="checkbox" value="">
                                            <input id="color6" class="border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500" type="checkbox" value="">
                                            <input id="color7" class="bg-yellow-500 border border-yellow-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-yellow-500 checked:border-yellow-500" type="checkbox" value="">
                                            <input id="color7" class="bg-green-500 border border-green-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500" type="checkbox" value="">
                                            <input id="color8" class="border rounded-sm appearance-none cursor-pointer size-5 bg-slate-800 border-slate-800 checked:bg-slate-800 checked:border-slate-800" type="checkbox" value="">
                                            <input id="color9" class="border rounded-sm appearance-none cursor-pointer size-5 bg-slate-200 border-slate-200 checked:bg-slate-200 checked:border-slate-200" type="checkbox" value="">
                                            <input id="color10" class="border rounded-sm appearance-none cursor-pointer size-5 bg-emerald-300 border-embg-emerald-300 checked:bg-emerald-300 checked:border-embg-emerald-300" type="checkbox" value=""> --}}

                                            <input id="selectColor1" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color1" name="selectColor1">

                                            <input id="selectColor2" class="inline-block align-middle bg-orange-500 border border-orange-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-orange-500 checked:border-orange-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color2" name="selectColor2">

                                            <input id="selectColor3" class="inline-block align-middle bg-green-500 border border-green-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color3" name="selectColor3">

                                            <input id="selectColor4" class="inline-block align-middle bg-purple-500 border border-purple-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color4" name="selectColor4">

                                            <input id="selectColor5" class="inline-block align-middle bg-yellow-500 border border-yellow-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-yellow-500 checked:border-yellow-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color5" name="selectColor5">

                                            <input id="selectColor6" class="inline-block align-middle bg-red-500 border border-red-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-red-500 checked:border-red-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color6" name="selectColor6">

                                            <input id="selectColor7" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-500 border-slate-500 checked:bg-slate-500 checked:border-slate-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color7" name="selectColor7">

                                            <input id="selectColor8" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-900 border-slate-900 checked:bg-slate-900 checked:border-slate-900 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color8" name="selectColor8">

                                            <input id="selectColor9" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-200 border-slate-200 checked:bg-slate-200 checked:border-slate-200 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color9" name="selectColor9">

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 collapsible">
                                    <button class="flex items-center w-full text-left collapsible-header group">
                                        <h6 class="underline grow">Price</h6>
                                        <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                            <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                            <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                                        </div>
                                    </button>
                                    <div class="mt-4 collapsible-content">
                                        <div id="price_parent" class="flex flex-col gap-2">
                                            {{-- <div class="flex items-center gap-2">
                                                <input name="priceA"  type="checkbox" value="All" id="priceAll" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="priceAll" class="align-middle cursor-pointer">
                                                    All
                                                </label>
                                            </div> --}}
                                            <div class="flex items-center gap-2">
                                                <input name="price1"  type="checkbox" value="0-10" id="price1" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price1" class="align-middle cursor-pointer">
                                                    $0.00 – $10.00
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input name="price2"  type="checkbox" value="10-20" id="price2" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price2" class="align-middle cursor-pointer">
                                                    $10.00 – $20.00
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input name="price3"  type="checkbox" value="20-50" id="price3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price3" class="align-middle cursor-pointer">
                                                    $20 - $50
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input name="price4"  type="checkbox" value="50-100" id="price4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price4" class="align-middle cursor-pointer">
                                                    $50 - $100
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input name="price5"  type="checkbox" value="50-100" id="price5" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price5" class="align-middle cursor-pointer">
                                                    $100 - $200
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input name="price6"  type="checkbox" value="200+" id="price6" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price6" class="align-middle cursor-pointer">
                                                    $200+
                                                </label>
                                            </div>
                                            {{-- <div class="flex items-center gap-2">
                                                <input name="price6"  type="checkbox" value="low-high" id="price6" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price6" class="align-middle cursor-pointer">
                                                    Low to High
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input name="price6"  type="checkbox" value="high-low" id="price6" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="price6" class="align-middle cursor-pointer">
                                                    High to Low
                                                </label>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 collapsible">
                                    <button class="flex items-center w-full text-left collapsible-header group">
                                        <h6 class="underline grow">Product Category</h6>
                                        <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                            <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                            <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                                        </div>
                                    </button>
                                    <div class="mt-4 collapsible-content">
                                        <div id="categories_search_parent" class="flex flex-col gap-2">
                                            @foreach ($categories as $category)
                                            <div class="flex items-center gap-2">
                                                <input name="{{ $category->id }}"  type="checkbox" value="{{ $category->id }}" id="category{{ $category->id }}" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800">
                                                <label for="category{{ $category->id }}" class="align-middle cursor-pointer">
                                                    {{ $category->name }}
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 collapsible">
                                    <button class="flex items-center w-full text-left collapsible-header group">
                                        <h6 class="underline grow">Rating</h6>
                                        <div class="shrink-0 text-slate-500 dark:text-zink-200">
                                            <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                            <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                                        </div>
                                    </button>
                                    <div class="mt-4 collapsible-content">
                                        <div class="flex flex-col gap-2">
                                            <div class="flex items-center gap-2">
                                                <input id="ratingAll" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="ratingAll" class="align-middle cursor-pointer">
                                                    All
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="rating5" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="rating5" class="align-middle cursor-pointer">
                                                    <i data-lucide="star" class="inline-block ml-1 text-yellow-500 align-middle size-4"></i> <span class="align-middle">5 Rating</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="rating4" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="rating4" class="align-middle cursor-pointer">
                                                    <i data-lucide="star" class="inline-block ml-1 text-yellow-500 align-middle size-4"></i> <span class="align-middle">4 Rating and Up</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="rating3" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="rating3" class="align-middle cursor-pointer">
                                                    <i data-lucide="star" class="inline-block ml-1 text-yellow-500 align-middle size-4"></i> <span class="align-middle">3 Rating and Up</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="rating2" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="rating2" class="align-middle cursor-pointer">
                                                    <i data-lucide="star" class="inline-block ml-1 text-yellow-500 align-middle size-4"></i> <span class="align-middle">2 Rating and Up</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="rating1" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="rating1" class="align-middle cursor-pointer">
                                                    <i data-lucide="star" class="inline-block ml-1 text-yellow-500 align-middle size-4"></i> <span class="align-middle">1 Rating and Up</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="rating0" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="rating0" class="align-middle cursor-pointer">
                                                    <i data-lucide="star" class="inline-block ml-1 text-yellow-500 align-middle size-4"></i> <span class="align-middle">0 Rating</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 collapsible">
                                    <button class="flex items-center w-full text-left collapsible-header group show">
                                        <h6 class="underline grow">Gender</h6>
                                        <div class="ml-2 shrink-0">
                                            <i data-lucide="chevron-down" class="hidden size-4 group-[.show]:inline-block"></i>
                                            <i data-lucide="chevron-up" class="inline-block size-4 group-[.show]:hidden"></i>
                                        </div>
                                    </button>
                                    <div class="hidden mt-4 collapsible-content">
                                        <div class="flex flex-col gap-2">
                                            <div class="flex items-center gap-2">
                                                <input id="genderAll" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="genderAll" class="align-middle cursor-pointer">
                                                    All
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="gendermal" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="gendermal" class="align-middle cursor-pointer">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="genderFemal" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="genderFemal" class="align-middle cursor-pointer">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <input id="genderOthers" class="size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                                <label for="genderOthers" class="align-middle cursor-pointer">
                                                    Others
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="2xl:col-span-9">
                        <div class="flex flex-wrap items-center gap-2">
                            <p class="grow">Showing all <b>7,410</b> items results</p>
                            <div class="flex gap-2 shrink-0 items-cente">
                                <div class="relative dropdown">
                                    <a href="#!" class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown">Sort by: <b class="font-medium">Highest Price</b> <i data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></a>

                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Lowest Price</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Highest Price</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Hight to Low</a>
                                        </li>
                                        <li class="pt-2 mt-2 border-t dark:border-zink-300/50">
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Low to High</a>
                                        </li>
                                    </ul>
                                </div>
                                <button type="button" id="listView" class="flex items-center justify-center w-[37.5px] h-[37.5px] p-0 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 [&.active]:text-white [&.active]:bg-sky-600 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:[&.active]:bg-sky-500 dark:[&.active]:text-white dark:ring-sky-400/20"><i data-lucide="list" class="size-4"></i></button>
                                <button type="button" id="gridView" class="flex items-center justify-center w-[37.5px] h-[37.5px] p-0 text-sky-500 btn bg-sky-100 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 [&.active]:text-white [&.active]:bg-sky-600 dark:bg-sky-500/20 dark:text-sky-400 dark:hover:bg-sky-500 dark:hover:text-white dark:focus:bg-sky-500 dark:focus:text-white dark:[&.active]:bg-sky-500 dark:[&.active]:text-white dark:ring-sky-400/20 active"><i data-lucide="layout-grid" class="size-4"></i></button>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 mt-3">
                            <span class="px-2.5 py-0.5 text-sm font-medium rounded-full border bg-slate-100 border-slate-300 text-slate-500 inline-flex items-center dark:bg-zink-800 dark:border-zink-500 dark:text-zink-200">High to Low <a href="#!" class="transition text-slate-500 dark:text-zink-200 hover:text-slate-600 dark:hover:text-zink-100"><i data-lucide="x" class="w-3 h-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                            <span class="px-2.5 py-0.5 text-sm font-medium rounded-full border bg-slate-100 border-slate-300 text-slate-500 inline-flex items-center dark:bg-zink-800 dark:border-zink-500 dark:text-zink-200">New <a href="#!" class="transition text-slate-500 dark:text-zink-200 hover:text-slate-600 dark:hover:text-zink-100"><i data-lucide="x" class="w-3 h-3 ltr:ml-1 rtl:mr-1"></i></a></span>
                            <a href="#!" class="px-2.5 py-0.5 text-sm font-medium rounded border bg-transparent border-transparent text-slate-500 transition hover:bg-slate-200 dark:bg-zink-800 dark:hover:bg-zink-600 dark:text-zink-200">All Clear</a>
                        </div>

                        <div id="search_ajax_result">
                            <div  class="grid grid-cols-1 mt-5 md:grid-cols-2 [&.gridView]:grid-cols-1 xl:grid-cols-4 group [&.gridView]:xl:grid-cols-1 gap-x-5" id="cardGridView">

                                @foreach ($products as $product)
                                <div class="card md:group-[.gridView]:flex relative">
                                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                                        <a href="#!" class="absolute group/item toggle-button top-6 ltr:right-6 rtl:left-6 active">
                                            <i data-lucide="heart" class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20">
                                            </i>

                                        </a>
                                        <div class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                                            <img src="{{ asset('images/img-02.png') }}" alt="" class="group-[.gridView]:h-16">
                                        </div>
                                    </div>
                                    <div class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                                        <div class="group-[.gridView]:grow">
                                            <h6 class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500"><a href="apps-ecommerce-product-overview.html">{{ $product->title }}</a></h6>

                                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-line"></i>
                                                </div>
                                                (198)
                                            </div>
                                            <h5 class="mt-4 text-16">${{ $product->price}}JD
                                                @if (false)
                                                <small class="font-normal line-through text-slate-500 dark:text-zink-200">784.99</small>
                                                @endif
                                            </h5>
                                        </div>

                                        <div class="flex items-center gap-2 mt-4 group-[.gridView]:mt-0 group-[.gridView]:self-end">
                                            <button type="button" class="w-full bg-white border-dashed text-slate-500 btn border-slate-500 hover:text-slate-500 hover:bg-slate-50 hover:border-slate-600 focus:text-slate-600 focus:bg-slate-50 focus:border-slate-600 active:text-slate-600 active:bg-slate-50 active:border-slate-600 dark:bg-zink-700 dark:text-zink-200 dark:border-zink-400 dark:ring-zink-400/20 dark:hover:bg-zink-600 dark:hover:text-zink-100 dark:focus:bg-zink-600 dark:focus:text-zink-100 dark:active:bg-zink-600 dark:active:text-zink-100"><i data-lucide="shopping-cart" class="inline-block w-3 h-3 leading-none"></i> <span class="align-middle">Add to Cart</span></button>
                                            <div class="relative float-right dropdown">
                                                <button class="hidden flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="productList1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="w-3 h-3"></i></button>
                                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="productList1">
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-overview.html"><i data-lucide="eye" class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Overview</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-create.html"><i data-lucide="file-edit" class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                    </li>
                                                    <li>
                                                        <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block w-3 h-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col & card-->
                                @endforeach

                            </div><!--end grid-->
                        </div>


                        <div class="flex flex-col items-center mb-5 md:flex-row">
                            <div class="mb-4 grow md:mb-0">
                                <p class="text-slate-500 dark:text-zink-200"><b>{{ $number_of_products }}</b> Results</p>
                            </div>
                            {{ $products->links('vendor.pagination.custom-pagination') }}
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection
@section('script')
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script>

    // ajax_search_products_by_title
    $(document).ready(function(){
        $(document).on('input', '#searchProducts', function(){
            var searchProducts = $(this).val();
            jQuery.ajax({
                url: "{{ route('ajax_search_products_by_title') }}",
                type:'post',
                datatype:'html',
                cache:false,
                data:{searchProducts:searchProducts,'_token':"{{csrf_token()}}"},
                success:function(data){
                    $("#search_ajax_result").html(data);
                    lucide.createIcons({
                        iconsSelector: '#search_ajax_result [data-lucide]'
                    });
                },
                error:function(){

                }
            });
        })
    })

    // colors_parent
        // ajax_search_products_by_colors
        $(document).ready(function() {
        $(document).on('change', '#colors_parent  input[type=checkbox]', function() {
            var colorFilters = [];
            $("#colors_parent  input[type=checkbox]:checked").each(function() {
                colorFilters.push($(this).val());
            });

            jQuery.ajax({
                url: "{{ route('ajax_search_products_by_colors') }}",
                type: 'post',
                datatype: 'html',
                cache: false,
                data: {
                    colorFilters: colorFilters, // Sending the array of selected prices
                    '_token': "{{ csrf_token() }}"
                },
                success: function(data) {
                    $("#search_ajax_result").html(data);
                    lucide.createIcons({
                        iconsSelector: '#search_ajax_result [data-lucide]'
                    });
                },
                error: function() {
                    // Handle error
                }
            });
        });
    });



    // ajax_search_products_by_price
    $(document).ready(function() {
        $(document).on('change', '#price_parent  input[type=checkbox]', function() {
            var priceFilters = [];
            $("#price_parent  input[type=checkbox]:checked").each(function() {
                priceFilters.push($(this).val());
            });

            jQuery.ajax({
                url: "{{ route('ajax_search_products_by_price') }}",
                type: 'post',
                datatype: 'html',
                cache: false,
                data: {
                    priceFilters: priceFilters, // Sending the array of selected prices
                    '_token': "{{ csrf_token() }}"
                },
                success: function(data) {
                    $("#search_ajax_result").html(data);
                    lucide.createIcons({
                        iconsSelector: '#search_ajax_result [data-lucide]'
                    });
                },
                error: function() {
                    // Handle error
                }
            });
        });
    });


    // ajax_search_products_by_categories
    $(document).ready(function() {
        $(document).on('change', '#categories_search_parent  input[type=checkbox]', function() {
            var categoriesFilters = [];
            $("#categories_search_parent  input[type=checkbox]:checked").each(function() {
                categoriesFilters.push($(this).val());
            });

            jQuery.ajax({
                url: "{{ route('ajax_search_products_by_categories') }}",
                type: 'post',
                datatype: 'html',
                cache: false,
                data: {
                    categoriesFilters: categoriesFilters, // Sending the array of selected prices
                    '_token': "{{ csrf_token() }}"
                },
                success: function(data) {
                    $("#search_ajax_result").html(data);
                    lucide.createIcons({
                        iconsSelector: '#search_ajax_result [data-lucide]'
                    });
                },
                error: function() {
                    // Handle error
                }
            });
        });
    });









</script>

<!--product Grid init js-->
<script src="{{ asset('js/pages/apps-ecommerce-product-grid.init.js') }}"></script>
@endsection
