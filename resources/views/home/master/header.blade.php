<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area header__border header__padding">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="logo">
                   <h3>Sistem Pakar</h3>
                </div>
             </div>
             <div class="col-xxl-7 col-xl-7 col-lg-7 d-none d-lg-block">
                <div class="main-menu main-menu-2 pl-40">
                   <nav id="mobile-menu">
                      <ul>
                           <li><a href="/">Beranda</a></li>
                         <li><a href="about.html">Profil</a></li>
                         <li class="has-dropdown">
                           <a href="index.html">Informasi</a>
                           <ul class="submenu">
                              <li><a href="index.html">Berita</a></li>
                              <li><a href="index-2.html">Pencegahan</a></li>
                              <li><a href="index-3.html">Konsultasi</a></li>
                           </ul>
                        </li>
                         <li><a href="about.html">Kontak Kami</a></li>
                      </ul>
                   </nav>
                </div>
             </div>
             <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                <div class="header__right text-end d-flex align-items-center justify-content-end">
                   <div class="header__right-btn d-none d-md-flex d-xl-block">
                      <a href="{{ route('login') }}" class="w-btn w-btn-transparent w-btn-transparent-2">login</a>
                      <a href="{{ route('register') }}" class="w-btn w-btn-blue w-btn-blue-header ml-30">register</a>
                   </div>
                   <div class="sidebar__menu d-lg-none">
                      <div class="sidebar-toggle-btn sidebar-toggle-btn-2" id="sidebar-toggle">
                          <span class="line"></span>
                          <span class="line"></span>
                          <span class="line"></span>
                      </div>
                  </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- header area end -->

 <!-- sidebar area start -->
 <div class="sidebar__area">
    <div class="sidebar__wrapper">
       <div class="sidebar__close">
          <button class="sidebar__close-btn" id="sidebar__close-btn">
          <span><i class="fal fa-times"></i></span>
          <span>close</span>
          </button>
       </div>
       <div class="sidebar__content">
          <div class="logo mb-40">
             <a href="index.html">
             <img src="{{ asset('wetland') }}/assets/img/logo/logo.png" alt="logo">
             </a>
          </div>
          <div class="mobile-menu mobile-menu-2"></div>
          <div class="sidebar__info mt-350">
             <a href="#" class="w-btn w-btn-blue-2 w-btn-4 d-block mb-15 mt-15">login</a>
             <a href="#" class="w-btn w-btn-blue d-block">sign up</a>
          </div>
       </div>
    </div>
 </div>
 <!-- sidebar area end -->
 <div class="body-overlay"></div>
 <!-- sidebar area end -->
