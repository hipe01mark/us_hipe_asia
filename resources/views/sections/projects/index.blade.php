<section id="projects" class="s-projects"
    x-data="{
        showCards: {{ $projectTypes[0]['id'] }},
        activeClasses: 'bg-primary text-white',
        inactiveClasses: 'text-body-color dark:text-dark-6 hover:bg-primary hover:text-white',
    }">
    <div class="l-wrapper l-wrapper--fluid l-wrapper--padded-y">
        <div class="c-title c-title--centered">
            <h2 class="c-title__main">Explore Recent Projects</h2>
            <p class="c-title__desc">Embark on a journey through our latest triumphs, where innovation meets
                excellence.</p>
        </div>
        <div class="s-projects__header">
            <div class="s-projects__header__container">
                <ul>
                    @foreach ($projectTypes as $projectType)
                        <li>
                            <button @click="showCards = {{ $projectType['id'] }} "
                                :class="showCards == {{ $projectType['id'] }} ? activeClasses : inactiveClasses">
                                {{ $projectType['name'] }}
                            </button>
                        </li>
                    @endforeach

                    <li>
                        <button @click="showCards = 'all' "
                            :class="showCards == 'all' ? activeClasses : inactiveClasses">
                            All
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="s-projects__contents">
            @foreach ($projectTypes as $projectType)
                @foreach ($projectType['projects'] as $project)
                    <div :class="showCards == 'all' || showCards == {{$projectType['id']}} ? 'block' : 'hidden'"
                        class="s-projects__cards">
                        <div class="relative mb-12">
                            <div class="s-projects__container group">
                                <div class="s-projects__image">
                                    @php
                                        $imagesArray = $project['images'] ? explode(' || ', $project['images']) : [];
                                    @endphp
                                    <img src="{{ env('CMS_API_URI') . 'storage/' . $imagesArray[0] }}"
                                        class="animate-fade-in group-hover:scale-110"
                                        alt="" />
                                    <div class="s-projects__backdrop group-hover:opacity-0"></div>
                                </div>
                                <div class="s-projects__description group-hover:opacity-0">
                                    <h2>{{ $project['title'] }}</h2>
                                    <p>{{ $project['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
