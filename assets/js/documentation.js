// Scroll transition effect
window.addEventListener('scroll', () => {
    document.querySelectorAll('.card-transition').forEach((card) => {
        const cardPosition = card.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.2; // Trigger animation a bit earlier
        if (cardPosition < screenPosition) {
            card.style.opacity = 1;
            card.style.transform = 'translateY(0)';
        } else {
            card.style.opacity = 0;
            card.style.transform = 'translateY(50px)';
        }
    });
});