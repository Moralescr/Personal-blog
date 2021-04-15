<!-- Contact Start -->
<section id="contact" class="section p-0px-b contact-section">
    <div class="container">
        <div class="row justify-content-center m-60px-b md-m-40px-b" data-aos="fade-up">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">{!! trans('messages.contact') !!}</h2>
                    <hr id="divider" style="background-color:red">
                    <p>
                      {!! trans('messages.subc') !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="contact-us-box" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="contact-info-box">
                        <h2>{!! trans('messages.getouch') !!}</h2>
                        <p class="desc">{!! trans('messages.desc') !!}</p>
                        <div class="contact-info">
                            <i class="icon theme-bg ti-direction"></i>
                            <p>La sabana,<br> San José, Costa Rica.</p>
                        </div>

                        <div class="contact-info">
                            <i class="icon theme-bg ti-email"></i>
                            <p>moralesguadamuz@gmail.com<br/>amorales@support.com</p>
                        </div>

                        <div class="contact-info">
                            <i class="icon theme-bg ti-mobile"></i>
                            <p>(+506) 8404-3853,<br/> (+506) 8404-3853 </p>
                        </div><br>
                        <img src="img/mapa.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <h2>{!! trans('messages.say') !!}</h2>
                        <form id="contactForm">
                            <div class="form-group">
                                <input id="name" name="name" placeholder="{!! trans('messages.nameform') !!}" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" placeholder="{!! trans('messages.email') !!}" class="form-control" type="email" required>
                            </div>
                            <div class="form-group">
                                <input id="subject" name="subject" placeholder="{!! trans('messages.subject') !!}" class="form-control" type="text" required>
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" placeholder="{!! trans('messages.typemsg') !!}" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="send">
                                <button id="submit" class="m-btn m-btn-theme">
                                    {!! trans('messages.send') !!}
                                    <i class="ti-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- / -->
                </div>

            </div>
        </div>
    </div>
    <!-- Container -->
</section>
<!-- Contact End -->