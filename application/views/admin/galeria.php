 <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                 <a class="btn btn-theme border circle btn-md" href="<?= base_url('subirFoto')  ?>">Subir foto</a>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-4">

                              <?php foreach ($imagenes->result() as $row): ?>
                                  



                            <!-- Single Item -->
                            <div class="pf-item development capital">
                                <div class="effect-box">
                                    <img src="assets/img/galeria/<?= $row->imagen ?>" alt="thumb">
                                    <div class="info">
                              
                                    <a href="assets/img/galeria/<?= $row->imagen ?>" class="item popup-link"><i class="fa fa-plus"></i></a>

                                    <a href="<?= base_url('editarFoto')."?id=".$row->id ?>">Editar</a>
                                    <br>
                                    <a href="<?= base_url('borrarFoto')."/".$row->id ?>">Borrar</a>
                                   
                                    <?php if ($row->inicio == 0): ?>
                                        
                                    <a href="<?= base_url('marcarFotoInicio')."/".$row->id."/1" ?>">Inicio</a>

                                    <?php endif ?>

                                      <?php if ($row->inicio != 0): ?>
                                        
                                    <a style="background-color: red" href="<?= base_url('marcarFotoInicio')."/".$row->id."/0" ?>">Inicio</a>

                                    <?php endif ?>


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