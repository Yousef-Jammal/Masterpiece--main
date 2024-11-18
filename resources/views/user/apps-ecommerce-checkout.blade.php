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

        <form action="{{ route('yourSubmitRoute') }}" method="GET" style="margin: 0" class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Checkout</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="#!" class="text-slate-400 dark:text-zink-200">Ecommerce</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Checkout
                        </li>
                    </ul>
                </div>
                <div action="#!" class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                    <div class="xl:col-span-8">
                        <div class="flex items-center gap-3 mb-5">
                            @if (auth()->user())
                            <div class="grow">
                                <a href="{{ route('userCart', auth()->user()->id) }}" class="transition-all duration-300 ease-linear text-custom-500 hover:text-custom-600"><i data-lucide="chevron-left" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1 rtl:rotate-180">
                                    </i> <span class="align-middle">Back to Cart</span>
                                </a>
                            </div>
                            @endif
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Shipping Information</h6>
                                <div id="userForm">
                                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-12">
                                        @if(auth()->user())
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        @endif
                                        <div class="xl:col-span-4">
                                            <label for="phoneNumberInput" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                                            <input name="phone" type="text" id="phoneNumberInput" class="form-input border-slate-200" placeholder="(012) 345 678 9010" required>
                                            <p id="phoneError" class="text-red-500 text-sm mt-1"></p>
                                        </div>
                                        <div class="xl:col-span-4">
                                            <label for="alternativeNumberInput" class="inline-block mb-2 text-base font-medium">Alternative Number</label>
                                            <input name="alternativeName" type="text" id="alternativeNumberInput" class="form-input border-slate-200" placeholder="(012) 345 678 9010">
                                            <p id="altPhoneError" class="text-red-500 text-sm mt-1"></p>
                                        </div>
                                        <div class="xl:col-span-12">
                                            <label for="streetAddressInput" class="inline-block mb-2 text-base font-medium">Street Address</label>
                                            <input name="street" type="text" id="streetAddressInput" class="form-input border-slate-200" placeholder="Street address" required>
                                            <p id="addressError" class="text-red-500 text-sm mt-1"></p>
                                        </div>
                                        <div class="xl:col-span-12">
                                            <label for="townCityInput" class="inline-block mb-2 text-base font-medium">Town/City</label>
                                            <input name="city" type="text" id="townCityInput" class="form-input border-slate-200" placeholder="Town/City" required>
                                            <p id="cityError" class="text-red-500 text-sm mt-1"></p>
                                        </div>
                                        <div class="xl:col-span-4">
                                            <label for="zipcodeInput" class="inline-block mb-2 text-base font-medium">ZipCode</label>
                                            <input name="zipCode" type="text" id="zipcodeInput" class="form-input border-slate-200" placeholder="ZipCode" required>
                                            <p id="zipError" class="text-red-500 text-sm mt-1"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Delivery</h6>

                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-2">
                                    <div class="flex items-center gap-3">
                                        <input id="deliveryOption1" class="border rounded-full appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-purple-500 checked:border-purple-500 dark:checked:bg-purple-500 dark:checked:border-purple-500 checked:disabled:bg-purple-400 checked:disabled:border-purple-400 peer" type="radio" name="deliveryChoose" value="express-delivery" checked>
                                        <label for="deliveryOption1" class="flex flex-col gap-4 p-5 border rounded-md cursor-pointer md:flex-row border-slate-200 dark:border-zink-500 peer-checked:border-purple-500 dark:peer-checked:border-purple-700 grow">
                                            <span class="shrink-0">
                                                <img src="{{ asset('images/delivery-1.png') }}" alt="" class="h-12">
                                            </span>
                                            <span class="grow">
                                                <span class="block mb-1 font-semibold text-15">Express Delivery</span>
                                                <span class="text-slate-500 dark:text-zink-200">Expected delivery: {{ getAfterDate(1) }}</span>
                                            </span>
                                            <span class="shrink-0">
                                                <span class="block text-lg font-semibold">$11.99</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <input id="deliveryOption2" class="border rounded-full appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-purple-500 checked:border-purple-500 dark:checked:bg-purple-500 dark:checked:border-purple-500 checked:disabled:bg-purple-400 checked:disabled:border-purple-400 peer" type="radio" name="deliveryChoose" value="air-logistic-delivery">
                                        <label for="deliveryOption2" class="flex flex-col gap-4 p-5 border rounded-md cursor-pointer md:flex-row border-slate-200 dark:border-zink-500 peer-checked:border-purple-500 dark:peer-checked:border-purple-700 grow">
                                            <span class="shrink-0">
                                                <img src="{{ asset('images/delivery-2.png') }}" alt="" class="h-12">
                                            </span>
                                            <span class="grow">
                                                <span class="block mb-1 font-semibold text-15">Air Logistic Delivery</span>
                                                <span class="text-slate-500 dark:text-zink-200">Expected delivery: {{ getAfterDate(5) }}</span>
                                            </span>
                                            <span class="shrink-0">
                                                <span class="block text-lg font-semibold">$5</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <input id="deliveryOption3" class="border rounded-full appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-purple-500 checked:border-purple-500 dark:checked:bg-purple-500 dark:checked:border-purple-500 checked:disabled:bg-purple-400 checked:disabled:border-purple-400 peer" type="radio" name="deliveryChoose" value="free-delivery">
                                        <label for="deliveryOption3" class="flex flex-col gap-4 p-5 border rounded-md cursor-pointer md:flex-row border-slate-200 dark:border-zink-500 peer-checked:border-purple-500 dark:peer-checked:border-purple-700 grow">
                                            <span class="shrink-0">
                                                <img src="{{ asset('images/delivery-3.png') }}" alt="" class="h-12">
                                            </span>
                                            <span class="grow">
                                                <span class="block mb-1 font-semibold text-15">Free Delivery</span>
                                                <span class="text-slate-500 dark:text-zink-200">Expected delivery: {{ getAfterDate(10) }}</span>
                                            </span>
                                            <span class="shrink-0">
                                                <span class="block text-lg font-semibold">$0</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Payment Information</h6>
                                <div action="#!">
                                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                        <div class="xl:col-span-12">
                                            <label for="cardNumberInput" class="inline-block mb-2 text-base font-medium">Card Number</label>
                                            <input  name="cardNumber" type="text" pattern="\d*" maxlength="16" id="cardNumberInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="XXXX XXXX XXXX XXXX" required>
                                        </div><!--end col-->
                                        <div class="xl:col-span-6">
                                            <label for="expiringInput" class="inline-block mb-2 text-base font-medium">Expiring (MM/YY)</label>
                                            <input name="Exiring" type="text" pattern="\d*" maxlength="4" id="expiringInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="MM/YY" required>
                                        </div><!--end col-->
                                        <div class="xl:col-span-6">
                                            <label for="cvvInput" class="inline-block mb-2 text-base font-medium">CVV Code</label>
                                            <input name="CVV" type="text" pattern="\d*" maxlength="3" id="cvvInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="000" required>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="xl:col-span-4">
                        <div class="card">
                            <div class="card-body">
                                <div id="discountForm">
                                    <div class="mb-3">
                                        <label for="discountCode" class="inline-block mb-2 text-base font-medium">Discount Code
                                        </label>
                                        <input id="discountCode" name="discountCode" type="text" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        <div id="resultMessage"></div>
                                    </div>
                                    <button type="button" id="discountCodeBtn" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Check</button>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Orders Summary</h6>
                                <div class="hidden  px-4 py-3 mb-4 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
                                    These products are limited, checkout within <span class="font-bold">03m 21s</span>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full">
                                        <tbody>
                                            @foreach ($cartItems as $item)

                                            <tr>
                                                <td class="px-3.5 py-4 border-b border-dashed first:pl-0 last:pr-0 border-slate-200 dark:border-zink-500">
                                                    <div class="flex items-center gap-3">
                                                        <div class="flex items-center justify-center rounded-md size-12 bg-slate-100 shrink-0">
                                                            <img src="{{ asset('images/product/' . $item->product->images->first()->name ) }}" alt="" class="h-8">
                                                        </div>
                                                        <div class="grow">
                                                            <h6 class="mb-1 text-15"><a href="apps-ecommerce-product-overview.html" class="transition-all duration-300 ease-linear hover:text-custom-500">{{ $item->product->title }}</a></h6>
                                                            <p class="text-slate-500 dark:text-zink-200">${{ $item->product->price }} x {{ $item->quantity }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-3.5 py-4 border-b border-dashed first:pl-0 last:pr-0 border-slate-200 dark:border-zink-500 ltr:text-right rtl:text-left">${{ $item->product->price * $item->quantity }}</td>
                                            </tr>
                                            @endforeach

                                            <tr>
                                                <td class="px-3.5 pt-4 pb-3 first:pl-0 last:pr-0 text-slate-500 dark:text-zink-200">
                                                    Sub Total
                                                </td>
                                                <td id="subTotal" class="px-3.5 pt-4 pb-3 first:pl-0 last:pr-0 ltr:text-right rtl:text-left">${{ $totalPrice }}</td>
                                            </tr>
                                            <tr class="hidden">
                                                <td class="px-3.5 py-3 first:pl-0 last:pr-0 text-slate-500 dark:text-zink-200">
                                                    Estimated Tax (18%)
                                                </td>
                                                <td class="px-3.5 py-3 first:pl-0 last:pr-0 ltr:text-right rtl:text-left">$167.79</td>
                                            </tr>
                                            <tr>
                                                <td class="px-3.5 py-3 first:pl-0 last:pr-0 text-slate-500 dark:text-zink-200">
                                                    Item Discounts
                                                    <span id="Item_Discounts_Precentage">
                                                    </span>
                                                    {{-- (12%) --}}
                                                </td>
                                                <td id="Item_Discounts" class="px-3.5 py-3 first:pl-0 last:pr-0 ltr:text-right rtl:text-left">
                                                    -$0
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-3.5 py-3 first:pl-0 last:pr-0 text-slate-500 dark:text-zink-200">
                                                    Shipping Charge
                                                </td>
                                                <td id="shippingCharge" class="px-3.5 py-3 first:pl-0 last:pr-0 ltr:text-right rtl:text-left">
                                                    $0
                                                </td>
                                            </tr>
                                            <tr class="font-semibold">
                                                <td class="px-3.5 pt-3 first:pl-0 last:pr-0 text-slate-500 dark:text-zink-200">
                                                    Total Amount (JD)
                                                </td>
                                                <td id="total_price" class="px-3.5 pt-3 first:pl-0 last:pr-0 ltr:text-right rtl:text-left">
                                                    ${{ $totalPrice }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @if (auth()->user())
                                <div class="mt-4">
                                    <button id="checkoutBtn" type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                        <span class="align-middle">Place Order</span>
                                        <i data-lucide="move-right" class="inline-block align-middle size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180"></i>
                                    </button>
                                    {{-- <button id="checkoutBtn" class="btn btn-primary">Complete Checkout</button> --}}
                                    {{-- <button id="submitFormBtn" class="btn btn-primary mt-5">Submit Order</button> --}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

            </div>
            <!-- container-fluid -->
        </form>
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


@section('script')

<script src="{{ asset('js/pages/apps-ecommerce-checkout.init.js') }}"></script>

<script>
    // document.getElementById("cardNumberInput").addEventListener("input", (e) => {
    //     console.log('hi')
    //     e.target.value = e.target.value.replace(/\D/g, "").slice(0, 16);
    // });

</script>

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script>
$(document).ready(function() {
    // التعامل مع إرسال نموذج الخصم
    $('#discountCodeBtn').on('click', function(e) {
        // e.preventDefault();

        let discountCode = $('#discountCode').val();

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
                    `);

                    // <br>
                    //     Discount Amount: ${response.discount_amount ? response.discount_amount : 0}
                    //     <br>
                    //     Discount Percentage: ${response.discount_percentage ? response.discount_percentage + '%' : 'N/A'}
                    //     <br>
                    //     Minimum Order Amount: ${response.minimum_order_amount ? response.minimum_order_amount : 0}

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
});
</script>



<script>



// document.getElementById('checkoutBtn').addEventListener('click', function() {
//     const data = {
//         NameInput: document.getElementById('NameInput').value,
//         phoneNumberInput: document.getElementById('phoneNumberInput').value,
//         alternativeNumberInput: document.getElementById('alternativeNumberInput').value,
//         streetAddressInput: document.getElementById('streetAddressInput').value,
//         townCityInput: document.getElementById('townCityInput').value,
//         zipcodeInput: document.getElementById('zipcodeInput').value,
//         deliveryChoose: document.querySelector('input[name="deliveryChoose"]:checked').value,
//         cardNumberInput: document.getElementById('cardNumberInput').value,
//         expiringInput: document.getElementById('expiringInput').value,
//         cvvInput: document.getElementById('cvvInput').value,
//     };
//     console.log(data)

//     fetch('{{ route('checkout.process') }}', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': '{{ csrf_token() }}'
//         },
//         body: JSON.stringify(data)
//     })
//     .then(response => response.json())
//     .then(data => {

//         // console.log(data.data);
//         // const queryString = new URLSearchParams(data).toString();
//         window.location.href = `/your-target-url?${data.data}`;

//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// });
</script>



@endsection
