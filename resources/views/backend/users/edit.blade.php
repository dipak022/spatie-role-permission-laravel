



@extends('backend.layouts.master')
@section('title')
Create Role
@endsection
@section('content')
    
    
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>
    
   


<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit User - {{ $user->name }}</h5> 
        <small class="text-muted float-end">
          <a href="{{ route('user.index') }}" class="btn btn-primary">
            <div>User List</div>
          </a>
        </small>
      </div>
      <div class="card-body">
      <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">User Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="email">User Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                            </div>
                        </div>


                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="country">Assign Roles</label>
                            <select  name="roles[]" id="roles" class="select2 form-select">
                                <option value="" disabled selected>Select</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
                    </form>
      </div>
    </div>
  </div>

</div>


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
          <!-- / Content -->
@endsection
@section('scripts')

@endsection