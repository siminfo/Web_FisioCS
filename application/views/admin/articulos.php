
    <!-- Start Services Details
    ============================================= -->
    <div class="services-details-area default-padding" style="padding-top: 64px !important">
        <div class="container">
         





    <!-- Start Services Details
    ============================================= -->
    <div class="services-details-area default-padding" style="padding-top: 64px !important">
    <div class="container">   
 <form action="<?= base_url('subirArticulo') ?> " method="POST" enctype="multipart/form-data" >
<div class="row">
	<div class="col-md-12">
		<label>Titulo</label>
		<input type="text" id="login" class="fadeIn second form-control form-group" name="titulo" placeholder="">

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
  
 
     
      <input type="submit" name="enviar" class="fadeIn fourth " style="padding: 10px" value="Subir articulo blog">
    </form>

<br>

</div>







<div class="row">
	


<div class="col-md-12">
	

<table width="100%">
	
<tr>
    <th width="500px">Titulo</th>
    <th width="500px">Texto</th>
    <th width="100px">Imagen</th>
  </tr>


<?php foreach ($articulos->result() as $row): ?>


  <tr>
    <td><?= $row->titulo ?></td>
    <td><?= $row->texto ?></td>
    <td><?= $row->imagen ?></td>
    <td><a href="<?= base_url('borrarArticulo').'/'.$row->id ?>">borrar </a></td>
  </tr>



	
<?php endforeach ?>





</table>


</div>

</div>
			





        </div>
    </div>
    <!-- End End Services -->


   