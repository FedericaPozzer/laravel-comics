@if(isset($comics))

<div class="row row-cols-6 text-light">
    @foreach ($comics as $comic)
    <div class="col mb-3">
        <div>
            <img src=" {{ $comic["thumb"] }} " alt="img">
        </div>
        <div class="text-uppercase">
            {{ $comic["series"] }}
        </div>
    </div>
    @endforeach
</div>

@else

<div>No comics found</div>

@endif