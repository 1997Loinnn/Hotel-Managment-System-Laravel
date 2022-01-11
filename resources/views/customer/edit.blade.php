@extends('layouts.layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Customer
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
                <form action="{{url('dashboard/customer/'.$data->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">                    
                        <thead>
                            <tr>
                                <th>Full Name <span class="text-danger">*</span></th>
                                <td><input name="full_name" value="{{$data->full_name}}" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Email <span class="text-danger">*</span></th>
                                <td><input name="email" value="{{$data->email}}" type="email" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Mobile <span class="text-danger">*</span></th>
                                <td><input name="mobile" value="{{$data->mobile}}" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    <input name="photo" type="file">
                                    <input type="hidden" name="prev_photo" value="{{$data->photo}}">
                                    <img width="100" src="{{asset('storage/'.$data->photo)}}">
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><textarea name="address" class="form-control">
                                    {{$data->address}}</textarea></td>
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
