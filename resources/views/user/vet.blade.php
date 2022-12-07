<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Equipment List</h6>
            <h1 class="display-5 text-uppercase mb-0">Quality tools</h1>
          </div>
          <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
           
           @foreach ($vet as $vet)
               
           
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img height="300 px" class="img-fluid w-100" src="vetimage/{{$vet->image}}" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">{{$vet->name}}</h5>
                    <p class="m-0">{{$vet->location}}</p>
                    <p class="m-0">Rate per hour Ksh {{$vet->email}}</p>
                </div>
            </div>

            @endforeach
           
        </div>
    </div>
</div>