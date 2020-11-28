@extends('welcome')

@section('content')
<br>
<div class="d-flex flex-row ml-3">
    <img src="{{ asset("assets/$detail->photo") }}" alt="" style="width:350px; height:490px;"> 
    <div class="d-flex flex-row">
        <div class="d-flex flex-row" style="width: 97%">
            <div class="col">
                <h1>{{ $detail -> title }}</h1>
                Rating: 🌟
                {{ $detail -> rating }} / 5 <br> <br> 
                
                <h5>
                    Description : <br/>
                </h5> 
                
                {{ $detail -> description }} <br> <br> <br> <br>
                Kategori : 
                
                @if ($detail-> genres -> name === 'Drama')
                <a href="/categories?genre_name=drama" class ="btn btn-dark"> 
                    {{ $detail-> genres -> name }}
                </a>
                
                @elseif ($detail-> genres -> name === 'Kids')
                <a href="/categories?genre_name=kids" class ="btn btn-dark"> 
                    {{ $detail-> genres -> name }} <br/>
                </a>
                
                @elseif ($detail-> genres -> name === 'TvShow')
                <a href="/categories?genre_name=tvshows" class ="btn btn-dark"> 
                    {{ $detail-> genres -> name }} <br/>
                </a>
                
                @endif
                
            </div>
            <div>
                <table class="table">
                    <thead>
                        <th scope="Episode">Episode</th>
                        <th scope="Judul">Judul</th>
                    </thead>
                    
                    @foreach ($episodes as $item)
                    <br>
                    <tbody>
                        <td>{{ $item -> episode }}</td>
                        <td>{{ $item -> title }}</td>
                    </tbody>
                    
                    @endforeach
                </table>
                {{ $episodes -> links() }}  
            </div>
        </div>
    </div>
</div>


@section('style')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@endsection()