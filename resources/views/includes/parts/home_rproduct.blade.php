<!-- Recent Product Start -->
<div class="recent-product">
    <div class="container">
        <div class="section-header">
            <h3>Recent Product</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies. Nullam consequat, mauris non interdum cursus
            </p>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
            @foreach ($aproducts as  $k=>$v)
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-image">
                            <a href="{{asset(' ')}}public/product/{{$v->slug}}">
                                <img  src="{{asset($v->image_one)}}" alt="{{$v->product_name}}">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="title"><a href="{{asset('')}}public/product/{{$v->slug}}">{{$v->product_name}}</a></div>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="price">Rs{{$v->discount_price}} <span>Rs {{$v->selling_price}}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Recent Product End -->