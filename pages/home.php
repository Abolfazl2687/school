<?php

$page_title = "صفحه اصلی";

$extra_css = '
.hero-slider {
    position: relative;
    margin-bottom: 40px;
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
}

.fadeInUp {
    animation-name: fadeInUp;
}

.animation-delay-300 {
    animation-delay: 0.3s;
}

.animation-delay-600 {
    animation-delay: 0.6s;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translate3d(0, 100%, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
}

.carousel-item img {
    height: 600px;
    object-fit: cover;
}

.carousel-caption {
    bottom: 50%;
    transform: translateY(50%);
    padding: 20px;
}

.main-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.main-subtitle {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.feature-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.feature-icon {
    width: 80px;
    height: 80px;
    line-height: 80px;
    margin: 0 auto;
    font-size: 2.5rem;
    border-radius: 50%;
    background-color: rgba(21, 101, 192, 0.1);
    color: 
    transition: all 0.3s ease;
}

.feature-card:hover .feature-icon {
    background-color: 
    color: white;
    transform: rotateY(180deg);
}

.program-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.program-header {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.program-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.program-title {
    font-size: 1.8rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.program-features {
    list-style-type: none;
    padding-right: 0;
}

.program-features li {
    margin-bottom: 10px;
}

.gallery-item {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    height: 250px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(21, 101, 192, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay-content {
    text-align: center;
    color: white;
}

.gallery-icon {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    background-color: white;
    color: 
    border-radius: 50%;
    margin-top: 10px;
    transform: scale(0);
    transition: all 0.3s ease 0.1s;
}

.gallery-item:hover .gallery-icon {
    transform: scale(1);
}

.cube-container {
    width: 300px;
    height: 300px;
    perspective: 1000px;
    margin: 0 auto;
}

.cube {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    animation: rotate 20s infinite linear;
}

.cube-face {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    border: 2px solid white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.front {
    transform: translateZ(150px);
}

.back {
    transform: rotateY(180deg) translateZ(150px);
}

.right {
    transform: rotateY(90deg) translateZ(150px);
}

.left {
    transform: rotateY(-90deg) translateZ(150px);
}

.top {
    transform: rotateX(90deg) translateZ(150px);
}

.bottom {
    transform: rotateX(-90deg) translateZ(150px);
}

@keyframes rotate {
    0% {
        transform: rotateX(0deg) rotateY(0deg);
    }
    100% {
        transform: rotateX(360deg) rotateY(360deg);
    }
}

@media (max-width: 991.98px) {
    .carousel-item img {
        height: 500px;
    }

    .main-title {
        font-size: 2rem;
    }

    .main-subtitle {
        font-size: 1rem;
    }

    .cube-container {
        width: 200px;
        height: 200px;
    }

    .front, .back, .right, .left, .top, .bottom {
        transform: translateZ(100px);
    }

    .front {
        transform: translateZ(100px);
    }

    .back {
        transform: rotateY(180deg) translateZ(100px);
    }

    .right {
        transform: rotateY(90deg) translateZ(100px);
    }

    .left {
        transform: rotateY(-90deg) translateZ(100px);
    }

    .top {
        transform: rotateX(90deg) translateZ(100px);
    }

    .bottom {
        transform: rotateX(-90deg) translateZ(100px);
    }
}

@media (max-width: 767.98px) {
    .carousel-item img {
        height: 400px;
    }

    .main-title {
        font-size: 1.8rem;
    }

    .main-subtitle {
        font-size: 0.9rem;
    }
}
';

$extra_js = '
document.addEventListener("DOMContentLoaded", function() {

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

    const statNumbers = document.querySelectorAll(".stat-number");
    let hasAnimated = false;

    function animateNumbers() {
        if (hasAnimated) return;

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

    const statsSection = document.querySelector(".stats-section");

    if (statsSection) {
        window.addEventListener("scroll", function() {
            const rect = statsSection.getBoundingClientRect();
            const viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);

            if (rect.top <= viewHeight * 0.75 && rect.bottom >= 0) {
                animateNumbers();
            }
        });
    }
});
';
?>

<section class="hero-slider">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-overlay"></div>
                <img src="<?php echo $images_path; ?>namayemadrese.jpg" class="d-block w-100" alt="هنرستان امراللهی">
                <div class="carousel-caption">
                    <h1 class="main-title animated fadeInUp">هنرستان کار و دانش شهید امراللهی</h1>
                    <p class="main-subtitle animated fadeInUp animation-delay-300">تربیت متخصصان آینده با آموزش‌های کاربردی و مهارت‌محور</p>
                    <div class="mt-4 animated fadeInUp animation-delay-600">
                        <a href="<?php echo create_url('about'); ?>" class="btn btn-lg btn-primary me-3 mb-3">درباره هنرستان</a>
                        <a href="<?php echo create_url('registration'); ?>" class="btn btn-lg btn-outline-light mb-3">ثبت‌نام آنلاین</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="feature-card p-4 text-center h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="feature-title mb-3">کادر آموزشی مجرب</h3>
                    <p class="feature-text">هنرستان امراللهی با بهره‌گیری از اساتید متخصص و باتجربه، آموزش‌های کیفی و کاربردی ارائه می‌دهد.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card p-4 text-center h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="feature-title mb-3">امکانات آموزشی به‌روز</h3>
                    <p class="feature-text">کارگاه‌های مجهز و امکانات آموزشی به‌روز برای ارائه آموزش‌های عملی و کاربردی به دانش‌آموزان.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card p-4 text-center h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="feature-title mb-3">آینده شغلی تضمین‌شده</h3>
                    <p class="feature-text">فارغ‌التحصیلان هنرستان امراللهی با کسب مهارت‌های کاربردی، آماده ورود به بازار کار می‌شوند.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-left">
                <div class="cube-container">
                    <div class="cube">
                        <div class="cube-face front" style="background-image: url('<?php echo $images_path; ?>namayemadrese.jpg');"></div>
                        <div class="cube-face back" style="background-image: url('<?php echo $images_path; ?>fotbal.jpg');"></div>
                        <div class="cube-face right" style="background-image: url('<?php echo $images_path; ?>kargahcomputer2.jpg');"></div>
                        <div class="cube-face left" style="background-image: url('<?php echo $images_path; ?>kargahtasisat.jpg');"></div>
                        <div class="cube-face top" style="background-image: url('<?php echo $images_path; ?>photo_2025-05-03_04-01-27.jpg.svg');"></div>
                        <div class="cube-face bottom" style="background-image: url('<?php echo $images_path; ?>photo_2025-05-03_04-01-33.jpg.svg');"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-start">هنرستان کار و دانش شهید امراللهی</h2>
                <p class="lead mb-4">بیش از دو دهه سابقه درخشان در تربیت نیروهای متخصص</p>
                <p class="mb-4">هنرستان شهید امراللهی یکی از مراکز آموزشی برتر در زمینه آموزش‌های کار و دانش است که با هدف تربیت نیروی متخصص و کارآمد برای بازار کار فعالیت می‌کند.</p>
                <p class="mb-4">در این هنرستان، دانش‌آموزان علاوه بر آموزش‌های نظری، مهارت‌های عملی و کاربردی را نیز فرا می‌گیرند و برای ورود به بازار کار یا ادامه تحصیل در مقاطع بالاتر آماده می‌شوند.</p>
                <div class="mt-4">
                    <a href="<?php echo create_url('about'); ?>" class="btn btn-primary">بیشتر بدانید</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="programs-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">رشته‌های تحصیلی</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">آشنایی با رشته‌های تخصصی هنرستان امراللهی</p>
            </div>
        </div>
        <div class="row g-4">

            <div class="col-md-6" data-aos="fade-up">
                <div class="program-card h-100">
                    <div class="program-header" style="background-image: url('<?php echo $images_path; ?>kargahcomputer2.jpg');">
                        <div class="program-overlay">
                            <h3 class="program-title">رشته کامپیوتر</h3>
                        </div>
                    </div>
                    <div class="program-body p-4">
                        <p class="program-description mb-4">رشته کامپیوتر یکی از رشته‌های پرطرفدار هنرستان امراللهی است که در زمینه‌های برنامه‌نویسی، شبکه، طراحی وب و سخت‌افزار آموزش‌های تخصصی ارائه می‌دهد.</p>
                        <ul class="program-features mb-4">
                            <li><i class="fas fa-check-circle text-success me-2"></i> برنامه‌نویسی و طراحی وب</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> شبکه‌های کامپیوتری</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> تعمیر و نگهداری سخت‌افزار</li>
                        </ul>
                        <a href="<?php echo create_url('programs'); ?>" class="btn btn-outline-primary">جزئیات بیشتر</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="program-card h-100">
                    <div class="program-header" style="background-image: url('<?php echo $images_path; ?>kargahtasisat.jpg');">
                        <div class="program-overlay">
                            <h3 class="program-title">رشته تأسیسات</h3>
                        </div>
                    </div>
                    <div class="program-body p-4">
                        <p class="program-description mb-4">رشته تأسیسات به آموزش طراحی، نصب و نگهداری سیستم‌های تهویه مطبوع، تأسیسات حرارتی و برودتی می‌پردازد و دانش‌آموزان را برای بازار کار آماده می‌کند.</p>
                        <ul class="program-features mb-4">
                            <li><i class="fas fa-check-circle text-success me-2"></i> سیستم‌های تهویه مطبوع</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> تأسیسات حرارتی و برودتی</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> لوله‌کشی و تأسیسات بهداشتی</li>
                        </ul>
                        <a href="<?php echo create_url('programs'); ?>" class="btn btn-outline-primary">جزئیات بیشتر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3 text-center" data-aos="fade-up">
                <div class="stat-item">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-user-graduate fa-3x"></i>
                    </div>
                    <h3 class="stat-number mb-2">۸۵٪</h3>
                    <p class="stat-label">نرخ اشتغال فارغ‌التحصیلان</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-item">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h3 class="stat-number mb-2">۵۰۰+</h3>
                    <p class="stat-label">دانش‌آموزان</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    </div>
                    <h3 class="stat-number mb-2">۲۰+</h3>
                    <p class="stat-label">اساتید مجرب</p>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-trophy fa-3x"></i>
                    </div>
                    <h3 class="stat-number mb-2">۱۰+</h3>
                    <p class="stat-label">افتخارات استانی و کشوری</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">گالری تصاویر</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">نمایی از فضاهای آموزشی هنرستان امراللهی</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="gallery-item">
                    <img src="<?php echo $images_path; ?>namayemadrese.jpg" alt="نمای هنرستان" class="img-fluid">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>نمای هنرستان</h5>
                            <a href="<?php echo create_url('gallery'); ?>" class="gallery-icon">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-item">
                    <img src="<?php echo $images_path; ?>kargahcomputer2.jpg" alt="کارگاه کامپیوتر" class="img-fluid">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>کارگاه کامپیوتر</h5>
                            <a href="<?php echo create_url('gallery'); ?>" class="gallery-icon">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-item">
                    <img src="<?php echo $images_path; ?>kargahtasisat.jpg" alt="کارگاه تأسیسات" class="img-fluid">
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <h5>کارگاه تأسیسات</h5>
                            <a href="<?php echo create_url('gallery'); ?>" class="gallery-icon">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center" data-aos="fade-up">
                <a href="<?php echo create_url('gallery'); ?>" class="btn btn-primary">مشاهده گالری کامل</a>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="mb-4">آماده شروع مسیر تحصیلی خود هستید؟</h2>
                <p class="lead mb-4">برای کسب اطلاعات بیشتر درباره رشته‌های تحصیلی و ثبت‌نام در هنرستان با ما تماس بگیرید.</p>
                <div>
                    <a href="<?php echo create_url('registration'); ?>" class="btn btn-primary btn-lg me-3 mb-3">ثبت‌نام آنلاین</a>
                    <a href="<?php echo create_url('contact'); ?>" class="btn btn-outline-primary btn-lg mb-3">تماس با ما</a>
                </div>
            </div>
        </div>
    </div>
</section>