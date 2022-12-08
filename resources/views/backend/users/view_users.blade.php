@extends('admin.admin_master')
@section('admin')

<main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
          <div class="mdc-card p-0">
            <h6 class="card-title card-padding pb-0">All Users
<a href="{{ route('user.add') }}" style="float:right" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
    Add New</a>

            </h6>
         
           
            <div class="table-responsive">
   <table class="table  table-hover js-basic-example dataTable table-striped table_custom border-style spacing5">
                            
<thead>
   
<tr>
<th class="th-sm" width="5%">SN</th>
<th class="th-sm">Role</th>
<th class="th-sm">Username</th>
<th class="th-sm">Email</th>
<th class="th-sm" width="20%">Action</th>
</tr>
</thead>
<tbody>
    @foreach ( $allData as $key => $user )   
<tr>
    <td>{{ $key+1 }}</td>

<td>{{  $user->usertype }}</td>
<td>{{  $user->name }}</td>
<td>{{  $user->email }}</td>
<td>
    
<a href="{{ route('user.edit',$user->id) }}" class="edit_icon btn btn-success"> <i class="fa-solid fa-pen-to-square"></i>Edit</a>
   
<a href="{{ route('user.delete',$user->id) }}" class="delete_icon btn btn-danger" id="delete"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    
</td>
</tr>
@endforeach

</tbody>

</table>
</div>
          </div>
        </div>
     
        
      </div>
    </div>
  </main>


@endsection