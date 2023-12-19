@extends('layouts.app')

@section('title', 'Comic')

@section('content')
<main>
    <div class="space-blue">
        <div class="small">
            <div class="cover">
                <span class="comic">{{ $comic['type']}}</span>
                <img src="{{$comic['thumb']}}" alt="cover">
                <span class="gallery">view gallery</span>
            </div>
        </div>
    </div>
    <div class="small">
        <div class="row my-5">
            <div class="p-2">
                <h2><strong>{{ $comic['title'] }}</strong></h2>
                <div class="d-flex green">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-auto">
                            <span><strong>U.S. Price: </strong>{{ $comic['price']}}</span>
                        </div>
                        <div class="col-auto">
                            <span>AVAILABLE</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border border-black">
                        <span>CHECK</span>
                    </div>
                </div>
                <p class="pt-2">{{$comic['description']}}</p>
            </div>
            <div class="col-4 text-end">
                <span>ADVERTISEMENT</span>
                <div>
                    <img src="{{Vite::asset('/resources/img/adv.jpg')}}" alt="adv">
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col">
                <table>
                    <thead>
                      <tr><th colspan="2"><h2>Specs</h2></th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="w-25"><strong>Series:</strong></td>
                        <td><a href="#">{{$comic['series']}}</a></td>
                      </tr>
                      <tr>
                        <td class="w-25"><strong>U.S. Price:</strong></td>
                        <td>{{$comic['price']}}</td>
                      </tr>
                      <tr>
                        <td class="w-25"><strong>On Sale Date:</strong></td>
                        <td>{{$comic['sale_date']}}</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
