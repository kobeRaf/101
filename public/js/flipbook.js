document.addEventListener("DOMContentLoaded", function () {
    const pages = document.querySelectorAll('.page');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    let currentPage = 0;

    function updateButtonVisibility() {
        if (currentPage === 0) {
            prev.style.visibility = 'hidden';
            prev.style.opacity = '0';
            prev.style.pointerEvents = 'none';
        } else {
            prev.style.visibility = 'visible';
            prev.style.opacity = '1';
            prev.style.pointerEvents = 'auto';
        }

        if (currentPage >= pages.length - 1) {
            next.style.visibility = 'hidden';
            next.style.opacity = '0';
            next.style.pointerEvents = 'none';
        } else {
            next.style.visibility = 'visible';
            next.style.opacity = '1';
            next.style.pointerEvents = 'auto';
        }
    }

    window.flipNext = function () {
        if (currentPage < pages.length - 1) {
            const page = pages[currentPage];
            page.classList.add('flipped');
            currentPage++;
        } else if (currentPage === pages.length - 1) {
            currentPage++;
        }
            updateButtonVisibility();

    };

    window.flipPrev = function () {
        if (currentPage > 0) {
            currentPage--;
            const page = pages[currentPage];
            page.classList.remove('flipped');

        }
             updateButtonVisibility();

    };
        updateButtonVisibility();

});
