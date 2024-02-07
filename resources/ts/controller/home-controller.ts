import HeaderView from '../view/header-view';

export default class HomeController {
  private headerView: HeaderView;

  constructor() {
    this.headerView = new HeaderView();
    this.headerEventListeners();
  }

  private headerEventListeners() {
    const openSidebarBtn = document.getElementById('hamburger');
    const closeSidebarBtn = document.getElementById('closeSidebar');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const body = document.body;

    if (openSidebarBtn && closeSidebarBtn && mobileSidebar) {
      openSidebarBtn.addEventListener('click', () => this.headerView.openSidebar(mobileSidebar, body));
      closeSidebarBtn.addEventListener('click', () => this.headerView.closeSidebar(mobileSidebar, body));
    }
  }
}
