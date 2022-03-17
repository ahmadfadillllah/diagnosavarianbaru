@include('dashboard.master.head')
@include('dashboard.master.header')
@include('dashboard.master.main')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Daftar Gejala</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">List Gejala
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                data-feather="plus">T</i></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#tambahgejala"><i
                                    class="me-1" data-feather="check-square"></i><span class="align-middle">Tambah
                                    Gejala</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Tambah Gejala -->
            <div class="modal fade" id="tambahgejala" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambahkan Gejala</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action={{ route('gejala.store') }} method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Gejala</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Contextual classes start -->
                <div class="row" id="table-contextual">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title">Daftar Gejala Varian Delta</h4>
                                @if (session('info'))
                                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                    <strong>Info!</strong> {{ session('info') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="table-responsive">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode Gejala</th>
                                            <th>Nama Gejala</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gejala as $item)
                                        <tr class="table-default">
                                            <td>{{ $item->kode }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                <a href="/dashboard/gejala/{{ $item->id }}/edit" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editgejala">Edit</a>
                                                <a href="/dashboard/gejala/{{ $item->id }}/delete"
                                                    onclick="return confirm('Yakin ingin menghapus gejala tersebut ?')"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit Gejala -->
                                        <div class="modal fade" id="editgejala" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit
                                                            Gejala</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/dashboard/gejala/{{ $item->id }}/update" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama
                                                                    Gejala</label>
                                                                <input type="text" class="form-control" name="nama" value="{{ $item->nama }}"
                                                                    required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contextual classes end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @include('dashboard.master.footer')
