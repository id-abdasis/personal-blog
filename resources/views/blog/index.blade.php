<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/') }}/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0016cf1886.js" crossorigin="anonymous"></script>
    <title>Tukang Ketik | Belajar Pemrograman dari Pemula</title>
  </head>
  <body>
    @include('includes.header')
    @include('includes.welcome')
    
    <div class="list-post">
      <div class="container">
        <div class="title-section" style="margin-bottom: 45px;">
           <h3><i class="fa fa-book"></i> Tutorial Terbaru</h3>
           <h5>Jangan sampai ketinggalan materi terbaru, materi akan update setiap hari.</h5>
        </div>
        <div class="row">
          @foreach ($artikels as $artikel)
          <div class="col-md-4 pb-3" >
              <div class="card post-card" style="width:20rem;">
                <img src="{{  $artikel->thumbnail }}" class="card-img-top" style="object-fit:cover;" width="300px" height="200px" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('blog.detail-post', $artikel->slug) }}">{{ $artikel->title }}</a></h5>
                <p class="card-text">{!! strip_tags(substr($artikel->artikel, 0, 150)) !!}</p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        {{ $artikels->links() }}
      </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="get-solution">
      <div class="container">
        <h1 class="display-5 text-center solution-title">Stuck Ngoding</h1>
        <p class="text-center solution-title">Ada bug tidak ketemu solusinya?.</p>
        <div class="text-center"><a href="#" class="btn btn-info">Temukan Solusi</a></div>
      </div>
    </div>

    <div class="list-post">
      <div class="container">
        <div class="title-section" style="margin-bottom: 45px;">
           <h3><i class="fa fa-book"></i> Tutorial Terbaru</h3>
           <h5>Jangan sampai ketinggalan materi terbaru, materi akan update setiap hari.</h5>
        </div>
        <div class="row">
          <div class="col-md-8">
              <div class="list-post-horizontal">
              @foreach ($artikelTech as $artikel)
              <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{ $artikel->thumbnail }}" height="150px" style="object-fit:cover" class="card-img rounded thumbnail-list" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('blog.detail-post', $artikel->slug) }}">{{ $artikel->title }}</a></h5>
                      <p class="card-text">{{ strip_tags(substr($artikel->artikel, 0, 60)) }}</p>
                      <p class="card-text"><small class="text-muted">Create: {{ substr($artikel->created_at, 0, -8) }}</small></p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

          <div class="col-md-4">
            <div class="card sidebar">
              <div class="card-body">
                <div class="card-title">
                  <h5><i class="fa fa-cubes"></i> TEKNOLOGI</h5>
                  <hr>
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