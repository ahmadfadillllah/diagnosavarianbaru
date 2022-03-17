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

                                <h4 class="card-title">Daftar Admin</h4>
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
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        <tr class="table-default">
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td><span
                                                    class="badge rounded-pill badge-light-primary me-1">{{ $item->status }}</span>
                                            </td>
                                            <td>
                                                <a href="/dashboard/users/admin/edit/{{  $item->id }}"
                                                    class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#edituser">Edit</a>
                                                <a href="/dashboard/users/admin/delete/{{  $item->id }}"
                                                    onclick="return confirm('Yakin ingin menghapus gejala tersebut ?')"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            </td>

                                            <!-- Edit User Modal -->
                                            <div class="modal fade" id="edituser" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Edit User
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/dashboard/users/admin/update/{{ $item->id }}" method="POST">
                                                                @csrf
                                                                <div class="mb-3">
                                                                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                                  <input type="text" class="form-control" value="{{ $item->name }}" name="name" aria-describedby="emailHelp" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                  <label for="exampleInputPassword1" class="form-label">Role</label>
                                                                  <select class="form-select" name="role" aria-label="Default select example">
                                                                    <option value="admin">Admin</option>
                                                                    <option value="pakar">Pakar</option>
                                                                  </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                                                    <select class="form-select" name="status" aria-label="Default select example">
                                                                      <option value="active">Active</option>
                                                                      <option value="not active">Not Active</option>
                                                                    </select>
                                                                  </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Update</button>
                                                                </div>
                                                              </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
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
