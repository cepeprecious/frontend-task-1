@include('includes/head',['title'=>'About Us'])
    
    <!-- Header -->
    <header class='header'>
        <span class='header-subtitle'>Home . About Us</span>
        <h1 class='header-title'>About Us</h1>
    </header>
    <!-- End of Header -->

    {{-- About EQS --}}
    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 me-4 p-4">
                    <h1 class='fw-bold mt-3 mb-5' style="font-family: 'Oswald', sans-serif; font-size: 40px !important;">About EQS</h1>
                    <p class="mb-5 lh-lg" style="text-align: justify; font-family: 'Roboto Condensed', sans-serif;">
                        Excel Quality Service Corp. is engaged with warehousing and
                        other services wherein clients across the country get to experience
                        innovative services that helps different international clients
                        manufacture their brands, products and maintain their systems
                        to optimum level.
                    </p>
                    <button type="button" class="btn rounded-0" style="background-color: #104378; color: #fff; font-family: Oswald, sans-serif; padding: 10px 30px;">DISCOVER MORE</button>
                </div>
                <div class="col-md-12 col-lg-5">
                    {{-- <img src="img/about-img.png" class="mb-4" style="width: 100%; height: auto; object-fit: fill;" alt=""> --}}
                    <img src="img/about-img.png" style="width: 100%; height: 100%; object-fit: fill;" alt="">
                </div>
            </div>          
        </div>
    </section>

    <section class='info-2' style="background-color: #e68e2d; text-align: center;">
        <p>We have been a part of the manufacturing and warehousing industry since JRS Group <br>
            of Companies was established in 1986. We are one of the leading companies who are <br>
            continuously innovating from the past decade.
        </p>
    </section>

    <section class='info-3' style="background-color: #131d3b;">
        <div id="values">
            <div class="text-center mb-5">
                <h1 class="mb-4 fw-bold" style="font-family: 'Oswald', sans-serif; font-size: 30px;">Our Company Values</h1>
                <p>We are competitive and progressively innovating.</p>
            </div>
            <div class="row">
                <div class="col-md-4 values1" style="border-right: 1px solid gray;">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div>
                                <img src="img/icon1.png" class="card-img-top" alt="Image 1" style="width: 100px; height: 100px;">
                            </div>
                        </div>
                        <h1 class="card-title mb-4 fw-bold fs-5">Vision</h1>
                        <p class="card-text text-white text-center">
                            To be the leading & trusted supply <br>
                            chain service provider in APAC <br>
                            Region.
                        </p>
                    </div>
                </div>          
                <div class="col-md-4 values2" style="border-right: 1px solid gray;">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div>
                                <img src="img/icon2.png" class="card-img-top" alt="Image 1" style="width: 100px; height: 100px;">
                            </div>
                        </div>
                        <h5 class="card-title mb-4 fw-bold fs-5">Mission</h5>
                        <p class="card-text text-white text-center">
                            To deliver the unparalleled services <br> 
                            to our clients and enhance long-term <br>
                            relationships that drives economical <br>
                            results.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div>
                                <img src="img/icon3.png" class="card-img-top" alt="Image 1" style="width: 100px; height: 100px;">
                            </div>
                        </div>
                        <h5 class="card-title mb-4 fw-bold fs-5">Core Values</h5>
                        <p class="card-text text-white text-center">
                            A God-fearing organization that <br>
                            chooses to be an excellent provider <br>
                            and maintains the quality services <br>
                            by having undying commitment that
                            guarantees team work.
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    @include('includes.footer')
</body>
</html>
