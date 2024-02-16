<section id="client-insight" class="s-clients">
    <div class="l-wrapper l-wrapper--fluid l-wrapper--padded-y">
        <img src="../../assets/images/quote_icon.webp" alt="quote-icon" class="s-clients__icon">
        <div class="s-clients__background"></div>
        <div class="s-clients__container">
            <div class="s-clients__label">
                <h1>Clients Insight</h1>
                <p>We, at HiPE, maintains a long term relationship with our clients, and we never took this relationship
                    lightly. We are serious in the commitment that we made. <br><br>If you would like to become one of
                    our
                    clients, don't hesitate to connect with us.</p>
                <button>Contact Us</button>
            </div>
            <div class="s-clients__insight">
                <div class="s-clients__insight-content swiper">
                    <div class="swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../assets/images/client_icon.webp" alt="client-icon" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                    sunt autem voluptates? Sed ad reiciendis dolore rerum natus quibusdam libero. Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. Porro quia voluptate minima eos
                                    soluta facere, molestiae error officia repellat inventore expedita ut. Inventore
                                    nihil nulla, quas quae quis debitis ad! Lorem ipsum dolor sit amet.</p>
                                <h2 class="name">Client Name1</h2>
                                <h3>Client Position</h3>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../assets/images/client_icon.webp" alt="client-icon" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                    sunt autem voluptates? Sed ad reiciendis dolore rerum natus quibusdam libero.</p>
                                <h2 class="name">Client Name2</h2>
                                <h3>Client Position</h3>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../assets/images/client_icon.webp" alt="client-icon" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                    sunt autem voluptates? Sed ad reiciendis dolore rerum natus quibusdam libero.</p>
                                <h2 class="name">Client Name3</h2>
                                <h3>Client Position</h3>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../assets/images/client_icon.webp" alt="client-icon" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                    sunt autem voluptates? Sed ad reiciendis dolore rerum natus quibusdam libero.</p>
                                <h2 class="name">Client Name4</h2>
                                <h3>Client Position</h3>
                            </div>
                        </div>

                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../assets/images/client_icon.webp" alt="client-icon" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                                    sunt autem voluptates? Sed ad reiciendis dolore rerum natus quibusdam libero.</p>
                                <h2 class="name">Client Name5</h2>
                                <h3>Client Position</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('custom-scripts')
    <script>
        window.addEventListener('load', () => {
            ClientControllerInstance.initSwiper();
        });
    </script>
@endsection
