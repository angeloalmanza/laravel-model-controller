@extends('layout/app')

@section('contenuto')
   <div class="container">
        <div class="row row-cols-3">
            @foreach($movies as $movie)
                <div class="col mb-4">
                    <div class="card h-100 w-100">
                      <div class="card-body">
                        <h5 class="card-title">{{$movie['title']}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">({{$movie['original_title']}})</h6>
                        <p>{{$movie['nationality']}}</p>
                        <p>{{$movie['date']}}</p>
                        <p>
                            @php
                                $stars = round($movie['vote']);
                            @endphp
                            @for ($i = 0; $i < 10; $i++)
                                @if ($i < $stars)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="far fa-star text-warning"></i>
                                @endif
                            @endfor
                            ({{$movie['vote']}})
                        </p>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
   </div>
@endsection