@extends('admin.layouts.layout')
@section('admin_content')
    <div class="modal-content">
        <div class="modal-header"style="justify-content: space-between">
            <button type="button" class="btn btn-primary">
                <a href="{{ url('/admin') }}" style="color: white">Trờ về</a>
            </button>

            <h5 class="modal-title" id="">Chỉnh sửa thông tin nhân viên</h5>
        </div>
        <div class="modal-body">

            <!-- form start -->
            <form method="POST" action="{{ url('admin/update_employee/'.Auth::user()->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- <div class="card-body"> --}}

                    <div class="row">

                        <div class="col-sm-6" style="padding: unset;">
                            <label for="">Hình đại diện</label>
                            <img src="{{ $employee !== null ? $employee->avatar : '' }}" style='width:200px;height:200px;display:block' id="preview-imgavatar"
                            class='img-responsive' alt="">

                            <input type="file" name="avatar" id="file-avatar" style="margin: 20px 0">
                        </div>





                    </div>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control"  required
                                value="{{ Auth::user()->id }}" disabled>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" required
                                value="{{  Auth::user()->email }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Họ</label>
                            <input type="text" name="firstname" class="form-control" required value={{ $employee !== null ? $employee->firstName : '' }}>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" name="lastname" class="form-control" required value="{{$employee !== null ?  $employee->lastName : '' }}">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Giới tính</label><br>
                                <input type="checkbox" id="vehicle1" name="gender" value="1" {{  $employee !== null ?  $employee->gender == 1 ? 'checked':'' : '' }} >
                                <label for="vehicle1"> Nam</label><br>
                                <input type="checkbox" id="vehicle2" name="gender" value="0" {{  $employee !== null ?  $employee->gender == 0 ? 'checked':'' : '' }}>
                                <label for="vehicle2"> Nữ</label><br>
                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Ngày sinh</label>
                            <input type="text" name="dob" id="dobss" class="form-control" required value={{$employee !== null ? $employee->dob : ''}}>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" name="phonenumber" class="form-control" required value="{{$employee !== null ? $employee->phoneNumber : '' }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" required value="{{$employee !== null ? $employee->address : '' }}">
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
        const fileInput = document.getElementById('file-avatar');
        const previewImg = document.getElementById('preview-imgavatar');


        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                previewImg.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(file);
        });

    </script>

@endsection
