@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('admin/list_product') }}" style="color: white">Trờ về</a>
            </button>

            <h5 class="modal-title" id="">Edit - {{ $book->title }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{ url('admin/update_product/' . $book->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- <div class="card-body"> --}}
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Isbn</label>
                            <input type="text" class="form-control" id="" name="isbn" required
                                value="{{ $book->isbn }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Tựa đề</label>
                            <input type="text" class="form-control" id="" name="title"
                                value="{{ $book->title }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Số trang</label>
                            <input type="number" class="form-control" id="" name="numpages"
                                value="{{ $book->numPages }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Ngày xuất bản</label>
                            <input type="text" name="publishdate" id="Datepicker" class="form-control" required
                                value="{{ $book->publishDate }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">Loại bìa</label>
                                <select name="layout" class="form-control" required>
                                    <option value="Paperback" {{ $book->layout == 'Paperback' ? 'selected' : '' }}>Bìa cứng
                                    </option>
                                    <option value="Hardcover" {{ $book->layout == 'Hardcover' ? 'selected' : '' }}>Bìa mềm
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-sm-6" style="padding: unset;">
                        <label for="">Ảnh bìa</label>
                        <input type="file" name="photo" id="file-input">
                    </div>
                    <div class="row" id="image_preview" style="height50px">
                        <div class='col-md-2'>
                            <img src="{{ $book->cover }}" style='width:100%;height:100px' id="preview-img"
                                class='img-responsive' alt="">
                        </div>

                    </div>

                </div>

                <div class="my-3">
                    <div class="col-sm-6" style="padding: unset;">
                        <label for="">Ảnh nhỏ</label>
                        <input type="file" name="thumnails[]" id="file-inputs" multiple>
                    </div>
                    <div class="row" id="image_previews" style="height50px">
                        @php $count=0 @endphp
                        @foreach ($bookimages as $bookimage)
                            @php $count++ @endphp

                            <div class='col-md-2'>
                                <input type="hidden" value="{{ $bookimage->id }}" name={{ 'bookimage' . $count }}>
                                <img src="{{ $bookimage->image }}" style='width:100%;height:100px'
                                    class='img-responsive images' alt="">
                            </div>
                        @endforeach

                    </div>

                </div>



                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Trọng lượng</label>
                            <input type="text" name="weight" class="form-control" required value="{{ $book->weight }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Người dịch</label>
                            <input type="text" name="translatorname" class="form-control"
                                value="{{ $book->translatorName }}" required>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Chiều dài</label>
                            <input type="text" name="hsize" class="form-control" required
                                value="{{ $book->hSize }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Chiều rộng</label>
                            <input type="text" name="wsize" class="form-control" required
                                value="{{ $book->wSize }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Giá bán</label>
                            <input type="text" name="unitprice" class="form-control" required
                                value="{{ $book->unitPrice }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Số lượng</label>
                            <input type="text" name="unitstock" class="form-control" required
                                value="{{ $book->unitStock }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input type="text" name="discount" class="form-control" required
                                value="{{ $book->discount }}">
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="">Nhà xuất bản</label>
                            <div class="input-options">
                                <input type="text" name="publisher" value="0" hidden>
                                <input type="text" class="form-control publisher-text"
                                    value="{{ $book_publisher->name }}">
                                <div class="options" id="publisher-options">
                                    @foreach ($publishers as $publisher)
                                        <div class="option" id="{{ $publisher->id }}">{{ $publisher->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Tác giả</label>
                            <div class="input-options">
                                <input type="text" name="author" value="0" hidden>
                                <input type="text" class="form-control author-text" value="{{ $book_author->name }}">
                                <div class="options" id="author-options">
                                    @foreach ($authors as $author)
                                        <div class="option" id="{{ $author->id }}">{{ $author->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Thể loại</label>
                            <div class="input-options">
                                <input type="text" name="genre" value="0" hidden>
                                <input type="text" class="form-control genre-text" value="{{ $book_genre->name }}">
                                <div class="options" id="genre-options">
                                    @foreach ($genres as $genre)
                                        <div class="option" id="{{ $genre->id }}">{{ $genre->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="form-group ">
                    <label>Miêu tả</label>
                    <textarea id="summernote" name="description">{{ $book->description }}</textarea>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>



            </form>
        </div>
        <!-- /.card -->

    </div>


    <script>
        const fileInput = document.getElementById('file-input');
        const previewImg = document.getElementById('preview-img');
        const fileInputs = document.getElementById('file-inputs');
        const images = document.querySelectorAll('.images');

        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                previewImg.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(file);
        });


        fileInputs.addEventListener('change', function() {
            const files = this.files;
            const urls = [];

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.addEventListener('load', function() {
                    urls.push(reader.result);
                    if (urls.length === files.length) {
                        for (let j = 0; j < urls.length; j++) {
                            images[j].setAttribute('src', urls[j]);
                        }
                    }
                });

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
