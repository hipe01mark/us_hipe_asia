<section id="articles" class="s-articles">
    <div class="l-wrapper l-wrapper--fluid l-wrapper--padded-y">
        <div class="c-title c-title--centered">
            <h2 class="c-title__main">Recent News Articles</h2>
        </div>
        <div class="s-articles__items">
            @for ($i = 0; $i <= 2; $i++)
                @include('sections.articles.card')
            @endfor
        </div>
    </div>
</section>
