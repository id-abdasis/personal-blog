@extends('admin.app')

@section('title')
    Daftar Artikel
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Daftar Artikel</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Artikel</a></div>
        <div class="breadcrumb-item">Daftar Artikel</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Daftar Artikel</h2>
      <p class="section-lead">
        Daftar artikel terbaru
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card mb-0">
            <div class="card-body">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#">All <span class="badge badge-white"> {{ $artikels->count() }} </span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Draft <span class="badge badge-primary"> {{ $countPostDraft }} </span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pending <span class="badge badge-primary">{{ $countPostPending }}</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Publish <span class="badge badge-primary">{{ $countPostPublish }}</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Advanced Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                  <thead>
                    <tr>
                      <th class="text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                          <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                        </div>
                      </th>
                      <th>Judul Artikel</th>
                      <th>Konten</th>
                      <th>Tanggal Terbit</th>
                      <th>Penulis</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($artikels as $artikel)
                    <tr>
                        
                        <td>
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>
                          {{ $artikel->title }}
                          <div class="table-links">
                            <a href="#">View</a>
                            <div class="bullet"></div>
                            <a href="{{ route('admin.edit-artikel' , $artikel->slug) }}">Edit</a>
                            <div class="bullet"></div>
                            <a href="#" class="text-danger">Trash</a>
                          </div>
                        </td>
                        <td>{{ strip_tags(substr($artikel->artikel, 0,60)) }}</td>
                        <td>{{ substr($artikel->created_at, 0, -8) }}</td>
                        <td>{{ $artikel->penulis }}</td>
                        <td>
                            @if ($artikel->status == "Publish")
                              <div class="badge badge-primary">{{ $artikel->status }}</div>
                            @endif
                            @if ($artikel->status == "Draft")
                              <div class="badge badge-info">{{ $artikel->status }}</div>
                            @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js-libraries')
<script src="{{ url('/') }}/assets/modules/datatables/datatables.min.js"></script>
<script src="{{ url('/') }}/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="{{ url('/') }}/assets/modules/jquery-ui/jquery-ui.min.js"></script>
@endsection

@section('page-js')
<script src="{{ url('/') }}/assets/js/page/modules-datatables.js"></script>
@endsection

@section('css-libraries')
<link rel="stylesheet" href="{{ url('/') }}/assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
@endsection