@extends('layout.layout')

@section('content')
<!-- description register client -->
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1>Як зареєструвати клієнт для роботи із API intita.com</h1>
			<p>1. Заходим на сайт <a href="http://sso.intita.com" target="_blank">sso.intita.com</a> реєструємся та входимо під своїм логіном і паролем.</p>
			<a class="test-popup-link" href="/img/log-In-lg.jpg"><img class="img-fluid" src="/img/log-In.jpg"></a>
			<p>2. Натискаємо пункт "Мої клієнти".</p>
			<a class="test-popup-link" href="/img/my-client-lg.jpg"><img class="img-fluid" src="/img/my-client.jpg"></a>
			<p>3. Вибираємо у правому верхньому куті "Створити новий клієнт"</p>
			<a class="test-popup-link" href="/img/create-client.jpg"><img class="img-fluid" src="/img/create-client.jpg"></a>
			<p>4. Заповнюємо форму та натискаємо на кнопку "Створити"</p>
			<a class="test-popup-link" href="/img/client-creation-lg.jpg"><img class="img-fluid" src="/img/client-creation.jpg"></a>
			<p>5. Після цього переходимо на вкладку "Мої клієнти". Тут ви зможете знайти ID та секретний ключ.</p>
			<a class="test-popup-link" href="/img/show-client-lg.jpg"><img class="img-fluid" src="/img/show-client.jpg"></a>


			<p>6. Вітаю! Ви успішно зареєстрували клієнт!</p>
			
		</div>
	</div>
</div>

@endsection 
