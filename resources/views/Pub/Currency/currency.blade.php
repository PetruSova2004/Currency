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
                        <div class="card" style="padding: 2%">

                            <div id="usersTable"></div>
                            <div class="card-body table-responsive p-0 usersTable">
                                <form action="{{route('currency.exchange')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="from_currency">From Currency:</label>
                                        <select class="form-control" id="from_currency" name="from_currency">
                                            @foreach($currencies as $item)
                                                <option value="{{$item->currency}}">{{$item->currency}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="to_currency">To Currency:</label>
                                        <select class="form-control" id="to_currency" name="to_currency">
                                            @foreach($currencies as $item)
                                                <option value="{{$item->currency}}">{{$item->currency}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount:</label>
                                        <input type="text" class="form-control" id="amount" name="amount"
                                               placeholder="Amount">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Convert</button>
                                    @if (request()->has('from') && request()->has('to') && request()->has('amount') && request()->has('value'))
                                        <p>{{ request('amount') }} {{ request('from') }} = {{ request('value') }} {{ request('to') }}</p>
                                    @else
                                        <p>0</p>
                                    @endif

                                </form>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
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
