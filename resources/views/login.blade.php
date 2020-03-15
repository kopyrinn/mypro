@extends('layouts.app')

@section('auth')
	<h1>Ты на странице Авторизоваться</h1>
@endsection

@foreach($errors->all() as $err)
	<div class="errors">{{$err}}</div>
@endforeach 
<form action="http://127.0.0.1:8000/login" method="POST">
	@csrf 
	<h2>Авторизоваться</h2>
	<input type="" name="username" placeholder="имя">
	<input type="" name="password"  placeholder="pass">
	<button>отправить</button>
</form>





@extends('layouts.app')

@section('content')
	<h1>Ты на странице home</h1>
@endsection

@section('allcontent')
	<h1>То что везде</h1>
@endsection


@section('sidebar')
	@parent
	<p>это пришло с апп блейд</p>
@endsection


<div class="container">
<form action="/create" method="POST">
	@csrf <!--защитка Cross-Site Request Forgery-->
	<h2>Добавить дело</h2>
	<input name="name" placeholder="дело">
	<input type="" name="status" hidden value="0">
	<input type="" name="userID" value="1" hidden>
	<button>отправить</button>
</form>

@foreach($affair as $aff)
	<h3 style="color: green">{{ $aff->name }} 
		@if ($aff->status == 1)
			<span style="color: red">выполнено</span>
		@else 
			<span style="color: red">невыполнено</span>
		@endif
	</h3>
	<p>изменить статус</p>

		<div class="d-flex">
			
				<form action="/update" method="POST">
					@csrf
					<input type="" name="id" value="{{ $aff->id }}" hidden>
					<select name="choose">
						<option value="1">выполнено</option>,
						<option value="0">невыполнено</option>
					</select>
					<button>изменить</button>
				</form>
				<form action="/delete" method="POST">
					@csrf
					<input hidden name="delete" value="{{ $aff->id }}">
					<button>Удалить</button>
				</form>
			
		</div>
	
@endforeach 
</div>