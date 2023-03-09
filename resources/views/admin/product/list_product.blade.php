@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List-product</li>
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
                                Add
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollableAcc" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog  modal-lg modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Add</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('admin/add_product') }}"
                                            enctype="multipart/form-data">
                                                <!-- form start -->
                                                @csrf
                                                {{-- <div class="card-body"> --}}
                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Isbn</label>
                                                            <input type="text" class="form-control" id=""
                                                                name="isbn" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control" id=""
                                                                name="title">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">NumPages</label>
                                                            <input type="number" class="form-control" id=""
                                                                name="numpages">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Publish-Date</label>
                                                            <input type="text" name="publishdate" id="Datepicker"
                                                                class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label for="">Layout</label>
                                                                <select name="layout" class="form-control" required>
                                                                    <option value="Paperback">Paperback</option>
                                                                    <option value="Hardcover">Hardcover</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="">
                                                    <div class="col-sm-6" style="padding: unset;">
                                                        <label for="">Cover</label>
                                                        <input type="file" name="photo" id="photo"
                                                            onchange="preview_images();">
                                                    </div>
                                                    <div class="row" id="image_preview" style="height50px"> </div>

                                                </div>

                                                <div class="my-3">
                                                    <div class="col-sm-6" style="padding: unset;">
                                                        <label for="">Thumbnail</label>
                                                        <input type="file" name="thumnails[]" id="photos"
                                                            onchange="preview_imagess();" multiple>
                                                    </div>
                                                    <div class="row" id="image_previews" style="height50px"></div>

                                                </div>



                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Weight</label>
                                                            <input type="text" name="weight"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Translator Name</label>
                                                            <input type="text" name="translatorname"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Height Size</label>
                                                            <input type="text" name="hsize"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>  <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Weight Size</label>
                                                            <input type="text" name="wsize"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Unit Price</label>
                                                            <input type="text" name="unitprice"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>  <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Unit Stock</label>
                                                            <input type="text" name="unitstock"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Discount</label>
                                                            <input type="text" name="discount"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>  <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Publisher</label>
                                                            <input type="text" name="publisher"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Author</label>
                                                            <input type="text" name="author"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>  <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="">Genre</label>
                                                            <input type="text" name="genre"
                                                            class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label>Description</label>
                                                    <textarea id="summernote" name="description"></textarea>

                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Add</button>
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
                                        <th>Title</th>
                                        <th>Unit Price</th>
                                        <th>Untit Stock</th>
                                        <th>Cover</th>
                                        <th>Available</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="product-container-">
                                        <td></td>
                                        <td style="text-transform: capitalize"> </td>
                                        <td></td>
                                        <td></td>

                                        <td style="vertical-align: middel">
                                            <img src="" alt="" width="100px" height="100px">
                                        </td>
                                        <td>
                                            yes
                                        </td>

                                        <td>
                                            <button class="btn btn-info" >

                                                <a href="{{ url('admin/detail-product/') }}">Detail </a>


                                            </button>

                                            <button class="btn btn-success">
                                                <a href="{{ url('admin/edit-product/') }}">Edit </a>

                                            </button>

                                            <button class="btn btn-danger">

                                                <a href="{{ url('admin/delete-product/') }}">Delete</i></a>

                                            </button>
                                        </td>
                                    </tr>



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
                    <img style='width:100%;height:100px' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
                </div>`);
            }
        }

        function preview_imagess() {
            var total_file = document.getElementById("photos").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_previews').append(`
                <div class='col-md-3'>
                    <img style='width:100%;height:100px' class='img-responsive' src='${URL.createObjectURL(event.target.files[i])}'>
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
