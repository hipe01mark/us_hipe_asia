import HomeController from "./controller/home-controller";

const initializeApp = () => {
    window.HomeControllerInstance = new HomeController();
};

window.addEventListener('load', initializeApp);
