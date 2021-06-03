@extends('Admin.main')
@section('content')
  <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="{{route('admin.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Admin</a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $a )
                <tr>
                    <td>{{$loop->index +1}}</td>
                  <td>{{$a->fullname}}</td>
                  <td>{{$a->email}}</td>
                  <td><a href="" class="btn btn-info btn-sm">Edit</a></td>
                  <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
