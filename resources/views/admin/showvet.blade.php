<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div align="center" style="padding-top:100px;">
            
                <table>
                    <tr>
                        <th style="padding:10px">Equipment Name</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Location</th>
                        <th style="padding:10px">Rate.</th>
                        <th style="padding:10px">Image</th>
                        <th style="padding:10px">Delete</th>
                        <th style="padding:10px">Update</th>
                       
                    </tr>
                    @foreach ($data as $vet)
                    <tr align="center">
                        <td>{{$vet->name}}</td>
                        <td>{{$vet->phone}}</td>
                        <td>{{$vet->location}}</td>
                        <td>{{$vet->email}}</td>
                        <td><img height="100" width="100" src="vetimage/{{$vet->image}}"></td>
                        <td>
                          <a onclick="return confirm('Are you sure you want to deletre this')" class="btn btn-danger" href="{{url('deletevet',$vet->id)}}">Delete</a>
                        </td>
                        <td>
                          <a  class="btn btn-primary" href="{{url('updatevet',$vet->id)}}">Update</a>
                        </td>
                        
                    </tr>
                    @endforeach
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