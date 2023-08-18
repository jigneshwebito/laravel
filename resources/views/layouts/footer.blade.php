{{-- <style>
  @media (min-width: 1200px){
.container {
    max-width: 1140px;
}
  }
</style> --}}
<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
<footer id="footer" class="wow fadeInUp">
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row" style="display: flex;">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>WEBITO</h3>
                        <p>Thank you for visiting our Website. If you have not visited our blogs then it's a humble
                            request to
                            visit it once, maybe it will be useful for you. You can also check the latest post in
                            our
                            blog section.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/career" aria-label="Career Page">Career</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/rules">Rules</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/terms">Terms</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/policy">Privacy policy</a></li>
                            {{-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Blogs</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Me</h4>
                        <p class="text-break" style="font-weight: 700;">
                            Headquatered - New Jersey, <br>    
                            United States.<br>
                            Branch - Surat, India | Ahmedabad, India. <br>
                        <div class="mt-2">Phone : <a href="tel:8690586753"> +91 8690586753</a>  <br><a href="tel:+1 (512) 954-4288" style="padding-left: 54px;">
                            +1 (512) 954-4288</a><br></div>
                        <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis">Email :
                        <a href="mailto:social@webitoinfotech.com" target="_blank"> social@webitoinfotech.com</a></div> <br>
                        </p>
                        <div class="social-links">
                        <a href="https://www.instagram.com/webitoinfotech/" target="blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://in.linkedin.com/company/webito-infotech" target="blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="https://twitter.com/InfotechWebito" target="blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/webitoinfotech" target="blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        {{-- <a href="https://cardddle.com/" target="blank" class="cardddle">                        
                            <img src="{{ asset('assets/img/index/illustration/cardddle.png') }}" alt="cardddle" style="height: 1.6rem;">
                        </a> --}}
                        </div>
                        </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>My Newsletter</h4>
                        <p>By Subscribing, you can get updated news and our Blog. For any queries, you can contact
                            us through our email or just submit the contact form with your requirements. Our team
                            will contact you as soon as possible.</p>
                        <form action="#" method="post" class="contactForm" style="padding: 0; z-index: 0;">
                            <input type="email" name="email" placeholder="Enter Email"><input type="submit" value="Subscribe" aria-label="false" autocomplete="false">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; <span
                class="copyright-year"></span> <strong><a href="https://webitoinfotech.com/" target="_blank"
                        class="footer-copywritelink">WEBITO INFOTECH</a></strong>. All Rights Reserved. Various trademarks held by their respective owners.
            </div>
        </div>
    </footer>
</footer>



<div class="container checked">
    <button class="button-social-icons" id="button_icons" aria-label="footer-button">
        <div class="button-social-p">
            <i class="icon fa fa-bars social-icon-p"> </i>
        </div>
        <div>
            <ul>
                <li>
                    <a href="#"> <i class="fa"><img src="{{ asset('assets/img/direct_links/hire.png') }}" alt="Hire"
                                class="directImg" style="padding: 5px;" /></i></a>
                </li>
                <li>
                    <a href="https://portfolio.webitoinfotech.com/" target="_blank" aria-label="Portfolio"><i class=" fa"><img src="{{ asset('assets/img/direct_links/portfolio.png') }}" alt="Portfolio"
                                class="directImg" /></i></a>
                </li>
                <li>
                    <a href="/about#our_events" aria-label="Our Events"><i class=" fa"><img
                                src="{{ asset('assets/img/direct_links/events.png') }}" class="directImg" alt="Events"
                                style="padding: 8px;" /></i></a>
                </li>
                <li>
                    <a href="/team" aria-label="Team Page"><i class=" fa"><img src="{{ asset('assets/img/direct_links/team.png') }}" alt="Team"
                                class="directImg" style="padding: 10px;" />
                        </i></a>
                </li>
                <li>
                    <a href="/career" aria-label="career"><i class=" fa"><img src="{{ asset('assets/img/direct_links/career.png') }}" alt="Career"
                                class="directImg" style="padding: 5px;" />
                        </i></a>
                </li>
            </ul>
        </div>
    </button>
</div>



<a href="https://wa.me/+919104500673?text=Hello , I have a questions about your services. Can you please help me?"
    target="_blank" style="position: fixed;bottom: 89px;right: 18px;
    z-index: 20;"><span class="whatsappIcon"><img src="{{ asset('assets/img/index/illustration/whatsapp.gif') }}" alt=""></span></a>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;" aria-label="Top To Scroll"><i class="ion-chevron-right"></i><i class="ion-chevron-right"></i></a>
<script>
// function redirectLinks(url) {
//     window.location.href = url;
// }
let date =  new Date().getFullYear();
console.log(date);
$('.copyright-year').text(date);
$(document).ready(function() {
    var open = false;

    $('.circle-bg').on('click', function() {
        if (open === false) {
            $(this).animate({
                height: '+=10px',
                width: '+=10px'
            }, 300);
            $('.outer-icons').animate({
                opacity: 1
            }, 1000);
            $('.icon').fadeOut();
            $(this).html("<i class = 'icon fa fa-times' style='display: none'> </i>");
            $('.icon').fadeIn();

            open = true;
        } else {
            $(this).animate({
                height: '-=10px',
                width: '-=10px'
            }, 200);
            $('.outer-icons').animate({
                opacity: 0
            }, 300);
            $('.icon').fadeOut();
            $(this).html("<i class = 'icon fa fa-bars' style='display: none'> </i>");
            $('.icon').fadeIn();
            open = false;
        }
    });
});
</script>
<!-- JavaScript Libraries -->
{{-- <script src="/assets/lib/jquery/jquery.min.js"></script> --}}
{{-- <script src="/assets/lib/jquery/jquery-migrate.min.js"></script> --}}

<script src="{{ asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
{{-- <script src="/assets/lib/mobile-nav/mobile-nav.js"></script> --}}
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
{{-- <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script> --}}
<script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="{{ asset('assets/js/contactform.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/main2.js') }}"></script>
<script src="{{ asset('assets/js/new-navbar.js') }}"></script>
<script>
window.addEventListener("load", function(event) {
    let button = document.getElementById("button_icons");

    button.addEventListener("click", function() {
        this.classList.toggle('active');
        let svg = this.querySelector('svg');

        svg.classList.toggle('fa-share-alt');
        svg.classList.toggle('fa-times');
    });
});
</script>
<script>
$('body').click(function() {
    //    $('#button_icons').removeClass('active');
});
</script>
