@extends('admin.admin_master')
@section('admin')

<main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
          <div class="mdc-card p-0">
            <h6 class="card-title card-padding pb-0">My Profile


            </h6>
         
           
            <div>
                <div class="card">
                    <img src="{{ (!empty($user->image))? url('upload/users_images/'.$user->image):url('upload/no_image.jpg') }}" alt="John" style="width:10%">
                    <h1>{{ $user->name }}</h1>
                    <p class="title">{{ $user->usertype }}</p>
                    <p>{{ $user->email }} </p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <p>  <a href="{{ route('profile.edit',$user->id) }}" class="edit_icon btn btn-success"> <i class="fa-solid fa-pen-to-square"></i>Edit Profile</a>  </p>
                  </div>
</div>
          </div>
        </div>
     
        
      </div>
    </div>
  </main>


@endsection