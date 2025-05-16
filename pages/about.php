<?php

$page_title = "درباره ما";

$extra_css = '
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-52.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: white;
    margin-bottom: 50px;
}

.about-stat-item {
    transition: all 0.3s ease;
}

.about-stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.about-experience {
    bottom: -20px;
    right: -20px;
}

.icon-box {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.timeline {
    padding: 50px 0;
}

.timeline::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: 
    right: 50%;
    transform: translateX(50%);
}

.timeline-item {
    position: relative;
    margin-bottom: 50px;
}

.timeline-item:nth-child(odd) .timeline-content {
    margin-right: auto;
    width: 45%;
}

.timeline-item:nth-child(even) .timeline-content {
    margin-left: auto;
    width: 45%;
}

.timeline-dot {
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    top: 20px;
}

.timeline-item:nth-child(odd) .timeline-dot {
    left: -60px;
}

.timeline-item:nth-child(even) .timeline-dot {
    right: -60px;
}

.team-card, .mission-card {
    transition: all 0.3s ease;
}

.team-card:hover, .mission-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.vision-icon, .mission-icon, .value-icon {
    width: 70px;
    height: 70px;
    line-height: 70px;
    border-radius: 50%;
    background-color: rgba(21, 101, 192, 0.1);
    margin: 0 auto 20px;
    text-align: center;
    transition: all 0.3s ease;
}

.value-card:hover .value-icon,
.mission-card:hover .mission-icon,
.vision-card:hover .vision-icon {
    background-color: 
    color: white;
    transform: rotateY(180deg);
}

@media (max-width: 767.98px) {
    .timeline::before {
        right: 30px;
    }

    .timeline-item:nth-child(odd) .timeline-content,
    .timeline-item:nth-child(even) .timeline-content {
        width: calc(100% - 70px);
        margin-right: 70px;
    }

    .timeline-item:nth-child(odd) .timeline-dot,
    .timeline-item:nth-child(even) .timeline-dot {
        right: 20px;
    }
}
';
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center hero-content">
                <h1 class="hero-title" data-aos="fade-up">درباره هنرستان</h1>
                <p class="hero-text" data-aos="fade-up" data-aos-delay="100">آشنایی با تاریخچه، اهداف و ارزش‌های هنرستان کار و دانش شهید امراللهی</p>
            </div>
        </div>
    </div>
</section>

