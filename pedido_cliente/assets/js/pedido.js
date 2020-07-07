$(function(){
	var data = ["Java", "PHP", "Delphi", "C++", "Phyton", "C#"];
	var text = "";	
   
   $("#produto").on("keyup", function(){
       var q  = $(this).val();
			$.ajax({
				  url: base_url + "produto/buscar/" + q,
				  type: "POST",
				  dataType: "json",
				  data:{},
				  success: function (data){
					 console.log(data);
				  }
			   });
	   
	 
	/*
		$("#produto").after('<div class="listaProdutos"></div>');
		html = "";
	   var i;
		for (i = 0; i < data.length; i++) {		  
		  html +='<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)"'
		  + 'data-id="' + i +
		   '" data-valor="' + data[i] + '">' +
		  i + " - R$ " + data[i] + '</a></div>';
		  
		}
		$(".listaProdutos").html(html);
        $(".listaProdutos").show();*/
   }) ;
});
