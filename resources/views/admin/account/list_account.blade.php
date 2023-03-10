@extends('admin.layouts.layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Account List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List-Account</li>
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




                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Active</th>
                                        <th>Verify</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($accounts as $account )
                                    <tr class="product-container-">
                                        <td> {{$account->id}} </td>
                                        <td> {{$account->name}}</td>
                                        <td> {{$account->email}}</td>
                                        <td> {{$account->role == 1 ? 'user' : 'admin'}}</td>
                                        <td> {{$account->status == 0 ? 'not active' : 'active'}}</td>
                                        <td> {{$account->email_verified_at !== null ? 'verified' : 'not verified'}}</td>
                                        <td>
                                            <button class="btn btn-info">
                                                <a href="{{ url('admin/edit_account/'.$account->id) }}">Edit</i></a>
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
