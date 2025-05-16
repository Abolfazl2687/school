<?php

$page_title = "رشته‌های تحصیلی";

$extra_css = '
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-32.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: white;
    margin-bottom: 50px;
}

.program-experience {
    top: -20px;
    right: 20px;
}

.program-image {
    overflow: hidden;
}

.program-image img {
    transition: transform 0.5s ease;
}

.program-image:hover img {
    transform: scale(1.05);
}

.course-item, .feature-item {
    transition: all 0.3s ease;
}

.course-item:hover, .feature-item:hover {
    transform: translateX(-5px);
}

.feature-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-icon {
    width: 80px;
    height: 80px;
    line-height: 80px;
    border-radius: 50%;
    background-color: rgba(21, 101, 192, 0.1);
    margin: 0 auto;
    text-align: center;
    transition: all 0.3s ease;
}

.benefit-card:hover .benefit-icon {
    background-color: 
    color: white;
    transform: rotateY(180deg);
}

.benefit-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.testimonial-item {
    transition: all 0.3s ease;
}

.testimonial-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}
';
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center hero-content" data-aos="fade-up">
                <h1 class="hero-title">رشته‌های تحصیلی</h1>
                <p class="hero-text mx-auto">آشنایی با رشته‌های تخصصی هنرستان امراللهی</p>
            </div>
        </div>
    </div>
</section>

