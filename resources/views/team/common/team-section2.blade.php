<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/team2.css') }}" />
<style>
    #hoverimg {
        width: 100%;
        height: 100%;
        border-radius: 0;
    }

    .ultimate-tooltip {
        position: absolute;
        inset: auto auto 0px 0px;
        margin: 0px;
    }
</style>
<div class="testimonials-section section" tabindex="-1">
    <div class="section-content">
        <canvas id="canvas"></canvas>
        <ul class="testimonials-items">
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 00ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/rk_img.webp') }}">
                        {{-- rutvik --}}
                    </div>
                    <div class="ultimate-tooltip" style=" transform: translate(144px, 50.128px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/rk_character.webp')}}" alt="">















                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            {{-- <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 500ms"> --}}
            {{-- <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img class="sharddha">
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 106.316px);"
                        data-popper-placement="top">
                        <img id="hoverimg" src="../../assets/img/team/sk_character.webp" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div> --}}
            {{-- </li> --}}
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img src="{{ asset('assets/img/team/prk_img.webp') }}">
                        {{-- Priyanka --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(113px, 228.316px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" style="width: 75% !important;"
                            src="{{asset('assets/img/team/prk_character.webp')}}" alt="">
                        {{-- <p>I know I can count on your service if I need my project done fast and with the best possible result. I am a regular customer and hope to continue our work!</p>
                          <h4 class="ultimate-tooltip-title">Pasquale Deckow</h4>
                          <h5 class="ultimate-tooltip-subtitle">Art Director</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>

            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 1000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/db_img.webp') }}">
                        {{-- dipesh --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(120px, 40px);">
                        <img id="hoverimg" src="{{asset('assets/img/team/db_character.webp')}}" alt="">

                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 1500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/cs_img.webp') }}">
                        {{-- Chirag --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(60px, 144px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/cs_character.webp')}}" alt="">
                        {{-- <p>Muhammad was a real pleasure to work with and we look forward to working with him again. He’s definitely the kind of developer you can trust with a project from start to finish.</p>
                          <h4 class="ultimate-tooltip-title">Jovan Parisian</h4>
                          <h5 class="ultimate-tooltip-subtitle">Motion Graphic Animator</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 2000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/dt_img.webp') }}">
                        {{-- divyaui --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(99px, 250px);width:300px;">
                        <img id="hoverimg" src="{{asset('assets/img/team/dt_character.webp')}}" alt="">

                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 2500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img src="{{asset('assets/img/team/pk_img.webp')}}">
                        {{-- priyankaui --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(-104px, 270.316px);"
                        data-popper-placement="top" data-popper-reference-hidden="">
                        <img id="hoverimg" style="width: 80%; height: 80%;"
                            src="{{asset('assets/img/team/pk_character.webp')}}" alt="">
                        {{-- <p> Muhammad was a real pleasure to work with and we look forward to working with him again. He’s definitely the kind of developer you can trust with a project from start to finish.</p>
                            <h4 class="ultimate-tooltip-title"><img id="hoverimg" style="" src="../../assets/img/team/s4.webp" alt=""> </h4>
                            <h5 class="ultimate-tooltip-subtitle">Motion Graphic Animator</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 3000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/pm_img.webp') }}">
                        {{--  princi --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(80px, 244px);">
                        <img id="hoverimg" src="{{asset('assets/img/team/pm_character.webp')}}" alt="">
                        {{-- <p>Nafie team is very professional, always delivers high quality results, and is always there to help. Look forward to working with Nafie in other projects. </p>
                          <h4 class="ultimate-tooltip-title">Keshaun Robel</h4>
                          <h5 class="ultimate-tooltip-subtitle">CEO, Designer</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 3500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/nb_img.webp') }}">
                        {{-- Nishtha --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(-130px, 278px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/nb_character.webp')}}" alt="">
                        {{-- <p>Muhammad was a real pleasure to work with and we look forward to working with him again. He’s definitely the kind of developer you can trust with a project from start to finish.</p>
                          <h4 class="ultimate-tooltip-title">Jovan Parisian</h4>
                          <h5 class="ultimate-tooltip-subtitle">Motion Graphic Animator</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 4000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img src="{{ asset('assets/img/team/dj_img.webp') }}"/>
                        {{-- juli --}}
                    </div>
                    <div class="ultimate-tooltip"
                        style="position: absolute;inset: auto auto 0px 0px;margin: 0px;transform: translate(-117px, -132.684px);"
                        data-popper-placement="top" data-popper-reference-hidden="">
                        <img id="hoverimg" src="{{asset('assets/img/team/dj_character.webp')}}" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 4500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/jd_img.webp') }}">
                        {{-- Janvi --}}
                    </div>
                    <div class="ultimate-tooltip"
                        style="transform: translate(107px, 70.316px); width:210px !important;"
                        data-popper-placement="top" data-popper-reference-hidden="">
                        <img id="hoverimg" src="{{asset('assets/img/team/vp_character.webp')}}" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 5000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/am_img.webp') }}">
                        {{-- atul --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(150px, 24.316px);"
                        data-popper-placement="top">
                        <img id="hoverimg" src="{{asset('assets/img/team/am_character.webp')}}" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 5500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/hv_img.webp') }}">
                        {{-- Harmi --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(121px, -47.684px);"
                        data-popper-placement="top">
                        <img id="hoverimg" src="{{asset('assets/img/team/hv_character.webp')}}" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 6000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/td_img.webp') }}">
                        {{-- darshana --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/td_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 6500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/hm_img.webp') }}">
                        {{-- <img class="harshit"> --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/hm_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 7000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/ag_img.webp') }}">
                        {{-- <img class="ankitag"> --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/ag_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 7500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/dk_img.webp') }}">
                        {{-- <img class="dhruv"> --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform:translate(-111px, 261px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/dk_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 8000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/jr_img.webp') }}">
                        {{-- <img class="archit"> --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/ma_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 8500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img  src="{{ asset('assets/img/team/srs_img.webp') }}">
                        {{-- <img class="shreya"> --}}
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/srs_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 9000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        {{-- <img class="vishal"> --}}
                        <img  src="{{ asset('assets/img/team/vk_img.webp') }}">
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/vk_character.webp')}}" alt="">
                        {{-- <p> Nafie worked on a handful of projects for us and has always exceeded our expectations. Nafie team is dedicated, talented and a delight to work with.</p>
                          <h4 class="ultimate-tooltip-title">Rosa Ferry</h4>
                          <h5 class="ultimate-tooltip-subtitle">Sales Manager</h5> --}}
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 9500ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        {{-- <img class="meet"> --}}
                        <img  src="{{ asset('assets/img/team/md_img.webp') }}">
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(100px, 205px);"
                        data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                        <img id="hoverimg" src="{{asset('assets/img/team/md_character.webp')}}" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li>
            {{-- <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 7000ms">
                <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img class="Chintan">
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(180px, 6px); width:225px !important">
                        <img id="hoverimg" src="../../assets/img/team/cm_character.webp" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div>
            </li> --}}
            {{-- <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 6500ms"> --}}
            {{-- <div class="testimonials-item">
                    <div class="testimonial-author-img">
                        <img class="priyankaui">
                    </div>
                    <div class="ultimate-tooltip" style="transform: translate(-104px, 238.316px);"
                        data-popper-placement="top">
                        <img id="hoverimg" src="../../assets/img/team/pk_character.webp" alt="">
                    </div>
                    <div class="ultimate-tooltip-arrow"></div>
                </div> --}}
            {{-- </li> --}}
        </ul>
    </div>
    <div class="preview">
        <div class="preview__item" id="pos-2">
            <button class="preview__item-back unbutton">
                <span>Back</span>
            </button>
            <div class="preview__item-imgwrap">
                <div class="preview__item-img" style="background-image: url(../../assets/img/team/divya.webp )">
                </div>
            </div>
            <h2 data-splitting="" class="preview__item-title">Divya</h2>
            <div class="preview__item-content">
                <div class="preview__item-meta">
                    {{-- <span>Madrid, Spain</span><span>18/010/2025</span> --}}
                </div>
                <p class="preview__item-description">
                    The most average person you have ever met <br>
                    Gamer by nature,he is a soft spoken developer who runs on wit and curiosity <br>
                    He believes that everyone is unique in their own way.
                </p>
                <button class="preview__item-info unbutton">+ Info</button>
                {{-- <button class="preview__item-button">Buy Tickets</button> --}}
            </div>
        </div>
        <div class="preview__item" id="pos-1">
            <button class="preview__item-back unbutton">
                <span>Back</span>
            </button>
            <div class="preview__item-imgwrap">
                <div class="preview__item-img" style="background-image: url(../../assets/img/team/chelsi.webp)">
                </div>
            </div>
            <h2 data-splitting="" class="preview__item-title"></h2>
            <div class="preview__item-content">
                <div class="preview__item-meta">
                    Oh! the most curious person. Chelsi is Always investigating something new and as a result, she
                    constantly builds knowledge. Can be known as our walking Wikipedia
                    ..
                </div>
                <p class="preview__item-description">
                </p>

            </div>
        </div>
    </div>
    <script>
        const canvas = document.querySelector('#canvas');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        })
        let c = canvas.getContext('2d');


        class Circle {
            constructor(x, y, dx, dy, raduis, color) {
                this.x = x;
                this.y = y;
                this.dx = dx;
                this.dy = dy;
                this.raduis = raduis;
                this.color = color;
            }
            draw() {
                c.beginPath();
                c.arc(this.x, this.y, this.raduis, 0, Math.PI * 2, false);
                c.fillStyle = this.color;
                c.fill();
                c.closePath();
                return this;
            }
            update() {
                if ((this.x + this.raduis) > window.innerWidth || (this.x - this.raduis < 0)) {
                    this.dx = -this.dx;
                }
                if ((this.y + this.raduis) > window.innerHeight || (this.y - this.raduis < 0)) {
                    this.dy = -this.dy;
                }

                this.x += this.dx;
                this.y += this.dy;
            }
            reverse() {
                if (this.dx > 0 || this.dx < 0) {
                    this.dx *= -1;
                }
                if (this.dy > 0 || this.dy < 0) {
                    this.dy *= -1;
                }
                return this;
            }
            zoom() {
                this.raduis += 5;
            }
        }


        function getDistance(x1, x2, y1, y2) {
            let distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
            return distance;
        }


        let c2 = new Circle(canvas.width - 40, canvas.height / 2, 2, 0, 40);

        let c1 = new Circle(40, canvas.height / 2, 2, 0, 40);

        let mouse = {
            x: undefined,
            y: undefined
        }
        window.addEventListener('mousemove', event => {
            mouse.x = event.x;
            mouse.y = event.y;
        });

        function mouseOverObj(x, y, raduis) {
            return mouse.x - x > 0 && mouse.x - x < raduis && mouse.y - y > 0 && mouse.y - y < raduis;
        }

        let circleArray = [];

        let colors = [
            '#0675e8',
            '#808080',
        ]
        for (let i = 0; i < 75; i++) {
            let raduis = Math.random() * 10 + 1;
            let x = Math.random() * (window.innerWidth - raduis * 2) + raduis;
            let y = Math.random() * (window.innerHeight - raduis * 2) + raduis;
            let dx = Math.random() * 4;
            let dy = Math.random() * 4;
            let color = colors[Math.floor(Math.random() * colors.length)];
            circleArray.push(new Circle(x, y, dx, dy, raduis, color));

        }

        function animate() {
            let myReq = requestAnimationFrame(animate);
            c.clearRect(0, 0, window.innerWidth, window.innerHeight);


            circleArray.forEach(circle => {
                circle.draw().update();
            })
        }
        animate();
    </script>
</div>
