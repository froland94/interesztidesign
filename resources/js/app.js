import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded';
import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.css';

document.addEventListener('DOMContentLoaded', () => {
    const grid = document.querySelector('.gallery-masonry-grid');

    if (grid) {
        const masonry = new Masonry(grid, {
            itemSelector: '.gallery-masonry-item',
            columnWidth: '.gallery-masonry-sizer',
            percentPosition: true,
            gutter: 16,
        });

        imagesLoaded(grid, () => {
            masonry.layout();
        });
    }

    GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: false,
    });
});
