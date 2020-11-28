@extends('welcome')

@section('style')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')
    @foreach($movie as $key => $value)
    
        <div>
            <br>
            <div class="ml-3" style="text-transform:uppercase"> 
                <h2>{{ $key }}</h2> 
            </div>

            <div class="d-flex flex-row">
                @foreach($value as $type)
                    <div class="ml-3 mt-2 ">
                        <img src="{{ asset("assets/$type->photo") }}" alt="" style="width:350px; height:490px;"> <br/>
                            <h4>
                                {{ $type->title }} <br/>
                            </h4>
                            @include('_btn_lihat_film')
                    </div>
                @endforeach
            </div>
        </div>
        <br>
    @endforeach
    
@endsection()
