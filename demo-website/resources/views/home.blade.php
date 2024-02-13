<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo-App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .image {
            width: 30%;
            height: auto;
        }

        .overlay img {
            position: relative;
            bottom: 225px;
            left: 167px;
            width: 24%;
            height: auto;
        }
    </style>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Open Hours: Sat - Thu (10:00am - 06:00pm)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-fixed bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo.png') }}"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">loT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Portfolio</a>
                        </li>
                    </ul>
                    <form class="" role="search">
                        <button type="button" class="btn btn-success">Get Start Now</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading left-side">
                            <h1>Express <mark>Digitally</mark></h1>
                            <p>UY Systems Ltd. is a CMMI Level 3 Certified, ISO 9001-2008 certified
                                Software development & Web solution provider, established in 2003.</p>
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-success">Get in Touch</button>
                            <button type="button" class="btn btn-outline-success">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <video autoplay muted loop id="myVideo">
                            <source src="{{ asset('assets/images/pexels_videos_1860079 (1440p).mp4') }}"
                                type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <h2 class="heading-1 text-center mt-5">OUR
                        <b>SERVICES</b>
                    </h2>
                    <div class="col-lg-4 mt-5">
                        <div class="crd">
                            <h4>Web Development</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque enim est
                                laudantium
                                quibusdam reiciendis voluptatem quis architecto quos alias.</p>
                            <button type="button" class="btn button">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="crd">
                            <h4>Mobile App Development</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque enim est
                                laudantium
                                quibusdam reiciendis voluptatem quis architecto quos alias.</p>
                            <button type="button" class="btn button">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="crd">
                            <h4>Mobile App Development</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque enim est
                                laudantium
                                quibusdam reiciendis voluptatem quis architecto quos alias.</p>
                            <div class="">
                                <button type="button" class="btn button">Read More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="crd">
                            <h4>eCommerce Development</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque enim est
                                laudantium
                                quibusdam reiciendis voluptatem quis architecto quos alias.</p>
                            <button type="button" class="btn button">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="crd">
                            <h4>Search Engine Optimization</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque enim est
                                laudantium
                                quibusdam reiciendis voluptatem quis architecto quos alias.</p>
                            <button type="button" class="btn button">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="crd">
                            <h4>Image Processing</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet neque enim est
                                laudantium
                                quibusdam reiciendis voluptatem quis architecto quos alias.</p>
                            <div class="">
                                <button type="button" class="btn  button">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="full-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-section">
                            <div class=" text-left">
                                <h3 class="heading">
                                    <b>The</b>
                                    Company
                                </h3>
                                <p>
                                    UY Systems Ltd. is an CMMI Level 3 Certified, ISO 9001-2008 certified software
                                    development & web solution provider company operating since 2003.
                                </p>
                            </div>
                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="list-text">
                                                <span>75+</span>
                                                <p>Expert Team Member</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="list-text">
                                                <span>1500+</span>
                                                <p>Happy Customers</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="down-text">
                                                <div class="list-text">
                                                    <span>Certification</span>
                                                    <p>CMMI Level 3 Certified, ISO 9001-2008 certified</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="down-text">
                                                <div class="list-text">
                                                    <span>Membership</span>
                                                    <p>Member of BASIS, BCS, BACCO</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
        </section>
        <section class="elementor-background">
            <div class="container-fluid">
                <div class="row">
                    <div class="text">
                        <h6>WHAT ARE WE DOING</h6>
                        <h1><b>Project Stats</b></h1>
                        <p>Our goal is to exceed expectations by delivering the best
                            services possible.</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="countup-box">
                                        <div class="item">
                                            <span class="counter">17</span>
                                            <h4>Certifications</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="countup-box">
                                        <div class="item">
                                            <span class="counter">75</span>
                                            <h4>Employees</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="countup-box">
                                        <div class="item">
                                            <span class="counter">1500</span>
                                            <h4>Customers</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="countup-box">
                                        <div class="item">
                                            <span class="counter">53</span>
                                            <h4>Countries Served</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="slide-head-text">
                            <h2>Our<b>Clients</b></h2>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="row team_slider">
                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Gootipa-logo.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/TRS-Foods-Logo.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Square-logo.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Godrej-Bangladesh.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Mobile-logo.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Kissurup.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/leatherina-png-1.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Rajah-Spices-logo.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Sony-Rangs.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/TNZ.png') }}" alt=""
                                            class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img src="{{ asset('assets/images/Transcom-group-logo.png') }}"
                                            alt="" class="w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="http://pixelcurse.com/wp-content/uploads/2011/02/minimalist_landscape_8.jpg"
                                    height="300px" width="200px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLnV289_B7O_NIIDwhlknBZplkD3ecT3ogcuuHT4gm_A&s"
                                    height="300px" width="200px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://pixelcurse.com/wp-content/uploads/2011/02/minimalist_landscape_8.jpg"
                                    height="300px" width="200px" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div> --}}
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="http://pixelcurse.com/wp-content/uploads/2011/02/minimalist_landscape_8.jpg"
                                    height="300px" width="200px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="http://pixelcurse.com/wp-content/uploads/2011/02/minimalist_landscape_8.jpg"
                                    height="300px" width="200px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- fygy8fgvbfdhbg  --}}
        <section>
            <div class="cad-img">
                <img src="https://picsum.photos/id/111/300/300" alt="an old car">
            </div>
            <div class="cad-img">
                <img src="https://picsum.photos/id/183/300/300" alt="an old car">
            </div>
        </section>
        {{-- fygy8fgvbfdhbg  --}}
        <section>
            <div class="card">
                <div class="img"> <span></span><span></span><span></span><span></span></div>
                <div class="content">
                    <h2> MacBook Air</h2>
                    <h2>Lightness</h2>
                    <h4>The most loved Mac is about to make you fall in love all over again. Available in silver, space
                        gray, and gold, the new thinner and lighter MacBook Air features a brilliant Retina display,
                        Touch ID, the latest-generation keyboard, and a Force Touch trackpad</h4>
                </div>
            </div>
        </section>
        {{-- fygy8fgvbfdhbg  --}}
        <div class="container">
            <img class="image"
                src="https://www.lifewire.com/thmb/qk8K0EFjoGnsHT2yBbRJHjMD8d4=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Reverse-Image-Search-annotated-dd6c4bbbb3044ecbb97ec4af09ccfedb.jpg"
                height="300px" width="300px" alt="">
            <div class="overlay">
                <img src="https://www.cnet.com/a/img/resize/e13840601b514b518a9c69bbff02f31b6d157463/hub/2023/05/11/65526df6-f863-45fa-95a0-4d05465a799e/google-io-2023-051023-66.jpg?auto=webp&fit=crop&height=1200&width=1200"
                    height="300px " width="300px" alt="">
            </div>
        </div>
        {{-- fygy8fgvbfdhbg  --}}
        <section>
            <div class="container">
                <h1>I am a <span class="auto-type"></span></h1>
            </div>
        </section>
    </main>

