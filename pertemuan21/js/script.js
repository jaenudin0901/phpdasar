$(document).ready(function(){

	// hilangkan tombol cari
	$('#tombol-cari').hide();
	// event ketika di tulis
	$('#keyword').on('keyup', function(){
		// munculkan icon loading
		$('.loader').show();

		// ajak menggunakan loader
		// $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
		// $.get()
		$.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){

			$('#container').html(data);
			$('.loader').hide();
		});
	});
});