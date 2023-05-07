@extends('layouts.layout')

<head>
    <title> KTVM - Koninklijke Tielse Vrijwillige Muziekvereniging</title>
</head>

@section('content')
    <div data-aos="zoom-in-up" class="container d-flex align-items-center justify-content-center"
        style="margin-top: 10vh; margin-bottom:100px; max-width:100vw">
        <div class="row justify-content-center py-5">
            <div class="col-lg-1 d-none d-lg-flex align-items-center">
                <div class="lc-block d-flex" style="writing-mode: vertical-rl; transform:rotate(180deg)">
                    <a class="btn btn-link my-2 text-dark text-decoration-none" href="#" role="button">Facebook</a>
                    <a class="btn btn-link my-4 text-dark text-decoration-none" href="#" role="button">Instagram</a>
                    <a class="btn btn-link my-2 text-dark text-decoration-none" href="#" role="button">Youtube</a>
                </div>
            </div>
            <div class="col-sm-6 d-flex d-lg-none flex-sm-column align-items-center justify-content-around mb-4 mb-sm-0">
                <div class="lc-block">
                    <a class="btn btn-link text-dark text-decoration-none" href="#" role="button">Facebook</a>
                </div>
                <div class="lc-block">
                    <a class="btn btn-link text-dark text-decoration-none" href="#" role="button">Instagram</a>
                </div>
                <div class="lc-block">
                    <a class="btn btn-link text-dark text-decoration-none" href="#" role="button">Youtube</a>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div data-aos="fade-up" class="position-relative">
                    <div class="lc-block position-absolute top-0 start-0 w-100 h-100 bg-danger opacity-50 mt-4 ms-4"
                        style="margin-left:-35px;"> </div>

                    <img class="position-relative img-fluid" src="/assets/imgs/hero_image.jpg"
                        sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080" alt="KTVM">
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="lc-block my-5">
                    <a href="#" id="newLink" style="text-decoration: none">
                        <span class="alert alert-success rounded-pill px-3 py-1 font-weight-light">Wat is er nieuw?
                            &rarr;</span>
                    </a>
                    <div editable="rich" style="margin-top:10px;">
                        <h2 class="rfs-23">Koninklijke Tielse Vrijwillige Muziekvereniging</h2>
                    </div>
                </div>
                <div class="lc-block my-5">
                    <div editable="rich">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada
                            placerat sit amet quis.</p>
                    </div>
                </div><!-- /lc-block -->
                <!-- voeg deze code toe -->
                <div class="lc-block card card-body border-0 bg-white rounded shadow my-5">
                    <div class="row align-items-center text-center g-3">
                        <div class="lc-block col-lg-2 text-lg-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" fill="currentColor"
                                class="bg-light p-3" viewBox="0 0 16 16" lc-helper="svg-icon">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                </path>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                        </div><!-- /lc-block -->
                        <div class="lc-block col-lg-6">
                            <div editable="rich">
                                <p><strong>29 April</strong>: Agnietenhof, Tiel</p>
                                <p><strong>Sat – Sun</strong>: 9:00 am – 20:00 pm </p>
                            </div>
                        </div><!-- /lc-block -->
                        <div class="lc-block col-lg-4 text-lg-end">
                            <a class="btn btn-primary btn-lg" href="#" role="button" lc-helper="button">Bekijk</a>
                        </div><!-- /lc-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-6" style="margin-bottom:110px;">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-up">
                <div class="lc-block mb-4">
                    <div editable="rich">

                        <h4 class="fw-bold display-5">Laat je inspireren door de muziek van de KTVM.</h4>
                    </div>
                </div>
                <div class="lc-block mb-5">
                    <div editable="rich">
                        <p class="lead text-muted">De KTVM biedt gratis buitenconcerten, exclusieve Agnietenhof-concerten
                            voor donateurs en eens in de vijf jaar een jubileumconcert.</p>
                    </div>
                </div>

                <div class="lc-block d-sm-flex align-items-center mb-4 overflow-hidden position-relative">
                    <div class="d-inline-flex">
                        <div>
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z">
                                </path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>&nbspDe KTVM speelt zowel klassieke als moderne stukken.</p>
                        </div>
                    </div>
                </div>
                <div class="lc-block d-sm-flex align-items-center mb-4">
                    <div class="d-inline-flex">
                        <div>
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z">
                                </path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>&nbspLeden zijn betrokken en creëren een gezellige sfeer</p>
                        </div>
                    </div>
                </div>
                <div class="lc-block d-sm-flex align-items-center mb-4">
                    <div class="d-inline-flex">
                        <div>
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z">
                                </path>
                            </svg>
                        </div>

                        <div class="ms-3 align-self-center" editable="rich">
                            <p>&nbspDe KTVM biedt kansen aan jonge muzikanten om zich te ontwikkelen en aan te sluiten.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 mt-md-0 col-md-6" data-aos="fade-left">
                <div class="lc-block">
                    <div class="position-relative">
                        <div class="lc-block position-absolute top-0 start-0 w-100 h-100 bg-danger opacity-50 mt-4 ms-4"
                            style="margin-left:35px;"> </div>

                        <img class="position-relative img-fluid" src="/assets/imgs/overons-image.jpg"
                            sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080" alt="KTVM Concert">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up" style="margin-bottom:110px;">
        <div class="row text-center justify-content-center mb-5">
            <div class="col-xl-6 col-lg-8">
                <h2 class="font-weight-bold">Onze Historie</h2>
                <p class="text-muted">We zijn trots op onze geschiedenis en de weg die we hebben afgelegd om te worden wie
                    we vandaag zijn.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="timeline-steps">
                    <div class="timeline-step" data-aos="fade-up" data-aos-delay="0">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-original-title="1903">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1"><br>1903</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Oprichting KTVM</p>
                        </div>
                    </div>
                    <div class="timeline-step" data-aos="fade-up" data-aos-delay="100">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-original-title="1910">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1"><br>1910</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Naamverandering: T.V.M.</p>
                        </div>
                    </div>
                    <div class="timeline-step" data-aos="fade-up" data-aos-delay="200">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-original-title="1953">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1"><br>1953</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">Berkroning Koninklijk</p>
                        </div>
                    </div>
                    <div class="timeline-step" data-aos="fade-up" data-aos-delay="300">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-original-title="2003">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1"><br>2003</p>
                            <p class="h6 text-muted mb-0 mb-lg-0">100-jarig bestaan</p>
                        </div>
                    </div>
                    <div class="timeline-step mb-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top"
                            title="" data-original-title="<?php date('Y'); ?>">
                            <div class="inner-circle"></div>
                            <p class="h6 mt-3 mb-1"><br><?php echo date('Y'); ?></p>
                            <p class="h6 text-muted mb-0 mb-lg-0"><?php $ktvmAge = date('Y') - 1903;
                            echo $ktvmAge . '-jarig bestaan'; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top:50px;">
                    <div class="col-12 col-md-6" data-aos="fade-up">
                        <button class="btn btn-primary btn-lg btn-block btn-responsive">Ontdek meer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 cta-contact" style="margin-bottom:110px;">
        <div class="container">
            <div class="row wrap-feature-32">
                <div class="col-md-6">
                    <div class="position-relative">
                        <div data-aos="fade-up"
                            class="lc-block position-absolute top-0 start-0 w-100 h-100 bg-danger opacity-50 mt-4 ms-4"
                            style="margin-left:-35px;"> </div>

                        <img data-aos="fade-right" class="position-relative img-fluid" src="/assets/imgs/cta.png"
                            sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080" alt="KTVM Concert">
                    </div>
                </div>
                <div data-aos="fade-down" class="col-md-6 align-self-center">
                    <br><br>
                    <span class="badge badge-info rounded-pill px-3 py-1 font-weight-light">Contact</span>
                    <h3 class="my-3">Contact met ons opnemen is eenvoudig</h3>
                    <p class="mt-3">Heb je een vraag, opmerking of wil je een optreden van ons boeken? <br> Aarzel niet
                        en neem direct contact met ons op.</p>
                    <a class="btn btn-info-gradiant btn-md rounded-pill mt-3" style="color: white;"
                        href="/contact"><span>Contacteer</span></a>
                </div>
            </div>
        </div>
    </div>



    <div class="container px-4 py-5" id="custom-cards">
        <div class="pb-2 border-bottom" data-aos="fade-zoom">
            <h2>Het laatste nieuws</h2>
            <p class="text-muted">Hieronder staat een selectie van de laatste nieuwsberichten.</p>
            <a href="/nieuws" style="text-decoration:none; display: inline-block;">
                <p class="text-muted">Bekijk alle nieuwsberichten<span style="margin-left: 5px;">&rarr;</span></p>
            </a>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 row-cols-phone">
            <div class="col" data-aos="fade-up" data-aos-delay="0">
                <a href="/nieuws/nieuws-title" style="text-decoration: none">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                        style="background-image: url('https://ktvm.nl/wp-content/uploads/2023/05/IMG_3129-rotated.jpg'); background-size: cover;">
                        <div class="overlay"></div>
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Voorjaarsconcert 2023</h3>
                            <div class="d-flex flex-column mt-auto">
                                <small>Bij Webmaster</small>
                                <small>Geplaatst op 2 mei</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg"
                    style="background-image: url('https://ktvm.nl/wp-content/uploads/2022/10/KTVM-harmonieorkest-scaled.jpg'); background-size: cover; background-position: center;">
                    <div class="overlay"></div>
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">(Aspirant) Muzikanten welkom!</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <small>Webmaster</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <small>&nbsp 3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-color: lightgray;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Steun de KTVM!</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <small>Webmaster</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <small>&nbsp 3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

