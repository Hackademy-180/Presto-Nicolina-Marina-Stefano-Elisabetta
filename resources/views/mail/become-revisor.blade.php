<x-layout>
<body>
    <div>
        <h1>un utente ha chiesto di lavorare con noi</h1>
        <h2>ecco i suoi dati:</h2>
        <p>Nome:{{$user->name}} </p>
        <p>Email:{{$user->email}} </p>
        <p>Se vuoi rendere {{$user->name}} revisor, clicca qui: </p>
        <a href="{{ route('make.revisor', compact ('user'))}}">Concedi poteri da revisor</a>
    </div>

</body>

</x-layout>