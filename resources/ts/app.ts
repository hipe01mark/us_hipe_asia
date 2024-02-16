import HomeController from "./controller/home-controller";
import ClientsController from "./controller/clients-controller";
import HomeView from "./view/home-view";

const initializeApp = () => {
    const homeView = new HomeView();

    window.HomeControllerInstance = new HomeController(homeView);
    window.ClientControllerInstance = new ClientsController();
};

window.addEventListener('load', initializeApp);
