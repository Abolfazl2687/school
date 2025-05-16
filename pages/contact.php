<?php

$page_title = "تماس با ما";

$extra_css = '
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-27.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: white;
    margin-bottom: 50px;
}

.section-title.text-start::after {
    left: 0;
    transform: none;
}

.contact-info-card {
    transition: all 0.3s ease;
}

.contact-info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
}

.contact-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: rgba(21, 101, 192, 0.1);
    color: 
    transition: all 0.3s ease;
}

.contact-info-card:hover .contact-icon {
    background-color: 
    color: white;
    transform: rotateY(180deg);
}

.social-link {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    border-radius: 50%;
    background-color: 
    color: white;
    transition: all 0.3s ease;
}

.social-link:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    color: white;
}

.contact-form .form-control {
    padding: 0.75rem;
    border: 1px solid 
    border-radius: 5px;
}

.contact-form .form-control:focus {
    border-color: 
    box-shadow: 0 0 0 0.2rem rgba(21, 101, 192, 0.25);
}

.map-container {
    transition: all 0.3s ease;
    height: 350px;
    overflow: hidden;
}

.map-container:hover {
    transform: scale(1.02);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
}

.accordion-button:not(.collapsed) {
    background-color: rgba(21, 101, 192, 0.1);
    color: 
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(21, 101, 192, 0.25);
}
';

$extra_js = '
document.addEventListener("DOMContentLoaded", function() {

    const contactForm = document.getElementById("contactForm");
    const formSuccess = document.getElementById("formSuccess");

    if (contactForm) {
        contactForm.addEventListener("submit", function(e) {
            e.preventDefault();

            formSuccess.classList.remove("d-none");

            contactForm.reset();

            setTimeout(function() {
                formSuccess.classList.add("d-none");
            }, 5000);
        });
    }

    const socialLinks = document.querySelectorAll(".social-link");

    socialLinks.forEach(link => {
        link.addEventListener("mouseenter", function() {
            this.querySelector("i").classList.add("fa-beat");
        });

        link.addEventListener("mouseleave", function() {
            this.querySelector("i").classList.remove("fa-beat");
        });
    });
});
';
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="hero-title" data-aos="fade-up">تماس با ما</h1>
                <p class="hero-text mx-auto" data-aos="fade-up" data-aos-delay="100">ارتباط با هنرستان شهید امراللهی</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-section py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-left">
                <h2 class="section-title mb-4 text-start">راه‌های ارتباطی</h2>

                <div class="contact-info-card p-4 bg-white rounded shadow-sm mb-4">
                    <div class="d-flex">
                        <div class="contact-icon me-3">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div class="contact-details">
                            <h5 class="mb-2">آدرس:</h5>
                            <p class="mb-0">قم، خیابان بافقی، خیابان قمر بنی هاشم</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-card p-4 bg-white rounded shadow-sm mb-4">
                    <div class="d-flex">
                        <div class="contact-icon me-3">
                            <i class="fas fa-phone-alt fa-2x"></i>
                        </div>
                        <div class="contact-details">
                            <h5 class="mb-2">تلفن تماس:</h5>
                            <p class="mb-0">۰۲۵۳۶۵۷۴۴۱۵</p>
                            <p class="mb-0">۰۲۵۳۶۵۷۴۴۱۵</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-card p-4 bg-white rounded shadow-sm mb-4">
                    <div class="d-flex">
                        <div class="contact-icon me-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div class="contact-details">
                            <h5 class="mb-2">پست الکترونیکی:</h5>
                            <p class="mb-0">info@amrollahi-school.ir</p>
                        </div>
                    </div>
                </div>

                <div class="contact-info-card p-4 bg-white rounded shadow-sm mb-4">
                    <div class="d-flex">
                        <div class="contact-icon me-3">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <div class="contact-details">
                            <h5 class="mb-2">ساعات کاری:</h5>
                            <p class="mb-0">شنبه تا چهارشنبه: ۷:۳۰ الی ۱۴:۰۰</p>
                            <p class="mb-0">پنجشنبه: ۷:۳۰ الی ۱۲:۰۰</p>
                        </div>
                    </div>
                </div>

                <div class="social-media mt-5">
                    <h5 class="mb-3">ما را در شبکه‌های اجتماعی دنبال کنید:</h5>
                    <div class="social-links">
                        <a href="#" class="social-link me-3" data-aos="zoom-in" data-aos-delay="100">
                            <i class="fab fa-telegram fa-2x"></i>
                        </a>
                        <a href="#" class="social-link me-3" data-aos="zoom-in" data-aos-delay="200">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="300">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-right">
                <div class="contact-form-container bg-white p-4 rounded shadow-sm">
                    <h2 class="section-title mb-4 text-start">ارسال پیام</h2>
                    <p class="mb-4">برای ارسال سوالات، پیشنهادات و یا انتقادات خود، فرم زیر را تکمیل نمایید:</p>

                    <form id="contactForm" class="contact-form">
                        <div class="alert alert-success d-none" id="formSuccess" role="alert">
                            پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت.
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">نام و نام خانوادگی <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">شماره تماس <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">موضوع <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">پیام <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>

                        <div class="text-start">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> ارسال پیام
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">موقعیت ما روی نقشه</h2>
            </div>
        </div>
        <div class="map-placeholder text-center py-5">
    <a href="https://balad.ir/p/%D9%87%D9%86%D8%B1%D8%B3%D8%AA%D8%A7%D9%86-%D8%B4%D9%87%DB%8C%D8%AF%D8%A7%D9%85%D8%B1%D8%A7%D9%84%D9%84%D9%87%DB%8C-qom_school-6NpbfT5TpTeTOx#15/34.68413/50.86827" target="_blank" class="position-relative d-inline-block">
        <i class="fas fa-map-marked-alt text-primary" style="font-size: 5rem;"></i>
        <span class="position-absolute top-0 end-0 bg-success text-white rounded-circle" style="padding: 5px; font-size: 12px;">
            <i class="fas fa-external-link-alt"></i>
        </span>
    </a>
            <h5 class="mt-3">موقعیت هنرستان شهید امراللهی</h5>
         <p class="text-muted">قم، خیابان بافقی، خیابان قمر بنی هاشم</p>
