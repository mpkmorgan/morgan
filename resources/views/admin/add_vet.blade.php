<!DOCTYPE html>
<html lang="en">
    
  <head>

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px; 
        }
    </style>

   @include('admin.css')
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="color: blue">

            
        
        <div class="container" align="center" style="padding-top: 50px" style="color: blue">

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                
                {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('upload_vet')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px">
                    <label>Name</label>
                    <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">
                </div>

                <div style="padding:15px">
                    <label>Phone</label>
                    <input type="number" style="color:black;" name="number" placeholder="Write the phone number"required="">
                </div>

                <div style="padding:15px">
                    <label>Location</label>
                    <select name="location" style="color: black; width: 220px" required="">
                        <option>--Select--</option>
                        <option value="Farm1">Farm1</option>
                        <option value="Farm2">Farm2</option>
                        <option value="Farm3">Farm3</option>
                        <option value="Farm4">Farm4</option>
                        <option value="Farm5">Farm5</option>

                    </select>
                    
                </div>

                <div style="padding:15px:color:blue">
                    <label>Rate</label>
                    <input type="text" style="color:black;" name="email" placeholder="price per hour" required="">
                </div>

                <div style="padding:15px">
                    <label>Image</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding:15px">
                    
                    <input type="submit" class="btn-btn success">
                </div>

            </form>
        </div>

        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>