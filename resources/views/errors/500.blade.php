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
                        <h1>Ошибка 500</h1>
                        <p>Произошла внутренняя ошибка сервера.</p>

                        @if($exception->getMessage())
                            <p>Дополнительная информация: {{ $exception->getMessage() }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>

</div>


@include('Pub.layouts.parts.footer_settings')

</body>
</html>
