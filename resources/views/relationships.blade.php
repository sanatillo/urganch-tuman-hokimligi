<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Бошқа давлат органлари билан ўзаро муносабатлар</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <x-link>
        <!-- css links -->
    </x-link>

</head>

<body>

<x-main>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('home')}}">Асосий сахифа</a></li>
                    <li><a href="#">Бошқа давлат органлари билан ўзаро муносабатлар</a></li>
                </ol>
                <h2>Бошқа давлат органлари билан ўзаро муносабатлар</h2>

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

    <x-js-link>
        <!-- js links -->
    </x-js-link>

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

        let title = document.querySelectorAll("#title"),
            myContent = document.querySelectorAll("#content"),
            image = document.querySelectorAll(".my-card-image");

            console.log(title);
        for (let i = 0; i < 6; i++) {
            myContent[i].innerHTML = data.posts[i].content;
            title[i].innerHTML = data.posts[i].title;
            image[i].src = data.posts[i].photo_path;
        }

    },
    error: function () {
        alert("Data was not found");
    }
})
    </script>

</body>

</html>