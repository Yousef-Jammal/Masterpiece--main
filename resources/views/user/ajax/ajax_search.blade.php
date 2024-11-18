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
