

document.addEventListener("DOMContentLoaded", function() {

    AOS.init({
        duration: 800,
        easing: 'ease',
        once: true,
        offset: 50
    });

    const backToTop = document.querySelector('.back-to-top');

    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    const currentLocation = location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');

        if (linkPath === currentLocation || 
            (currentLocation.includes(linkPath) && linkPath !== '/')) {
            link.classList.add('active');
        }
    });

    function animateNumbers() {
        const statNumbers = document.querySelectorAll('.stat-number');
        let hasAnimated = false;

        if (statNumbers.length > 0 && !hasAnimated) {
            statNumbers.forEach(statNumber => {
                const finalValue = statNumber.textContent;
                let startValue = 0;
                let duration = 2000;

                if (finalValue.includes("%") || finalValue.includes("٪")) {
                    let numValue = finalValue.replace(/[^\d]/g, "");
                    let increment = numValue / (duration / 20);
                    let currentValue = 0;

                    let timer = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= numValue) {
                            clearInterval(timer);
                            currentValue = numValue;
                        }
                        statNumber.textContent = Math.floor(currentValue) + "٪";
                    }, 20);
                }

                else if (finalValue.includes("+")) {
                    let numValue = finalValue.replace(/[^\d]/g, "");
                    let increment = numValue / (duration / 20);
                    let currentValue = 0;

                    let timer = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= numValue) {
                            clearInterval(timer);
                            currentValue = numValue;
                        }
                        statNumber.textContent = Math.floor(currentValue) + "+";
                    }, 20);
                }

                else {
                    let numValue = parseInt(finalValue.replace(/[^\d]/g, ""));
                    let increment = numValue / (duration / 20);
                    let currentValue = 0;

                    let timer = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= numValue) {
                            clearInterval(timer);
                            currentValue = numValue;
                        }
                        statNumber.textContent = Math.floor(currentValue);
                    }, 20);
                }
            });

            hasAnimated = true;
        }
    }

    const statsSection = document.querySelector('.stats-section');

    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateNumbers();
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        observer.observe(statsSection);
    }

    const cube = document.querySelector(".cube");
    if (cube) {
        let isMouseOver = false;
        let autoRotation;

        cube.parentElement.addEventListener("mouseenter", function() {
            isMouseOver = true;
            clearInterval(autoRotation);
            cube.style.animation = "none";
        });

        document.addEventListener("mousemove", function(e) {
            if (isMouseOver) {
                const sensitivity = 0.1;
                const rotateY = (e.clientX / window.innerWidth - 0.5) * 360 * sensitivity;
                const rotateX = (e.clientY / window.innerHeight - 0.5) * 360 * sensitivity;

                cube.style.animation = "none";
                cube.style.transform = `translateZ(-150px) rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
            }
        });

        cube.parentElement.addEventListener("mouseleave", function() {
            isMouseOver = false;
            cube.style.animation = "rotate 20s infinite linear";
            cube.style.transform = "";
        });
    }

    const navbar = document.querySelector('.navbar');
    const mainContent = document.querySelector('#main-content');

    if (navbar && mainContent) {
        const navbarHeight = navbar.offsetHeight;

        if (window.innerWidth > 991) {
            mainContent.style.paddingTop = navbarHeight + 'px';
        }
    }

    const contactForm = document.querySelector('.contact-form form');
    const newsletterForm = document.querySelector('.newsletter-form');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formSuccess = document.querySelector('.form-success');
            if (formSuccess) {
                formSuccess.classList.remove('d-none');

                contactForm.reset();

                setTimeout(function() {
                    formSuccess.classList.add('d-none');
                }, 5000);
            }
        });
    }

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();

            alert('ایمیل شما با موفقیت در خبرنامه ثبت شد.');

            newsletterForm.reset();
        });
    }
});

function toFarsiNumber(n) {
    const farsiDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];

    return n.toString().replace(/\d/g, x => farsiDigits[x]);
}

function showAlert(message, type = 'success') {
    const alertBox = document.createElement('div');
    alertBox.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-4`;
    alertBox.style.zIndex = '9999';
    alertBox.style.minWidth = '300px';

    alertBox.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;

    document.body.appendChild(alertBox);

    setTimeout(function() {
        alertBox.classList.remove('show');
        setTimeout(function() {
            document.body.removeChild(alertBox);
        }, 300);
    }, 5000);
}

function validateForm(form) {
    let isValid = true;
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');

    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });

    return isValid;
}