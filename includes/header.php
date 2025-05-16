<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?> | <?php echo isset($page_title) ? $page_title : 'صفحه اصلی'; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="<?php echo $css_path; ?>style.css?v=<?php echo time(); ?>">

    <?php if (isset($extra_css)): ?>
    <style>
        <?php echo $extra_css; ?>
    </style>
    <?php endif; ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo create_url('home'); ?>">
                <span class="text-primary">هنرستان</span> شهید امراللهی
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('home'); ?>" href="<?php echo create_url('home'); ?>">صفحه اصلی</a>
                    </li>
                    <a class="nav-link <?php echo is_active('registration'); ?>" href="<?php echo create_url('registration'); ?>">ثبت‌نام</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('about'); ?>" href="<?php echo create_url('about'); ?>">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('programs'); ?>" href="<?php echo create_url('programs'); ?>">رشته‌های تحصیلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('facilities'); ?>" href="<?php echo create_url('facilities'); ?>">امکانات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('gallery'); ?>" href="<?php echo create_url('gallery'); ?>">گالری تصاویر</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('exams'); ?>" href="<?php echo create_url('exams'); ?>">برنامه امتحانات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo is_active('contact'); ?>" href="<?php echo create_url('contact'); ?>">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main-content">