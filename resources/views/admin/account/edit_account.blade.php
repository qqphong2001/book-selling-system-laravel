@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('admin/list_account') }}" style="color: white">Trờ về</a>
            </button>

            <h5 class="modal-title" id="">Chỉnh sửa - {{ $account->email }}</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{ url('admin/update_account/' . $account->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- <div class="card-body"> --}}
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control" id="" name="id" required
                                value="{{ $account->id }}" disabled>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required
                                value="{{ $account->email }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" name="name" class="form-control" required value="{{ $account->name }}">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Vai trò</label>
                            <select name="role" class="form-control" required>

                                @foreach($roles as $role)
                                     <option value="{{$role->id_role}}" {{ $role->id_role == $account_role->role_id ? 'selected' : '' }}>{{$role->name_role}}
                                     </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Hoạt động</label>
                            <select name="status" class="form-control" required>
                                <option value="1" {{ $account->status == '1' ? 'selected' : '' }}>Hoạt động
                                </option>
                                <option value="0" {{ $account->status == '0' ? 'selected' : '' }}>Không hoạt động
                                </option>
                            </select>
                        </div>
                    </div>
                </div>



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
