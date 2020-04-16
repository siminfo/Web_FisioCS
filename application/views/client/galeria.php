 <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">Todas</button>
                          
                            <?php foreach ($filtros->result() as $row): ?>
                                
                                <button data-filter=".<?= $row->id ?>"><?= $row->nombre ?></button>

                            <?php endforeach ?>


                        </div>


                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-4">

                              <?php foreach ($imagenes->result() as $row): ?>
                                  



                            <!-- Single Item -->
                            <div class="pf-item <?= $row->filtro ?> capital">
                                <div class="effect-box">
                                    <img src="assets/img/galeria/<?= $row->imagen ?>" alt="thumb">
                                    <div class="info">
                                    <a href="assets/img/galeria/<?= $row->imagen ?>" class="item popup-link"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                


                                      

                            </div>
                            <!-- End Single Item -->



                              <?php endforeach ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->