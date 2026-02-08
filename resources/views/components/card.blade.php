<div class="card mx-auto card-w shadow text-center mb-3 w-75">
    
    <img src="https://picsum.photos/200" class="card-img-top" alt="immagine dell' articolo {{$article->title}}">
    <div class="card-body">
        
        <h4 class="card-title">{{$article->title}} </h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}} €</h6>
        <div class="d-flex justify-content-between align-items-center mt-5 flex-wrap gap-2">
            <a href="{{route('article_show', compact('article'))}}"
            class="btn btn-danger text-center flex-fill">
            Dettaglio
        </a>
        
        <a href="{{route('byCategory', ['category'=>$article->category])}}"
            class="btn btn-outline bg-light text-dark categoryBtn text-center flex-fill">
            {{$article->category->name}}
        </a>
    </div>
    
    
</div>


</div>