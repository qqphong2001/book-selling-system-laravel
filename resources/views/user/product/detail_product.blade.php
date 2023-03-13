@extends('user.layouts.index')

@section('content')
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="aa-product-details-area">

            <div class="aa-product-details-content" style="width: 100%;">
              <div class="box">
                <div class="row">
                  <!-- Modal view slider -->
                  <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="aa-product-view-slider">
                      <div id="demo-1" class="simpleLens-gallery-container">
                        <div class="simpleLens-container">
                          <div><img src="{{ $product->cover }}" class="simpleLens-big-image" id="maincover" width="300px"
                              height="320px"></div>
                        </div>
                        <div style="display: flex; margin: 5px 0">
                          @foreach ($product_images as $product_image)
                            <div class="slider-img" style="">
                              <img 
                                class="thumbnail"
                                src="{{ $product_image->image }}" alt="" width="100%" height="100%">
                            </div>
                          @endforeach
  
  
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal view content -->
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="aa-product-view-content">
                      <h3 style="font-weight: bold;">{{ $product->title }}</h3>
  
                      <div class="aa-price-block">
  
                        @if ($product->discount > 0)
                          <span class="aa-product-view-price" style="color: #FF6767;font-size:30px;font-weight: 600;">
                            {{ number_format($product->unitPrice - $product->unitPrice * ($product->discount / 100), 0, ',', '.') }}đ</span>
  
                          <span class="aa-product-price" style="color: #888888"><del>
                              {{ number_format($product->unitPrice, 0, '.', ',') }}đ</del></span>
                        @else
                          <span class="aa-product-view-price" style="color: #FF6767;font-size:30px;font-weight: 600;">
                            {{ number_format($product->unitPrice, 0, ',', '.') }}đ</span>
                        @endif
  
                      </div>
                      
                      <div class="aa-price-block" style="margin: 10px 0">
                        <span class="h5">Lượt xem : </span> 
                        <span>{{ $product->view }} <i class="fa fa-eye"></i></span>
                      </div>

                      <div class="aa-price-block">
                        <div class="product-ranking-box">
                          @for ($i = 1; $i <= 5; $i++)
                            @if ($i < $product->ranking)
                              <i class='bx bxs-star'></i>
                            @elseif ($i - $product->ranking == 0.5)
                              <i class='bx bxs-star-half'></i>
                            @else
                              <i class='bx bx-star'></i>
                            @endif
                          @endfor
                          <span>{{ $product->ranking }}</span>
                        </div>
                      </div>
                      
                      <div class="aa-price-block" style="margin: 10px 0">
                        <span class="h5">Tình trạng : </span> 
                        <span style="font-weight: bold;">{{ $product->unitStock > 0 ? 'Còn hàng' : 'Hết hàng' }}</span>
                      </div>

                      <div class="aa-price-block" style="margin: 10px 0">
                        <span class="h5">Nhà xuất bản : </span> 
                        <span style="font-weight: bold;">{{ $product->name_publisher }}</span>
                      </div>
  
                      <div class="aa-price-block" style="margin: 10px 0">
                        <span class="h5">Tác giả : </span>
                        <span style="font-weight: bold;">{{$product->name_author }}</span>
                      </div>
  
                      <div class="aa-price-block" style="margin: 10px 0">
                        <span class="aa-product-view-price">Hình thức bìa : </span>
                        <span style="font-weight: bold;">{{ $product->layout }}</span>
                      </div>
  
                      <div class="aa-prod-view-bottom" style="margin: 10px 0">
                        <a 
                          class="aa-add-to-cart-btn" href="#"
                          style="color:#FF6767; background-color:white; border:1px solid #FF6767; border-radius:10px"
                        >Thêm vào giỏ hàng</a>
  
                        <a 
                          class="aa-add-to-cart-btn" 
                          href="#"
                          style="color:white; background-color:#FF6767; border-radius:10px"
                        >Mua ngay</a>
  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="aa-product-related-item">
              <div class="box">
                <p class="title">Sản phẩm liên quan</p>
                <ul class="aa-product-catg aa-related-item-slider">
                  <!-- start single product item -->
                  @foreach ($product_genres as $product_genre)
                    <li>
                      <figure>
                        <a class="aa-product-img" href="{{ url('/product/detail/' . $product_genre->id) }}"><img
                            src="{{ $product_genre->cover }}" width="100%"></a>
  
                        <figcaption>
                          <h4 class="aa-product-title" href="{{ url('/product/detail/' . $product_genre->id) }}"><a
                              href="">{{ $product_genre->title }}</a></h4>
  
                        </figcaption>
                      </figure>
                    </li>
                  @endforeach
                </ul>
                <!-- quick view modal -->
                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="row">
                          <!-- Modal view slider -->
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="aa-product-view-slider">
                              <div class="simpleLens-gallery-container" id="demo-1">
                                <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image"
                                      data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                      <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
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
                                <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add
                                  To Cart</a>
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
            </div>

            <div class="aa-product-details-bottom">

              <div class="box">
               
                  <p class="title">Thông tin sản phẩm</p>

                  <table class="table">
                    <tr>
                      <th>Mã hàng:</th>
                      <td>{{ $product->isbn }}</td>
                    </tr>
                    <tr>
                      <th>Tác giả</th>
                      <td>{{ $product->name_author }}</td>
                    </tr>
                    <tr>
                      <th>Người dịch</th>
                      <td>{{ $product->translatorName }}</td>
                    </tr>
                    <tr>
                      <th>Nhà xuất bản</th>
                      <td>{{ $product->name_publisher }}</td>
                    </tr>
                    <tr>
                      <th>Năm xuất bản</th>
                      <td> {{ date('d-m-Y', strtotime($product->publishDate)) }}</td>
                    </tr>
                    <tr>
                      <th>Trọng lương</th>
                      <td>{{ $product->weight }}</td>
                    </tr>
                    <tr>
                      <th>Kính thước bao bì</th>
                      <td>{{ $product->hSize }} x {{ $product->wSize }}</td>
                    </tr>
                    <tr>
                      <th>Số lương</th>
                      <td>{{ $product->numPages }}</td>
                    </tr>
                    <tr>
                      <th>Hình thức</th>
                      <td>{{ $product->layout }}</td>
                    </tr>
                  </table>

                  <p>{!! html_entity_decode($product->description) !!}</p>

              </div>

              <div class="box">
                <p class="title">Đánh giá sản phẩm</p>

                <hr>
                <div class="comments-container"></div>
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

      e.addEventListener('mouseout', function() {
        maincover.src = srcs
      })
    })
  </script>
@endsection
