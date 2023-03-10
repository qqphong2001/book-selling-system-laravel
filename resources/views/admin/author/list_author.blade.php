@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách tác giả</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách tác giả</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalScrollableAcc">
                                Thêm tác giả
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollableAcc" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog  modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Thêm tác giả</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('admin/add_author') }}"
                                                enctype="multipart/form-data">
                                                <!-- form start -->
                                                @csrf
                                                {{-- <div class="card-body"> --}}
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Tên tác giả</label>
                                                            <input type="text" class="form-control" id=""
                                                                name="name">
                                                        </div>
                                                    </div>


                                                <div class="form-group ">
                                                    <label>Miêu tả</label>
                                                    <textarea id="summernote" name="description"></textarea>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.card -->

                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên tác giả</th>
                                        <th>Miêu tả</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($authors as $author )
                                    <tr class="product-container-">
                                        <td> {{$author->id}} </td>

                                        <td> {{$author->name_author}}</td>
                                        <td> {{$author->description_author}}</td>

                                        <td>

                                            <button class="btn btn-danger"   onclick="if (window.confirm('Bạn có muốn xóa ?')) { location.href='{{ url('admin/delete_author/'.$author->id) }}'; }">
                                                Xóa
                                            </button>


                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <style>
        a{
            color: white
        }
    </style>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        function preview_images() {
            var total_file = document.getElementById("photo").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append(`
                <div class='col-md-3'>
                    <img style='width:100%' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

        function resetForm() {
            $("#image_preview").html("");
            return true;
        }
    </script>
    <script>
        $(function() {
            $("#Datepicker").datepicker();
            $("#endDatepicker").datepicker();
        });
    </script>
@endsection
