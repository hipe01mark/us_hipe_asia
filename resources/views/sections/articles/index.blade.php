<section id="articles" class="s-articles">
    <div class="l-wrapper l-wrapper--fluid">
        <div class="s-articles__items">
            @for ($i = 0; $i <= 5; $i++)
                @include('sections.articles.card')
            @endfor
        </div>
    </div>
</section>
