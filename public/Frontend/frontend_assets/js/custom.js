
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

// =================== animation start ======================== //
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".moveup-animation");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            } else {
                entry.target.classList.remove("visible");
            }
        });
    }, {
        threshold: 0.5
    });

    elements.forEach(el => observer.observe(el));
});

document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll(".moveup-animation");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                } else {
                    entry.target.classList.remove("visible");
                }
            });
        },
        {
            threshold: 0.5, // Trigger when 10% is visible
        }
    );

    elements.forEach((el) => observer.observe(el));
});
// ===================== animation end ======================= //
