 Creare pulsante unDo per il revisore, permette di tornare indietro
 creare admin board per eliminare gli admin
 
 @if ($article_to_check->images->count())
    @foreach ($article_to_check->images as $key => $image)
        <div class="col-6 col-md-4 mb-4">
            <img src="{{ Storage::url($image->path) }}" class="img-fluid rounded shadow"
                 alt="Immagine {{ $key +1 }} dell'articolo '{{ $article_to_check->title }}'">
        </div>
    @endforeach
@else
    @for ($i = 0; $i < 6; $i++)
        <div class="col-6 col-md-4 mb-4 text-center">
            <img src="https://picsum.photos/300" alt="immagine segnaposto"
                 class="img-fluid rounded shadow">
        </div>
    @endfor
@endif


<img src="{{ $article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200' }}" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">


<div class="col-12 col-md-6 mb-3">
    @if ($article->images->count() > 0)
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($article->images as $key => $image)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <img src="{{ Storage::url($image->path) }}"
                             class="d-block w-100 rounded shadow"
                             alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                    </div>
                @endforeach
            </div>

            @if ($article->images->count() > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            @endif
        </div>
    @else
        <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
    @endif
</div>

