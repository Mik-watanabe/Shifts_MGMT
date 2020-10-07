@extends('layouts.app')

@section('content')
  <ul>
    @foreach($shifts as $shift)
      <li>{{ $shift }}</li>
    @endforeach
  </ul>
@endsection