<!-- Sidebar -->
<div id="sidebar" class="sidebar  d-flex justify-content-center align-items-center " style="display: none;">
    <ul class="list-unstyled">
        <li class="side-item p-xl-4">
            <a href="#">
                <div class="row p-1 p-md-0">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="images/sidebar/side1.webp" class="img-fluid side-img " alt="">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <h5 class="general-text-color-hover">Explore our newest and most exciting neon NFT collections today.</h5>
                    </div>
                </div>
            </a>
        </li>
        <li class="side-item p-xl-4">
            <a href="#">
                <div class="row p-1 p-md-0">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="images/sidebar/side2.webp" class="img-fluid side-img " alt="">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <h5 class="general-text-color-hover">Discover the visionary artists shaping the future of neon NFTs."</h5>
                    </div>
                </div>
            </a>
        </li>
        <li class="side-item p-xl-4">
            <a href="#">
                <div class="row p-1 p-md-0">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="images/sidebar/side3.webp" class="img-fluid side-img " alt="">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <h5 class="general-text-color-hover">Don’t miss out on limited-time deals for unique neon masterpieces.</h5>
                    </div>
                </div>
            </a>
        </li>
        <li class="side-item p-xl-4">
            <a href="#">
                <div class="row p-1 p-md-0">
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="images/sidebar/side4.webp" class="img-fluid side-img " alt="">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <h5 class="general-text-color-hover">Connect with collectors and artists who love neon digital art.</h5>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</div>

<!-- Кнопка для відкриття сайдбару -->
<button id="toggle-sidebar" class="btn">
    <i id="arrow-icon" class=" fa-solid fa-arrow-left "></i>
</button>

<script>
    document.getElementById("toggle-sidebar").addEventListener("click", function () {
        const sidebar = document.getElementById("sidebar");
        const arrowIcon = document.getElementById("arrow-icon");

        // Перемикаємо видимість сайдбару
        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
        }

        // Перемикаємо клас для обертання стрілки
        arrowIcon.classList.toggle("rotate-180");
    });

</script>