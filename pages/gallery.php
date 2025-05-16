<?php

$page_title = "گالری تصاویر";

$extra_css = '
.gallery-hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("' . $images_path . 'photo_2025-05-03_04-01-27.jpg.svg");
    background-size: cover;
    background-position: center;
    padding: 150px 0;
    color: white;
    margin-bottom: 50px;
    position: relative;
}

.gallery-filter {
    margin-bottom: 30px;
}

.filter-btn {
    border: none;
    background-color: transparent;
    color: 
    padding: 8px 15px;
    border-radius: 30px;
    margin: 0 5px 10px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    color: 
}

.filter-btn.active {
    background-color: 
    color: white;
}

.gallery-container {
    position: relative;
}

.gallery-item {
    position: relative;
    margin-bottom: 30px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    cursor: pointer;
}

.gallery-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.gallery-item::before {
    content: "";
    display: block;
    padding-top: 75%; 
}

.gallery-item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.5s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(21, 101, 192, 0.7);
    opacity: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
    padding: 20px;
    text-align: center;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-title {
    color: white;
    margin-bottom: 10px;
    transform: translateY(-20px);
    transition: all 0.3s ease 0.1s;
    opacity: 0;
}

.gallery-icon {
    color: 
    background-color: white;
    width: 50px;
    height: 50px;
    line-height: 50px;
    border-radius: 50%;
    display: inline-block;
    transform: translateY(20px);
    transition: all 0.3s ease 0.1s;
    opacity: 0;
}

.gallery-item:hover .gallery-title,
.gallery-item:hover .gallery-icon {
    transform: translateY(0);
    opacity: 1;
}

.modal-content {
    border-radius: 10px;
}

.modal-body {
    padding: 0;
}

.modal-body img {
    width: 100%;
    border-radius: 10px;
}

.btn-close {
    position: absolute;
    top: 15px;
    right: 15px;
    background-color: white;
    opacity: 0.7;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    z-index: 1050;
}

.btn-close:hover {
    opacity: 1;
}

.modal-nav {
    position: absolute;
    top: 50%;
    width: 100%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    z-index: 1050;
}

.modal-nav-btn {
    background-color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.7;
    cursor: pointer;
    transition: all 0.3s ease;
}

.modal-nav-btn:hover {
    opacity: 1;
}

.modal-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    border-radius: 0 0 10px 10px;
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
    .cube-container {
        width: 250px;
        height: 250px;
    }

    .front, .back, .right, .left, .top, .bottom {
        transform: translateZ(125px);
    }

    .front {
        transform: translateZ(125px);
    }

    .back {
        transform: rotateY(180deg) translateZ(125px);
    }

    .right {
        transform: rotateY(90deg) translateZ(125px);
    }

    .left {
        transform: rotateY(-90deg) translateZ(125px);
    }

    .top {
        transform: rotateX(90deg) translateZ(125px);
    }

    .bottom {
        transform: rotateX(-90deg) translateZ(125px);
    }
}

