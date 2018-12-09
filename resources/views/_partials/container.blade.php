<div class="page-wrapper">
  @stack('page-wrapper-start')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @stack('page-container-start')
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Table Basic</h4>
            </div>
            @include('_partials.breadcrumb')
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @yield('content')
        <div class="row">
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <h6 class="card-subtitle">Add class <code>.table</code></h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Table Hover</h4>
                        <h6 class="card-subtitle">Add class <code>.table-hover</code></h6>

                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bordered Table</h4>
                        <h6 class="card-subtitle">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</h6>

                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Striped Table</h4>
                        <h6 class="card-subtitle">Add<code>.table-striped</code>for borders on all sides of the table and cells.</h6>

                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Responsive Table </h4>
                        <h6 class="card-subtitle">Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive </code></h6>

                    </div>
                </div>
            </div>
            <!-- column -->

        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        @stack('page-container-end')

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    @stack('page-wrapper-end')
</div>
