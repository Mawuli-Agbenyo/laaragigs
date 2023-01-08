<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control</title>
</head>
<body>
    @extends('layout')

    @section('content')
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if(count($Data) == 0)
    <h1>No Data To Show</h1>
    
    </div>
    @endif
    
    @foreach($Data as $key)
    <x-data-card :key="$key"/>
    @endforeach
    <div class="mt-6 p-4">{{$Data->links()}}</div>
    @endsection
    
</body>
</html>

