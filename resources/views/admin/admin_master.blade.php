<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Skyware School Management System</title>
  <!-- plugins:css -->
 
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css') }}">

  <script src="https://kit.fontawesome.com/594cb3a241.js" crossorigin="anonymous"></script>
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href=" {{ asset('backend/assets/css/demo/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href=" {{ asset('backend/assets/images/favicon.png') }}" />


    <!-- Datatable  styles -->
  <link rel="stylesheet" href="{{ asset('backend/dt/plugins/bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/dt/plugins/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/dt/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/dt/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body>

  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
  @include('admin.body.sidebar')
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
   @include('admin.body.header')
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
       @yield('admin')
        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright &copy; <a href="https://www.skywareng.com/" target="_blank">skywarengh.com </a>2022</span>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14"> <a href="#" target="_blank">Skyware </a> School Management System</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src=" {{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=" {{ asset('backend/assets/vendors/chartjs/Chart.min.js') }}"></script>
  <script src=" {{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
  <script src=" {{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=" {{ asset('backend/assets/js/material.js') }}"></script>
  <script src=" {{ asset('backend/assets/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=" {{ asset('backend/assets/js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->

  <script src="{{ asset('backend/dt/bundles/dataTables.bundle.js') }} "></script>
  <script src="{{ asset('backend/dt/table/datatable.js') }} "></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script type="text/javascript">
    $(function(){
      $(document).on('click','#delete',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
  
    
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "You want to delete this Data?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    }) 
  
  
      });
  
    });
  
  
  </script> 
  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</body>
</html> 