<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/') }}/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Poppins|Rubik:400,500|Roboto+Condensed|Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0016cf1886.js" crossorigin="anonymous"></script>
    <title>Tukang Ketik | Belajar Pemrograman dari Pemula</title>
  </head>
  <body>
    @include('includes.header')
    @include('includes.welcome')
    
    <div class="list-post">
      <div class="container">
        <div class="title-section" style="margin-bottom: 45px;">
           <h3 id="section-title"><i class="fa fa-book"></i> Tutorial Terbaru</h3>
           <h5 id="section-subtitle">Jangan sampai ketinggalan materi terbaru, materi akan update setiap hari.</h5>
        </div>
        <div class="row row-eq-height">
          @foreach ($artikels as $artikel)
          <div class="col-md-4 col-sm-12 col-lg-4 px-2 md:mb-0">
              <div class="card post-card">
                <img src="{{  $artikel->thumbnail }}" class="card-img-top " style="object-fit:cover;" width="300px" height="200px" alt="...">
                <div class="card-body">
                  <h5 class="card-title" id="judul-artikel" ><a href="{{ route('blog.detail-post', $artikel->slug) }}">{{ $artikel->title }}</a></h5>
                <p class="card-text" id="diskripsi_artikel">{!! strip_tags(substr($artikel->artikel, 0, 120)) !!}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
       <div class="row">
          <div class="col md:mb-0">
            {{ $artikels->links() }}
          </div>
       </div>
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="get-solution">
      <div class="container">
        <h1 class="display-5 text-center solution-title">Stuck Ngoding</h1>
        <p class="text-center solution-title">Ada bug tidak ketemu solusinya?.</p>
        <div class="text-center"><a href="#" class="btn btn-info">Temukan Solusi</a></div>
      </div>
    </div>

    <div class="list-post mb-5">
      <div class="container">
        <div class="title-section" style="margin-bottom: 45px;">
           <h3 id="section-title"><i class="fa fa-book"></i> Tutorial Pilihan</h3>
           <h5 id="section-subtitle">Jangan sampai ketinggalan materi terbaru, materi akan update setiap hari.</h5>
        </div>
        <div class="row">
          <div class="col-md-8">
              <div class="list-post-horizontal" style="border: none !important">
              @foreach ($artikelTechs as $artikelTech)
              <div class="card mb-3" id="card-post"style="max-width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                  <img src="{{ $artikelTech->thumbnail }}" height="100%"  style="object-fit:cover; max-height: 150px;" class="card-img rounded thumbnail-list align-self-center mr-3" alt="{{ $artikelTech->slug }}">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" id="post-container">
                      <h5 class="card-title" id="judul-artikel"><a href="{{ route('blog.detail-post', $artikelTech->slug) }}">{{ $artikelTech->title }}</a></h5>
                      <p class="card-text" style="font-size: 14px">{{ strip_tags(substr($artikelTech->artikel, 0, 120)) }}</p>
                    <p class="card-text"><small class="text-muted">Created: {{ substr($artikelTech->created_at, 0, -8) }} | Oleh: <a id="link-penulis" href="https://instagram.com/id.elasis">{{ $artikelTech->penulis }}</a></small></p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <a href="#">
                <button class="btn btn-orange"><i class="fa fa-book mr-1"></i>Lihat Selengkapnya</button>
              </a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card sidebar">
              <div class="card-body">
                <div class="card-title">
                  <h5><i class="fa fa-cubes"></i> TEKNOLOGI</h5>
                  <hr>
                  @include('includes.sidebar')
                </div>
              </div>

            </div>
          </div>
        </div>
     </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5>Tukang Ketik</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor mollitia dolores magnam? Unde debitis illum quia neque laudantium iure dolore ipsa cupiditate quidem expedita, veniam error inventore, dolores, distinctio nulla?</p>
          </div>
          <div class="col-md-3">
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </footer>
    <div class="bottom-widget">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="copyright">
              <p>© Tukang Ketik 2017. Hak Cipta Dilindungi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>