    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="footer-about">
                        <h5 class="footer-heading">هنرستان شهید امراللهی</h5>
                        <p>هنرستان کار و دانش شهید امراللهی با هدف تربیت نیروی متخصص و کارآمد در رشته‌های کامپیوتر و تأسیسات فعالیت می‌کند.</p>
                        <ul class="footer-contact-info list-unstyled">

                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span>۰۲۵۳۶۵۷۴۴۱۵</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>info@amrollahi-school.ir</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
                    <div class="footer-links">
                        <h5 class="footer-heading">دسترسی سریع</h5>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo create_url('home'); ?>">صفحه اصلی</a></li>
                            <li><a href="<?php echo create_url('about'); ?>">درباره ما</a></li>
                            <li><a href="<?php echo create_url('programs'); ?>">رشته‌های تحصیلی</a></li>
                            <li><a href="<?php echo create_url('facilities'); ?>">امکانات</a></li>
                            <li><a href="<?php echo create_url('gallery'); ?>">گالری تصاویر</a></li>
                            <li><a href="<?php echo create_url('news'); ?>">اخبار</a></li>
                            <li><a href="<?php echo create_url('exams'); ?>">برنامه امتحانات</a></li>
                            <li><a href="<?php echo create_url('registration'); ?>">ثبت‌نام</a></li>
                            <li><a href="<?php echo create_url('contact'); ?>">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-newsletter">
                        <h5 class="footer-heading">خبرنامه</h5>
                        <p>برای دریافت آخرین اخبار و رویدادهای هنرستان، در خبرنامه ما عضو شوید.</p>
                        <form class="newsletter-form">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="ایمیل خود را وارد کنید" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">عضویت</button>
                        </form>
                        <div class="social-links mt-4">
                            <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div class="container">
                <p class="mb-0">تمامی حقوق برای هنرستان کار و دانش شهید امراللهی محفوظ است. &copy; <?php echo date('Y'); ?></p>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="<?php echo $js_path; ?>script.js?v=<?php echo time(); ?>"></script>

    <?php if (isset($extra_js)): ?>
    <script>
        <?php echo $extra_js; ?>
    </script>
    <?php endif; ?>
</body>
</html>