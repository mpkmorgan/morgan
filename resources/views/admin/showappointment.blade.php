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
                    <th style="padding:10px">Client Name</th>
                    <th style="padding:10px">Client email</th>
                    <th style="padding:10px">Client phone</th>
                    <th style="padding:10px">Vet Name</th>
                    <th style="padding:10px">Date</th>
                    <th style="padding:10px">Message</th>
                    <th style="padding:10px">Status</th>
                    <th style="padding:10px">Approve</th>
                    <th style="padding:10px">Cancel</th>
                    <th style="padding:10px">Send Mail</th>
                </tr>

                @foreach($data as $appoint)
                <tr align="center">
                  <td style="padding:10px">{{$appoint->name}}</td>
                  <td style="padding:10px">{{$appoint->email}}</td>
                  <td style="padding:10px">{{$appoint->phone}}</td>
                  <td style="padding:10px">{{$appoint->vet}}</td>
                  <td style="padding:10px">{{$appoint->date}}</td>
                  <td style="padding:10px">{{$appoint->message}}</td>
                  <td style="padding:10px">{{$appoint->status}}</td>
                  <td>
                    <a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approve</a>
                  </td>
                  <td>
                    <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a>
                  </td>

                  <td>
                    <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                  </td>
                </tr>

                @endforeach
                  </table>
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