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
			top: 27
		});
		$(".ouvrirH").css("display","none");
		$(".fermerH").css("display","block");
	}
	else if (elem==".ouvrirH2"){
		$("#voletH2").animate({
			top: 40
		});
		$(".ouvrirH2").css("display","none");
		$(".fermerH2").css("display","block");
		$("#voletH").css("display","none");
	}
}

function fermer(elem){
	if (elem==".fermerLG") {
		$(".titreCacheG").fadeOut();
		$("#deployerG").css("display","block");
		$("#reduireG").css("display","none");
		$("#voletLG").animate({
			left: "-120"
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
		$(".titreDroit").css("width","100px");
		$(".ouvrirLD").css("display","block");
		$(".fermerLD").css("display","none");
	}
	else if (elem==".fermerH") {
		var hauteur = $("#voletH").css("height");
		$("#voletH").animate({
			top: -293
		});
		$(".ouvrirH").css("display","block");
		$(".fermerH").css("display","none");
	}
	else if (elem==".fermerH2") {
		$("#voletH2").animate({
			top: -202
		});
		$(".ouvrirH2").css("display","block");
		$(".fermerH2").css("display","none");
		$("#voletH").css("display","block");
		
	}

}

function changerTitre(doc){
	/*Week1*/
	if( doc==".week1Doc1"){
		$("#clicWeek1 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>The Flatmates: At the Airport");
	}
	else if (doc==".week1Doc2"){
		$("#clicWeek1 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>What are your best qualities?");
	}
	else if (doc==".week1Doc3"){
		$("#clicWeek1 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>The Flatmates: Not so much Luck");
	}
	else if (doc==".week1Doc4"){
		$("#clicWeek1 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Have or have got");
	}
	else if (doc==".week1Doc5"){
		$("#clicWeek1 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>The Flatmates: At the Airport");
	}
	/*Week2*/
	else if (doc==".week2Doc1"){
		$("#clicWeek2 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Listen to six people describe where they like to live");
	}
	else if (doc==".week2Doc2"){
		$("#clicWeek2 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Countryside");
	}
	else if (doc==".week2Doc3"){
		$("#clicWeek2 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Town jigsaw puzzle");
	}
	else if (doc==".week2Doc4"){
		$("#clicWeek2 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Listen to six people describing the best places to live");
	}
	else if (doc==".week2Doc5"){
		$("#clicWeek2 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Past Simple");
	}
	/*Week3*/
	else if (doc==".week3Doc1"){
		$("#clicWeek3 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Office vocabulary (Match the image with the word)");
	}
	else if (doc==".week3Doc2"){
		$("#clicWeek3 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Shapes vocabulary (Match the image with the word)");
	}
	else if (doc==".week3Doc3"){
		$("#clicWeek3 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Match the image with the word");
	}
	/*Week4*/
	else if (doc==".week4Doc1"){
		$("#clicWeek4 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Describing people");
	}
	else if (doc==".week4Doc2"){
		$("#clicWeek4 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Past Simple");
	}
	else if (doc==".week4Doc3"){
		$("#clicWeek4 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Shapes");
	}
	else if (doc==".week4Doc4"){
		$("#clicWeek4 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>In the Classroom quiz");
	}
	else if (doc==".week4Doc5"){
		$("#clicWeek4 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Adjectives");
	}
	else if (doc==".week4Doc6"){
		$("#clicWeek4 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Adjectives");
	}
	/*Week5*/
	else if (doc==".week5Doc1"){
		$("#clicWeek5 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>How to Write an Article?");
	}
	else if (doc==".week5Doc2"){
		$("#clicWeek5 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>The Simpsons");
	}
	else if (doc==".week5Doc3"){
		$("#clicWeek5 .titreAChange").html("<img src=\"img/document.png\" class=\"offset1\"/>Writing");
	}
	/*Niveaux*/
	else if (doc==".nivWeek1"){
		if ($("#clicWeek1 .tabDescr").hasClass("active")) {
			$("#clicWeek1 .titreAChange").html("");
		}
		
	}
	else if (doc==".nivWeek2"){
		if ($("#clicWeek2 .tabDescr").hasClass("active")) {
			$("#clicWeek2 .titreAChange").html("");
		}

	}
	else if (doc==".nivWeek3"){
		if ($("#clicWeek3 .tabDescr").hasClass("active")) {
			$("#clicWeek3 .titreAChange").html("");
		}
	}
	else if (doc==".nivWeek4"){
		if ($("#clicWeek4 .tabDescr").hasClass("active")) {
			$("#clicWeek4 .titreAChange").html("");
		}
	}
	else if (doc==".nivWeek5"){
		if ($("#clicWeek5 .tabDescr").hasClass("active")) {
			$("#clicWeek5 .titreAChange").html("");
		}
	}
	else if (doc==".nivEtape2"){
		if ($("#clicEtape2 .tabDescr").hasClass("active")) {
			$("#clicEtape2 .titreAChange").html("");
		}
	}
	else if (doc==".nivParcoursPass"){
		if ($("#clicParcoursPass .tabDescr").hasClass("active")) {
			$("#clicParcoursPass .titreAChange").html("");
		}
	}
}

function changerTab(doc){
	/*Week1*/
	if (doc==".week1Doc1") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week1Doc1").parent().addClass("active");
		
	}
	else if (doc==".week1Doc2") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week1Doc2").parent().addClass("active");
	}
	else if (doc==".week1Doc3") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week1Doc3").parent().addClass("active");
	}

	else if (doc==".week1Doc4") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week1Doc4").parent().addClass("active");
	}

	else if (doc==".week1Doc5") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week1Doc5").parent().addClass("active");
	}
	/*Week2*/
	else if (doc==".week2Doc1") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week2Doc1").parent().addClass("active");
		
	}
	else if (doc==".week2Doc2") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week2Doc2").parent().addClass("active");
	}
	else if (doc==".week2Doc3") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week2Doc3").parent().addClass("active");
	}

	else if (doc==".week2Doc4") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week2Doc4").parent().addClass("active");
	}

	else if (doc==".week2Doc5") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week2Doc5").parent().addClass("active");
	}
	/*Week3*/
	else if (doc==".week3Doc1") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week3Doc1").parent().addClass("active");
		
	}
	else if (doc==".week3Doc2") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week3Doc2").parent().addClass("active");
	}
	else if (doc==".week3Doc3") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week3Doc3").parent().addClass("active");
	}
	/*Week4*/
	else if (doc==".week4Doc1") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week4Doc1").parent().addClass("active");
		
	}
	else if (doc==".week4Doc2") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week4Doc2").parent().addClass("active");
	}
	else if (doc==".week4Doc3") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week4Doc3").parent().addClass("active");
	}

	else if (doc==".week4Doc4") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week4Doc4").parent().addClass("active");
	}

	else if (doc==".week4Doc5") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week4Doc5").parent().addClass("active");
	}
	else if (doc==".week4Doc6") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week4Doc6").parent().addClass("active");
	}
	/*Week5*/
	else if (doc==".week5Doc1") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week5Doc1").parent().addClass("active");
		
	}
	else if (doc==".week5Doc2") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week5Doc2").parent().addClass("active");
	}
	else if (doc==".week5Doc3") {
		$(".nav-tabs>li").removeClass("active");
		$(".nav-tabs>li>.week5Doc3").parent().addClass("active");
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
		$(".titreDroit").css("width","100%");
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
		$(".titreDroit").css("width","100px");
		$("#deployerD").css("display","block");
		$("#reduireD").css("display","none");
	}
	else if (elem=="#reduireH") {
		$(".titreCacheH").fadeOut();
		$("#deployerH").css("display","block");
		$("#reduireH").css("display","none");
	}
}

