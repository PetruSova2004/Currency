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
                                <form id="importForm" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <input type="file" name="file" id="fileInput">
                                    <input type="submit" class="btn btn-primary mb-3" value="Import Post" disabled>
                                </form>
                                <div id="validationMessage" class="text-danger">
                                    The first column of the file should be "title", and the second - "description", otherwise the import will not complete.
                                </div>
                                <div class="card-body table-responsive p-0 usersTable">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$post->id}}</td>
                                                <td><a href="{{ route('post.show', ['post' => $post->id]) }}">{{$post->title}}</a></td>
                                                <td>{{$post->description}}</td>

                                                <td>
                                                    <a href="{{route('post.edit', ['post' => $post->id])}}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt">Edit</i>
                                                    </a>

                                                    <form
                                                        action="{{ route('post.destroy', ['post' => $post->id]) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Подтвердите удаление')">
                                                            <i
                                                                class="fas fa-trash-alt">Delete</i>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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

<script src="/plugins/customFiles/post-index.js"></script>

</body>
</html>
