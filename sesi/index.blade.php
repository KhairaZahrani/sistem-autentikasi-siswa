@extends('layouts.app')


@if(session('pesan'))
<div class="alert alert-success">
	{{ session('pesan') }}
</div>
@endif

@section('content')

<div class="w-50 center border rounded px-3 py-3 mx-auto">
	<h1>Login</h1>
	<a href="/sesi/register">Register</a>
	<form action="/sesi/login" method="POST">
		@csrf
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" name="email" class="form-control" value="{{Session::get('email')}}">
			@error('email')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" >
			@error('password')
			<div class="text-danger">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-3 d-grid">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</form>
</div>

@endsection