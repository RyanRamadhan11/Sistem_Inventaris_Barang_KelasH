<?php
	//Kelompok 2 : Kelas H
	function terlambat($tanggal_dateline, $tanggal_kembali){
	
	$tanggal_dateline_pecah = explode("-", $tanggal_dateline);
	$tanggal_dateline_pecah = $tanggal_dateline_pecah[2]."-".$tanggal_dateline_pecah[1]."-".$tanggal_dateline_pecah[0];
	
	$tanggal_kembali_pecah = explode("-", $tanggal_kembali);
	$tanggal_kembali_pecah = $tanggal_kembali_pecah[2]."-".$tanggal_kembali_pecah[1]."-".$tanggal_kembali_pecah[0];
	
	$selisih = strtotime($tanggal_kembali_pecah)- strtotime($tanggal_dateline_pecah);
	$selisih = $selisih/86400;
	
	if ($selisih>=1) {
		$hasil_tanggal = floor($selisih);
	}
	else{
		$hasil_tanggal = 0;
	}
	return  $hasil_tanggal;
	}
	
	?>