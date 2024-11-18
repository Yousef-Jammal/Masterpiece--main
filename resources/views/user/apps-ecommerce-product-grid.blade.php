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
                                        {{-- <a href="#!" class="underline transition-all duration-200 ease-linear hover:text-custom-500">Clear All</a> --}}
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

                                            <input id="selectColor1" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#0EA5E9" name="selectColor1">

                                            <input id="selectColor2" class="inline-block align-middle bg-orange-500 border border-orange-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-orange-500 checked:border-orange-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#F97316" name="selectColor2">

                                            <input id="selectColor3" class="inline-block align-middle bg-green-500 border border-green-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#22C55E" name="selectColor3">

                                            <input id="selectColor4" class="inline-block align-middle bg-purple-500 border border-purple-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#A855F7" name="selectColor4">

                                            <input id="selectColor5" class="inline-block align-middle bg-yellow-500 border border-yellow-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-yellow-500 checked:border-yellow-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#EAB308" name="selectColor5">

                                            <input id="selectColor6" class="inline-block align-middle bg-red-500 border border-red-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-red-500 checked:border-red-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#EF4444" name="selectColor6">

                                            <input id="selectColor7" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-500 border-slate-500 checked:bg-slate-500 checked:border-slate-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#64748B" name="selectColor7">

                                            <input id="selectColor8" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-900 border-slate-900 checked:bg-slate-900 checked:border-slate-900 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#0F172A" name="selectColor8">

                                            <input id="selectColor9" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-200 border-slate-200 checked:bg-slate-200 checked:border-slate-200 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="#E2E8F0" name="selectColor9">

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
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="2xl:col-span-9">
                        <div class="flex flex-wrap items-center gap-2">
                            <div class="flex gap-2 shrink-0 items-cente">
                                <div class="relative dropdown">
                                </div>
                            </div>
                        </div>

                        <div id="search_ajax_result">
                            <div  class="grid grid-cols-1 mt-5 md:grid-cols-2 [&.gridView]:grid-cols-1 xl:grid-cols-4 group [&.gridView]:xl:grid-cols-1 gap-x-5" id="cardGridView">

                                @foreach ($products as $product)
                                <div class="card md:group-[.gridView]:flex relative">
                                    <div class="relative group-[.gridView]:static p-8 group-[.gridView]:p-5">
                                        @if(auth()->user())
                                        @php
                                            $isInWishlist = DB::table('wishlists')
                                            ->where('user_id', auth()->id())
                                            ->where('product_id', $product->id)
                                            ->exists();
                                        @endphp
                                        <a href="#!" data-product-id="{{ $product->id }}"  class="absolute group/item toggle-button-new top-6 ltr:right-6 rtl:left-6 {{ $isInWishlist ? 'active' : 'inactive' }}">
                                            {{-- inactive --}}
                                            {{-- active --}}

                                            <i data-lucide="heart" class="size-5 text-slate-400 fill-slate-200 transition-all duration-150 ease-linear dark:text-zink-200 dark:fill-zink-600 group-[.active]/item:text-red-500 dark:group-[.active]/item:text-red-500 group-[.active]/item:fill-red-200 dark:group-[.active]/item:fill-red-500/20 group-hover/item:text-red-500 dark:group-hover/item:text-red-500 group-hover/item:fill-red-200 dark:group-hover/item:fill-red-500/20">
                                            </i>

                                        </a>
                                        @endif

                                        <div class="group-[.gridView]:p-3 group-[.gridView]:bg-slate-100 dark:group-[.gridView]:bg-zink-600 group-[.gridView]:inline-block rounded-md">
                                            <img src="{{ asset('images/product/' . $product->images->first()->name . '') }}" alt="" class="group-[.gridView]:h-16">
                                        </div>
                                    </div>
                                    <div class="card-body !pt-0 md:group-[.gridView]:flex group-[.gridView]:!p-5 group-[.gridView]:gap-3 group-[.gridView]:grow">
                                        <div class="group-[.gridView]:grow">
                                            <h6 class="mb-1 truncate transition-all duration-200 ease-linear text-15 hover:text-custom-500">
                                                <a href="{{ route('product_show', $product->code) }}">{{ $product->title }}</a>
                                            </h6>
                                            @php
                                                $fullStars = floor(round($product->reviews->avg('rating')));
                                                $halfStar = (round($product->reviews->avg('rating')) - $fullStars) >= 0.5 ? true : false;
                                            @endphp
                                            <div class="flex items-center text-slate-500 dark:text-zink-200">
                                                <div class="mr-1 text-yellow-500 shrink-0 text-15">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        @if ($i < $fullStars)
                                                            <i class="ri-star-fill"></i>
                                                        @elseif ($i == $fullStars && $halfStar)
                                                            <i class="ri-star-half-line"></i>
                                                        @else
                                                            <i class="ri-star-line"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                ({{ $product->reviews->count() }})
                                            </div>
                                            <h5 class="mt-4 text-16">${{ $product->price}}JD
                                                @if (false)
                                                <small class="font-normal line-through text-slate-500 dark:text-zink-200">784.99</small>
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                </div><!--end col & card-->
                                @endforeach

                            </div><!--end grid-->
                        </div>


                        <div class="flex flex-col items-center mb-5 md:flex-row">
                            <div class="mb-4 grow md:mb-0">
                                {{-- <p class="text-slate-500 dark:text-zink-200"><b>{{ $number_of_products }}</b> Results</p> --}}
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
$(document).ready(function(){
    function fetchFilteredProducts() {
        var searchProducts = $('#searchProducts').val();
        var colorFilters = [];
        var priceFilters = [];
        var categoriesFilters = [];

        // جمع الفلاتر المحددة
        $("#colors_parent input[type=checkbox]:checked").each(function() {
            colorFilters.push($(this).val());
        });

        $("#price_parent input[type=checkbox]:checked").each(function() {
            priceFilters.push($(this).val());
        });

        $("#categories_search_parent input[type=checkbox]:checked").each(function() {
            categoriesFilters.push($(this).val());
        });

        // إرسال البيانات إلى السيرفر باستخدام AJAX
        jQuery.ajax({
            url: "{{ route('ajax_search_products') }}",
            type: 'post',
            datatype: 'html',
            cache: false,
            data: {
                searchProducts: searchProducts,
                colorFilters: colorFilters,
                priceFilters: priceFilters,
                categoriesFilters: categoriesFilters,
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
    }

    // الاستماع للأحداث على المدخلات المختلفة
    $(document).on('input', '#searchProducts', fetchFilteredProducts);
    $(document).on('change', '#colors_parent input[type=checkbox]', fetchFilteredProducts);
    $(document).on('change', '#price_parent input[type=checkbox]', fetchFilteredProducts);
    $(document).on('change', '#categories_search_parent input[type=checkbox]', fetchFilteredProducts);



    $(document).on('click', '.toggle-button-new', function(e) {
        e.preventDefault();

        var button = $(this);
        var productId = button.data('product-id');
        var isActive = button.hasClass('active');

        // Toggle the active class
        button.toggleClass('active');

        // Determine the action: add to favorites or remove
        var action = isActive ? 'remove' : 'add';

        alert(action);

        // AJAX request to update the database
        $.ajax({
            url: "{{ route('toggle_favorite') }}", // Adjust the route name
            type: 'POST',
            data: {
                product_id: productId,
                action: action,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    // Optionally show a success message or update UI
                    console.log(`Product ${action === 'add' ? 'added to' : 'removed from'} favorites.`);
                } else {
                    console.error('Failed to update favorite status.');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', error);
            }
        });
    });

});



</script>

<!--product Grid init js-->
<script src="{{ asset('js/pages/apps-ecommerce-product-grid.init.js') }}"></script>
@endsection
