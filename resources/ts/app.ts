import HomeController from "./controller/home-controller";
import HeaderView from "./view/home-view";

const initializeApp = () => {
    const headerView = new HeaderView();

    window.HomeControllerInstance = new HomeController(headerView);
};

window.addEventListener('load', initializeApp);
