@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <!--div class="col-md-2">
            <div class="noPad shortcodeBanners">
                <div class="allbanners">
                    <section class="xvBanners style1 clearfix">
                        <div class="container">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item products style2 style-demo1 space-30 active">
                                    <img class="d-block" src="{{ url('storage/memphis.jpg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('storage/Flags/France.png') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('storage/Flags/Canada.png') }}" alt="Third slide">
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div-->
        <div class="col-md-8">
            <section class="xvPortfolio styleLg">
                <div class="container">
                    <!--div class="xvFilter clearfix">
                        <ul class="folioFilter custom-filter">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".filter1" href="#">Applications</a></li>
                            <li><a data-filter=".filter2" href="#">Illustration</a></li>
                            <li><a data-filter=".filter3" href="#">logo</a></li>
                            <li><a data-filter=".filter4" href="#">Music</a></li>
                            <li><a data-filter=".filter5" href="#">Print</a></li>
                            <li><a data-filter=".filter6" href="#">Video</a></li>
                        </ul>
                        <ul class="changePortfoliostyle">
                            <li class="active"><a class="foliostyleLg" href="#"><img src="assets/img/icons/grid-s.png" alt=""></a></li>
                            <li><a class="foliostyleMd" href="#"><img src="assets/img/icons/grid-small.png" alt=""></a></li>
                            <li><a class="foliostyleSm" href="#"><img src="assets/img/icons/grid.png" alt=""></a></li>
                        </ul>
                    </div-->
                    <ul class="portfolioWrap custom-filter-elements clearfix">
                        <li class="portfolioItem filter-active filter-item filter1" data-sequence="1">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/10.jpg&quot;);">
                                    <img src="storage/tractor.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter1 folio-last" data-sequence="2">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/11.jpg&quot;);">
                                    <img src="storage/truck.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter1" data-sequence="3">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/12.jpg&quot;);">
                                    <img src="storage/tank-trailer.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter3 folio-last" data-sequence="4">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/13.jpg&quot;);">
                                    <img src="storage/tank-container.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter4" data-sequence="5">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/14.jpg&quot;);">
                                    <img src="storage/trailer.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter5 folio-last" data-sequence="6">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/15.jpg&quot;);">
                                    <img src="storage/drawbar-trailer.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter2" data-sequence="7">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/16.jpg&quot;);">
                                    <img src="storage/van.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolioItem filter-active filter-item filter6 folio-last" data-sequence="8">
                            <div class="folioInner">
                                <div class="visual imgAsBG" style="background-image: url(&quot;assets/img/unsplash/17.jpg&quot;);">
                                    <img src="storage/machinery.jpg" alt="asd">
                                    <div class="folioLay"></div></div>
                                <div class="folioInfo">
                                    <div class="infoInner">
                                        <h5>Summer fashion 2015</h5>
                                        <ul class="tag">
                                            <li>fashion</li>
                                            <li>business</li>
                                        </ul>
                                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                                        <ul class="stats">
                                            <li><a href="#"><i class="xv-basic_share"></i>share</a></li>
                                            <li><a href="#"><i class="xv-basic_heart"></i>560</a></li>
                                            <li><a href="#"><i class="xv-basic_message"></i>34</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <a href="#" class="loadmore btn btn-default">Loadmore</a>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <section class="text-center">
                <div class="container">
                    <ul class="products style2 style-demo1 space-30 clearfix">
                        <li class="product text-center">
                            <div class="productInfo">
                                <h3><a href="#">Alquílenos</a></h3>
                                <ul class="pricestyle">
                                    <li>Semanas</li>
                                    <li>Meses</li>
                                </ul>
                            </div>
                            <div class="slideHover left">
                            </div>
                            <div class="slideHover right">
                            </div>
                            <div class="slick-carousel bags slick-initialized slick-slider" data-slides-scroll="1" data-dots="false" data-prev="xv-arrows_left" data-next="xv-arrows_right" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-nav="false" data-center="true">
                                <div aria-live="polite" class="slick-list draggable" style="padding: 0px 50px;">
                                    <div class="slick-track" style="opacity: 1; width: 1820px; left: -520px;" role="listbox">
                                        <figure class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 260px;" tabindex="-1"><img src="assets/img/bag3.png" alt="Ravish Demo Content"></figure>
                                        <figure class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 260px;" tabindex="-1"><img src="assets/img/bag1.png" alt="Ravish Demo Content"></figure>
                                        <figure class="slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" style="width: 260px;" tabindex="-1" role="option" aria-describedby="slick-slide10"><img src="storage/tractor.jpg" alt="Ravish Demo Content"></figure>
                                        <figure class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 260px;" tabindex="-1" role="option" aria-describedby="slick-slide11"><img src="assets/img/bag3.png" alt="Ravish Demo Content"></figure><figure class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 260px;" tabindex="-1" role="option" aria-describedby="slick-slide12"><img src="assets/img/bag1.png" alt="Ravish Demo Content"></figure>
                                        <figure class="slick-slide slick-cloned slick-center" data-slick-index="3" aria-hidden="true" style="width: 260px;" tabindex="-1"><img src="assets/img/bag2.png" alt="Ravish Demo Content"></figure>
                                        <figure class="slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 260px;" tabindex="-1"><img src="assets/img/bag3.png" alt="Ravish Demo Content"></figure>
                                    </div>
                                </div>
                            </div>
                            <!--ul class="links">
                                <li><a href="#"><i class="xv-basic_heart"></i></a></li>
                                <li><a class="add_to_cart_button" href="#"><i class="xv-ecommerce_cart_content"></i></a></li>
                            </ul-->
                        </li>
                    </ul>
                </div>
            </section>
            <div class="noPad shortcodeBanners">
                <div class="allbanners">
                    <section class="xvBanners style1 clearfix">
                        <div class="container">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item products style2 style-demo1 space-30 active">
                                    <img class="d-block" src="{{ url('storage/tractor.jpg') }}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('storage/van.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('storage/machinery.jpg') }}" alt="Third slide">
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
