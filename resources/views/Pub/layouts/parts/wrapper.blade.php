<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            @auth()
                <div class="col-sm-6">
                    @php
                        $user = \App\Models\User::query()
                        ->where('id', \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier())
                        ->first();
                    @endphp
                    <h1 class="m-0">Name: {{$user->name}}</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('logout')}}">Logout</a></li>
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    </ol>
                </div>
            @endauth

            @guest()
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('login.index')}}">Log in</a></li>
                        <li class="breadcrumb-item"><a href="{{route('register.index')}}">Register</a></li>
                    </ol>
                </div>
            @endguest
        </div>
    </div>
</div>

