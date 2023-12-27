@extends('admin.layouts.master')
@section('site-title')
User Management
@endsection

@section('page-content')

<div class="row">
        <div class="col-md-5">
            <form action="{{ (!empty($editUser)) ? route('admin_user_update') : route('admin_user_store') }}" method="POST">
                @csrf
                @if(!empty($editUser))
                    <input type="hidden" name="id" value="{{$editUser->id}}">
                @endif
                <div class="card">
                    <div class="card-header card-info {{ (!empty($editUser)) ? 'alert-primary' : '' }}">
                        <h3 class="card-title panel-title float-left">{{ (!empty($editUser)) ? 'Edit ' : 'Add' }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="" placeholder="Enter Name" value="{{ (!empty($editUser)) ? $editUser->name : old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" id="" placeholder="Enter Email" value="{{ (!empty($editUser)) ? $editUser->email : old('email') }}" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="text" name="phone" class="form-control form-control-sm" id="" placeholder="Enter Phone Number" value="{{ (!empty($editUser)) ? $editUser->phone : old('phone') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" name="address" class="form-control form-control-sm" id="" placeholder="Enter Address" value="{{ (!empty($editUser)) ? $editUser->address : old('address') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="postcode">PostCode</label>
                            <input type="text" name="postcode" class="form-control form-control-sm" id="" placeholder="Enter Postcode" value="{{ (!empty($editUser)) ? $editUser->postcode : old('postcode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="country">District</label>
                            <input type="text" name="district" class="form-control form-control-sm" id="" placeholder="Enter district" value="{{ (!empty($editUser)) ? $editUser->district : old('district') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="passoword">Password</label>
                            <input type="password" name="password" class="form-control form-control-sm" id="" placeholder="Enter Password" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="passoword">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control form-control-sm" id="" placeholder="Enter Confirm Password" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="Role">Select Role</label>
                            <select name="role_id" id="" class="form-control form-control-sm" required>
                                <option value="" disabled selected>Select Role</option>
                                @foreach(App\Models\Role::get() as $role)
                                <option value="{{$role->id}}" {{ (!empty($editUser)) && isset($editUser->role->id) && $editUser->role->id == $role->id  ? 'selected' : '' }}>{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn bg-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div><!-- End Col  4 -->
        <div class="col-md-7">
            <div class="card">
            <div class="card-header card-info">
                <h3 class="card-title panel-title float-left">All User Records </h3>
                <h3 class="card-title panel-title float-right">
                 <a href="{{ route('admin_user_index') }}" class="text-primary" title="Add New">  <i class="fa fa-plus"></i></a>
                 </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-head-fixed table-hover table-sm">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($getUser as $key => $data)
                <tr>
                    <td>{{ $data->id  }}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td class="text-danger"> {{$Model("Role")::name( $data->role->role_id ?? null) }}</td>
                    <td>
                        <a href="{{route('admin_user_edit', $data->id)}}" class="badge alert-success" title="Edit"><i class="fa fa-pen"></i></a>
                        @if(isset($data->role->user_id) && auth()->user()->id == $data->role->user_id)
                        @else
                            <a href="{{route('admin_user_delete', $data->id)}}" class="badge alert-danger" onclick="return confirm('Are you sure want to Delete?')" title="Delete"><i class="fa fa-trash"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

          </div>
        </div>
    </div>


@endsection
