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
                        <h2 class="content-header-title float-start mb-0">Account</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Account Settings </a>
                                </li>
                                <li class="breadcrumb-item active"> <a href="#">Profile </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-2">
                        <!-- account -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('profil.index') }}">
                                <i data-feather="user" class="font-medium-3 me-50"></i>
                                <span class="fw-bold">Account</span>
                            </a>
                        </li>
                    </ul>

                    @if (session('info'))
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong>Info!</strong> {{ session('info') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                    <!-- profile -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Profile Details</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <!-- header section -->
                            <div class="d-flex">
                                <a href="#" class="me-25">
                                    <img src="{{ asset('vuexy') }}/app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                </a>
                            </div>
                            <!--/ header section -->

                            <!-- form -->
                            <form class="validate-form mt-2 pt-50">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountLastName">Nama</label>
                                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" data-msg="Please enter name" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountEmail">Email</label>
                                        <input type="email" class="form-control" id="accountEmail" name="email" value="{{ Auth::user()->email }}" data-msg="Please enter email" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">Phone Number</label>
                                        <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="no_hp" value="{{ Auth::user()->no_hp }}" data-msg="Please enter No. Handphone" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountAddress">Address</label>
                                        <input type="text" class="form-control" id="accountAddress" name="alamat" value="{{ Auth::user()->alamat }}" data-msg="Please enter Address" />
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountState">State</label>
                                        <input type="text" class="form-control" id="accountState" name="state" value="{{ Auth::user()->state }}" data-msg="Please enter State"/>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Zip Code</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipcode" value="{{ Auth::user()->zipcode }}" maxlength="6" data-msg="Please enter Zip Code"/>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                                    </div>
                                </div>
                            </form>
                            <!--/ form -->
                        </div>
                    </div>

                    <!-- deactivate account  -->
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Delete Account</h4>
                        </div>
                        <div class="card-body py-2 my-25">
                            <div class="alert alert-warning">
                                <h4 class="alert-heading">Are you sure you want to delete your account?</h4>
                                <div class="alert-body fw-normal">
                                    Once you delete your account, there is no going back. Please be certain.
                                </div>
                            </div>

                            <form action="{{ route('profil.deactive') }}" method="POST" class="validate-form">
                                @csrf
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" data-msg="Please confirm you want to delete account" />
                                    <label class="form-check-label font-small-3" for="accountActivation">
                                        I confirm my account deactivation
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-danger deactivate-account mt-1">Deactivate Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/ profile -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

@include('dashboard.master.footer')
