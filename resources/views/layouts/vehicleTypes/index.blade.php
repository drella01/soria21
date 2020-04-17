<section class="productsWrap">
    <div class="container">
        <ul class="products style1 text-center new">
            <li class="product text-center col-md-3 col-sm-6">
                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/prod-mas-1.jpg&quot;);">
                    <img src="assets/img/prod-mas-1.jpg" alt="assd">
                    <div class="prodLay"></div>
                </div>
                <ul class="links">
                    <li><a href="#"><i class="xv-basic_heart"></i></a></li>
                    <li><a href="#" class="add_to_cart_button"><i class="xv-ecommerce_cart_content"></i></a></li>
                    <li><a href="#"><i class="xv-basic_eye"></i></a></li>
                </ul>
                <div class="productInfo">
                    <h6><a href="#">{{trans('custom.rent')}}</a></h6>
                    <span class="price">295.00 USD</span>
                </div>
            </li>
            @foreach (\App\VehicleType::all() as $type)
            <li class="product text-center col-md-3 col-sm-6">
                <div class="visual imgAsBG" style="background-image: url('assets/img/prod-mas-7.jpg');">
                    <img src="storage/{{$type->name}}.jpg" style="max-width:100%;">
                    <div class="prodLay"></div>
                </div>
                <ul class="links">
                    <h6>See our offer</h6>
                    <li><a href="{{ route('types.index', $type->name) }}"><i class="xv-basic_eye"></i></a></li>
                </ul>
                <div class="productInfo">
                    <h6><a href="#">{{ trans('custom.'.$type->name) }}</a></h6>
                    <span class="price">{{ $type->vehicles->count() }} units avaliable</span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
