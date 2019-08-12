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
	
	
	
}


function trocamulher(direcao){
	if (atual>1 && direcao==-1) {
		atual=atual+direcao;
		if (exibindo == 1)
			exibirMulher(atual);
		if (exibindo == 2)
			exibirMulherEntretenimento(atual);
		if (exibindo == 3)
	    	exibirMulherNegra(atual);	
	    if (exibindo == 4)
	    	exibirComunidadeLGBTQ(atual);
	}

	if (atual<total && direcao==1){
		atual=atual+direcao;
		if (exibindo == 1)
			exibirMulher(atual);
		if (exibindo == 2)
			exibirMulherEntretenimento(atual);
		if (exibindo == 3)
	    	exibirMulherNegra(atual);
	    if (exibindo == 4)
	    	exibirComunidadeLGBTQ(atual);
	}
}
var atual = -1;
var total = 0;
var primeiraCiencia = false;
var primeiraEntretenimento = false;
var exibindo = 0;

function exibirMulher(posicao){
	$.ajax({
	   url : 'mulheres_ciencia.php', // your php file
	   type : 'GET', // type of the HTTP request
	   success : function(data){
	   		
	      var obj = jQuery.parseJSON(data);
	      
	   			primeiraCiencia = true;
	   			// Remove current options
		        $("#dropdown-lista").html('');
		        // Add the empty option with the empty message
		        total = obj.length;
		        for (i = 0; i < obj.length; i++ ){
		        	$("#dropdown-lista").append('<a class="dropdown-item" href="#exibir-mulheres" onclick="exibirMulher('+obj[i][0]+')">' + obj[i][1] + '</a>');
		    	}

	   		
		  atual = posicao;	
	      var aux = posicao-1;
	      $("#nome-mulher").text(obj[aux][1]);
	      $("#nacionalidade").html("<strong>Nacionalidade: </strong>" + obj[aux][2]);
	      $("#formacao").html("<strong>Formação Acadêmica: </strong>" + obj[aux][3]);
	      $("#profissao").html("<strong>Profissão: </strong>" + obj[aux][4]);
	      $("#feitos").html("<strong>Feitos: </strong>" + obj[aux][5]);
	     
	      $("#imagem-mulheres").attr('src',obj[aux][6]);
	   }
	});
}


function exibirMulherEntretenimento(posicao){
	$.ajax({
	   url : 'mulheres_entretenimento.php', // your php file
	   type : 'GET', // type of the HTTP request
	   success : function(data){
	   		
	      var obj = jQuery.parseJSON(data);
	      
	   			
	   			// Remove current options
		        $("#dropdown-lista").html('');
		        // Add the empty option with the empty message
		        total = obj.length;
		        for (i = 0; i < obj.length; i++ ){
		        	$("#dropdown-lista").append('<a class="dropdown-item" href="#exibir-mulheres" onclick="exibirMulherEntretenimento('+obj[i][0]+')">' + obj[i][1] + '</a>');
		    	}

	 
		  atual = posicao;	
	      var aux = posicao-1;
	      $("#nome-mulher").text(obj[aux][1]);
	      $("#nacionalidade").html("<strong>Profissão: </strong>" + obj[aux][2]);
	      $("#formacao").html("<strong>Data de nascimento: </strong>" + obj[aux][3]);
	      $("#profissao").html("<strong>Local de nascimento: </strong>" + obj[aux][4]);
	      $("#feitos").html("<strong>Destaques: </strong>" + obj[aux][5]);
	     
	      $("#imagem-mulheres").attr('src',obj[aux][6]);
	   }
	});
}

