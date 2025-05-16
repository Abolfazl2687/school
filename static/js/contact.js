document.addEventListener('DOMContentLoaded', function() {

    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !subject || !message) {
                showAlert('لطفاً تمام فیلدهای ضروری را پر کنید.', 'danger');
                return;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showAlert('لطفاً یک آدرس ایمیل معتبر وارد کنید.', 'danger');
                return;
            }

            if (phone && !/^[0-9۰-۹\-\+]{7,15}$/.test(phone)) {
                showAlert('لطفاً یک شماره تلفن معتبر وارد کنید.', 'danger');
                return;
            }

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> در حال ارسال...';

            setTimeout(() => {

                contactForm.reset();

                showAlert('پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت.', 'success');

                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }, 1500);
        });
    }

    const socialLinks = document.querySelectorAll('.social-icon-link');

    socialLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            link.querySelector('i').classList.add('fa-beat');
        });

        link.addEventListener('mouseleave', () => {
            link.querySelector('i').classList.remove('fa-beat');
        });
    });

    function showAlert(message, type) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-3`;
        alertDiv.role = 'alert';

        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        contactForm.insertAdjacentElement('afterend', alertDiv);

        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alertDiv);
            bsAlert.close();
        }, 5000);
    }

    const mapContainer = document.querySelector('.map-container');

    if (mapContainer) {
        mapContainer.addEventListener('mouseenter', () => {
            mapContainer.style.transform = 'scale(1.02)';
            mapContainer.style.transition = 'transform 0.3s ease';
        });

        mapContainer.addEventListener('mouseleave', () => {
            mapContainer.style.transform = 'scale(1)';
        });
    }
});
