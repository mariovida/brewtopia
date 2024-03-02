<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Coffee</title>
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
                            <span>12+</span>
                            Years of Experience
                        </div>
                        <div class="d-flex flex-column">
                            <span>26</span>
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
                        <img src="./images/logo3.svg">
                        <img src="./images/logo4.svg">
                        <img src="./images/logo5.svg">
                        <img src="./images/logo6.svg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        define('footer', TRUE);
        include 'inc/footer.php';
    ?>
    <script>
    AOS.init();
    </script>
</body>
</html>