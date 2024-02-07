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

    public changeHeaderBackground(scrolled: boolean) {
        let header = document.querySelector('header'),
            headerLogo = header?.querySelector('img');

        if (header && headerLogo) {
            if (scrolled) {
                header.classList.add('l-header--scrolled');
                headerLogo.src = '/assets/images/logo_hipe.webp';
            } else {
                header.classList.remove('l-header--scrolled');
                headerLogo.src = '/assets/images/logo_hipe_black.webp';
            }
        }
    }
}
