{{-- @include('head') --}}
@include('includes/head',['title'=>'Homepage'])
    
    <!-- Carousel Start -->
    <section class="m-0">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="margin-bottom: 100px">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex justify-content-start align-items-center h-100" style="margin: auto;">
                        <div class="text-white">
                            <div class="mask" style="background-color:rgba(230, 142, 45, 0.3); padding: 10px 5px 10px 5px; width: 19em;">
                                <p class="text-center" style="letter-spacing: 3px; font-size: 15px">BUILD ANYTHING WITH US</p>
                            </div>
                            <h1 class="mb-3" style="font-family: 'Roboto Condensed', sans-serif; text-align: left;;">We Deliver with <br> Automation</h1>
                            <div class="line" style="height: 6px; width: 5em; background-color: #e68e2d;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex justify-content-start align-items-center h-100" style="margin: auto;">
                        <div class="text-white">
                            <div class="mask" style="background-color:rgba(230, 142, 45, 0.3); padding: 10px 5px 10px 5px; width: 19em;">
                                <p class="text-center" style="letter-spacing: 3px; font-size: 15px">BUILD ANYTHING WITH US</p>
                            </div>
                            <h1 class="mb-3" style="font-family: 'Roboto Condensed', sans-serif; text-align: left;;">We Deliver with <br> Automation</h1>
                            <div class="line" style="height: 6px; width: 5em; background-color: #e68e2d;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                    <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex justify-content-start align-items-center h-100" style="margin: auto;">
                        <div class="text-white">
                            <div class="mask" style="background-color:rgba(230, 142, 45, 0.3); padding: 10px 5px 10px 5px; width: 19em;">
                                <p class="text-center" style="letter-spacing: 3px; font-size: 15px">BUILD ANYTHING WITH US</p>
                            </div>
                            <h1 class="mb-3" style="font-family: 'Roboto Condensed', sans-serif; text-align: left;;">We Deliver with <br> Automation</h1>
                            <div class="line" style="height: 6px; width: 5em; background-color: #e68e2d;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                {{-- <i class="fa-regular fa-circle-chevron-left fa-2xl"></i> --}}
                <i class="fa-solid fa-chevron-left fa-2xl"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                {{-- <i class="fa-regular fa-circle-chevron-right fa-2xl"></i> --}}
                <i class="fa-solid fa-chevron-right fa-2xl"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Carousel End -->
      
    <!-- Banner Start -->
    <div id="banner">
        <div class="container px-5 py-4 shadow" style="background: white; border-radius: 20px !important">
            <div class="row">
                <div class="col-md-6 vertical-rule" style="border-right: 1px solid gray;">
                    <h2 class="fw-bold py-4" style="font-family: 'Oswald', sans-serif; font-size: 40px">Get to Know Us</h2>
                    <p class="mb-4" style="font-family: 'Roboto Condensed', sans-serif;">
                        Since the past decade where internet were able to 
                        saturate our modern activities in the industry, we take
                        up a notch to bring forth the best integrations in the
                        industry.
                    </p>
                    <button type="button" class="btn rounded-0 mb-3" style="background-color: #104378; color: #fff; font-family: Oswald, sans-serif; padding: 10px 30px;">LEARN MORE</button>
                </div>
                <div class="col-md-6 py-3 ps-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled row align-items-center fs-5" style="font-family: 'Oswald', sans-serif;">
                                <li class="col-md-12 mb-2"><i class="fa-solid fa-caret-right" style="color: #e68e2d"></i> Manufacturing Management System</li>
                                <li class="col-md-12 mb-2"><i class="fa-solid fa-caret-right" style="color: #e68e2d"></i> Warehouse Management System</li>
                                <li class="col-md-12 mb-2"><i class="fa-solid fa-caret-right" style="color: #e68e2d"></i> Human Resource Information System</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="list-unstyled row align-items-center fs-5" style="font-family: 'Oswald', sans-serif;">
                                <li class="col-md-12 mb-2"><i class="fa-solid fa-caret-right" style="color: #e68e2d"></i> Global Positioning System</li>
                                <li class="col-md-12 mb-2"><i class="fa-solid fa-caret-right" style="color: #e68e2d"></i> Inventory Management System</li>
                                <li class="col-md-12 mb-2"><i class="fa-solid fa-caret-right" style="color: #e68e2d"></i> Compensation & Benefits System</li>
                            </ul>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
        <div class="line" style="height: 8px; width: 22em; background-color: #e68e2d; align-items: center; margin: 0 auto; margin-bottom: 30px; border-bottom-left-radius: 50% 100px; border-bottom-right-radius: 50% 100px;"></div>
    </div>    
    <!-- Banner End -->
      
    
    <section class="about mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex flex-column justify-content-center align-items-stretch">
                    <div class="content" style="padding-left: 25%">
                        <h1 class='header-title mb-2 text-start' style="font-family: 'Oswald', sans-serif; font-size: 40px !important;">About Us</h1>
                        <img src="img/title-line.png" class="mb-5" style="width: 60px">
                        <p class="mb-4 lh-lg" style="text-align: justify; font-family: 'Roboto Condensed', sans-serif;">
                            Excel Quality Service Corp. is engaged with warehousing and
                            other services wherein clients across the country get to experience
                            innovative services that helps different international clients
                            manufacture their brands, products and maintain their systems
                            to optimum level.
                        </p>
                        <button type="button" class="btn rounded-0 mb-4" style="background-color: #104378; color: #fff; font-family: Oswald, sans-serif; padding: 10px 30px;">LEARN MORE</button>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-items-stretch video-box" style='background-image: url("img/about-img.png"); clip-path: polygon(29.5% 0%, 100% 0%, 100% 100%, 0% 100%); width: 50%'>
                    <a href="https://www.youtube.com/watch?v=fk_g7VSnOoM" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>
                {{-- <img src="img/about-img.png" style="width: 100%; height: 100%; clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);" alt=""> --}}
            </div>
        </div>
    </section>
    
    {{-- Careers --}}
    <section class="careers-section py-5 px-5" style="background: #131d3b">
        <div class="container" style="max-width: 700px;">
            <div class="career-header text-center" style="color: white; margin-bottom: 70px">
                <p class="fs-6" style="letter-spacing: 3px;">JOIN OUR CAREERS</p>
                <h1 class="mb-4" style="font-family: 'Oswald', sans-serif; font-size: 60px">Our Careers</h1>
                <div class="line" style="height: 3px; width: 6em; background-color: #e68e2d; align-items:center; margin: 0 auto; margin-top: 10px;"></div>
                <div class="line" style="height: 3px; width: 3em; background-color: #e68e2d; align-items: center; margin: 0 auto; margin-top: 10px; margin-bottom: 30px;"></div>
            </div>
            <div class="row mb-4 py-2 px-0" style="background: white">
                <div class="col-md-4">
                    <img src="img/career-img.jpg" alt="Team Member" class="img-fluid">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="team-member-info">
                        <h1 class="fw-bold mb-2" style="font-size: 25px; font-family: Oswald; color: #131d3b;">Sales Manager</h1>
                        <p class="card-text mb-4">Davao City</p>
                        <p class="card-text mb-5">Felis enim tincidunt a consectetuer erat, nunc ac vitainteg neque
                            phetra pgravidan laoreet urna. Laoreet accumsan .....
                        </p>
                        <div class="d-flex align-items-center read-more">
                            <a href="" class="read-more-btn" style="color:#e68e2d; letter-spacing: 2px; min-width: 100px; font-size: 17px; font-family: Oswald;">READ MORE</a>
                            <div class="progress" style="width: 100%; height: 3px; background-color: #ECECEC;">
                                <div class="progress-bar" role="progressbar" style="width: 15%; background-color: #e68e2d; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 py-2 px-0" style="background: white">
                <div class="col-md-4">
                    <img src="img/career-img.jpg" alt="Team Member" class="img-fluid">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="team-member-info">
                        <h1 class="fw-bold mb-2" style="font-size: 25px; font-family: Oswald; color: #131d3b;">Sales Manager</h1>
                        <p class="card-text mb-4">Davao City</p>
                        <p class="card-text mb-5">Felis enim tincidunt a consectetuer erat, nunc ac vitainteg neque
                            phetra pgravidan laoreet urna. Laoreet accumsan .....
                        </p>
                        <div class="d-flex align-items-center read-more">
                            <a href="" class="read-more-btn" style="color:#e68e2d; letter-spacing: 2px; min-width: 100px; font-size: 17px; font-family: Oswald;">READ MORE</a>
                            <div class="progress" style="width: 100%; height: 3px; background-color: #ECECEC;">
                                <div class="progress-bar" role="progressbar" style="width: 15%; background-color: #e68e2d; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn rounded-0 mt-3 mb-4" style="background-color: #104378; color: #fff; font-family: Oswald, sans-serif; padding: 10px 30px;">VIEW CAREERS</button>
            </div>
        </div>
    </section>

    {{-- Map --}}
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.847976698179!2d121.06624664988006!3d14.664567379388318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b75caf780f17%3A0x9042fb1f6df20bba!2sCMI%20Building%20Eqi!5e0!3m2!1sen!2sph!4v1678776688699!5m2!1sen!2sph" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen></iframe> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.26946034542!2d125.60086854982703!3d7.094733218203255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d239e0b8d8d%3A0x6803118d251c27d5!2sR%20Web%20Solutions%20Corp.%20Davao!5e0!3m2!1sen!2sph!4v1679111550732!5m2!1sen!2sph" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen></iframe>

    @include('includes.footer')

    <script>
        function animateBanner() {
            const bannerContainer = document.querySelector('.banner-container');
            const bannerTop = bannerContainer.getBoundingClientRect().top;
            const bannerBottom = bannerContainer.getBoundingClientRect().bottom;
            const viewportHeight = window.innerHeight;
            
            if (bannerTop < viewportHeight && bannerBottom >= 0) {
                bannerContainer.classList.add('animate');
            } else {
                bannerContainer.classList.remove('animate');
            }
        }

        document.addEventListener('DOMContentLoaded', animateBanner);
        window.addEventListener('scroll', animateBanner);
    </script>
</body>
</html>
