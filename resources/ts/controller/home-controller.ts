import HomeView from "../view/home-view";

export default class HomeController {
  public homeView: HomeView;

  constructor(homeView: HomeView) {
    this.homeView = homeView;
    this.headerEventListeners();
    this.changeBackgroundWhenScrolled();
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

  private changeBackgroundWhenScrolled() {
    window.addEventListener('scroll', () => {
      const scrolled = window.scrollY > 0;
      this.homeView.changeHeaderBackground(scrolled);
    });
  }
}
