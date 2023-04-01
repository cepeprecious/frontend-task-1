@include('includes/head',['title'=>'Employers'])

    <!-- Header -->
    <header class='header'>
        <span class='header-subtitle'>Home . Employers</span>
        <h1 class='header-title'>Employers</h1>
    </header>

    <section id="employers" class="employers">
        <div class="container">
            <div class="mb-5 mt-5 fs-4 text-center" style="font-family: 'Oswald', sans-serif;">
                <p>Fill up all the required fields for your manpower request to be processed</p>
            </div>
            <div class="row">
                <div class="col-lg-9 mt-lg-0 mx-auto">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group mb-5">
                                <p class="mb-4 fs-5 fw-bold" style="font-family: 'Oswald', sans-serif;">I. Business Details</p>
                                <div class="mt-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">BUSINESS NAME <span style="color: gray">*</span></label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">BUSINESS ADDRESS <span style="color: gray">*</span></label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">BUSINESS LICENSE NO.</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">NATURE OF BUSINESS</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <p class="mb-4 fs-5 fw-bold" style="font-family: 'Oswald', sans-serif;">II. Contact Information</p>
                                <div class="mt-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">CONTACT PERSON <span style="color: gray;">*</span></label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">POSITION <span style="color: gray">*</span></label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">TEL NO. <span style="color: gray">*</span></label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">EMAIL ADDRESS <span style="color: gray">*</span></label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">WEBSITE</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4 mt-5">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <div class="mt-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">POSITION</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="mt-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">NO. REQUIRED</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <div class="mt-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 14px;">JOB DESCRIPTION</label>
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                                <div class="mt-3">
                                    <input type="text" class="form-control" name="" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">+ ADD MORE</button></div>
                        <hr class="mt-3">
                        <div class="text-center mb-5"><button type="submit">SUBMIT</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Employers Section -->
  
      

    @include('includes.footer')
</body>
</html>
