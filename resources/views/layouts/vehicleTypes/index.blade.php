<section class="productsWrap">
    <div class="container">
        <ul class="products style1 text-center new">
            @foreach (\App\VehicleType::all() as $type)
            <li class="product text-center col-md-3 col-sm-6">
                <div class="visual imgAsBG" style="background-image: url('assets/img/prod-mas-7.jpg');">
                    <img src="storage/{{$type->name}}.jpg">
                    <div class="prodLay"></div>
                </div>
                <ul class="links">
                    <li><a href="#"><i class="xv-basic_heart"></i></a></li>
                    <li><a href="#" class="add_to_cart_button"><i class="xv-ecommerce_cart_content"></i></a></li>
                    <li><a href="#"><i class="xv-basic_eye"></i></a></li>
                </ul>
                <div class="productInfo">
                    <h6><a href="#">WOOD EFFECT SUNGLASSES</a></h6>
                    <span class="price">95.00 USD</span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
