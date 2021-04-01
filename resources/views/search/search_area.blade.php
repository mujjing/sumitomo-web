@extends('layouts.front_side')
@inject('RoomConst', 'App\Consts\RoomConst')
@section('title', 'Sumitomo_search_area')
@section('content')
지역으로 찾기

    <div class="tokyo_area">
        1. 東京都<br>
        @foreach ($RoomConst::CITY_TOKYO as $key => $value)
        <input type="checkbox" name="search_area" value="{{ $key }}" id="tokyo_area_check" class="tokyo_area_check"> {{$value}}
        @endforeach
    </div>

    <div class="kanagawa_area">
        2. 神奈川県<br>
        @foreach ($RoomConst::CITY_KANAGAWA as $key => $value)
        <input type="checkbox" name="search_area" value="{{ $key }}" id="kanagawa_area" class="kanagawa_area"> {{$value}}
        @endforeach
    </div>
    <a href="#" class="btn btn-primary">検索する</a>
@endsection