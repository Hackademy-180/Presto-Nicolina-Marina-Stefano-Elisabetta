<x-layout>
    <main class="container">
        <div class="row">
            <article class="col-12 text-center mt-5">
                <h1>{{ __('ui.editArticle') }}</h1>
            </article>
        </div>
        <section class="mt-5 add-article-wrapper position-relative">
            <div class="row justify-content-center align-items-center height-custom add-form">
                <div class="col-12 col-md-6">

                    <livewire:article-update-form :article="$article" />
                </div>
            </div>

        </section>
    </main>
</x-layout>