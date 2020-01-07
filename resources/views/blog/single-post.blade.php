<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/') }}/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Poppins|Rubik:400,500|Roboto+Condensed:400,700|Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0016cf1886.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
      href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.17.1/build/highlight.min.js"></script>
    <script charset="UTF-8" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/languages/go.min.js"></script>
    <title>Tukang Ketik | Belajar Pemrograman dari Pemula</title>
  </head>
  <body>
    @include('includes.header')
   

    <div class="wrapper-content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-content">
                        <div class="col mb-4">
                            <div class="card content-post h-100">
                              <img src="{{  $artikel->thumbnail }}" height="420px" style="object-fit:cover" class="card-img-top" alt="...">
                              <div class="card-body" id="isi-konten">
                                <h5 class="single-post card-title">{{ $artikel->title }}</h5>
                                <hr>
                                <p class="single-post card-text">{!! $artikel->artikel !!}</p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="main-about-writer">
                      <div class="col-md-12">
                        <div class="card about-writer h-100">
                          <img src="" alt="">
                          <div class="card-body">
                            <h5>Abd. Asis</h5>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="main-comments mt-4 mb-5">
                      <div class="col-md-12">
                        <div class="card about-comments">
                          <img src="" alt="">
                          <div class="card-body" id="isi-komentar">
                            <div id="disqus_thread"></div>
                              <script>
  
                              /**
                              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                              /*
                              var disqus_config = function () {
                              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                              };
                              */
                              (function() { // DON'T EDIT BELOW THIS LINE
                              var d = document, s = d.createElement('script');
                              s.src = 'https://tukangketik.disqus.com/embed.js';
                              s.setAttribute('data-timestamp', +new Date());
                              (d.head || d.body).appendChild(s);
                              })();
                              </script>
                              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                          </div>
                        </div>
                      </div>
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
    
    @include('includes.footer')
    <script id="dsq-count-scr" src="//tukangketik.disqus.com/count.js" async></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>