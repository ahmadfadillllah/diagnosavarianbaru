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
                                <h4 class="card-title">Gejala yang nampak pada diri</h4>
                            </div>
                            <div class="card-body">
                                <div class="demo-inline-spacing md-12">
                                    [masih tahap pengembangan]
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Hasil Diagnosa</h4>
                            </div>
                            <div class="card-body">
                                <div class="demo-inline-spacing md-12">
                                    {{ $keterangan->solusi }}
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-outline-info">Kembali</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Basic Checkbox end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@include('dashboard.master.footer')
