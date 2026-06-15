@extends('back-office.wrapper')

@section('content')
<div class="row px-3">
    <a href="{{ route('backoffice.tambah-hero')}}" class="btn btn-primary btn-sm w-50">Tambah hero </a>
    <div class="col-lg-10">
  <div class="card mb-4">
                <div class="card-header">
                  <h3 class="card-title">Table Konten Hero</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th style="width: 150px">Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>1</td>
                        <td>
                          <img
                            src="https://i.pinimg.com/1200x/af/e2/bd/afe2bda161fd007e4a2dbadaebe26fbc.jpg"
                            alt="Gambar"
                            style="object-fit: cover"
                            width="100px"
                            height="100px"
                          />
                        </td>
                        <td>contoh</td>
                        <td>contoh</td>
                        <td class="gap-5">
                          <a href="{{ route('backoffice.edit-hero')}}" class="btn btn-primary btn-sm"> Edit </a>

                          <a href="#" class="btn btn-danger btn-sm"> Delete </a>
                        </td>
                      </tr>

                      <tr class="align-middle">
                        <td>2</td>
                        <td>
                          <img
                            src="https://i.pinimg.com/1200x/af/e2/bd/afe2bda161fd007e4a2dbadaebe26fbc.jpg"
                            alt="Gambar"
                            style="object-fit: cover"
                            width="100px"
                            height="100px"
                          />
                        </td>
                        <td>contoh</td>
                        <td>contoh</td>
                        <td class="gap-5">
                          <a href="{{ route('backoffice.edit-hero')}}" class="btn btn-primary btn-sm"> Edit </a>

                          <a href="#" class="btn btn-danger btn-sm"> Delete </a>
                        </td>
                      </tr>

                      <tr class="align-middle">
                        <td>3</td>
                        <td>
                          <img
                            src="https://i.pinimg.com/1200x/af/e2/bd/afe2bda161fd007e4a2dbadaebe26fbc.jpg"
                            alt="Gambar"
                            style="object-fit: cover"
                            width="100px"
                            height="100px"
                          />
                        </td>
                        <td>contoh</td>
                        <td>contoh</td>
                        <td class="gap-5">
                          <a href="{{ route('backoffice.edit-hero')}}" class="btn btn-primary btn-sm"> Edit </a>

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

