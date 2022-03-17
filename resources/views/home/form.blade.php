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
                        <h2 class="page__title-2">Form Data Pasien Konsultasi</h2>
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
                            <form action="{{ route('postform') }}" method="POST">
                                @csrf
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Nama</h5>
                                    <div class="sign__input">
                                        <input type="text" name="name" placeholder="Nama Lengkap">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    @error('name')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Work email</h5>
                                    <div class="sign__input">
                                        <input type="email" name="email" placeholder="e-mail address">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    @error('email')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sign__input-wrapper mb-25">
                                    <h5>Jenis Kelamin</h5>
                                    <select name="jenis_kelamin" class="form-select form-select-lg mb-3">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                      </select>
                                    @error('jenis_kelamin')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>No. Telepon</h5>
                                    <div class="sign__input">
                                        <input type="text" name="no_hp" placeholder="No. Telepon">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    @error('no_hp')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sign__input-wrapper mb-10">
                                    <h5>Alamat</h5>
                                    <div class="sign__input">
                                        <input type="text" name="alamat" placeholder="Alamat">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    @error('alamat')
                                    <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sign__action d-flex justify-content-between mb-30">
                                    <div class="sign__agree d-flex align-items-center">
                                        <input class="m-check-input" type="checkbox" id="m-agree">
                                        <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms &
                                                Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <button class="w-btn w-btn-11 w-100"> <span></span> Proses</button>
                            </form>
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
