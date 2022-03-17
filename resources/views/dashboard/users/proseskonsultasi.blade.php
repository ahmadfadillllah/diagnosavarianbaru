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
                        <h2 class="content-header-title float-start mb-0">Proses</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Form Konsultasi
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic Checkbox start -->
            <section id="basic-checkbox">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pilih Gejala</h4>
                            </div>
                            <form action="/dashboard/users/konsultasi/proses/cek/{{ $users->id }}" method="GET">
                                <div class="card-body">
                                    <div class="demo-inline-spacing md-12">
                                        @foreach ($gejala as $item)
                                        <div class="container">
                                            <div class="row">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="daftargejala[]" value="{{ $item->kode }}"/>
                                                    <label class="form-check-label" for="inlineCheckbox1">{{ $item->nama }}</label>
                                                </div>
                                            </div>
                                          </div>

                                        @endforeach
                                        <button type="submit" class="btn btn-outline-info">Cek Gejala</button>                            </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </section>
            <!-- Basic Checkbox end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@include('dashboard.master.footer')
