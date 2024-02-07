import HomeView from "../view/home-view";

export default class HomeController {
  public homeView: HomeView;

  constructor(homeView: HomeView) {
    this.homeView = homeView;
    this.headerEventListeners();
  }

  private headerEventListeners() {
    const openSidebarBtn = document.getElementById('hamburger');
    const closeSidebarBtn = document.getElementById('closeSidebar');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const body = document.body;

    if (openSidebarBtn && closeSidebarBtn && mobileSidebar) {
      openSidebarBtn.addEventListener('click', () => this.homeView.toggleSidebar(true, mobileSidebar, body));
      closeSidebarBtn.addEventListener('click', () => this.homeView.toggleSidebar(false, mobileSidebar, body));
    }
  }
}
