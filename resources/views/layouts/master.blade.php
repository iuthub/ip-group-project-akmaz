<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"  rel="stylesheet">
    <title>Akmaz</title>
    
  </head>

  <body> 
<div class="contact">
	<p>Tel: (+99893) 503-27-30</p>
</div>
	<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-light menu">

   			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  			<a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('img/logo.jpg')}}" alt="logotip" height="90px" width="150px"></a>
  			
 </div>
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				 
        <ul class="nav-item">
    
		<li >   <a class="nav-link" href="{{route('product')}}">ремонт</a>           </li>
		<li >   <a class="nav-link" href="{{route('schema')}}">схема работы</a>     </li>
		<li >   <a class="nav-link" href="{{route('payment')}}">форма оплаты</a>     </li>
		<li >   <a class="nav-link" href="{{route('contact')}}">вопрос-ответ</a>     </li>    
    </ul>
   </div>
</nav>
</header>
  
  @yield('content')

<footer>
<div class="footer-height">
<div class="container">
  
<div class="advantage-item3 row">
<div class="advantage-item col-sm-4 col-xs-12">
<ul>
    <li >   <a class="foot" href="remont.html">Ремонт</a>           </li>
    <li >   <a class="foot" href="sxema.html">Схема работы</a>     </li>
    <li >   <a class="foot" href="forma.html">Форма оплаты</a>     </li>
    <li >   <a class="foot" href="question.html">Вопрос-ответ</a>     </li>    
    </ul>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<a href="index.html"><img src="{{asset('img/logo.jpg')}}" alt="picture" width="50%"></a>
</div>
<div class="advantage-item col-sm-4 col-xs-12">
<h3></h3>
<div class="foot" >
  <ul>
    <li>"Добрый Мастер" </li>
    <li>Тел: (+99893) 503-27-30</li>
    <li>dobriy_master@mail.ru</li>
    <li>с 9:00 до 21:00 ежедневно</li>
  </ul>
</div>
</div>
</div>
</div>
</div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
   <script scr="{{asset('js/bootstrap.min.js')}}"></script>  

 </body>
</html>