<?php
    defined('nav') or header('Location: ../');   
?>
<nav id="navigation" class="d-flex align-items-center">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="nav_btns-left">
                    <a href="./">Home</a>
                    <a href="">Products</a>
                    <a href="">About</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="./" class="nav_logo">
                        <?php
                            include 'assets/logo.svg';
                        ?>
                    </a>
                </div>
                <div class="nav_btns-right d-flex align-items-center justify-content-end">                   
                    <a>
                        <?php
                            include 'assets/pin.svg';
                        ?>
                    </a>
                    <a>
                        <?php
                            include 'assets/shopping-bag.svg';
                        ?>
                    </a>
                    <a class="contact-btn">Contact</a>
                </div>
            </div>
        </div>
    </div>
</nav>