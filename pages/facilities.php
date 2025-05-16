<?php

$page_title = "امکانات";

$extra_css = '
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-33.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: white;
    margin-bottom: 50px;
}

.facility-card {
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    background-color: white;
    transition: all 0.3s ease;
    height: 100%;
}

.facility-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}

.facility-image {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.facility-image::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));
    z-index: 1;
}

.facility-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}

.facility-card:hover .facility-image img {
    transform: scale(1.1);
}

.facility-category {
    position: absolute;
    top: 20px;
    left: 20px;
    background-color: 
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    z-index: 2;
}

.facility-content {
    padding: 20px;
}

.facility-features {
    list-style-type: none;
    padding-right: 0;
}

.facility-features li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.facility-features li i {
    color: 
    margin-left: 10px;
}

.facility-icon {
    width: 80px;
    height: 80px;
    line-height: 80px;
    background-color: rgba(21, 101, 192, 0.1);
    border-radius: 50%;
    text-align: center;
    margin: 0 auto 20px;
    color: 
    font-size: 2rem;
    transition: all 0.3s ease;
}

.facility-box:hover .facility-icon {
    background-color: 
    color: white;
    transform: rotateY(180deg);
}

.facility-box {
    padding: 30px 20px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.facility-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.stats-item {
    padding: 20px;
    text-align: center;
}

.stats-icon {
    width: 60px;
    height: 60px;
    line-height: 60px;
    font-size: 2rem;
    margin: 0 auto 15px;
}

.stats-number {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.gallery-item {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    height: 250px;
    margin-bottom: 30px;
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
';
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center hero-content">
                <h1 class="hero-title" data-aos="fade-up">امکانات هنرستان</h1>
                <p class="hero-text mx-auto" data-aos="fade-up" data-aos-delay="100">آشنایی با فضاها و امکانات آموزشی هنرستان شهید امراللهی</p>
            </div>
        </div>
    </div>
</section>

<section class="facilities-intro py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">امکانات و فضاهای آموزشی</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">هنرستان امراللهی با بهره‌گیری از فضاهای آموزشی استاندارد و تجهیزات به‌روز، محیطی مناسب برای آموزش‌های نظری و عملی فراهم کرده است.</p>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="facility-card h-100">
                    <div class="facility-image">
                        <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-32.jpg" alt="کارگاه کامپیوتر">
                        <div class="facility-category">فضای آموزشی</div>
                    </div>
                    <div class="facility-content">
                        <h4 class="mb-3">کارگاه کامپیوتر</h4>
                        <p>کارگاه کامپیوتر هنرستان با بهره‌گیری از سیستم‌های به‌روز و نرم‌افزارهای تخصصی، محیطی مناسب برای آموزش‌های عملی در حوزه‌های مختلف کامپیوتر فراهم کرده است.</p>
                        <ul class="facility-features mt-4">
                            <li><i class="fas fa-check-circle"></i> سیستم‌های به‌روز با سخت‌افزار مناسب</li>
                            <li><i class="fas fa-check-circle"></i> نرم‌افزارهای تخصصی در حوزه‌های مختلف</li>
                            <li><i class="fas fa-check-circle"></i> شبکه داخلی و اینترنت پرسرعت</li>
                            <li><i class="fas fa-check-circle"></i> سیستم نمایش تصویر استاد</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="facility-card h-100">
                    <div class="facility-image">
                        <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-35.jpg" alt="کارگاه تأسیسات">
                        <div class="facility-category">فضای آموزشی</div>
                    </div>
                    <div class="facility-content">
                        <h4 class="mb-3">کارگاه تأسیسات</h4>
                        <p>کارگاه تأسیسات با تجهیزات صنعتی و استاندارد، امکان آموزش عملی در زمینه‌های تهویه مطبوع، تأسیسات حرارتی و برودتی را فراهم می‌کند.</p>
                        <ul class="facility-features mt-4">
                            <li><i class="fas fa-check-circle"></i> تجهیزات استاندارد و صنعتی</li>
                            <li><i class="fas fa-check-circle"></i> فضای کافی برای کار گروهی</li>
                            <li><i class="fas fa-check-circle"></i> ابزارآلات تخصصی و حرفه‌ای</li>
                            <li><i class="fas fa-check-circle"></i> مدل‌های آموزشی سیستم‌های تأسیساتی</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="facility-card h-100">
                    <div class="facility-image">
                        <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-27.jpg" alt="کتابخانه و سالن مطالعه">
                        <div class="facility-category">فضای آموزشی</div>
                    </div>
                    <div class="facility-content">
                        <h4 class="mb-3">کتابخانه و سالن مطالعه</h4>
                        <p>کتابخانه هنرستان با مجموعه‌ای از کتب تخصصی و عمومی، محیطی آرام برای مطالعه و پژوهش دانش‌آموزان فراهم کرده است.</p>
                        <ul class="facility-features mt-4">
                            <li><i class="fas fa-check-circle"></i> مجموعه غنی از کتب تخصصی و عمومی</li>
                            <li><i class="fas fa-check-circle"></i> سالن مطالعه با فضای آرام</li>
                            <li><i class="fas fa-check-circle"></i> دسترسی به منابع الکترونیکی</li>
                            <li><i class="fas fa-check-circle"></i> امکان امانت کتاب</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="facility-card h-100">
                    <div class="facility-image">
                        <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-49.jpg" alt="زمین فوتبال">
                        <div class="facility-category">فضای ورزشی</div>
                    </div>
                    <div class="facility-content">
                        <h4 class="mb-3">زمین فوتبال</h4>
                        <p>زمین فوتبال هنرستان با ابعاد استاندارد و امکانات مناسب، فضای لازم برای ورزش و فعالیت‌های تیمی دانش‌آموزان را فراهم می‌کند.</p>
                        <ul class="facility-features mt-4">
                            <li><i class="fas fa-check-circle"></i> زمین با ابعاد استاندارد</li>
                            <li><i class="fas fa-check-circle"></i> چمن مصنوعی با کیفیت</li>
                            <li><i class="fas fa-check-circle"></i> تجهیزات ورزشی مناسب</li>
                            <li><i class="fas fa-check-circle"></i> امکان برگزاری مسابقات داخلی</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="facility-card h-100">
                    <div class="facility-image">
                        <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-52.jpg" alt="زمین والیبال">
                        <div class="facility-category">فضای ورزشی</div>
                    </div>
                    <div class="facility-content">
                        <h4 class="mb-3">زمین والیبال</h4>
                        <p>زمین والیبال هنرستان با ابعاد استاندارد و امکانات لازم، فضای مناسبی برای ورزش والیبال فراهم کرده است.</p>
                        <ul class="facility-features mt-4">
                            <li><i class="fas fa-check-circle"></i> زمین با ابعاد استاندارد</li>
                            <li><i class="fas fa-check-circle"></i> تور و تجهیزات مناسب</li>
                            <li><i class="fas fa-check-circle"></i> کفپوش استاندارد</li>
                            <li><i class="fas fa-check-circle"></i> امکان برگزاری مسابقات داخلی</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="facility-card h-100">
                    <div class="facility-image">
                        <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-28.jpg" alt="نمازخانه">
                        <div class="facility-category">فضای فرهنگی</div>
                    </div>
                    <div class="facility-content">
                        <h4 class="mb-3">نمازخانه</h4>
                        <p>نمازخانه هنرستان فضایی آرام و معنوی برای اقامه نماز و برگزاری مراسم مذهبی و فرهنگی فراهم کرده است.</p>
                        <ul class="facility-features mt-4">
                            <li><i class="fas fa-check-circle"></i> فضای آرام و معنوی</li>
                            <li><i class="fas fa-check-circle"></i> امکانات مناسب برای اقامه نماز</li>
                            <li><i class="fas fa-check-circle"></i> فضای کافی برای شرکت همه دانش‌آموزان</li>
                            <li><i class="fas fa-check-circle"></i> برگزاری مراسم مذهبی و فرهنگی</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="facility-features py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">ویژگی‌های امکانات هنرستان</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">جنبه‌های متمایز امکانات و تجهیزات هنرستان امراللهی</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="facility-box text-center">
                    <div class="facility-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h4 class="mb-3">تجهیزات به‌روز</h4>
                    <p>تمامی کارگاه‌ها و فضاهای آموزشی هنرستان به تجهیزات و ابزارآلات به‌روز و استاندارد مجهز شده‌اند تا دانش‌آموزان بتوانند با آخرین فناوری‌ها آشنا شوند.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="facility-box text-center">
                    <div class="facility-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4 class="mb-3">فضای استاندارد</h4>
                    <p>فضاهای آموزشی هنرستان مطابق با استانداردهای آموزشی طراحی شده‌اند و از نظر نور، تهویه، فضا و چیدمان در وضعیت مطلوبی قرار دارند.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="facility-box text-center">
                    <div class="facility-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4 class="mb-3">ایمنی و امنیت</h4>
                    <p>تمامی فضاها و تجهیزات هنرستان با در نظر گرفتن اصول ایمنی و امنیت طراحی و نصب شده‌اند تا محیط امنی برای آموزش و یادگیری فراهم شود.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">گالری تصاویر امکانات</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">نمایی از فضاها و امکانات مختلف هنرستان امراللهی</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" data-aos="zoom-in">
                <div class="gallery-item">
                    <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-32.jpg" alt="کارگاه کامپیوتر" class="img-fluid">
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

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-item">
                    <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-35.jpg" alt="کارگاه تأسیسات" class="img-fluid">
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

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-item">
                    <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-49.jpg" alt="نمای هنرستان" class="img-fluid">
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
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center" data-aos="fade-up">
                <a href="<?php echo create_url('gallery'); ?>" class="btn btn-primary">مشاهده گالری کامل</a>
            </div>
        </div>
    </div>
</section>

<section class="stats-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3" data-aos="fade-up">
                <div class="stats-item">
                    <div class="stats-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stats-number">۱۲</div>
                    <div class="stats-label">کلاس درس</div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="stats-item">
                    <div class="stats-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="stats-number">۴</div>
                    <div class="stats-label">کارگاه تخصصی</div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="stats-item">
                    <div class="stats-icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <div class="stats-number">۳</div>
                    <div class="stats-label">فضای ورزشی</div>
                </div>
            </div>

            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="stats-item">
                    <div class="stats-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stats-number">۱۰۰۰+</div>
                    <div class="stats-label">کتاب در کتابخانه</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="mb-4">مایل به بازدید از هنرستان هستید؟</h2>
                <p class="lead mb-4">برای بازدید از امکانات و فضاهای آموزشی هنرستان می‌توانید با ما تماس بگیرید.</p>
                <a href="<?php echo create_url('contact'); ?>" class="btn btn-primary btn-lg">تماس با ما</a>
            </div>
        </div>
    </div>
</section>