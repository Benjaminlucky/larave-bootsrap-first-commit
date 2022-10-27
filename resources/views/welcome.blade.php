
@include('layouts.header')

    <!--==========================NAV BAR CONTAINER =========================-->

    
    <!--==========================END NAV BAR CONTAINER =========================-->




    <!--============================= SLIDE CONTAINER ============================= -->

    <div class="slide__container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner slider-inner">
                <div class="carousel-item active text-center">
                    <img src="{{asset('images/slider-2-1.jpeg')}}" class="d-flex justify-content-center mx-auto" alt="Slide-1">
                    <div class="carousel-caption d-none d-md-block caption">
                        <h3 class="display-5 fw-bold">Providing solutions for <br> growing your business</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quos, ipsum <br> id itaque cupiditate quas nulla dicta. Deserunt, quia? Corporis </p>
                        <a href="">Request a call back</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-2-2.jpeg')}}" class="d-flex justify-content-center mx-auto " alt="Slide-2">
                    <div class="carousel-caption d-none d-md-block caption">
                        <h3 class="display-5 fw-bold">Trusted consultants helping<br> to grow your money</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quos, ipsum <br> id itaque cupiditate quas nulla dicta. Deserunt, quia? Corporis </p>
                        <a href="">Request a call back</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider-2-3.jpeg')}}" class="d-flex justify-content-center mx-auto" alt="Slide-3">
                    <div class="carousel-caption d-none d-md-block caption">
                        <h3 class="display-5 fw-bold">Get guaranteed success <br> with our advisors</h3>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quos, ipsum <br> id itaque cupiditate quas nulla dicta. Deserunt, quia? Corporis </p>
                        <a href="">Request a call back</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <!--============================= END SLIDE CONTAINER ============================= -->

    <!--=============================== HOMEPAGE ABOUT SECTION - PROFILE ==========================  -->

    <div class="container profile-sectionC">
        <div class="row mt-5 mb-5 profile-row">
            <div class="col-lg-7 mt-5 mb-5 pe-5 profile-content">
                <div class="slug">
                    <p>Working since 1990</p>
                </div>
                <div class="profile__section-title">
                    <h4 class="display-6 fw-bold mb-4">We are <span>Rabron</span> Consulting Firm</h4>
                </div>
                <div class="profile__section-content">
                    <p>A consulting or consultancy firm is a business of one or more experts (consultants) that provides professional advice to an individual or an organization for a fee.</p>
                    <p>Consultancy firms target company executives and provide them with consultants, also known as industry-specific specialists and subject-matter experts.</p>
                    <p>More and more consulting firms are complementing the strategic deliverable by providing the means to implement the recommendations, either with the consultants themselves.</p>
                </div>

                <a href="#" class="ranbronBtnPrimaryOutline mt-3">More about us</a>
            </div>
            <div class="col-lg-5 mt-5 mb-5">
                <div class="profile__section-image">
                    <img src="{{asset('images/profile-section-image.png')}}" class="img-fluid" title="Profile image" alt="Profile-section-image">
                </div>
            </div>
        </div>


    </div>



    <!--=============================== END HOMEPAGE ABOUT SECTION - PROFILE ==========================  -->

    <!--================================ SERVICES START HERE - HOME PAGE ====================== -->

    <div class="service__container">
        <div class="service-wrapper mx-auto">
            <div class="row">
                <div class="col-lg-7 service-title">
                    <h3 class="display-5 fw-bold text-white">Services Offer</h3>
                    <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="col-lg-5 justify-content-end mb-2 service-controller">
                    <div class="prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 service-content">
                    <div class="services-item">
                        <div class="service-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="serviceItem-title">
                            <h5>Accounting</h5>
                        </div>
                        <p class="service-detail">Bring to the table win-win survival strategies to ensure proactive domiantion</p>
                        <a href="" class="service-link">Read more</a>
                    </div>
                </div>

                <div class="col-lg-3 service-content">
                    <div class="services-item">
                        <div class="service-icon"><i class="fa-solid fa-file-contract"></i></div>
                        <div class="mx-auto text-center serviceItem-title">
                            <h5 class="text-center">Tax Planning</h5>
                        </div>
                        <p class="service-detail">Bring to the table win-win survival strategies to ensure proactive domiantion</p>
                        <a href="" class="service-link">Read more</a>
                    </div>
                </div>

                <div class="col-lg-3 service-content">
                    <div class="services-item">
                        <div class="service-icon"><i class="fa-solid fa-magnifying-glass-dollar"></i></div>
                        <div class="mx-auto text-center serviceItem-title">
                            <h5 class="text-center">Advisory</h5>
                        </div>
                        <p class="service-detail">Bring to the table win-win survival strategies to ensure proactive domiantion</p>
                        <a href="" class="service-link">Read more</a>
                    </div>
                </div>


                <div class="col-lg-3 service-content">
                    <div class="services-item">
                        <div class="service-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="mx-auto text-center serviceItem-title">
                            <h5 class="text-center">Accounting</h5>
                        </div>
                        <p class="service-detail">Bring to the table win-win survival strategies to ensure proactive domiantion</p>
                        <a href="" class="service-link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--================================ FREQUENTLY ASKED QUESTIONS - HOME PAGE ====================== -->

    <div class="faq-container">

        <div class="row faq-wrapper mx-auto">
            <div class="col-lg-6 faqCoo">
                <div class="faq-title">
                    <h4 class="display-4 fw-bold">
                        We’re knowledgeable about making benefits higher
                    </h4>
                    <span>There are different types of Consulting Firms</span>
                    <p class="lead">
                        Services related to the company’s operations, including information technology, intended for operational management, which may be different depending on the industrial sector (technology director, plant managers, operations directors, Research and Development managers), for instance COO and CTO.
                    </p>
                </div>

                <div class="faq-image">
                    <img src="{{ asset('images/sign.png') }}" alt="">
                </div>

            </div>
            <div class="col-lg-6 faqFaq">
                <div class="faq-subtitle">
                    <h5 class="display-5 fw-bold">
                        Have some questions?
                    </h5>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How do i make appointments ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus ut, laudantium sint laborum quis magnam praesentium molestias similique iusto ad?
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How you can grow your business?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptatum rerum reprehenderit iusto ex laudantium laborum maiores magnam in reiciendis.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can we get monthly account details?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium a distinctio illum fugiat eius. Ab saepe vero nesciunt asperiores expedita!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can we get monthly account details?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium a distinctio illum fugiat eius. Ab saepe vero nesciunt asperiores expedita!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--================================ FEEDBACK SECTION - HOME PAGE ====================== -->


    <div class="feedback-section">
        <div class="row mb-5 mt-5 horizontalLine">
            <hr>
        </div>
        <div class="row mx-auto feedback-wrapper">
            <div class="col-lg-3 estCon">
                <div class="est">
                    <h3 class="display-3 fw-bolder">Est. Since <br> 1990</h3>
                </div>
            </div>
            <div class="col-lg-3 cusCon">
                <div class="customer">
                    <h3>748</h3>
                    <p>Happy customer</p>
                </div>
            </div>
            <div class="col-lg-3 expCon">
                <div class="expert">
                    <h3>50</h3>
                    <p>Expert advisor</p>
                </div>
            </div>
            <div class="col-lg-3 proCon">
                <div class="projects">
                    <h3>758</h3>
                    <p>projects completed</p>
                </div>
            </div>
        </div>
    </div>

    <!--================================ END FEEDBACK SECTION - HOME PAGE ====================== -->

    <!--================================ GALLERY - HOME PAGE ====================== -->

    <div class="gallery-section">
        <div class="row mx-auto gallery-wrapper">
            <div class="col">
                <h3>Practise Area</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>

            <div class="row">
                <div class="col-lg-3 ">
                    <div class="gpWrapper">
                        <div class="imgWrapper">
                            <img src="{{ asset('images/project-1.jpg') }}" alt="Project Image" title="Project Title">

                            <div class="overlay">
                                <div class="overlay-box">
                                    <div class="overlayContent">
                                        <a href="#">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrapperContent">
                            <div class="contentTitle">
                                <a href="#">Business Consulting</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 ">
                    <div class="gpWrapper">
                        <div class="imgWrapper">
                            <img src="{{ asset('images/project-2.jpg') }}" alt="Project Image" title="Project Title">

                            <div class="overlay">
                                <div class="overlay-box">
                                    <div class="overlayContent">
                                        <a href="#">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrapperContent">
                            <div class="contentTitle">
                                <a href="#">Transport & Aviation</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 ">
                    <div class="gpWrapper">
                        <div class="imgWrapper">
                            <img src="{{ asset('images/project-3.jpg') }}" alt="Project Image" title="Project Title">

                            <div class="overlay">
                                <div class="overlay-box">
                                    <div class="overlayContent">
                                        <a href="#">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrapperContent">
                            <div class="contentTitle">
                                <a href="#">Nature & Solar</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 ">
                    <div class="gpWrapper">
                        <div class="imgWrapper">
                            <img src="{{ asset('images/project-4.jpg') }}" alt="Project Image" title="Project Title">

                            <div class="overlay">
                                <div class="overlay-box">
                                    <div class="overlayContent">
                                        <a href="#">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrapperContent">
                            <div class="contentTitle">
                                <a href="#">Consumer Products</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--================================ END GALLERY - HOME PAGE ====================== -->


    <!--================================ TESTIMONIALS - HOME PAGE ====================== -->



    <div class="testi-section">
        <div class="row mx-auto testi-wrapper">
            <div class="col-lg-2">
                <div class="testimonialImg">
                    <img src="{{asset('images/testi-1-1.png')}}" alt="">
                    <i class="fa-solid fa-quote-left"></i>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonialContent">
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione perferendis nesciunt porro unde nam nobis modi, numquam consectetur aliquid, provident doloremque non dignissimos hic, quis aperiam tempore esse</p>
                    <h5>-Michael Jane</h5>
                    <span>Quality Assurance Manager</span>
                </div>
            </div>
        </div>
    </div>

     <!--================================ END TESTIMONIALS - HOME PAGE ====================== -->

    <!--================================ ADVISORS SECTION - HOME PAGE ====================== -->

    <div class="advisors-section">

        <div class="row mx-auto advisorsWrapper">
            <div class="col-lg-3">
                <h4 class="fw-bold">
                    Our Advisors 
                </h4>
                <p>We have professional consultants in our team. We are also always looking for new people to join our team. Our consultants know their stuff very well. Feel free to contact us for a quote.</p>
                <a href="#">View all team</a>
            </div>
            <div class="col-lg-3 advisorProfile">
                <div class="advisors">
                    <img src="{{asset('images/team-1.jpg')}}" alt="Advisor Image" title="Advisor Image">


                    <div class="advisor-overlay">
                        <div class="mx-auto overlayBox">
                            <div class="overlaySocial text-center">
                                <a href="#"><i class=" fa-brands fa-twitter"></i></a>
                                <a href="#"><i class=" fa-brands fa-facebook"></i></a>
                                <a href="#"><i class=" fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class=" fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advisorsContent">
                    <h5>Michael Joe</h5>
                    <p class="position">Sales Executive</p>
                </div>
            </div>

            <div class="col-lg-3 advisorProfile">
                <div class="advisors">
                    <img src="{{asset('images/team-2.jpg')}}" alt="Advisor Image" title="Advisor Image">


                    <div class="advisor-overlay">
                        <div class="mx-auto overlayBox">
                            <div class="overlaySocial text-center">
                                <a href="#"><i class=" fa-brands fa-twitter"></i></a>
                                <a href="#"><i class=" fa-brands fa-facebook"></i></a>
                                <a href="#"><i class=" fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class=" fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advisorsContent">
                    <h5>Jessica Kavanak</h5>
                    <p class="position">Sales Executive</p>
                </div>
            </div>

            <div class="col-lg-3 advisorProfile">
                <div class="advisors">
                    <img src="{{asset('images/team-3.jpg')}}" alt="Advisor Image" title="Advisor Image">


                    <div class="advisor-overlay">
                        <div class="mx-auto overlayBox">
                            <div class="overlaySocial text-center">
                                <a href="#"><i class=" fa-brands fa-twitter"></i></a>
                                <a href="#"><i class=" fa-brands fa-facebook"></i></a>
                                <a href="#"><i class=" fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class=" fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advisorsContent">
                    <h5>Angela Holts</h5>
                    <p class="position">Sales Executive</p>
                </div>
            </div>
           
        </div>

        <hr>

    </div>


    <!--================================ END ADVISORS SECTION - HOME PAGE ====================== -->

    <!--================================ BLOG SECTION - HOME PAGE ====================== -->


    <div class="blogSection">
        <div class="row mx-auto blogWrapper1">
            <div class="col-lg-12">
                <div class="blogTitle">
                    <h3 class=" display-3 fw-bold">Latest News</h3>
                </div>
            </div>
        </div>

        <div class="row mx-auto blogWrapper2">
            <div class="col-lg-4">
                <div class="blogContent">
                    <div class="blogImg">
                        <img src="{{asset('images/blog-sidebar-1.jpg')}}" alt="Blog Picture" title="Blog Picture">

                        <div class="blogDate">
                            <p>september 5, 2022</p>
                        </div>
                    </div>

                    <div class="blogConTitle">
                        <a href="#">Many desktop publishing packages and web page editors</a>
                    </div>

                    <div class="blogcontext">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam amet, dolorem sapiente vero culpa...
                        </p>

                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blogContent">
                    <div class="blogImg">
                        <img src="{{asset('images/blog-sidebar-2.jpg')}}" alt="Blog Picture" title="Blog Picture">

                        <div class="blogDate">
                            <p>september 5, 2022</p>
                        </div>
                    </div>

                    <div class="blogConTitle">
                        <a href="#">Many desktop publishing packages and web page editors</a>
                    </div>

                    <div class="blogcontext">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam amet, dolorem sapiente vero culpa...
                        </p>

                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="postWrapper">
                    <div class="post">
                        <div class="postTitle">
                            <a href="">Many desktop publishing packages and web page editors</a>
                        </div>
                        <div class="postDate">
                            <p>September 5, 2020</p>
                        </div>

                        <hr>
                    </div>

                    <div class="post">
                        <div class="postTitle">
                            <a href="">These cases are perfectly simple and easy to distinguish</a>
                        </div>
                        <div class="postDate">
                            <p>September 5, 2020</p>
                        </div>

                        <hr>
                    </div>
                    
                    <div class="post">
                        <div class="postTitle">
                            <a href="">These cases are perfectly simple and easy to distinguish</a>
                        </div>
                        <div class="postDate">
                            <p>September 5, 2020</p>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--================================ END BLOG SECTION - HOME PAGE ====================== -->

    <!--================================ CONTACT SECTION - HOME PAGE ====================== -->

    <div class="contact-section">
        <div class="row mx-auto contactWrapper">
            <div class="col-lg-7">
                <div class="contactTitle">
                    <h3>Request call back</h3>
                </div>
                <div class="contactForm">
                    <input type="email" placeholder="Email Address" class="text-white formInput">
                    <input type="text" placeholder="Subject" class="formInput">
                    <textarea name="" placeholder="Message" class="formText"></textarea>
                </div>

                <a href="#" class="contactBtn">Submit now</a>
            </div>
            <div class="col-lg-5">
                <div class="contactMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6246679958167!2d3.529236413320451!3d6.4422181953391835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf6f9d972cbdb%3A0xafca4b441a977865!2sChevron%20Nigeria%20Limited%20Lekki%20Lagos!5e0!3m2!1sen!2sng!4v1664454922513!5m2!1sen!2sng" width="600" height="612" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--================================ END CONTACT SECTION - HOME PAGE ====================== -->

    @include('layouts.footer')



</html>