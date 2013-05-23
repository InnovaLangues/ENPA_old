function ouvrir(elem){
	if (elem==".ouvrirLG") {
		$("#voletLG").animate({
			left: "0"
		});
		
		$(".ouvrirLG").css("display","none");
		$(".fermerLG").css("display","block");
	}
	else if (elem==".ouvrirLD"){
		$("#voletLD").animate({
			right: "0"
		});
		$(".ouvrirLD").css("display","none");
		$(".fermerLD").css("display","block");
	}
	
	else if (elem==".ouvrirH"){
		var hauteur = $("#voletH").css("height");
		$("#voletH").animate({
			top: "+="+hauteur
		});
		$(".ouvrirH").css("display","none");
		$(".fermerH").css("display","block");
	}
	else if (elem==".ouvrirH2"){
		$(".ouvrirH2").click(function(){
		$("#voletH2").animate({
			top: 45
		});
		$(".ouvrirH2").css("display","none");
		$(".fermerH2").css("display","block");
	});
	}
}

function fermer(elem){
	if (elem==".fermerLG") {
		$(".titreCacheG").fadeOut();
		$("#deployerG").css("display","block");
		$("#reduireG").css("display","none");
		$("#voletLG").animate({
			left: "-100"
		});
		$(".ouvrirLG").css("display","block");
		$(".fermerLG").css("display","none");

		
	}
	else if (elem==".fermerLD") {
		$(".titreCacheD").fadeOut();
		$("#deployerD").css("display","block");
		$("#reduireD").css("display","none");
		$("#voletLD").animate({
			right: "-100"
		});
		$(".ouvrirLD").css("display","block");
		$(".fermerLD").css("display","none");
	}
	else if (elem==".fermerH") {
		var hauteur = $("#voletH").css("height");
		$("#voletH").animate({
			top: "-="+hauteur
		});
		$(".ouvrirH").css("display","block");
		$(".fermerH").css("display","none");
	}
	else if (elem==".fermerH2") {
		$("#voletH2").animate({
			top: -246
		});
		$(".ouvrirH2").css("display","block");
		$(".fermerH2").css("display","none");
	}

}

function changerTitre(doc){
	if( doc==".doc1"){
		$(".titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Office vocabulary (Match the image with the word)");
	}
	else if (doc==".doc2"){
		$(".titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Shapes vocabulary (Match the image with the word)");
	}
	else if (doc==".doc3"){
		$(".titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Office Supplies Hangman (Play this game to test your knowledge on office vocabulary)");
	}
}

function changerTab(doc){
	if (doc==".doc1") {
		$(".nav-tabs>li>.doc1").parent().addClass("active");
		$(".nav-tabs>li>.doc3").parent().removeClass("active");
		$(".nav-tabs>li>.doc2").parent().removeClass("active");
		$("#pagesDoc2>ul").css('display','none');
	}
	else if (doc==".doc2") {
		$(".nav-tabs>li>.doc2").parent().addClass("active");
		$(".nav-tabs>li>.doc1").parent().removeClass("active");
		$(".nav-tabs>li>.doc3").parent().removeClass("active");
		$("#pagesDoc2>ul").css('display','block');
	}
	else if (doc==".doc3") {
		$(".nav-tabs>li>.doc3").parent().addClass("active");
		$(".nav-tabs>li>.doc1").parent().removeClass("active");
		$(".nav-tabs>li>.doc2").parent().removeClass("active");
		$("#pagesDoc2>ul").css('display','none');
	}
}

function deployer(elem){
	if (elem=="#deployerG") {
		$(".titreCacheG").fadeIn();
		$("#deployerG").css("display","none");
		$("#reduireG").css("display","block");
		$("#voletLG").animate({
		left: "0"
		});
		$(".ouvrirLG").css("display","none");
		$(".fermerLG").css("display","block");
	}
	else if (elem=="#deployerD") {
		$(".titreCacheD").fadeIn();
		$("#deployerD").css("display","none");
		$("#reduireD").css("display","block");
		$("#voletLD").animate({
		right: "0"
		});
		$(".ouvrirLD").css("display","none");
		$(".fermerLD").css("display","block");

	}
	else if (elem=="#deployerH") {
		$(".titreCacheH").fadeIn();
		$("#deployerH").css("display","none");
		$("#reduireH").css("display","block");
	}
}

function reduire(elem){
	if (elem=="#reduireG") {
		$(".titreCacheG").fadeOut();
		$("#deployerG").css("display","block");
		$("#reduireG").css("display","none");
	}

	else if (elem=="#reduireD") {
		$(".titreCacheD").fadeOut();
		$("#deployerD").css("display","block");
		$("#reduireD").css("display","none");
	}
	else if (elem=="#reduireH") {
		$(".titreCacheH").fadeOut();
		$("#deployerH").css("display","block");
		$("#reduireH").css("display","none");
	}
}