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
                        <h2 class="content-header-title float-start mb-0">Daftar Contact</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">List Contact
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

                                <h4 class="card-title">Daftar Contact</h4>

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
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Pesan</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $item)
                                        <tr class="table-default">
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->subject }}</td>
                                            <td>{{ $item->message }}</td>
                                            <td>
                                                <a href="/dashboard/contact/delete/{{ $item->id }}"
                                                    onclick="return confirm('Yakin ingin menghapus contact tersebut ?')"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>

                                        <!-- Modal Edit Contact -->
                                        <div class="modal fade" id="editContact{{ $item->id }}" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit
                                                            Contact</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/dashboard/Contact/update/{{ $item->id }}" method="POST">
                                                            @csrf
                                                            <div class="mb-1">
                                                                <label for="recipient-name" class="col-form-label">Kode</label>
                                                                <input type="text" class="form-control" name="kode" value="{{ $item->kode }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="recipient-name" class="col-form-label">ID Klasifikasi</label>

                                                                <input type="text" class="form-control" name="id_klasifikasi" value="{{ $item->id_klasifikasi }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="recipient-name" class="col-form-label">Contact</label>
                                                                <input type="text" class="form-control" name="Contact" value="{{ $item->Contact }}"
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
