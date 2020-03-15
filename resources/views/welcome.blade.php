@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <br>
            <br>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
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
        <div class="col-md-6">
            <div class="noPad shortcodeBanners">
                <div class="allbanners">
                    <section class="xvBanners style1 clearfix">
                        <div class="container">
                            <header class="text-center">
                                <h3>New arrivals</h3>
                            </header>
                            <div class="xvBanner imgAsBG" style='background-image: url("assets/img/banner7.jpg");'>
                                <img src="storage/Flags/Canada.png" alt="asd">
                                <div class="overlay"></div>
                                <div class="overlayInner">
                                    <span class="head">New machinery</span>
                                    <span class="tag">shop now</span>
                                </div>
                            </div>
                            <div class="xvBanner imgAsBG" style='background-image: url("assets/img/banner8.jpg");'>
                                <img src="storage/Flags/Sweden.png" alt="asd">
                                <div class="overlay"></div>
                                <div class="overlayInner">
                                    <span class="head">New trucks</span>
                                    <span class="tag">explore styles</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>
@endsection
