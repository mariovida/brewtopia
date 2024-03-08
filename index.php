<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Brewtopia Coffee</title>
</head>
<body>
    <?php
        define('nav', TRUE);
        include 'inc/nav.php';
    ?>

    <section class="hero">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 d-flex flex-column align-items-center justify-content-center" style="position:relative">
                    <div class="hero-beans_left">
                        <img src="./images/coffee_beans.png" />
                    </div>
                    <div class="hero-beans_right">
                        <img src="./images/coffee_beans.png" />
                    </div>
                    <h1>Brewtopia</h1>
                    <h2>Savor every sip of our handpicked coffee blends.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="wrapper">
            <div class="row">
                <div class="col-5">
                    <div class="about_image">
                        <img src="./images/about-us.jpg" />
                    </div>
                </div>
                <div class="col-6 offset-1">
                    <h3>Our story</h3>
                    <p>At Brewtopia, our journey began with a shared love for exceptional coffee. What started as a simple passion evolved into a deep-rooted commitment to excellence and a relentless pursuit of perfection.</p>
                    <p>Driven by a desire to elevate the ordinary into the extraordinary, we embarked on a quest to source the finest beans from around the globe. Through meticulous selection and rigorous quality control measures, we ensure that only the highest-quality beans make it into our roastery.</p>
                    <p>But our journey doesn't end there. With reverence for the artistry of coffee, our master roasters employ time-honored techniques and state-of-the-art equipment to coax out the nuanced flavors and aromas inherent in each bean. Every batch is carefully monitored and lovingly roasted to perfection, resulting in a symphony of flavors that captivates the senses.</p>
                    <p>We believe that coffee is more than just a beverage - it's a catalyst for connection, conversation, and community. That's why we're dedicated to sharing our passion for coffee with enthusiasts worldwide. Whether you're a seasoned connoisseur or a curious newcomer, we invite you to join us on this journey as we celebrate the art of coffee together.</p>
                    <div class="about_stats d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <span>14+</span>
                            Years of Experience
                        </div>
                        <div class="d-flex flex-column">
                            <span>36</span>
                            Locations Worldwide
                        </div>
                        <div class="d-flex flex-column">
                            <span>97</span>
                            Clients
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="partners_logos">
                        <img src="./images/logo1.svg">
                        <img src="./images/logo2.svg">
                        <img src="./images/logo4.svg">
                        <img src="./images/logo6.svg">
                        <img src="./images/logo5.svg">
                        <img src="./images/logo3.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="wrapper">
            <div class="row">
                <div class="col-6">
                    <h3>Crafting the Perfect Brew</h3>
                    <p>At Brewtopia, we're on a mission to deliver an unparalleled coffee journey, meticulously crafted from bean to cup. Our commitment to excellence begins with the careful selection of premium coffee beans sourced from the most renowned coffee-growing regions worldwide.</p>
                    <p>But our journey doesn't end with the selection of beans; it's just the beginning. We believe that brewing coffee is an art form, and every step of the process contributes to the final flavor and aroma of your cup.</p>
                    <p>We're dedicated to sharing our passion for coffee brewing with you, whether you're a novice or a seasoned enthusiast. From the precise grind size to the optimal water temperature, we're here to guide you through every aspect of the brewing process, ensuring that you extract the best possible flavors from your beans.</p>
                    <p>Explore our curated collection of brewing methods, from classic French press to modern pour-over techniques. Each method offers a unique experience and allows you to tailor your brewing process to suit your preferences.</p>
                </div>
                <div class="col-5 offset-1" style="position:relative">
                    <div class="team_image" data-aos="fade-up" data-aos-duration="1200">
                        <img src="./images/brew.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="locations">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center mb-40">
                    <h3>Discover Our Cafés</h3>
                    <a class="row-btn">Locations</a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>At Brewtopia, we're not just passionate about serving great coffee; we're dedicated to creating inviting spaces where coffee lovers can come together to connect, unwind, and indulge in their love for coffee. Explore our café locations below and find the perfect spot to enjoy your favorite brew.</p>
                    <p>Each of our café locations offers a unique ambiance and menu, featuring a variety of specialty coffee drinks, freshly baked pastries, and light bites to complement your coffee experience.</p>
                    <p class="mb-0">We're committed to creating inclusive spaces that welcome everyone, from coffee aficionados to casual visitors looking for a cozy spot to enjoy a cup of joe.</p>
                </div>
                <div class="col-4 offset-2 d-flex align-items-center">
                    <div class="locations_numbers">
                        <div>
                            <span>11</span>
                            North America
                        </div>
                        <div>
                            <span>15</span>
                            Europe
                        </div>
                        <div>
                            <span>6</span>
                            Asia
                        </div>  
                        <div>
                            <span>4</span>
                            South America
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-12">
                    <div class="swiper locationsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop1.jpg" />
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Riverside Roastery</h4>
                                    <p>Situated along the tranquil banks of the river, our Riverside Roastery Café offers a serene escape from the urban hustle. With floor-to-ceiling windows providing panoramic views of the water, this café is the perfect spot to enjoy a leisurely cup of coffee while watching the world go by. Immerse yourself in the soothing ambiance and let the gentle sound of flowing water enhance your coffee experience.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop5.jpg" />
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Vintage Alley</h4>
                                    <p>Tucked away in a charming cobblestone alley lined with vintage shops and boutiques, our Vintage Alley Café exudes old-world charm and cozy ambiance. Step inside and be transported back in time as you sip on your favorite brew surrounded by retro décor and nostalgic memorabilia. Whether you're a history enthusiast or simply seeking a unique café experience, Vintage Alley Café offers a delightful escape from the ordinary.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop3.jpg" style="object-position:bottom"/>
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Cityscape Lounge</h4>
                                    <p>Perched atop a skyscraper with panoramic views of the city skyline, our Cityscape Lounge Café offers a sophisticated urban retreat for coffee connoisseurs. Indulge in a luxurious coffee experience as you take in the breathtaking vistas of city lights and bustling streets below. With elegant décor, live music, and impeccable service, this café promises an unforgettable rendezvous amidst the cityscape.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop4.jpg" />
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Lakeside Retreat</h4>
                                    <p>Nestled on the shores of a picturesque lake, our Lakeside Retreat Café offers a tranquil oasis where nature and coffee lovers unite. Enjoy stunning waterfront views as you sip on your freshly brewed cup of joe, surrounded by lush greenery and the gentle rustle of leaves. Whether you're seeking solitude for reflection or camaraderie with fellow coffee enthusiasts, Lakeside Retreat Café provides the perfect setting to unwind and recharge.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop2.jpg" />
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Artisan Alley</h4>
                                    <p>Discover creativity and community at our Artisan Alley Café, nestled in a vibrant neighborhood known for its eclectic mix of galleries, studios, and boutiques. Stroll down cobblestone alleys adorned with colorful murals and street art until you reach our café, a hub of artistic expression and cultural exchange. Whether you're an art enthusiast or simply seeking a unique café experience, Artisan Alley Café offers a creative haven where inspiration flourishes over coffee.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop6.jpg" />
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Mountain Summit</h4>
                                    <p>Perched atop a majestic mountain peak, our Mountain Summit Café offers a breathtaking retreat for coffee enthusiasts seeking adventure and awe-inspiring views. Ascend winding mountain trails or take a scenic cable car ride to reach our café nestled amidst towering peaks and sweeping vistas. Whether you're a thrill-seeker or a nature lover, this café promises an unforgettable coffee experience at the summit.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="location_image">
                                    <img src="./images/shop7.jpg" />
                                </div>
                                <div class="location_info">
                                    <h4 class="mb-40">Historic Square</h4>
                                    <p>Situated in the heart of a charming historic square, our café invites you to step back in time and savor the flavors of the past. Wander cobblestone streets lined with centuries-old architecture until you arrive at our café nestled amidst quaint storefronts and bustling markets. With its nostalgic charm and inviting ambiance, Historic Square Café offers a delightful blend of history, culture, and coffee.</p>
                                    <div class="location_info-btns d-flex">
                                        <a class="row-btn">Directions
                                            <?php
                                                include 'assets/btn-arrow.svg';
                                            ?>
                                        </a>
                                        <a class="row-btn">Menu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-12 d-flex justify-content-end">
                    <div class="swiper-btn swiper-button-prev-unique">
                        <img src="./assets/arrow-left.svg" />
                    </div>
                    <div class="swiper-btn swiper-button-next-unique">
                        <img src="./assets/arrow-right.svg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        define('footer', TRUE);
        include 'inc/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
        var swiper = new Swiper(".locationsSwiper", {
            slidesPerView: 1,
            spaceBetween: 60,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next-unique',
                prevEl: '.swiper-button-prev-unique'
            },
        });
    </script>
</body>
</html>