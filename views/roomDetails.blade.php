@extends('layout')
@section('title','Room Details')
@section('content')
    <main class="container">
    <script src="./js/roomDetails.js"></script>
        <section class="introduction">
            <p class="introduction__caption">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="introduction__title">Ultimate Room</h1>
            <div class="introduction__location">
                <p>Home | <span class="route">Room Details</span></p>
            </div>
        </section>
        <section class="details">
            <div class="details__info">
                <div>
                    <p class="details__caption">
                        DOUBLE BED
                    </p>
                    <h1 class="details__title">
                        Luxury Double Bed
                    </h1>                    
                </div>
                <p class="details__price">
                    $345<span class="details__price-mini">/Night</span>
                </p>
            </div>
            <div class="details__img">
                <img src="./assets/roomDetails/details_doubleBed_img.jpg" alt="doubleBed">
            </div>
            <div class="details__form">
                <h2 class="form__title">
                    Check Availability
                </h2>
                <div class="form__checkIn">
                    <label for="checkIn">Check In</label>
                    <input type="date" name="checkIn" id="checkIn">
                </div>
                <div class="form__checkOut">
                    <label for="checkOut">Check Out</label>
                    <input type="date" name="checkOut" id="checkOut">
                </div>
                <button class="form__btn">CHECK AVAILABILITY</button>
            </div>
            <p class="details__description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Doloremque, harum cumque. Culpa aperiam obcaecati perspiciatis 
                pariatur quo autem ab at quidem facilis voluptatum necessitatibus esse 
                quas odio dolore quasi cupiditate asperiores beatae, maxime accusamus vitae. 
                Officiis fuga repellendus aliquam veniam suscipit temporibus, amet quas mollitia
                 culpa eaque illo exercitationem deserunt sunt commodi, voluptatum numquam. Quos 
                 exercitationem doloribus sint nisi laudantium.
            </p>
        </section>
        <section class="amenities">
            <h2 class="amenities__title">
                Amenities
            </h2>
            <hr/>
            <div class="amenities__items">
                <p><img src="./assets/roomDetails/details_air_icon.png" alt="airConditioner"> Air Conditioner</p>
                <p><img src="./assets/roomDetails/details_wifi_icon.png" alt="wifiIcon"> High speed Wifi</p>
                <p><img src="./assets/roomDetails/details_breakfast_icon.png" alt="breakFast"> Breakfast</p>
                <p><img src="./assets/roomDetails/details_kitchen_icon.png" alt="kitchenIcon"> Kitchen</p>
                <p><img src="./assets/roomDetails/details_cleaning_icon.png" alt="cleaningIcon"> Cleaning</p>
                <p><img src="./assets/roomDetails/details_shower_icon.png" alt="showerIcon"> Shower</p>
                <p><img src="./assets/roomDetails/details_grocery_icon.png" alt="groceryIcon"> Grocery</p>
                <p><img src="./assets/roomDetails/details_bed_icon.png" alt="bedIcon"> Single bed</p>
                <p><img src="./assets/roomDetails/details_shop_icon.png" alt="shopIcon"> Shop near</p>
                <p><img src="./assets/roomDetails/details_towels_icon.png" alt="towelsIcon"> Towels</p>
                <p><img src="./assets/roomDetails/details_support_icon.png" alt="supportIcon"> 24/7 Online Support</p>
                <p><img src="./assets/roomDetails/details_key_icon.png" alt="keyIcon"> Strong Locker</p>
                <p><img src="./assets/roomDetails/details_security_icon.png" alt="securityIcon"> Smart Security</p>
                <p><img src="./assets/roomDetails/details_team_icon.png" alt="teamIcon"> Expert Team</p>
                
            </div>
            <div class="amenities__founder">
                <div class="founder__container">
                    <span class="founder__circle">
                        ✓
                    </span>
                    <div class="founder__img">
                        <img src="./assets/roomDetails/details_founder.jpg" alt="founderGod">
                    </div>
                </div>
                <h1 class="founder__name">
                    Barack Obama
                </h1>
                <p class="founder__caption">
                    FOUNDER, QUX CO.
                </p>
                <p class="founder__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure accusamus,
                    aut accusantium deleniti laboriosam debitis placeat vero corporis quasi sed.
                </p>
            </div>
        </section>
        <section class="cancellation">
            <h2 class="cancellation__title">
                Cancellation
            </h2>
            <hr/>
            <p class="cancellation__description">
                Phasellus volutpat neque a tellus venenatis, 
                a euismod augue facilisis. Fusce ut metus mattis,
                consequat metus nec, luctus lectus. Pellentesque orci 
                quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.

            </p>
        </section>
        <section class="related">
            <h2 class="related__title">
                Related Rooms
            </h2>
            <hr/>
            <div class="swiper-relatedRooms">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                <div class="swiper-wrapper">
                    <div class="rooms-rooms__room swiper-slide related-room">
                        <div class="room__img-container">
                            <img src="./assets/rooms/rooms_room_example1.png" alt="roomImg" class="room__img">
                        </div>
                        <div class="room__options">
                            <img src="./assets/rooms/rooms_room_bed.png" alt="bedIcon">
                            <img src="./assets/rooms/rooms_room_wifi.png" alt="wifiIcon">
                            <img src="./assets/rooms/rooms_room_car.png" alt="carIcon">
                            <img src="./assets/rooms/rooms_room_winter.png" alt="winterIcon">
                            <img src="./assets/rooms/rooms_room_gym.png" alt="gymIcon">
                            <img src="./assets/rooms/rooms_room_noSmoking.png" alt="noSmokingIcon">
                            <img src="./assets/rooms/rooms_room_cocktail.png" alt="cocktailIcon">
                        </div>
                        <div class="room__description">
                            <h2 class="room__title">
                                Minimal duplex Room
                            </h2>
                            <p class="room__description-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                            </p>
                            <div class="room__pricing">
                                <p class="room__price">
                                    $345/Night
                                </p>
                                <p class="room__booking">
                                    Booking Now
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rooms-rooms__room swiper-slide related-room">
                        <div class="room__img-container">
                            <img src="./assets/rooms/rooms_room_example1.png" alt="roomImg" class="room__img">
                        </div>
                        <div class="room__options">
                            <img src="./assets/rooms/rooms_room_bed.png" alt="bedIcon">
                            <img src="./assets/rooms/rooms_room_wifi.png" alt="wifiIcon">
                            <img src="./assets/rooms/rooms_room_car.png" alt="carIcon">
                            <img src="./assets/rooms/rooms_room_winter.png" alt="winterIcon">
                            <img src="./assets/rooms/rooms_room_gym.png" alt="gymIcon">
                            <img src="./assets/rooms/rooms_room_noSmoking.png" alt="noSmokingIcon">
                            <img src="./assets/rooms/rooms_room_cocktail.png" alt="cocktailIcon">
                        </div>
                        <div class="room__description">
                            <h2 class="room__title">
                                Minimal duplex Room
                            </h2>
                            <p class="room__description-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                            </p>
                            <div class="room__pricing">
                                <p class="room__price">
                                    $345/Night
                                </p>
                                <p class="room__booking">
                                    Booking Now
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rooms-rooms__room swiper-slide related-room">
                        <div class="room__img-container">
                            <img src="./assets/rooms/rooms_room_example1.png" alt="roomImg" class="room__img">
                        </div>
                        <div class="room__options">
                            <img src="./assets/rooms/rooms_room_bed.png" alt="bedIcon">
                            <img src="./assets/rooms/rooms_room_wifi.png" alt="wifiIcon">
                            <img src="./assets/rooms/rooms_room_car.png" alt="carIcon">
                            <img src="./assets/rooms/rooms_room_winter.png" alt="winterIcon">
                            <img src="./assets/rooms/rooms_room_gym.png" alt="gymIcon">
                            <img src="./assets/rooms/rooms_room_noSmoking.png" alt="noSmokingIcon">
                            <img src="./assets/rooms/rooms_room_cocktail.png" alt="cocktailIcon">
                        </div>
                        <div class="room__description">
                            <h2 class="room__title">
                                Minimal duplex Room
                            </h2>
                            <p class="room__description-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                            </p>
                            <div class="room__pricing">
                                <p class="room__price">
                                    $345/Night
                                </p>
                                <p class="room__booking">
                                    Booking Now
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="rooms-rooms__room swiper-slide related-room">
                        <div class="room__img-container">
                            <img src="./assets/rooms/rooms_room_example1.png" alt="roomImg" class="room__img">
                        </div>
                        <div class="room__options">
                            <img src="./assets/rooms/rooms_room_bed.png" alt="bedIcon">
                            <img src="./assets/rooms/rooms_room_wifi.png" alt="wifiIcon">
                            <img src="./assets/rooms/rooms_room_car.png" alt="carIcon">
                            <img src="./assets/rooms/rooms_room_winter.png" alt="winterIcon">
                            <img src="./assets/rooms/rooms_room_gym.png" alt="gymIcon">
                            <img src="./assets/rooms/rooms_room_noSmoking.png" alt="noSmokingIcon">
                            <img src="./assets/rooms/rooms_room_cocktail.png" alt="cocktailIcon">
                        </div>
                        <div class="room__description">
                            <h2 class="room__title">
                                Minimal duplex Room
                            </h2>
                            <p class="room__description-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit cum incidunt iure temporibus laborum deleniti!
                            </p>
                            <div class="room__pricing">
                                <p class="room__price">
                                    $345/Night
                                </p>
                                <p class="room__booking">
                                    Booking Now
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection    