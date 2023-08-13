<!DOCTYPE html>
<html lang="en">
    <body oncontextmenu="return false;">
<head>
    @include('layouts.header')
    @include('layouts.navbar')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<div id="preloader"></div>
<body class="dark-mode-sdec">
      <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZKQ6Z5"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <link itemprop="thumbnailUrl" href="https://webitoinfotech.com/assets/img/index/logo/favicon-1.png">
        
        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="https://webitoinfotech.com/assets/img/index/logo/favicon-1.png">
        </span>
    <div style="margin-top:88px;">
       
        @yield('homepage-contain')
        @yield('contectuspage-contain')
        @yield('designi_dev-contain')
        @yield('devops-contain')
        @yield('cms-contain')
        @yield('mobileapp-contain')
        @yield('services-contain')
        @yield('web-devolopment-contain')
        @yield('technology-page-content')
        @yield('backend-contain')
        @yield('database-contain')
        @yield('fronend-contain')
        @yield('aboutcontent')
        @yield('mobile-contain')
        @yield('policy-contain')
        @yield('terms-contain')
        @yield('portfoliocontent2')
        @yield('portfoliocontent')
        @yield('portfolio_page-content')
        @yield('slidercontent')
        @yield('flutter')
        @yield('career-contain')
        @yield('hiring-contain')
    </div>
    @yield('teampage-contain')
    @include('layouts.cursor')

    @include('layouts.footer')
    @yield('slider-contain')
    {{-- <meta content='width=device-width, initial-scale-1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport' /> --}}
    <script>
        var themonth = 1;
        renderCal(themonth);

        $('.minusmonth').click(function() {
            themonth += -1;
            renderCal(themonth);
        });

        $('.addmonth').click(function() {
            themonth += 1;
            renderCal(themonth);
        });

        function renderCal(themonth) {
            $('.calendar li').remove();
            $('.calendar ul').append(
                '<li class="daysName">Mon</li><li class="daysName">Tue</li><li class="daysName">Wed</li><li class="daysName">Thu</li><li class="daysName">Fri</li><li class="daysName">Sat</li><li class="daysName">Sun</li>'
            );
            var d = new Date(),
                Month = d.getMonth() + 1,
                currentMonth = d.getMonth() + themonth, // get this month
                days = numDays(currentMonth, d.getYear()), // get number of days in the month
                fDay = firstDay(currentMonth, d.getYear()) - 1, // find what day of the week the 1st lands on
                months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                    'November', 'December'
                ];
            var monthName = d.toLocaleString('default', {
                month: 'long'
            });

            var currentDate = d.getDate();

            $('.calendar p.monthname').text(months[currentMonth - 1]);

            for (var i = 0; i < fDay - 1; i++) { // place the first day of the month in the correct position
                $('<li class="empty">&nbsp;</li>').appendTo('.calendar ul');
            }

            for (var i = 1; i <= days; i++) { // write out the days
                if (currentMonth < Month) {
                    $('<li class="disabled" data-id=' + i + '>' + i + '</li>').appendTo('.calendar ul');
                } else if (currentDate == i) {
                    $('<li class="active" data-id=' + i + '>' + i + '</li>').appendTo('.calendar ul');
                } else if ($('.calendar p.monthname').text() == monthName && currentDate > i) {
                    $('<li class="disabled" data-id=' + i + '>' + i + '</li>').appendTo('.calendar ul');
                } else {
                    $('<li data-id=' + i + '>' + i + '</li>').appendTo('.calendar ul');
                }
            }

            function firstDay(month, year) {
                return new Date(year, month, 1).getDay();
            }

            function numDays(month, year) {
                return new Date(year, month, 0).getDate();
            }

        }
    </script>

    <script>
        $('.book_meeting').on("click", function() {
            var today_date = new Date();
            var date = today_date.getDate();
            var year = today_date.getFullYear();
            var month = today_date.getMonth() + 1;
            var fullDate =
                `${year}-${month.toString().padStart(2, '0')}-${date.toString().padStart(2, '0')}`;
            $('#fullDate').val(fullDate);

            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                timeZone: 'Asia/Kolkata'
            };
            getdateString = today_date.toLocaleDateString('en-US', options);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ url('date/check') }}',
                data: {
                    'fullDate': fullDate,
                },
                dataType: 'json',
                success: function(response_msg) {
                    if (response_msg.success == true) {
                        var slot_array = response_msg.checkDateArray;
                        $('.meetingTime').each(function(index, element) {
                            var TimeId = $(this).data('id');
                            var specificTime = new Date(fullDate + ' ' + TimeId);
                            if (today_date.getTime() >= specificTime.getTime()) {
                                $(this).attr('disabled', true);
                                $(this).css("opacity", "0.5");
                            } else if (jQuery.inArray(TimeId, slot_array) != -1) {
                                $(this).attr('disabled', true);
                                $(this).css("opacity", "0.5");
                            } else {
                                $(this).attr("disabled", false);
                                $(this).css("opacity", "1");
                            }
                        });
                    }
                }
            });
            $('#bookMeetingModal').modal('show');
        })

        var fullDate;
        var getdateString;
        $('.calendar li').click(function() {
            var date_id = $(this).data('id');
            var today_date = new Date();
            var date = today_date.getDate();
            var year = today_date.getFullYear();
            var month = today_date.getMonth() + 1;
            var fullDate =
                `${year}-${month.toString().padStart(2, '0')}-${date_id.toString().padStart(2, '0')}`;

            today_date.setDate(date_id);
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                timeZone: 'Asia/Kolkata'
            };
            getdateString = today_date.toLocaleDateString('en-US', options);

            $('#fullDate').val(fullDate);
            $('.calendar li').removeClass('active');
            $(this).addClass('active');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ url('date/check') }}',
                data: {
                    'fullDate': fullDate,
                },
                dataType: 'json',
                success: function(response_msg) {
                    if (response_msg.success == true) {
                        var slot_array = response_msg.checkDateArray;
                        if (date_id == date) {
                            $('.meetingTime').each(function(index, element) {
                                var TimeId = $(this).data('id');
                                var specificTime = new Date(fullDate + ' ' + TimeId);
                                if (today_date.getTime() >= specificTime.getTime()) {
                                    $(this).attr('disabled', true);
                                    $(this).css("opacity", "0.5");
                                } else if (jQuery.inArray(TimeId, slot_array) != -1) {
                                    $(this).attr('disabled', true);
                                    $(this).css("opacity", "0.5");
                                } else {
                                    $(this).attr("disabled", false);
                                    $(this).css("opacity", "1");
                                }
                            });
                        } else {
                            $('.meetingTime').each(function(index, element) {
                                var TimeId = $(this).data('id');
                                if (jQuery.inArray(TimeId, slot_array) != -1) {
                                    $(this).attr('disabled', true);
                                    $(this).css("opacity", "0.5");
                                } else {
                                    $(this).attr('disabled', false);
                                    $(this).css("opacity", "1");
                                }
                            });
                        }
                    }
                }
            });
        });

        var time_slot;
        $('.meetingTime').on("click", function() {
            $(".calendarContainer").addClass('hidden');
            $(".informationContainer").removeClass("hidden");
            time_slot = $(this).data('id');
            $('#selectedDate').html(getdateString + " " + time_slot);
        })

        $('.backBtn').on("click", function() {
            $(".calendarContainer").removeClass("hidden");
            $(".informationContainer").addClass('hidden');
        })

        var flag = false;

        function form_validation() {

            if ($("#firstName").val() && $("#lastName").val() && $('#userEmail').val()) {
                flag = true;
            } else {
                flag = false;
            }

            if ($("#firstName").val()) {
                $("#fnameErr").html("");
            } else {
                $("#fnameErr").html("This field is required.");
                flag = false;
            }

            if ($("#lastName").val()) {
                $("#lnameErr").html("");
            } else {
                $("#lnameErr").html("This field is required.");
                flag = false;
            }

            var email = $('#userEmail').val();
            var email_regx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email) {
                if (email_regx.test(email) == false) {
                    $("#mailErr").html("Please Enter valid Email");
                    flag = false;
                } else {
                    $("#mailErr").html("");
                }
            } else {
                $("#mailErr").html("Please Enter valid Email");
            }

            if (flag == true) {
                $(".confirmMeeting").attr("disabled", false);
                $(".confirmMeeting").css("opacity", "1");
            } else {
                $(".confirmMeeting").attr("disabled", true);
                $(".confirmMeeting").css("opacity", "0.5");
            }
        }

        $(".confirmMeeting").on("click", function() {
            var first_name = $('#firstName').val();
            var last_name = $('#lastName').val();
            var email = $('#userEmail').val();
            var meetingDuration = $('#meetingDuration').val();
            var fullDate = $('#fullDate').val();
            if (first_name.length > 0 || last_name.length > 0 || email.length > 0) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ url('meeting/book') }}',
                    data: {
                        'first_name': first_name,
                        'last_name': last_name,
                        'email': email,
                        'meetingDuration': meetingDuration,
                        'fullDate': fullDate,
                        'time_slot': time_slot,
                    },
                    dataType: 'json',
                    success: function(response_msg) {
                        if (response_msg.success == true) {
                            $(".confirmMeetingContainer").removeClass("hidden");
                            $(".informationContainer").addClass('hidden');
                        }
                    }
                });
            }

        });

        $('#okBtn').on("click", function() {
            $('#bookMeetingModal').modal('hide');

        })
    </script>
</body>
</html>
{{-- <script>
    document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
</script> --}}
