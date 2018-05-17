@extends('layouts.app')

@section('content')
	<div class="showcase-content text-center">
		<div class="container">
		  <h1 class="jumbotron-heading">Welcome to our site!</h1>
		  <p class="lead">Here you will find posts relating to your everyday technology topics. Enjoy your stay</p>
		  <hr class="my-4">
		  <p>Join the community by logging in or signing up. Or just view blogs</p>
          @guest
    		  <a class="btn btn-primary btn-lg" href="login" role="button">Log in</a>
    		  <a class="btn btn-secondary btn-lg" href="register" role="button">Sign up</a>
          @else
          <a class="btn btn-primary btn-lg" href="home" role="button">Your Posts</a>
          <a class="btn btn-secondary btn-lg" href="posts" role="button">View Blog</a>
          @endguest
		</div>
	</div>
	<div class="row text-center">
 		<div class="col-lg-4 my-4 px-2">
            <img class="rounded-circle" src="images/bootstrap.png" width="140" height="140">
            <h2>Bootstrap</h2>
            <p>This site is made with Bootstrap! That's cool, isn't it? It is very light and it makes this application resposive with just a nick of time.</p>
      	</div>
      	<div class="col-lg-4 my-4 px-2">
            <img class="rounded-circle" src="images/laravel.png" width="140" height="140">
            <h2>Laravel</h2>
            <p>Laravel is so powerful in making web applications. It makes the development so easy and quick. Also it is so light, it optimizes the loading and also ensures security.</p>
      	</div>
     	<div class="col-lg-4 my-4 px-2">
            <img class="rounded-circle" src="images/users.png" width="170" height="140">
            <h2>Social Media</h2>
            <p>Anyone can login or sign up in this website. Users are free to post, delete, edit and read blogs. Guests can also read blogs. This makes it a little social networking app.</p>
      	</div>
	</div>
@endsection