<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h5 class="m-0 text-white">تنظیمات</h5>
    </div>
    <div class="slimscroll-menu">
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{ asset('images/admin/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
            </div>

            <h5><a href="javascript: void(0);">رضا پاسالار</a> </h5>
            <p class="text-muted mb-0"><small>مدیر اصلی</small></p>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h5 class="pl-3">تنظیمات پایه</h5>
        <hr class="mb-0" />


        <div class="p-3">
            <div class="checkbox checkbox-primary mb-2">
                <input id="checkbox1" type="checkbox" checked>
                <label for="checkbox1">
                    اعلانات
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="checkbox2" type="checkbox" checked>
                <label for="checkbox2">
                    دسترسی به API
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="checkbox3" type="checkbox">
                <label for="checkbox3">
                    آپدیت خودکار
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-2">
                <input id="checkbox4" type="checkbox" checked>
                <label for="checkbox4">
                    وضعیت آنلاین
                </label>
            </div>
            <div class="checkbox checkbox-primary mb-0">
                <input id="checkbox5" type="checkbox" checked>
                <label for="checkbox5">
                    پرداخت خودکار
                </label>
            </div>
        </div>

        <!-- Timeline -->
        <hr class="mt-0" />
        <h5 class="pl-3 pr-3">پیام ها <span class="float-right badge badge-pill badge-danger">25</span></h5>
        <hr class="mb-0" />
        <div class="p-3">
            <div class="inbox-widget">
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('images/admin/users/avatar-1.jpg') }}" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">چادنگل</a></p>
                    <p class="inbox-item-text">سلام، فعلا هیچ مشکل نیست...</p>
                    <p class="inbox-item-date">13:40 بعد ظهر</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('images/admin/users/avatar-2.jpg') }}" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">توماس لاو</a></p>
                    <p class="inbox-item-text">پایان پروژه های جدید...</p>
                    <p class="inbox-item-date">13:34 بعد ظهر</p>
                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('images/admin/users/avatar-3.jpg') }}" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">عباسی</a></p>
                    <p class="inbox-item-text">همه چیز عالی پیش رفته!</p>
                    <p class="inbox-item-date">13:17 بعد ظهر</p>
                </div>

                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('images/admin/users/avatar-4.jpg') }}" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">فرشید</a></p>
                    <p class="inbox-item-text">بعدا می بینمت</p>
                    <p class="inbox-item-date">12:20 بعد ظهر</p>

                </div>
                <div class="inbox-item">
                    <div class="inbox-item-img"><img src="{{ asset('images/admin/users/avatar-5.jpg') }}" class="rounded-circle" alt=""></div>
                    <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">معین</a></p>
                    <p class="inbox-item-text">سلام، کسی هست؟...</p>
                    <p class="inbox-item-date">10:15 قبل ظهر</p>

                </div>
            </div> <!-- end inbox-widget -->
        </div> <!-- end .p-3-->

    </div> <!-- end slimscroll-menu-->
</div>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
