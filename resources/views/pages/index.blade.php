@extends('layouts.master')
@section('content')
  
<div class="image">
<img src="{{asset('img2/one.jpg')}}" alt="main" width="50%" height="50%">
</div>
<hr>

<div class="container">
    <h1> {{$remont_one->title}}</h1>
    <p> {!! $remont_one->description !!}</p>

<h2> {{$remont_two->title}}</h2>
{!! $remont_two->description !!}
<hr>
<h2> Наши преимущества:</h2>
<div class="advantage-item row">
@forelse($services as $service)
<div class="advantage-item col-sm-4 col-xs-12">
<img src="{{$service->image}}" alt="logotip">
  <p> {!! $service->description !!}</p>
</div>
@empty
<div class="advantage-item col-sm-4 col-xs-12">
<img src="logo1/img_advant_01.png" alt="logotip">
  <p> Мастерская по ремонту бытовой техники «Добрый Мастер» стабильно работает на рынке с 2002-го года; За прошедшие с момента открытия годы открылись сервисные центры по ремонту бытовой техники во многих районах Ташкента. Мы стали еще ближе. </p>
</div>

<div class="advantage-item col-sm-4 col-xs-12">
<img src="logo1/img_advant_02.png" alt="logotip">
  <p> Квалифицированные Специалисты. Все наши мастера проходят тщательный отбор и сдают обязательный квалификационный экзамен прежде, чем приступают к работе с клиентами. Мы не работаем с кандидатами, опыт которых менее 3 лет. </p>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<img src="logo1/img_advant_03.png" alt="logotip">
  <p> Качество - главный критерий нашей работы. Именно этот параметр заложен в систему мотивации наших сотрудников. Для нас повторный вызов – чрезвычайное событие. </p>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<img src="logo1/img_advant_04.png" alt="logotip">
  <p> Гарантии, которые мы предоставляем – от 1 года до 2 лет. Когда мы берем на себя такие длительные обязательства, мы хорошо понимаем, что для их выполнения требуется безупречное исполнение всех нормативов. Но, наш опыт показывает, что это возможно; </p>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<img src="logo1/img_advant_05.png" alt="logotip">
  <p>  Скидки клиентам на всех этапах взаимодействия. При первом обращении, делаем скидку 10% для всех. Существуют скидки в зависимости от объема заказанных услуг и скидки при последующих обращениях. Мы постоянно думаем о своих клиентах.</p>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<img src="logo1/img_advant_06.png" alt="logotip">
  <p> Оригинальные запчасти. При проведении ремонта используются только сертифицированные материалы и детали. Мы строго контролируем качество всех комплектующих. </p>
</div>
@endforelse

</div>
<hr>
<h2> {{$remont_three->title}}</h2>
<p>
  {!! $remont_three->description !!}
</p>
<p> 
<div class="advantage-item2 row">
<div class="advantage-item col-sm-4 col-xs-12">
<img src="{{asset('img2/two.jpg')}}" alt="picture" width="100%" >
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<img src="{{asset('img2/three.png')}}" alt="picture" width="100%">
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<img src="{{asset('img2/four.jpg')}}" alt="picture" width="100%">
</div>
</div>
  <hr>

<h2> {{$remont_four->title}}</h2>
  {!! $remont_four->description !!}
 </div>



@endsection