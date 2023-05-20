@extends('index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tamu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tamu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Tamu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('tamu.update', $data->id )}}">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input value="{{ $data->nama }}" name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat/Instansi</label>
                    <input value="{{ $data->alamat }}" name="alamat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat/Instansi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No. HP</label>
                    <input value="{{ $data->nope }}" name="nope" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan No. HP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keperluan</label>
                    <input value="{{ $data->keperluan }}" name="keperluan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Keperluan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Data yang di Minta</label>
                    <input value="{{ $data->data }}" name="data" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Data yang di Ambil">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->

          </div>
      </div>
    </section>
</div>
@endsection