</div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">سوالات متداول</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">

                    <div class="accordion-item mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                نحوه ثبت‌نام در هنرستان چگونه است؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>برای ثبت‌نام در هنرستان، دانش‌آموزان پایه نهم می‌توانند در بازه زمانی اعلام شده (معمولاً تیرماه) با مراجعه حضوری به دفتر هنرستان یا از طریق سامانه ثبت‌نام آنلاین، مدارک خود را ارائه نمایند. مدارک لازم شامل کارنامه پایه نهم، کپی شناسنامه و کارت ملی، و چهار قطعه عکس ۳×۴ می‌باشد.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                هزینه تحصیل در هنرستان شهید امراللهی چقدر است؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>هنرستان شهید امراللهی یک مرکز آموزشی دولتی است و طبق مصوبات آموزش و پرورش، شهریه ثابتی دریافت می‌کند. هزینه‌های جانبی شامل کتب درسی، لباس کارگاهی و بعضی از فعالیت‌های فوق برنامه ممکن است جداگانه محاسبه شود. برای اطلاع از هزینه‌های دقیق سال تحصیلی جاری، با دفتر هنرستان تماس بگیرید.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                آیا امکان بازدید از هنرستان قبل از ثبت‌نام وجود دارد؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>بله، هنرستان شهید امراللهی همه ساله در ایام ثبت‌نام (خرداد و تیرماه) روزهای مشخصی را برای بازدید دانش‌آموزان و خانواده‌ها از فضاها و امکانات آموزشی اختصاص می‌دهد. همچنین در صورت تمایل به بازدید در سایر زمان‌ها، می‌توانید با دفتر هنرستان هماهنگی‌های لازم را انجام دهید.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                شرایط ثبت‌نام در رشته‌های مختلف چیست؟
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>برای ثبت‌نام در رشته‌های کار و دانش هنرستان، دانش‌آموزان باید دوره متوسطه اول را با موفقیت به پایان رسانده باشند. معدل کل پایه نهم و همچنین نمرات دروس مرتبط با رشته مورد نظر (مثلا ریاضی و علوم برای رشته‌های فنی) در اولویت‌بندی دانش‌آموزان موثر است. همچنین انجام مصاحبه و آزمون عملی برای برخی رشته‌ها ممکن است بخشی از فرآیند پذیرش باشد.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>