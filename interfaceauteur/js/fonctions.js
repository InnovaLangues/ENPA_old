$(function(){

	/*Fonctions servant à animer le volet de gauche*/
	$(".ouvrirLG").click(function(){
		ouvrir(".ouvrirLG");
	});
	$(".fermerLG").click(function(){
		fermer(".fermerLG");
		});
	/*Fonctions servant à animer le volet d'édition*/
	$(".ouvrirEdit").click(function(){
		ouvrir(".ouvrirEdit");
	});
	$(".fermerEdit").click(function(){
		fermer(".fermerEdit");
	});
	/*Fonctions servant à animer le volet de droite*/
	$(".ouvrirLD").click(function(){
		ouvrir(".ouvrirLD");
	});
	$(".fermerLD").click(function(){
		fermer(".fermerLD");
	});

	/*Fonctions servant à animer le volet du haut*/
	var hauteur = $("#voletH").css("height");
	$("#voletH").css("top","-="+hauteur);
	$(".ouvrirH").click(function(){
		ouvrir(".ouvrirH");
	});
	$(".fermerH").click(function(){
		fermer(".fermerH");
	});
	/*FOnctions servant à déplacer le volet du haut d'édition*/
var hauteur2 = $("#voletH2").css("height");
	$("#voletH2").css("top","-="+hauteur2);
		ouvrir(".ouvrirH2");
	$(".fermerH2").click(function(){
		fermer(".fermerH2");
	});

	/*Fonctions servant à faire apparaitre correctement les tooltips*/
	$('.droite').popover({placement:'right', container:'body',trigger:'hover'});
	$('.gauche').popover({placement:'left', container:'body',trigger:'hover'});
	$('.avatar').popover({placement:'bottom', container: '.navbar',trigger:'hover'});

	/*Essais menu contextuel*/
	/*var menu1 = [
	{'Option 1':function(menuItem,menu) { alert("You clicked Option 1!"); } },
	$.contextMenu.separator,
	{'Option 2':function(menuItem,menu) { alert("You clicked Option 2!"); } }
	];
	
	$('.cmenu1').contextMenu(menu1,{theme:'vista'});*/

	/*Menu activité*/
	var menuAct = [
	
	{'Cacher Activité':function(menuItem,menu) { $(this).css('display','none'); } },
	{'Editer Activité (Pas encore disponible)':function(menuItem,menu) {   } },
	{'Insérer en dessous':function(menuItem,menu) { /*
		$(this).after('<li class="listVerticale menuAct"><div class="span1"><a href="#"><img src="img/document.png" rel="popover" data-content="Nouveau Document" class="droite menuAct"/></a></div></li>'); 
	 	$('.activite:last').after('<li class="activite"><div class="span2 offset1 nom"><input type="text" placeholder="Saisissez le nom de l\'activité" class="nom" ></div><div class="span1"><button class="btn droite" rel="popover" data-content="Pas encore disponible">OK</button></div></li>');
	 	$('.droite').popover('destroy');
	 	$('.droite').popover({placement:'right', container:'body',trigger:'hover'});*/
	} },
	{'Modifier le titre (Pas encore disponible)':function(menuItem,menu) {   } }
	];
	
	$('.menuAct').contextMenu(menuAct,{theme:'vista'});

	/*Menu Espace d'activité*/
	var menuEsp = [
	
	{'Cacher Espace':function(menuItem,menu) { $(this).css('display','none'); } },
	{'Editer Espace (Pas encore disponible)':function(menuItem,menu) {  } },
	{'Insérer en dessous':function(menuItem,menu) { 
	var par = $(this).parent().parent().parent();
	par.after('<div class="row"><div class="span2"><a href="#"><img src="img/folder-close.png" rel="popover" data-content="Nouvelle unité" class="droite menuEsp"/></a></div></div>');
	 $('.unite:last').next().after('<hr><div class="row unite"><div class="span2 offset1 nom"><input type="text" placeholder="Saisissez le nom de l\'unité" class="nom"></div><div class="span2"><button class="btn droite" rel="popover" data-content="Pas encore disponible" type="button">OK</button><button class="btn accordion-toggle droite" rel="popover" data-content="Déployer" data-toggle="collapse" data-target="#list?" type="button"><i class="icon-chevron-down"></i></button></div></div>');
	 $('.droite').popover('destroy');
	 $('.droite').popover({placement:'right', container:'body',trigger:'hover'});
	 } },
	{'Modifier le titre (Pas encore disponible)':function(menuItem,menu) {   } }
	];
	
	$('.menuEsp').contextMenu(menuEsp,{theme:'vista'});

	/*Menu Outils*/
	var menuTools = [
	
	{'Cacher Outil':function(menuItem,menu) { $(this).css('display','none'); } },
	{'Option Outil (Pas encore disponible)':function(menuItem,menu) { } },
	{'Insérer Outil (Pas encore disponible)':function(menuItem,menu) { } },
	{'Modifier le titre (Pas encore disponible)':function(menuItem,menu) {   } }
	];
	
	$('.menuTools').contextMenu(menuTools,{theme:'vista'});

	/*Menu intitulés*/
	var menuInti = [
	
	{'Supprimer':function(menuItem,menu) { 
			$(this).addClass('invisibleLi');
			$(this).removeClass('visibleLi');
			$(this).prev().css('display','inline-block');
			$(this).css('display','none');
			var idRecup = $(this).attr('id');
			$("."+idRecup).removeClass('outilVisible');
			$("."+idRecup).addClass('outil');
			} }
	];
	
	$('.invisibleLi').contextMenu(menuInti,{theme:'vista'});
	$('.visibleLi').contextMenu(menuInti,{theme:'vista'});



	/*Fonctions servant à éditer le nom des éléments*/
	$('.formationEdit').click(function(){
		var nouv = $('input.formation').val();
		$('.formationAffiche').data('popover').options.content = nouv;
		alert("Le titre de la formation a été remplacé par : "+nouv);
		$('input.formation').val('');
	});

	$('.coursEdit').click(function(){
		var nouv = $('input.cours').val();
		$('.coursAffiche').data('popover').options.content = nouv;
		alert("Le titre du cours a été remplacé par : "+nouv);
		$('input.cours').val('');
	});

	/*Fonctions de déplacement des unités dans le volet du haut*/
	
	
	 $( ".sortable" ).sortable();
	 $( ".sortable" ).disableSelection();
	
	 /*Fonction WIP*/
	$('.listAct').click(function(){
	 	$('#list2').one('hidden',function(){
	 		$('#list2').collapse('show');
	 	});
	 	$('#list2').one('shown',function(){
	 		$('#list2').collapse('hide');
	 	});
	 });

	/*Fonctions pour activer les différentes scrollbar*/
	

	/*Fonctions de déplacement des éléments du volet du haut d'édition*/
	$(".sortable2").sortable({
	connectWith: ".connectedSortable",
	update: function(event, ui){
		var idRec = ui.item.attr('id');
		var idPar = ui.item.parent().parent().attr('id');

	if ($("."+idRec+" img").hasClass('gauche')==true){
		$("."+idRec).appendTo("#voletLD>."+idPar);
	}
	else{
		$("."+idRec).appendTo("#voletLG>."+idPar+">div>.accordionContent");
		$("#voletLG>."+idPar+">div>.accordionContent").slideDown("normal");

	}
	

		}
	});
	$(".sortable2").disableSelection();

	/*Fonctions-outils*/
	$('.supprimer').click(function(){
			$(this).parent().addClass('invisibleLi');
			$(this).parent().removeClass('visibleLi');
			$(this).prev().css('display','inline-block');
			$(this).css('display','none');
			var idRecup = $(this).parent().attr('id');
			$("."+idRecup).removeClass('outilVisible');
			$("."+idRecup).addClass('outil');
			$(this).parent().css('display','none');

	});

	$('.rendreVisible').click(function(){
		$(this).parent().addClass('visibleLi');
		$(this).parent().removeClass('invisibleLi');
		$(this).next().css('display','inline-block');
		$(this).css('display','none');
		var idRecup = $(this).parent().attr('id');
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');
		
	});

	$('.rendreInvisible').click(function(){
		$(this).parent().addClass('invisibleLi');
		$(this).parent().removeClass('visibleLi');
		$(this).prev().css('display','inline-block');
		$(this).css('display','none');
		var idRecup = $(this).parent().attr('id');
		$("."+idRecup).removeClass('outilVisible');
		$("."+idRecup).addClass('outil');
	});

	/*Fonctions servant à changer le nom de l'activité en cours*/

	$(".doc1").click(function(){
		changerTitre(".doc1");
	});

	$(".doc2").click(function(){
		changerTitre(".doc2");
	});

	$(".doc3").click(function(){
		changerTitre(".doc3");
	});

	/*Fonctions pour le placement d'origine des volets*/
	$("#voletLD").animate({
			right: "0"
		});
		$(".ouvrirLD").css("display","none");
		$(".fermerLD").css("display","block");

		$("#voletLG").animate({
			left: "0"
		});
		$("#voletEdit").animate({
			left: "-544"
		});
		$(".ouvrirLG").css("display","none");
		$(".fermerLG").css("display","block");

		/*Fonctons rendant visible ce qui doit l'être au chargement de la page*/
		
		$("#parcoursPASS").addClass('visibleLi');
		$("#parcoursPASS").removeClass('invisibleLi');
		$("#parcoursPASS>.icon-eye-close").next().css('display','inline-block');
		$("#parcoursPASS>.icon-eye-close").css('display','none');
		var idRecup = "parcoursPASS";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#etape2").addClass('visibleLi');
		$("#etape2").removeClass('invisibleLi');
		$("#etape2>.icon-eye-close").next().css('display','inline-block');
		$("#etape2>.icon-eye-close").css('display','none');
		var idRecup = "etape2";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#week3").addClass('visibleLi');
		$("#week3").removeClass('invisibleLi');
		$("#week3>.icon-eye-close").next().css('display','inline-block');
		$("#week3>.icon-eye-close").css('display','none');
		var idRecup = "week3";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#officeVoc").addClass('visibleLi');
		$("#officeVoc").removeClass('invisibleLi');
		$("#officeVoc>.icon-eye-close").next().css('display','inline-block');
		$("#officeVoc>.icon-eye-close").css('display','none');
		var idRecup = "officeVoc";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#shapesVoc").addClass('visibleLi');
		$("#shapesVoc").removeClass('invisibleLi');
		$("#shapesVoc>.icon-eye-close").next().css('display','inline-block');
		$("#shapesVoc>.icon-eye-close").css('display','none');
		var idRecup = "shapesVoc";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#officeSup").addClass('visibleLi');
		$("#officeSup").removeClass('invisibleLi');
		$("#officeSup>.icon-eye-close").next().css('display','inline-block');
		$("#officeSup>.icon-eye-close").css('display','none');
		var idRecup = "officeSup";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#liaison").addClass('visibleLi');
		$("#liaison").removeClass('invisibleLi');
		$("#liaison>.icon-eye-close").next().css('display','inline-block');
		$("#liaison>.icon-eye-close").css('display','none');
		var idRecup = "liaison";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#forumCours").addClass('visibleLi');
		$("#forumCours").removeClass('invisibleLi');
		$("#forumCours>.icon-eye-close").next().css('display','inline-block');
		$("#forumCours>.icon-eye-close").css('display','none');
		var idRecup = "forumCours";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#forumUnite").addClass('visibleLi');
		$("#forumUnite").removeClass('invisibleLi');
		$("#forumUnite>.icon-eye-close").next().css('display','inline-block');
		$("#forumUnite>.icon-eye-close").css('display','none');
		var idRecup = "forumUnite";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$("#charte").addClass('visibleLi');
		$("#charte").removeClass('invisibleLi');
		$("#charte>.icon-eye-close").next().css('display','inline-block');
		$("#charte>.icon-eye-close").css('display','none');
		var idRecup = "charte";
		$("."+idRecup).addClass('outilVisible');
		$("."+idRecup).removeClass('outil');

		$(".tabDoc1").click(function(){
			changerTab(".doc1");
		});

		$(".tabDoc2").click(function(){
			changerTab(".doc2");
		});

		$(".tabDoc3").click(function(){
			changerTab(".doc3");
		});

	$(".clicParcoursPass").click(function(){
			$("#clicParcoursPass").css("display","block");
			$("#clicEtape2").css("display","none");
			$("#clicWeek3").css("display","none");
			
		});

	$(".clicEtape2").click(function(){
			$("#clicParcoursPass").css("display","none");
			$("#clicEtape2").css("display","block");
			$("#clicWeek3").css("display","none");
		});

		$(".clicWeek3").click(function(){
			$("#clicParcoursPass").css("display","none");
			$("#clicEtape2").css("display","none");
			$("#clicWeek3").css("display","block");
		});

		$("#deployerG").click(function(){
			deployer("#deployerG");
		});

		$("#reduireG").click(function(){
			reduire("#reduireG");
		});

		$("#deployerD").click(function(){
			deployer("#deployerD");
		});

		$("#reduireD").click(function(){
			reduire("#reduireD");
		});

		$("#deployerH").click(function(){
			deployer("#deployerH");
		});

		$("#reduireH").click(function(){
			reduire("#reduireH");
		});


		$(".nano").nanoScroller();
		/*$(".nano").nanoScroller({ contentClass: 'contentG' });*/
})


