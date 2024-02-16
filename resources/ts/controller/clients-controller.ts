import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

export default class ClientsController {
    private mySwiper: Swiper | null;

    constructor() {
        this.mySwiper = null;
    }

    private initSwiper() {
        console.log('test');
        this.mySwiper = new Swiper('.s-clients__insight-content', {
            centeredSlides: false,
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
            },
            modules: [Navigation, Pagination],
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

    destroySwiper() {
        if (this.mySwiper) {
            this.mySwiper.destroy();
            this.mySwiper = null;
        }
    }
}
