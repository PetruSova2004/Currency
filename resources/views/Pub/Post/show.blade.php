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
                            <div class="card-header d-flex p-3">
                                <div class="mr-3">
                                    <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Update</a>
                                </div>
                                <form action="{{route('post.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <tbody>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{$post->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{$post->description}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
