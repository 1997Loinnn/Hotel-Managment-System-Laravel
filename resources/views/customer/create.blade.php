@extends('layouts.layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Customer
                <a href="{{ url('dashboard/customer') }}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif

            @if (Session::has('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            <div class="table-responsive">
                <form action="{{url('dashboard/customer')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">                    
                        <thead>
                          <tr>
                              <th>Full Name <span class="text-danger">*</span></th>
                              <td><input name="full_name" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                              <th>Email <span class="text-danger">*</span></th>
                              <td><input name="email" type="email" class="form-control"></td>
                          </tr>
                          <tr>
                              <th>Password <span class="text-danger">*</span></th>
                              <td><input name="password" type="password" class="form-control"></td>
                          </tr>
                          <tr>
                              <th>Mobile <span class="text-danger">*</span></th>
                              <td><input name="mobile" type="text" class="form-control"></td>
                          </tr>
                          <tr>
                              <th>Photo</th>
                              <td><input name="photo" type="file"></td>
                          </tr>
                          <tr>
                              <th>Address</th>
                              <td><textarea name="address" class="form-control"></textarea></td>
                          </tr>
                          <tr>
                              <td colspan="2">
                                  <input type="submit" class="btn btn-primary">
                              </td>
                          </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@section('scripts')
    
<!-- Custom styles for this page -->
<link href="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="{{asset('admin')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin')}}/js/demo/datatables-demo.js"></script>
@endsection

@endsection
