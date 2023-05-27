<div>
    <div class="container">
        <p><a href="{{ route('home') }}">Home</a> / {{ $type->name }} </p>

        <div class="text-center mb-4">
            <h2 class="text-bold">SHOP BY CRITERIA</h2>
        </div>

        <div class="row d-flex justify-content-center">

            @foreach ($type->book_criterias as $c)
                <div class="col-md-3">
                    <a href="{{ route('criteria', ['type' => $type->name, 'criteria' => $c->name]) }}"
                        class="btn btn-lg btn-block text-center rounded-0 btn-secondary m-2" style="font-family: 'Courier New', Courier, monospace; font-size:15px">{{ $c->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
