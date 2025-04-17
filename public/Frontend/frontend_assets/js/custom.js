
// ==================== counter start ======================= //
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const startCounter = (counter) => {
        const target = +counter.getAttribute("data-target");
        const showPlus = counter.getAttribute("data-plus") === "true";
        let count = 0;
        const speed = target / 100;

        const updateCounter = () => {
            if (count < target) {
                count += speed;
                counter.innerText = showPlus
                    ? `${Math.floor(count)}+`
                    : Math.floor(count);
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = showPlus ? `${target}+` : target;
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
