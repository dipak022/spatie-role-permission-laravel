
@extends('backend.layouts.master')
@section('title')
User Manage
@endsection
@section('styles')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')

  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span> User list</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">User List</h5> 
        <small class="text-muted float-end">
          <a class="btn btn-primary text-white" href="{{ route('user.create') }}">Create User</a>
        </small>
      </div>
      <div class="card-body">
      <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
          <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                  @foreach ($user->roles as $role)
                      <span class="badge bg-label-success me-1">
                          {{ $role->name }}
                      </span>
                  @endforeach
              </td>
              <td>
                  <a class="btn btn-success text-white" href="{{ route('user.edit', $user->id) }}">
                  <i class="bx bx-link-alt"></i>
                  </a>

                  <form class="d-flax" action="{{ route('user.destroy',$user->id) }}" method="POST">
                      @csrf 
                      @method('delete')
                      <a type="button" data-type="confirm" class="dltBtn btn-sm btn-danger js-sweetalert text-white" title="Delete" >
                        
                        <i class="bx bx-trash-alt"></i>
                        
                      </a>
                  </form>
              </td>
          </tr>
          @endforeach
        </tbody>
    </table>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $('.dltBtn').click(function(e){
       
        var form = $(this).closest('form');
        var dataId = $(this).data('id');
        e.preventDefault();
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
        
        

    });

</script>

<script>
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>




@endsection