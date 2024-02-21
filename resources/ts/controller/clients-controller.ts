import Swiper from '../init/swiper.js';
import { Autoplay } from 'swiper/modules';

export default class ClientsController {
    public initSwiper() {
        new Swiper('.s-clients__insight-content', {
            modules: [Autoplay],
            centeredSlides: false,
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 1500,
            breakpoints: {
                360: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                1536: {
                    slidesPerView: 3,
                }
            },
        });
    }
}
