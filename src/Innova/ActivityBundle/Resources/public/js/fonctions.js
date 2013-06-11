$(function(){

	/*Fonctions servant à animer le volet de gauche*/
	$(".ouvrirLG").click(function(){
		ouvrir(".ouvrirLG");
	});
	$(".fermerLG").click(function(){
		fermer(".fermerLG");
	});
	/*Fonctions servant à animer le volet de droite*/
	$(".ouvrirLD").click(function(){
		ouvrir(".ouvrirLD");
	});
	$(".fermerLD").click(function(){
		fermer(".fermerLD");
	});

	/*Fonctions servant à animer le volet du haut*/
	$(".ouvrirH").click(function(){
		ouvrir(".ouvrirH");
	});
	$(".fermerH").click(function(){
		fermer(".fermerH");
	});
	/*FOnctions servant à déplacer le volet du haut d'édition*/	
	$(".ouvrirH2").click(function(){
		ouvrir(".ouvrirH2");
	});
	$(".fermerH2").click(function(){
		fermer(".fermerH2");
	});


	var menuAct = [
	
	{'Cacher Activité':function(menuItem,menu) { $(this).css('display','none'); } },
	{'Editer Activité (Pas encore disponible)':function(menuItem,menu) {   } },
	{'Insérer en dessous (Pas encore disponible)':function(menuItem,menu) { /*
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
	{'Insérer en dessous (Pas encore disponible)':function(menuItem,menu) {/* 
	var par = $(this).parent().parent().parent();
	par.after('<div class="row"><div class="span2"><a href="#"><img src="img/folder-close.png" rel="popover" data-content="Nouvelle unité" class="droite menuEsp"/></a></div></div>');
	 $('.unite:last').next().after('<hr><div class="row unite"><div class="span2 offset1 nom"><input type="text" placeholder="Saisissez le nom de l\'unité" class="nom"></div><div class="span2"><button class="btn droite" rel="popover" data-content="Pas encore disponible" type="button">OK</button><button class="btn accordion-toggle droite" rel="popover" data-content="Déployer" data-toggle="collapse" data-target="#list?" type="button"><i class="icon-chevron-down"></i></button></div></div>');
	 $('.droite').popover('destroy');
	 $('.droite').popover({placement:'right', container:'body',trigger:'hover'});*/
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

	/*Menu Outils*/
	var menuPage = [
	
	{'Supprimer page':function(menuItem,menu) { $(this).css('display','none'); } },
	{'Insérer page (pas encore disponible)':function(menuItem,menu) { } }
	];
	
	$('.menuPage').contextMenu(menuPage,{theme:'vista'});

	

	/*Fonctions-outils*/
	$('.supprimer').click(function(){
		supprimer(this);
	});

	$('.rendreVisible').click(function(){
		rendreVisible(this);
		
	});

	$('.rendreInvisible').click(function(){
		rendreInvisible(this);
	});

	/*Fonctions servant à changer le nom de l'activité en cours*/

	$(".nivParcoursPass").click(function(){
		changerTitre(".nivParcoursPass");
	});

	$(".nivEtape2").click(function(){
		changerTitre(".nivEtape2");
	});

	$(".nivWeek1").click(function(){
		changerTitre(".nivWeek1");
	});

	$(".nivWeek2").click(function(){
		changerTitre(".nivWeek2");
	});

	$(".nivWeek3").click(function(){
		changerTitre(".nivWeek3");
	});

	$(".nivWeek4").click(function(){
		changerTitre(".nivWeek4");
	});

	$(".nivWeek5").click(function(){
		changerTitre(".nivWeek5");
	});

	$(".week1Doc1").click(function(){
		changerTitre(".week1Doc1");
	});

	$(".week1Doc2").click(function(){
		changerTitre(".week1Doc2");
	});

	$(".week1Doc3").click(function(){
		changerTitre(".week1Doc3");
	});

	$(".week1Doc4").click(function(){
		changerTitre(".week1Doc4");
	});

	$(".week1Doc5").click(function(){
		changerTitre(".week1Doc5");
	});

	$(".week2Doc1").click(function(){
		changerTitre(".week2Doc1");
	});

	$(".week2Doc2").click(function(){
		changerTitre(".week2Doc2");
	});

	$(".week2Doc3").click(function(){
		changerTitre(".week2Doc3");
	});

	$(".week2Doc4").click(function(){
		changerTitre(".week2Doc4");
	});

	$(".week2Doc5").click(function(){
		changerTitre(".week2Doc5");
	});

	$(".week3Doc1").click(function(){
		changerTitre(".week3Doc1");
	});

	$(".week3Doc2").click(function(){
		changerTitre(".week3Doc2");
	});

	$(".week3Doc3").click(function(){
		changerTitre(".week3Doc3");
	});

	$(".week4Doc1").click(function(){
		changerTitre(".week4Doc1");
	});

	$(".week4Doc2").click(function(){
		changerTitre(".week4Doc2");
	});

	$(".week4Doc3").click(function(){
		changerTitre(".week4Doc3");
	});

	$(".week4Doc4").click(function(){
		changerTitre(".week4Doc4");
	});

	$(".week4Doc5").click(function(){
		changerTitre(".week4Doc5");
	});

	$(".week4Doc6").click(function(){
		changerTitre(".week4Doc6");
	});

	$(".week5Doc1").click(function(){
		changerTitre(".week5Doc1");
	});

	$(".week5Doc2").click(function(){
		changerTitre(".week5Doc2");
	});

	$(".week5Doc3").click(function(){
		changerTitre(".week5Doc3");
	});

		/*Navigation volet gauche*/	

	$(".clicParcoursPass").click(function(){
		afficherNiveau(".clicParcoursPass");
		
	});

	$(".clicEtape2").click(function(){
		afficherNiveau(".clicEtape2");

	});

	$(".clicWeek1").click(function(){
		afficherNiveau(".clicWeek1");
		
	});

		$(".tabWeek1Doc1").click(function(){
			changerTab(".week1Doc1");
		});

		$(".tabWeek1Doc2").click(function(){
			changerTab(".week1Doc2");
		});

		$(".tabWeek1Doc3").click(function(){
			changerTab(".week1Doc3");
		});

		$(".tabWeek1Doc4").click(function(){
			changerTab(".week1Doc4");
		});

		$(".tabWeek1Doc5").click(function(){
			changerTab(".week1Doc5");
		});


	$(".clicWeek2").click(function(){
		afficherNiveau(".clicWeek2");
		
	});
		$(".tabWeek2Doc1").click(function(){
			changerTab(".week2Doc1");
		});

		$(".tabWeek2Doc2").click(function(){
			changerTab(".week2Doc2");
		});

		$(".tabWeek2Doc3").click(function(){
			changerTab(".week2Doc3");
		});

		$(".tabWeek2Doc4").click(function(){
			changerTab(".week2Doc4");
		});

		$(".tabWeek2Doc5").click(function(){
			changerTab(".week2Doc5");
		});

	$(".clicWeek3").click(function(){
		afficherNiveau(".clicWeek3");
		
	});

		$(".tabWeek3Doc1").click(function(){
			changerTab(".week3Doc1");
		});

		$(".tabWeek3Doc2").click(function(){
			changerTab(".week3Doc2");
		});

		$(".tabWeek3Doc3").click(function(){
			changerTab(".week3Doc3");
		});

	$(".clicWeek4").click(function(){
		afficherNiveau(".clicWeek4");
		
	});

		$(".tabWeek4Doc1").click(function(){
			changerTab(".week4Doc1");
		});

		$(".tabWeek4Doc2").click(function(){
			changerTab(".week4Doc2");
		});

		$(".tabWeek4Doc3").click(function(){
			changerTab(".week4Doc3");
		});

		$(".tabWeek4Doc4").click(function(){
			changerTab(".week4Doc4");
		});

		$(".tabWeek4Doc5").click(function(){
			changerTab(".week4Doc5");
		});

		$(".tabWeek4Doc6").click(function(){
			changerTab(".week4Doc6");
		});

	$(".clicWeek5").click(function(){
		afficherNiveau(".clicWeek5");
		
	});

		$(".tabWeek5Doc1").click(function(){
			changerTab(".week5Doc1");
		});

		$(".tabWeek5Doc2").click(function(){
			changerTab(".week5Doc2");
		});

		$(".tabWeek5Doc3").click(function(){
			changerTab(".week5Doc3");
		});


		/*Déploiement des volets*/
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

		/*Fonction changements de pages*/

		$("#clicWeek3Doc2p1").click(function(){
			ouvrirPage("#clicWeek3Doc2p1");
		});

		$("#clicWeek3Doc2p2").click(function(){
			ouvrirPage("#clicWeek3Doc2p2");
		});

})


