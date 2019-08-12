var tam = 100;

function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}

function aumenta_diminui_fonte(valor){
	if (valor==1){
		if (tam<150){
			tam+=10;
			document.getElementById('html-sap').style.fontSize = tam + '%';
			
		}
	} else {
		if (tam>50){
			tam-=10;
			document.getElementById('html-sap');
			document.getElementById('html-sap').style.fontSize = tam + '%';
		}
	}
	
	console.log("aa");
	
}


function trocamulher(direcao){

}

function esconderDiv() {
  var x = document.getElementById("exibir-mulheres");
  if (x.style.display === "none") {
    x.style.display = "block";
    wait(100);
  	const y = x.top + window.scrollY;
  	window.scroll({
  	top: y,
  	behavior: 'smooth'
	});
  } else {
    x.style.display = "none";
  }
}

var num = -1;

function atualiza(){
   url : 'mulheres_ciencia.php', // your php file
   type : 'GET', // type of the HTTP request
   success : function(data){
      var obj = jQuery.parseJSON(data);
      num = obj[0][1];
      document.getElementById("nome-mulher").html(objet[0][2]);
   }

   esconderDiv();
};