<?php

$page_title = "ثبت‌ نام";

$extra_css = '
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-28.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: white;
    margin-bottom: 50px;
}

.registration-form {
    background-color: white;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.form-label {
    font-weight: 600;
}

.form-control {
    padding: 0.75rem;
    border: 1px solid 
    border-radius: 5px;
}

.form-control:focus {
    border-color: 
    box-shadow: 0 0 0 0.2rem rgba(21, 101, 192, 0.25);
}

.registration-steps {
    margin-bottom: 30px;
}

.step-item {
    padding: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.step-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.step-number {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background-color: 
    color: white;
    border-radius: 50%;
    margin-left: 15px;
    font-weight: bold;
}

.required-docs {
    margin-bottom: 30px;
}

.required-docs-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.required-docs-icon {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background-color: rgba(21, 101, 192, 0.1);
    border-radius: 50%;
    margin-left: 15px;
    color: 
}

.deadline-reminder {
    background-color: 
    color: 
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
}

.field-select {
    position: relative;
    display: block;
    padding: 20px;
    border: 2px solid 
    border-radius: 10px;
    margin-bottom: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.field-select:hover {
    border-color: 
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.field-select-icon {
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background-color: rgba(21, 101, 192, 0.1);
    color: 
    border-radius: 50%;
    margin-left: 15px;
    font-size: 24px;
    transition: all 0.3s ease;
}

.field-select:hover .field-select-icon {
    background-color: 
    color: white;
}

.field-select-title {
    font-weight: bold;
    margin-bottom: 5px;
}

.field-select-description {
    font-size: 0.9rem;
    color: 
}

.field-select-input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.field-select-input:checked + .field-select {
    border-color: 
    background-color: rgba(21, 101, 192, 0.05);
}

.field-select-input:checked + .field-select .field-select-icon {
    background-color: 
    color: white;
}
';

$extra_js = '
document.addEventListener("DOMContentLoaded", function() {

    const fieldSelectInputs = document.querySelectorAll(".field-select-input");
    const fieldSelects = document.querySelectorAll(".field-select");

    fieldSelectInputs.forEach((input, index) => {
        input.addEventListener("change", function() {

            fieldSelects.forEach(select => {
                select.classList.remove("selected");
            });

            if (this.checked) {
                fieldSelects[index].classList.add("selected");
            }
        });
    });

    const formData = ' . (isset($_SESSION['registration_data']) ? json_encode($_SESSION['registration_data']) : 'null') . ';

    if (formData) {
        const form = document.getElementById("registrationForm");

        for (const key in formData) {
            const input = form.elements[key];
            if (input && input.type !== "radio" && input.type !== "checkbox") {
                input.value = formData[key];
            }
        }

        if (formData.field) {
            const radioBtn = document.getElementById("field" + formData.field.charAt(0).toUpperCase() + formData.field.slice(1));
            if (radioBtn) {
                radioBtn.checked = true;

                const event = new Event("change");
                radioBtn.dispatchEvent(event);
            }
        }
    }

    ' . (isset($_SESSION['registration_data']) ? 'delete ' . json_encode($_SESSION['registration_data']) : '') . ';
});
';
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center hero-content">
                <h1 class="hero-title" data-aos="fade-up">ثبت‌نام آنلاین</h1>
                <p class="hero-text mx-auto" data-aos="fade-up" data-aos-delay="100">ثبت‌نام در هنرستان کار و دانش شهید امراللهی</p>
            </div>
        </div>
    </div>
</section>

<section class="registration-main py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="registration-form-container" data-aos="fade-up">
                    <?php if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']): ?>
                    <div class="alert alert-success" role="alert">
                        <h5 class="mb-2"><i class="fas fa-check-circle me-2"></i> ثبت‌نام با موفقیت انجام شد!</h5>
                        <p class="mb-0">اطلاعات شما با موفقیت ثبت شد. کارشناسان ما در اسرع وقت با شما تماس خواهند گرفت.</p>
                    </div>
                    <?php

                        unset($_SESSION['registration_success']);
                    ?>
                    <?php elseif (isset($_SESSION['alert_message']) && isset($_SESSION['alert_type'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['alert_type']; ?>" role="alert">
                        <?php echo $_SESSION['alert_message']; ?>
                    </div>
                    <?php

                        unset($_SESSION['alert_message']);
                        unset($_SESSION['alert_type']);
                    ?>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['registration_errors']) && !empty($_SESSION['registration_errors'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <h5 class="mb-2"><i class="fas fa-exclamation-triangle me-2"></i> خطا در ثبت‌نام</h5>
                        <ul class="mb-0 list-unstyled">
                            <?php foreach ($_SESSION['registration_errors'] as $error): ?>
                            <li><i class="fas fa-times-circle me-2"></i> <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php

                        unset($_SESSION['registration_errors']);
                    ?>
                    <?php endif; ?>

                    <div class="registration-form">
                        <h2 class="section-title text-start mb-4">فرم ثبت‌نام</h2>
                        <p class="mb-4">برای ثبت‌نام در هنرستان شهید امراللهی، لطفاً فرم زیر را با دقت تکمیل نمایید:</p>

                        <form id="registrationForm" method="post" action="<?php echo ROOT_URL; ?>">
                            <input type="hidden" name="action" value="register">
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2 mb-3">اطلاعات شخصی</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">نام <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">نام خانوادگی <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fatherName" class="form-label">نام پدر <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fatherName" name="fatherName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nationalCode" class="form-label">کد ملی <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nationalCode" name="nationalCode" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="birthDate" class="form-label">تاریخ تولد <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="birthDate" name="birthDate" placeholder="روز/ماه/سال" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="previousSchool" class="form-label">مدرسه قبلی <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="previousSchool" name="previousSchool" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2 mb-3">اطلاعات تماس</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">شماره تماس <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="parentPhone" class="form-label">شماره تماس والدین <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="parentPhone" name="parentPhone" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">آدرس منزل <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">ایمیل</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2 mb-3">انتخاب رشته</h5>
                                <p class="mb-3">رشته مورد نظر خود را انتخاب کنید:</p>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="radio" name="field" id="fieldComputer" value="computer" class="field-select-input" required checked>
                                        <label for="fieldComputer" class="field-select d-flex align-items-start">
                                            <div class="field-select-icon">
                                                <i class="fas fa-laptop"></i>
                                            </div>
                                            <div>
                                                <div class="field-select-title">رشته کامپیوتر</div>
                                                <div class="field-select-description">شبکه و نرم‌افزار</div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="radio" name="field" id="fieldInstallation" value="installation" class="field-select-input" required>
                                        <label for="fieldInstallation" class="field-select d-flex align-items-start">
                                            <div class="field-select-icon">
                                                <i class="fas fa-tools"></i>
                                            </div>
                                            <div>
                                                <div class="field-select-title">رشته تأسیسات</div>
                                                <div class="field-select-description">حرارتی و برودتی</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2 mb-3">اطلاعات تحصیلی</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="grade" class="form-label">معدل کل پایه نهم <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="grade" name="grade" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mathGrade" class="form-label">نمره ریاضی <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="mathGrade" name="mathGrade" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="scienceGrade" class="form-label">نمره علوم <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="scienceGrade" name="scienceGrade" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="disciplineGrade" class="form-label">نمره انضباط <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="disciplineGrade" name="disciplineGrade" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="border-bottom pb-2 mb-3">توضیحات تکمیلی</h5>
                                <div class="mb-3">
                                    <label for="additionalInfo" class="form-label">در صورت نیاز، توضیحات تکمیلی را وارد کنید:</label>
                                    <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">
                                    با قوانین و مقررات هنرستان موافقم و صحت اطلاعات وارد شده را تأیید می‌کنم. <span class="text-danger">*</span>
                                </label>
                            </div>

                            <div class="deadline-reminder mb-4">
                                <strong><i class="fas fa-exclamation-circle me-2"></i> توجه:</strong>
                                <p class="mb-0">مهلت ثبت‌نام برای سال تحصیلی ۱۴۰۴-۱۴۰۵ تا تاریخ ۳۱ مرداد ۱۴۰۴ می‌باشد. لطفاً در اسرع وقت نسبت به تکمیل مدارک و ثبت‌نام اقدام نمایید.</p>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-check-circle me-2"></i> ثبت‌نام
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="registration-sidebar" data-aos="fade-left">

                    <div class="registration-steps mb-4">
                        <div class="registration-form">
                            <h4 class="mb-4">مراحل ثبت‌نام</h4>

                            <div class="step-item d-flex align-items-start">
                                <div class="step-number">۱</div>
                                <div>
                                    <h5 class="mb-2">تکمیل فرم آنلاین</h5>
                                    <p class="mb-0">ابتدا فرم ثبت‌نام آنلاین را تکمیل کنید.</p>
                                </div>
                            </div>

                            <div class="step-item d-flex align-items-start">
                                <div class="step-number">۲</div>
                                <div>
                                    <h5 class="mb-2">بررسی اولیه</h5>
                                    <p class="mb-0">کارشناسان ما اطلاعات شما را بررسی کرده و با شما تماس می‌گیرند.</p>
                                </div>
                            </div>

                            <div class="step-item d-flex align-items-start">
                                <div class="step-number">۳</div>
                                <div>
                                    <h5 class="mb-2">ارائه مدارک</h5>
                                    <p class="mb-0">با مراجعه حضوری، مدارک لازم را به دفتر هنرستان تحویل دهید.</p>
                                </div>
                            </div>

                            <div class="step-item d-flex align-items-start">
                                <div class="step-number">۴</div>
                                <div>
                                    <h5 class="mb-2">تکمیل ثبت‌نام</h5>
                                    <p class="mb-0">پس از تأیید نهایی، ثبت‌نام شما تکمیل می‌شود.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="required-docs mb-4">
                        <div class="registration-form">
                            <h4 class="mb-4">مدارک مورد نیاز</h4>

                            <div class="required-docs-item">
                                <div class="required-docs-icon">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <div>
                                    <p class="mb-0">اصل و کپی شناسنامه دانش‌آموز</p>
                                </div>
                            </div>

                            <div class="required-docs-item">
                                <div class="required-docs-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <p class="mb-0">چهار قطعه عکس ۳×۴</p>
                                </div>
                            </div>

                            <div class="required-docs-item">
                                <div class="required-docs-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <p class="mb-0">کارنامه پایه نهم</p>
                                </div>
                            </div>

                            <div class="required-docs-item">
                                <div class="required-docs-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div>
                                    <p class="mb-0">گواهی فارغ‌التحصیلی دوره اول متوسطه</p>
                                </div>
                            </div>

                            <div class="required-docs-item">
                                <div class="required-docs-icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div>
                                    <p class="mb-0">فیش واریزی شهریه (پس از تأیید اولیه)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info">
                        <div class="registration-form">
                            <h4 class="mb-4">اطلاعات تماس هنرستان</h4>

                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt me-3 mt-1 text-primary"></i>
                                <p class="mb-0">قم، خیابان توانیر, خیابان قمر بنی هاشم</p>
                            </div>

                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-phone-alt me-3 mt-1 text-primary"></i>
                                <p class="mb-0">۰۲۵۳۶۵۷۴۴۱۵</p>
                            </div>

                            <div class="d-flex align-items-start">
                                <i class="fas fa-envelope me-3 mt-1 text-primary"></i>
                                <p class="mb-0">info@amrollahi-school.ir</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>