function ouvrirPage(id){
	if (id=="#clicWeek3Doc2p1") {
		$("#week3Doc2p1").css("display","block");
		$("#week3Doc2p2").css("display","none");
	}
	else if (id=="#clicWeek3Doc2p2") {
		$("#week3Doc2p1").css("display","none");
		$("#week3Doc2p2").css("display","block");
	}

}

function afficherNiveau(niv){
	if (niv==".clicParcoursPass") {
		$("#clicParcoursPass").css("display","block");
		$("#clicEtape2").css("display","none");
		$("#clicWeek1").css("display","none");
		$("#clicWeek2").css("display","none");
		$("#clicWeek3").css("display","none");
		$("#clicWeek4").css("display","none");
		$("#clicWeek5").css("display","none");
	}
	else if (niv==".clicEtape2") {
		$("#clicParcoursPass").css("display","none");
		$("#clicEtape2").css("display","block");
		$("#clicWeek1").css("display","none");
		$("#clicWeek2").css("display","none");
		$("#clicWeek3").css("display","none");
		$("#clicWeek4").css("display","none");
		$("#clicWeek5").css("display","none");
	}

	else if (niv==".clicWeek1") {
		$("#clicParcoursPass").css("display","none");
		$("#clicEtape2").css("display","none");
		$("#clicWeek1").css("display","block");
		$("#clicWeek2").css("display","none");
		$("#clicWeek3").css("display","none");
		$("#clicWeek4").css("display","none");
		$("#clicWeek5").css("display","none");
	}

	else if (niv==".clicWeek2") {
		$("#clicParcoursPass").css("display","none");
		$("#clicEtape2").css("display","none");
		$("#clicWeek1").css("display","none");
		$("#clicWeek2").css("display","block");
		$("#clicWeek3").css("display","none");
		$("#clicWeek4").css("display","none");
		$("#clicWeek5").css("display","none");
	}

	else if (niv==".clicWeek3") {
		$("#clicParcoursPass").css("display","none");
		$("#clicEtape2").css("display","none");
		$("#clicWeek1").css("display","none");
		$("#clicWeek2").css("display","none");
		$("#clicWeek3").css("display","block");
		$("#clicWeek4").css("display","none");
		$("#clicWeek5").css("display","none");
	}

	else if (niv==".clicWeek4") {
		$("#clicParcoursPass").css("display","none");
		$("#clicEtape2").css("display","none");
		$("#clicWeek1").css("display","none");
		$("#clicWeek2").css("display","none");
		$("#clicWeek3").css("display","none");
		$("#clicWeek4").css("display","block");
		$("#clicWeek5").css("display","none");
	}

	else if (niv==".clicWeek5") {
		$("#clicParcoursPass").css("display","none");
		$("#clicEtape2").css("display","none");
		$("#clicWeek1").css("display","none");
		$("#clicWeek2").css("display","none");
		$("#clicWeek3").css("display","none");
		$("#clicWeek4").css("display","none");
		$("#clicWeek5").css("display","block");
	}
}

