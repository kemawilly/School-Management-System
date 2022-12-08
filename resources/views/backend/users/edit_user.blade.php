@extends('admin.admin_master')
@section('admin')

<main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
          <div class="mdc-card p-0">
            <h6 class="card-title card-padding pb-0">Update User
<a href="{{ route('users.view') }}" style="float:right" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>
    View Users</a>

            </h6>
         
           
            <div class="table-responsive">
              <div class="form_wrpper">
                <form method="post" action="{{ route('user.update',$editData->id) }}">
                  @csrf
                <div class="mdc-layout-grid__inner">

                   <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="username" value="{{ $editData->name }}">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Username</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>

                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" id="text-field-hero-input" type="email" name="email" value="{{ $editData->email }}">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Email Address</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>


                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                <select name="usertype"  class="mdc-text-field__input" id="text-field-hero-input">
                  <option value="user">-Select-</option>
                  <option value="admin" {{ ($editData->usertype == "admin" ? "selected": "") }}>Admin</option>
                  <option value="user" {{ ($editData->usertype == "user" ? "selected": "") }}>User</option>
                </select>  
                      

                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">User Role</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>

                  
                
                
                </div>


                <div style="float:left; padding-top:30px">
                  <input type="submit" value="Update"  class="btn btn-primary">
                </div>

              </form>
              </div>




</div>
          </div>
        </div>
     
        
      </div>
    </div>
  </main>


@endsection