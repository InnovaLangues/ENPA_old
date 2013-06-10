$(function(){

	var hauteur = $("#voletH").css("height");
	$("#voletH").css("top","-="+hauteur);
	var hauteur2 = $("#voletH2").css("height");
	$("#voletH2").css("top","-="+hauteur2);

	/*Fonctions servant à faire apparaitre correctement les tooltips*/
	$('.droite').popover({placement:'right', container:'body',trigger:'hover'});
	$('.gauche').popover({placement:'left', container:'body',trigger:'hover'});
	$('.avatar').popover({placement:'bottom', container: '.navbar',trigger:'hover'});

		/*Fonctions pour le placement d'origine des volets*/
	$("#voletLD").animate({
			right: "0"
	});
	$(".ouvrirLD").css("display","none");
	$(".fermerLD").css("display","block");

	$("#voletLG").animate({
		left: "0"
	});
	$(".ouvrirLG").css("display","none");
	$(".fermerLG").css("display","block");

	/*Fonctons rendant visible ce qui doit l'être au chargement de la page*/
	
	initVisible("parcoursPASS");
	initVisible("etape2");
	initVisible("week1");
	initVisible("week2");
	initVisible("week3");
	initVisible("week4");
	initVisible("week5");
	initVisible("officeVoc");
	initVisible("shapesVoc");
	initVisible("officeSup");
	initVisible("liaison");
	initVisible("forumCours");
	initVisible("forumUnite");
	initVisible("charte");

	/*Fonction initialisant les scrollbars*/

	$('#scrollH').perfectScrollbar({wheelSpeed:50});
	$('#scrollH2').perfectScrollbar({wheelSpeed:50});
	$('#scrollG').perfectScrollbar({wheelSpeed:50});
	$('#scrollD').perfectScrollbar({wheelSpeed:50});

	/*Fonctions de déplacement des unités dans le volet du haut*/

	 $( ".sortable" ).sortable();
	 $( ".sortable" ).disableSelection();
	
	/*Fonctions de déplacement des éléments du volet du haut d'édition*/
	$(".sortable2").sortable({
		connectWith: ".connectedSortable",
		update: function(event, ui){
					var idRec = ui.item.attr('id');
					var idPar = ui.item.parent().parent().attr('id');

					/*if ($("."+idRec+" img").hasClass('gauche')==true){
						$("."+idRec).appendTo("#voletLD>."+idPar);
					}
					else{
						$("."+idRec).appendTo("#voletLG>."+idPar+">div>.accordionContent");
						$("#voletLG>."+idPar+">div>.accordionContent").slideDown("normal");

					}*/

					if ($("#"+idRec+"LG").length) {
						$("#"+idRec+"LG").appendTo("#"+idPar+"LG>ul");
					}
					else if ($("#"+idRec+"LD").length) {
						$("#"+idRec+"LD").appendTo("#"+idPar+"LD>ul");
					}
				}
	});
	$(".sortable2").disableSelection();

	/*Fonctions de déplacement des éléments dans le volet de gauche*/

	$("#sortableFormation").sortable();
	$("#sortableFormation").disableSelection();

	$(".sortableG").sortable({
		connectWith: ".sortableG"
	});
	$(".sortableG").disableSelection();	

	/*Fonctions de déplacement des éléments dans le volet de gauche*/

	$(".sortableD").sortable({
		connectWith: ".sortableD",
		cancel: ".plus"
	});
	$(".sortableD").disableSelection();	

});