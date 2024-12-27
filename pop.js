window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popupR").style.display="block";
        },
        3000
    )
});

document.querySelector("#close").addEventListener(
    "click",function(){
        document.querySelector(".popupR").style.display = "none";

    }
);
// sakshi code
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const increment = target / 200;

            const updateCounter = () => {
                const current = +counter.innerText;

                if (current < target) {
                    counter.innerText = Math.ceil(current + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target; // Ensure it ends at the target value
                }
            };

            updateCounter();
        });
    };

    // Optional: Trigger animation when counters are visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect(); // Run only once
            }
        });
    });

    observer.observe(document.querySelector('.counters-section'));
});
