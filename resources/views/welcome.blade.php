<x-layout>
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4">Presto.it</h1>
                <div class="my-3">
                    @auth
                     <a href="{{route('article_create')}}" class="btn btn-dark">Pubblica un articolo</a>
                    @endauth
                </div>
            </div>

        </div>
        <div class="row justify-content-center align-items-center">
            @forelse ($articles as $article)
        <div class="col-12 col-md-3">
            <x-card :article="$article"/>
        </div>
        @empty
        <div class="col-12">
        <h3 class="text-center">
            non sono ancora stati creati articoli
        </h3>
        </div>
        @endforelse
    </div>
</x-layout>