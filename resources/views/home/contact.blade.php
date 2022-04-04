@include('home.master.head')
@include('home.master.header')

<main>

    <!-- page title area start -->
    <section class="page__title-area page__title-height d-flex align-items-center fix p-relative z-index-1" data-background="assets/img/page-title/page-title.jpg">
       <div class="page__title-shape">
          <img class="page-title-dot-4" src="{{ asset('home') }}/assets/img/page-title/dot-4.png" alt="">
          <img class="page-title-dot" src="{{ asset('home') }}/assets/img/page-title/dot.png" alt="">
          <img class="page-title-dot-2" src="{{ asset('home') }}/assets/img/page-title/dot-2.png" alt="">
          <img class="page-title-dot-3" src="{{ asset('home') }}/assets/img/page-title/dot-3.png" alt="">
          <img class="page-title-plus" src="{{ asset('home') }}/assets/img/page-title/plus.png" alt="">
          <img class="page-title-triangle" src="{{ asset('home') }}/assets/img/page-title/triangle.png" alt="">
       </div>
       <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="page__title-wrapper text-center">
                   <h3 style="color:rgb(31, 29, 29)">Hubungi Kami </h3>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- page title area end -->

     <!-- contact area start  -->
     <section class="contact__area pb-150 p-relative z-index-1">
        <div class="container">
           <div class="row">
              <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                 <div class="contact__wrapper white-bg mt--70 p-relative z-index-1 wow fadeInUp" data-wow-delay=".3s">
                    <div class="row">
                        @if (session('notif'))
                              <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> {{ session('notif') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                       <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                          <div class="contact__info pr-80">
                             <h3 class="contact__title">Pakar</h3>

                             <div class="contact__details">
                                <ul>
                                   <li>
                                      <h4>Our Location</h4>
                                      <p>Kel. Eban, Kec. Miomaffo Barat, Kab. Timor Tengah Utara, Nusa Tenggara Timur</p>
                                   </li>
                                   <li>
                                      <h4>Email Adress</h4>
                                      <p>FeryFerdianto@gmail.com</p>
                                   </li>
                                   <li>
                                      <h4>Hotline Number</h4>
                                      <p>+62 821 3233 9901</p>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                       <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                          <div class="contact__form">
                             <form action="{{ route('postcontact') }}" method="POST">
                                @csrf
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="subject" name="subject" placeholder="Subject" required>
                                <textarea placeholder="Message" name="message" required></textarea>
                                <button type="submit" class="w-btn w-btn-blue-5 w-btn-6 w-btn-14">Send Massage</button>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- contact area end  -->

    <!-- contact form area start -->
    <section class="contact__map">
       <div class="container-fluid p-0">
          <div class="row g-0">
             <div class="col-xxl-12">
                <div class="contact__map wow fadeInUp" data-wow-delay=".3s">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.4800810528923!2d90.36797221544877!3d23.837080434546706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a3366b005%3A0x901b07016468944c!2z4Kau4Ka_4Kaw4Kaq4KeB4KawIOCmoeCmvyzgppMs4KaP4KaH4KaaLOCmj-CmuCwg4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1615723408957!5m2!1sbn!2sbd"></iframe>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- contact form area end -->
 </main>

@include('home.master.footer')
@include('home.master.bottom')

