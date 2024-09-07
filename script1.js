const sections = document.querySelectorAll('.scroll-section');

window.addEventListener('scroll', () => {
    sections.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        const sectionBottom = section.getBoundingClientRect().bottom;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight && sectionBottom > 0) {
            section.classList.add('in-view');
        } else {
            section.classList.remove('in-view');
        }
    });
});
