<!DOCTYPE html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/materialize.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('asset/css/styleuser.css') }}">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home</title>
</head>
<body style="background-color:#cfd8dc;">
	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	<ul id="slide-out" class="side-nav fixed">
		<li>
			<div class="userView">
				<div class="background">
					<img src="{{ URL::asset('/image/angga.jpg') }}">
				</div>
				<a href="#!user"><img class="circle" src="{{ URL::asset('/image/iconperawat.png') }}"></a>
				<a href="#!name"><span class="white-text name">PERAWAT</span></a>
			</div>
		</li>
		<li><a href="User.php" class="waves-effect" ><i class="material-icons">home</i>HOME</a></li>
		<li><div class="divider"></div></li>
		<li><a href="profileuser.php" class="waves-effect" ><i class="material-icons">face</i>PELAYANAN PEMERIKSAAN</a></li>
		<li><div class="divider"></div></li>
		<li>
			<a class="waves-effect active">PERUJUKAN PASIEN
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li>
			<a class="waves-effect">LIHAT TES LAB DALAM
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<li>
			<a class="waves-effect">PENGELOLAAN RESEP OBAT
				<i class="material-icons">assignment</i>
			</a>
		</li>

		<div class="divider"></div>

		<li>
			<a class="waves-effect">PENGELOLAAN RAWAT INAP
				<i class="material-icons">assignment</i>
			</a>
		</li>
		<div class="divider"></div>
		<li><a href="home.php" class="waves-effect" ><i class="material-icons">power_settings_new</i>LOG OUT</a></li>
	</ul>
	<div class="container">
		<div class="row">
			<form class="col s11 offset-s2" method="POST" action="{{ url('/update/pemeriksaans/'.$dataPelayanans->id_pelayanan) }}">
				{{method_field('put')}}
				{{ csrf_field() }}
				<h2 style="text-decoration:underline;">DATA PEMERIKSAAN</h2>
				<div class="row">
					<div class="input-field col s3">
						<select name="id_pendaftaran" disabled>
							@foreach($pendaftarans as $pendaftaran)
							<option {{($dataPelayanans->id_pendaftaran==$pendaftaran->id_pendaftaran)?'selected':''}} value="{{$pendaftaran->id_pendaftaran}}">{{$pendaftaran->id_pendaftaran}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate" name="keluhan" value="{{$dataPelayanans->keluhan}}">
						<label for="Alamat">Keluhan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate" name="diagnosa_penyakit" value="{{$dataPelayanans->diagnosa_penyakit}}">
						<label for="icon_telephone">Diagnosa Penyait</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s3">
						<select name="id_pegawai">
							<option value="" disabled selected>Pilih Id Pegawai</option>
							@foreach($pegawais as $pegawai)
							<option {{($dataPelayanans->id_pegawai==$pegawai->id_pegawai)?'selected':''}} value="{{$pegawai->id_pegawai}}">{{$pegawai->id_pegawai}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<textarea id="textarea1" class="materialize-textarea" name="saran_dokter" >
							{{$dataPelayanans->saran_dokter}}
						</textarea>
						<label for="textarea1">Saran Dokter</label>
					</div>
				</div>
				<div class="row">
					<div class="row">
						<h5>
							LAYANAN PEMERIKSAAN
						</h5>
						<p>
							@if($dataPelayanans->rawat_inap==1)
							<input type="checkbox" id="test5" name="rawat_inap" value="1" checked>
							@endif
							<label for="test5">RAWAT INAP</label>
						</p>
						<p>
							@if($dataPelayanans->rekam_medis==1)
							<input type="checkbox" id="test6" name="rekam_medis" value="1" checked>
							@endif
							<label for="test6">REKAM MEDIS</label>
						</p>
						<p>
							@if($dataPelayanans->rujukan==1)
							<input type="checkbox" id="test7" name="rujukan" value="1" checked>
							@endif
							<label for="test7">RUJUKAN</label>
						</p>
						<p>
							@if($dataPelayanans->resep==1)
							<input type="checkbox" id="test8" name="resep" value="1" checked>
							@endif
							<label for="test8">RESEP OBAT</label>
						</p>
						<p>
							@if($dataPelayanans->uji_lab==1)
							<input type="checkbox" id="test9" name="uji_lab" value="1" checked>
							@endif
							<label for="test9">UJI LAB</label>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<button type="submit" class="btn btn-primary btn-block" >SIMPAN</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function(){$(".button-collapse").sideNav();});
		$(document).ready(function() {
			$('select').material_select();
		});
		$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
</script>
</body>
</html>