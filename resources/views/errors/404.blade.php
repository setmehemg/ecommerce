@extends('layout')
@section('title') ReKrie -404 page @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
 
 <style>
     
@media (min-width: 768px)
{ 
    .not_found_image
    {
        width:60%;
        margin-top:-10%;
    }
}
@media (max-width: 768px)
{ 
    .not_found_image
    {
        width:100%;
       
    }
}
 </style>
<div align="center"  style=" background-color:#DADADA;padding:10%;">
   
 
              <img src="{{asset('public/Img/4004.png')}}"  class="not_found_image"   >

                <p>Desculpe! Esse URL não existe <br>Para qualquer dúvida, entre em contato <a href="{{url('Contact')}}">Conosco</a></p>
        
   
</div>
@endsection