<div id="apply-form-row" class="vc_row wpb_row section vc_row-fluid  grid_section mpc-row" style=" text-align:left;">
    <div class=" section_inner clearfix">
        <div class="section_inner_margin clearfix">
            <div class="wpb_column vc_column_container vc_col-sm-12 mpc-column"
                data-column-id="mpc_column-5661497b8fa4a21">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="ult-spacer spacer-6149989d44362" data-id="6149989d44362" data-height="100"
                            data-height-mobile="60" data-height-tab="" data-height-tab-portrait=""
                            data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                        <div id="mpc_textblock-9661497b8fa3651" class="mpc-textblock mpc-inited" style="opacity: 1;">
                            <div id="apply-form" class="cd-section thanks-popup fixed-popup">
                                {{-- <form id="submitCareersForm" class="apply-now-form">
                                   style="background-color: #5e5959;"  </form> --}}
                                <input type="hidden" id="inic_careers_nonce" name="inic_careers_nonce" value="">
                                <input type="hidden" name="_wp_http_referer" value="/career-detail/?position_id=43654">
                                <div class="container">
                                    <h2 style="margin-left: 50px;">Apply Now</h2>

                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif
                                    @if (Session::has('error'))
                                        <div class="alert alert-error">
                                            {{ Session::get('error') }}
                                            @php
                                                Session::forget('error');
                                            @endphp
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-error">
                                            @foreach ($errors->all() as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif
                                    <form action="{{ route('captcha-validation') }}" method="POST"
                                        class="apply-now-form" id="submitCareersForm" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="android" name="android">
                                        <div class="row">

                                            <div class="col-md-6 col-lg-4">
                                                <label class="required" required>Position Applied
                                                    For</label>
                                                <select data-ref="careers_applied_position" class="select"
                                                    id="dynamic_select" name="careers_applied_position" size="1"
                                                    value="<?php echo $positionId; ?>" required>


                                                    <option relatedurl=" #" value="1">
                                                        Android with Flutter Developer
                                                    </option>
                                                    <option relatedurl="#" value="2">
                                                        Business Analyst
                                                    </option>
                                                    <option relatedurl="#" value="3">
                                                        Dot Net MVC Developer
                                                    </option>
                                                    <option relatedurl="#" value="4">
                                                        Full Stack Developer
                                                    </option>
                                                    <option relatedurl="#" value="5">
                                                        iOS with Flutter Developer
                                                    </option>
                                                    <option relatedurl="#" value="6">
                                                        Laravel Developer
                                                    </option>
                                                    <option relatedurl="#" value="7">
                                                        Magento Developer
                                                    </option>
                                                    <option relatedurl="#" value="8">
                                                        Mern Stack Developer
                                                    </option>
                                                    <option relatedurl="#" value="9">
                                                        React Native Developer
                                                    </option>
                                                    <option relatedurl="#" value="10">
                                                        ReactJs Developer</option>
                                                    <option relatedurl="#" value="11">
                                                        Sr. Laravel Developer</option>
                                                    <option relatedurl="#" value="12">
                                                        Sr. QA Engineer</option>
                                                    <option relatedurl="#" value="13">
                                                        WordPress Developer</option>
                                                    <option relatedurl="#" value="14">
                                                        Sr. UI/UX Designer
                                                    </option>
                                                    <option relatedurl="#" value="15">
                                                        Project Manager
                                                    </option>
                                                    <option relatedurl="#" value="16">
                                                        Mean Stack Developer
                                                    </option>
                                                    <option relatedurl="#" value="17">
                                                        Sr. Mean Stack Developer
                                                    </option>
                                                    <option relatedurl="#" value="18">
                                                        Sr. Mern Stack Developer
                                                    </option>
                                                    <option relatedurl="#" value="19">
                                                        Sr. ReactJs Developer
                                                    </option>
                                                    <option relatedurl="#" value="20">
                                                        AngularJS Developer
                                                    </option>
                                                    <option relatedurl="#" value="21">
                                                        Sr. React Native Developer
                                                    </option>
                                                    <option relatedurl="#" value="22">
                                                        QA Automation (Appium + Selenium)
                                                    </option>
                                                    <option relatedurl="#" value="23">
                                                        DotNET Developer
                                                    </option>
                                                    <option relatedurl="#" value="24">
                                                        Drupal Developer
                                                    </option>
                                                    <option relatedurl="#" value="25">
                                                        DevOps
                                                    </option>
                                                    <option relatedurl="#" value="26">
                                                        Python Developer
                                                    </option>
                                                    <option relatedurl="#" value="27">
                                                        Sr. Python Developer
                                                    </option>
                                                    <option relatedurl="#" value="28">
                                                        Tech Lead (Python)
                                                    </option>
                                                    <option relatedurl="#" value="29">
                                                        React Native (Tech Lead)
                                                    </option>
                                                    <option relatedurl="#" value="30">
                                                        JavaScript Developer
                                                    </option>
                                                    <option relatedurl="#" value="31">
                                                        Sr. JavaScript Developer
                                                    </option>
                                                    <option relatedurl="#" value="32">
                                                        JavaScript (Tech Lead)
                                                    </option>
                                                    <option relatedurl="#" value="33">
                                                        VueJS Developer
                                                    </option>
                                                    <option relatedurl="#" value="34">
                                                        Shopify (Backend)
                                                    </option>
                                                </select>

                                                <script>
                                                    $(function() {
                                                        // bind change event to select
                                                        $('#dynamic_select').on('change', function() {

                                                            // alert('jainish');
                                                            var value = $('#dynamic_select option:selected').val();
                                                            // alert(value);

                                                            if (value == 1) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Android
                                                                with Flutter Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Familiarity with RESTful APIs to connect Android applications to back-end services</li>
                                                                                <li>Experience with offline storage, threading, and performance tuning</li>
                                                                                <li>Familiarity with the use of additional sensors, such as gyroscopes and accelerometers</li>
                                                                                <li>Ability to understand business requirements and translate them into technical requirements
                                                                                </li>
                                                                                <li>A knack for benchmarking and optimization</li>
                                                                                <li>Proficient understanding of code versioning tools, such as Git</li>
                                                                                <li>Strong knowledge of Android UI design principles, patterns, and best practices</li>
                                                                                <li>Ability to design applications around natural user interfaces, such as "touch"</li>
                                                                                <li>Knowledge of the open-source Android ecosystem and the libraries available for common tasks</li>
                                                                                <li>Familiarity with cloud message APIs and push notifications</li>
                                                                                <li>Understanding of Google's Android design principles and interface guidelines</li>
                                                                                <li>Familiarity with continuous integration</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 1+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span> Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 2) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Business Analyst</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Understand project objective by going over initial requirements</li>
                                                                                <li>Identify and prepare detailed use cases, functional, non-functional and technical requirements for a given project</li>
                                                                                <li>Evaluate and derive conclusions for preparing clear project deliverables</li>
                                                                                <li>Liaison with technical, functional and business development team
                                                                                </li>
                                                                                <li>Excellent communication and presentation skills</li>
                                                                                <li>Excellent analytical skills</li>
                                                                                <li>Excellent Communication skill</li>
                                                                                <li>Requirement Elicitation - Work with clients directly for requirement gathering sessions</li>
                                                                                <li>Evaluate, measure and recommend enhancements to the solution for added-value</li>
                                                                                <li>Requirement Prioritization</li>
                                                                                <li>Create functional clickable wire frames</li>
                                                                                <li>Prepare detailed Software Requirement Specification (SRS) documents</li>
                                                                                <li>Stay up-to-date with latest technologies and trends and off-the-shelf solutions</li>
                                                                                <li>Expert in MS office, Wire framing tools such as Axure, Omnigraffle, Visio etc.</li>
                                                                                <li>Basic understanding of different industries</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 2 to 4 Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span> Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 3) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Dot Net MVC Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Strong knowledge of Asp.NET web framework</li>
                                                                                <li>Good knowledge in JavaScript, HTML5, CSS and ReactJS</li>
                                                                                <li>Knack for writing clean, readable, and easily maintainable code</li>
                                                                                <li>Good knowledge in developing web application using MVC, C# and .Net Framework.
                                                                                </li>
                                                                                <li>Basic Knowledge in SQL Server and Entity Framework</li>
                                                                                <li>Expert in jQuery</li>
                                                                                <li>Exposure to Web Api/ WCF</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 3+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Computer Engineering, Computer Science or related IT field</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 4) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Full Stack Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Design, build, and maintain efficient, reusable, and reliable code</li>
                                                                                <li>Help maintain code quality, organization, and automatization</li>
                                                                                <li>Must have knowledge in 1- Javascript Object, 2- Closure, 3- Callback, 4- Promises, 6- Scopes javascript, 7-prototype</li>
                                                                                <li>Should have worked on .Net framework 4 or greater
                                                                                </li>
                                                                                <li>Familiarity with Visual Studio 2017 & Microsoft SQL Server 2017</li>
                                                                                <li>Integrate data storage solutions using SQL Server</li>
                                                                                <li>Identify bottlenecks and bugs, and devise solutions to mitigate and address these issues</li>
                                                                                <li>Good skill in core Javascript with ES5 (ECMA 5) specification.</li>
                                                                                <li>Strong understanding of Object-Oriented Programming</li>
                                                                                <li>Strong knowledge of .NET web framework</li>
                                                                                <li>Proficient in C# and VB.NET, with a good knowledge of their ecosystems</li>
                                                                                <li>Knowledge of any JavaScript front end technologies like Angular</li>
                                                                                <li>Familiar with various design and architectural patterns</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 7+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 5) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>iOS with Flutter Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Ensure the performance, quality, and responsiveness of applications</li>
                                                                                <li>Identify and correct bottlenecks and fix bugs</li>
                                                                                <li>Continuously discover, evaluate, and implement new technologies to maximize development efficiency</li>
                                                                                <li>Collaborating with cross-functional teams to define, design, and ship new features.
                                                                                </li>
                                                                                <li>Unit-testing code for robustness, including edge cases, usability, and general reliability.</li>
                                                                                <li>Augmented Reality - ARKit, ARCore, Vuforia, etc</li>
                                                                                <li>IOT Health Kit Vision Kit Machine learning Video, Audio, Image processing (Core Graphics)</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 3+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 6) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Laravel Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Must have good knowledge of OOPS Concepts</li>
                                                                                <li>Demonstrable knowledge of web technologies including HTML, CSS, Javascript, AJAX etc</li>
                                                                                <li>Understanding of MVC design patterns, Strong knowledge of PHP web frameworks ( Laravel, CI, Zend )</li>
                                                                                <li>Should have excellent communication skills
                                                                                </li>
                                                                                <li>Should have strong knowledge of Core PHP, Jquery and JavaScript.</li>
                                                                                <li>Good knowledge of relational databases, developing web services and version control tools</li>
                                                                                <li>Familiarity with NoSQL databases</li>
                                                                                <li>Should be agile and quick problem solver</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 3 to 5 Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  BE/ B.TECH/B.SC/ME/M.SC/M.TECh</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 7) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Magento Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Demonstrable knowledge of XML, XHTML, CSS, Modules i.e. API integration, Payment Gateways, XML with a focus on standards.</li>
                                                                                <li>Focused on Object Oriented Programming (OOP)</li>
                                                                                <li>Extensive experience of PHP 5+ and MySQL.</li>
                                                                                <li>Exposure on Magento, CMS, CodeIgnitor, OpenCart, JavaScript/ jQuery.
                                                                                </li>
                                                                                <li>Having knowledge on LAMP, Version Controll(GIT, SVN), Hosting</li>
                                                                                <li>wo or more published website in E commerce.</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 2 to 5 Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 8) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Mern Stack Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Good skill on MongoDB, React Js, Express Js, Node JS and MySQL</li>
                                                                                <li>Must be passionate about writing clean, efficient, and maintainable code. Self-starter with ability cope with sharp learning curves.</li>
                                                                                <li>Must have 1.5 Yrs experience in NodeJS & React development.</li>
                                                                                <li>Excellent teamwork skills, Good Communication skill
                                                                                </li>
                                                                                <li>Skills: Primary: NodeJS, MySql, MongoDB, Angular 4+, ES6, Express Js, React JS & React Native</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 3+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 9) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>React Native Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Good skill in ReactNative, ReactJS, ES6 (Latest version of JS)</li>
                                                                                <li>Must have knowledge in linking 3rd party module in ReactNative.</li>
                                                                                <li>Additional skill: TypeScript, Webpack, Git and terminal usage.</li>
                                                                                <li>Self-starter with the ability to cope with sharp learning curves.
                                                                                </li>
                                                                                <li>Must have knowledge of building UI in ReactNative, CSS3.</li>
                                                                                <li>Must be working in the ReactNative for at least 1-1.5 years.</li>
                                                                                <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                                <li>Excellent Communication and teamwork skills.</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 2+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 10) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>ReactJs Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Strong proficiency in JavaScript, including DOM manipulation and the JavaScript object model.</li>
                                                                                <li>Ability to understand business requirements and translate them into technical requirements</li>
                                                                                <li>Familiarity with code versioning tools such as Git, SVN, and Mercurial.</li>
                                                                                <li>Familiarity with modern front-end build pipelines and tools
                                                                                </li>
                                                                                <li>Thorough understanding of ReactJS and its core principles.</li>
                                                                                <li>Familiarity with RESTful APIs</li>
                                                                                <li>Experience with Core web fundamentals: HTML, JavaScript, and CSS like Sass or LESS</li>
                                                                                <li>Experience with common front-end development tools such as Babel, Webpack, NPM, etc.</li>
                                                                                <li>Knowledge of modern authorisation mechanisms, such as JSON Web Token</li>
                                                                                <li>Experience with popular ReactJS workflows (such as Flux or Redux)</li>
                                                                                <li>Familiarity with newer specifications of EcmaScript</li>
                                                                                <li>Familiarity with NextJs framework.</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 1 to 7 Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 11) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Sr. Laravel Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Should have strong knowledge of Core PHP, Jquery and JavaScript.</li>
                                                                                <li>Good knowledge of relational databases, developing web services and version control tools</li>
                                                                                <li>Must be passionate about writing clean, efficient, and maintainable code</li>
                                                                                <li>Excellent teamwork skills
                                                                                </li>
                                                                                <li>Knowledge of mean stack will preferable</li>
                                                                                <li>Must have good knowledge of OOPS Concepts</li>
                                                                                <li>Good understanding of MVC design patterns, Strong knowledge of PHP web frameworks ( Laravel )</li>
                                                                                <li>Demonstrable knowledge of web technologies including HTML, CSS, Javascript, AJAX etc</li>
                                                                                <li>Self-starter with the ability to cope with sharp learning curves</li>
                                                                                <li>Should be an agile and quick problem solver</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 6+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 12) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>Sr. QA Engineer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>Experience in Automation Testing + Javascript</li>
                                                                                <li>Experience in Nightwatch.JS would be an added advantage.</li>
                                                                                <li>Can provide best practices and guidance to the junior members of the team.</li>
                                                                                <li>Exposure to any automated testing tool in Testing ( like Selenium or any other )
                                                                                </li>
                                                                                <li>Expertise in creating tests using different test automation solutions, Architecting Test Automation Framework</li>
                                                                                <li>Experience in Testim.IO.would be an added advantage</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 7+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 13) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                            <h1>WordPress Developer</h1>
                                                                            <p>Surat</p>
                                                                        </div>
                                                                        <div class="career-detail">
                                                                            <ul>
                                                                                <li>A fair understanding of the fundamentals and concepts of OOPS and PHP.</li>
                                                                                <li>Work on WordPress integration with external systems, viz CRM/ERP/Payment/Shipping, etc.</li>
                                                                                <li>Analyze, debug, and test code.</li>
                                                                                <li>Must be a self-starter & be able to work with minimum supervision.
                                                                                </li>
                                                                                <li>Knowledge of Woo commerce customization and development.</li>
                                                                                <li>Ability to develop and manage WordPress websites, web applications.</li>
                                                                                <li>Knowledge of Custom WordPress plugin development, And Theme Customization.</li>
                                                                                <li>Write well-engineered source code that complies with accepted web standards.</li>
                                                                                <li>Participate in project & deployment planning.</li>
                                                                                <li>Good Communication will be required.</li>
                                                                                <li>Knowledge of Dokan Multivendor plugin customization and development.</li>
                                                                            </ul>
                                                                            <div class="exp-detail">
                                                                                <div class="left">
                                                                                    <p><span>Experience:</span> 3+ Years</p>
                                                                                </div>
                                                                                <div class="right">
                                                                                    <p><span>Qualification:</span>  Any</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>`);

                                                            } else if (value == 14) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. UI/UX Designer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>4+ years of design experience</li>
                                                                            <li>Should have knowledge of working in Sketch App or Adobe Photoshop.</li>
                                                                            <li>Preferred if you have basic knowledge of at least one animation software (Principle, Flinto, Framer, After Effects or any others )</li>
                                                                            <li>Ability to create clean, clutter-free, brand-consistent designs.
                                                                            </li>
                                                                            <li>Understanding of standard user interface design concepts and processes.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 15) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Project Manager</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have proven leadership abilities, strong interpersonal skills, and excellent verbal and written communication skills.</li>
                                                                            <li>The ability to successfully execute projects in an onshore/offshore resource model.</li>
                                                                            <li>A proven track record of successful project implementation of IT applications.</li>
                                                                            <li>Previous experience of software selection and vendor scoring.
                                                                            </li>
                                                                            <li>Proficient in Project Management Softwares.</li>
                                                                            <li>Experienced in project management process, tools and techniques. PMI certification is preferred.</li>
                                                                            <li>Bachelor Degree or equivalent. BE Computer, IT or MCA candidates will be preferred.</li>
                                                                            <li>The ability to foster motivation within the project team to meet tight deadlines.</li>
                                                                            <li>Strong professional skills, including prioritization and workload balancing.</li>
                                                                            <li>Stakeholder management and proven ability to gain consensus.</li>

                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 16) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Mean Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on NodeJS, Angular 2.x or more, MySQL, MongoDB and ES6 [ latest version of JS specification ]</li>
                                                                            <li>Additional skill: ReactJS, TypeScript, Git and terminal Usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves./li>
                                                                            <li>Must have at least 2 Yrs experience in MEAN Stack development.
                                                                            </li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 17) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Mean Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on NodeJS, Angular 2.x or more, MySQL, MongoDB and ES6 ( latest version of JS specification )</li>
                                                                            <li>Additional skill: ReactJS, TypeScript, Git and terminal Usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.</li>
                                                                            <li>Must have at least 4 to 6 Yrs experience in MEAN Stack development.
                                                                            </li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4 to 6 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 18) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Mern Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on MongoDB, React Js, Express Js, Node JS and MySQL</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code. Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Must have 1.5 Yrs experience in NodeJS & React development.</li>
                                                                            <li>Excellent teamwork skills, Good Communication skill
                                                                            </li>
                                                                            <li>Skills: Primary: NodeJS, MySql, MongoDB, Angular 4+, ES6, Express Js, React JS & React Native</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 19) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. ReactJs Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Strong proficiency in JavaScript, including DOM manipulation and the JavaScript object model.</li>
                                                                            <li>Ability to understand business requirements and translate them into technical requirements</li>
                                                                            <li>Familiarity with code versioning tools (such as Git, SVN, and Mercurial)</li>
                                                                            <li>Familiarity with modern front-end build pipelines and tools
                                                                            </li>
                                                                            <li>Thorough understanding of ReactJS and its core principles.</li>
                                                                            <li>Familiarity with RESTful APIs</li>
                                                                            <li>Experience with Core web fundamentals: HTML, JavaScript, and CSS like Sass or LESS</li>
                                                                            <li>Experience with common front-end development tools such as Babel, Webpack, NPM, etc.</li>
                                                                            <li>Knowledge of modern authorisation mechanisms, such as JSON Web Token</li>
                                                                            <li>Experience with popular ReactJS workflows (such as Flux or Redux)</li>
                                                                            <li>Familiarity with newer specifications of EcmaScript</li>
                                                                            <li>Familiarity with NextJs framework.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 20) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>AngularJS Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on Angular 2.x or more, ES6 (latest version of JS specification) and TypeScript</li>
                                                                            <li>Should have experience of working on the new module of the existing project</li>
                                                                            <li>Must have worked on more than 4 Angular complex Projects.</li>
                                                                            <li>Additional skill: Ionic 2, NodeJS basic.
                                                                            </li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3 to 5 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 21) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. React Native Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill in ReactNative, ReactJS, ES6 (Latest version of JS)</li>
                                                                            <li>Must have knowledge in linking 3rd party module in ReactNative.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.
                                                                            </li>
                                                                            <li>Must have knowledge of building UI in ReactNative, CSS3.</li>
                                                                            <li>Must be working in the ReactNative for at least 6+ years.</li>
                                                                            <li>Additional skill: TypeScript, Webpack, Git and terminal usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.</li>

                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 22) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>QA Automation (Appium + Selenium)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>3+ Years of hands-on Experience on Automation with strong knowledge of OOPs</li>
                                                                            <li>Extensive experience in automating RESTful and SOAP services</li>
                                                                            <li>Desired experience in Mobile Automation or exposure to Mobile testing</li>
                                                                            <li>Advanced understanding of source code repositories and branching and merging strategies like GitHub, Bitbucket etc...
                                                                            </li>
                                                                            <li>Hands on experience in implementing Page Object Framework and Cucumber</li>
                                                                            <li>Excellent programming skills with Core Java Selenium Web driver, JUnit or TestNG, Maven or ANT</li>
                                                                            <li>Basic knowledge of SQL and/or any RDBMS</li>
                                                                            <li>Strong knowledge of build/deployment automation and continuous integration highly desirable.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 23) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>DotNET Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Excellent experience in ASP.NET, Latest MVC, C#.NET, Web API, LINQ, AngularJS, AJAX, JQuery, JavaScript & Responsive Website Development.</li>
                                                                            <li>Latest AngularJS, Ajax & Controls, XAML, XML</li>
                                                                            <li>Good knowledge of various design and architectural patterns</li>
                                                                            <li>Excellent Experience in SQL Server Development.
                                                                            </li>
                                                                            <li>Strong on object-oriented programming</li>
                                                                            <li>Good knowledge of Entity Framework and development</li>
                                                                            <li>Programming Analytical Skills</li>
                                                                            <li>Understanding fundamental design principles behind a scalable application</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 24) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Drupal Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>A fair understanding of fundamentals and concepts of Drupal 7 and 8, PHP, and Zend, JavaScript/ jQuery, PHP 5+ and MySQL.</li>
                                                                            <li>Work on Drupal integration with external systems, viz CRM/ERP/Payment/Shipping etc.</li>
                                                                            <li>Write well-engineered source code that complies with accepted web standards.</li>
                                                                            <li>Must be a self-starter & be able to work with minimum supervision.
                                                                            </li>
                                                                            <li>Participate in project & deployment planning.</li>
                                                                            <li>Analyze, debug, and test code.</li>
                                                                            <li>Good knowledge of XML, XHTML, CSS, Modules i.e. API integration, Payment Gateways, XML with a focus on standards.</li>
                                                                            <li>Knowledge of Custom Drupal module development, And Theme Customization.</li>
                                                                            <li>Ability to develop and manage Drupal websites, web applications.</li>
                                                                            <li>Having knowledge of LAMP, Version Control(GIT, SVN), Hosting</li>
                                                                            <li>Good experience with PHP 5+ and MySQL</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 25) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>DevOps</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good exposure to cloud platforms such as AWS, Google Cloud, Azure, Digital Ocean, etc.e</li>
                                                                            <li>Must have knowledge of at least one scripting language (Shell Scripting / Python)</li>
                                                                            <li>Must be working in DevOps tools for at least 1-1.5 years.</li>
                                                                            <li>Must have knowledge of Linux Commands.
                                                                            </li>
                                                                            <li>Must have knowledge about databases such as MySQL / PostgreSQL / MongoDB</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.</li>
                                                                            <li>Must have basic System Administration Skills (Knowledge of basic server setup, tools installation, DNS management, etc)</li>
                                                                            <li>Must have knowledge and experience of at least one CI/CD Platform (Jenkins / GitLab / TeamCity / AWS Code Deploy / Azure DevOps)</li>
                                                                            <li>Must have knowledge of Docker and Kubernetes</li>
                                                                            <li>Must have good knowledge of working on Git.</li>
                                                                            <li>Cloud Certifications would be an added advantage.</li>
                                                                            <li>Must be passionate about learning new tools/technologies.</li>
                                                                            <li>Excellent communication and teamwork skills.</li>
                                                                            <li>Knowledge about anyone programming language such as NodeJS, Python, Java would be an added advantage.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 6+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 26) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Python Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Designing and creating RESTful APIs for internal and partner consumption</li>
                                                                            <li>Participating in architectural, design and product discussions</li>
                                                                            <li>Solid database skills in a relational database (i.e. PostgresSQL, MySQL, etc.)</li>
                                                                            <li>Develop Django + Javascript applications
                                                                            </li>
                                                                            <li>2+ years hands on experience with the Django framework</li>
                                                                            <li>Knowledge of how to build and use with RESTful APIs</li>
                                                                            <li>Experience deploying Python applications into production</li>
                                                                            <li>Knowledge of AWS S3 file storage.</li>
                                                                            <li>Develop cloud-based Python Django, Flask software products</li>
                                                                            <li>1+ years' experience developing Javascript applications into production</li>
                                                                            <li>Working in an agile environment with an excellent team of engineers</li>
                                                                            <li>Working closely with UX and Front-end Developers</li>
                                                                            <li>2+ years' experience of Python coding skills</li>
                                                                            <li>Strong understanding of the Javascript framework</li>
                                                                            <li>Strong knowledge of version control (i.e. git, svn, etc.)</li>
                                                                            <li>Amazon Web Services (AWS) infrastructure knowledge is a plus</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 27) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Python Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Designing and creating RESTful APIs for internal and partner consumption</li>
                                                                            <li>Participating in architectural, design and product discussions</li>
                                                                            <li>Solid database skills in a relational database (i.e. PostgresSQL, MySQL, etc.)</li>
                                                                            <li>Develop Django + Javascript applications
                                                                            </li>
                                                                            <li>2+ years hands on experience with the Django framework</li>
                                                                            <li>Knowledge of how to build and use with RESTful APIs</li>
                                                                            <li>Experience deploying Python applications into production</li>
                                                                            <li>Knowledge of AWS S3 file storage.</li>
                                                                            <li>Develop cloud-based Python Django, Flask software products</li>
                                                                            <li>1+ years' experience developing Javascript applications into production</li>
                                                                            <li>Working in an agile environment with an excellent team of engineers</li>
                                                                            <li>Working closely with UX and Front-end Developers</li>
                                                                            <li>2+ years' experience of Python coding skills</li>
                                                                            <li>Strong understanding of the Javascript framework</li>
                                                                            <li>Strong knowledge of version control (i.e. git, svn, etc.)</li>
                                                                            <li>Amazon Web Services (AWS) infrastructure knowledge is a plus</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4 to 6 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 28) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Tech Lead (Python)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Designing and creating RESTful APIs for internal and partner consumption</li>
                                                                            <li>Participating in architectural, design and product discussions</li>
                                                                            <li>Solid database skills in a relational database (i.e. PostgresSQL, MySQL, etc.)</li>
                                                                            <li>Develop Django + Javascript applications
                                                                            </li>
                                                                            <li>2+ years hands on experience with the Django framework</li>
                                                                            <li>Knowledge of how to build and use with RESTful APIs</li>
                                                                            <li>Experience deploying Python applications into production</li>
                                                                            <li>Knowledge of AWS S3 file storage.</li>
                                                                            <li>Develop cloud-based Python Django, Flask software products</li>
                                                                            <li>1+ years' experience developing Javascript applications into production</li>
                                                                            <li>Working in an agile environment with an excellent team of engineers</li>
                                                                            <li>Working closely with UX and Front-end Developers</li>
                                                                            <li>2+ years' experience of Python coding skills</li>
                                                                            <li>Strong understanding of the Javascript framework</li>
                                                                            <li>Strong knowledge of version control (i.e. git, svn, etc.)</li>
                                                                            <li>Amazon Web Services (AWS) infrastructure knowledge is a plus</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4 to 8 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 29) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>React Native (Tech Lead)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill in ReactNative, ReactJS, ES6 (Latest version of JS)</li>
                                                                            <li>Must have knowledge in linking 3rd party module in ReactNative.</li>
                                                                            <li>Additional skill: TypeScript, Webpack, Git and terminal usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.
                                                                            </li>
                                                                            <li>Must have knowledge of building UI in ReactNative, CSS3.</li>
                                                                            <li>Must be working in the ReactNative for at least 7.5+ years.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 7.5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 30) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>JavaScript Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have 4+ year experience in core Javascript and JQuery.</li>
                                                                            <li>Having an experience in AngularJS is an advantage.</li>
                                                                            <li>Must have knowledge in site optimization.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.
                                                                            </li>
                                                                            <li>Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Excellent teamwork skills</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 31) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Sr. JavaScript Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have 6+ year experience in core Javascript and JQuery.</li>
                                                                            <li>Having an experience in AngularJS is an advantage.</li>
                                                                            <li>Must have knowledge in site optimization.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.
                                                                            </li>
                                                                            <li>Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Excellent teamwork skills</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 6+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 32) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>JavaScript (Tech Lead)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have 8+ year experience in core Javascript and JQuery.</li>
                                                                            <li>Having an experience in AngularJS is an advantage.</li>
                                                                            <li>Must have knowledge in site optimization.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.
                                                                            </li>
                                                                            <li>Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Excellent teamwork skills</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 8+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 33) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>VueJS Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Highly proficient with Vue.js framework and its core principles such as components, reactivity, and the virtual DOM</li>
                                                                            <li>Having backend knowledge of NodeJS, eventloop, REST API creation.</li>
                                                                            <li>Good understanding of HTML5 and CSS3, including Sass or Less</li>
                                                                            <li>Experience with both consuming and designing RESTful APIs
                                                                            </li>
                                                                            <li>Highly proficient with the JavaScript language and its modern ES6+ syntax and features</li>
                                                                            <li>Familiarity with the Vue.js ecosystem, including Vue CLI, Vuex, Vue Router, and Nuxt.js</li>
                                                                            <li>Expartize in Relational database (MySQL, PostgreSQL) and NoSQL database (MongoDB)</li>
                                                                            <li>Understanding of server-side rendering and its benefits</li>
                                                                            <li>Proficiency with modern development tools, like Babel, Webpack, and Git</li>
                                                                            <li>Good Communication and presentation skill</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2.5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            } else if (value == 34) {
                                                                $("#careers-detail-box")
                                                                    .html(`<div class="detail-title">
                                                                        <h1>Shopify (Backend)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have an understanding of Shopify eCommerce framework and order, product, discount APIs</li>
                                                                            <li>Act as Shopify Expert, Specializing in all Facets of the Ecommerce Platform</li>
                                                                            <li>Update the App or add the New features in if found worthy by lead</li>
                                                                            <li>Version Controlling of the plugins using GitLab/GitHub/Bitbucket/svn
                                                                            </li>
                                                                            <li>Clear Concept of Html5, Css3, JavaScript/jquery.</li>
                                                                            <li>Knowledge of PHP / MySQL development</li>
                                                                            <li>App Releases as per the platform standards</li>
                                                                            <li>Create technical specifications and test plans</li>
                                                                            <li>Knowledge in other E-commerce Platforms like Magento, Woo-commerce, Big-commerce Will Be Preferred.</li>
                                                                            <li>Develop existing Shopify apps by analyzing and identifying areas for modification</li>
                                                                            <li>Research new version of app or change in the current version of the app</li>
                                                                            <li>Strong Knowledge of Liquid Programming Language</li>
                                                                            <li>Shopify app development experience</li>
                                                                            <li>Understanding of meteor.js is a plus</li>
                                                                            <li>Develop new Shopify app for enhancing capabilities of programs</li>
                                                                            <li>The quick development of PoC/MVP for new plugins</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 1+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

                                                            }
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>


                                        <div class="personal-information mr-top-80">
                                            <h2>Personal Information</h2>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4 mb-5">
                                                    <input data-ref="careers_fullname" type="text"
                                                        class="effect-1" name="careers_fullname" placeholder=""
                                                        required><label class="required">Name</label>
                                                    <span class="focus-border personal"></span>
                                                    {{-- <!--@if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif --> --}}
                                                </div>

                                                <div class="col-md-6 col-lg-4 mb-5">
                                                    <input data-ref="careers_age" type="number" min="1" max="100" class="age effect-1"
                                                        name="careers_age" placeholder="" required><label class="required"
                                                        >Age</label>
                                                    <span class="focus-border personal"></span>
                                                </div>

                                                <div class="col-md-6 col-lg-4 mb-5">
                                                    <p class="required">Gender</p>
                                                    <input id="radio1" class="radio" name="careers_gender"
                                                        type="radio" value="Male" checked=""><label for="radio1"
                                                        class="radio-label">Male</label>
                                                    <input id="radio2" class="radio" name="careers_gender"
                                                        type="radio" value="Female"><label for="radio2"
                                                        class="radio-label">Female</label>
                                                </div>

                                                <div class="col-md-6 col-lg-4 mb-5">
                                                    <input data-ref="careers_current_location" type="text"
                                                        class="location effect-1" name="careers_current_location"
                                                        placeholder="" required><label class="required">Current
                                                        Location</label>
                                                    <span class="focus-border personal"></span>
                                                </div>

                                                <div class="col-md-6 col-lg-4 mb-5">
                                                    {{-- <input data-ref="" type="number"
                                                        class="number effect-1" name=""
                                                        placeholder="" pattern="^\d{10}$" title="Must be 10 digit Number" required> --}}
                                                        <input data-ref="" type="number" class="number effect-1"  onkeydown="javascript: return event.keyCode == 69 ? false : true" pattern="^\d{10}$" title="Must be 10 digit Number" required>
                                                        <label class="required">Contact Number</label>
                                                    <span class="focus-border personal"></span>
                                                </div>

                                                <div class="col-md-6 col-lg-4 mb-5">
                                                    <input data-ref="careers_contact_email" type="email"
                                                        class="email effect-1" name="careers_contact_email"
                                                        placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                        required><label class="required">Contact Email
                                                    </label>
                                                    <span class="focus-border personal"></span>
                                                    @if ($errors->has('email'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-md-6 col-lg-4">
                                                    <label class="required">Qualification</label>
                                                    <select data-ref="careers_qualification" class="select"
                                                        name="careers_qualification" size="1" required>
                                                        <option value=""> — Select —</option>
                                                        <option value="B.E Graduate">B.E Graduate
                                                        </option>
                                                        <option value="M. Tech">M.Tech</option>
                                                        <option value="M C A">M C A</option>
                                                        <option value="B A">B A</option>
                                                        <option value="B Com">B Com</option>
                                                        <option value="B.Sc">B.Sc</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="education-block d-inline-block mr-top-80">
                                            <h2>Education</h2>
                                            <table class="apply-table" align="left" cellpadding="0" cellspacing="0"
                                                width="100%" border="0" style="max-width:1090px;">
                                                <tbody>
                                                    <tr>
                                                        <th width="35%" align="left">Qualification
                                                        </th>
                                                        <th width="20%" align="left">Institute</th>
                                                        <th width="15%" align="left">Passing Year
                                                        </th>
                                                        <th width="15%" align="left">Score</th>
                                                        <th width="25%" align="left">Location</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="grey required" required>S.S.C. / Eq</td>
                                                        <td class="fnt"><input
                                                                data-ref="careers_educations_ssc_school" type="text"
                                                                class="full-name" name="careers_educations_ssc[]" required>
                                                        </td>
                                                        <td class="fnt"><input  pattern="\d{4}" maxlength="4" min="1"
                                                            step="1"
                                                                data-ref="careers_educations_ssc_year" type="number"
                                                                class="full-name" name="careers_educations_ssc[]" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                                                        </td>
                                                        <td class="fnt"><input
                                                                data-ref="careers_educations_ssc_percentage" type="number" step="any"
                                                                class="full-name" name="careers_educations_ssc[]" required>
                                                        </td>
                                                        <td class="fnt"><input
                                                                data-ref="careers_educations_ssc_location" type="text"
                                                                class="full-name" name="careers_educations_ssc[]" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="grey required" required>H.S.C. / Eq</td>
                                                        <td class="fnt"><input
                                                                data-ref="careers_educations_hsc_school" type="text"
                                                                class="full-name" name="careers_educations_hsc[]" required>
                                                        </td>
                                                        <td class="fnt"><input  pattern="\d{4}" maxlength="4"
                                                                data-ref="careers_educations_hsc_year" type="text"
                                                                class="full-name" name="careers_educations_hsc[]" required>
                                                        </td>
                                                        <td class="fnt"><input
                                                                data-ref="careers_educations_hsc_percentage" type="number" step="any"
                                                                class="full-name" name="careers_educations_hsc[]" required>
                                                        </td>
                                                        <td class="fnt"><input
                                                                data-ref="careers_educations_hsc_location" type="text"
                                                                class="full-name" name="careers_educations_hsc[]" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="grey">Graduation</td>
                                                        <td><input type="text" class="full-name"
                                                                name="careers_educations_graducation[]">
                                                        </td>
                                                        <td><input type="text" class="full-name"  pattern="\d{4}" maxlength="4"
                                                                name="careers_educations_graducation[]">
                                                        </td>
                                                        <td><input type="number" step="any"  class="full-name"
                                                                name="careers_educations_graducation[]">
                                                        </td>
                                                        <td><input type="text"  class="full-name"
                                                                name="careers_educations_graducation[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="grey">PG / Diploma</td>
                                                        <td><input type="text" class="full-name"
                                                                name="careers_educations_pg_diploma[]">
                                                        </td>
                                                        <td><input type="text" class="full-name"  pattern="\d{4}" maxlength="4"
                                                                name="careers_educations_pg_diploma[]">
                                                        </td>
                                                        <td><input type="number" step="any"  class="full-name"
                                                                name="careers_educations_pg_diploma[]">
                                                        </td>
                                                        <td><input type="text"  class="full-name"
                                                                name="careers_educations_pg_diploma[]">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="grey">Any other
                                                            Education or Qualification</td>
                                                        <td><input type="text" class="full-name"
                                                                name="careers_educations_other_qualification[]">
                                                        </td>
                                                        <td><input type="text" class="full-name"  pattern="\d{4}" maxlength="4"
                                                                name="careers_educations_other_qualification[]">
                                                        </td>
                                                        <td><input type="number" step="any"  class="full-name"
                                                                name="careers_educations_other_qualification[]">
                                                        </td>
                                                        <td><input type="text"  class="full-name"
                                                                name="careers_educations_other_qualification[]">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                        <div class="employment d-inline-block w-100 mr-top-80">
                                            <h2>Employment</h2>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4">
                                                    <label class="required">Years Of
                                                        Experience </label>
                                                    <select data-ref="careers_experience" name="careers_experience"
                                                        class="select" size="1" required>
                                                        <option value=""> – Select –</option>
                                                        <option value="Fresher">Fresher</option>
                                                        <option value="6 Months and above">6 Months
                                                            and above</option>
                                                        <option value="1 Year and above">1 Year and
                                                            above</option>
                                                        <option value="2 Years and above">2 Years
                                                            and above</option>
                                                        <option value="3 Years and above">3 Years
                                                            and above</option>
                                                        <option value="4 Years and above">4 Years
                                                            and above</option>
                                                        <option value="5 Years And Above">5 Years
                                                            And Above</option>
                                                        <option value="6 Years And Above">6 Years
                                                            And Above</option>
                                                        <option value="7 Years And Above">7 Years
                                                            And Above</option>
                                                        <option value="8 Years And Above">8 Years
                                                            And Above</option>
                                                        <option value="9 Years And Above">9 Years
                                                            And Above</option>
                                                        <option value="10 Years And Above">10 Years
                                                            And Above</option>
                                                    </select>
                                                </div>

                                                {{-- <div class="col-md-6 col-lg-4">
                                                    <label class="required" required>Present
                                                        Salary</label>
                                                    <input data-ref="careers_present_salary" type="text"
                                                        class="number effect-1" name="careers_present_salary"
                                                        placeholder="">

                                                    <span class="focus-border"></span>
                                                </div> --}}

                                                <div class="col-md-6 col-lg-4">
                                                    <label class="required">Present
                                                        Salary</label>
                                                    {{-- <select data-ref="careers_type_of_employment_seeking"
                                                        class="select" name="careers_type_of_employment_seeking"
                                                        required>
                                                        <option value="Part time">Part time</option>
                                                        <option selected="" value="Full time">Full
                                                            time</option>
                                                        <option value="Contract">Contract</option>
                                                        <option value="Consulting">Consulting
                                                        </option>
                                                        <option value="Freelancing">Freelancing
                                                        </option>
                                                        <option value="Night Shift">Night Shift
                                                        </option>
                                                    </select> --}}
                                                    <input data-ref="careers_present_salary"placeholder="present_salary" name="careers_present_salary" type="number" class="number effect-1" onkeypress="return event.charCode >= 48 && event.charCode <= 57" >
                                                    {{-- <input data-ref="careers_present_salary" type="number"
                                                        class="number effect-1" name="careers_present_salary"
                                                        style="padding-top: 8px !important;"
                                                        placeholder="present_salary" required> --}}
                                                </div>

                                                <div class="col-md-6 col-lg-4">
                                                    <label class="required">Type Of
                                                        Employment seeking</label>
                                                    <select required data-ref="careers_type_of_employment_seeking"
                                                        class="select" name="careers_type_of_employment_seeking">
                                                        <option value="Part time">Part time</option>
                                                        <option selected="" value="Full time">Full
                                                            time</option>
                                                        <option value="Contract">Contract</option>
                                                        <option value="Consulting">Consulting
                                                        </option>
                                                        <option value="Freelancing">Freelancing
                                                        </option>
                                                        <option value="Night Shift">Night Shift
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="skill d-inline-block mr-top-80 w-100">
                                            <h2>Skills</h2>
                                            <div class="colm-one">
                                                <textarea data-ref="careers_technical_skills" rows="1" cols="1" name="careers_technical_skills"
                                                    class="message effect-1" required></textarea>
                                                {{-- <label class="required" required>Your
                                                    Technical
                                                    Skills/Strengths</label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Technical
                                                    Skills/Strengths</p>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea rows="1" cols="1" name="careers_personal_attributes" class="message effect-1"></textarea>
                                                {{-- <label></label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Your
                                                    Personal Attributes</p>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea rows="1" cols="1" name="careers_professional_history" class="message effect-1"></textarea>
                                                {{-- <label>Professional
                                                    History, Details about projects/work
                                                    done.</label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Professional
                                                    History, Details about projects/work
                                                    done.</p>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>


                                        <div class="more-about-you d-inline-block w-100 mr-top-80">
                                            <h2>More About You</h2>
                                            <div class="colm-one">
                                                <textarea data-ref="careers_work_areas" rows="1" cols="1" name="careers_work_areas" class="message effect-1"
                                                    required></textarea>
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Describe your
                                                    Work
                                                    Areas, Roles and Responsibilities involved in
                                                    your current job</p>
                                                {{-- <label class="required">Describe your
                                                    Work
                                                    Areas, Roles and Responsibilities involved int
                                                    your current job</label> --}}
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea data-ref="careers_dislike_about_current_company" rows="1" cols="1"
                                                    name="careers_dislike_about_current_company"
                                                    class="message effect-1" required></textarea>
                                                {{-- <label class="required">What
                                                    do
                                                    you like or
                                                    dislike about the current company you work for
                                                    now?</label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    do
                                                    you like or
                                                    dislike about the current company you work for
                                                    now?</p>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea rows="1" cols="1" name="careers_coworker_describe_as_person" class="message effect-1"></textarea>
                                                {{-- <label>How
                                                    would your co-worker describe you as a
                                                    person?
                                                </label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    would your co-worker describe you as a
                                                    person?</p>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea data-ref="careers_reason_for_looking_job" rows="1" cols="1" name="careers_reason_for_looking_job"
                                                    class="message effect-1" required></textarea>
                                                {{-- <label class="required">Reason
                                                    for looking job
                                                    change with the current company.</label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Reason
                                                    for looking job
                                                    change with the current company.</p>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea rows="1" cols="1" name="careers_ready_to_work_in_night_shift" class="message effect-1"></textarea>
                                                {{-- <label>Our
                                                    clients are mostly USA / UK based, are you ready
                                                    to work in night shift, if needed?</label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Our
                                                    clients are mostly USA / UK based, are you ready
                                                    to work in night shift, if needed?</p>
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea data-ref="careers_describe_family_background" rows="1" cols="1" name="careers_describe_family_background"
                                                    class="message effect-1" required></textarea>
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    Describe
                                                    your family
                                                    background?</p>
                                                {{-- <label class="required">Describe
                                                    your family
                                                    background?</label> --}}
                                                <span class="focus-border"></span>
                                            </div>
                                            <div class="colm-one mr-top">
                                                <textarea rows="1" cols="1" name="careers_three_most_important_accomplishments" class="message effect-1"></textarea>
                                                {{-- <label>What
                                                    are the three most important accomplishments in
                                                    your life so far? <br><i>(Please complete this even
                                                        if you are a fresher.)</i></label> --}}
                                                <p class="required" style="color:rgba(138, 149, 158, 1);">
                                                    What
                                                    are the three most important accomplishments in
                                                    your life so far? <br><i>(Please complete this even
                                                        if you are a fresher.)</i></p>
                                                <span class="focus-border border_blue"></span>
                                            </div>




                                            <div class="colm-one mr-top upload-file">
                                                <p class="required">Select a Text file to
                                                    upload a Resume</p>
                                                {{-- <input type="file" name="careers_resume_file" id="file"
                                                        class="upload inputfile"> --}}

                                                <div class="main-wrapper">
                                                    <div class="row" style="align-items: center;">
                                                        <div class="col">
                                                            <div class="upload-main-wrapper">
                                                                <div class="upload-wrapper">
                                                                    <input type="file" id="upload-file"
                                                                        name="upload_file" required>
                                                                    <svg version="1.1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        preserveAspectRatio="xMidYMid meet"
                                                                        viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154"
                                                                        width="221.13" height="178.85">
                                                                        <defs>
                                                                            <path
                                                                                d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z"
                                                                                id="b1aO7LLtdW">
                                                                            </path>
                                                                            <path
                                                                                d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z"
                                                                                id="c4SXvvMdYD">
                                                                            </path>
                                                                            <path
                                                                                d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z"
                                                                                id="b11si2zUk">
                                                                            </path>
                                                                        </defs>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <use xlink:href="#b1aO7LLtdW"
                                                                                        opacity="1" fill="#ffffff"
                                                                                        fill-opacity="1">
                                                                                    </use>
                                                                                </g>
                                                                                <g>
                                                                                    <g>
                                                                                        <use xlink:href="#c4SXvvMdYD"
                                                                                            opacity="1" fill="#363535"
                                                                                            fill-opacity="1">
                                                                                        </use>
                                                                                    </g>
                                                                                    <g>
                                                                                        <use xlink:href="#b11si2zUk"
                                                                                            opacity="1" fill="#363535"
                                                                                            fill-opacity="1">
                                                                                        </use>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                    <span class="file-upload-text">Upload
                                                                        File</span>
                                                                    <div class="file-success-text">
                                                                        <svg version="1.1" id="check"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 100 100"
                                                                            xml:space="preserve">
                                                                            <circle
                                                                                style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;"
                                                                                cx="49.799" cy="49.746" r="44.757" />
                                                                            <polyline
                                                                                style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                                                                points="
                                                                                                                                                                                                    27.114,51 41.402,65.288 72.485,34.205 " />
                                                                        </svg>
                                                                        <span>Successfully</span>
                                                                    </div>
                                                                </div>
                                                                <!-- <p id="file-upload-name"></p> -->
                                                            </div>
                                                        </div>
                                                        @php
                                                            use App\Models\personal_info;
                                                            use Carbon\Carbon;
                                                            $data = [];
                                                            $localIP = getHostByName(getHostName());
                                                            $getData = count(personal_info::where('time', '>=', Carbon::now()->subMinutes(5)->toDateTimeString())->where('ip', $localIP)->get());
                                                            $data['getData'] = $getData;
                                                            $data['getItemsOneDay'] = personal_info::where('ip', $localIP)->where('time', '>=', Carbon::now()->subdays(1))->get();
                                                        @endphp
                                                        @if($getData > 2)
                                                            <div class="form-group mt-4 mb-4">
                                                                <div class="captcha">
                                                                    <span>{!! captcha_img() !!}</span>
                                                                    <button type="button" class="btn btn-danger captcha_btn" class="reload" id="reload">
                                                                        ↻
                                                                    </button>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="col">
                                                            <div class="colm-one mr-top cd-modal-action"
                                                                style="text-align:center;">
                                                                <div class="captcha-outer clearfix">
                                                                    <div class="button cd-modal-action capcha-next">
                                                                        {{-- <button type="submit" name=""
                                                                        class="btn gradient-btn" id="btn_apply">APPLY
                                                                        <span class="cd-modal-bg"></span></button>
                                                                </div> --}}
                                                                        <button type="submit" name=""
                                                                            class="btn gradient-btn"
                                                                            id="btn_apply">APPLY
                                                                            <span
                                                                                class="cd-modal-bg"></span></button>
                                                                        <div style="clear:both;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="g-recaptcha brochure__form__captcha"
                                                        data-sitekey="YOUR SITE KEY">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ult-spacer spacer-61497b8fa4465" data-id="61497b8fa4465" data-height="80"
                        data-height-mobile="80" data-height-tab="80" data-height-tab-portrait=""
                        data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="vc_row wpb_row section vc_row-fluid mpc-row" style=" text-align:left;">
    <div class=" full_section_inner clearfix">
        <div class="wpb_column vc_column_container vc_col-sm-12 mpc-column"
            data-column-id="mpc_column-8561497b8fa56bd">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper"></div>
            </div>
        </div>
    </div>
</div>
<span class="cp-load-after-post"></span>





<script>
    $(".captcha_btn").click(function(){
      $.ajax({
         type:'GET',
         url:'/reload-captcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
         }
      });
    });
    $(document).ready(function() {
        $('#upload-file').change(function() {
            var filename = $(this).val();
            $('#file-upload-name').html(filename);
            if (filename != "") {
                setTimeout(function() {
                    $('.upload-wrapper').addClass("uploaded");
                }, 600);
                setTimeout(function() {
                    $('.upload-wrapper').removeClass("uploaded");
                    $('.upload-wrapper').addClass("success");
                }, 1600);
            }
        });
        var positionId = <?php echo $positionId; ?>;
        // console.log(positionId);


        if (positionId != 1) {
            // alert("not 1");
            $("select option[value=" + positionId + "]").attr("selected", "selected");
            if (positionId == 2) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Business Analyst</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Understand project objective by going over initial requirements</li>
                                                                            <li>Identify and prepare detailed use cases, functional, non-functional and technical requirements for a given project</li>
                                                                            <li>Evaluate and derive conclusions for preparing clear project deliverables</li>
                                                                            <li>Liaison with technical, functional and business development team
                                                                            </li>
                                                                            <li>Excellent communication and presentation skills</li>
                                                                            <li>Excellent analytical skills</li>
                                                                            <li>Excellent Communication skill</li>
                                                                            <li>Requirement Elicitation - Work with clients directly for requirement gathering sessions</li>
                                                                            <li>Evaluate, measure and recommend enhancements to the solution for added-value</li>
                                                                            <li>Requirement Prioritization</li>
                                                                            <li>Create functional clickable wire frames</li>
                                                                            <li>Prepare detailed Software Requirement Specification (SRS) documents</li>
                                                                            <li>Stay up-to-date with latest technologies and trends and off-the-shelf solutions</li>
                                                                            <li>Expert in MS office, Wire framing tools such as Axure, Omnigraffle, Visio etc.</li>
                                                                            <li>Basic understanding of different industries</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2 to 4 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span> Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 3) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Dot Net MVC Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Strong knowledge of Asp.NET web framework</li>
                                                                            <li>Good knowledge in JavaScript, HTML5, CSS and ReactJS</li>
                                                                            <li>Knack for writing clean, readable, and easily maintainable code</li>
                                                                            <li>Good knowledge in developing web application using MVC, C# and .Net Framework.
                                                                            </li>
                                                                            <li>Basic Knowledge in SQL Server and Entity Framework</li>
                                                                            <li>Expert in jQuery</li>
                                                                            <li>Exposure to Web Api/ WCF</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Computer Engineering, Computer Science or related IT field</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 4) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Full Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Design, build, and maintain efficient, reusable, and reliable code</li>
                                                                            <li>Help maintain code quality, organization, and automatization</li>
                                                                            <li>Must have knowledge in 1- Javascript Object, 2- Closure, 3- Callback, 4- Promises, 6- Scopes javascript, 7-prototype</li>
                                                                            <li>Should have worked on .Net framework 4 or greater
                                                                            </li>
                                                                            <li>Familiarity with Visual Studio 2017 & Microsoft SQL Server 2017</li>
                                                                            <li>Integrate data storage solutions using SQL Server</li>
                                                                            <li>Identify bottlenecks and bugs, and devise solutions to mitigate and address these issues</li>
                                                                            <li>Good skill in core Javascript with ES5 (ECMA 5) specification.</li>
                                                                            <li>Strong understanding of Object-Oriented Programming</li>
                                                                            <li>Strong knowledge of .NET web framework</li>
                                                                            <li>Proficient in C# and VB.NET, with a good knowledge of their ecosystems</li>
                                                                            <li>Knowledge of any JavaScript front end technologies like Angular</li>
                                                                            <li>Familiar with various design and architectural patterns</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 7+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 5) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>iOS with Flutter Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Ensure the performance, quality, and responsiveness of applications</li>
                                                                            <li>Identify and correct bottlenecks and fix bugs</li>
                                                                            <li>Continuously discover, evaluate, and implement new technologies to maximize development efficiency</li>
                                                                            <li>Collaborating with cross-functional teams to define, design, and ship new features.
                                                                            </li>
                                                                            <li>Unit-testing code for robustness, including edge cases, usability, and general reliability.</li>
                                                                            <li>Augmented Reality - ARKit, ARCore, Vuforia, etc</li>
                                                                            <li>IOT Health Kit Vision Kit Machine learning Video, Audio, Image processing (Core Graphics)</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 6) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Laravel Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have good knowledge of OOPS Concepts</li>
                                                                            <li>Demonstrable knowledge of web technologies including HTML, CSS, Javascript, AJAX etc</li>
                                                                            <li>Understanding of MVC design patterns, Strong knowledge of PHP web frameworks ( Laravel, CI, Zend )</li>
                                                                            <li>Should have excellent communication skills
                                                                            </li>
                                                                            <li>Should have strong knowledge of Core PHP, Jquery and JavaScript.</li>
                                                                            <li>Good knowledge of relational databases, developing web services and version control tools</li>
                                                                            <li>Familiarity with NoSQL databases</li>
                                                                            <li>Should be agile and quick problem solver</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3 to 5 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  BE/ B.TECH/B.SC/ME/M.SC/M.TECh</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 7) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Magento Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Demonstrable knowledge of XML, XHTML, CSS, Modules i.e. API integration, Payment Gateways, XML with a focus on standards.</li>
                                                                            <li>Focused on Object Oriented Programming (OOP)</li>
                                                                            <li>Extensive experience of PHP 5+ and MySQL.</li>
                                                                            <li>Exposure on Magento, CMS, CodeIgnitor, OpenCart, JavaScript/ jQuery.
                                                                            </li>
                                                                            <li>Having knowledge on LAMP, Version Controll(GIT, SVN), Hosting</li>
                                                                            <li>wo or more published website in E commerce.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2 to 5 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 8) {

                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Mern Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on MongoDB, React Js, Express Js, Node JS and MySQL</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code. Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Must have 1.5 Yrs experience in NodeJS & React development.</li>
                                                                            <li>Excellent teamwork skills, Good Communication skill
                                                                            </li>
                                                                            <li>Skills: Primary: NodeJS, MySql, MongoDB, Angular 4+, ES6, Express Js, React JS & React Native</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 9) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>React Native Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill in ReactNative, ReactJS, ES6 (Latest version of JS)</li>
                                                                            <li>Must have knowledge in linking 3rd party module in ReactNative.</li>
                                                                            <li>Additional skill: TypeScript, Webpack, Git and terminal usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.
                                                                            </li>
                                                                            <li>Must have knowledge of building UI in ReactNative, CSS3.</li>
                                                                            <li>Must be working in the ReactNative for at least 1-1.5 years.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 10) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>ReactJs Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Strong proficiency in JavaScript, including DOM manipulation and the JavaScript object model.</li>
                                                                            <li>Ability to understand business requirements and translate them into technical requirements</li>
                                                                            <li>Familiarity with code versioning tools such as Git, SVN, and Mercurial.</li>
                                                                            <li>Familiarity with modern front-end build pipelines and tools
                                                                            </li>
                                                                            <li>Thorough understanding of ReactJS and its core principles.</li>
                                                                            <li>Familiarity with RESTful APIs</li>
                                                                            <li>Experience with Core web fundamentals: HTML, JavaScript, and CSS like Sass or LESS</li>
                                                                            <li>Experience with common front-end development tools such as Babel, Webpack, NPM, etc.</li>
                                                                            <li>Knowledge of modern authorisation mechanisms, such as JSON Web Token</li>
                                                                            <li>Experience with popular ReactJS workflows (such as Flux or Redux)</li>
                                                                            <li>Familiarity with newer specifications of EcmaScript</li>
                                                                            <li>Familiarity with NextJs framework.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 1 to 7 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 11) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Laravel Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Should have strong knowledge of Core PHP, Jquery and JavaScript.</li>
                                                                            <li>Good knowledge of relational databases, developing web services and version control tools</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code</li>
                                                                            <li>Excellent teamwork skills
                                                                            </li>
                                                                            <li>Knowledge of mean stack will preferable</li>
                                                                            <li>Must have good knowledge of OOPS Concepts</li>
                                                                            <li>Good understanding of MVC design patterns, Strong knowledge of PHP web frameworks ( Laravel )</li>
                                                                            <li>Demonstrable knowledge of web technologies including HTML, CSS, Javascript, AJAX etc</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves</li>
                                                                            <li>Should be an agile and quick problem solver</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 6+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 12) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. QA Engineer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Experience in Automation Testing + Javascript</li>
                                                                            <li>Experience in Nightwatch.JS would be an added advantage.</li>
                                                                            <li>Can provide best practices and guidance to the junior members of the team.</li>
                                                                            <li>Exposure to any automated testing tool in Testing ( like Selenium or any other )
                                                                            </li>
                                                                            <li>Expertise in creating tests using different test automation solutions, Architecting Test Automation Framework</li>
                                                                            <li>Experience in Testim.IO.would be an added advantage</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 7+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 13) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>WordPress Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>A fair understanding of the fundamentals and concepts of OOPS and PHP.</li>
                                                                            <li>Work on WordPress integration with external systems, viz CRM/ERP/Payment/Shipping, etc.</li>
                                                                            <li>Analyze, debug, and test code.</li>
                                                                            <li>Must be a self-starter & be able to work with minimum supervision.
                                                                            </li>
                                                                            <li>Knowledge of Woo commerce customization and development.</li>
                                                                            <li>Ability to develop and manage WordPress websites, web applications.</li>
                                                                            <li>Knowledge of Custom WordPress plugin development, And Theme Customization.</li>
                                                                            <li>Write well-engineered source code that complies with accepted web standards.</li>
                                                                            <li>Participate in project & deployment planning.</li>
                                                                            <li>Good Communication will be required.</li>
                                                                            <li>Knowledge of Dokan Multivendor plugin customization and development.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 14) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. UI/UX Designer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>4+ years of design experience</li>
                                                                            <li>Should have knowledge of working in Sketch App or Adobe Photoshop.</li>
                                                                            <li>Preferred if you have basic knowledge of at least one animation software (Principle, Flinto, Framer, After Effects or any others )</li>
                                                                            <li>Ability to create clean, clutter-free, brand-consistent designs.
                                                                            </li>
                                                                            <li>Understanding of standard user interface design concepts and processes.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 15) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Project Manager</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have proven leadership abilities, strong interpersonal skills, and excellent verbal and written communication skills.</li>
                                                                            <li>The ability to successfully execute projects in an onshore/offshore resource model.</li>
                                                                            <li>A proven track record of successful project implementation of IT applications.</li>
                                                                            <li>Previous experience of software selection and vendor scoring.
                                                                            </li>
                                                                            <li>Proficient in Project Management Softwares.</li>
                                                                            <li>Experienced in project management process, tools and techniques. PMI certification is preferred.</li>
                                                                            <li>Bachelor Degree or equivalent. BE Computer, IT or MCA candidates will be preferred.</li>
                                                                            <li>The ability to foster motivation within the project team to meet tight deadlines.</li>
                                                                            <li>Strong professional skills, including prioritization and workload balancing.</li>
                                                                            <li>Stakeholder management and proven ability to gain consensus.</li>

                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 16) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Mean Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on NodeJS, Angular 2.x or more, MySQL, MongoDB and ES6 [ latest version of JS specification ]</li>
                                                                            <li>Additional skill: ReactJS, TypeScript, Git and terminal Usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves./li>
                                                                            <li>Must have at least 2 Yrs experience in MEAN Stack development.
                                                                            </li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 17) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Mean Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on NodeJS, Angular 2.x or more, MySQL, MongoDB and ES6 ( latest version of JS specification )</li>
                                                                            <li>Additional skill: ReactJS, TypeScript, Git and terminal Usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.</li>
                                                                            <li>Must have at least 4 to 6 Yrs experience in MEAN Stack development.
                                                                            </li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4 to 6 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 18) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Mern Stack Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on MongoDB, React Js, Express Js, Node JS and MySQL</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code. Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Must have 1.5 Yrs experience in NodeJS & React development.</li>
                                                                            <li>Excellent teamwork skills, Good Communication skill
                                                                            </li>
                                                                            <li>Skills: Primary: NodeJS, MySql, MongoDB, Angular 4+, ES6, Express Js, React JS & React Native</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 19) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. ReactJs Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Strong proficiency in JavaScript, including DOM manipulation and the JavaScript object model.</li>
                                                                            <li>Ability to understand business requirements and translate them into technical requirements</li>
                                                                            <li>Familiarity with code versioning tools (such as Git, SVN, and Mercurial)</li>
                                                                            <li>Familiarity with modern front-end build pipelines and tools
                                                                            </li>
                                                                            <li>Thorough understanding of ReactJS and its core principles.</li>
                                                                            <li>Familiarity with RESTful APIs</li>
                                                                            <li>Experience with Core web fundamentals: HTML, JavaScript, and CSS like Sass or LESS</li>
                                                                            <li>Experience with common front-end development tools such as Babel, Webpack, NPM, etc.</li>
                                                                            <li>Knowledge of modern authorisation mechanisms, such as JSON Web Token</li>
                                                                            <li>Experience with popular ReactJS workflows (such as Flux or Redux)</li>
                                                                            <li>Familiarity with newer specifications of EcmaScript</li>
                                                                            <li>Familiarity with NextJs framework.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 20) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>AngularJS Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill on Angular 2.x or more, ES6 (latest version of JS specification) and TypeScript</li>
                                                                            <li>Should have experience of working on the new module of the existing project</li>
                                                                            <li>Must have worked on more than 4 Angular complex Projects.</li>
                                                                            <li>Additional skill: Ionic 2, NodeJS basic.
                                                                            </li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3 to 5 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 21) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. React Native Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill in ReactNative, ReactJS, ES6 (Latest version of JS)</li>
                                                                            <li>Must have knowledge in linking 3rd party module in ReactNative.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.
                                                                            </li>
                                                                            <li>Must have knowledge of building UI in ReactNative, CSS3.</li>
                                                                            <li>Must be working in the ReactNative for at least 6+ years.</li>
                                                                            <li>Additional skill: TypeScript, Webpack, Git and terminal usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.</li>

                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 22) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>QA Automation (Appium + Selenium)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>3+ Years of hands-on Experience on Automation with strong knowledge of OOPs</li>
                                                                            <li>Extensive experience in automating RESTful and SOAP services</li>
                                                                            <li>Desired experience in Mobile Automation or exposure to Mobile testing</li>
                                                                            <li>Advanced understanding of source code repositories and branching and merging strategies like GitHub, Bitbucket etc...
                                                                            </li>
                                                                            <li>Hands on experience in implementing Page Object Framework and Cucumber</li>
                                                                            <li>Excellent programming skills with Core Java Selenium Web driver, JUnit or TestNG, Maven or ANT</li>
                                                                            <li>Basic knowledge of SQL and/or any RDBMS</li>
                                                                            <li>Strong knowledge of build/deployment automation and continuous integration highly desirable.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 23) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>DotNET Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Excellent experience in ASP.NET, Latest MVC, C#.NET, Web API, LINQ, AngularJS, AJAX, JQuery, JavaScript & Responsive Website Development.</li>
                                                                            <li>Latest AngularJS, Ajax & Controls, XAML, XML</li>
                                                                            <li>Good knowledge of various design and architectural patterns</li>
                                                                            <li>Excellent Experience in SQL Server Development.
                                                                            </li>
                                                                            <li>Strong on object-oriented programming</li>
                                                                            <li>Good knowledge of Entity Framework and development</li>
                                                                            <li>Programming Analytical Skills</li>
                                                                            <li>Understanding fundamental design principles behind a scalable application</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 3+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 24) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Drupal Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>A fair understanding of fundamentals and concepts of Drupal 7 and 8, PHP, and Zend, JavaScript/ jQuery, PHP 5+ and MySQL.</li>
                                                                            <li>Work on Drupal integration with external systems, viz CRM/ERP/Payment/Shipping etc.</li>
                                                                            <li>Write well-engineered source code that complies with accepted web standards.</li>
                                                                            <li>Must be a self-starter & be able to work with minimum supervision.
                                                                            </li>
                                                                            <li>Participate in project & deployment planning.</li>
                                                                            <li>Analyze, debug, and test code.</li>
                                                                            <li>Good knowledge of XML, XHTML, CSS, Modules i.e. API integration, Payment Gateways, XML with a focus on standards.</li>
                                                                            <li>Knowledge of Custom Drupal module development, And Theme Customization.</li>
                                                                            <li>Ability to develop and manage Drupal websites, web applications.</li>
                                                                            <li>Having knowledge of LAMP, Version Control(GIT, SVN), Hosting</li>
                                                                            <li>Good experience with PHP 5+ and MySQL</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 25) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>DevOps</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good exposure to cloud platforms such as AWS, Google Cloud, Azure, Digital Ocean, etc.e</li>
                                                                            <li>Must have knowledge of at least one scripting language (Shell Scripting / Python)</li>
                                                                            <li>Must be working in DevOps tools for at least 1-1.5 years.</li>
                                                                            <li>Must have knowledge of Linux Commands.
                                                                            </li>
                                                                            <li>Must have knowledge about databases such as MySQL / PostgreSQL / MongoDB</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.</li>
                                                                            <li>Must have basic System Administration Skills (Knowledge of basic server setup, tools installation, DNS management, etc)</li>
                                                                            <li>Must have knowledge and experience of at least one CI/CD Platform (Jenkins / GitLab / TeamCity / AWS Code Deploy / Azure DevOps)</li>
                                                                            <li>Must have knowledge of Docker and Kubernetes</li>
                                                                            <li>Must have good knowledge of working on Git.</li>
                                                                            <li>Cloud Certifications would be an added advantage.</li>
                                                                            <li>Must be passionate about learning new tools/technologies.</li>
                                                                            <li>Excellent communication and teamwork skills.</li>
                                                                            <li>Knowledge about anyone programming language such as NodeJS, Python, Java would be an added advantage.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 6+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 26) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Python Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Designing and creating RESTful APIs for internal and partner consumption</li>
                                                                            <li>Participating in architectural, design and product discussions</li>
                                                                            <li>Solid database skills in a relational database (i.e. PostgresSQL, MySQL, etc.)</li>
                                                                            <li>Develop Django + Javascript applications
                                                                            </li>
                                                                            <li>2+ years hands on experience with the Django framework</li>
                                                                            <li>Knowledge of how to build and use with RESTful APIs</li>
                                                                            <li>Experience deploying Python applications into production</li>
                                                                            <li>Knowledge of AWS S3 file storage.</li>
                                                                            <li>Develop cloud-based Python Django, Flask software products</li>
                                                                            <li>1+ years' experience developing Javascript applications into production</li>
                                                                            <li>Working in an agile environment with an excellent team of engineers</li>
                                                                            <li>Working closely with UX and Front-end Developers</li>
                                                                            <li>2+ years' experience of Python coding skills</li>
                                                                            <li>Strong understanding of the Javascript framework</li>
                                                                            <li>Strong knowledge of version control (i.e. git, svn, etc.)</li>
                                                                            <li>Amazon Web Services (AWS) infrastructure knowledge is a plus</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 27) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Sr. Python Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Designing and creating RESTful APIs for internal and partner consumption</li>
                                                                            <li>Participating in architectural, design and product discussions</li>
                                                                            <li>Solid database skills in a relational database (i.e. PostgresSQL, MySQL, etc.)</li>
                                                                            <li>Develop Django + Javascript applications
                                                                            </li>
                                                                            <li>2+ years hands on experience with the Django framework</li>
                                                                            <li>Knowledge of how to build and use with RESTful APIs</li>
                                                                            <li>Experience deploying Python applications into production</li>
                                                                            <li>Knowledge of AWS S3 file storage.</li>
                                                                            <li>Develop cloud-based Python Django, Flask software products</li>
                                                                            <li>1+ years' experience developing Javascript applications into production</li>
                                                                            <li>Working in an agile environment with an excellent team of engineers</li>
                                                                            <li>Working closely with UX and Front-end Developers</li>
                                                                            <li>2+ years' experience of Python coding skills</li>
                                                                            <li>Strong understanding of the Javascript framework</li>
                                                                            <li>Strong knowledge of version control (i.e. git, svn, etc.)</li>
                                                                            <li>Amazon Web Services (AWS) infrastructure knowledge is a plus</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4 to 6 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 28) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>Tech Lead (Python)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Designing and creating RESTful APIs for internal and partner consumption</li>
                                                                            <li>Participating in architectural, design and product discussions</li>
                                                                            <li>Solid database skills in a relational database (i.e. PostgresSQL, MySQL, etc.)</li>
                                                                            <li>Develop Django + Javascript applications
                                                                            </li>
                                                                            <li>2+ years hands on experience with the Django framework</li>
                                                                            <li>Knowledge of how to build and use with RESTful APIs</li>
                                                                            <li>Experience deploying Python applications into production</li>
                                                                            <li>Knowledge of AWS S3 file storage.</li>
                                                                            <li>Develop cloud-based Python Django, Flask software products</li>
                                                                            <li>1+ years' experience developing Javascript applications into production</li>
                                                                            <li>Working in an agile environment with an excellent team of engineers</li>
                                                                            <li>Working closely with UX and Front-end Developers</li>
                                                                            <li>2+ years' experience of Python coding skills</li>
                                                                            <li>Strong understanding of the Javascript framework</li>
                                                                            <li>Strong knowledge of version control (i.e. git, svn, etc.)</li>
                                                                            <li>Amazon Web Services (AWS) infrastructure knowledge is a plus</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4 to 8 Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 29) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>React Native (Tech Lead)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Good skill in ReactNative, ReactJS, ES6 (Latest version of JS)</li>
                                                                            <li>Must have knowledge in linking 3rd party module in ReactNative.</li>
                                                                            <li>Additional skill: TypeScript, Webpack, Git and terminal usage.</li>
                                                                            <li>Self-starter with the ability to cope with sharp learning curves.
                                                                            </li>
                                                                            <li>Must have knowledge of building UI in ReactNative, CSS3.</li>
                                                                            <li>Must be working in the ReactNative for at least 7.5+ years.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.</li>
                                                                            <li>Excellent Communication and teamwork skills.</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 7.5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 30) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>JavaScript Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have 4+ year experience in core Javascript and JQuery.</li>
                                                                            <li>Having an experience in AngularJS is an advantage.</li>
                                                                            <li>Must have knowledge in site optimization.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.
                                                                            </li>
                                                                            <li>Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Excellent teamwork skills</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 4+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 31) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                        <h1>Sr. JavaScript Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have 6+ year experience in core Javascript and JQuery.</li>
                                                                            <li>Having an experience in AngularJS is an advantage.</li>
                                                                            <li>Must have knowledge in site optimization.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.
                                                                            </li>
                                                                            <li>Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Excellent teamwork skills</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 6+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 32) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>JavaScript (Tech Lead)</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Must have 8+ year experience in core Javascript and JQuery.</li>
                                                                            <li>Having an experience in AngularJS is an advantage.</li>
                                                                            <li>Must have knowledge in site optimization.</li>
                                                                            <li>Must be passionate about writing clean, efficient, and maintainable code.
                                                                            </li>
                                                                            <li>Self-starter with ability cope with sharp learning curves.</li>
                                                                            <li>Excellent teamwork skills</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 8+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 33) {
                $("#careers-detail-box")
                    .html(`<div class="detail-title">
                                                                        <h1>VueJS Developer</h1>
                                                                        <p>Surat</p>
                                                                    </div>
                                                                    <div class="career-detail">
                                                                        <ul>
                                                                            <li>Highly proficient with Vue.js framework and its core principles such as components, reactivity, and the virtual DOM</li>
                                                                            <li>Having backend knowledge of NodeJS, eventloop, REST API creation.</li>
                                                                            <li>Good understanding of HTML5 and CSS3, including Sass or Less</li>
                                                                            <li>Experience with both consuming and designing RESTful APIs
                                                                            </li>
                                                                            <li>Highly proficient with the JavaScript language and its modern ES6+ syntax and features</li>
                                                                            <li>Familiarity with the Vue.js ecosystem, including Vue CLI, Vuex, Vue Router, and Nuxt.js</li>
                                                                            <li>Expartize in Relational database (MySQL, PostgreSQL) and NoSQL database (MongoDB)</li>
                                                                            <li>Understanding of server-side rendering and its benefits</li>
                                                                            <li>Proficiency with modern development tools, like Babel, Webpack, and Git</li>
                                                                            <li>Good Communication and presentation skill</li>
                                                                        </ul>
                                                                        <div class="exp-detail">
                                                                            <div class="left">
                                                                                <p><span>Experience:</span> 2.5+ Years</p>
                                                                            </div>
                                                                            <div class="right">
                                                                                <p><span>Qualification:</span>  Any</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>`);

            } else if (positionId == 34) {
                $("#careers-detail-box").html(`<div class="detail-title">
                    <h1>Shopify (Backend)</h1>
                    <p>Surat</p>
                </div>
                <div class="career-detail">
                    <ul>
                        <li>Must have an understanding of Shopify eCommerce framework and order, product, discount APIs</li>
                        <li>Act as Shopify Expert, Specializing in all Facets of the Ecommerce Platform</li>
                        <li>Update the App or add the New features in if found worthy by lead</li>
                        <li>Version Controlling of the plugins using GitLab/GitHub/Bitbucket/svn
                        </li>
                        <li>Clear Concept of Html5, Css3, JavaScript/jquery.</li>
                        <li>Knowledge of PHP / MySQL development</li>
                        <li>App Releases as per the platform standards</li>
                        <li>Create technical specifications and test plans</li>
                        <li>Knowledge in other E-commerce Platforms like Magento, Woo-commerce, Big-commerce Will Be Preferred.</li>
                        <li>Develop existing Shopify apps by analyzing and identifying areas for modification</li>
                        <li>Research new version of app or change in the current version of the app</li>
                        <li>Strong Knowledge of Liquid Programming Language</li>
                        <li>Shopify app development experience</li>
                        <li>Understanding of meteor.js is a plus</li>
                        <li>Develop new Shopify app for enhancing capabilities of programs</li>
                        <li>The quick development of PoC/MVP for new plugins</li>
                    </ul>
                    <div class="exp-detail">
                        <div class="left">
                            <p><span>Experience:</span> 1+ Years</p>
                        </div>
                        <div class="right">
                            <p><span>Qualification:</span>  Any</p>
                        </div>
                    </div>
                </div>`);

            }
        } else {
            $("#careers-detail-box")
                .html(`<div class="detail-title">
                <h1>Android Developer</h1>
                <p>Surat</p>
            </div>
            <div class="career-detail">
                <ul>
                    <li>Good skill on MongoDB, React Js, Express Js, Node JS
                        and MySQL</li>
                    <li>Must have 1.5 Yrs experience in NodeJS &amp; React
                        development.</li>
                    <li>Must be passionate about writing clean, efficient,
                        and maintainable code. Self-starter with ability
                        cope with sharp learning curves.</li>
                    <li>Excellent teamwork skills, Good Communication skill
                    </li>
                    <li>Skills: Primary: NodeJS, MySql, MongoDB, Angular 4+,
                        ES6, Express Js, React JS &amp; React Native</li>
                </ul>
                <div class="exp-detail">
                    <div class="left">
                        <p><span>Experience:</span> 3+ Years</p>
                    </div>
                    <div class="right">
                        <p><span>Qualification:</span> Any</p>
                    </div>
                </div>
            </div>`);

        }
    });


    $("#btn_apply").click(function() {

        var conceptText = $('#dynamic_select').find(":selected").text();
        $('#android').val(conceptText);




    });
</script>
