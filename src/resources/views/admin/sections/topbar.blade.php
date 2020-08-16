<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown d-none d-lg-block">
            <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('images/admin/flags/us.jpg') }}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">انگلیسی <i class="mdi mdi-chevron-down"></i> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('images/admin/flags/germany.jpg') }}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">آلمانی</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('images/admin/flags/italy.jpg') }}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">ایتالیایی</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('images/admin/flags/spain.jpg') }}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">اسپانیایی</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('images/admin/flags/russia.jpg') }}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">روسیه ای</span>
                </a>

            </div>
        </li>


        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>
                <span class="badge badge-info noti-icon-badge">21</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
						<span class="float-right">
							<a href="#" class="text-dark">
								<small>پاک کردن همه</small>
							</a>
						</span>اعلانات
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i> </div>
                        <p class="notify-details">رضا پاسالار درباره مدیریت گفت<small class="text-muted">1 دقیقه پیش</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                        <p class="notify-details">کاربر جدید ثبت شده است.<small class="text-muted">5 ساعت پیش</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="{{ asset('images/admin/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">طاهر نصیری</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>سلام. چطوری؟ جلسه بعدی ما درباره چیست؟</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-danger"><i class="mdi mdi-comment-account-outline"></i></div>
                        <p class="notify-details">رضا پاسالار درباره مدیریت گفت<small class="text-muted">4 روز پیش</small></p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="{{ asset('images/admin/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">رضا پاسالار</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>وای که عالی هست</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">مورد تایید جعفر قرار گرفت
                            <b>ادمین</b>
                            <small class="text-muted">13 روز قبل</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    نمایش همه
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('images/admin/users/avatar-4.jpg') }}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                    {{ optional(auth()->user())->name }}
                    <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h6 class="m-0">
                        خوش آمدید!
                    </h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-user"></i>
                    <span>حساب من</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-gear"></i>
                    <span>تنظیمات</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-help"></i>
                    <span>پشتیبانی</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="dripicons-lock"></i>
                    <span>قفل صفحه</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
				@if(Route::has("logout"))
					<form action="{{ route('logout') }}" method="post">
						@csrf
						<button type="submit" class="dropdown-item notify-item">
							<i class="dripicons-power"></i>
							<span>خروج</span>
						</button>
					</form>
				@endif

            </div>
        </li>

        <li class="dropdown notification-list ml-0">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <b><i class="ion-gear-b" style="font-size: 30px !important"></i></b>
            </a>
        </li>

    </ul>

    <ul class="list-unstyled menu-left mb-0">
        <li class="float-left">
            <a href="/" class="logo">
				<span class="logo-lg">
					<img src="{{ asset('images/admin/logo/logo-light.png') }}" alt="" height="22">
				</span>
				<span class="logo-sm">
					<img src="{{ asset('images/admin/logo/logo-sm.png') }}" alt="" height="24">
				</span>
            </a>
        </li>
        <li class="float-left">
            <a class="button-menu-mobile navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </li>
        <li class="app-search d-none d-md-block">
            <form>
                <input type="text" placeholder="جستجو..." class="form-control">
                <button type="submit" class="sr-only"></button>
            </form>
        </li>
    </ul>
</div>