<section class="computer-program py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="program-image position-relative">
                    <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-32.jpg" alt="کلاس کامپیوتر" class="img-fluid rounded shadow-lg">
                    <div class="program-experience bg-primary text-white p-3 rounded shadow position-absolute">
                        <span class="fs-4 fw-bold">رشته کامپیوتر</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title text-start">رشته کامپیوتر (شبکه و نرم‌افزار)</h2>
                <p class="lead mb-4">رشته کامپیوتر با تمرکز بر شبکه و برنامه‌نویسی</p>
                <p class="mb-4">رشته کامپیوتر یکی از محبوب‌ترین و پرطرفدارترین رشته‌های هنرستان شهید امراللهی است. در این رشته، دانش‌آموزان با مفاهیم اساسی کامپیوتر، برنامه‌نویسی، طراحی و پیاده‌سازی شبکه‌های کامپیوتری و مهارت‌های عملی مرتبط آشنا می‌شوند.</p>
                <p class="mb-4">هنرستان شهید امراللهی با بهره‌گیری از کارگاه‌های مجهز به سیستم‌های به‌روز و اساتید متخصص، محیط مناسبی برای یادگیری فناوری‌های جدید دنیای کامپیوتر فراهم کرده است.</p>

                <div class="program-courses mt-5">
                    <h4 class="mb-4"><i class="fas fa-laptop-code me-2 text-primary"></i> دروس تخصصی</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled course-list">
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>برنامه‌نویسی و طراحی وب</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>پایگاه داده و SQL</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled course-list">
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>شبکه‌های کامپیوتری</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>سیستم‌عامل و امنیت شبکه</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>تعمیر و نگهداری سخت‌افزار</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>مهارت‌های اداری و حسابداری</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="program-features mt-5">
                    <h4 class="mb-4"><i class="fas fa-star me-2 text-primary"></i> ویژگی‌های دوره</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-briefcase text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">کارآموزی</h6>
                                    <p class="mb-0 small text-muted">در شرکت‌های معتبر</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-certificate text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">مدرک معتبر</h6>
                                    <p class="mb-0 small text-muted">مورد تأیید وزارت آموزش و پرورش</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-laptop text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">کارگاه‌های مجهز</h6>
                                    <p class="mb-0 small text-muted">با تجهیزات به‌روز</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-project-diagram text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">پروژه‌های عملی</h6>
                                    <p class="mb-0 small text-muted">تقویت مهارت‌های کاربردی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="installation-program py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="fade-left">
                <div class="program-image position-relative">
                    <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-35.jpg" alt="کارگاه تأسیسات" class="img-fluid rounded shadow-lg">
                    <div class="program-experience bg-primary text-white p-3 rounded shadow position-absolute">
                        <span class="fs-4 fw-bold">رشته تأسیسات</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <h2 class="section-title text-start">رشته تأسیسات (حرارتی و برودتی)</h2>
                <p class="lead mb-4">رشته تأسیسات با تمرکز بر سیستم‌های حرارتی، برودتی و تهویه مطبوع</p>
                <p class="mb-4">رشته تأسیسات یکی از رشته‌های مهم و کاربردی هنرستان شهید امراللهی است که به آموزش طراحی، نصب و نگهداری سیستم‌های تهویه مطبوع، تأسیسات حرارتی و برودتی می‌پردازد. دانش‌آموزان این رشته با اصول علمی و عملی مرتبط با این سیستم‌ها آشنا می‌شوند.</p>
                <p class="mb-4">با توجه به نیاز روزافزون جامعه به متخصصان این حوزه، فارغ‌التحصیلان رشته تأسیسات از بازار کار مناسبی برخوردار هستند و می‌توانند در شرکت‌های ساختمانی، مراکز صنعتی و یا به صورت مستقل مشغول به کار شوند.</p>

                <div class="program-courses mt-5">
                    <h4 class="mb-4"><i class="fas fa-tools me-2 text-primary"></i> دروس تخصصی</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled course-list">
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>سیستم‌های تهویه مطبوع</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>سیستم‌های حرارت مرکزی</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>تأسیسات برودتی</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>لوله‌کشی و تأسیسات بهداشتی</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled course-list">
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>برق‌کشی و تأسیسات الکتریکی</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>نقشه‌خوانی و نقشه‌کشی</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>جوشکاری و ورق‌کاری</span>
                                </li>
                                <li class="course-item d-flex align-items-center mb-3">
                                    <span class="course-icon me-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <span>محاسبات فنی تأسیسات</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="program-features mt-5">
                    <h4 class="mb-4"><i class="fas fa-star me-2 text-primary"></i> ویژگی‌های دوره</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-briefcase text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">کارآموزی</h6>
                                    <p class="mb-0 small text-muted">در شرکت‌های تأسیساتی معتبر</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-certificate text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">مدرک معتبر</h6>
                                    <p class="mb-0 small text-muted">مورد تأیید وزارت آموزش و پرورش</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-hard-hat text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">کارگاه‌های عملی</h6>
                                    <p class="mb-0 small text-muted">با تجهیزات صنعتی</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-3">
                                <div class="feature-icon me-3 bg-light rounded-circle p-2">
                                    <i class="fas fa-project-diagram text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">پروژه‌های عملی</h6>
                                    <p class="mb-0 small text-muted">تقویت مهارت‌های کاربردی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="program-benefits py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">مزایای تحصیل در هنرستان امراللهی</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">چرا بسیاری از دانش‌آموزان هنرستان امراللهی را انتخاب می‌کنند؟</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="benefit-card text-center p-4 h-100">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4 class="benefit-title mb-3">مدرک معتبر</h4>
                    <p class="benefit-text">اخذ مدرک کار و دانش رسمی مورد تأیید آموزش و پرورش که در بازار کار و ادامه تحصیل معتبر است</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card text-center p-4 h-100">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tools fa-3x text-primary"></i>
                    </div>
                    <h4 class="benefit-title mb-3">آموزش عملی</h4>
                    <p class="benefit-text">تمرکز بر آموزش‌های عملی و کارگاهی در کنار مباحث تئوری برای ایجاد مهارت‌های کاربردی</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card text-center p-4 h-100">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-briefcase fa-3x text-primary"></i>
                    </div>
                    <h4 class="benefit-title mb-3">بازار کار مناسب</h4>
                    <p class="benefit-text">فراهم کردن زمینه اشتغال مناسب با توجه به نیاز بازار کار به نیروهای ماهر و متخصص</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">نظرات فارغ‌التحصیلان</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">آنچه دانش‌آموختگان هنرستان امراللهی درباره تجربه تحصیل خود می‌گویند</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="testimonials-carousel p-4 bg-white rounded shadow" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="testimonial-item p-4 border rounded h-100">
                                <div class="testimonial-content mb-3">
                                    <p class="fst-italic">"تحصیل در رشته کامپیوتر هنرستان امراللهی تجربه بسیار ارزشمندی برای من بود. آموزش‌های عملی و کارگاهی به من کمک کرد تا پس از فارغ‌التحصیلی بتوانم سریعاً وارد بازار کار شوم."</p>
                                </div>
                                <div class="testimonial-user d-flex align-items-center">
                                    <div class="testimonial-avatar me-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-user text-primary"></i>
                                    </div>
                                    <div class="testimonial-info">
                                        <h6 class="mb-0">علی رضایی</h6>
                                        <p class="small text-muted">فارغ‌التحصیل رشته کامپیوتر - ورودی ۱۳۹۶</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonial-item p-4 border rounded h-100">
                                <div class="testimonial-content mb-3">
                                    <p class="fst-italic">"من در رشته تأسیسات هنرستان امراللهی تحصیل کردم و اکنون شرکت تأسیساتی خودم را دارم. مهارت‌هایی که در هنرستان کسب کردم، اساس موفقیت من در بازار کار بوده است."</p>
                                </div>
                                <div class="testimonial-user d-flex align-items-center">
                                    <div class="testimonial-avatar me-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                        <i class="fas fa-user text-primary"></i>
                                    </div>
                                    <div class="testimonial-info">
                                        <h6 class="mb-0">محمد کریمی</h6>
                                        <p class="small text-muted">فارغ‌التحصیل رشته تأسیسات - ورودی ۱۳۹۴</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">سوالات متداول</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">پاسخ به سوالات رایج درباره رشته‌های تحصیلی هنرستان</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item mb-3 border rounded overflow-hidden">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                شرایط ثبت‌نام در هنرستان چیست؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>برای ثبت‌نام در هنرستان، دانش‌آموزانی که دوره متوسطه اول را با موفقیت به پایان رسانده‌اند می‌توانند در رشته‌های موجود ثبت‌نام کنند. معدل کل دوره اول متوسطه و نمرات دروس مرتبط با رشته مورد نظر در اولویت‌بندی پذیرش تأثیرگذار است.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border rounded overflow-hidden">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                مدت زمان تحصیل در هنرستان چقدر است؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>دوره تحصیلی در هنرستان کار و دانش شهید امراللهی سه سال (پایه‌های دهم، یازدهم و دوازدهم) است. در پایان این دوره، دانش‌آموزان با دریافت دیپلم کار و دانش فارغ‌التحصیل می‌شوند و می‌توانند وارد بازار کار شوند یا در صورت تمایل به تحصیلات خود ادامه دهند.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border rounded overflow-hidden">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                آیا امکان ادامه تحصیل در دانشگاه وجود دارد؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>بله، فارغ‌التحصیلان هنرستان می‌توانند با شرکت در کنکور سراسری یا آزمون‌های دانشگاه‌های آزاد و علمی-کاربردی در رشته‌های مرتبط ادامه تحصیل دهند. همچنین امکان ورود به دوره‌های کاردانی پیوسته برای فارغ‌التحصیلان هنرستان وجود دارد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border rounded overflow-hidden">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                آیا هنرستان خدمات مشاوره تحصیلی ارائه می‌دهد؟
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>بله، هنرستان امراللهی دارای واحد مشاوره تحصیلی است که به دانش‌آموزان در انتخاب رشته مناسب، برنامه‌ریزی تحصیلی و شغلی کمک می‌کند. همچنین مشاوران ما آماده پاسخگویی به سوالات دانش‌آموزان و والدین درباره رشته‌های تحصیلی و آینده شغلی هستند.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="mb-4">آماده ثبت‌نام هستید؟</h2>
                <p class="mb-4">برای کسب اطلاعات بیشتر درباره رشته‌های تحصیلی و روند ثبت‌نام با ما تماس بگیرید.</p>
                <div class="d-flex justify-content-center flex-wrap">
                    <a href="<?php echo create_url('registration'); ?>" class="btn btn-light btn-lg me-3 mb-3">ثبت‌نام آنلاین</a>
                    <a href="<?php echo create_url('contact'); ?>" class="btn btn-outline-light btn-lg mb-3">تماس با ما</a>
                </div>
            </div>
        </div>
    </div>
</section>