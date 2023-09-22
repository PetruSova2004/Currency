<!DOCTYPE html>
<html lang="en">
@include('Pub.layouts.parts.header_settings')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('Pub.layouts.parts.sidebar')
    <div class="content-wrapper">

        @include('Pub.layouts.parts.wrapper')

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body table-responsive p-0 usersTable">
                                    <form role="form" method="post" action="{{route('post.update', ['post' => $post->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-4 col-lg-4">
                                                    <div class="form-group"><label>Title</label>
                                                        <input type="text" class="form-control" name="title"
                                                               value="{{$post->title}}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 col-lg-4">
                                                    <div class="form-group"><label>Slug</label>
                                                        <input type="text" class="form-control" name="description" value="{{$post->description}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-1">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>


                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>


@include('Pub.layouts.parts.footer_settings')

</body>
</html>
