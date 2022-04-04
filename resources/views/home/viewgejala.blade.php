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
                        <h2 class="hero__title-2">Daftar Gejala</h2>

                        <div class="hero__client mt-60">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Kode Gejala</th>
                                    <th scope="col">Nama Gejala</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($gejala as $item)
                                  <tr>
                                    <th scope="row">{{ $item->kode }}</th>
                                    <td>{{ $item->nama }}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-xl-6">
                    <div class="hero__thumb-2 mt-80">
                        <div class="hero__thumb-inner p-relative ml-90">
                            <img class="hero-2-thumb"
                                src="{{ asset('wetland') }}/assets/img/hero/home-2/3594049.jpg" width="80%" style="border-radius: 70px" alt="">
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
