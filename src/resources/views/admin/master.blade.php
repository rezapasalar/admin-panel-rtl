<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.admin.sections.head')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('layouts.admin.sections.topbar')
            <!-- end Topbar -->

            <!-- Right Sidebar Start -->
            @include('layouts.admin.sections.sidebar-right')
            <!-- Right Sidebar End -->

            <!-- Content Start -->
            <div class="content-page">

                <div class="content">

                    <div class="container-fluid">

                        <!-- start page title -->
                        @include('layouts.admin.sections.breadcrumb')
                        <!-- end page title -->

                        {{ $content ?? '' }}

                    </div>

                </div>

                <!-- Footer Start -->
                @include('layouts.admin.sections.footer')
                <!-- end Footer -->

            </div>
            <!-- Content End -->
			
			<broadcast-notifises></broadcast-notifises>

        </div>
        <!-- END wrapper -->

        <!-- Left Sidebar -->
        @include('layouts.admin.sections.sidebar-left')
        <!-- Left-bar -->
		
		@include('layouts.admin.sections.script')
    </body>

</html>