function exibirMulherNegra(posicao){
	$.ajax({
	   url : 'mulheres_negras.php', // your php file
	   type : 'GET', // type of the HTTP request
	   success : function(data){
	   		
	      var obj = jQuery.parseJSON(data);
	      
	   			
	   			// Remove current options
		        $("#dropdown-lista").html('');
		        // Add the empty option with the empty message
		        total = obj.length;
		        for (i = 0; i < obj.length; i++ ){
		        	$("#dropdown-lista").append('<a class="dropdown-item" href="#exibir-mulheres" onclick="exibirMulherNegra('+obj[i][0]+')">' + obj[i][1] + '</a>');
		    	}

	 
		  atual = posicao;	
	      var aux = posicao-1;
	      $("#nome-mulher").text(obj[aux][1]);
	      $("#nacionalidade").html("<strong>Nascimento: </strong>" + obj[aux][2]);
	      $("#formacao").html("<strong>Informações: </strong>" + obj[aux][3]);
	      $("#profissao").html("");
	      $("#feitos").html("");
	     
	      $("#imagem-mulheres").attr('src',obj[aux][4]);
	   }
	});
}

function exibirComunidadeLGBTQ(posicao){
	$.ajax({
	   url : 'comunidade_lgbtq.php', // your php file
	   type : 'GET', // type of the HTTP request
	   success : function(data){
	   		
	      var obj = jQuery.parseJSON(data);
	      
	   			
	   			// Remove current options
		        $("#dropdown-lista").html('');
		        // Add the empty option with the empty message
		        total = obj.length;
		        for (i = 0; i < obj.length; i++ ){
		        	$("#dropdown-lista").append('<a class="dropdown-item" href="#exibir-mulheres" onclick="exibirComunidadeLGBTQ('+obj[i][0]+')">' + obj[i][1] + '</a>');
		    	}

	 
		  atual = posicao;	
	      var aux = posicao-1;
	      $("#nome-mulher").text(obj[aux][1]);
	      $("#nacionalidade").html("<strong>Profissão: </strong>" + obj[aux][2]);
	      $("#formacao").html("<strong>Data de nascimento: </strong>" + obj[aux][3] + "<br>" + "<strong>Local de nascimento: </strong>" + obj[aux][4]);
	      $("#profissao").html("<strong>É: </strong>" + obj[aux][5]);
	      $("#feitos").html("<strong>Citação: </strong>" + obj[aux][6]);
	     
	      $("#imagem-mulheres").attr('src',obj[aux][7]);
	   }
	});
}

$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
});

$("#card1").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});

function exibirX(){
	  var x = document.getElementById("exibir-mulheres");
	    console.log(x.bottom);

}

function esconderDiv(troca) {
  var x = document.getElementById("exibir-mulheres");
    var xy = document.getElementById("sobre");

  if (x.style.display === "none" || troca!=exibindo) {
  		exibindo = troca;
  		
	    x.style.display = "block";
	    if (troca == 1) {
	    	exibirMulher(1);
	    	$("#titulo-descricao").html("MULHERES NA CIÊNCIAS");
	    	$("#descricao").html("O machismo reforça a falsa visão de que mulheres são inferiores aos homens e não possuem capacidades intelectuais em função de sua natureza biológica. Evidenciar as realizações e contribuições de mulheres para o avanço da ciência se faz necessário quando, em pelo século XXI, ainda se houve dizer que o papel da mulher se resume a tarefas domésticas e servidão ao homem.");
	    }
	    if (troca == 2){
	    	exibirMulherEntretenimento(1);
	    	$("#titulo-descricao").html("MULHERES NO ENTRETENIMENTO");
	    	$("#descricao").html("A luta feminina por um espaço na sociedade é antiga e desde os primórdios da história sofre com o machismo e discriminação. Inicialmente, a beleza física é a característica que a sociedade espera vir de uma mulher, ignorando sua capacidade humana de pensar criticamente. Com o espaço tomado pela mídia e sua capacidade memorável de manipular os desejos da humanidade, torna-se ainda mais difícil essa luta. É preciso desconstruir esse padrão vendido e imposto por uma sociedade machista, eurocêntrica e sexista a fim de se criar uma homogeneidade na esfera dos holofotes. A representatividade feminina em espaços de poder, ocupados majoritariamente por homens, é necessária para se evidenciar a potencialidade da mulher por trás da “beleza” física no âmbito midiático e do entretenimento.");
	    }
	    if (troca == 3) {
	    	exibirMulherNegra(1);
	    	$("#titulo-descricao").html("MULHERES NEGRAS NA HISTÓRIA");
	    	$("#descricao").html("Além do machismo, as mulheres negras sofrem com o racismo. Numa sociedade em que pouco se espera de uma mulher, ser negra é símbolo de resistência. Evidenciar a representatividade dessas mulheres em todas as áreas do conhecimento é uma das formas de lutar contra a discriminação e superioridade racial, buscando quebrar os pré-conceitos tecidos sobre a mulher negra e o lugar que ela deve ocupar na sociedade.");	
	    }
	    if (troca == 4)	{
	    	exibirComunidadeLGBTQ(1);
	    	$("#titulo-descricao").html("COMUNIDADE LGBTQ+");
	    	$("#descricao").html("Falar de luta e resistência sem citar essa comunidade é impossível. Tão importante quanto a causa feminista e ativismo negro é a luta pelos direitos dos LGBTQ’s. É necessário visibilizar a potencialidade das pessoas que se identificam com essa comunidade enquanto ser humano, mostrando que a maneira como se identificam não interferem nas suas capacidades intelectuais, e dando à elas a oportunidade de se posicionarem sem medo de abusos, agressões ou silenciamento.");
	    }
	    
	    
	  	const y = x.top + window.scrollY;
	  	

  } else {
    x.style.display = "none";
  }
}


