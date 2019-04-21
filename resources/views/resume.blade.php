<!doctype html>
—
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Application style sheets -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="main-wrapper" id="app">
    <div class="container">
        <article class="mx-auto theme-bg-light p-5">
            <div class="resume-header">
                <div class="row align-items-center">
                    <div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
                        <h2 class="resume-name mb-0 text-uppercase">Todd Austin</h2>
                        <div class="resume-tagline mb-3 mb-md-0">Software Engineer</div>
                    </div>
                    <div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="fas fa-phone fa-fw fa-lg mr-2 "></i>612.309.8724
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-envelope fa-fw fa-lg mr-2"></i>austin.todd.j@gmail.com
                            </li>
                            <li class="mb-0">
                                <i class="fas fa-map-marker-alt fa-fw fa-lg mr-2"></i>Georgetown, TX
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="resume-intro py-3">
                <div class="media flex-column flex-md-row align-items-center">
                    <img class="resume-profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 mx-auto"
                         style="-webkit-border-radius: 500px;-moz-border-radius: 500px;border-radius: 500px;"
                         src="{{ sprintf('https://secure.gravatar.com/avatar/%s?s=500', md5(strtolower(trim('austin.todd.j@gmail.com')))) }}"
                         alt="image">
                    <div class="media-body text-left">
                        <p class="mb-0">
                            Self-taught, energetic, and ambitious problem solver who is eager to work alongside other
                            talented IT professionals in creating web applications to the very highest standards. Highly
                            creative and versatile PHP developer with technical expertise in all elements of a LAMP/LEMP
                            stack. Proficient at managing time spread across numerous projects and tasks simultaneously.
                            Building applications in an Agile environment with proper stress testing and code coverage
                            is where I feel most at home. Learning is something I deeply value, web development is
                            something I am deeply passionate about.
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="resume-body">
                <div class="row">
                    <div class="resume-main col-12 col-lg-8 col-xl-9 pr-0 pr-lg-5">
                        <section class="work-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Work Experience</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0">Software Engineer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-4 text-muted text-left text-md-right">
                                        Text2Drive | 2018 - Present
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Developed and maintained the Laravel-based API to support the Text2Drive
                                        platform. Built a 'lite' version of DocuSign in Laravel and VueJS to enable
                                        dealerships to maintain GDPR compliance with their customers.
                                    </p>
                                </div>
                            </div>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Web Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        Robert Half Technology | 2017 - 2018
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Finished three contracts which included maintaining a Yii application for the
                                        Starwood Hotels rewards dashboard as well as bringing the United Health Care
                                        Baby Blocks site up to modern web accessibility standards.
                                    </p>
                                </div>
                            </div>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Web Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        Infinity Direct | 2015 - 2017
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Developed and maintained client sites in WordPress and Laravel.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Web Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        Homes for Heroes | 2014 - 2015
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Managed the hand-off of the Drupal 7/CakePHP site from a vendor agency and
                                        re-built the application in Laravel with test driven development. Created a
                                        custom CRM to support the non-profit foundation owned and operated by the
                                        business.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Web Developer</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        North Central University | 2013 - 2014
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Maintained the University website built in Drupal 6, handled faculty feature
                                        requests and facilitated 3rd party development with local agencies.
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Recent Projects</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Canvas</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        cnvs.io
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        A Laravel publishing platform. Canvas is a fully open source package to extend
                                        your application and get you up-and-running with a blog in just a few minutes.
                                        In addition to a distraction-free writing experience, you can view monthly
                                        trends on your content, get insights into reader traffic and more!
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Apple Pie
                                        Fundraiser</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        ocsapplepies.com
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p>
                                        Built to support a private school with their annual fundraiser. Integrating
                                        Stripe into the checkout process was crucial for giving customers a simple way
                                        to interact and pay. A custom CRM enables school administrators to process
                                        payments, run reports and facilitate the mass-pickup day.
                                    </p>

                                </div>
                            </div>
                        </section>
                        <section class="project-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Open Source Contributions</h3>
                            <div class="item mb-3">
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Laravel Framework</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        Pull Request #23191
                                    </div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Laravel Horizon</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        Pull Request #396
                                    </div>
                                </div>
                                <div class="item-heading row align-items-center mb-2">
                                    <h4 class="item-title col-12 col-md-6 col-lg-6 mb-2 mb-md-0">Laravel Docs</h4>
                                    <div class="item-meta col-12 col-md-6 col-lg-6 text-muted text-left text-md-right">
                                        Pull Request #3551
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
                        <section class="skills-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Skills</h3>
                            <div class="item">
                                <h4 class="item-title">High Proficiency</h4>
                                <ul class="list-unstyled resume-skills-list">
                                    <li class="mb-2">macOS, Ubuntu Linux</li>
                                    <li class="mb-2">PHP/MySQL</li>
                                    <li class="mb-2">HTML5/CSS3</li>
                                    <li class="mb-2">Laravel, Yii, WordPress, Drupal
                                    <li>
                                    <li class="mb-2">WCAG 2.0 and Section 508 web accessibility
                                    <li>
                                    <li class="mb-2">Valet, Homestead, Vagrant, Virtual Box</li>
                                    <li class="mb-2">BuildMaster, Forge, DeployBot</li>
                                    <li>Adobe Creative Cloud, Atlassian Suite, Stripe, Authorize.net, Codeship,
                                        TravisCI
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <h4 class="item-title">Average Proficiency</h4>
                                <ul class="list-unstyled resume-skills-list">
                                    <li class="mb-2">Windows</li>
                                    <li class="mb-2">JavaScript</li>
                                    <li class="mb-2">VueJS, NextJS</li>
                                    <li class="mb-2">Shell scripting</li>
                                    <li class="mb-2">PHPUnit, Selenium, Behat, PhantomJS
                                    <li>
                                    <li class="mb-2">SQLServer, Redis</li>
                                    <li class="mb-2">Interface Design, Community Development</li>
                                    <li>Apache, Nginx, Content Delivery Networks</li>
                                </ul>
                            </div>
                        </section>
                        <section class="education-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Education</h3>
                            <ul class="list-unstyled resume-education-list">
                                <li class="mb-3">
                                    <div class="resume-degree font-weight-bold">Business Administration, B.A.</div>
                                    <div class="resume-degree-org text-muted">North Central University</div>
                                    <div class="resume-degree-time text-muted">December 2012</div>
                                </li>
                            </ul>
                        </section>
                        <section class="education-section py-3">
                            <h3 class="text-uppercase resume-section-heading mb-4">Speaking</h3>
                            <ul class="list-unstyled resume-awards-list">
                                <li class="mb-3">
                                    <div class="font-weight-bold">MN PHP User Group</div>
                                    <div class="text-muted">Canvas - How to open source your own project</div>
                                    <div class="resume-degree-time text-muted">speakerdeck.com/austintoddj/canvas</div>
                                </li>
                            </ul>
                        </section>
                    </aside>
                </div>
            </div>
            <hr>
            <div class="resume-footer text-center">
                <ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
                    <li class="list-inline-item mb-lg-0 mr-3">
                        <i class="fab fa-github fa-2x mr-2 align-middle" data-fa-transform="down-4"></i>
                        <span class="d-none d-lg-inline-block text-muted">github.com/austintoddj</span>
                    </li>
                    <li class="list-inline-item mb-lg-0 mr-3">
                        <i class="fab fa-linkedin fa-2x mr-2 align-middle" data-fa-transform="down-4"></i>
                        <span class="d-none d-lg-inline-block text-muted">linkedin.com/in/austintoddj</span>
                    </li>
                    <li class="list-inline-item mb-lg-0 mr-lg-3">
                        <i class="fab fa-twitter fa-2x mr-2 align-middle" data-fa-transform="down-4"></i>
                        <span class="d-none d-lg-inline-block text-muted">@austintoddj</span></li>
                </ul>
            </div>
        </article>
    </div>
</div>

<!-- Application scripts -->
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
