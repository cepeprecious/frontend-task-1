@include('includes/head',['title'=>'Contact Us'])

    <!-- Header -->
    <header class='header'>
        <span class='header-subtitle'>Home . Contact Us</span>
        <h1 class='header-title'>Contact Us</h1>
    </header>
    <!-- End of Header -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contacts">
        <div class="container pt-5 pb-3" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <div class="icon"><img src="img/icon5.png" alt=""></i></a></div>
                        <h4 class="title"><a href="">Head Office</a></h4>
                        <p class="description">68 Landsriver St, Welson California 22066</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <div class="icon"><img src="img/icon6.png" alt=""></i></a></div>
                        <h4 class="title"><a href="">Phone</a></h4>
                        <p class="description">+303 123 456 7890</p>
                        <p class="description">Sales Dept. 0800 123 4567</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <div class="icon"><img src="img/icon7.png" alt=""></i></a></div>
                        <h4 class="title"><a href="">Email</a></h4>
                        <p class="description">info@domain.com</p>
                        <p class="description">support@domain.com</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-5">
                    <div class="box">
                        <div class="icon"><img src="img/icon8.png" alt=""></i></a></div>
                        <h4 class="title"><a href="">Showroom</a></h4>
                        <p class="description">Fairview Ave, El Monte California 91732</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <!-- End Contact Us Section -->

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row mb-5">
                <div class="col-md-6">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.26946034542!2d125.60086854982703!3d7.094733218203255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d239e0b8d8d%3A0x6803118d251c27d5!2sR%20Web%20Solutions%20Corp.%20Davao!5e0!3m2!1sen!2sph!4v1679384031755!5m2!1sen!2sph"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                    </iframe>
                </div>
                <div class="col-md-6 mt-lg-0 p-3">
                    <form action="" method="post" role="form" class="php-email-form">
                        <h1 class="mb-4 fw-bold" style="font-family: 'Oswald', sans-serif; font-size: 30px; color: #131d3b">Send Us A Message</h1>
                        <p class="mb-4" style="text-align: justify; font-family: 'Roboto Condensed', sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Odit sapiente voluptas ab deleniti dolores alias quos sit! Eaque, 
                            commodi tempora quae modi illo blanditiis pariatur. 
                            Dolorem ea quasi nobis eveniet?
                        </p>
                        <div class="form-group mt-3 mb-2">
                            <input type="text" class="form-control" name="" id="" placeholder="YOUR NAME" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="email" name="name" class="form-control" id="name" placeholder="EMAIL" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="email" id="email" placeholder="PHONE NO." required>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <textarea class="form-control" name="message" rows="8" placeholder="MESSAGE" required></textarea>
                        </div>
                        <div><button type="submit">SEND MESSAGE</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
  

    @include('includes.footer')
</body>
</html>
