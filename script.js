window.onload = function () {
	let num = Math.floor(Math.random() * 2)+1
	$("#animacao").attr('src','gifs/'+num+'.gif');
};