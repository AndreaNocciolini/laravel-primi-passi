<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

@component('header')
    
@endcomponent

<body>
  <h1>Hello World!</h1>
  <h2>Ciao {{ $name }} {{ $lastname }}</h2>
  <h3>Skills</h3>

  @if(isset($skills))
  <ul>
    @foreach ($skills as $skill)
    <li>{{ $skill }}</li>
    @endforeach
  </ul>
  @endif

  <h3>Pets</h3>
  @if(isset($pets))
  <ul>
    @foreach ($pets as $pet)
    <li>{{ $pet['name']}}, {{$pet['type']}}</li>
    @endforeach
  </ul>
  @endif
</body>

</html>