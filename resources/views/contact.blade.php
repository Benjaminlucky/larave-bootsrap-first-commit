@include('layouts.header')

<div class="contactHeroSection">
    <div class="row mx-auto contactHeroWrapper">
        <div class="contactHeroContent">
            <h2>Contact</h2>
        </div>
    </div>
</div>

<div class="contactMainSection">
    <div class="row mx-auto contactMainWrapper">
        <div class="col-lg-12">
            <div class="contactMainIntro">
                <div class="mainIntroSlug">
                    <h5>Get in touch</h5>
                </div>
                <div class="mainIntroTitle">
                    <h2>Drop us a line</h2>
                </div>
                <div class="mainIntroPara">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, asperiores distinctio vero ratione atque cum sint officiis vitae quae necessitatibus animi ad accusamus maiores, quos repudiandae vel minima? Velit natus, nam repudiandae quos obcaecati recusandae sint aliquam fugit veritatis aperiam.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contactFormSection">
    <div class="row mx-auto contactFormWrapper">
        <div class="col-lg-7">
            <div class="formWrapper">
                <div class="form">
                    <p>Fields marked with an * are required</p>
                    <input type="text" class="formInput" placeholder="Name *">
                    <input type="email" class="formInput" placeholder="Email *">
                    <textarea name="message"  class="message" placeholder="Message *"></textarea>

                    <a href="#">Submit now</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="detailsWrapper">
                <div class="contactWrp">
                    <div class="cAddress">
                        <h5>Address</h5>
                        <p>54B, Tailstoi Town 5238 La city, IA 522364</p>
                    </div>
                    <div class="cPhone">
                        <h5>Phone</h5>
                        <p>+234(0)805 364 2425</p>
                    </div>
                    <div class="cEmail">
                        <h5>Email</h5>
                        <p>lucky@ranbron.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contactMapSection">
    <div class="row mapWrapper mx-auto">
        <div class="col-lg-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6246263472267!2d3.529236413741679!3d6.442223525892642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf6f9d972cbdb%3A0xafca4b441a977865!2sChevron%20Nigeria%20Limited%20Lekki%20Lagos!5e0!3m2!1sen!2sng!4v1665687867820!5m2!1sen!2sng" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

@include('layouts.footer')