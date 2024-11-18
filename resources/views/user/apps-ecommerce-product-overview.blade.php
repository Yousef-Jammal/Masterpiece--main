@extends('user.master')

@php
    $hideFooter = true;

    $fullStars = floor($averageRating);
    $halfStar = ($averageRating - $fullStars) >= 0.5 ? true : false;
@endphp

@section('content')


    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <div style="margin: 0" class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Overview</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="{{ route('show_products') }}" class="text-slate-400 dark:text-zink-200">Products</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Overview
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                    <div class="xl:col-span-4">
                        <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="grid grid-cols-1 gap-5 md:grid-cols-12">

                                    @if($images->count() > 0)
                                        @foreach($images as $index => $image)
                                            <div class="{{ $index === 0 ? 'rounded-md md:col-span-8 md:row-span-2 bg-slate-100 dark:bg-zink-600' : 'p-4 rounded-md md:col-span-4 bg-slate-100 dark:bg-zink-600' }}">
                                                <img src="{{ asset('images/product/' . $image->name) }}" alt="Product Image {{ $index + 1 }}">
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="rounded-md md:col-span-12 md:row-span-2 bg-slate-100 dark:bg-zink-600">
                                        </div>
                                    @endif
                                    </div>

                                    @if (auth()->user())
                                    <div class="flex gap-2 mt-4 shrink-0">
                                        <button
                                        id="add_to_cart"
                                        data-user-id="{{ auth()->user()->id }}"
                                        data-product-ids="{{ $productIds }}"
                                        data-product-code="{{ $product->code }}"
                                        {{-- data-product-color="#F97316"
                                        data-product-size="M" --}}
                                        type="button"

                                        {{-- href="{{ route('cart_add', ['user_id'=> auth()->user()->id, 'product_id' => $product->code ]) }}" --}}
                                        class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"
                                        >

                                            <i data-lucide="shopping-cart" class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i>
                                            <span class="align-middle">Add to Cart</span>
                                        </button>
                                        {{-- <button type="button" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20">Buy Now</button> --}}
                                    </div>
                                    @endif
                                    {{-- <div class="flex items-center gap-3 mt-3 justify-evenly">
                                        <a href="#!" class="transition-all duration-300 ease-linear hover:text-custom-500"><i data-lucide="repeat" class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Compare</span></a>
                                        <a href="#!" data-modal-target="askQuestionModal" class="transition-all duration-300 ease-linear hover:text-custom-500"><i data-lucide="help-circle" class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Ask a Question</span></a>
                                        <a href="#!" data-modal-target="shareModal" class="transition-all duration-300 ease-linear hover:text-custom-500"><i data-lucide="share-2" class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Share</span></a>
                                    </div> --}}
                                </div>
                            </div><!--end card-->
                            <div class="card">
                                <div class="border-b card-body border-slate-200 dark:border-zink-500">
                                    <div class="flex">
                                        <h6 class="grow text-15"><i data-lucide="store" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{ $product->store->name }}</span></h6>
                                        {{-- <div class="shrink-0">
                                            <i data-lucide="star" class="inline-block text-yellow-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">(4.8)</span>
                                        </div> --}}
                                        <div class="shrink-0 hidden">
                                            <button type="button" class="px-2.5 py-2 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">View Store</button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card-body">
                                    <div class="flex">
                                        <h6 class="grow text-15"><i data-lucide="map-pin" class="inline-block text-orange-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">California, USA</span></h6>
                                        <div class="shrink-0">
                                            <button type="button" class="px-2.5 py-2 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">View Store</button>
                                        </div>
                                    </div>
                                </div> --}}
                            </div><!--end card-->
                        </div>
                    </div><!--end col-->
                    <div class="xl:col-span-8">
                        <div class="card">
                            <div class="card-body">
                                @if ( auth()->user() && auth()->user()->role->name == 'admin')
                                <div class="relative ltr:float-right rtl:float-left dropdown">
                                    <button class="hidden flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="categoryNotes1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="categoryNotes1">
                                        <li>
                                            <a href="#!" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" ><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a href="#!" data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" ><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                {{-- {{ $product->first() }} --}}
                                {{-- <span class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-100 text-sky-500 dark:bg-sky-400/20 dark:border-transparent"> New Arrivals</span> --}}
                                <h5 class="mt-3 mb-1">{{ $product->title }}</h5>
                                <ul class="flex flex-wrap items-center gap-4 mb-5 text-slate-500 dark:text-zink-200">
                                    {{-- <li><a href="#!" class="font-medium underline text-custom-500">Rossie Fadel</a></li> --}}
                                    <li>Seller: <a href="#!" class="font-medium">{{ $product->store->user->name }}</a></li>
                                    {{-- <li>Published: <span class="font-medium">20 Oct, 2023</span></li> --}}
                                </ul>

                                <div class="flex flex-wrap items-center gap-3 mb-4">
                                    <div class="flex items-center gap-2 text-yellow-500">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $fullStars)
                                                <i class="ri-star-fill"></i> <!-- Full star -->
                                            @elseif ($i == $fullStars && $halfStar)
                                                <i class="ri-star-half-line"></i> <!-- Half star -->
                                            @else
                                                <i class="ri-star-line"></i> <!-- Empty star -->
                                            @endif
                                        @endfor

                                        <div class="text-slate-800 dark:text-zink-50 shrink-0">
                                            <h6>({{ $averageRating }})</h6>
                                        </div>
                                    </div>
                                    <div class="shrink-0">
                                        <h6>{{ $ratingCount }} Reviews</h6>
                                    </div>
                                    {{-- <div class="shrink-0">
                                        <h6>1,231 Sold</h6>
                                    </div> --}}
                                </div>

                                <div class="mb-4">
                                    {{-- <p class="mb-1 text-green-500">Special Price</p> --}}
                                    <h4>${{ $product->price }}
                                        {{-- <small class="font-normal line-through align-middle text-slate-500 dark:text-zink-200">$599.99</small>
                                        <small class="text-green-500 align-middle">20% Off</small> --}}
                                    </h4>
                                </div>

                                {{-- <h6 class="mb-3 text-15">Select Color</h6>
                                <div class="flex flex-wrap items-center gap-2">
                                    @foreach ($product->colors as $color)
                                        <input style="background-color: {{ $color }} ; border-color:{{ $color }}" type="radio" value="{{ $color }}" name="selectColor" id="{{ $color }}" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" >
                                    @endforeach
                                </div>

                                <h6 class="mt-5 mb-3 text-15">Select Size</h6>
                                <div class="flex flex-wrap items-center gap-2">
                                    @foreach ($product->sizes as $size)
                                    <div>
                                        <input id="selectSize{{ $size }}" class="hidden peer" type="radio" value="{{ $size }}" name="selectSize">
                                        <label for="selectSize{{ $size }}" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">
                                            {{ $size }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div> --}}
                                <h6 class="mb-3 text-15">Select Color</h6>
                                <div class="flex flex-wrap items-center gap-2">
                                    @foreach ($product->colors as $color)
                                        <input style="background-color: {{ $color }} ; border-color:{{ $color }}"
                                            type="radio" value="{{ $color }}" name="selectColor" id="{{ $color }}"
                                            class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default">
                                    @endforeach
                                </div>

                                <h6 class="mt-5 mb-3 text-15">Select Size</h6>
                                <div class="flex flex-wrap items-center gap-2">
                                    @foreach ($product->sizes as $size)
                                        <div>
                                            <input id="selectSize{{ $size }}" class="hidden peer" type="radio" value="{{ $size }}" name="selectSize">
                                            <label for="selectSize{{ $size }}" class="flex items-center justify-center w-8 h-8 text-xs border rounded-md cursor-pointer border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/20 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">
                                                {{ $size }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-5">
                                    <h6 class="mb-3 text-15">Product Description:</h6>
                                    <p class="text-slate-500 dark:text-zink-200">{{ $product->description }}</p>
                                </div>

                                <h6 class="mt-5 mb-3 text-15">Ratings & Reviews</h6>
                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                    <div class="xl:col-span-4">
                                        <div class="border border-dashed rounded-md border-slate-200 dark:border-zink-500">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h5 class="mb-2 text-16">Customer Ratings</h5>
                                                    <span class="px-3.5 py-1.5 inline-flex gap-3 text-xs font-medium rounded-full border bg-slate-100 border-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:border-zink-600">
                                                        <span class="flex items-center gap-2 text-yellow-500">


                                                            @for ($i = 0; $i < 5; $i++)
                                                                @if ($i < $fullStars)
                                                                    <i class="ri-star-fill"></i> <!-- Full star -->
                                                                @elseif ($i == $fullStars && $halfStar)
                                                                    <i class="ri-star-half-line"></i> <!-- Half star -->
                                                                @else
                                                                    <i class="ri-star-line"></i> <!-- Empty star -->
                                                                @endif
                                                            @endfor
                                                        </span>
                                                        ({{ $averageRating }} out of 5)
                                                    </span>

                                                    <p class="mt-2 text-sm text-slate-500 dark:text-zink-200">{{ $ratingCount }} total ratings</p>
                                                </div>
                                                <div class="flex flex-col gap-3 mt-4">
                                                    @foreach ($ratings as $rating)
                                                        <div class="flex items-center gap-3">
                                                            <div class="text-sm shrink-0">
                                                                {{ $rating['stars'] }} <i class="ml-1 text-yellow-500 align-middle ri-star-fill"></i>
                                                            </div>
                                                            <div class="w-full h-1.5 rounded-full bg-slate-200 dark:bg-zink-600">
                                                                <div class="h-1.5 rounded-full bg-green-500" style="width: {{ $rating['percentage'] }}%"></div>
                                                            </div>
                                                            <div class="text-sm text-right w-9 shrink-0">
                                                                {{ number_format($rating['count']) }} <!-- Format number with commas -->
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->


                                    <div class="xl:col-span-8">
                                        <div class="flex items-center gap-3 mb-4">
                                            <h5 class="text-16 grow">Reviews</h5>
                                            @if (auth()->user())
                                                <button type="button" data-modal-target="addReviewsModal" class="px-2 shrink-0 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Review</button>
                                            @endif
                                        </div>

                                        <div id="reviewResult">
                                            @foreach ($reviews as $review)
                                            <div class="mt-3">
                                                <div class="relative ltr:float-right rtl:float-left dropdown">
                                                    @if (auth()->user() && ( auth()->user()->id == $review->user->id  || auth()->user()->role->name == 'admin' )   )
                                                    <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="reviews1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                                    @endif
                                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="reviews1">
                                                        <li>
                                                            {{-- <a data-modal-target="addReviewsModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a> --}}
                                                            <a data-modal-target="editReviewsModal" data-review-id="{{ $review->id }}" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-full shrink-0 bg-sky-100 dark:bg-sky-500/20">
                                                        <img src="{{ asset('images/avatar-2.png') }}" alt="" class="h-10 rounded-full">
                                                    </div>
                                                    <div class="grow">
                                                        <h6 class="text-15"><a href="#!">{{ $review->user->name }}</a></h6>
                                                        <p class="text-sm text-slate-500 dark:text-zink-200">on {{ $review->created_at->format('d M, Y') }}</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-2 mt-4 mb-2 text-yellow-500">
                                                    @for ($i = 0; $i < $review->rating; $i++)
                                                    <i class="ri-star-fill"></i>
                                                    @endfor
                                                </div>
                                                <p class="text-slate-500 dark:text-zink-200">"{{ $review->review }}"</p>
                                                {{-- <div class="flex items-center gap-3 mt-3">
                                                    <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-green-500 active"><i data-lucide="thumbs-up" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">15</span></a>
                                                    <a href="#!" class="text-slate-500 shrink-0 count-button [&.active]:text-red-500 active"><i data-lucide="thumbs-down" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle count-number">3</span></a>
                                                </div> --}}
                                            </div>

                                            @endforeach
                                        </div>

                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer style="left: 0" class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm absolute right-0 bottom-0 px-4 h-14 group-data-[layout=horizontal]:ltr:left-0  group-data-[layout=horizontal]:rtl:right-0 left-0 border-t py-3 flex items-center dark:border-zink-600">
            <div class="group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl w-full">
                <div class="grid items-center grid-cols-1 text-center lg:grid-cols-2 text-slate-400 dark:text-zink-200 ltr:lg:text-left rtl:lg:text-right">
                    <div>
                        <script>document.write(new Date().getFullYear())</script> © Tailwick.
                    </div>
                    <div class="hidden lg:block">
                        <div class="ltr:text-right rtl:text-left">
                            Design & Develop by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>
<!-- end main content -->

@endsection



@section('modals')

<div id="editReviewsModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
    <div class="w-screen lg:xl:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-5 border-b dark:border-zink-500">
            <h5 class="text-16">Edit Review</h5>
            <button data-modal-close="editReviewsModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <form action="#!" id="editReviewsModal" >
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">

                    @if (auth()->user())
                        <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                    @endif

                    <input type="hidden" name="productIDs" value="{{ $productIds }}">

                    <div class="xl:col-span-4">
                        <div>
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">Rating</label>
                            <select name="rate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="statusSelect">
                                <option value="">Select Rating</option>
                                <option value="5">5 Star</option>
                                <option value="4">4 Star</option>
                                <option value="3">3 Star</option>
                                <option value="2">2 Star</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                    </div>
                    <div class="xl:col-span-12">
                        <div>
                            <label for="textArea" class="inline-block mb-2 text-base font-medium">Your review</label>
                            <textarea name="comment" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" placeholder="Enter Description" rows="6"></textarea>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" data-modal-close="addReviewsModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                    <button data-modal-close="addReviewsModal" type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Review</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end modal-->





<div id="addReviewsModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
    <div class="w-screen lg:xl:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-5 border-b dark:border-zink-500">
            <h5 class="text-16">Add Review</h5>
            <button data-modal-close="addReviewsModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <form action="#!" id="AddReviewForm">
                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">

                    @if (auth()->user())
                        <input type="hidden" name="userID" value="{{ auth()->user()->id }}">
                    @endif

                    <input type="hidden" name="productIDs" value="{{ $productIds }}">

                    <div class="xl:col-span-4">
                        <div>
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">Rating</label>
                            <select name="rate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="statusSelect">
                                <option value="">Select Rating</option>
                                <option value="5">5 Star</option>
                                <option value="4">4 Star</option>
                                <option value="3">3 Star</option>
                                <option value="2">2 Star</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                    </div>
                    <div class="xl:col-span-12">
                        <div>
                            <label for="textArea" class="inline-block mb-2 text-base font-medium">Your review</label>
                            <textarea name="comment" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" placeholder="Enter Description" rows="6"></textarea>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" data-modal-close="addReviewsModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                    <button data-modal-close="addReviewsModal" type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Review</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end modal-->

<div id="deleteModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
            <div class="float-right">
                <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <img src="data:image/png;base64,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" alt="" class="block h-12 mx-auto">
            <div class="mt-5 text-center">
                <h5 class="mb-1">Are you sure?</h5>
                <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                <div class="flex justify-center gap-2 mt-6">
                    <button type="reset" data-modal-close="deleteModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                    <button type="submit" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes, Delete It!</button>
                </div>
            </div>
        </div>
    </div>
</div><!--end delete modal-->

<div id="shareModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-5 border-b dark:border-zink-500">
            <h5 class="text-16">Share</h5>
            <button data-modal-close="shareModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <div class="mb-4">
                <label for="shareUrlInput" class="inline-block mb-2 text-base font-medium">Copy link</label>
                <input type="url" id="shareUrlInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="https://themesdesign.in/tailwick" readonly>
            </div>
            <h6 class="mb-3 text-15">Share More</h6>
            <ul class="flex gap-2 item-center">
                <li><a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md w-9 h-9 text-slate-500 bg-slate-100 hover:bg-custom-100 hover:text-custom-500 dark:text-zink-200 dark:bg-zink-500 dark:hover:bg-zink-500 dark:hover:text-custom-500"><i data-lucide="facebook" class="size-4"></i></a></li>
                <li><a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md w-9 h-9 text-slate-500 bg-slate-100 hover:bg-custom-100 hover:text-custom-500 dark:text-zink-200 dark:bg-zink-500 dark:hover:bg-zink-500 dark:hover:text-custom-500"><i data-lucide="instagram" class="size-4"></i></a></li>
                <li><a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md w-9 h-9 text-slate-500 bg-slate-100 hover:bg-custom-100 hover:text-custom-500 dark:text-zink-200 dark:bg-zink-500 dark:hover:bg-zink-500 dark:hover:text-custom-500"><i data-lucide="mail" class="size-4"></i></a></li>
                <li><a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md w-9 h-9 text-slate-500 bg-slate-100 hover:bg-custom-100 hover:text-custom-500 dark:text-zink-200 dark:bg-zink-500 dark:hover:bg-zink-500 dark:hover:text-custom-500"><i data-lucide="dribbble" class="size-4"></i></a></li>
            </ul>
        </div>
    </div>
</div><!--end share modal-->

<div id="askQuestionModal" modal-center class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[32rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-5 border-b dark:border-zink-500">
            <h5 class="text-16">Ask a Question</h5>
            <button data-modal-close="askQuestionModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
            <form action="#!">
                <div class="mb-3">
                    <label for="nameInput" class="inline-block mb-2 text-base font-medium">Name</label>
                    <input type="url" id="nameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Your name" required>
                </div>
                <div class="mb-3">
                    <label for="emailInput" class="inline-block mb-2 text-base font-medium">Email</label>
                    <input type="email" id="emailInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Your email" required>
                </div>
                <div class="mb-3">
                    <label for="messageInput" class="inline-block mb-2 text-base font-medium">Message</label>
                    <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="messageInput" placeholder="Enter Description" rows="3" required></textarea>
                </div>
                <div class="flex justify-end gap-2 mt-4">
                    <button data-modal-close="askQuestionModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send Question</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end ask modal-->

<div class="fixed items-center hidden bottom-6 right-12 h-header group-data-[navbar=hidden]:flex">
    <button data-drawer-target="customizerButton" type="button" class="inline-flex items-center justify-center w-12 h-12 p-0 transition-all duration-200 ease-linear rounded-md shadow-lg text-sky-50 bg-sky-500">
        <i data-lucide="settings" class="inline-block w-5 h-5"></i>
    </button>
</div>

</div>

</div>
<!-- end main content -->

@endsection


@section('script')


<script src="{{ asset('js/pages/apps-ecommerce-product-overview.init.js') }}"></script>


<script>
    const colorSizeMap = @json($colorSizeMap);
    const sizeColorMap = @json($sizeColorMap);

    var currentSize = 0 ;
    var currentColor = 0 ;

    // Toggle function to reset all sizes and colors to their default state
    function resetOptions() {
        document.querySelectorAll('input[name="selectSize"]').forEach(sizeInput => {
            sizeInput.disabled = false;
            // sizeInput.checked = false;
            const sizeLabel = document.querySelector(`label[for="${sizeInput.id}"]`);
            sizeLabel.style.display = 'flex';
        });

        document.querySelectorAll('input[name="selectColor"]').forEach(colorInput => {
            colorInput.disabled = false;
            // const colorLabel = document.querySelector(`label[for="${colorInput.id}"]`);
            // colorLabel.style.display = 'flex';
        });
    }

    // Event listener for color selection to filter sizes
    document.querySelectorAll('input[name="selectColor"]').forEach(colorInput => {
        colorInput.addEventListener('click', function() {
            const selectedColor = this.value;

            if (!currentColor) {
                currentColor = this.value;
                const availableSizes = colorSizeMap[selectedColor] || [];

                // Reset all sizes and disable unavailable ones based on the selected color
                document.querySelectorAll('input[name="selectSize"]').forEach(sizeInput => {
                    const sizeLabel = document.querySelector(`label[for="${sizeInput.id}"]`);
                    if (availableSizes.includes(sizeInput.value)) {
                        sizeInput.disabled = false;
                        sizeLabel.style.display = 'flex';
                    } else {
                        sizeInput.disabled = true;
                        sizeLabel.style.display = 'none';
                    }
                });
            } else {
                // console.log(this);
                this.checked = false;
                currentColor = 0;
                resetOptions();
            }
        });
    });

    // Event listener for size selection to filter colors
    document.querySelectorAll('input[name="selectSize"]').forEach(sizeInput => {
        sizeInput.addEventListener('click', function() {
            const selectedSize = this.value;

            // if (this.checked) {
            if (!currentSize) {
                currentSize = this.value;
                console.log('do')
                const availableColors = sizeColorMap[selectedSize] || [];

                // Reset all colors and disable unavailable ones based on the selected size
                document.querySelectorAll('input[name="selectColor"]').forEach(colorInput => {
                    // const colorLabel = document.querySelector(`label[for="${colorInput.id}"]`);
                    if (availableColors.includes(colorInput.value)) {
                        colorInput.disabled = false;
                        // colorLabel.style.display = 'flex';
                    } else {
                        colorInput.disabled = true;
                        // colorLabel.style.display = 'none';
                    }
                });
            } else {
                this.checked = false;
                currentSize = 0;
                resetOptions();
                // console.log('revaers');
            }
        });
    });
</script>




<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#alertForAddCart [data-alert-close]').on('click', function() {
            $('#alertForAddCart').removeClass('show');
        });

        $('#add_to_cart').on('click', function() {
            let userId = $(this).data('user-id');
            let productIds = $(this).data('product-ids');
            let productCode = $(this).data('product-code');

            // alert(productCode)
            $.ajax({
                url: '{{ route("cart_add") }}',
                method: 'POST',
                data: {
                    user_id: userId,
                    product_ids: productIds,
                    product_code: productCode,
                    product_color: currentColor,
                    product_size: currentSize,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#cartItemCounte').html(response.cartItemCount);
                    // $('#cartItemCounte').html('4');

                    $('#alertForAddCart').addClass('show');
                    if(response.success){
                        $('#alertForAddCart [data-alert-massage-text]').html(response.message);
                    }else{
                        $('#alertForAddCart [data-alert-massage-text]').html(response.message);
                    }

                    setTimeout(function() {
                        $('#alertForAddCart').removeClass('show');
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    alert("There was an error. Please try again.");
                }
            });
        });



        $('#AddReviewForm').on('submit', function (e) {
            e.preventDefault();

            // Collect form data
            var userID = $('#AddReviewForm input[name="userID"]').val();
            var productIDs = $('#AddReviewForm input[name="productIDs"]').val();
            var rate = $('#AddReviewForm select[name="rate"]').val();
            var comment = $('#AddReviewForm textarea[name="comment"]').val();

            if (!rate) {
                    alert('Please select a rating.');
                    return false;
                }
            if (comment.length < 10) {
                alert('Review comment must be at least 10 characters.');
                return false;
            }

            $.ajax({
                url: "{{ route('AddReview') }}",  // Define the route to handle the submission
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',  // Laravel CSRF token for security
                    user_id: userID,
                    product_ids: productIDs,
                    rating: rate,
                    comment: comment
                },
                success: function (response) {
                    // $('#AddReviewForm').reset();
                    $('#addReviewsModal').addClass('hidden');
                    $('#backDropDiv').addClass('hidden');

                },
                error: function (xhr, status, error) {
                    alert('Something went wrong. Please try again.');
                }
            });
        });
    });
</script>

@endsection

{{-- </body>

</html> --}}



<!-- product overview init js-->


