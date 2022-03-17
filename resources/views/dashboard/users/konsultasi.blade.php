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
                        <h2 class="content-header-title float-start mb-0">Daftar User</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">List User
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
                            <a class="dropdown-item" href="{{ route('register') }}"><i class="me-1"
                                    data-feather="check-square"></i><span class="align-middle">Tambah User</span></a>
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

                                <h4 class="card-title">Daftar Konsultasi</h4>
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
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No. Handphone</th>
                                            <th>Alamat</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        <tr class="table-default">
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->jenis_kelamin }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>
                                                <a href="/dashboard/users/konsultasi/proses/{{  $item->id }}"
                                                    class="btn btn-info btn-sm">Proses</a>
                                                <a href="/dashboard/users/konsultasi/proses/{{  $item->id }}"
                                                    onclick="return confirm('Yakin ingin menghapus gejala tersebut ?')"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
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
