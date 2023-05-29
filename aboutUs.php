<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700&family=Old+Standard+TT:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/header.js"></script>
    <script src="./js/aboutUs.js"></script>
    <title>About us</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="header__menu">
                <img src="./assets/header/header_open_icon.png" alt="menuOpen" id="openMenu" class="active">
                <img src="./assets/header/header_close_icon.png" alt="menuClose" id="closeMenu">
            </div>
            <div class="header__content">
                <div class="header__content-logo">
                    <p class="header__content-logo logo__letter">H</p>
                    <div class="header__content-name logo__name">
                        <p>HOTEL</p>
                        <p>MIRANDA</p>
                    </div>
                </div>
                <div class="header__content-menu">
                    <ul>
                        <li><a href="./aboutUs.html">About us</a></li>
                        <li><a href="./rooms.html">Rooms</a></li>
                        <li><a href="./offers.html">Offers</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="header__content-options">
                    <img src="./assets/header/header_user_icon.png" alt="userIcon">
                    <img src="./assets/header/header_search_icon.png" alt="searchIcon">
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">About Us</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">About</span></p>
            </div>
        </section>
        <section class="description">
            <div class="description__video">
                <video controls>
                    <source src="./assets/home/home_hotel_video.mp4" type="video/mp4">
                </video>
            </div>
            <h1 class="description__introduction">
                Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
            </h1>
            <div class="description__services">
                <div class="service">
                    <img src="./assets/about/about_breakfast_icon.png" alt="breakfastIcon">
                    <p>BREAKFAST</p>
                </div>
                <div class="service">
                    <img src="./assets/about/about_airplane_icon.png" alt="airplaneIcon">
                    <p>AIRPORT PICKUP</p>
                </div>
                <div class="service">
                    <img src="./assets/about/about_guide_icon.png" alt="guideIcon">
                    <p>CITY GUIDE</p>
                </div>
                <div class="service bbq">
                    <img src="./assets/about/about_bbq_icon.png" alt="BBQIcon">
                    <p>BBQ PARTY</p>
                </div>
                <div class="service luxury">
                    <img src="./assets/about/about_room_icon.png" alt="roomIcon">
                    <p>LUXURY ROOM</p>
                </div>
            </div>
        </section>
        <section class="restaurant">
            <div class="restaurant__img">
                <img src="./assets/about/about_restaurant_photo.jpg" alt="restaurantPhoto">
            </div>
            <p class="restaurant__caption">RESTAURANT</p>
            <h1 class="restaurant__title">
                Get Restaurant Facilities & Many Other More
            </h1>
            <p class="restaurant__description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Earum quos quo soluta adipisci id voluptatem distinctio 
                impedit eveniet dolorum, nulla omnis enim, ab esse 
                odit itaque placeat expedita ipsam? Ullam!
            </p>
            <button class="restaurant__btn">
                TAKE A TOUR
            </button>
        </section>
        <section class="facilities-about">
            <p class="facilities-about__caption">FACILITIES</p>
            <h1 class="facilities-about__title">Core Features</h1>
            <div class="facilities-about__features">
                <div class="swiper-about">
                    <div class="swiper-wrapper">
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">01</p>
                                <img src="./assets/home/home_feature1_icon.png" alt="featureIcon01" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Have High Rating
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">02</p>
                                <img src="./assets/home/home_feature2_icon.png" alt="featureIcon01" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Quiet Hours
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">03</p>
                                <img src="./assets/home/home_feature3_icon.png" alt="featureIcon03" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Best Locations
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">04</p>
                                <img src="./assets/home/home_feature4_icon.png" alt="featureIcon04" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Free Cancellation
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">05</p>
                                <img src="./assets/home/home_feature5_icon.png" alt="featureIcon05" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Payment Options
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                        <div class="facilities-about__feature swiper-slide">
                            <div class="feature__header">
                                <p class="feature__number">06</p>
                                <img src="./assets/home/home_feature6_icon.png" alt="featureIcon06" class="feature__img">                        
                            </div>
                            <div class="feature__body">
                                <h2 class="feature__title">
                                    Special Offers
                                </h2>
                                <p class="feature__description">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                    Totam at nobis, ipsa velit qui aperiam debitis id quae voluptas 
                                    repudiandae.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="counter">
            <p class="counter__caption">
                COUNTER
            </p>
            <h1 class="counter__title">
                Some Fun Facts
            </h1>
            <div class="counter__container">
                <div class="counter__fact">
                    <div class="fact__img">
                        <img src="./assets/about/about_fact_icon1.png" alt="factIcon1">
                    </div>
                    <div class="fact__text">
                        <h2>
                            8000
                        </h2>
                        <p>
                            Happy Users
                        </p>
                    </div>
                    <div class="fact__arrow">
                        <img src="./assets/about/about_arrow_icon.png" alt="arrowIcon">
                    </div>
                </div>
                <div class="counter__fact">
                    <div class="fact__img">
                        <img src="./assets/about/about_fact_icon2.png" alt="factIcon1">
                    </div>
                    <div class="fact__text">
                        <h2>
                            10M
                        </h2>
                        <p>
                            Reviews & Appriciate
                        </p>
                    </div>
                    <div class="fact__arrow">
                        <img src="./assets/about/about_arrow_icon.png" alt="arrowIcon">
                    </div>
                </div>
                <div class="counter__fact">
                    <div class="fact__img">
                        <img src="./assets/about/about_fact_icon3.png" alt="factIcon1">
                    </div>
                    <div class="fact__text">
                        <h2>
                            100
                        </h2>
                        <p>
                            Country Coverage
                        </p>
                    </div>
                    <div class="fact__arrow">
                        <img src="./assets/about/about_arrow_icon.png" alt="arrowIcon">
                    </div>
                </div>
            </div>
            <div class="counter__img swiper-about-counter">
                <div class="swiper-wrapper">
                    <img src="./assets/about/about_hotel_photo.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo2.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo3.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo4.jpg" alt="hotelPhoto" class="swiper-slide">
                    <img src="./assets/about/about_hotel_photo5.jpg" alt="hotelPhoto" class="swiper-slide">
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__main">
            <div class="footer__logo">
                <span class="logo__letter">
                    H
                </span>
                <div class="logo__name">
                    <P class="logo__name-main">HOTEL</P>
                    <p>MIRANDA</p>
                </div>
            </div>
            <p class="footer__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Velit veniam sapiente aperiam itaque consequatur iste laboriosam dicta esse fugiat
                vitae laborum, vero excepturi quod iure voluptatem. Blanditiis eveniet itaque odit?
            </p>
            <div class="footer__links">
                <a href="#">
                    <img src="./assets/footer/footer_facebook_icon.png" alt="facebookIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_twitter_icon.png" alt="twitterIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_behance_icon.png" alt="behanceIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_linkedin_icon.png" alt="linkedinIcon">
                </a>
                <a href="#">
                    <img src="./assets/footer/footer_youtube_icon.png" alt="youtubeIcon">
                </a>
            </div>
            <div class="footer__services">
                <h4 class="services__title">
                    Services.
                </h4>
                <div class="services__containter">
                    <ul class="services__list">
                        <li>Resturant & Bar</li>
                        <li>Swimming Pool</li>
                        <li>Wellness & Spa</li>
                        <li>Restaurant</li>
                        <li>Conference Room</li>
                        <li>Coctail Party House</li>
                    </ul>
                    <ul class="services__list">
                        <li>Gaming Zone</li>
                        <li>Marriage Party</li>
                        <li>Part Planning</li>
                        <li>Tour Consultancy</li>
                    </ul>                    
                </div>
            </div>
            <div class="footer__contact">
                <h4 class="contact__title">
                    Contact Us.
                </h4>
                <div class="contact-footer">
                    <img src="./assets/footer/footer_number_icon.png" alt="numberIcon">
                    <div>
                        <h4>Phone Number</h4>
                        <p>+987 876 765 76 577</p>                        
                    </div>
                </div>
                <div class="contact-footer">
                    <img src="./assets/footer/footer_mail_icon.png" alt="mailIcon">
                    <div>
                        <h4>Phone Number</h4>
                        <p>+987 876 765 76 577</p>                        
                    </div>
                </div>
                <div class="contact-footer">
                    <img src="./assets/footer/footer_location_icon.png" alt="locationIcon">
                    <div>
                        <h4>Phone Number</h4>
                        <p>+987 876 765 76 577</p>                        
                    </div>
                </div>
            </div>            
        </div>
        <div class="footer__copyrigth">
            <p>
                Copyright By Oscar Alcivar - 2023
            </p>
            <p>
                Terms of use    |    Privacy Environmental Policy
            </p>
        </div>
    </footer>
</body>
</html>