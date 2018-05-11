function validar() {
	var correo,correo2,condiciones;
	correo=document.getElementById("email").value;
	correo2=document.getElementById("email2").value;
    condiciones=document.getElementById('condi').checked;
	if (correo!=correo2){
		alert("Los Correos No Coinciden");
		return false;
	}
	else {
        if (condiciones==false){
            alert("Debe Aceptar Nuestros Terminos y Condiciones");
            return false;
        }else {
            return true;   
        }
	}
}
/**
function ValidarImagen(obj){
    var uploadFile = obj.files[0];
    
    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif)$/i).test(uploadFile.name)) {
        alert('El archivo a adjuntar no es una imagen');
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 200 && this.height.toFixed(0) != 200) {
                alert('Las medidas deben ser: 200 * 200');
            }
            else if (uploadFile.size > 20000)
            {
                alert('El peso de la imagen no puede exceder los 200kb')
            }
            else {
                alert('Imagen correcta :)') 
            }
        };
         img.src = URL.createObjectURL(uploadFile);           
    }                 
}**/