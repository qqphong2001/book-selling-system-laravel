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
                                        <div class="aa-single-promo-right"
                                            style="margin: 2px ;width:100%;border-radius:10px">
                                            <div class="aa-promo-banner">
                                                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/HoiSachT323_Bộ2_310x210png.png"
                                                    alt="img" style="border-radius:10px">

                                            </div>
                                        </div>
                                        <div class="aa-single-promo-right"
                                            style="margin: 2px ;width:100%;border-radius:10px">
                                            <div class="aa-promo-banner">
                                                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/TuSachNguoiDiLamT123_Banner_310x210PNGThemeT323.jpg"
                                                    alt="img" style="border-radius:10px">

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="aa-single-promo-right"
                                            style="margin: 2px ;width:100%;border-radius:10px">
                                            <div class="aa-promo-banner">
                                                <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/FAHASA 310x210.png"
                                                    alt="img" style="border-radius:10px">

                                            </div>
                                        </div>
                                        <div class="aa-single-promo-right"
                                            style="margin: 2px ;width:100%;border-radius:10px">
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

    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" style="background-color: white;padding:20px;border-radius:10px;height:395px">
                        <div class="aa-popular-category-area">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active" style="float: left"><a href="#popular" data-toggle="tab">Danh mục sản phẩm</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        @foreach($genres as $genres)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img
                                                        src="{{$genres->image }}"
                                                        alt="polo shirt img" width="100%"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$genres->name_genre}}</a></h4>
                                                </figcaption>
                                            </figure>


                                        </li>

                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="aa-popular-category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" style="background-color: white;padding:20px;border-radius:10px;height:460px;border-radius:10px">
                        <div class="aa-popular-category-area">

                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab" style="background-color: #FCDDEF;padding: 0 20px;border-radius:10px">
                                <li class="" style="float: left">
                                    <div style="display: inline-block;line-height: 43px;text-align:center">

                                    <img src="https://cdn0.fahasa.com/skin/frontend/base/default/images/ico_dealhot.png" alt="" style="margin-bottom: 6px">
                                </div>

                                    <a href="#popular" data-toggle="tab" style="display: inline-block;border:none;margin:0;padding:0">Sản phẩm nổi bật</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="popular">
                                    <ul class="aa-product-catg aa-popular-slider">
                                        <!-- start single product item -->
                                        @foreach($product_hots as $product_hot)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="{{url('/product/detail/'.$product_hot->id)}}"><img
                                                        src="{{$product_hot->cover}}"
                                                        alt="polo shirt img" width="100%"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="{{url('/product/detail/'.$product_hot->id)}}"> {{$product_hot->title}} </a></h4>

                                                </figcaption>
                                            </figure>


                                        </li>

                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="#" style="position: absolute;
                                    top: 390px;left:500px;border:2px solid #c92127;background-color: white;color:#c92127
                                    ;font-weight:600;border-radius:10px;
                                    ">Xem thêm <span
                                        class="fa fa-long-arrow-right"></span></a>

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
                    <div class="row"  style="background-color: white;padding:20px;border-radius:10px;height:460px;border-radius:10px">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab" style="background-color: #FCDDEF;padding: 0 20px;border-radius:10px">
                                    <li class="active" style="float: left">
                                        <li class="" style="float: left">
                                            <div style="display: inline-block;line-height: 43px;text-align:center">

                                            <img src="https://cdn0.fahasa.com/media/wysiwyg/icon-menu/ico_flashsale@3x.png" width="24px" height="24px" alt="" style="margin-bottom: 6px">
                                        </div>

                                        <a href="#men" data-toggle="tab" style="display: inline-block;border:none;margin:0;padding:0">Đang được giảm giá</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            @foreach($product_discounts as $product_discount)

                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="{{url('/product/detail/'.$product_discount->id)}}"><img
                                                            src="{{$product_discount->cover}}"
                                                            alt="polo shirt img"  width="100%"></a>

                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="{{url('/product/detail/'.$product_discount->id)}}">{{$product_discount->title}}</a>
                                                        </h4>
                                                        <span class="aa-product-price">{{ number_format($product_discount->unitPrice - ($product_discount->unitPrice * ($product_discount->discount/100)) ,0,'.',',')  }} đ</span>
                                                        <br>
                                                        <span
                                                            class="aa-product-price" style="color: #888888"><del>  {{ number_format($product_discount->unitPrice,0,'.',',') }}đ</del></span>
                                                    </figcaption>
                                                </figure>

                                                <span class="aa-badge aa-sale" href="#">-{{$product_discount->discount}}%</span>
                                            </li>

                                            @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="#" style="position: absolute;
                                        top: 390px;left:500px;border:2px solid #c92127;background-color: white;color:#c92127
                                        ;font-weight:600;border-radius:10px;
                                        ">Xem thêm <span
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
