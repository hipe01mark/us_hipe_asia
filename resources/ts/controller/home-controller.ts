export default class HomeController {
  constructor() {
    this.headerEventListeners();
  }

  private headerEventListeners() {
    const openSidebarBtn = document.getElementById('hamburger');
    const closeSidebarBtn = document.getElementById('closeSidebar');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const body = document.body;

    if (openSidebarBtn && closeSidebarBtn && mobileSidebar) {
      openSidebarBtn.addEventListener('click', () => this.openSidebar(mobileSidebar, body));
      closeSidebarBtn.addEventListener('click', () => this.closeSidebar(mobileSidebar, body));
    }
  }

  private openSidebar(mobileSidebar: HTMLElement, body: HTMLElement) {
    mobileSidebar.classList.remove('hidden');
    mobileSidebar.classList.add('visible');
    body.classList.add('overflow-hidden');
  }

  private closeSidebar(mobileSidebar: HTMLElement, body: HTMLElement) {
    mobileSidebar.classList.remove('visible');
    mobileSidebar.classList.add('hidden');
    body.classList.remove('overflow-hidden');
  }
}
