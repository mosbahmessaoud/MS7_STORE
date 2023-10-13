@extends('layout/main_fix')

@section('titel', 'Categories ')
@section('categories')


    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">All</span> catigories</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6 text-center strawberry">
                        <div class="single-product-item">
                            <div class="product-image">

                                <a href="/products/{{ $category->id }}"><img
                                        src="assets/img/catigoies/{{ $category->category_image }}" alt=""></a>

                            </div>
                            <h3>{{ $category->category_titel }}</h3>
                            <p class="product-price"><span>Per K</span>-{{ $category->persant_solde }}</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Views All Prodect </a>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->


@endsection
