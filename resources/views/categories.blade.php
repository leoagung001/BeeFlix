@extends('welcome')

@section('style')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')
    <br>
    <div class="ml-3">
        <h2 style="text-transform:uppercase">
        {{ app('request') -> input('genre_name') }}
        </h2>
    </div>

    <div class="d-flex flex-row">
        @foreach($result as $type)
            <div class="ml-3 mt-2 ">
                <img src="{{ asset("assets/$type->photo") }}" alt="" style="width:350px; height:490px;"> <br/>
                <h4>
                    {{ $type->title }} <br/>
                </h4>
                @include('_btn_lihat_film')        
             </div>
        @endforeach
     </div>
     <br>
@endsection()