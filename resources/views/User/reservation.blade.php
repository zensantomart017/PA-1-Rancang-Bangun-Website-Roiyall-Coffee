@include('Structure.navbar')

<div id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(/images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="col-sm-6 col-sm-push-3" style="padding-top: 250px; padding-bottom: 10px;">
					<form action="{{ route('reservation.store') }}" method="post" id="form-wrap" class="text-center" style=" background-color:#1B1B1B;">
                    @csrf
						<div class="row form-group">
							<div class="col-md-12">
                            <label for="name">Nama Lengkap</label>
            <div class="form-group">
                <input name="name" type="text" placeholder="Masukan Nama lengkap Anda" class="form-control">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <label for="tanggal">Tanggal Resevasi</label>
            <div class="form-group">
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="DD-MM-YYYY">
            </div>

            <label for="waktu">Waktu Resevasi</label>
            <div class="form-group">
                <input type="time" class="form-control" id="tanggal" name="waktu" value="HH:MM">
            </div>

            <label for="medsos">Media Sosial</label>
            <div class="form-group">
                <input type="text" class="form-control" id="nama" name="medsos" placeholder="Masukan akun medsos">
            </div>

            <label for="address">Alamat</label>
            <div class="form-group">
                <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <label for="telp">No. Telephone</label>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" name="phone_number" placeholder="xxxxxxxxxxxx">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group ">
                <label for="event">Event</label>
                <select id="sts" class="form-control" name="event">
                    <option selected>Pilih...</option>
                    <option value="Arisan">Arisan</option>
                    <option value="Kumpul keluarga besar">Kumpul keluarga besar</option>
                    <option value="Reunian">Reunian</option>
                    <option value="Ulang Tahun">Ulang Tahun</option>
                </select>
            </div>

            <label for="nama">Jumlah Anggota</label>
            <div class="form-group">
                <input type="number" class="form-control" id="nama" name="jumlah_anggota"
                    placeholder="Masukkan Jumlah Anggota" min="2" max="30">
            </div>

            <button type="submit" class="btn btn-primary">Buat Pesanan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
					</form>
				</div>
                </div>
		</div>

@include('Structure.footer')