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
                    @foreach ($bank as $b )
                <tr>
                    <td>{{$loop->index +1}}</td>
                  <td>{{$b->fullname}}</td>
                  <td>{{$b->email}}</td>
                  <td>{{$b->location}}</td>
                  <td>{{$b->member}}</td>
                  <td>{{$b->phone}}</td>
                  <td>@if($b->status==1)
                      <a href="{{route('bank.deactive',['id'=>$b->id])}}" class="btn btn-danger btn-sm">Deactive Now</a></td>
                      @else
                      <a href="{{route('bank.active',['id'=>$b->id])}}" class="btn btn-success btn-sm">Active Now</a></td>
                      @endif

                  <td><a href="" class="btn btn-info btn-sm">Edit</a>&nbsp;<a href="" class="btn btn-danger btn-sm">Delete</a></td>
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
