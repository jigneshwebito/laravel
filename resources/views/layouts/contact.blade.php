<style>
    form {
        padding: 2.3rem 2.2rem;
        z-index: 10;
        overflow: hidden;
        position: relative;
    }
</style>

<div class="contain">
    <span class="big-circle"><b class="wow rubberBand"></b></span>
    <img src="{{ asset('assets/img/index/illustration/shape.png') }}" class="square" alt="Shape Image" />
    <div class="form wow fadeInDown">
        <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Ready to start a project?
            </p>
            <div class="info">
                <div class="information">
                    <img src="https://img.icons8.com/cute-clipart/36/4a90e2/globe.png" />

                    <p> Headquarter - USA <br>
                        Branch - Surat, India | Ahmedabad, India.</p>
                </div>
                <div class="information">
                    <img src="https://img.icons8.com/cute-clipart/36/4a90e2/apple-mail.png" />

                    <p style="white-space: pre-line;"><a href="mailto:social@webitoinfotech.com" target="_blank" style="margin-top: -15px;">
                            social@webitoinfotech.com</a>
                        webitoinfotech.com</p>
                </div>
                <div class="information">
                    <img src="https://img.icons8.com/cute-clipart/36/4a90e2/ringing-phone.png" />

                    <p> <a href="tel:9724259460">+91 97242 59460</a> <br>
                        <a href="tel:8690586753">+91 86905 86753</a>
                    </p>
                </div>
            </div>
            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/webitoinfotech" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                    <a href="https://www.twitter.com/webitoinfotech/" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com/webitoinfotech?igshid=YmMyMTA2M2Y=" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/webito-infotech/mycompany/?viewAsMember=true"
                        target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="https://cardddle.com/"
                        target="_blank">
                        <img src="{{ asset('assets/img/index/illustration/cardddle.png') }}" alt="" style="height: 1.4rem;">
                    </a>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
            <form action="{{ route('sendEmailroute') }}" method="post" href="{{ route('sendEmailroute') }}">
                @csrf
                <h3 class="bg_contact" style="font-size: 23px;">Contact us</h3>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="input-contain">
                    <input type="text" name="name" class="input" autocomplete="off" required />
                    <label for="name" class="bg_contact">Username</label>
                    <span>Username</span>
                </div>
                <div class="input-contain">
                    <input type="email" name="email" class="input" autocomplete="off" required />
                    <label for="email" class="bg_contact">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-contain">
                    <input type="tel" minlength="10" maxlength="10" title="10 digit mobile number"
                        onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));"
                        name="phone" class="input" autocomplete="off" required />
                    <label for="phone" class="bg_contact">Phone</label>
                    <span>Phone</span>
                </div>


                <div class="input-contain">
                    {{-- <input type="select" name="select" class="input" /> --}}
                    <label for="select" class="bg_contact">Select a Service</label>
                    <select class="custom btn-default dropdown-toggle input" name="select" type="button"
                        data-toggle="dropdown" required>
                        <span class="customdd">
                            <option value="" selected disabled></option>
                            <option value="Mobile Apps Development" style="color: black">Mobile Apps Development
                            </option>
                            <option value="Web Development" style="color: black">Web Development</option>
                            <option value="Mobile Game Development" style="color: black">Mobile Game Development
                            </option>
                            <option value="AI - ML App Development" style="color: black">AI - ML App Development
                            </option>
                        </span>
                    </select>
                    {{-- <button class='custom ' id="first">
                        <option value="1000">1km</option>
                        <option value="10000">10km</option>
                        <option value="30000">30km</option>
                        <option value="100000">100km</option>
                      </button> --}}
                    <span class="">Select a Service</span>

                </div>


                <div class="
                        input-contain textarea">
                    <textarea name="content" class="input" autocomplete="off" required></textarea>
                    <label for="" class="bg_contact">Message</label>
                    <span>Message</span>
                </div>
                <button type="submit" class="btn">Send</button>
            </form>
        </div>
    </div>
</div>
<script>
    const inputs = document.querySelectorAll(".input");

    function focusFunc() {
        let parent = this.parentNode;
        parent.classList.add("focus");
    }

    function blurFunc() {
        let parent = this.parentNode;
        if (this.value == "") {
            parent.classList.remove("focus");
        }
    }

    inputs.forEach((input) => {
        input.addEventListener("focus", focusFunc);
        input.addEventListener("blur", blurFunc);
    });
</script>
