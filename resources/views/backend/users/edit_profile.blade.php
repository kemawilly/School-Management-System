@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
          <div class="mdc-card p-0">
            <h6 class="card-title card-padding pb-0">Update Profile
<a href="{{ route('users.view') }}" style="float:right" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>
    View Profile</a>

            </h6>
         
           
            <div class="table-responsive">
              <div class="form_wrpper">
                <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
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
                      <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="mobile" value="{{ $editData->mobile }}">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Mobile</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>

                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="address" value="{{ $editData->address }}">
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Contact Address</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>

                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                <select name="gender"  class="mdc-text-field__input" id="text-field-hero-input">
                  <option value="Male">-Select-</option>
                  <option value="Male" {{ ($editData->gender == "Male" ? "selected": "") }}>Male</option>
                  <option value="Female" {{ ($editData->gender == "Female" ? "selected": "") }}>Female</option>
                </select>  
                      
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Gender </label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>

                
                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                         <input class="mdc-text-field__input" id="image" type="file" name="image" value="{{ $editData->image }}">
                         <div class="mdc-notched-outline">
                             <div class="mdc-notched-outline__leading"></div>
                               <div class="mdc-notched-outline__notch">
                               <label for="text-field-hero-input" class="mdc-floating-label">Profile Image </label>
                              </div>
                             <div class="mdc-notched-outline__trailing"></div>
                         </div>


                    </div>
                  </div>

                

                  
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                     
                    </div>
                  </div>

                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <img src="{{ (!empty($editData->image))? url('upload/users_images/'.$editData->image):url('upload/no_image.jpg') }}" alt="John" id="showImage" style="width:100px; height:100px">
                     
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

  <script type="text/javascript">
    $(document).ready(function(){
      $("#image").change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0'])
      });
    });
    </script>

@endsection