
@extends('layouts.layouts')

@section('content')

<form action="{{route('movies.store')}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" value="">
  </div>
  <div class="form-group">
    <label for="year">year:</label>
    <input type="numeric" name="year" value="">
  </div>
  <div class="form-group">
    <label for="overview">overview:</label>
    <input type="text" name="overview" value="">
  </div>
  <button type="submit">SALVA</button>
</form>

@endsection