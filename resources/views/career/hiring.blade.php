@extends('master')
@section('title', 'Hiring Page')

@section('meta-description','At Webito Infotech, work is more than a job — it’s a calling. To build. To design. To code. To consult. To invent and collaborate. Join us today.')
@section('meta-url', 'https://webitoinfotech.com/hiring')
@section('meta-title', 'Webito Infotech Careers - India')

@section('hiring-contain')
    <!-- Meta Tag  -->
    <?php
    $seotitle = 'Webito Infotech Careers - India';
    $metacontent = 'At Webito Infotech, work is more than a job — it’s a calling. To build. To design. To code. To consult. To invent and collaborate. Join us today.';
    $metaname = 'Webito Infotech, Webito, jobs, careers, carreers, carrer, carrers, career, carreer, employment employement, employemnt, emolyment, job opportunity/opportunities,  entry-level, experienced professional, seekers, job seekers, students, university, college, value, purpose, innovation, Webito Infotech jobs blog, Webito Infotech Jobs Global, cognitive, Watson, explore jobs, new collar, skills, talent, programs, programme, partner, partnership, work, diverse, diversity, inclusive, inclusivity, inclusion, benefits, corporate citizen, future, STEM, Lime, GEM, engineers, MBAs, transform, transformation, P-Tech, veteran/s, veteran 2K, hiring initiative, potential, science';
    $metaproperty = 'Webito Infotech - Career Development Company';
    ?>
    @php
        if (isset($_GET['id'])) {
            $positionId = $_GET['id'];
        } else {
            $positionId = 1;
        }
        
    @endphp


    <div class="content " style="min-height: 453px; padding-top: 0px;">
        <div class="content_inner  ">
            <div class="title_outer title_without_animation" data-height="0">
                <div class="title position_left without_title_text standard_title " style="height:0px;">
                    <div class="image not_responsive"></div>

                    <div class="title_holder">
                        <div class="container">
                            <div class="container_inner clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="full_width">
                    <div class="full_width_inner">
                        @include('career.common.requirement')
                        @include('career.common.form')
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