@media (max-width: 767.98px) {
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
';

$extra_js = '
document.addEventListener("DOMContentLoaded", function() {

    const filterButtons = document.querySelectorAll(".filter-btn");
    const galleryItems = document.querySelectorAll(".gallery-item");

    filterButtons.forEach(button => {
        button.addEventListener("click", function() {

            filterButtons.forEach(btn => {
                btn.classList.remove("active");
            });

            this.classList.add("active");

            const filter = this.getAttribute("data-filter");

            galleryItems.forEach(item => {
                if (filter === "all") {
                    item.style.display = "block";
                } else {
                    if (item.classList.contains(filter)) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                }
            });
        });
    });

    const galleryModal = document.getElementById("galleryModal");
    const modalImage = document.getElementById("modalImage");
    const modalCaption = document.getElementById("modalCaption");
    const modalPrev = document.getElementById("modalPrev");
    const modalNext = document.getElementById("modalNext");

    const galleryArray = Array.from(galleryItems);
    let currentIndex = 0;

    galleryItems.forEach((item, index) => {
        item.addEventListener("click", function() {
            const imageSrc = item.querySelector("img").getAttribute("src");
            const imageAlt = item.querySelector("img").getAttribute("alt");

            modalImage.setAttribute("src", imageSrc);
            modalCaption.textContent = imageAlt;
            currentIndex = index;

            const galleryModalObj = new bootstrap.Modal(galleryModal);
            galleryModalObj.show();
        });
    });

    if (modalPrev) {
        modalPrev.addEventListener("click", function() {
            currentIndex = (currentIndex - 1 + galleryArray.length) % galleryArray.length;
            updateModal();
        });
    }

    if (modalNext) {
        modalNext.addEventListener("click", function() {
            currentIndex = (currentIndex + 1) % galleryArray.length;
            updateModal();
        });
    }

    function updateModal() {
        const item = galleryArray[currentIndex];
        const imageSrc = item.querySelector("img").getAttribute("src");
        const imageAlt = item.querySelector("img").getAttribute("alt");

        modalImage.setAttribute("src", imageSrc);
        modalCaption.textContent = imageAlt;
    }

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
});
';
?>

<section class="gallery-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center hero-content">
                <h1 class="hero-title" data-aos="fade-up">گالری تصاویر</h1>
                <p class="hero-text mx-auto" data-aos="fade-up" data-aos-delay="100">تصاویر هنرستان، کارگاه‌ها، فعالیت‌ها و رویدادها</p>
            </div>
        </div>
    </div>
</section>

<section class="cube-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">نمایش سه بعدی</h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">با حرکت ماوس روی مکعب، می‌توانید آن را کنترل کنید</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="cube-container">
                    <div class="cube">
                        <div class="cube-face front" style="background-image: url('<?php echo $images_path; ?>namayemadrese.jpg');"></div>
                        <div class="cube-face back" style="background-image: url('<?php echo $images_path; ?>fotbal.jpg');"></div>
                        <div class="cube-face right" style="background-image: url('<?php echo $images_path; ?>kargahcomputer2.jpg');"></div>
                        <div class="cube-face left" style="background-image: url('<?php echo $images_path; ?>kargahtasisat.jpg');"></div>
                        <div class="cube-face top" style="background-image: url('<?php echo $images_path; ?>photo_2025-05-03_04-01-27.jpg.svg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">آلبوم تصاویر</h2>
                <p data-aos="fade-up" data-aos-delay="100">تصاویر مختلف از فضاها، امکانات و فعالیت‌های هنرستان</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 text-center gallery-filter" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">همه</button>
                <button class="filter-btn" data-filter="school">هنرستان</button>
                <button class="filter-btn" data-filter="computer">کارگاه کامپیوتر</button>
                <button class="filter-btn" data-filter="installation">کارگاه تأسیسات</button>
                <button class="filter-btn" data-filter="sports">فضاهای ورزشی</button>
            </div>
        </div>

        <div class="row gallery-container">

            <div class="col-md-4 col-sm-6 gallery-item school" data-aos="fade-up">
                <img src="<?php echo $images_path; ?>namayemadrese.jpg" alt="نمای هنرستان" style="margin-top: 100px;">>
                <br><br><br>
                <div class="gallery-overlay">
                    <h5 class="gallery-title">نمای هنرستان</h5>
                    <div class="gallery-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>

            <img src="<?php echo $images_path; ?>kargahtasisat.jpg" alt="کارگاه تأسیسات" style="margin-top: 60px;">


            <div class="col-md-4 col-sm-6 gallery-item sports" data-aos="fade-up">
                <img src="<?php echo $images_path; ?>fotbal.jpg" alt="زمین ورزشی">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">زمین ورزشی</h5>
                    <div class="gallery-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-item school" data-aos="fade-up" data-aos-delay="200">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-item computer" data-aos="fade-up">
                <img src="<?php echo $images_path; ?>kargahcomputer2.jpg" alt="آموزش عملی کامپیوتر">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">آموزش عملی کامپیوتر</h5>
                    <div class="gallery-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 gallery-item school" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo $images_path; ?>photo_2025-05-03_04-01-33.jpg.svg" alt=" ">
                <div class="gallery-overlay">
                    <h5 class="gallery-title"> </h5>
                    <div class="gallery-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body position-relative">
                <img id="modalImage" src="" alt="" class="img-fluid">
                <div class="modal-nav">
                    <div class="modal-nav-btn" id="modalPrev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="modal-nav-btn" id="modalNext">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                <div class="modal-caption" id="modalCaption"></div>
            </div>
        </div>
    </div>
</div>

<section class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="mb-4">مایل به آشنایی بیشتر با هنرستان هستید؟</h2>
                <p class="lead mb-4">برای کسب اطلاعات بیشتر و بازدید از هنرستان با ما تماس بگیرید.</p>
                <div class="d-flex justify-content-center flex-wrap">
                    <a href="<?php echo create_url('registration'); ?>" class="btn btn-primary btn-lg me-3 mb-3">ثبت‌نام آنلاین</a>
                    <a href="<?php echo create_url('contact'); ?>" class="btn btn-outline-primary btn-lg mb-3">تماس با ما</a>
                </div>
            </div>
        </div>
    </div>
</section>