function initVisible(id){
	$("#"+id).addClass('visibleLi');
	$("#"+id).removeClass('invisibleLi');
	$("#"+id+">.icon-eye-close").next().css('display','inline-block');
	$("#"+id+">.icon-eye-close").css('display','none');
	$("."+id).addClass('outilVisible');
	$("."+id).removeClass('outil');
}

function rendreVisible(id){
	$(id).parent().addClass('visibleLi');
	$(id).parent().removeClass('invisibleLi');
	$(id).next().css('display','inline-block');
	$(id).css('display','none');
	var idRecup = $(id).parent().attr('id');
	$("."+idRecup).addClass('outilVisible');
	$("."+idRecup).removeClass('outil');
}

function rendreInvisible(id){
	$(id).parent().addClass('invisibleLi');
	$(id).parent().removeClass('visibleLi');
	$(id).prev().css('display','inline-block');
	$(id).css('display','none');
	var idRecup = $(id).parent().attr('id');
	$("."+idRecup).removeClass('outilVisible');
	$("."+idRecup).addClass('outil');
}

function supprimer(id){
	$(id).parent().addClass('invisibleLi');
	$(id).parent().removeClass('visibleLi');
	$(id).prev().css('display','inline-block');
	$(id).css('display','none');
	var idRecup = $(id).parent().attr('id');
	$("."+idRecup).removeClass('outilVisible');
	$("."+idRecup).addClass('outil');
	$(id).parent().css('display','none');
}