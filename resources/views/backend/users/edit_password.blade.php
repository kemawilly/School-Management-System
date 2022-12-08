@extends('admin.admin_master')
@section('admin')

<main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
          <div class="mdc-card p-0">
            <h6 class="card-title card-padding pb-0">Change Password
<a href="{{ route('users.view') }}" style="float:right" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>
    View Users</a>

            </h6>
         
           
            <div class="table-responsive">
              <div class="form_wrpper">
                <form method="post" action="{{ route('password.update') }}">
                  @csrf
                <div class="mdc-layout-grid__inner">

                   <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                        <input class="mdc-text-field__input" id="current_password" type="password" name="oldpassword" required>
                      
                        <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="current_password" class="mdc-floating-label">Current Password</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                        
                      </div>
                      
                    </div>
                   
                  </div>
                 

                </div>
               
<br>

                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                     <div class="mdc-text-field mdc-text-field--outlined">
                         <input class="mdc-text-field__input" id="password" type="password" name="password" required>
                       <div class="mdc-notched-outline">
                         <div class="mdc-notched-outline__leading"></div>
                         <div class="mdc-notched-outline__notch">
                           <label for="password" class="mdc-floating-label">New Password</label>
                         </div>
                         <div class="mdc-notched-outline__trailing"></div>
                       </div>
                     </div>
                    
                   </div>
 
                   <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                     <div class="mdc-text-field mdc-text-field--outlined">
                  <input class="mdc-text-field__input" id="password_confirmation" type="password" name="password_confirmation" required>
                       <div class="mdc-notched-outline">
                         <div class="mdc-notched-outline__leading"></div>
                         <div class="mdc-notched-outline__notch">
                           <label for="password_confirmation" class="mdc-floating-label">Confirm Password</label>
                         </div>
                         <div class="mdc-notched-outline__trailing"></div>
                       </div>
                     </div>
                   </div>
 
                 </div>


                <div style="float:left; padding-top:30px">
                  <input type="submit" value="Update" class="btn btn-primary">
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