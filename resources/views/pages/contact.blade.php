@extends('layouts.master')
@section('content')

<div class="container vniz">

<form action="{{route('contact.store')}}" method="post">
	@csrf
<h1>Вопрос-ответ</h1>
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Ваше имя:</label>
    <textarea name="name" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>

    <label for="exampleFormControlInput1">E-mail:</label>
    <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
      
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Ваш вопрос: </label>
    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>

</div>


@endsection