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
                      <th>Action</th>
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
                        <td>{{ $artikel->title }}</td>
                        <td>{{ strip_tags(substr($artikel->artikel, 0,60)) }}</td>
                        <td>{{ substr($artikel->created_at, 0, -8) }}</td>
                        <td>{{ $artikel->penulis }}</td>
                        <td><div class="badge badge-success">{{ $artikel->status }}</div></td>
                        <td><a href="{{ route('admin.edit-artikel' , $artikel->slug) }}" class="btn btn-outline-info btn-sm"> <i class="fa fa-pencil-alt"></i> Edit</a></td>
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