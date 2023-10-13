@extends('layout/main_fix')

@section('titel', ' product - shoping')
@section('products')


    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row product-lists">
                <div style="color: rgba(255, 255, 255, 0)">{{ $i = 1 }}</div>
                @foreach ($products as $prodect)
                    <div class="col-lg-4 col-md-6 text-center strawberry">
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
                    @if ($chek !== '3' && $i == 2)
                    @break
                @endif
                <b style="color: rgba(255, 255, 255, 0)">{{ $i++ }}</b>
            @endforeach

        </div>

        <div class="row">
            <div class="col-lg-12 text-center">

                <div class="pagination-wrap">
                    <ul>

                        <div style="color: rgba(255, 255, 255, 0)">
                            {{ $np = count($products) }}
                            {{ $catid }}
                            {{ $chek }}

                        </div>


                        @if ($chek == '1' && $np <= 2)
                            <li><a class="active" href="#">1</a></li>
                        @elseif($chek == '1')
                            <div style="color: rgba(255, 255, 255, 0)">
                                {{ $tr = '2' }}
                                {{ $idi = $prodect->id }}
                            </div>
                            <li><a class="active" href="">1</a></li>
                            <li><a
                                    href="/products/{{ $catid }}/{{ $idi }}/{{ $tr }}/{{ $idi }}">2</a>
                            </li>
                            <li><a
                                    href="/products/{{ $catid }}/{{ $idi }}/{{ $tr }}/{{ $idi }}">Next</a>
                            </li>
                        @endif


                        @if ($chek == '2' && $np <= 2)
                            <li><a href="/products/{{ $catid }}">Prev</a></li>
                            <li><a href="/products/{{ $catid }}/">1</a></li>
                            <li><a class="active" href="">2</a></li>
                        @elseif($chek == '2')
                            <div style="color: rgba(255, 255, 255, 0)">
                                {{ $tr = '3' }}
                                {{ $idi = $prodect->id }}
                            </div>
                            <li><a href="/products/{{ $catid }}">Prev</a></li>
                            <li><a href="/products/{{ $catid }}">1</a></li>
                            <li><a class="active" href="">2</a></li>
                            <li><a
                                    href="/products/{{ $catid }}/{{ $idi }}/{{ $tr }}/{{ $idr }}">3</a>
                            </li>
                            <li><a
                                    href="/products/{{ $catid }}/{{ $idi }}/{{ $tr }}/{{ $idr }}">Next</a>
                            </li>
                        @elseif($chek == '3')
                            <div style="color: rgba(255, 255, 255, 0)"> {{ $tr = '2' }} </div>
                            <li><a
                                    href="/products/{{ $catid }}/{{ $idr }}/{{ $tr }}/{{ $idr }}">Prev</a>
                            </li>
                            <li><a href="/products/{{ $catid }}">1</a></li>
                            <li><a
                                    href="/products/{{ $catid }}/{{ $idr }}/{{ $tr }}/{{ $idr }}">2</a>
                            </li>
                            <li><a class="active" href="#">3</a></li>
                        @endif



                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end products -->


@endsection
