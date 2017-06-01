<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>@yield('title')</title>
	@include('layout.nav')

	@yield('content')

	@include('layout.sidebar')

	@include('layout.footer')

	@yield('script');

</body>
</html>
