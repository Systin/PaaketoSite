var gifs = [
['https://i.ibb.co/TKG0c3V/1.gif', "Imagina uma mensagem bonitinha aqui"],
['https://i.ibb.co/L5fR23h/2.gif', "Imagina uma mensagem bonitinha aqui"],
['https://i.ibb.co/rfLWc0C/3.gif', "Imagina uma mensagem bonitinha aqui"],
['https://i.ibb.co/hLW6MB5/4.gif', "Imagina uma mensagem bonitinha aqui"]
]

window.onload = function () {

	
	let num = Math.floor(Math.random() * 4);
		
	$('#img_animacao_1').attr('src',gifs[num][0]);
	//$('#lb_mensagem_1').html(gifs[num][1]);
};