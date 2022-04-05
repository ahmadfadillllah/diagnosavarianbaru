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
                        <h2 class="content-header-title float-start mb-0">Daftar Klasifikasi</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">List Klasifikasi Varian Baru
                                </li>
                            </ol>
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

                                <h4 class="card-title">Daftar Klasifikasi</h4>

                                @if (session('info'))
                                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                    <strong>Info!</strong> {{ session('info') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <p>@error('kode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror</p>
                            </div>

                            <div class="table-responsive">

                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Klasifikasi</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($klasifikasi as $item)
                                        <tr class="table-default">
                                            <td>{{ $item->kode }}</td>
                                            <td>{{ $item->klasifikasi }}</td>
                                            <td>
                                                <a href="/dashboard/klasifikasi/edit/{{ $item->id }}" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editklasifikasi{{ $item->id }}">Edit</a>

                                            </td>
                                        </tr>

                                        <!-- Modal Edit klasifikasi -->
                                        <div class="modal fade" id="editklasifikasi{{ $item->id }}" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit
                                                            Klasifikasi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/dashboard/klasifikasi/update/{{ $item->id }}" method="POST">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="recipient-name" class="col-form-label">Nama Klasifikasi
                                                                    Klasifikasi</label>
                                                                <input type="text" class="form-control" name="klasifikasi" value="{{ $item->klasifikasi }}"
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
