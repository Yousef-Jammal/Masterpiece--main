@extends('user.master')
@php
    $hideFooter = true;
@endphp
@section('content')



    <div id="cartSidePenal" drawer-end class="fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow dark:bg-zink-600 ltr:right-0 rtl:left-0 md:w-96 z-drawer show">
        <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
            <div class="grow">
                <h5 class="mb-0 text-16">Shopping Cart <span class="inline-flex items-center justify-center w-5 h-5 ml-1 text-[11px] font-medium border rounded-full text-white bg-custom-500 border-custom-500">3</span></h5>
            </div>
            <div class="shrink-0">
                <button data-drawer-close="cartSidePenal" class="transition-all duration-150 ease-linear text-slate-500 hover:text-slate-800"><i data-lucide="x" class="size-4"></i></button>
            </div>
        </div>
        <div class="px-4 py-3 text-sm text-green-500 border border-transparent bg-green-50 dark:bg-green-400/20">
            <span class="font-bold underline">TAILWICK50</span> Coupon code applied successfully.
        </div>
        <div>
            <div class="h-[calc(100vh_-_370px)] p-4 overflow-y-auto product-list">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2 product">
                        <div class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                            <img src="{{ asset('images/img-012.png') }}" alt="" class="h-8">
                        </div>
                        <div class="overflow-hidden grow">
                            <div class="ltr:float-right rtl:float-left">
                                <button class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i data-lucide="x" class="size-4"></i></button>
                            </div>
                            <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                                <h6 class="mb-1 text-15">Cotton collar t-shirts for men</h6>
                            </a>
                            <div class="flex items-center mb-3">
                                <h5 class="text-base product-price"> $<span>155.32</span></h5>
                                <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-500 dark:text-zink-200">(Fashion)</div>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <div class="inline-flex text-center input-step">
                                    <button type="button" class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block size-4"></i></button>
                                    <input type="number" class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500" value="2" min="0" max="100" readonly>
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block size-4"></i></button>
                                </div>
                                <h6 class="product-line-price">310.64</h6>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2 product">
                        <div class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                            <img src="{{ asset('images/img-03.png') }}" alt="" class="h-8">
                        </div>
                        <div class="overflow-hidden grow">
                            <div class="ltr:float-right rtl:float-left">
                                <button class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i data-lucide="x" class="size-4"></i></button>
                            </div>
                            <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                                <h6 class="mb-1 text-15">Like style travel black handbag</h6>
                            </a>
                            <div class="flex items-center mb-3">
                                <h5 class="text-base product-price"> $<span>349.95</span></h5>
                                <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-400 dark:text-zink-200">(Luggage)</div>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <div class="inline-flex text-center input-step">
                                    <button type="button" class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block size-4"></i></button>
                                    <input type="number" class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500" value="1" min="0" max="100" readonly>
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block size-4"></i></button>
                                </div>
                                <h6 class="product-line-price">349.95</h6>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2 product">
                        <div class="flex items-center justify-center w-12 h-12 rounded-md bg-slate-100 shrink-0 dark:bg-zink-500">
                            <img src="{{ asset('images/img-09.png') }}" alt="" class="h-8">
                        </div>
                        <div class="overflow-hidden grow">
                            <div class="ltr:float-right rtl:float-left">
                                <button class="transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i data-lucide="x" class="size-4"></i></button>
                            </div>
                            <a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500">
                                <h6 class="mb-1 text-15">Blive Printed Men Round Neck</h6>
                            </a>
                            <div class="flex items-center mb-3">
                                <h5 class="text-base product-price">$<span>546.74</span></h5>
                                <div class="font-normal rtl:mr-1 ltr:ml-1 text-slate-400 dark:text-zink-200">(Fashion)</div>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <div class="inline-flex text-center input-step">
                                    <button type="button" class="border w-9 h-9 leading-[15px] minus bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block size-4"></i></button>
                                    <input type="number" class="w-12 text-center h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500" value="4" min="0" max="100" readonly>
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-9 h-9 border-slate-200 plus text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block size-4"></i></button>
                                </div>
                                <h6 class="product-line-price end">2,186.96</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-t border-slate-200 dark:border-zink-500">

                <table class="w-full mb-3 ">
                    <tbody class="table-total">
                        <tr>
                            <td class="py-2">Sub Total :</td>
                            <td class="text-right cart-subtotal">$2,847.55</td>
                        </tr>
                        <tr>
                            <td class="py-2">Discount <span class="text-muted">(TAILWICK50)</span>:</td>
                            <td class="text-right cart-discount">-$476.00</td>
                        </tr>
                        <tr>
                            <td class="py-2">Shipping Charge :</td>
                            <td class="text-right cart-shipping">$89.00</td>
                        </tr>
                        <tr>
                            <td class="py-2">Estimated Tax (12.5%) : </td>
                            <td class="text-right cart-tax">$70.62</td>
                        </tr>
                        <tr class="font-semibold">
                            <td class="py-2">Total : </td>
                            <td class="text-right cart-total">$2,531.17</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex items-center justify-between gap-3">
                    <a href="apps-ecommerce-product-grid.html" class="w-full text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10">Continue Shopping</a>
                    <a href="apps-ecommerce-checkout.html" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <div style="margin: 0" class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Shopping Cart</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="#!" class="text-slate-400 dark:text-zink-200">Ecommerce</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Shopping Cart
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                    <div class="xl:col-span-9 products-list">
                        <div class="flex items-center gap-3 mb-5">
                            <h5 class="underline text-16 grow">Shopping Cart (3)</h5>
                            <div>
                                @if (!$cartItems->isEmpty())
                                    <a id="deleteAllItemsBtn" href="#!" class="text-red-500 transition-all duration-300 ease-linear hover:text-red-600">
                                        <i data-lucide="trash-2" class="inline-block mr-1 align-middle size-4"></i>
                                        <span class="align-middle">Delete All</span>
                                    </a>
                                @endif
                            </div>
                        </div>

                        @foreach ($cartItems as $cartItem)
                        <div class="card products" id="product">
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-4 lg:grid-cols-12">
                                    <div class="p-4 rounded-md lg:col-span-2 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ asset('images/product/' . $cartItem->product->images->first()->name ) }}" alt="">
                                    </div><!--end col-->
                                    <div class="flex flex-col lg:col-span-4">
                                        <div>
                                            <h5 class="mb-1 text-16"><a href="apps-ecommerce-product-overview.html">{{ $cartItem->product->title }}</a></h5>
                                            <p class="mb-2 text-slate-500 dark:text-zink-200"><a href="#!">{{ $cartItem->product->category->name }}</a></p>
                                            @php
                                                // $colorName = getColorName($cartItem->product->color);
                                            @endphp
                                            <p class="mb-1 text-slate-500 dark:text-zink-200">Color:
                                                 <span class="text-slate-800 dark:text-zink-50">{{ getColorName($cartItem->product->color) }}</span>
                                                 {{-- <div class="flex flex-wrap items-center gap-2"> --}}
                                                    {{-- @foreach ($cartItem->$product->colors as $color) --}}
                                                        {{-- <input style="background-color: {{ $cartItem->product->color }} ; border-color:{{ $cartItem->product->color }}" type="radio" value="{{ $cartItem->product->color }}" name="selectColor" id="{{ $cartItem->product->color }}" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" > --}}
                                                        {{-- <span style="background-color: {{ $cartItem->product->color }} ; border-color:{{ $cartItem->product->color }}" value="{{ $cartItem->product->color }}" name="selectColor" id="{{ $cartItem->product->color }}" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default"></span> --}}
                                                    {{-- @endforeach --}}
                                                {{-- </div> --}}
                                            </p>
                                            <p class="mb-3 text-slate-500 dark:text-zink-200">Size: <span class="text-slate-800 dark:text-zink-50">{{ $cartItem->product->size }}</span></p>
                                        </div>
                                        <div class="flex items-center gap-2 mt-auto">
                                            {{-- <div class="inline-flex p-2 text-center border rounded input-step border-slate-200 dark:border-zink-500">
                                                <button type="button" class="border w-7 leading-[15px] minus-value bg-slate-200 dark:bg-zink-600 dark:border-zink-600 rounded transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="minus" class="inline-block w-4 h-4"></i></button>
                                                <input id="cartCount" data-id="{{ $cartItem->id }}" type="number" class="text-center ltr:pl-2 rtl:pr-2 w-15 h-7 products-quantity dark:bg-zink-700 focus:shadow-none" value="1" min="0" max="100" readonly>
                                                <button type="button" class="transition-all duration-200 ease-linear border rounded border-slate-200 bg-slate-200 dark:bg-zink-600 dark:border-zink-600 w-7 plus-value text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><i data-lucide="plus" class="inline-block w-4 h-4"></i></button>
                                            </div> --}}
                                            <div class="inline-flex p-2 text-center border rounded input-step border-slate-200 dark:border-zink-500">
                                                <button type="button" class="minus-value border w-7 leading-[15px] bg-slate-200 dark:bg-zink-600 rounded">
                                                    <i data-lucide="minus" class="inline-block w-4 h-4"></i>
                                                </button>
                                                <input id="cartCount" data-id="{{ $cartItem->id }}" type="number" class="products-quantity w-15 h-7 text-center" value="{{ $cartItem->quantity }}" min="1" max="100" readonly>
                                                <button type="button" class="plus-value border w-7 bg-slate-200 dark:bg-zink-600 rounded">
                                                    <i data-lucide="plus" class="inline-block w-4 h-4"></i>
                                                </button>
                                            </div>

                                            {{-- <button data-modal-target="deleteModal" type="button" class="flex items-center justify-center size-[37.5px] p-0 text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 remove-button"><i data-lucide="trash-2" class="w-4 h-4"></i></button> --}}
                                            <button  data-id="{{ $cartItem->id }}" id="deleteRecord" type="button" class="flex items-center justify-center size-[37.5px] p-0 text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 remove-button"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="flex justify-between w-full lg:flex-col lg:col-end-13 lg:col-span-2">
                                        <div class="mb-auto ltr:lg:text-right rtl:lg:text-left">
                                            <h6 class="text-16 products-price">$<span>{{ $cartItem->product->price }}</span>
                                                {{-- <small class="font-normal line-through text-slate-500 dark:text-zink-200">$299.99</small> --}}
                                            </h6>
                                        </div>
                                        <h6 class="mt-auto text-16 ltr:lg:text-right rtl:lg:text-left">$<span class="products-line-price">{{ $cartItem->product->price }}</span></h6>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div>
                        </div><!--end card-->
                        @endforeach

                    </div><!--end col-->
                    <div class="xl:col-span-3">
                        <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">

                            <div class="card hidden">
                                <div class="card-body">
                                    <form id="discountForm">
                                        <div class="mb-3">
                                            <label for="inputText" class="inline-block mb-2 text-base font-medium">Discount Code
                                                {{-- <span class="text-red-500">*</span> --}}
                                            </label>
                                            <input name="discountCode" type="text" id="inputText" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" required>
                                            <div id="resultMessage"></div>
                                        </div>
                                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Check</button>
                                    </form>
                                </div>
                            </div><!--end card-->

                            <div class="card ">
                                <div class="card-body">
                                    <h6 class="mb-4 text-15">Order Summary</h6>
                                    <div class="overflow-x-auto">
                                        <table class="w-full">
                                            <tbody class="table-total">
                                                <tr class="hidden">
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Sub Total
                                                    </td>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200 cart-subtotal">
                                                        ${{ $totalPrice }}
                                                    </td>
                                                </tr>
                                                <tr class="hidden">
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Discounts
                                                        <span id="Item_Discounts_Precentage">
                                                        </span>
                                                    </td>
                                                    <td id="Item_Discounts" class="py-2 text-slate-500 dark:text-zink-200 cart-discount">
                                                        -$0
                                                    </td>
                                                </tr>
                                                <tr style="display: none">
                                                    <td class="py-2 text-slate-500 dark:text-zink-200">
                                                        Shipping Charge
                                                    </td>
                                                    <td class="py-2 text-slate-500 dark:text-zink-200 cart-shipping">
                                                        $0
                                                    </td>
                                                </tr>
                                                <tr class="font-semibold">
                                                    <td class="pt-2">
                                                        Total Amount (JD)
                                                    </td>
                                                    <td id="total_price" class="pt-2 cart-total">
                                                        ${{ $totalPrice }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-2 mt-5 shrink-0">
                                <a href="{{ route('show_products') }}" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20">Continue to Shopping</a>
                                @if(auth()->user())
                                <a href="{{ route('checkout', auth()->user()->id ) }}" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Checkout</a>
                                @endif
                            </div>

                            <div style="display: none" class="flex items-center gap-5 p-4 mt-5 card">
                                <div class="flex items-center justify-center rounded-md size-12 bg-slate-100 dark:bg-zink-600">
                                    <i data-lucide="truck" class="size-6 text-slate-500 fill-slate-300 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Estimated Delivery</h6>
                                    <p class="text-slate-500">01 - 07 Dec, 2023</p>
                                </div>
                            </div>
                            <div style="display: none" class="flex items-center gap-5 p-4 card">
                                <div class="flex items-center justify-center rounded-md size-12 bg-slate-100 dark:bg-zink-600">
                                    <i data-lucide="container" class="size-6 text-slate-500 fill-slate-300 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Free Shipping & Returns</h6>
                                    <p class="text-slate-500 dark:text-zink-200">On all orders over $200.00</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>

</div>
<!-- end main content -->




{{-- My Black Background --}}
<div class="fixed inset-0 bg-slate-900/40 dark:bg-zink-800/70 z-[1049] backdrop-overlay hidden" id="my_backDropDiv"></div>

{{-- my Delete model --}}
<div id="confirmationModal" modal-center class="fixed flex flex-col  transition-all duration-300 hidden ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 ">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
            <div class="float-right">
                <button data-modal-close_new="confirmationModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <img src="data:image/png;base64,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" alt="" class="block h-12 mx-auto">
            <div class="mt-5 text-center">
                <h5 class="mb-1">Are you sure?</h5>
                <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                <div class="flex justify-center gap-2 mt-6">
                    <button type="reset" data-modal-close_new="confirmationModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                    @if (auth()->user())
                    <button id="confirmDeleteBtn" data-id="{{ auth()->user()->id }}" type="submit" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes, Delete It!</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div><!--end delete modal-->



@endsection
@section('script')

<script src="{{ asset('js/pages/apps-ecommerce-cart.init.js') }}"></script>
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>



<script>
$(document).ready(function() {
    // التعامل مع إرسال نموذج الخصم
    $('#discountForm').on('submit', function(e) {
        e.preventDefault();

        let discountCode = $('[name="discountCode"]').val();

        if (discountCode === '') {
            $('#resultMessage').html('<span class="text-red-500">Please enter a discount code!</span>');
            return;
        }

        $.ajax({
            url: "{{ route('discount_check') }}",
            method: 'POST',
            data: {
                code: discountCode,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.valid) {
                    $('#resultMessage').html(`
                        <span class="text-green-500">The discount code is valid!</span>
                        <br>
                        Discount Amount: ${response.discount_amount ? response.discount_amount : 0}
                        <br>
                        Discount Percentage: ${response.discount_percentage ? response.discount_percentage + '%' : 'N/A'}
                        <br>
                        Minimum Order Amount: ${response.minimum_order_amount ? response.minimum_order_amount : 0}
                    `);
                    if(response.discount_amount){
                        $('#Item_Discounts').html(`-$${response.discount_amount}`);
                    } else if(response.discount_percentage) {
                        let totalPrice = parseFloat($('#total_price').text().replace('$', ''));
                        $('#Item_Discounts').html(`-$${(totalPrice * (response.discount_percentage / 100)).toFixed(2)}`);
                        $('#Item_Discounts_Precentage').html(`(${response.discount_percentage + '%'})`);
                    }
                } else {
                    $('#resultMessage').html('<span class="text-red-500">The discount code is invalid.</span>');
                }
                window.parent.recalculateCart();
            },
            error: function(xhr, status, error) {
                $('#resultMessage').html(`<span class="text-red-500"> ${error}, ${status}, ${xhr}</span>`);
            }
        });
    });

     // زر زيادة الكمية
     $('.plus-value').on('click', function() {
        let input = $(this).siblings('input');
        let currentValue = parseInt(input.val());
        let maxValue = parseInt(input.attr('max'));
        let recordId = input.data('id');

        if (currentValue < maxValue) {
            // input.val(currentValue + 1);
            updateCartQuantity(recordId, currentValue );
        }
    });

    // زر تقليل الكمية
    $('.minus-value').on('click', function() {
        let input = $(this).siblings('input');
        let currentValue = parseInt(input.val());
        let minValue = parseInt(input.attr('min'));
        let recordId = input.data('id');

        if (currentValue > minValue) {
            // input.val(currentValue - 1);
            updateCartQuantity(recordId, currentValue );
        }
    });

    // تحديث الكمية باستخدام Ajax
    function updateCartQuantity(recordId, newQuantity) {
        let url = `{{ route('change_cartItem_quantity', ':id') }}`.replace(':id', recordId);

        $.ajax({
            url: url,
            type: 'PUT',
            data: {
                quantity: newQuantity
            },
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    console.log('Quantity updated successfully');
                } else {
                    console.log('Failed to update quantity');
                }
            },
            error: function(xhr) {
                console.log('Error: ' + xhr.status + ' - ' + xhr.statusText);
            }
        });
    }

    // التعامل مع زر الحذف
    $('#deleteRecord').on('click', function() {
        var recordId = $(this).data('id');
        var button = $(this);

        var url = `{{ route('delete_cartItem', '') }}/${recordId}`;

        $.ajax({
            url: url,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // تضمين رمز CSRF في الرأس
            },
            success: function(response) {
                if (response.success) {
                    button.closest('.products').remove(); // ضبط المُحدد حسب الحاجة
                    // alert('Record deleted successfully.'); // يمكنك إلغاء تعليق هذه السطر لإظهار رسالة النجاح
                    window.parent.recalculateCart();
                } else {
                    // alert('Failed to delete record: ' + response.message); // يمكنك إلغاء تعليق هذه السطر لإظهار رسالة الخطأ
                }
            },
            error: function(xhr) {
                // alert('Error: ' + xhr.status + ' - ' + xhr.statusText); // يمكنك إلغاء تعليق هذه السطر لإظهار رسالة الخطأ
            }
        });
    });

    // Show the modal when the delete button is clicked
    $('#deleteAllItemsBtn').on('click', function() {
        $('#confirmationModal').removeClass('hidden');
        $('#my_backDropDiv').removeClass('hidden');
    });

    $('[data-modal-close_new="confirmationModal"]').on('click', function() {
        $('#confirmationModal').addClass('hidden');
        $('#my_backDropDiv').addClass('hidden');
    });


    $('#confirmDeleteBtn').on('click', function(e) {
        e.preventDefault();

        $('#confirmationModal').addClass('hidden');
        $('#my_backDropDiv').addClass('hidden');

        var userId = $(this).data('id');

        $.ajax({
            url: "{{ route('delete_AllCartItem') }}",
            method: 'DELETE',
            data: {
                user_id: userId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('.products').remove();
                $('#deleteAllItemsBtn').remove();
                window.recalculateCart();
            },
            error: function(xhr) {
                alert('An error occurred while deleting items.');
            }
        });
    });
});

</script>



@endsection
