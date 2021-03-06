@include('home.master.head')
@include('home.master.header')

<main>

    <!-- hero area start -->
    <section class="hero__area hero__height-2 p-relative d-flex align-items-center">
        <div class="hero__shape-2">
            <img class="hero-2-dot" src="{{ asset('wetland') }}/assets/img/icon/hero/home-2/hero-2-dot.png" alt="">
            <img class="hero-2-dot-2" src="{{ asset('wetland') }}/assets/img/icon/hero/home-2/hero-2-dot-2.png" alt="">
            <img class="hero-2-flower" src="{{ asset('wetland') }}/assets/img/icon/hero/home-2/hero-2-flower.png"
                alt="">
            <img class="hero-2-triangle" src="{{ asset('wetland') }}/assets/img/icon/hero/home-2/hero-2-triangle.png"
                alt="">
            <img class="hero-2-triangle-2"
                src="{{ asset('wetland') }}/assets/img/icon/hero/home-2/hero-2-triangle-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-6 col-lg-8">
                    <div class="hero__content-2 mt-55">
                        <span class="hero__pre-title">Selamat Datang</span>
                        <h2 class="hero__title-2">Aplikasi Sistem Pakar</h2>
                        <p>Penyakit corona virus pendeteksi varian baru.</p>
                        <a href="{{ route('form') }}" class="w-btn w-btn-blue w-btn-7 w-btn-6">Mulai Berkonsultasi</a>

                        <div class="hero__client mt-60">
                            <ul>
                                <li><img src="{{ asset('wetland') }}/assets/img/client/home-2/client-2-1.png" alt="">
                                </li>
                                <li><img src="{{ asset('wetland') }}/assets/img/client/home-2/client-2-2.png" alt="">
                                </li>
                                <li><img src="{{ asset('wetland') }}/assets/img/client/home-2/client-2-3.png" alt="">
                                </li>
                                <li><img src="{{ asset('wetland') }}/assets/img/client/home-2/client-2-4.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2 mt-80">
                        <div class="hero__thumb-inner p-relative ml-90">
                            <img class="hero-2-girl" src="{{ asset('wetland') }}/assets/img/hero/home-2/3658058.jpg"
                                alt="" width="100%" style="border-radius: 70px">
                            <img class="hero-2-circle"
                                src="{{ asset('wetland') }}/assets/img/hero/home-2/hero-2-circle.png" alt="">
                            <img class="hero-2-circle-2"
                                src="{{ asset('wetland') }}/assets/img/hero/home-2/hero-2-circle-2.png" alt="">
                            <img class="hero-2-leaf" src="{{ asset('wetland') }}/assets/img/hero/home-2/hero-2-leaf.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end -->
</main>

@include('home.master.footer')
@include('home.master.bottom')
