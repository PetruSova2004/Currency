<!DOCTYPE html>
<html lang="en">
@include('Pub.layouts.parts.header_settings')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('Pub.layouts.parts.sidebar')

    @include('Pub.layouts.parts.wrapper')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div id="usersTable"></div>
                        <div class="card-body table-responsive p-0 usersTable">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Original_Url</th>
                                    <th>Short_Url</th>
                                </tr>
                                </thead>
                                <tbody id="userTableBody">
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>


@include('Pub.layouts.parts.footer_settings')

</body>
</html>
