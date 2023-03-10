@extends('layouts.app')

@section('content')
<main class="pt-3">
<div class="container">
<div class="row">
<div class="col-md-8">
<h2>Consultar La Humedad De Una Ciudad</h2>
<form action="{{ route('search') }}" method="get">
@csrf
<div class="form-group">
  <label for="city"></label>
 
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Seleccione la ciudad a Consultar</strong>
        <select class="form-control" name="city" id="city">
          <option selected disabled>Seleccione Ciudad</option>
            <option value="Miami">Miami</option>
            <option value="Orlando">Orlando</option>
            <option value="New York">New York</option>           
        </select>
    </div>
</div>
  @error('city')
  <span class="text-danger">{{ $message }}</span>
  @enderror
</div>

@isset($notFound)
<div class="alert alert-danger mt-3" role="alert">Ciudad no encontrada, intente de nuevo!</div>
@endisset

<button type="submit" class="btn btn-success mt-3">Consultar</button>
</form>
</div>

<div class="col-md-4">
  @isset($ok)
  <div class="col-md-12">
    <h5>{{ $main }}</h5>
    <h1>Temp {{ intval($temp) }}&deg;C</h1>
    <h1>Humid {{ $humidity }}</h1>
  </div>

  <div class="col-md-12">
   <h3>{{ $name }}, {{ $country }} </h3>
  </div>

  <div class="col-md-12">
    <h4>{{ $weather }}</h4>
  </div>
  @endisset

</div>
</div>
</div>

</main>
@endsection