$(document).ready(function(){
	getLocalities();
});

function getLocalities() {
    url = './db/getLocalities.php';
    if(window.location.href.split('views').length == 2) {
        url = '../db/getLocalities.php';
    }
	$.ajax({
		type: 'POST',
		url,
		dataType: 'json',
		success: function(res) {
            status = res[0];
            if(status == 200) {
                showLocalities(res[1]);
            } else {
                message = 'No existen localidades.';
                $('#alert span:last').after('<strong>ERROR</strong>: ' + message);
                $('#alert').css('display', 'block');
            }
        },
        error: function(xhr) {
			console.log(xhr);
		}
	});
}