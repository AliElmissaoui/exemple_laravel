<body style="background-image:url('{{ asset('asset/images/slide1.jpg') }}')" class="antialiased">

    <div class="container">


            <div class="vertical-center row align-items-center">






                @if (Auth::guest())
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('register') }}">Create</a>
                </div>
                @else
                <div class="col">
                   <a class="btn btn-primary" href="{{ route('logoutCreate') }}">Create</a>
                </div>
                @endif

                <div class="col">


                    <a class="btn btn-primary" href="{{ route('espace.useredite')}}">Modifier</a>

                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('info.user')}}">Consulter</a>
                </div>


                {{--  @foreach($users as $user)
                <div class="col">

                    <a class="btn btn-primary" href="{{ route('espace.useredite',['id'=>$user->id]) }}">Modifier</a>


                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('info.user',['id'=>$user->id]) }}">Consulter</a>
                </div>
                @endforeach  --}}


              </div>


    </div>
