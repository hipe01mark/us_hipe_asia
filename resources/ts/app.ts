import HomeController from "./controller/home-controller";
import HomeView from "./view/home-view";

const initializeApp = () => {
    const homeView = new HomeView();

    window.HomeControllerInstance = new HomeController(homeView);
};

window.addEventListener('load', initializeApp);
