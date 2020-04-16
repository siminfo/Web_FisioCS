
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-6 text-right">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                       


                        <?php foreach ($articulos->result() as $row): ?>
                            


                             <!-- Single Item -->
                        <div class="single-item item">
                            <div class="thumb">
                                
                                    <img src="assets/img/<?= $row->imagen ?>" alt="Thumb">
                                  
                               
                            </div>
                            <div class="info">
                                <div class="meta">
                                   
                                </div>
                                <h3>
                                    <a href="#"><?= $row->titulo ?></a>
                                </h3>
                                <p>
                                   <?= $row->texto ?>
                                </p>
                              
                            </div>
                        </div>
                        <!-- End Single Item -->



                        <?php endforeach ?>

                       
                        
                        <!-- Pagination -->
                        <!-- <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->