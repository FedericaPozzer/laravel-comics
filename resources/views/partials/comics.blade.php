@if(isset($comics))

<div class="row row-cols-6 text-light">
    @foreach ($comics as $comic)
    <div class="col">
        <div>
            <img src=" {{ $comic["thumb"] }} " alt="img">
        </div>
        <div>
            {{ $comic["series"] }}
        </div>
    </div>
    @endforeach
</div>

@else

<div>No comics found</div>

@endif