<?php

$page_title = "برنامه امتحانات";

$extra_css = '
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-28.jpg");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: white;
    margin-bottom: 50px;
}

.schedule-card {
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.schedule-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.schedule-header {
    background-color: 
    color: white;
    padding: 20px;
    border-radius: 10px 10px 0 0;
}

.schedule-title {
    margin-bottom: 0;
    font-weight: bold;
}

.schedule-subtitle {
    margin-bottom: 0;
    opacity: 0.8;
}

.schedule-body {
    padding: 0;
}

.exam-table {
    margin-bottom: 0;
}

.exam-table th {
    background-color: 
    font-weight: bold;
}

.exam-date {
    font-weight: bold;
    color: 
}

.exam-time {
    font-weight: bold;
}

.exam-info {
    display: flex;
    flex-direction: column;
}

.exam-subject {
    font-weight: bold;
    margin-bottom: 5px;
}

.exam-teacher, .exam-location {
    font-size: 0.9rem;
    color: 
}

.filter-buttons {
    margin-bottom: 30px;
}

.filter-btn {
    border: none;
    background-color: 
    padding: 10px 20px;
    border-radius: 30px;
    margin: 0 5px 10px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    background-color: 
}

.filter-btn.active {
    background-color: 
    color: white;
}

.note-card {
    background-color: 
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    border-right: 5px solid 
}

.tips-card {
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    margin-bottom: 20px;
    overflow: hidden;
}

.tips-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.tips-header {
    background-color: 
    color: white;
    padding: 15px 20px;
}

.tips-body {
    padding: 20px;
}

.tips-list {
    list-style-type: none;
    padding-right: 0;
}

.tips-list li {
    margin-bottom: 10px;
    padding-right: 25px;
    position: relative;
}

.tips-list li:before {
    content: "\\f00c";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    right: 0;
    color: 
}

.download-btn {
    display: inline-block;
    background-color: 
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 15px;
    transition: all 0.3s ease;
}

.download-btn:hover {
    background-color: 
    color: white;
    text-decoration: none;
}

.download-btn i {
    margin-left: 10px;
}
';

$extra_js = '
document.addEventListener("DOMContentLoaded", function() {

    const filterButtons = document.querySelectorAll(".filter-btn");
    const scheduleCards = document.querySelectorAll(".schedule-card");

    filterButtons.forEach(button => {
        button.addEventListener("click", function() {

            filterButtons.forEach(btn => {
                btn.classList.remove("active");
            });

            this.classList.add("active");

            const filter = this.getAttribute("data-filter");

            scheduleCards.forEach(card => {
                if (filter === "all") {
                    card.style.display = "block";
                } else {
                    if (card.getAttribute("data-grade") === filter) {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                }
            });
        });
    });
});
';
?>

<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center hero-content">
                <h1 class="hero-title" data-aos="fade-up">برنامه امتحانات</h1>
                <p class="hero-text mx-auto" data-aos="fade-up" data-aos-delay="100">برنامه امتحانات پایان نیمسال و پایان سال تحصیلی</p>
            </div>
        </div>
    </div>
</section>

<section class="filter-section py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center filter-buttons" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">همه پایه‌ها</button>
                <button class="filter-btn" data-filter="10">پایه دهم</button>
                <button class="filter-btn" data-filter="11">پایه یازدهم</button>
                <button class="filter-btn" data-filter="12">پایه دوازدهم</button>
            </div>
        </div>
    </div>
</section>

<section class="note-section py-3">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <div class="note-card">
                    <h5 class="mb-3"><i class="fas fa-exclamation-circle me-2"></i> نکات مهم:</h5>
                    <ul class="mb-0">
                        <li>حضور دانش‌آموزان حداقل ۳۰ دقیقه قبل از شروع امتحان الزامی است.</li>
                        <li>همراه داشتن کارت ورود به جلسه برای شرکت در امتحانات ضروری است.</li>
                        <li>استفاده از تلفن همراه در جلسه امتحان ممنوع می‌باشد.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="schedule-section py-3">
    <div class="container">

        <div class="schedule-card" data-grade="10" data-aos="fade-up">
            <div class="schedule-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="schedule-title">برنامه امتحانات پایان سال - پایه دهم</h4>
                        <p class="schedule-subtitle">رشته‌های کامپیوتر و تأسیسات - خرداد ۱۴۰۴</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-download me-2"></i> دانلود برنامه
                        </a>
                    </div>
                </div>
            </div>
            <div class="schedule-body">
                <div class="table-responsive">
                    <table class="table table-striped exam-table">
                        <thead>
                            <tr>
                                <th scope="col" width="15%">تاریخ</th>
                                <th scope="col" width="15%">ساعت</th>
                                <th scope="col" width="40%">درس</th>
                                <th scope="col" width="30%">مکان برگزاری</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="exam-date">این‌ها تستی است</td>
                                <td class="exam-time">این‌ها تستی است</td>
                                <td>
                                    <div class="exam-info">
                                        <span class="exam-subject">این‌ها تستی است</span>
                                        <span class="exam-teacher">این‌ها تستی است</span>
                                    </div>
                                </td>
                                <td class="exam-location">این‌ها تستی است</td>
                            </tr>
                            <tr>
                                <td class="exam-date">این‌ها تستی است</td>
                                <td class="exam-time">این‌ها تستی است</td>
                                <td>
                                    <div class="exam-info">
                                        <span class="exam-subject">این‌ها تستی است</span>
                                        <span class="exam-teacher">این‌ها تستی است</span>
                                    </div>
                                </td>
                                <td class="exam-location">این‌ها تستی است</td>
                            </tr>
                            <tr>
                                <td class="exam-date">این‌ها تستی است</td>
                                <td class="exam-time">این‌ها تستی است</td>
                                <td>
                                    <div class="exam-info">
                                        <span class="exam-subject">این‌ها تستی است</span>
                                        <span class="exam-teacher">این‌ها تستی است</span>
                                    </div>
                                </td>
                                <td class="exam-location">این‌ها تستی است</td>
                            </tr>
                            <tr>
                                <td class="exam-date">این‌ها تستی است</td>
                                <td class="exam-time">این‌ها تستی است</td>
                                <td>
                                    <div class="exam-info">
                                        <span class="exam-subject">این‌ها تستی است</span>
                                        <span class="exam-teacher">این‌ها تستی است</span>
                                    </div>
                                </td>
                                <td class="exam-location">این‌ها تستی است</td>
                            </tr>
                            <tr>
                                <td class="exam-date">این‌ها تستی است</td>
                                <td class="exam-time">این‌ها تستی است</td>
                                <td>
                                    <div class="exam-info">
                                        <span class="exam-subject">این‌ها تستی است</span>
                                        <span class="exam-teacher">این‌ها تستی است</span>
                                    </div>
                                </td>
                                <td class="exam-location">این‌ها تستی است</td>
                            </tr>
                            <tr>
                                <td class="exam-date">این‌ها تستی است</td>
                                <td class="exam-time">این‌ها تستی است</td>
                                <td>
                                    <div class="exam-info">
                                        <span class="exam-subject">این‌ها تستی است</span>
                                        <span class="exam-teacher">این‌ها تستی است</span>
                                    </div>
                                </td>
                                <td class="exam-location">این‌ها تستی است</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="schedule-card" data-grade="11" data-aos="fade-up">
            <div class="schedule-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="schedule-title">برنامه امتحانات پایان سال - پایه یازدهم</h4>
                        <p class="schedule-subtitle">رشته‌های کامپیوتر و تأسیسات - خرداد ۱۴۰۴</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <a href="#" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-download me-2"></i> دانلود برنامه
                        </a>
                    </div>
                </div>
            </div>