export default class HeaderView {
    public openSidebar(mobileSidebar: HTMLElement, body: HTMLElement) {
        mobileSidebar.classList.remove('hidden');
        mobileSidebar.classList.add('visible');
        body.classList.add('overflow-hidden');
    }

    public closeSidebar(mobileSidebar: HTMLElement, body: HTMLElement) {
        mobileSidebar.classList.remove('visible');
        mobileSidebar.classList.add('hidden');
        body.classList.remove('overflow-hidden');
    }
}
