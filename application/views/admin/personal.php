 








    <!-- Start Services Details
    ============================================= -->
    <div class="services-details-area default-padding" style="padding-top: 64px !important">
    <div class="container">   
 <form action="<?= base_url('subirEmpleado') ?> " method="POST" enctype="multipart/form-data" >
<div class="row">
    <div class="col-md-12">
        <label>Nombre</label>
        <input type="text" id="login" class="fadeIn second form-control form-group" name="nombre" placeholder="">

     </div>

        <div class="col-md-12 ">
            <label>Texto 1</label>
         <input type="text" id="password" class="fadeIn third form-control form-group" name="texto1" placeholder="">

     </div>

     <div class="col-md-12 ">
            <label>Texto 2</label>
         <input type="text" id="password" class="fadeIn third form-control form-group" name="texto2" placeholder="">

     </div>

     <div class="col-md-12 ">
            <label>Facebook</label>
         <input type="text" id="password" class="fadeIn third form-control form-group" name="facebook" placeholder="">

     </div>

     <div class="col-md-12 ">
            <label>Twitter</label>
         <input type="text" id="password" class="fadeIn third form-control form-group" name="twitter" placeholder="">

     </div>

     <div class="col-md-12 ">
            <label>Linkedin</label>
         <input type="text" id="password" class="fadeIn third form-control form-group" name="linkedin" placeholder="">

     </div>

        <div class="col-md-12">
            <label>Imagen</label>
         <input type="file" class="form-control btn  btn-primary form-control form-group" name="imagen" id="Imagen" placeholder="Imagen" value="">

     </div>
</div>
<br>
  
 
     
      <input type="submit" name="enviar" class="fadeIn fourth " style="padding: 10px" value="Subir Empleado">
    </form>

<br>

</div>


















  <!-- Start Doctors 
    ============================================= -->
    <div class="doctor-area carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="doctor-items doctor-carousel owl-carousel owl-theme text-center">
                     

                     <?php foreach ($personal->result() as $row): ?>
                         



                           <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/<?= $row->imagen ?>" alt="Thumb">
                                <div class="overlay">
                                    <a href="<?= base_url('empleado').'/'.$row->id ?>"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="<?= $row->facebook ?>"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="<?= $row->twitter ?>"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="<?= $row->linkedin ?>"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4><?= $row->nombre ?></h4>
                                <h5><?= $row->texto1 ?></h5>
                               
                            </div>

                            <p><a href="<?= base_url('borrarEmpleado')."/".$row->id ?>">Borrar</a></p>
                        </div>
                        <!-- End Single Item -->



                     <?php endforeach ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors -->