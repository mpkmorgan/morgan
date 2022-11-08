<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

   <style>
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
        <div class="container-fluid page-body-wrapper">

         
            
            <div class="container" align="center" style="padding: 100px">

              <!--Message after adding vet-->

              @if (session()->has('message'))
              <div class="alert alert-success">
                <button type="button"class="close" data-dismiss="alert">
                  X
                </button>
    
              </div>
                  
              @endif

              <!--End of message-->
                
                <form action="{{url('editvet',$data->id)}}" method="POST" enctype="multipart/form-data">

                  @csrf

                    <div style="padding: 15px">
                    <label>Vet Name</label>
                    <input type="text" name="name" style="color: black" value="{{$data->name}}">
                    </div>

                    <div style="padding: 15px">
                        <label>Phone</label>
                        <input type="number" name="phone" style="color: black" value="{{$data->phone}}">
                        </div>

                        <div style="padding: 15px">
                            <label>Location</label>
                            <input type="text" name="location" style="color: black" value="{{$data->location}}">
                            </div>

                            <div style="padding: 15px">
                                <label>Email.</label>
                                <input type="text" name="email" style="color: black" value="{{$data->email}}">
                                </div>

                                <div style="padding: 15px">
                                    <label>Old Image</label>
                                    <img height="150" width="150" src="vetimage/{{$data->image}}" alt="">
                                    </div>

                <div>
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>

                <div>
                    <label>Change Image</label>
                    <input type="submit" class="btn btn-primary">
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