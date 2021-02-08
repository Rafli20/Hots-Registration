<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">HAFIZH ON THE STREET (HOTS) REGISTRATION</h1>
								</div>
								<?= $this->session->flashdata('massage'); ?>
								<form action="<?= base_url('form'); ?>" method="POST">
									<div class="form-group">
										<label for="nama_lengkap"> Nama Lengkap </label>
										<input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap" placeholder="Contoh : Rafli Farhan Saputra">
										<?= form_error('nama_lengkap', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="tempat_lahir"> Tempat Lahir </label>
										<input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Contoh : Jakarta ">
										<?= form_error('tempat_lahir', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="tanggal_lahir"> Tanggal Lahir </label>
										<input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir">
										<?= form_error('tanggal_lahir', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<select class="form-control " id="jenis_kelamin" name="jenis_kelamin">
											<option> Ikhwan ( Pria ) </option>
											<option> Akhwat ( Perempuan ) </option>
										</select>
									</div>
									<div class="form-group">
										<label for="pekerjaan"> Pekerjaan </label>
										<input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" placeholder="Contoh : Pegawai Swasta">
										<?= form_error('pekerjaan', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="no_whatsapp"> No. WhatsApp </label>
										<input type="text" class="form-control form-control-user" id="no_whatsapp" name="no_whatsapp" placeholder="Contoh : 08186248765 ">
										<?= form_error('no_whatsapp', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="email"> Alamat Email </label>
										<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Contoh : rafli@gmail.com ">
										<?= form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="domisili"> Domisili </label>
										<div class="form-floating">
											<textarea class="form-control" placeholder="Contoh : Jl. Bina Marga no.42G, Jakarta Timur" id="domisili" name="domisili"></textarea>
										</div>
										<?= form_error('domisili', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="kode_pos"> Kode Pos </label>
										<input type="text" class="form-control form-control-user" id="kode_pos" name="kode_pos" placeholder="Contoh : 13820 ">
										<?= form_error('kode_pos', '<small class="form-text text-danger">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="sumber_info_program"> Dari Mana Mengetahui Program Ini? </label>
										<select class="form-control " id="sumber_info_program" name="sumber_info_program">
											<option selected> Pilihan </option>
											<option> TV </option>
											<option> Radio </option>
											<option> Media Cetak </option>
											<option> Internet </option>
											<option> Media Sosial </option>
											<option> Kerabat </option>
											<option> Lainnya.... </option>
										</select>
									</div>
									<hr>
									<button type="submit" class="btn btn-success btn-user btn-block col-lg-7 mx-auto">
										Registration
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>