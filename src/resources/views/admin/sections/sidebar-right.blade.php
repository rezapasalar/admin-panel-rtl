<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

				@if(Route::has('admin.panel'))
                <li>
                    <a href="{{ route('admin.panel') }}">
						<i class="ion-ios-speedometer"></i>
                        <span>داشبورد</span>
                    </a>
                </li>
				@endif
				
				<li class="text-center menu-title bg-primary text-light">صفحه اصلی</li>
				
				<li>
                    <a href="javascript: void(0);">
                        <i class="ion-card"></i>
                        <span>اسلاید ها</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(Route::has('slides.index'))
                        <li>
                            <a href="{{ route('slides.index') }}">لیست اسلاید ها</a>
                        </li>
                        @endif

                        @if(Route::has('slides.create'))
                        <li>
                            <a href="{{ route('slides.create') }}">ثبت اسلاید</a>
                        </li>
                        @endif
                    </ul>
                </li>
				
				<li>
                    <a href="javascript: void(0);">
                        <i class="ion-card"></i>
                        <span>ویژگی ها</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(Route::has('features.index'))
                        <li>
                            <a href="{{ route('features.index') }}">لیست ویژگی ها</a>
                        </li>
                        @endif

                        @if(Route::has('features.create'))
                        <li>
                            <a href="{{ route('features.create') }}">ثبت ویژگی</a>
                        </li>
                        @endif
                    </ul>
                </li>
				
				<li>
                    <a href="javascript: void(0);">
                        <i class="ion-card"></i>
                        <span>درباره ها</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(Route::has('abouts.index'))
                        <li>
                            <a href="{{ route('abouts.index') }}">لیست درباره ها</a>
                        </li>
                        @endif

                        @if(Route::has('abouts.create'))
                        <li>
                            <a href="{{ route('abouts.create') }}">ثبت درباره</a>
                        </li>
                        @endif
                    </ul>
                </li>
				
				<li class="text-center menu-title bg-primary text-light">مطالب اصلی</li>

				@if(Route::has('categories.index'))
				<li>
                    <a href="{{ route('categories.index') }}">
						<i class="ion-ios-list"></i>
                        <span>گروه ها</span>
                    </a>
                </li>
				@endif

                <li>
                    <a href="javascript: void(0);">
                        <i class="ion-card"></i>
                        <span>مقاله ها</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        @if(Route::has('articles.index'))
                        <li>
                            <a href="{{ route('articles.index') }}">لیست مقاله ها</a>
                        </li>
                        @endif

                        @if(Route::has('articles.create'))
                        <li>
                            <a href="{{ route('articles.create') }}">ثبت مقاله</a>
                        </li>
                        @endif
                    </ul>
                </li>
				
				@if(Route::has('articles.vuejs'))
				<li>
                    <a href="{{ route('articles.vuejs') }}">
						<i class="ion-card"></i>
                        <span>مقاله ها</span>
                    </a>
                </li>
				@endif

                <li>
                    <a href="javascript: void(0);">
                        <i class="ion-ios-paper"></i>
                        <span>دوره ها</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
						@if(Route::has('courses.index'))
                        <li>
                            <a href="{{ route('courses.index') }}">لیست دوره ها</a>
                        </li>
						@endif
						
						@if(Route::has('courses.create'))
                        <li>
                            <a href="{{ route('courses.create') }}">ثبت دوره</a>
                        </li>
						@endif
                    </ul>
                </li>
				
				<li>
                    <a href="#">
						<i class="ion-ios-paper"></i>
                        <span>دوره ها</span>
                    </a>
                </li>
				
				@can('show-users')
				<li class="text-center menu-title bg-primary text-light">سطوح دسترسی</li>
				
				<li>
                    <a href="javascript: void(0);">
                        <i class="ion-person-stalker"></i>
                        <span>کاربران</span>
                        <span class="menu-arrow"></span>
                    </a>
					<ul class="nav-second-level" aria-expanded="false">
						@if(Route::has('users.index'))
                        <li>
                            <a href="{{ route('users.index') }}">کاربران معمولی</a>
                        </li>
						@endif
						
						@if(Route::has('level.index'))
                        <li>
                            <a href="{{ route('level.index') }}">کاربران مدیریت</a>
                        </li>
						@endif
                    </ul>
				</li>
				
				<li>
                    <a href="javascript: void(0);">
                        <i class="ion-ribbon-a"></i>
                        <span>مقام ها</span>
                        <span class="menu-arrow"></span>
                    </a>
					<ul class="nav-second-level" aria-expanded="false">
						@if(Route::has('roles.index'))
                        <li>
                            <a href="{{ route('roles.index') }}">لیست مقام ها</a>
                        </li>
						@endif
						
						@if(Route::has('roles.create'))
                        <li>
                            <a href="{{ route('roles.create') }}">ثبت مقام</a>
                        </li>
						@endif
                    </ul>
				</li>
				
				<li>
                    <a href="javascript: void(0);">
                        <i class="ion-ios-paper"></i>
                        <span>مجوزها</span>
                        <span class="menu-arrow"></span>
                    </a>
					<ul class="nav-second-level" aria-expanded="false">
						@if(Route::has('permissions.index'))
                        <li>
                            <a href="{{ route('permissions.index') }}">لیست مجوزها</a>
                        </li>
						@endif
						
						@if(Route::has('permissions.create'))
                        <li>
                            <a href="{{ route('permissions.create') }}">ثبت مجوز</a>
                        </li>
						@endif
                    </ul>
				</li>
				@endcan

                <li class="text-center menu-title bg-primary text-light">ابزار</li>
				
				@if(Route::has('comments.index'))
				<li>
                    <a class="d-flex flex-wrap justify-content-between align-items-center" href="{{ route('comments.index') }}">
						<span>
							<i class="ion-chatbubbles"></i>
							<span>دیدگاه ها</span>
						</span>
						
						<span class="badge badge-success mt-0">
							<count-comments></count-comments>
						</span>
                    </a>
                </li>
				@endif

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
