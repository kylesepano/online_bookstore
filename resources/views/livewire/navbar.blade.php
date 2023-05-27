<div wire:ignore.self>
    <style>
        /* Additional CSS to keep the dropdown open on hover */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('home') }}"><img src="{{ asset('design/name.png') }}" class="img-fluid"
                            alt=""></a>
                </div>
                <div class="col-md-5">
                    <input type="text" wire:model="search" class="form-control" placeholder="Search">
                </div>
                @auth
                    <div class="col-md-2">
                        <button class="btn text-uppercase" title="PROFILE">{{ auth()->user()->username }}</button>
                    </div>
                @else
                    <div class="col-md-1">
                        <a href="{{ route('login') }}"><button class="btn btn-primary" title="LOGIN"><i
                                    class="fa-solid fa-right-to-bracket"></i></button>
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('register') }}"> <button class="btn btn-warning" title="REGISTER"><i
                                    class="fa-solid fa-address-card"></i></button></a>

                    </div>
                @endauth
                <div class="col-md-1">
                    <button class="btn "><i class="fa-solid fa-cart-shopping"></i></button>
                </div>
            </div>
        </div>
    </nav>
    @if (Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register')
        <nav class="navbar sticky-top navbar-primary bg-primary ">
            <div class="container">
                <div class="col-md-2 d-flex justify-content-center py-1">
                    <button type="button" wire:click="hover({{ 1 }})" class="btn text-light">BOOKS</button>
                </div>
                <div class="col-md-2 d-flex justify-content-center py-1">
                    <button type="button" wire:click="hover({{ 2 }})"
                        class="btn text-light">OTHERS</button>
                </div>
                <div class="col-md-2 d-flex justify-content-center py-1">
                    <button type="button" wire:click="hover({{ 3 }})"
                        class="btn text-light">COLLECTIONS</button>
                </div>
                <div class="col-md-2 d-flex justify-content-center py-1">
                    <a href="{{ route('new') }}"><button class="btn text-light">NEW</button></a>
                </div>
                <div class="col-md-2 d-flex justify-content-center py-1">
                    <a href="{{ route('preorder') }}"><button class="btn text-light">PRE ORDER</button></a>
                </div>
                <div class="col-md-2 d-flex justify-content-center py-1">
                    <a href="{{ route('sale') }}"><button class="btn text-light">SALE</button></a>
                </div>

                <div class="dropdown-menu px-5 overflow-auto" style="width: 100%; height:600px" wire:ignore.self>
                    @if ($type != null)
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('type', $type->name) }}">
                                <h2 class="text-bold text-uppercase text-dark">{{ $type->name }}</h2>
                            </a>
                            <button wire:click="clo" class="btn btn-rounded text-danger"><i
                                    class="fa-solid fa-circle-xmark"></i></button>
                        </div>
                        <div class="row">
                            @foreach ($type->book_criterias as $c)
                                <div class="col-md-3 my-2">
                                    <a href="{{ route('criteria', ['type' => $type->name, 'criteria' => $c->name]) }}">
                                        <h6 class="text-bold text-dark text-uppercase pb-2">{{ $c->name }}
                                        </h6>
                                    </a>
                                    @foreach ($c->book_categories as $bc)
                                        <a
                                            href="{{ route('category', ['type' => $type->name, 'criteria' => $c->name, 'category' => $bc->name]) }}">
                                            <p class="text-muted">{{ $bc->name }}</p>
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>


            </div>
        </nav>
    @endif
    <script>
        window.addEventListener('hover', event => {
            $('.dropdown-menu ').dropdown('toggle');
        })
        window.addEventListener('first', event => {
            $('.dropdown-menu ').dropdown('show');
        })
        window.addEventListener('clo', event => {
            $('.dropdown-menu ').dropdown('hide');
        })
    </script>
</div>
