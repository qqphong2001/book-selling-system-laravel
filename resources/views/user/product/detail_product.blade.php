@extends('user.layouts.index')

@section('content')
    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">
                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">
                                                <div><img src="{{ $product->cover }}" class="simpleLens-big-image"
                                                        id="maincover" width="342px" height="342px"></div>
                                            </div>
                                            <div class="" style="display: flex">
                                                @foreach ($product_images as $product_image)
                                                    <div style="width: 50px;height:50px;padding:5px;cursor: pointer;">
                                                        <img src="{{ $product_image->image }}" alt="" width="100%"
                                                            height="100%" class="thumbnail">
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal view content -->
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>{{ $product->title }}</h3>
                                        <div class="aa-price-block">

                                            @if($product->discount > 0)

                                            <span class="aa-product-view-price"
                                                style="color: #C92127;font-size:30px;font-weight: 600;">
                                                {{ number_format($product->unitPrice - ($product->unitPrice * ($product->discount/100) ) , 0, ',', '.') }}??</span>

                                                <span
                                                class="aa-product-price" style="color: #888888"><del>  {{ number_format($product->unitPrice,0,'.',',') }}??</del></span>

                                                @else
                                            <span class="aa-product-view-price"
                                            style="color: #C92127;font-size:30px;font-weight: 600;">
                                            {{ number_format($product->unitPrice, 0, ',', '.') }}??</span>
                                               @endif

                                                <p>L?????t xem : {{$product->view}}</p>
                                            <p class="aa-product-avilability" style="margin: 20px 0">T??nh tr???ng:
                                                <span>{{ $product->unitStock > 0 ? 'C??n h??ng' : 'H???t h??ng' }}</span>
                                            </p>
                                        </div>
                                        <div class="aa-price-block" style="margin: 20px 0">
                                            <span class="aa-product-view-price">Nh?? xu???t b???n : <span>
                                                    {{ $product->name_publisher }}</span> </span>

                                        </div>

                                        <div class="aa-price-block" style="margin: 20px 0">
                                            <span class="aa-product-view-price">T??c gi??? : <span>
                                                    {{ $product->name_author }}</span> </span>

                                        </div>


                                        <div class="aa-price-block" style="margin: 20px 0">
                                            <span class="aa-product-view-price">H??nh th???c b??a : <span>
                                                    {{ $product->layout }}</span> </span>

                                        </div>



                                        <div class="aa-prod-view-bottom" style="margin-top: 100px">
                                            <a class="aa-add-to-cart-btn" href="#"
                                                style="color:#C92127;background-color:white;border:1px solid #C92127;border-radius:10px">Th??m
                                                v??o gi??? h??ng</a>
                                            <a class="aa-add-to-cart-btn" href="#"
                                                style="color:white;background-color:#C92127;border-radius:10px">Mua h??ng</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="aa-product-related-item" style="margin: 50px 0">
                            <h3>S???n ph???m li??n quan</h3>
                            <ul class="aa-product-catg aa-related-item-slider">
                                <!-- start single product item -->
                                @foreach ($product_genres as $product_genre)
                                    <li>
                                        <figure>
                                            <a class="aa-product-img"
                                                href="{{ url('/product/detail/' . $product_genre->id) }}"><img
                                                    src="{{ $product_genre->cover }}" width="100%"></a>

                                            <figcaption>
                                                <h4 class="aa-product-title"
                                                    href="{{ url('/product/detail/' . $product_genre->id) }}"><a
                                                        href="">{{ $product_genre->title }}</a></h4>

                                            </figcaption>
                                        </figure>
                                    </li>
                                @endforeach
                            </ul>
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
                                                                        <img src="img/view-slider/medium/polo-shirt-1.png"
                                                                            class="simpleLens-big-image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="simpleLens-thumbnails-container">
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                    data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                    data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                                                </a>
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                    data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                    data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                                                </a>

                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                    data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                    data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-4.png">
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
                                                            <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- / quick view modal -->
                        </div>
                        <div class="aa-product-details-bottom">

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description"
                                    style="background-color: white;margin:20px 0;border-radius:10px">
                                    <h3> <b>Th??ng tin s???n ph???m</b> </h3>

                                    <table>
                                        <tr>
                                            <th>M?? h??ng:</th>
                                            <td>{{ $product->isbn }}</td>
                                        </tr>


                                        <tr>
                                            <th>T??c gi???</th>
                                            <td>{{ $product->name_author }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ng?????i d???ch</th>
                                            <td>{{ $product->translatorName }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nh?? xu???t b???n</th>
                                            <td>{{ $product->name_publisher }}</td>
                                        </tr>
                                        <tr>
                                            <th>N??m xu???t b???n</th>
                                            <td> {{ date('d-m-Y', strtotime($product->publishDate)) }}</td>
                                        </tr>

                                        <tr>
                                            <th>Tr???ng l????ng</th>
                                            <td>{{ $product->weight }}</td>
                                        </tr>
                                        <tr>
                                            <th>K??nh th?????c bao b??</th>
                                            <td>{{ $product->hSize }} x {{ $product->wSize }}</td>
                                        </tr>
                                        <tr>
                                            <th>S??? l????ng</th>
                                            <td>{{ $product->numPages }}</td>
                                        </tr>
                                        <tr>
                                            <th>H??nh th???c</th>
                                            <td>{{ $product->layout }}</td>
                                        </tr>
                                    </table>



                                    <p>{!! html_entity_decode($product->description) !!}</p>

                                </div>

                            </div>
                        </div>
                        <!-- Related product -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        #description table tr th {
            width: 200px;
        }

        #description table tr {
            height: 40px;
        }
    </style>

    <script>
        const maincover = document.querySelector('#maincover')
        const thumbnails = document.querySelectorAll('.thumbnail')
        const srcs = maincover.getAttribute('src');
        thumbnails.forEach(e => {
            e.addEventListener('mouseover', function() {
                maincover.src = e.src
            })

            e.addEventListener('mouseout',function(){
                maincover.src =  srcs
            })
        })
    </script>
@endsection
