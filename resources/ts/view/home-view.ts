export default class HomeView {
    public toggleSidebar(open: boolean, mobileSidebar: HTMLElement, body: HTMLElement) {
        const container = document.querySelector('.l-header__container') as HTMLElement;

        const handleClose = () => {
            mobileSidebar.classList.remove('visible');
            mobileSidebar.classList.add('hidden');
            body.classList.remove('overflow-hidden');
            container.removeEventListener('transitionend', handleClose);
        };

        if (open) {
            mobileSidebar.classList.remove('hidden');
            mobileSidebar.classList.add('visible');
            body.classList.add('overflow-hidden');
            container.offsetHeight;
            container.style.transition = 'transform 0.3s ease-out';
            container.style.transform = 'translateX(0)';
        } else {
            container.style.transition = 'transform 0.3s ease-out';
            container.style.transform = 'translateX(100%)';
            container.addEventListener('transitionend', handleClose);
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
                headerLogo.src = '/assets/images/logo_hipe.webp';
            }
        }
    }
}
