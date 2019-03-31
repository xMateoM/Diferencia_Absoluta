function IsReversible(){
	String.prototype.reverse = function(){
		return this.split("").reverse().join("");
	};

	var numero = $("#numero").val();
	var numeroInvertido = numero.reverse();
	numero = parseInt(numero);
	numeroInvertido = parseInt(numeroInvertido);
	var suma = numero + numeroInvertido;

	var resultado = parImpar(suma);
	alert('Resultado = ' + suma + ' - ' + resultado);
	$("#numero").val('');
}

function parImpar(numero){
	if(numero % 2 == 0){
		return false;
	}else{
		return true;
	}
}