<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
    integrity="sha256-DBYdrj7BxKM3slMeqBVWX2otx7x4eqoHRJCsSDJ0Nxw=" crossorigin="anonymous" />
{{-- <script type="text/javascript" src="/assets/lib/ajax/swiper.min.js"></script> --}}
<link rel="stylesheet" href="{{ asset('assets/css/work-slider.css') }}?{{ filemtime(public_path('assets/css/work-slider.css')) }}" />
@php
    use App\Models\WorkSlider;
    $workData = WorkSlider::all();
@endphp
{{-- <div class="container">
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
                                </div>
                            </div>
                        @endforeach
                       
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="marvel-container spiderman">
        <div class="row">
            <div class="col-md-5 pr-md-0">
                <div class="img-container">
                    @foreach ($workData as $data)
                        <div class="img-wrapper">
                            <div class="background"></div>
                            <img src="{{ asset('assets/img/Portfolio/app/' . $data->image) }}" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-7 work-slider-details">
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
                                </div>
                            </div>
                        @endforeach
                        
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
