@extends('layouts.main')
@section('title')
   HOME PAGE 
@endsection

@section('content')
    <p>HOME CONTENT</p>
@for($i = 0; $i < 10; $i++)
@include('components.product-ui',[
    'id' => $i,
])
@endfor
    

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Similique ipsum reprehenderit adipisci soluta voluptatum omnis, quod necessitatibus. 
        Nam quod minus corrupti, similique vel velit magni alias suscipit voluptatibus natus at.</p>
@endsection