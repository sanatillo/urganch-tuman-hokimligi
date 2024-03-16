
<x-main>
 


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Асосий сахифа</a></li>
                    <li><a href="news.html">Тендер ва эълонлар</a></li> 
                </ol>
                <h2>Тендер ва эълонлар</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                    <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="my-container">
                            <div class="my-card">
                                <img class="my-card-image">
                                <div class="my-card-content">
                                    <h3 id="title">Title</h3>
                                    <p id="content">Content</p>
                                </div>
                            </div>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Кидириш</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->
                        </div><!-- End blog sidebar -->

                    </div>

                </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
   
</x-main>

<div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/commponent.js"></script>
    <script>
    function posts() {
    $.ajax({
        url: 'http://127.0.0.1:8000/api/data',
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("Posts : ", data.posts)
        },
        error: function () {
            alert("Xatolik yuz berdi");
        }
    })
  }

  document.addEventListener("DOMContentLoaded", posts);


$.ajax({
    url: 'http://127.0.0.1:8000/api/data',
    type: "GET",
    dataType: "json",
    success: function (data) {

        // data for news
        let title = document.querySelectorAll("#title"),
            content = document.querySelectorAll("#content"),
            newsImage = document.querySelectorAll(".my-card-image");


        for (let i = 0; i < 6; i++) {
            content[i].innerHTML = data.posts[i].content;
            title[i].innerHTML = data.posts[i].title;
            newsImage[i].src = data.posts[i].photo_path;
        }

    },
    error: function () {
        alert("Data was not found");
    }
})
    </script>

</body>

</html>