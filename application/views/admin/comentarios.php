

    <!-- Start Services Details
    ============================================= -->
    <div class="services-details-area default-padding" style="padding-top: 64px !important">
    <div class="container">   
 <form action="<?= base_url('subirComentario') ?> " method="POST" enctype="multipart/form-data" >
<div class="row">
	<div class="col-md-12">
		<label>Nombre</label>
		<input type="text" id="login" class="fadeIn second form-control form-group" name="nombre" placeholder="">

	 </div>

	 	<div class="col-md-12 ">
	 		<label>Texto</label>
		 <input type="text" id="password" class="fadeIn third form-control form-group" name="texto" placeholder="">

	 </div>

	 	<div class="col-md-12">
	 		<label>Imagen</label>
		 <input type="file" class="form-control btn  btn-primary form-control form-group" name="imagen" id="Imagen" placeholder="Imagen" value="">

	 </div>
</div>
<br>
  
 
     
      <input type="submit" name="enviar" class="fadeIn fourth " style="padding: 10px" value="Subir Comentario">
    </form>

<br>

</div>






 <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow bg-gray default-padding">
        <div class="container">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                       

                       <?php foreach ($comentarios->result() as $row): ?>
                       	

						 <!-- Single Item -->
                        <div class="item">

<p> <a style="color:red;float: right;" href="<?= base_url('borrarComentario').'/'.$row->id?>"> Borrar</a></p>

                            <div class="content">
                                <p>
                                  <?= $row->texto ?>
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/<?= $row->imagen ?>" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>  <?= $row->nombre ?></h4>
                                 
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
    <!-- End Testimonials -->



   </div>


   