






    <!-- Start Services Details
    ============================================= -->
    <div class="services-details-area default-padding" style="padding-top: 64px !important">
    <div class="container">   
 <form action="<?= base_url('subirFotoGaleria') ?> " method="POST" enctype="multipart/form-data" >
<div class="row">
	<div class="col-md-12">
		<label>Titulo</label>
				<select name="filtro">

				<?php foreach ($filtros->result() as $row): ?>
					
				<option value="<?= $row->id ?>"><?= $row->nombre ?></option>
				
				
				<?php endforeach ?>

			



				</select>

	 </div>

	 	<div class="col-md-12">
	 		<label>Imagen</label>
		 <input type="file" class="form-control btn  btn-primary form-control form-group" name="imagen" id="Imagen" placeholder="Imagen" value="">

	 </div>
</div>
<br>
  
 
     
      <input type="submit" name="enviar" class="fadeIn fourth " style="padding: 10px" value="Subir Foto">
    </form>

<br>

</div>
