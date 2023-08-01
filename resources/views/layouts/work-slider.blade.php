<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
    integrity="sha256-DBYdrj7BxKM3slMeqBVWX2otx7x4eqoHRJCsSDJ0Nxw=" crossorigin="anonymous" />
     	{{-- <script type="text/javascript" src="/assets/lib/ajax/swiper.min.js"></script> --}}
<link rel="stylesheet" href="{{ asset('assets/css/work-slider.css') }}" />
@php
    use App\Models\WorkSlider;
    $workData = WorkSlider::all();
@endphp
<div class="container">
    <div class="marvel-container spiderman">
        <div class="row">
            <div class="col-md-5 pr-md-0">
                <div class="img-container">
                   
                    @foreach ($workData as $data)
                        <div class="img-wrapper">
                            <div class="background"></div>
                            <img class="mr-l workImage" src="{{ asset('assets/img/Portfolio/app/' . $data->image) }}"
                                alt="PortFolio Images One" />
                        </div>
                    @endforeach
                    {{-- <div class="img-wrapper">
                        <div class="background"></div>
                        <img class="mr-l" src="{{asset('assets/img/Portfolio/app/4.png')}}" alt="PortFolio Images One" />
                    </div>
                    <div class="img-wrapper">
                        <div class="background"></div>
                        <img class="mr-l" src="{{asset('assets/img/Portfolio/app/5.png')}}" alt="PortFolio Images Two" />
                    </div>
                    <div class="img-wrapper">
                        <div class="background"></div>
                        <img class="mr-l" src="{{asset('assets/img/Portfolio/app/6.png')}}" alt="PortFolio Images Three" />
                    </div> --}}
                </div>
            </div>
            <div class="col-md-7">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($workData as $work)
                            <div class="swiper-slide p-md-5 p-3">
                                <div class="name">
                                    <div class="sub-title">
                                        <div class="text-wrapper">
                                            <span>APP</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <div class="title">
                                                <div class="text-wrapper">
                                                    <span>{{ $work->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overview">
                                    <div class="title">
                                        <div class="text-wrapper">
                                            <span style="padding-left: 5px;">App Review</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            <div class="text-wrapper">
                                                <span>
                                                    <p class="description">
                                                        {{ $work->review }}
                                                    </p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="purchase">
                                    <div class="year">{{ $work->year }}</div>
                                    <!-- <button class="purchase-btn">Purchase</button> -->
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="swiper-slide p-md-5 p-3">
                            <div class="name">
                                <div class="sub-title">
                                    <div class="text-wrapper">
                                        <span>APP</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="title">
                                            <div class="text-wrapper">
                                                <span>Dr. Pocket</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overview">
                                <div class="title">
                                    <div class="text-wrapper">
                                        <span>App Review</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="text-wrapper">
                                            <span>
                                                <p class="description">
                                                    Dr.Pocket, India’s online doctor consultation app, offers
                                                    complete telemedicine solutions for you and your family’s health
                                                    and medical needs.
                                                    You can book Doctor appointment, health checks, order medicines
                                                    or consult a doctor virtually all at your fingertips.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="purchase">
                                <div class="year">2021</div>
                                <!-- <button class="purchase-btn">Purchase</button> -->
                            </div>
                        </div>
                       
                        <div class="swiper-slide p-md-5 p-3">
                            <div class="name">
                                <div class="sub-title">
                                    <div class="text-wrapper">
                                        <span>APP</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="title">
                                            <div class="text-wrapper">
                                                <span>Food Recipe</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overview">
                                <div class="title">
                                    <div class="text-wrapper">
                                        <span>App Review</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="text-wrapper">
                                            <span>
                                                <p class="description">
                                                    Food Recipe app makes short recipe videos that explain
                                                    complicated recipes in short but detailed videos. They are here
                                                    to make cooking fun, one recipe video at a time. They have wide
                                                    collection of recipes ranging for lunch, dinner, snacks, drinks,
                                                    kababs, biryanis, desi food, desserts, parathas, rolls, Chinese
                                                    dishes and many more.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="purchase">
                                <div class="year">2021</div>
                                <!-- <button class="purchase-btn">Purchase</button> -->
                            </div>
                        </div>
                       
                        <div class="swiper-slide p-md-5 p-3">
                            <div class="name">
                                <div class="sub-title">
                                    <div class="text-wrapper">
                                        <span>APP</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="title">
                                            <div class="text-wrapper">
                                                <span>Attendance Management</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overview">
                                <div class="title">
                                    <div class="text-wrapper">
                                        <span>App Review</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-11 offset-md-1">
                                        <div class="text-wrapper">
                                            <span>
                                                <p class="description">
                                                    If you're looking for an ultimate Attendance app, employee
                                                    attendance manager, or attendance register then Attendance
                                                    Management app is one for you. It's the best app to digitize
                                                    attendance register, work documents, & a smart staff attendance
                                                    app.

                                                    AM can be your digital Attendance app, Attendance register, or
                                                    the ideal staff Attendance Manager.
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="purchase">
                                <div class="year">2021</div>
                                <!-- <button class="purchase-btn">Purchase</button> -->
                            </div>
                        </div> --}}
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"
    integrity="sha256-4sETKhh3aSyi6NRiA+qunPaTawqSMDQca/xLWu27Hg4=" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="/assets/lib/ajax/swiper.min.js"></script> --}}
    <script src="{{ asset('assets/js/work-slider.js') }}"></script>

</html>
