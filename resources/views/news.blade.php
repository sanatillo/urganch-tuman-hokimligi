
<x-main>

  <x-news>{{$title}}</x-news>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{route('home')}}">Асосий сахифа</a></li>
                    <li><a href="#">Янгиликлар</a></li>
                </ol>
                <h2>Янгиликлар</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries col-sm-12">
                    
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

                    <div class="col-lg-4 col-sm-12">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Кидириш</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn -->
                        </div><!-- End blog sidebar -->

                            <div class="card text-center">
                              <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="weather" aria-current="true">Weather</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-black" id="currency" aria-current="true">Currency</a>
                                  </li>
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              </div>
                            </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                      <h5 class="mb-0">March 2024</h5>
                                      <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                          <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                            </a>
                                          </li>
                                          <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Next">
                                              <span aria-hidden="true">&raquo;</span>
                                            </a>
                                          </li>
                                        </ul>
                                      </nav>
                                    </div>
                                    <div class="card-body">
                                      <table class="table table-bordered table-sm">
                                        <thead>
                                          <tr>
                                            <th scope="col">Sun</th>
                                            <th scope="col">Mon</th>
                                            <th scope="col">Tue</th>
                                            <th scope="col">Wed</th>
                                            <th scope="col">Thu</th>
                                            <th scope="col">Fri</th>
                                            <th scope="col">Sat</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>

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
        url: 'http://127.0.0.1:8000/api/sixnew',
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
    url: 'http://127.0.0.1:8000/api/sixnew',
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