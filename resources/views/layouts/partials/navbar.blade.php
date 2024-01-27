<header class="header-desktop"  style="background-color: #365cad;">
    <div class="section__content section__content--p30" >
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                </form>
                <div class="header-button justify-content-end">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ asset('assets/images/icon/avatar-01.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn text-white">{{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/icon/avatar-01.jpg') }}"" alt="" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('user.edit',Auth::id()) }}"><i class="fa fa-pencil-square-o"></i>Edit Akun</a>
                                    <a href="/logout"><i class="fa fa-power-off"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
