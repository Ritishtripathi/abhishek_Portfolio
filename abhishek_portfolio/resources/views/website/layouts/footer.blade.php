<!-- ===============>> footer start here <<================= -->
<footer class="footer brand-1">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__top footer__top--style1">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer__about">
                            <a href="#" class="footer__about-logo"><img
                                    src="{{ asset('website/images/logo/Logo-white.png') }}" style="height: 40px;"
                                    alt="Logo"></a>
                            <p class="footer__about-moto">
                                Empowering businesses and professionals with 20+ years of expertise in Microsoft
                                technologies, cloud solutions, corporate training, and digital transformation services.
                            </p>
                            <ul class="social" data-aos="fade-right">

                                <!-- WHATSAPP BUTTON -->
                                <li class="social__item">
                                    <a href="https://wa.me/919891811593" target="_blank" class="hire-btn whatsapp-btn">
                                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Me
                                    </a>
                                </li>

                                <!-- LINKEDIN BUTTON -->
                                <li class="social__item">
                                    <a href="https://www.linkedin.com/in/abhiitmct/" target="_blank"
                                        class="hire-btn linkedin-btn">
                                        <i class="fa-brands fa-linkedin-in"></i> Connect
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h6>Quick links</h6>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="footer__linklist-item"><a href="{{ route('about') }}">About</a></li>
                                    <li class="footer__linklist-item"><a href="#">Services</a></li>
                                    <li class="footer__linklist-item"><a href="#">Experience</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h6>Professional Links</h6>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"><a href="#">Certifications</a></li>
                                    <li class="footer__linklist-item"><a href="#">Training</a></li>
                                    <li class="footer__linklist-item"><a href="#">Consulting</a></li>
                                    <li class="footer__linklist-item"><a href="#">Workshops</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="footer__links">
                            <div class="footer__links-tittle">
                                <h6>Useful Links</h6>
                            </div>
                            <div class="footer__links-content">
                                <ul class="footer__linklist">
                                    <li class="footer__linklist-item"> <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="#">Updates</a>
                                    </li>
                                    <li class="footer__linklist-item"> <a href="#">Schedule Session</a> </li>
                                    <li class="footer__linklist-item"> <a href="#">insight</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__end">
                    <div class="footer__end-copyright">
                        <p class=" mb-0">© 2026 All Rights Reserved By <a href="https://www.spireweb.co.in"
                                target="_blank">SpireWeb</a> </p>
                    </div>
                    <div>
                        <ul class="social">

                            <li class="social__item">
                                <a href="https://www.linkedin.com/in/abhiitmct/"
                                    class="social__link social__link--style2"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <!-- Bottom Social Icons Fix -->
                            <li class="social__item">
                                <a href="mailto:abhit.abhishek@gmail.com" class="social__link social__link--style2">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </li>

                            <li class="social__item">
                                <a href="https://wa.me/919891811593"
                                    class="social__link social__link--style2 d-sm-none d-md-block">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__shape">
        <span class="footer__shape-item footer__shape-item--1">
            <img src="{{ asset('website/images/footer/1.png') }}" alt="shape icon">
        </span>

        <span class="footer__shape-item footer__shape-item--2">
            <img src="{{ asset('website/images/footer/2.png') }}" alt="shape icon">
        </span>

        <span class="footer__shape-item footer__shape-item--3">
            <img src="{{ asset('website/images/footer/3.png') }}" alt="shape icon">
        </span>

        <span class="footer__shape-item footer__shape-item--4">
            <img src="{{ asset('website/images/footer/4.png') }}" alt="shape icon">
        </span>
    </div>
</footer>
<!-- ===============>> footer end here <<================= -->



<!-- ===============>> scrollToTop start here <<================= -->
<a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
<!-- ===============>> scrollToTop ending here <<================= -->


<!-- vendor plugins -->

<script src="{{ asset('website/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('website/js/all.min.js') }}"></script>
<script src="{{ asset('website/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('website/js/aos.js') }}"></script>
<script src="{{ asset('website/js/fslightbox.js') }}"></script>
<script src="{{ asset('website/js/purecounter_vanilla.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const dot = document.querySelector(".cursor-dot");
        const ring = document.querySelector(".cursor-ring");

        let mouseX = 0;
        let mouseY = 0;
        let ringX = 0;
        let ringY = 0;

        document.addEventListener("mousemove", function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;

            dot.style.left = mouseX + "px";
            dot.style.top = mouseY + "px";
        });

        function animate() {
            ringX += (mouseX - ringX) * 0.1;
            ringY += (mouseY - ringY) * 0.1;

            ring.style.left = ringX + "px";
            ring.style.top = ringY + "px";

            requestAnimationFrame(animate);
        }

        animate();

    });
</script>

<script src="{{ asset('website/js/custom.js') }}"></script>


</body>

</html>