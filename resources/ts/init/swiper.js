import Swiper from 'swiper';
import 'swiper/css';

const initializeSwiper = (containerSelector, options) => {
    return new Swiper(containerSelector, options);
};

export default initializeSwiper;
