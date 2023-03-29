@extends("layouts.app")

@section("main") 

<section class="pb-3">
    <div class="container py-5">

        @include("partials.comics")

    </div>

    <div class="w-100 d-flex justify-content-center">
        <button class="load-btn">LOAD MORE</button>
    </div>
</section>

<section class="section-links text-light">
     <ul class="container d-flex justify-content-between align-items-center">

        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="icon">
            <div>DIGITAL COMICS</div> 
        </li>

        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="icon">
            <div>DC MERCHANDISE</div>
        </li>

        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="icon">
            <div>SUBSCRIPTION</div>
        </li>

        <li>
            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="icon">
            <div>COMIC SHOP LOCATOR</div>
        </li>

        <li>
            <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="icon" class="icon-smaller">
            <div>DC POWER VISA</div>
        </li> 
    </ul>
</section>


@endsection