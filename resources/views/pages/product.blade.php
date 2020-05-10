@extends('layouts.master')
@section('content')
<div class="image-remont" >
<div class="container">
<h1 style="background-color: #29B6F6">Срочный ремонт холодильников на дому. <br> Оставьте свои контактные данные и мы с вами свяжемся.</h1>
	<img src="{{asset('img2/fridge1.png')}}" alt="fridge" width="100%" height="50%">
</div></div>
<hr>
<div class="container">

   <h2> Наши преимущества:</h2>
<div class="advantage-item row">
@foreach($services as $service)
<div class="advantage-item col-sm-4 col-xs-12">
<img src="{{$service->image}}" alt="logotip">
  <p> {!! $service->description !!}</p>
</div>
@endforeach
</div>
<hr>
<h3 style="background-color: #85a921; text-align: center; font-size: 18pt; color: #fff ">АКТУАЛЬНЫЕ ЦЕНЫ РЕШЕНИЯ ТИПИЧНЫХ ПРОБЛЕМ</h3>

<table class="table-resposive table_service" style="font-size: 20px;">
<tbody>
<tr class="table_heder"><th class="col-xs-6">Проблема</th><th class="col-xs-3">Цена</th><th class="col-xs-3"></th></tr>
<!-- -->
@foreach($products as $product)
<tr>
<td class="col-xs-6">{!! $product->name !!}</td>
<td class="col-xs-3"><strong>{!! $product->price !!}</strong></td>
<td class="col-xs-3"><span class="btn-order-rem" style="border-bottom: 1px dashed;">Заказать</span></td>
</tr>
@endforeach

<!-- --></tbody>
</table>
<hr>

<h2>{{$information->title}}</h2>
<p> {!! $information->description !!} </p>

</div>
@endsection