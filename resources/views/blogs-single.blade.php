@extends('master')
@section('homepage-contain')
    <style>
        .blog-listingfilter[_ngcontent-c3] {
            width: 100%;
            max-width: 330px;
            display: inline-block;
            vertical-align: top;
            height: calc(100vh - 140px);
            position: relative;
            left: 0;
            top: 140px;
            padding: 0 20px 20px 40px;
            background: #fff;
            z-index: 2;
        }

        #page_navigation {
            clear: both;
            margin: 20px 0;
        }

        #page_navigation a {
            padding: 3px 6px;
            border: 1px solid #2e6da4;
            margin: 2px;
            color: black;
            text-decoration: none
        }

        .active_page {
            background: #337ab7;
            color: white !important;
        }

        .listing-view[_ngcontent-c3] .row[_ngcontent-c3] {
            flex-wrap: wrap;
        }

        .listing-view[_ngcontent-c3] .mar-top-30[_ngcontent-c3] {
            margin-top: 60px;
        }

        .listing-view[_ngcontent-c3] .blog-listing-detail[_ngcontent-c3] a[_ngcontent-c3] {
            font-size: 20px;
            color: #252b33;
            line-height: 28px;
            margin: 10px 0 0;
            font-weight: 600;
        }

        .listing-view[_ngcontent-c3] .blog-listing-detail[_ngcontent-c3] {
            margin-top: 20px;
        }

        .listing-sm-img[_ngcontent-c3] img[_ngcontent-c3] {
            height: auto;
            width: 100%;
            box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
            border-radius: 5px;
        }

        .listing-col-one[_ngcontent-c3] {
            margin-top: 50px;
        }

        .blog-listingfilter[_ngcontent-c3] .has-search[_ngcontent-c3] {
            position: relative;
        }

        .blog-listingfilter[_ngcontent-c3] .has-search[_ngcontent-c3] .fa-search[_ngcontent-c3] {
            position: absolute;
            left: 0;
            top: 13px;
            font-size: 14px;
            font-weight: 100;
            color: #8a959e;
        }

        .b-category-list[_ngcontent-c3] ul[_ngcontent-c3] li[_ngcontent-c3] a[_ngcontent-c3] {
            color: #8a959e;
            font-size: 18px;
            line-height: 32px;
            font-weight: 400;
            letter-spacing: -.5px;
        }

        .blog-search-box[_ngcontent-c3] .form-control[_ngcontent-c3] {
            border: none;
            border-bottom: 1px solid transparent;
            font-size: 20px;
            line-height: 28px;
            color: #8a959e;
            font-weight: 300;
            letter-spacing: -.5px;
            padding: 7px 20px;
        }

        .b-category-list[_ngcontent-c3] {
            margin-top: 20px;
        }

        .listing-md-img[_ngcontent-c3] img[_ngcontent-c3] {
            height: auto;
            width: 100%;
            border: 1px solid #f1f1f1;
            box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
            border-radius: 5px;
        }


        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .blog-listing-detail[_ngcontent-c3] .category[_ngcontent-c3] {
            font-size: 12px;
            color: #81959e;
            font-weight: 600;
            text-transform: uppercase;
        }

        .blog-listing-detail[_ngcontent-c3] a[_ngcontent-c3] {
            color: #252b33;
            font-size: 40px;
            line-height: 50px;
            font-weight: 800;
            margin: 20px 0;
            text-decoration: none;
            display: block;
        }

        .listing-md-img[_ngcontent-c3] img[_ngcontent-c3] {
            height: auto;
            width: 100%;
            border: 1px solid #f1f1f1;
            box-shadow: 0 5px 30px 0 rgb(0 0 0 / 10%);
            border-radius: 5px;
        }

        img.ng-lazyloaded {
            -webkit-animation: .5s fadein;
            animation: .5s fadein;
        }

        img {
            vertical-align: middle;
            border-style: none;
            max-width: 100%;
        }

        p {
            font-size: 16px;
            line-height: 26px;
            color: #252b33;
        }

        @media only screen and (max-width: 979px) {
            .blog-search-box[_ngcontent-c3] {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        }

        .submenu {
            display: none;
        }

        .companymenuli:hover>ul {
            display: block;
        }

    </style>

    <section _ngcontent-c3="" class="blog-listing">

        <div _ngcontent-c3="" class="blog-listingfilter" style="position: fixed;">
            <div _ngcontent-c3="" class="blog-search-box">
                <div _ngcontent-c3="" class="form-group has-search mb-0"><span _ngcontent-c3=""
                        class="fa fa-search form-control-feedback"></span><input _ngcontent-c3="" class="form-control"
                        placeholder="Search" type="text">
                </div>
            </div>
            @foreach ($article_category as $article_category)
                <div _ngcontent-c3="" class="b-category-list">
                    <ul _ngcontent-c3="" class="mb-0" style="padding: 0px;">
                        <li class="companymenuli"><a class="alisting"
                                href="{{ url('/articles/category/' . $article_category->id) }}">{{ $article_category->category }}<b
                                    class="caret"></b></a>
                            <ul class="submenu">
                                @php
                                    $article_sub_category = App\Models\Article_category::where('sub_category', $article_category['id'])->get();
                                @endphp
                                @foreach ($article_sub_category as $v)
                                    <li class="companymenuli"><a class="alisting"
                                            href="{{ url('/articles/category/' . $v->id) }}">{{ $v->category }}<b
                                                class="caret"></b></a></li>
                                @endforeach
                            </ul>
                    </ul>
                </div>
            @endforeach
        </div>

        <div _ngcontent-c3="" class="rightside-panel" style="margin-left: 350px;">
            <div _ngcontent-c3="" class="listing-col-one">
                <div _ngcontent-c3="" class="row">
                    <div _ngcontent-c3="" class="col-md-12 col-xl-8">
                        <div _ngcontent-c3="" class="listing-md-img"><a _ngcontent-c3=""
                                href="/blog/offshore-outsourcing/what-makes-indianic-the-best-place-to-hire-ios-developers.html">
                                <picture _ngcontent-c3="">
                                    <source _ngcontent-c3="" type="image/webp" defaultimage="assets/images/default.png"
                                        lazyload="https://siteapi.indianic.com/blog/wp-content/uploads/2022/02/best-hire-app-developers.webp"
                                        srcset="https://siteapi.indianic.com/blog/wp-content/uploads/2022/02/best-hire-app-developers.webp">
                                    <source _ngcontent-c3="" defaultimage="assets/images/default.png"
                                        lazyload="https://siteapi.indianic.com/blog/wp-content/uploads/2022/02/best-hire-app-developers.jpg"
                                        type="image/jpg"
                                        srcset="https://siteapi.indianic.com/blog/wp-content/uploads/2022/02/best-hire-app-developers.jpg">
                                    <img _ngcontent-c3=""
                                        src="https://siteapi.indianic.com/blog/wp-content/uploads/2022/02/best-hire-app-developers.jpg"
                                        alt="What makes IndiaNIC the Best Place to Hire iOS Developers?"
                                        class=" ng-lazyloaded">
                                </picture>
                            </a></div>
                    </div>
                    <div _ngcontent-c3="" class="col-md-12 col-xl-4">
                        <div _ngcontent-c3="" class="blog-listing-detail"><span _ngcontent-c3="" class="category">
                                @php
                                    // dd($articleSingle);
                                    $id = json_decode($articleSingle['category']);
                                    $article_category_data = App\Models\Article_category::whereIN('id', $id)->get();
                                    
                                    $tagId = json_decode($articleSingle['tags']);
                                    $article_tag_data = App\Models\article_tag::whereIN('id', $tagId)->get();
                                    // dd($article_category_data);
                                @endphp
                                <h3>Article Category</h3>
                                @foreach ($article_category_data as $value)
                                    <a href="/articles/category/{{ $value->id }}">{{ $value->category }} ,</a>
                                @endforeach
                                <h3>Article Tag</h3>
                                @foreach ($article_tag_data as $value)
                                    <a href="/articles/tag/{{ $value->id }}"> {{ $value->name }} ,</a>
                                @endforeach
                            </span>
                            <a _ngcontent-c3=""
                                href="/article/{{ $articleSingle['id'] }}">{{ $articleSingle['title'] }}</a>
                            <p>
                                {{ $articleSingle['s_description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            {{-- satyam --}}
            {{-- <div class="d-flex">
                @foreach ($articles as $v)
                    <div _ngcontent-c3="" class="blog-listing-detail">
                        <span _ngcontent-c3="" class="category">

                            @php
                                // // dd($articles);
                                $id = json_decode($v->category);
                                $article_category_data = App\Models\Article_category::whereIN('id', $id)->get();
                                // dd($article_category_data);
                            @endphp
                            @foreach ($article_category_data as $value)
                                {{ $value->category }} ,
                            @endforeach

                        </span>
                        <a _ngcontent-c3="" href="{{ url('/article/category/' . $value->id) }}">{{ $v->title }}</a>

                    </div>
                @endforeach
            </div> --}}
        </div>

    </section>

    <script>
        jQuery(document).ready(function() {

            //Pagination JS
            //how much items per page to show
            var show_per_page = 4;
            //getting the amount of elements inside pagingBox div
            var number_of_items = $('#pagingBox').children().size();
            //calculate the number of pages we are going to have
            var number_of_pages = Math.ceil(number_of_items / show_per_page);

            //set the value of our hidden input fields
            $('#current_page').val(0);
            $('#show_per_page').val(show_per_page);

            //now when we got all we need for the navigation let's make it '

            /* 
            what are we going to have in the navigation?
                - link to previous page
                - links to specific pages
                - link to next page
            */
            var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';
            var current_link = 0;
            while (number_of_pages > current_link) {
                navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +
                    ')" longdesc="' + current_link + '">' + (current_link + 1) + '</a>';
                current_link++;
            }
            navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';

            $('#page_navigation').html(navigation_html);

            //add active_page class to the first page link
            $('#page_navigation .page_link:first').addClass('active_page');

            //hide all the elements inside pagingBox div
            $('#pagingBox').children().css('display', 'none');

            //and show the first n (show_per_page) elements
            $('#pagingBox').children().slice(0, show_per_page).css('display', 'block');

        });



        //Pagination JS

        function previous() {

            new_page = parseInt($('#current_page').val()) - 1;
            //if there is an item before the current active link run the function
            if ($('.active_page').prev('.page_link').length == true) {
                go_to_page(new_page);
            }

        }

        function next() {
            new_page = parseInt($('#current_page').val()) + 1;
            //if there is an item after the current active link run the function
            if ($('.active_page').next('.page_link').length == true) {
                go_to_page(new_page);
            }

        }

        function go_to_page(page_num) {
            //get the number of items shown per page
            var show_per_page = parseInt($('#show_per_page').val());

            //get the element number where to start the slice from
            start_from = page_num * show_per_page;

            //get the element number where to end the slice
            end_on = start_from + show_per_page;

            //hide all children elements of pagingBox div, get specific items and show them
            $('#pagingBox').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

            /*get the page link that has longdesc attribute of the current page and add active_page class to it
            and remove that class from previously active page link*/
            $('.page_link[longdesc=' + page_num + ']').addClass('active_page').siblings('.active_page').removeClass(
                'active_page');

            //update the current page input field
            $('#current_page').val(page_num);
        }
    </script>
@endsection
