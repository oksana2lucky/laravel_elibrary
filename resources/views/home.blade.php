@extends('layouts.default')
@section('content')

@foreach ($newBooks as $key => $book)
    <?php
    $line = $book->description;
    $match =[];
    if (preg_match('/^.{1,100}\b/s', $line, $match))
    {
        $description = $match[0];
    }
    ?>
    <div class="templatemo_product_box">
        <h1>{{ $book->title }}</h1>
        <img width="100" height="150" src="{{ $book->image_url }}" alt="image" />
        <div class="product_info">
            <h3>{{ $book->author }}</h3>
            <p>{{ $description }}...</p>
            <div class="detail_button"><a href="{{ url('/book/view/'.$book->id) }}">Detail</a></div>
        </div>
        <div class="cleaner">&nbsp;</div>
    </div>
    <div class="@if (($key + 1) % 2 == 1)cleaner_with_width @else cleaner_with_height @endif">&nbsp;</div>
@endforeach

@stop