<?php include_once "header.php" ?>


<!-- price estimation part start -->

<div id="estimator">
    <div class="container">
        <div class="section_title">
            <h2>Price Estimator</h2>
            <p>Estimate the costing of our services</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form_container">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="pickup">Pickup Location</label>
                            <input type="text" class="form-control" id="pickup" name="pickup" placeholder="Type Here">
                            <label for="destination">Destination Location</label>
                            <input type="text" class="form-control" id="destination" name="destination" placeholder="Type Here">
                        </div>
                        <div class="form-group">
                            <label for="ride_type">Type of ride</label>
                            <select class="form-control" id="ride_type" name="ride_type">
                                <option>for 2</option>
                                <option>for 3</option>
                                <option>for 4</option>
                            </select>
                        </div>
                        <input type="submit" name="submit" class="btn btn-info" style="margin: 10px;">
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="result">
                    <h1 style="font-weight: bold; text-align:center;">
                        <?php

                        if (isset($_POST['submit'])) {
                            echo "Cost of going from ";
                            echo $_POST['pickup'];
                            echo " to ";
                            echo $_POST['destination'];
                            echo " ";
                            echo $_POST['ride_type'];
                            echo " people is ";
                            echo (rand(20, 80));
                            echo " tk.";
                        } else {
                            echo "0 tk";
                        }
                        ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- price estimation part end -->

<!-- riding ways part start -->

<div id="features">
    <div class="container">
        <div class="section_title">
            <h2>Ways to ride</h2>
            <p>Check out all of our riding options.</p>
        </div>
        <div class="row">

            <div class="col-lg-4 text-center">
                <img src="images/fleet_pic1.jpg" alt="">
                <h4 class="mt-3">For maximum 2 persons</h4>
                <p class="mt-3">In this way, an usual driver will be avaible. This is the economical
                    option to ride with us.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="images/fleet_pic1.jpg" alt="">
                <h4 class="mt-3">For maximum 3 persons</h4>
                <p class="mt-3">A moderately strong driver will be available. In this way the rickshaw
                    will be basic.</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="images/fleet_pic1.jpg" alt="">
                <h4 class="mt-3">For maximum 4 persons</h4>
                <p class="mt-3">Our strongest driver will be at your service with our custom made rickshaw
                    with great comfort.</p>
            </div>
        </div>
    </div>
</div>

<!-- riding ways part end -->

<div id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 about_des">
                <h4>ALWAYS THE RIDE YOU WANT</h4>
                <p>request and hop
                </p>
                <a class="btn-lg btn-info" href="Chat App/index.php" role="button">Sign Up!</a>
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/fleet_pic1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block carousel-overlay">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/fleet_pic5.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block carousel-overlay">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/fleet_pic4.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block carousel-overlay">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>





<?php include_once "footer.php" ?>