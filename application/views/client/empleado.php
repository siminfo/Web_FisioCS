
    <!-- Start Doctors Details
    ============================================= -->
    <div class="doctor-details-area default-padding"  style="padding-top: 64px !important">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="thumb">
                        <img src="assets/img/<?= $personal['imagen'] ?>" alt="Thumb">
                        <div class="overlay">
                            <ul>
                                <li>
                                    <a href="<?= $personal['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="<?= $personal['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?= $personal['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="info">
                        <h2><?= $personal['nombre'] ?></h2>
<br>
                        <p><?= $personal['texto2'] ?></p>
                       
<br>
<br>
<br>
<br>
<br>
<br>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctor Details -->