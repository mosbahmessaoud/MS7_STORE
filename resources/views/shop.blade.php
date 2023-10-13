@extends('layout/main_fix')

@section('titel', 'Prodects - shoping')
@section('products')


    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <a href="/shop">
                                @if ($catid == null)
                                    <li class="active">All</li>
                                @else
                                    <li>All</li>
                                @endif

                            </a>
                            @foreach ($categories as $category)
                                @if ($category->id == $catid)
                                    <a href="/shop/{{ $category->id }} ">
                                        <li class="active">{{ $category->category_titel }}</li>
                                    </a>
                                @else
                                    <a href="/shop/{{ $category->id }} ">
                                        <li>{{ $category->category_titel }}</li>
                                    </a>
                                @endif
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            @if ($catid == null)
                                <li class="active">All</li>
                            @else
                                <li>All</li>
                            @endif
                            @foreach ($categories as $category)
                                <li data-filter=".{{ $category->id }}">{{ $category->category_titel }}</li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                @foreach ($products as $prodect)
                    <div class="col-lg-4 col-md-6 text-center {{ $prodect->category_type }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="#"><img src="assets/img/catigoies/{{ $prodect->image_prodect }}"
                                        alt=""></a>
                            </div>
                            <h3>{{ $prodect->name }}</h3>
                            <p class="product-price"><span>Per K</span>{{ $prodect->price }}$</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Shopping cart
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </div>
    <!-- end products -->


@endsection
