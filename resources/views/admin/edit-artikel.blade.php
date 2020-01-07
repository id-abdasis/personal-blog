@extends('admin.app')

@section('title')
    Tambah Artikel
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Create New Post</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Posts</a></div>
        <div class="breadcrumb-item">Create New Post</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Create New Post</h2>
      <p class="section-lead">
        On this page you can create a new post and fill in all fields.
      </p>

      <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.update-artikel') }}" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                      <h4>Write Your Post</h4>
                    </div>
                  <input type="hidden" name="id" value="{{$artikel->id}}">
                    <div class="card-body">
                      <div class="form-group row mb-4">
                        
                        <div class="col-sm-12 col-md-10">
                          <input type="text" class="form-control" name="title" value="{{ $artikel->title }}">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        
                        <div class="col-sm-12 col-md-10">
                          <select class="form-control selectric" name="kategori">
                            <option value="Tech" {{ $artikel->kategori == "Tech" ? 'selected' : '' }}>Tech</option>
                            <option value="News" {{ $artikel->kategori == "News" ? 'selected' : '' }}>News</option>
                            <option value="Political" {{ $artikel->kategori == "Political" ? 'selected' : '' }}>Political</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        
                        <div class="col-sm-12 col-md-10">
                          <textarea id="mytextarea" name="artikel" rows="20" cols="10">{{ $artikel->artikel }}</textarea>

                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        
                        <div class="col-sm-12 col-md-10">
                          <div id="image-preview" class="image-preview" style="background: url('{{ url('/') . '/' }}{{ $artikel->thumbnail }}') center center / cover">
                            <label for="image-upload" id="image-label">Pilih Foto</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                          </div>
                        </div>
                      </div>
                      <div class="form-row mb-4">
                        <div class="col-sm-12 col-md-6">
                          <input name="tag" type="text" placeholder="Masukan Tag" class="form-control inputtags">
                        </div>
                        <div class="col-sm-12 col-md-6">
                          <select class="form-control selectric" name="status">
                            <option value="Publish">Publish</option>
                            <option value="Draft">Draft</option>
                            <option value="Pending">Pending</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <div class="col-sm-12 col-md-10">
                          <button class="btn btn-primary">Create Post</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  @csrf
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js-libraries')
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
@endsection

@section('page-js')
<script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
   selector: 'textarea',
   skin: "bootstrap",
    content_css: "bootstrap"
  });
  $('form').keydown(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});
</script>
@endsection

@section('css-libraries')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endsection