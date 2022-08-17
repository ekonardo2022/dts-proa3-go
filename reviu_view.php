<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Start Page Content -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-12">
				<div class="card mt-4">
					<div class="card-body">
						<table width="100%">
							<tr>
								<td>
									<h3 class="card-title"><?= $title ?></h3>
								</td>
								<td>
									<button type="button" class="btn btn-success float-right tambahKecamatanModal" data-toggle="modal" data-target="#kecamatanModal"><i class="fa fa-plus"></i> Tambah Berkas</button>

								</td>
							</tr>
						</table>
						<div class="table-responsive">
							<table id="tabelKecamatan" class="table">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th>Nomor Berkas</th>
										<th>Nama Pengadaan</th>
										<th>Tgl. Upload</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
                                <tbody>

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End PAge Content -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Modal  -->
<!-- ============================================================== -->
<div id="kecamatanModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="kecamatanModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="kecamatanModalLabel">Tambah Berkas</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal form-material" method="POST" action="<?= base_url('berkas/insert') ?>">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<div class="col-md-12 m-b-20">
                            Nomor Berkas
							<input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="" required> </div>
						<div class="col-md-12 m-b-20">
                        Nama Pengadaan
							<input type="text" class="form-control" id="koordinator" name="koordinator" placeholder="" required>
						</div>
						<div class="col-md-12 m-b-20">
                        Tgl. Upload
							<input type="date" class="form-control" id="koordinator" name="koordinator" placeholder="" required>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info waves-effect">Save</button>
				</form>
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<div id="passwordModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="passwordModalLabel">Lihat Password</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="col-md-12 m-b-20">
						<input type="text" class="form-control" name="showPassword" id="showPassword" disabled> </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>