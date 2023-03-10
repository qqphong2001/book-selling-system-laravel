@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('admin/list_product') }}" style="color: white">Back</a>
            </button>

            <h5 class="modal-title" id="">Edit - {{ $account->title }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{ url('admin/update_product/'.$account->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- <div class="card-body"> --}}
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control" id="" name="id" required
                                value="{{ $account->id }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required value="{{$account->name}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required value="{{$account->email}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="1" {{ $book->layout == 'Paperback' ? 'checker' : '' }}>Paperback
                                    </option>
                                    <option value="Hardcover" {{ $book->layout == 'Hardcover' ? 'checker' : '' }}>Hardcover
                                    </option>
                                </select>


                            <input type="text" name="author" class="form-control" required value="{{$account->author_id}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Genre</label>
                            <input type="text" name="genre" class="form-control" required value="{{$account->genre_id}}">
                        </div>
                    </div>
                </div>



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
