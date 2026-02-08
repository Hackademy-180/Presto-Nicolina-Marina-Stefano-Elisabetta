<x-layout>
    <div class="row justify-content-center">
        <div class="col-12 text-center pt-5">
            <h1>Inserisci il tuo annuncio in pochi minuti</h1>
            <p>Vendi online quello che non usi più e comincia a guadagnare</p>
        </div>
    </div>
    <main class="container login-wrapper position-relative" style="background-image: url('{{ asset('media/bg_create_article_3.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
        <section class="row justify-content-center">
            <article class="col-12 text-center pt-2">
                {{-- <h1>Inserisci il tuo annuncio in pochi minuti</h1>
                <p>Vendi online quello che non usi più e comincia a guadagnare</p> --}}
            </article>
            <div class="class row justify-content-center align-items-center height-custom">
                <div class="col-12 col-md-6">
                    <livewire:create-article-form />
                </div>
            </div>
        </section>
    </main>
</x-layout>