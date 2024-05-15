@extends('layouts.main')
@section('title', 'Olivia Liptiay | Home')
@section('artikel')
    <div id="carouselExampleCaptions" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2018/09/29/20/38/beauty-3712239_1280.jpg" 
                class="d-block w-70"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: #FFFBE9">Beautiful Colors to Apply to Nails </h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2015/07/28/22/06/nails-865121_1280.jpg" 
                class="d-block w-70"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color: #733C3C">Your Pretty Nails</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/04/25/13/50/nail-polish-1351933_1280.jpg"
                class="d-block w-70"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color:lightslategray">Come on, paint your nails</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center">About us</h5>
              <p class="card-text">
                Selamat datang di Lilly Nails, salon nail art terkemuka yang menawarkan pengalaman kecantikan kuku yang tak terlupakan. 
                Kami adalah tujuan utama bagi mereka yang mencari keindahan dan kreativitas dalam dunia nail art. <br><br>
                Apa yang membuat Lilly Nails istimewa adalah tim profesional kami yang terdiri dari para seniman nail art berbakat. 
                Mereka adalah ahli dalam menciptakan karya seni yang menakjubkan di atas kuku Anda. 
                Dengan keterampilan dan kreativitas yang luar biasa, mereka dapat mewujudkan setiap ide dan keinginan Anda menjadi kenyataan.
                Kami menggunakan produk berkualitas tinggi dari merek-merek terkemuka, memastikan hasil akhir yang tahan lama dan aman bagi kuku Anda.
                Mulai dari perawatan kuku standar hingga desain nail art yang rumit, kami menawarkan berbagai layanan untuk memenuhi selera Anda.<br>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img src="https://cdn.pixabay.com/photo/2018/04/12/04/28/beauty-salon-3312522_1280.png" class="card-img-top" 
              style="width: 100%;" alt="...">
          </div>
        </div>
      </div>

@endsection
