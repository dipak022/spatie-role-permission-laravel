@extends('backend.layouts.master')
@section('title')
Create Role
@endsection
@section('content')
    
    
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Role/</span> Create Role</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create Role</h5> 
        <small class="text-muted float-end">
          <a href="{{ route('role.index') }}" class="btn btn-primary">
            <div>Role List</div>
          </a>
        </small>
      </div>
      <div class="card-body">
      <form action="{{ route('role.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Role Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter a Role Name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Permissions</label>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                    <label class="form-check-label" for="checkPermissionAll">All</label>
                </div>
                <hr>
                @php $i = 1; @endphp
                @foreach ($permission_groups as $group)
                    <div class="row">
                        <div class="col-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                            </div>
                        </div>

                        <div class="col-9 role-{{ $i }}-management-checkbox">
                            @php
                                $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                $j = 1;
                            @endphp
                            @foreach ($permissions as $permission)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                    <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                </div>
                                @php  $j++; @endphp
                            @endforeach
                            <br>
                        </div>

                    </div>
                    @php  $i++; @endphp
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Role</button>
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
@include('backend.roles.partials.scripts')

@endsection