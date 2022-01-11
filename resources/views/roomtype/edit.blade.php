@extends('layouts.layout')

@section('content')

   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View All
                <a href="{{ url('dashboard/roomtype') }}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <p class="text-success">{{ session('success') }}</p>
            @endif
            <div class="table-responsive">
                <form action="{{url('dashboard/roomtype/'.$data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">                    
                        <thead>
                          <tr>
                              <th>Title</th>
                              <td><input name="title" type="text" class="form-control" value="{{$data->title}}"></td>
                          </tr>
                          <tr>
                              <th>Price</th>
                              <td><input name="price" type="number" class="form-control" value="{{$data->price}}"></td>
                          </tr> 
                          <tr>
                              <th>Detail</th>
                              <td><textarea name="detail" class="form-control">{{$data->detail}}</textarea></td>
                          </tr>
                          <tr>
                              <td colspan="2">
                                  <input type="submit" class="btn btn-primary" value="Update">
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
