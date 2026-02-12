<div class="card mx-auto card-w shadow mb-3 d-flex flex-column align-items-center card-welcome">

    
    <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(1000, 1000) : 'https://picsum.photos/200' }}" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body d-flex flex-column align-items-center justify-content-between text-center">

        <h4 class="card-title">{{$article->title}} </h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}} €</h6>
        <div class="d-flex gap-2 mt-4">

            <a href="{{route('byCategory', ['category'=>$article->category])}}"
                class="btn btn-outline fw-bold categoryBtn text-center flex-fill">
                {{$article->category->name}}
            </a>
            <a href="{{route('article_show', compact('article'))}}"
                class="btnCard text-center fw-bold btn text-white flex-fill">
                {{ __('ui.details') }}
            </a>


        </div>


    </div>


</div>