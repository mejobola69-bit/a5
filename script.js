document.addEventListener('DOMContentLoaded', () => {
    // Mobile navigation toggle
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');

    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            menuBtn.classList.toggle('open');
        });
    }

    // Interactive Insulation & Waterproofing Membrane Calibrator
    const membraneSelect = document.getElementById('membrane-select');
    const fillSlider = document.getElementById('fill-slider');
    const fillVal = document.getElementById('fill-val');
    const ratingGauge = document.getElementById('rating-gauge');

    if (membraneSelect && ratingGauge) {
        membraneSelect.addEventListener('change', (e) => {
            const val = e.target.value;
            saveStateSafely('mjj_membrane', val);
        });
    }

    if (fillSlider && fillVal && ratingGauge) {
        fillSlider.addEventListener('input', (e) => {
            const f = e.target.value;
            fillVal.textContent = f + ' Fill Power';
            ratingGauge.textContent = f + 'FP';
            saveStateSafely('mjj_fill_power', f);
        });
    }

    // Helper for localStorage safety
    function saveStateSafely(key, value) {
        try {
            if (typeof localStorage !== 'undefined') {
                localStorage.setItem(key, value);
            }
        } catch (err) {
            console.warn('localStorage not accessible:', err);
        }
    }
});
