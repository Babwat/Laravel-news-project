@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<p>Services we offer</p>
<ul>
@if (count($services)>0)
   @foreach ($services as $service)
       <li>{{$service}}</li>
   @endforeach
       </ul> 
@endif

@endsection