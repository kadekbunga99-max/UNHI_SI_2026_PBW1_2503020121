@extends('back-office.wrapper') @section('content')
<div class="row px-3">
  <a href="{{ route('backoffice.tambah-tentangsaya')}}" class="btn btn-primary btn-sm w-50"
    >Tambah Konten Tentang Saya
  </a>
  <div class="col-lg-10">
    <div class="card mb-4">
      <div class="card-header">
        <h3 class="card-title">Table Konten Tentang Saya</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Kode Bootstrap Icon</th>
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="align-middle">
              <td>1</td>
              <td>kode icon bootstrap</td>
              <td>contoh</td>
              <td>contoh</td>
              <td class="gap-5">
                <a href="{{route('backoffice.edit-tentangsaya')}}" class="btn btn-primary btn-sm">
                  Edit
                </a>

                <a href="#" class="btn btn-danger btn-sm"> Delete </a>
              </td>
            </tr>

            <tr class="align-middle">
              <td>1</td>
              <td>kode icon bootstrap</td>
              <td>contoh</td>
              <td>contoh</td>
              <td class="gap-5">
                <a href="{{route('backoffice.edit-tentangsaya')}}" class="btn btn-primary btn-sm">
                  Edit
                </a>

                <a href="#" class="btn btn-danger btn-sm"> Delete </a>
              </td>
            </tr>

            <tr class="align-middle">
              <td>1</td>
              <td>kode icon bootstrap</td>
              <td>contoh</td>
              <td>contoh</td>
              <td class="gap-5">
                <a href="{{route('backoffice.edit-tentangsaya')}}" class="btn btn-primary btn-sm">
                  Edit
                </a>

                <a href="#" class="btn btn-danger btn-sm"> Delete </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>

@endsection
