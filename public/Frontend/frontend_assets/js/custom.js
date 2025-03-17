
// ==================== counter start ======================= //
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const startCounter = (counter) => {
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const speed = target / 100; // Adjust speed

        const updateCounter = () => {
            if (count < target) {
                count += speed;
                counter.innerText = Math.floor(count);
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;
            }
        };

        updateCounter();
    };

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    startCounter(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    counters.forEach((counter) => observer.observe(counter));
});
// ==================== counter end ======================= //
