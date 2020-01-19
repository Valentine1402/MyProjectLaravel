
@extends('Layouts.layouts')

@section('content')
      @foreach ($movies as $movie)
         <div class="cd">
            <h3><a href=" {{ route('movies.show', $movie -> id) }}"> {{ $movie->title }} </a></h3>
            <strong>{{ $movie->year }}</strong>
            <small> <a href=" {{ route('movies.edit', $movie -> id) }}"> Edit </a></small>
            <form action="{{ route('movies.destroy', $movie -> id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" name ="delete">Delete/Destroy</button>
            </form>
                    {{-- <a href=" {{ route('movies.destroy', $movie -> id) }}"> Delete/Destroy </a>  --}}
        </div>  
      @endforeach
<a href="{{route('movies.create')}}">Create</a>
@endsection