function exibir_termos(id){

	$.ajax({
           url : 'dicionario_termos.php', // your php file
           type : 'GET', // type of the HTTP request
           success : function(data){ 
              var obj = jQuery.parseJSON(data);
              $("#exibir-descricao").html("");
              $("#exibir-descricao").append("<h3>" + obj[id][1] + "</h3>");
              $("#exibir-descricao").append("<hr style='border-style: dotted; border-width: 3px;'>");
              $("#exibir-descricao").append("<p>" + obj[id][2] + "</p>");
            }
        });
	
}

function exibir_termos_letra(letra){
	var letraS = '';
	if (letra == 1)
		letraS = 'A';
	if (letra == 2)
		letraS = 'B';
	if (letra == 3)
		letraS = 'C';
	if (letra == 4)
		letraS = 'D';
	if (letra == 5)
		letraS = 'E';
	if (letra == 6)
		letraS = 'F';
	if (letra == 7)
		letraS = 'G';
	if (letra == 8)
		letraS = 'H';
	if (letra == 9)
		letraS = 'I';
	if (letra == 10)
		letraS = 'J';
	if (letra == 11)
		letraS = 'K';
	if (letra == 12)
		letraS = 'L';
	if (letra == 13)
		letraS = 'M';
	if (letra == 14)
		letraS = 'N';
	if (letra == 15)
		letraS = 'O';
	if (letra == 16)
		letraS = 'P';
	if (letra == 17)
		letraS = 'Q';
	if (letra == 18)
		letraS = 'R';
	if (letra == 19)
		letraS = 'S';
	if (letra == 20)
		letraS = 'T';
	if (letra == 21)
		letraS = 'U';
	if (letra == 22)
		letraS = 'V';
	if (letra == 23)
		letraS = 'W';
	if (letra == 24)
		letraS = 'X';
	if (letra == 25)
		letraS = 'Y';
	if (letra == 26)
		letraS = 'Z';
	



	$.ajax({
           url : 'dicionario_termos_letra.php?letra='+letraS, // your php file
           type : 'GET', // type of the HTTP request
           success : function(data){ 
              var obj = jQuery.parseJSON(data);
              $("#exibir-descricao").html("");

              for (i = 0; i < obj.length; i++){
              	
              	$("#exibir-descricao").append("<h3>" + obj[i][1] + "</h3>");
              	$("#exibir-descricao").append("<hr style='border-style: dotted; border-width: 3px;'>");
              	$("#exibir-descricao").append("<p>" + obj[i][2] + "</p>");
              	$("#exibir-descricao").append("<br>");
              }
            }
        });
	
}
