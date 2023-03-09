@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('admin/list_product') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Edit - {{ $book->title }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{ url('admin/update_product/'.$book->id) }}" enctype="multipart/form-data">
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
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" name="title"
                                value="{{ $book->title }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">NumPages</label>
                            <input type="number" class="form-control" id="" name="numpages"
                                value="{{ $book->numPages }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Publish-Date</label>
                            <input type="text" name="publishdate" id="Datepicker" class="form-control" required
                                value="{{ $book->publishDate }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">Layout</label>
                                <select name="layout" class="form-control" required>
                                    <option value="Paperback" {{ $book->layout == 'Paperback' ? 'checker' : '' }}>Paperback
                                    </option>
                                    <option value="Hardcover" {{ $book->layout == 'Hardcover' ? 'checker' : '' }}>Hardcover
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="col-sm-6" style="padding: unset;">
                        <label for="">Cover</label>
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
                        <label for="">Thumbnail</label>
                        <input type="file" name="thumnails[]" id="file-inputs" multiple>
                    </div>
                    <div class="row" id="image_previews" style="height50px">
                        @php $count=0 @endphp
                        @foreach ($bookimages as $bookimage)
                            @php $count++ @endphp

                            <div class='col-md-2'>
                                <input type="hidden" value="{{$bookimage->id}}" name={{"bookimage".$count}}>
                                <img src="{{ $bookimage->image }}" style='width:100%;height:100px' class='img-responsive images'
                                    alt="" >
                            </div>

                        @endforeach

                    </div>

                </div>



                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Weight</label>
                            <input type="text" name="weight" class="form-control" required value="{{$book->weight}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Translator Name</label>
                            <input type="text" name="translatorname" class="form-control" value="{{$book->translatorName}}" required>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Height Size</label>
                            <input type="text" name="hsize" class="form-control" required value="{{$book->hSize}}" >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Weight Size</label>
                            <input type="text" name="wsize" class="form-control" required value="{{$book->wSize}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Unit Price</label>
                            <input type="text" name="unitprice" class="form-control" required value="{{$book->unitPrice}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Unit Stock</label>
                            <input type="text" name="unitstock" class="form-control" required value="{{$book->unitStock}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Discount</label>
                            <input type="text" name="discount" class="form-control" required value="{{$book->discount}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Publisher</label>
                            <input type="text" name="publisher" class="form-control" required value="{{$book->publisher_id}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control" required value="{{$book->author_id}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Genre</label>
                            <input type="text" name="genre" class="form-control" required value="{{$book->genre_id}}">
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <label>Description</label>
                    <textarea id="summernote" name="description">{{$book->description}}</textarea>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
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
