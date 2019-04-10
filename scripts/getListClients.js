$(document).ready(function(){
	getListClients();
});

function getListClients() {
	$.ajax({
		type: 'POST',
		url: '../db/getListClients.php',
		dataType: 'json',
		success: function(res) {
            status = res[0];
            if(status == "200") {
                showListClients(res[1]);
            }
        },
        error: function(xhr) {
			console.log(xhr);
		}
	});
}