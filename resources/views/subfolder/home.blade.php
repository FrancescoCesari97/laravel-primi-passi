<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> {{ $title }} </h1>
    <p>{{ $paragraph  }}</p>


    <ul>
        @forelse($studenti as $studente)

        <li>
            {{$studente}} @unless($loop->last) , @endunless
        </li>
        <li></li>

        



        {{-- @forelse($studenti as $studente) --}}


        @empty

        <li>Nessun insegnante</li>
        @endforelse
    </ul>
</body>

</html>