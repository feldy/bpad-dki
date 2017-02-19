$(document).ready(function(){
	$('#isiArtikel').summernote({
		height: 500,	// set editor height
		minHeight: 500,	// set minimum height of editor
		maxHeight: null,	// set maximum height of editor
		focus: true,	// set focus to editable area after initializing summernote
		callbacks: {
			onImageUpload: function(files) {
				for(var i = 0; i < files.length; i++) {
					sendFile(files[i]);
				}
			}
		}
	});


	function sendFile(file) {
      	if(file.type.includes('image')) {
			var name = file.name.split(".");name = name[0];  
			var data = new FormData();
			data.append('file', file);
			data.append('sid', $("#sidArtikel").val());
			$.ajax({
				url: '../../system/uploader.php',
				type: 'POST',
				contentType: false,
				cache: false,
				processData: false,
				dataType: 'JSON',
				data: data,
				success: function (response) {
					if(response.is_ok) {
						$('#isiArtikel').summernote('insertImage', response.url, function($image) {
							// $image.css('width', '100%');
                			$image.addClass('img-responsive');
						});
					} else {
						console.log(response.error);
					}
				}
			})
			.fail(function(e) {
				console.log(e);
			});
		} else {
			console.log("Jenis File Bukan file gambar !");
		}
   	};





   	var bestPictures = new Bloodhound({
	  	datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
	  	queryTokenizer: Bloodhound.tokenizers.whitespace,
	  	// prefetch: '../data/films/post_1960.json',
	  	remote: {
	    	url: '../../system/service_impl.php?typeahead=%QUERY',
	    	wildcard: '%QUERY'
	  	}
	});

	$('#kategoriArtikel').typeahead(null, {
	  	name: 'category',
	  	display: 'category',
	  	source: bestPictures
	});
});

function deleteAction(sid) {
	console.log(">>", sid);
	var data = new FormData();
	data.append('btnDeleteArtikel', true);
	data.append('sid', sid);
	$.ajax({
		url: '../../system/crud_impl.php',
		type: 'POST',
		contentType: false,
		cache: false,
		processData: false,
		dataType: 'JSON',
		data: data,
		success: function (response) {
			if(response.is_ok) {
				window.location.reload();
			} else {
				console.log(response.error);
			}
		}
	})
	.fail(function(e) {
		console.log(e);
	});
}
