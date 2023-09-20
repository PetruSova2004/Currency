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
                <form id="urlForm" action="#" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input type="text" name="original_url" class="form-control" placeholder="Original_Url">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

</body>
