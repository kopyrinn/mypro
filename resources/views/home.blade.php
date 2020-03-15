@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!  {{ Auth::user()->name }}   
                </div>

                <div>
                	<form action="/create" method="POST">
	@csrf <!--защитка Cross-Site Request Forgery-->
	<h2>Добавить дело</h2>
	<input name="name" placeholder="дело">
	<input type="" name="status" hidden value="0">
	<input type="" name="userID" value="{{ Auth::user()->id }}" hidden>
	<button>отправить</button>



</form>

@foreach($affair as $aff)


		@if ( $aff->user->name  == Auth::user()->name)
			<h3 style="color: green">{{ $aff->name }} 
				@if ($aff->status == 1)
					<span style="color: red">выполнено</span>
				@else 
					<span style="color: red">невыполнено</span>
				@endif
			</h3>
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
		@endif







	
@endforeach 




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

