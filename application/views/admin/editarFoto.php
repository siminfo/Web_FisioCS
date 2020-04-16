



    <!-- Start Services Details
    ============================================= -->
    <div class="services-details-area default-padding" style="padding-top: 64px !important">
    <div class="container">   
 <form action="<?= base_url('editarFotoGaleria')."/".$id ?> " method="POST" enctype="multipart/form-data" >
<div class="row">
	<div class="col-md-12">
		

			  <img src="assets/img/galeria/<?= $imagen['imagen'] ?>" alt="Thumb">


				<br>
				<label>Filtro</label>

				<select name="filtro">

				<?php foreach ($filtros->result() as $row): ?>
				

<?php echo $imagen['filtro']."== ".$row->id ?>


					<?php if ($imagen['filtro'] == $row->id): ?>
						

					<option value="<?= $row->id ?> " selected><?= $row->nombre ?></option>

					<?php endif ?>

					<?php if ($imagen['filtro'] != $row->id): ?>
						

					<option value="<?= $row->id ?> "><?= $row->nombre ?></option>

					<?php endif ?>

				
				
				<?php endforeach ?>

			



				</select>

	 </div>

	
</div>
<br>
  
 
     
      <input type="submit" name="enviar" class="fadeIn fourth " style="padding: 10px" value="Cambiar Foto">
    </form>

<br>

</div>
