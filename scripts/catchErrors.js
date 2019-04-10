$(document).ready(function(){
	catchErrors();
});

function catchErrors() {
    url = window.location.href;
    
	if(url.indexOf('error') !== -1) {
        type = url.split('=');
		switch(type[1]) {
			case '1':
                message = 'No se pudo insertar el nuevo cliente.';
            break;
            case '2':
                message = 'El nombre o el dni son inválidos.';
            break;
            case '3':
                message = 'No se pudo editar el cliente. Datos inválidos o cliente inexistente.';
            break;
        }
        $('#alert span:last').after('<strong>ERROR</strong>: ' + message);
        $('#alert').css('display', 'block');
    }
}