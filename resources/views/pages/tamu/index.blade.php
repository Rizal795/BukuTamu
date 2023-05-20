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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
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
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Tamu</h3>

                <div class="card-tools">
                  <a href="{{ route('tamu.create') }}" class="btn btn-primary btn-sm">Tambah Tamu</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Nama</th>
                      <th>Alamat/Instansi</th>
                      <th>No. HP</th>
                      <th>Keperluan</th>
                      <th>Data yang di Minta</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>
                          {{ $item->alamat }}
                        </td>
                        <td>{{ $item->nope }}</td>
                        <td>{{ $item->keperluan }}</td>
                        <td>{{ $item->data }}</td>
                      <td>
                        <div class="btn-group">
                            <a href="http://" class="btn btn-primary btn-sm">Lihat</a>
                            <a href="{{ route('tamu.edit', $item->id )}}" class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href="{{ route('destroy', $item->id )}}" class="btn btn-warning btn-sm">Delete</a> --}}
                            <a href="javascript:void(0)" id="delete" data-url="{{ route('tamu.destroy', $item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </td>
                    </tr>
                        
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>
    </section>
</div>    
@endsection

@push('javascript')
<script type="text/javascript">
  $(document).ready(function() {
    // $.ajaxSetup({
    //   headers: {
    //     'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
    //   }
    // });

    $('body').on('click', '#delete', function() {
      var tamuURL = $(this).data('url');
      var trObj = $(this);
      var token =  $("meta[name='csrf-token']").attr("content");
      if (confirm('Apakah yakin akan menghapus?') == true) {
        $.ajax({
          url: tamuURL,
          type: 'DELETE',
          dataType: 'json',
          data: {
            "_token": token
          },
          success: function(data) {
            alert(data.success);
            trObj.parents("tr").remove();
          }
        })

      }
    })
  })
</script>    
@endpush