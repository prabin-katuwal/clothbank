@extends('Admin.main')
@section('content')
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Member</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($donar as $d )
                <tr>
                    <td>{{$loop->index +1}}</td>
                  <td>{{$d->fullname}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->location}}</td>
                  <td>{{$d->quantity}}</td>
                  <td>{{$d->userid}}</td>
                  <td><a href="" class="btn btn-success btn-sm">Active</a></td>
                  <td><a href="" class="btn btn-info btn-sm">Edit</a><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Member</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
