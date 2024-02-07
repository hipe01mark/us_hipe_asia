export default class HomeView {
    public toggleSidebar(open: boolean, mobileSidebar: HTMLElement, body: HTMLElement) {
        if (open) {
            mobileSidebar.classList.remove('hidden');
            mobileSidebar.classList.add('visible');
            body.classList.add('overflow-hidden');
        }
        else {
            mobileSidebar.classList.remove('visible');
            mobileSidebar.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }
    }
}
