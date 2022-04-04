@include('home.master.head')
@include('home.master.header')

<main>


    <!-- sign up area start -->
    <section class="signup__area po-rel-z1 pt-100 pb-145">
        <div class="sign__shape">
            <img class="man-1" src="assets/img/icon/sign/man-3.png" alt="">
            <img class="man-2 man-22" src="assets/img/icon/sign/man-2.png" alt="">
            <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
            <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
            <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
            <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            <img class="flower" src="assets/img/icon/sign/flower.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                    <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Hasil Diagnosa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                            @if (session('info'))
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> {{ session('info') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="sign__input-wrapper mb-25">
                                <strong>Data Diagnosa</strong>
                                <p>
                                    {{ $konsultasi->name }} <br>
                                    {{ $konsultasi->jenis_kelamin }} <br>
                                    {{ $konsultasi->no_hp }} <br>
                                    {{ $konsultasi->alamat }} <br>
                                </p>
                            </div>
                            {{-- <div class="sign__input-wrapper mb-25">
                                <strong>Gejala yang nampak pada diri</strong>
                                <p>{{ $gejala1->nama }} <br>
                                    {{ $gejala2->nama }}
                                </p>
                            </div> --}}
                                <div class="sign__input-wrapper mb-25">
                                    <strong>Hasil Diagnosa</strong>
                                    <p>{{ $keterangan->solusi }}</p>
                                </div>


                                <a href="{{ route('form') }}" class="w-btn w-btn-11 w-100"> <span></span> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up area end -->
</main>

@include('home.master.footer')
@include('home.master.bottom')