{{-- fygy8fgvbfdhbg  --}}
    <section>
        <div class="ag-format-container">
            <div class="ag-courses_box">
                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            UI/Web&amp;Graph design for teenagers 11-17&#160;years old
                        </div>

                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                04.11.2022
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            UX/UI Web-Design&#160;+ Mobile Design
                        </div>

                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                04.11.2022
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Annual package "Product+UX/UI+Graph "
                        </div>

                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                04.11.2022
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Graphic Design
                        </div>

                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                04.11.2022
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Motion Design
                        </div>

                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                30.11.2022
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Front-end development&#160;+ jQuery&#160;+ CMS
                        </div>
                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                30.11.2022
                            </span>
                        </div>
                    </a>
                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg">
                        </div>
                        <div class="ag-courses-item_title">
                            Digital Marketing
                        </div>
                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                30.11.2022
                            </span>
                        </div>
                    </a>

                </div>

                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            Interior Design
                        </div>

                        <div class="ag-courses-item_date-box">
                            Start:
                            <span class="ag-courses-item_date">
                                31.10.2022
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
{{-- fygy8fgvbfdhbg  --}}
    <section class="articles">
        <article>
            <div class="article-wrapper">
                <figure>
                    <img src="https://picsum.photos/id/1011/800/450" alt="" />
                </figure>
                <div class="article-body">
                    <h2>This is some title</h2>
                    <p>
                        Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue
                        bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                    </p>
                    <a href="#" class="read-more">
                        Read more <span class="sr-only">about this is some title</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </article>
        <article>

            <div class="article-wrapper">
                <figure>
                    <img src="https://picsum.photos/id/1005/800/450" alt="" />
                </figure>
                <div class="article-body">
                    <h2>This is some title</h2>
                    <p>
                        Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue
                        bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                    </p>
                    <a href="#" class="read-more">
                        Read more <span class="sr-only">about this is some title</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </article>
        <article>

            <div class="article-wrapper">
                <figure>
                    <img src="https://picsum.photos/id/103/800/450" alt="" />
                </figure>
                <div class="article-body">
                    <h2>This is some title</h2>
                    <p>
                        Curabitur convallis ac quam vitae laoreet. Nulla mauris ante, euismod sed lacus sit amet, congue
                        bibendum eros. Etiam mattis lobortis porta. Vestibulum ultrices iaculis enim imperdiet egestas.
                    </p>
                    <a href="#" class="read-more">
                        Read more <span class="sr-only">about this is some title</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </article>
    </section>


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Programer", "Designer", "Youtuber"],
            typeSpeed: 150,
            backSpreed: 150,
            looped: true

        })
    </script>

    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
