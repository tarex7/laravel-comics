@extends('layouts.mainLayout')

@section ('sub-jumbo')
<div class="gallery"><img id="comic-img" src="{{ $comics[0]['thumb']}}" alt=""></div> 
@endsection

@section ('main-content')
<div class="comic">
    <div class="comic-details">
        <div class="card">
            <h1 class="card-title">{{ $comics[0]['title'] }}</h1>
            <div class="card-info">
                <div class="price">
                    <div><span>U.S. Price:</span> {{ $comics[0]['price']}} </div>
                    <span>AVAILABLE</span>
                </div>
                <div class="availability">Check Availability</div>
            </div>
            <p>!! {{ $comics[0]['description'] }} !!</p>
        </div>
        <figure>
            <figcaption>Advertisement</figcaption>
            <img src="../images/nadv.png" alt="broken">
        </figure>
    </div>
</div>
@endsection