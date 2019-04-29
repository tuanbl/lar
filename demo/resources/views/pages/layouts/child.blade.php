@extends('pages.layouts.app')
@section('title','Page title')
@section('sidebar')
	@parent
		<p>This is sider bar append</p>
@endsection

@section('content')
			<p>This is content</p>
@endsection			
@section('alert')
@component('pages.layouts.alert')
    <strong>Whoops!</strong> Something went wrong!
@endcomponent
@endsection