<section class="about-intro py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="fade-left">
                <div class="about-image">
                    <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-49.jpg" alt="نمای هنرستان امراللهی" class="img-fluid rounded shadow-lg">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <h2 class="section-title text-start">هنرستان شهید امراللهی</h2>
                <p class="lead">هنرستان کار و دانش شهید امراللهی با بیش از دو دهه تجربه در تربیت نیروهای متخصص و ماهر</p>
                <p>هنرستان شهید امراللهی در سال ۱۳۷۵ تأسیس شد و از آن زمان تاکنون، به عنوان یکی از مراکز آموزشی پیشرو در زمینه آموزش‌های کار و دانش فعالیت می‌کند. هدف اصلی ما تربیت دانش‌آموزانی توانمند و ماهر است که بتوانند پس از فارغ‌التحصیلی، به سرعت جذب بازار کار شوند یا تحصیلات خود را در مقاطع بالاتر ادامه دهند.</p>
                <div class="about-stats mt-4">
                    <div class="row g-3">
                        <div class="col-6 col-md-3">
                            <div class="about-stat-item text-center p-3 rounded bg-light">
                                <h4 class="mb-0">۱۵+</h4>
                                <p class="mb-0 small">سال تجربه</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-stat-item text-center p-3 rounded bg-light">
                                <h4 class="mb-0">۲+</h4>
                                <p class="mb-0 small">رشته تخصصی</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-stat-item text-center p-3 rounded bg-light">
                                <h4 class="mb-0">۵۰۰+</h4>
                                <p class="mb-0 small">دانش‌آموز</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="about-stat-item text-center p-3 rounded bg-light">
                                <h4 class="mb-0">۲۰+</h4>
                                <p class="mb-0 small">استاد مجرب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vision-mission py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">چشم‌انداز و ماموریت ما</h2>
                <p data-aos="fade-up" data-aos-delay="100">ما به دنبال ساختن آینده‌ای روشن برای دانش‌آموزان و جامعه هستیم</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-up">
                <div class="vision-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="vision-icon mb-3">
                        <i class="fas fa-eye fa-3x text-primary"></i>
                    </div>
                    <h3 class="mb-3">چشم‌انداز</h3>
                    <p>هنرستان شهید امراللهی به دنبال تبدیل شدن به یکی از برترین مراکز آموزش کار و دانش در کشور است. ما می‌خواهیم با ارائه آموزش‌های کاربردی و به‌روز، دانش‌آموزانی تربیت کنیم که توانایی رقابت در عرصه‌های ملی و بین‌المللی را داشته باشند.</p>
                    <p>ما باور داریم که آموزش‌های کار و دانش نقش مهمی در توسعه اقتصادی و اجتماعی کشور دارند و تلاش می‌کنیم تا با تربیت نیروهای متخصص، سهمی در پیشرفت میهن عزیزمان داشته باشیم.</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mission-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="mission-icon mb-3">
                        <i class="fas fa-bullseye fa-3x text-primary"></i>
                    </div>
                    <h3 class="mb-3">ماموریت</h3>
                    <p>ماموریت ما ارائه آموزش‌های کار و دانش با کیفیت و متناسب با نیازهای بازار کار است. ما به دنبال پرورش مهارت‌های فنی، خلاقیت، کارآفرینی و توانایی حل مسئله در دانش‌آموزان هستیم.</p>
                    <p>ما تلاش می‌کنیم با فراهم کردن محیطی پویا و مبتنی بر احترام و اعتماد متقابل، زمینه رشد و پیشرفت همه‌جانبه دانش‌آموزان را فراهم کنیم و آن‌ها را برای ورود موفق به بازار کار یا ادامه تحصیل در مقاطع بالاتر آماده سازیم.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="values-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">ارزش‌های ما</h2>
                <p data-aos="fade-up" data-aos-delay="100">ارزش‌هایی که هدایت‌گر فعالیت‌های ما هستند</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="value-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fas fa-award fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">کیفیت آموزشی</h4>
                    <p>ما به ارائه آموزش‌های با کیفیت و استاندارد متعهد هستیم و همواره در تلاشیم تا سطح علمی و مهارتی دانش‌آموزان را ارتقا دهیم.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">احترام متقابل</h4>
                    <p>ما به حقوق، عقاید و تفاوت‌های فردی احترام می‌گذاریم و معتقدیم که محیط آموزشی باید مبتنی بر احترام و اعتماد متقابل باشد.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="value-icon mb-3">
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-3">نوآوری و خلاقیت</h4>
                    <p>ما به دنبال پرورش تفکر خلاق و نوآور در دانش‌آموزان هستیم و از ایده‌های جدید و خلاقانه استقبال می‌کنیم.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-history py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">تاریخچه هنرستان</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">نگاهی به گذشته و مسیر پیشرفت هنرستان شهید امراللهی</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="timeline position-relative">
                    <div class="timeline-item" data-aos="fade-left">
                        <div class="timeline-content bg-white p-4 rounded shadow-sm">
                            <div class="timeline-dot bg-primary"></div>
                            <h4 class="mb-3">تأسیس هنرستان</h4>
                            <p class="mb-0">هنرستان شهید امراللهی در سال ۱۳۸۰ با هدف آموزش رشته‌های کار و دانش به جوانان مستعد تأسیس شد.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content bg-white p-4 rounded shadow-sm">
                            <div class="timeline-dot bg-primary"></div>
                            <h4 class="mb-3">توسعه رشته‌های تحصیلی</h4>
                            <p class="mb-0">در سال ۱۳۸۵ با توسعه امکانات آموزشی، رشته‌های تحصیلی جدیدی به هنرستان اضافه شد.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-left">
                        <div class="timeline-content bg-white p-4 rounded shadow-sm">
                            <div class="timeline-dot bg-primary"></div>
                            <h4 class="mb-3">تجهیز کارگاه‌های آموزشی</h4>
                            <p class="mb-0">در سال ۱۳۹۰ کارگاه‌های آموزشی هنرستان با جدیدترین تجهیزات به‌روزرسانی شدند.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-content bg-white p-4 rounded shadow-sm">
                            <div class="timeline-dot bg-primary"></div>
                            <h4 class="mb-3">کسب افتخارات استانی و کشوری</h4>
                            <p class="mb-0">از سال ۱۳۹۵ تا کنون، دانش‌آموزان هنرستان موفق به کسب افتخارات متعدد در مسابقات علمی و مهارتی شده‌اند.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-left">
                        <div class="timeline-content bg-white p-4 rounded shadow-sm">
                            <div class="timeline-dot bg-primary"></div>
                            <h4 class="mb-3">امروز</h4>
                            <p class="mb-0">امروز هنرستان شهید امراللهی با افتخار به آموزش جوانان مستعد در رشته‌های کار و دانش ادامه می‌دهد.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">کادر آموزشی</h2>
                <p data-aos="fade-up" data-aos-delay="100">اساتید متخصص و متعهد ما</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up">
                <div class="team-card text-center bg-white p-4 rounded shadow-sm h-100">
                    <div class="team-image mb-3">
                        <div style="background-color: #e0e0e0; height: 200px; width: 200px; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user fa-5x text-secondary"></i>
                        </div>
                    </div>
                    <h5 class="mb-1">تستی</h5>
                    <p class="text-muted mb-2">تستی</p>
                    <p class="small">تستی تستی تستی</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card text-center bg-white p-4 rounded shadow-sm h-100">
                    <div class="team-image mb-3">
                        <div style="background-color: #e0e0e0; height: 200px; width: 200px; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user fa-5x text-secondary"></i>
                        </div>
                    </div>
                    <h5 class="mb-1">تستی</h5>
                    <p class="text-muted mb-2">تستی</p>
                    <p class="small">تستی تستی تستی</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card text-center bg-white p-4 rounded shadow-sm h-100">
                    <div class="team-image mb-3">
                        <div style="background-color: #e0e0e0; height: 200px; width: 200px; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user fa-5x text-secondary"></i>
                        </div>
                    </div>
                    <h5 class="mb-1">تستی</h5>
                    <p class="text-muted mb-2">تستی</p>
                    <p class="small">تستی تستی تستی</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="team-card text-center bg-white p-4 rounded shadow-sm h-100">
                    <div class="team-image mb-3">
                        <div style="background-color: #e0e0e0; height: 200px; width: 200px; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user fa-5x text-secondary"></i>
                        </div>
                    </div>
                    <h5 class="mb-1">تستی</h5>
                    <p class="text-muted mb-2">تستی</p>
                    <p class="small">تستی تستی تستی</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <h2 class="mb-4">آماده پاسخگویی به سؤالات شما هستیم</h2>
                <p class="lead mb-4">برای کسب اطلاعات بیشتر درباره هنرستان، رشته‌های تحصیلی و شرایط ثبت‌نام با ما تماس بگیرید.</p>
                <a href="<?php echo create_url('contact'); ?>" class="btn btn-light btn-lg">تماس با ما</a>
            </div>
        </div>
    </div>
</section>