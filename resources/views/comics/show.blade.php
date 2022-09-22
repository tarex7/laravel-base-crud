@extends('layouts.mainLayout')

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@endsection

@section('JS')

@endsection

@section ('sub-jumbo')
<div class="gallery"><img id="comic-img" src="{{ $comic['thumb']}}" alt=""></div> 
@endsection

@section ('main-content')
<div class="comic">
    <div class="comic-details">
       <div class="top">
        <div class="card">
            <h1 id="title" class="card-title">{{ $comic['title'] }}</h1>
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
     </div >

        <div class="d-flex justify-content-between">

            <a href="{{ route('comics.index') }}" class="btn btn-primary mt-4 border-0">Torna indietro</a>
            <a href="{{ route('comics.edit', [$comic->id]) }}" class="btn btn-warning mt-4 border-0 me-4">Modifica</a>

            <form class="form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
              @csrf
              @method('DELETE')
            <button  type="submit" id="deleteBtn" class="btn btn-danger border-0 mt-4">Elimina</button>
           </form>

       
        </div>

    </div>
</div>

@endsection

@section('extra-js')

<script>
const deleteBtn = document.getElementById('deleteBtn');
const form = document.querySelector('.form');
const title = document.getElementById('title').innerText;

deleteBtn.addEventListener('click', (e) => {
    e.preventDefault();
    const hasConfirmed = confirm(`Sei sicuro di voler eliminare ${title}?`)
    if(hasConfirmed) form.submit();
})

</script>

@endsection