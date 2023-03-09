@extends('user.layouts.index')

@section('content')
    <section id="aa-slider">
        <div class="aa-slider-area" style="padding:20px 150px;border-radius: 25px;display:flex;height:320px">
            <div id="sequence" class="seq" style="border-radius: 25px;width:70%;height:820px">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq
                                    src="https://cdn0.fahasa.com/media/magentothem/banner7/Hoisach_mainbanner_Slide_840x320.jpg"
                                    alt="Men slide img" />
                            </div>

                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq
                                    src="https://cdn0.fahasa.com/media/magentothem/banner7/VNPAYT323_840x320_fhs.jpg"
                                    alt="Wristwatch slide img" />
                            </div>

                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq
                                    src="https://cdn0.fahasa.com/media/magentothem/banner7/AZT03_slide_840x320.jpg"
                                    alt="Women Jeans slide img" />
                            </div>

                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq
                                    src="https://cdn0.fahasa.com/media/magentothem/banner7/WomanDay08-03T0323_840x320.jpg"
                                    alt="Shoes slide img" />
                            </div>

                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="https://cdn0.fahasa.com/media/magentothem/banner7/McBooksT3_840x320.jpg"
                                    alt="Male Female slide img" />
                            </div>

                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
            <div style="width:30%;display:flex;flex-direction: column; margin-left:10px">
                <div style="height:100%; margin: 10px 0;border-radius:10px">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/McBooksT3_392x156.jpg " width="100%"
                        height="100%" alt="" style="border-radius:10px">
                </div>
                <div style="height:100%; margin: 10px 0;border-radius:10px">
                    <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-02-2023/subbanerfs.jpg" width="100%"
                        height="120%" alt="" style="border-radius:10px">
                </div>

            </div>

        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo" style="margin-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row" style="
            flex-wrap: nowrap;
            display: flex;">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding" style="padding-right: 20px;">
                                <div class="aa-promo-left">
                                    <div class="aa-promo-banner">
                                        <img src="https://cdn0.fahasa.com/media/magentothem/banner7/1980T3_840x320.jpg"
                                            alt="img" style="border-radius:10px">

                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class="col-md-7  no-padding" style="display: flex;flex-wrap:nowrap">
                                <div class="aa-promo-right" style="display: flex;flex-wrap:nowrap">
                                   <div>
                                    <div class="aa-single-promo-right" style="margin: 2px ;width:100%;border-radius:10px">
                                        <div class="aa-promo-banner">
                                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/HoiSachT323_Bộ2_310x210png.png"
                                                alt="img" style="border-radius:10px">

                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right" style="margin: 2px ;width:100%;border-radius:10px">
                                        <div class="aa-promo-banner">
                                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/TuSachNguoiDiLamT123_Banner_310x210PNGThemeT323.jpg"
                                                alt="img" style="border-radius:10px">

                                        </div>
                                    </div>
                                </div>
                                    <div>
                                    <div class="aa-single-promo-right" style="margin: 2px ;width:100%;border-radius:10px">
                                        <div class="aa-promo-banner">
                                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/FAHASA 310x210.png"
                                                alt="img" style="border-radius:10px">

                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right" style="margin: 2px ;width:100%;border-radius:10px">
                                        <div class="aa-promo-banner">
                                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/AZT3_SmallBanner_310x210.png"
                                                alt="img" style="border-radius:10px">
                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                                    <li><a href="#women" data-toggle="tab">Women</a></li>
                                    <li><a href="#sports" data-toggle="tab">Sports</a></li>
                                    <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/polo-shirt-2.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/t-shirt-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/polo-shirt-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/polo-shirt-4.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/polo-shirt-5.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/polo-shirt-6.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/polo-shirt-2.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/man/t-shirt-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / men product category -->
                                    <!-- start women product category -->
                                    <div class="tab-pane fade" id="women">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-2.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-3.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-4.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-5.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>

                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-6.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-7.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/women/girl-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / women product category -->
                                    <!-- start sports product category -->
                                    <div class="tab-pane fade" id="sports">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-2.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-3.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-4.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-5.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-6.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-7.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/sports/sport-8.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- / sports product category -->
                                    <!-- start electronic product category -->
                                    <div class="tab-pane fade" id="electronics">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-1.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                        </h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-2.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-3.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-4.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-5.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-6.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-7.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span><span
                                                            class="aa-product-price"><del>$65.50</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="#">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="#"><img
                                                            src="{{ asset('asset/user') }}/img/electronics/electronic-8.png"
                                                            alt="polo shirt img"></a>
                                                    <a class="aa-add-card-btn"href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                                doller</a></h4>
                                                        <span class="aa-product-price">$45.50</span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                        title="Quick View" data-toggle="modal"
                                                        data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                            </li>
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Browse all Product <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                    <!-- / electronic product category -->
                                </div>
                                <!-- quick view modal -->
                                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <div class="row">
                                                    <!-- Modal view slider -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-slider">
                                                            <div class="simpleLens-gallery-container" id="demo-1">
                                                                <div class="simpleLens-container">
                                                                    <div class="simpleLens-big-image-container">
                                                                        <a class="simpleLens-lens-image"
                                                                            data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                            <img src="{{ asset('asset/user') }}/img/view-slider/medium/polo-shirt-1.png"
                                                                                class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="simpleLens-thumbnails-container">
                                                                    <a href="#"
                                                                        class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                        data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                        <img
                                                                            src="{{ asset('asset/user') }}/img/view-slider/thumbnail/polo-shirt-1.png">
                                                                    </a>
                                                                    <a href="#"
                                                                        class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                        data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                        <img
                                                                            src="{{ asset('asset/user') }}/img/view-slider/thumbnail/polo-shirt-3.png">
                                                                    </a>

                                                                    <a href="#"
                                                                        class="simpleLens-thumbnail-wrapper"
                                                                        data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                        data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                        <img
                                                                            src="{{ asset('asset/user') }}/img/view-slider/thumbnail/polo-shirt-4.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <h3>T-Shirt</h3>
                                                            <div class="aa-price-block">
                                                                <span class="aa-product-view-price">$34.99</span>
                                                                <p class="aa-product-avilability">Avilability: <span>In
                                                                        stock</span></p>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Officiis animi, veritatis quae repudiandae quod nulla porro
                                                                quidem, itaque quis quaerat!</p>
                                                            <h4>Size</h4>
                                                            <div class="aa-prod-view-size">
                                                                <a href="#">S</a>
                                                                <a href="#">M</a>
                                                                <a href="#">L</a>
                                                                <a href="#">XL</a>
                                                            </div>
                                                            <div class="aa-prod-quantity">
                                                                <form action="">
                                                                    <select name="" id="">
                                                                        <option value="0" selected="1">1</option>
                                                                        <option value="1">2</option>
                                                                        <option value="2">3</option>
                                                                        <option value="3">4</option>
                                                                        <option value="4">5</option>
                                                                        <option value="5">6</option>
                                                                    </select>
                                                                </form>
                                                                <p class="aa-prod-category">
                                                                    Category: <a href="#">Polo T-Shirt</a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                                <a href="#" class="aa-add-to-cart-btn">View
                                                                    Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Products section -->
    <!-- banner section -->
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="{{ asset('asset/user') }}/img/fashion-banner.jpg"
                                    alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular section -->
    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                <li><a href="#latest" data-toggle="tab">Latest</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men popular category -->
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-2.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-2.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/t-shirt-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-3.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-4.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-4.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / popular product category -->

                                <!-- start featured product category -->
                                <div class="tab-pane fade" id="featured">
                                    <ul class="aa-product-catg aa-featured-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-2.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-2.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/t-shirt-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-3.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-4.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-4.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / featured product category -->

                                <!-- start latest product category -->
                                <div class="tab-pane fade" id="latest">
                                    <ul class="aa-product-catg aa-latest-slider">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-2.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-2.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/t-shirt-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                            </figure>
                                            <figcaption>
                                                <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                                                <span class="aa-product-price">$45.50</span>
                                            </figcaption>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-3.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-4.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Lorem ipsum
                                                            doller</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/man/polo-shirt-4.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{ asset('asset/user') }}/img/women/girl-1.png"
                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn"href="#"><span
                                                        class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">This is Title</a>
                                                    </h4>
                                                    <span class="aa-product-price">$45.50</span><span
                                                        class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Compare"><span class="fa fa-exchange"></span></a>
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                    title="Quick View" data-toggle="modal"
                                                    data-target="#quick-view-modal"><span
                                                        class="fa fa-search"></span></a>
                                            </div>
                                            <!-- product badge -->
                                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                                <!-- / latest product category -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / popular section -->
    <!-- Support section -->
    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>FREE SHIPPING</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>30 DAYS MONEY BACK</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>SUPPORT 24/7</h4>
                                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Support section -->
    <!-- Testimonial -->
    <section id="aa-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-testimonial-area">
                        <ul class="aa-testimonial-slider">
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img"
                                        src="{{ asset('asset/user') }}/img/testimonial-img-2.jpg"
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Allison</p>
                                        <span>Designer</span>
                                        <a href="#">Dribble.com</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img"
                                        src="{{ asset('asset/user') }}/img/testimonial-img-1.jpg"
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>KEVIN MEYER</p>
                                        <span>CEO</span>
                                        <a href="#">Alphabet</a>
                                    </div>
                                </div>
                            </li>
                            <!-- single slide -->
                            <li>
                                <div class="aa-testimonial-single">
                                    <img class="aa-testimonial-img"
                                        src="{{ asset('asset/user') }}/img/testimonial-img-3.jpg"
                                        alt="testimonial img">
                                    <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                        possimus, facere, quidem qui.</p>
                                    <div class="aa-testimonial-info">
                                        <p>Luner</p>
                                        <span>COO</span>
                                        <a href="#">Kinatic Solution</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Testimonial -->

    <!-- Latest Blog -->
    <section id="aa-latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-latest-blog-area">
                        <h2>LATEST BLOG</h2>
                        <div class="row">
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ asset('asset/user') }}/img/promo-banner-1.jpg"
                                                alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ asset('asset/user') }}/img/promo-banner-3.jpg"
                                                alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- single latest blog -->
                            <div class="col-md-4 col-sm-4">
                                <div class="aa-latest-blog-single">
                                    <figure class="aa-blog-img">
                                        <a href="#"><img src="{{ asset('asset/user') }}/img/promo-banner-1.jpg"
                                                alt="img"></a>
                                        <figcaption class="aa-blog-img-caption">
                                            <span href="#"><i class="fa fa-eye"></i>5K</span>
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                                            <a href="#"><i class="fa fa-comment-o"></i>20</a>
                                            <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-blog-info">
                                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem
                                            quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus
                                            animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p>
                                        <a href="#" class="aa-read-mor-btn">Read more <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
