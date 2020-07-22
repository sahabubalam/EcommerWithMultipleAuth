@extends('admin.master')

@section('content')
Admin dashboard
</br>
{{Auth::user()->email}}

@endsection
