@extends("layouts.app")

@section("main") 

<section class="my-3">
    <div class="container">
        
        {{-- @yield("main-content") --}}
        {{-- @include("partials.comics") --}}

    </div>

    <div class="w-100 d-flex justify-content-center">
        <button>LOAD MORE</button>
    </div>
</section>

<section class="section-links text-light">
     <ul class="container d-flex justify-content-between align-items-center">
             {{-- <li v-for="link of links" v-bind:key="link.number">
                <img :src="getImagePath(link.icon)" alt="icon">
                <a href="#"> {{ link.name }} </a>
            </li> --}}

        <li>
            <img src="../assets/img/buy-comics-digital-comics.png" alt="icon">
            <div>DIGITAL COMICS</div> 
        </li>

        <li>
            <img src="../assets/img/buy-comics-merchandise.png" alt="icon">
            <div>DC MERCHANDISE</div>
        </li>

        <li>
            <img src="../assets/img/buy-comics-subscriptions.png" alt="icon">
            <div>SUBSCRIPTION</div>
        </li>

        <li>
            <img src="../assets/img/buy-comics-shop-locator.png" alt="icon">
            <div>COMIC SHOP LOCATOR</div>
        </li>

        <li>
            <img src="../assets/img/buy-dc-power-visa.svg" alt="icon" class="icon-smaller">
            <div>DC POWER VISA</div>
        </li> 
            
    </ul>
</section>


@endsection