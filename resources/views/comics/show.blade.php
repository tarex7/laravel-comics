@extends('layouts.mainLayout')

@section ('sub-jumbo')
<div class="gallery"><img id="comic-img" src="{{ $comic['thumb']}}" alt=""></div> 
@endsection

@section ('main-content')
<div class="comic">
    <div class="comic-details">
       <div class="top">
        <div class="card">
            <h1 class="card-title">{{ $comic['title'] }}</h1>
            <div class="card-info">
                <div class="price">
                    <div><span>U.S. Price:</span> {{ $comic['price']}} </div>
                    <span>AVAILABLE</span>
                </div>
                <div class="availability">Check Availability</div>
            </div>
            <p> {{ $comic['description'] }} </p>
        </div>
        <figure>
            <figcaption>Advertisement</figcaption>
            <img src="../images/nadv.png" alt="adv">
        </figure>
       </div>
    </div>
</div>
<div class="bottom bg-gray">
    <div class="col mr-3">
        <div class="section">
            <h3>Talent</h3>
        </div>
        <div class="section">
            <h4>Art by:</h4>
         <p class="text-primary">
            @foreach ($artists as $index => $artist)
            {{$artists[$index] }}@if(!$loop->last), @else. @endif
            @endforeach
        </p>
        </div>
        <div class="section">
            <h4>Written by:</h4>
         <p class="text-primary">
            @foreach ($writers as $index => $writer)
            {{$writers[$index] }}@if(!$loop->last), @else. @endif
            @endforeach
        </p>
        </div>
        
    </div>
    <div class="col">
        <div class="section">
            <h3>Specs</h3>
        </div>
        <div class="section">
            <h4>Series:</h4>
         <p class="text-primary text-uppercase">
            {{$comic['series'] }}
        </p>
        </div>
        <div class="section">
            <h4>U.S. Price:</h4>
         <p >
            {{$comic['price'] }}
        </p>
        </div>
        <div class="section">
            <h4>On Sale Date:</h4>
         <p >
            {{$comic['sale_date'] }}
        </p>
        </div>
        
    </div>
</div>
<div class="bottom-section bg-gray">
    <div class="col border">
        <h5 class="text-uppercase">Digital comics</h5>
        <div class="icons"></div>
    </div>
    <div class="col border"></div>
    <div class="col border"></div>
    <div class="col border"></div>
</div>
@endsection