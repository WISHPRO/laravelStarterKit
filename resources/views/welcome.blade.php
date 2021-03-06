@extends('app')

@section('page_styles')

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
			}

			.container {
				text-align: center;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
			    font-family: 'Lato';
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-family: 'Lato';
				font-size: 24px;
			}
		</style>

@endsection

@section('content')
<div class="container">
	<div class="content">
		<div class="title">Laravel 5</div>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
</div>
@endsection

