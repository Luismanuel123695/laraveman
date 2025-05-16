@extends('master')

@section('content')

    <h1>Contact</h1>
    <p>Hola {{ $name }}</p>


    @if ($name != "luis")
        tu nombre no es luis
    
            
    @else
        tu nombre es luis
            
        
        
    @endif
    
     
    @foreach ([1,2,3,4,5,6] as $item)
  
         <li>{{ $item }}</li>
   



    @endforeach

