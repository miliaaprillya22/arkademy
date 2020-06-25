<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Just another day</title>
    <!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css');?>">
	<style type="text/css">
		#jrs{ font-size: 19px; }
	</style>
  </head>
  <body>
	<div class="panel panel-default">
	    <div class="panel-heading"><div class="text-center">Daftar Barang</div></div>
	    <div class="panel-body">
		    <div class="page-header">
			  <p>Silahkan Input Disini</p>
			</div>
			<div class="row">
		    <div class="col-lg-4">
			<form class="form-horizontal" action="<?php echo site_url('barang/eksekusi_edit'); ?>" method="post" enctype="multipart/form-data">
				<?php foreach($data as $a):?>
				<input type="hidden" name="id" value="<?php echo($a->id);?>"/>
				<div class="form-group">
					<label class="control-label col-sm-2" for="Nama Barang">Nama Barang</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $a->nama_produk;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="keterangan">Keterangan</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $a->keterangan;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="harga">harga</label>
					<div class="col-sm-10">
					  <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $a->harga;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="jumlah">jumlah</label>
					<div class="col-sm-10">
					  <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $a->jumlah;?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</div>
				<?php endforeach; ?> 
			</form>
			</div>
			<div class="col-lg-8">
				<table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama produk</th>
						<th class="text-center">Keterangan</th>
						<th class="text-center">Harga Barang</th>
						<th class="text-center">jumlah</th>
						<th class="text-center" colspan="2">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					  <?php 
						if($c_brg>0){
							$no = 0;
							foreach($brg as $list){
					  ?>
					  <tr>
						<td class="text-center"><?php echo ++$no;?></td>
						<td class="text-center"><?php echo $list->nama_produk;?></td>
						<td class="text-center"><?php echo $list->keterangan;?></td>
						<td class="text-center"><?php echo $list->harga;?></td>
						<td class="text-center"><?php echo $list->jumlah;?></td>
						<td class="text-center">
							<a class="btn btn-primary btn-xs" href="<?php echo site_url('barang/edit_data/'.$list->id)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-xs" href="<?php echo site_url('barang/hapus_data/'.$list->id)?>" title="Edit">
								<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Hapus
							</a>
						</td>
					  </tr>
					  <?php 
							}
						}else{
					  ?>
					  <tr>
						<td colspan="5"><center>Data Produk Kosong</center></td>
					  </tr>
					  <?php 
						}
					  ?>
					</tbody>
				</table>
			</div>
			</div>
	    </div>
		<div class="panel-footer"><div class="text-center">Created : 06 October 2016</div></div>
	</div>
  
	<script src="<?php echo base_url('style/js/jquery-3.1.1.js');?>"></script>
	<script src="<?php echo base_url('style/js/bootstrap.min.js');?>"></script>
  </body>
</html>