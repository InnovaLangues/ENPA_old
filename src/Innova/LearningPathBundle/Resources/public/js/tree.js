////////////////////////////////////////////////////
//////////// FUNCTION ////////////////////////////
var lastTrees = new Array();
var json = "";

function sort(){
	$(".sortable").sortable({
		connectWith: ".sortable",
		placeholder: 'ui-state-highlight',
		update: function(event, ui) {
			localSaveTree();
			ui.item.removeClass("ui-draggable").find("*").removeClass("ui-draggable");
			ui.item.removeClass("new-item").find("*").removeClass("new-item");
			ui.item.addClass("editable-item").find("ul").addClass("sortable");
			ui.item.addClass("sortable").find("ul").sortable({connectWith: ".sortable"});
			ui.item.find("ul").addClass("tree").sortable({connectWith: ".sortable"});
			ui.item.removeClass("cache").find("*").removeClass("cache");
			ui.item.addClass("editable-item").find("li").addClass("editable-item");
		}
	});
}

function localSaveTree(){
	lastTrees.push($("#left_tree").clone());
}

function html2json(tree){
    json += '{';
    recursive($(tree).children("ul").children("li:first"));
    json += '}';
    sendJson();
}

function recursive(li){
    json += '"step":{';
    // on récupère l'id et le name
    var id = li.attr("node_id");
    json += '"id": "'+id+'",';
    var name = li.children(".descr").children("a").text();
    json += '"name": "'+name+'"';
    // on test si le li contient un sous-arbre.
    // -> cas sous-arbre existant
    if(li.children("ul").length > 0){
        var i = 0;
        json += ',"children":[';
        li.children("ul").children("li").each(function(){
            if(i != 0){json += ',';}
            json += "{";
            i++;
            recursive($(this));
            json += "}";
        });
        json += ']';
    }
    // -> cas élément terminal (feuille)
    else{
    // à voir s'il faut créer un tableau de children vide, null ?
    }
    json += '}';
}

function addslashes(str){
    return (str+'').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
}


function sendJson(){
	$('#save').attr('disabled','disabled');
    $("#save_callback").show().html("<img src='"+ base_path +"bundles/innovalearningpath/img/ajax-loader.gif' />");
    $.ajax({
      url: Routing.generate('path_ajax_save'),
      type: 'POST',
      data: {json: json},
      complete: function(){
      	$('#save').removeAttr('disabled','disabled');
      },
      success: function(data, textStatus, xhr) {
        $("#save_callback").html("<span class='alert alert-success'>Parcours sauvegardé</span>");
        setTimeout('$("#save_callback").fadeOut(400)',1500);
        $("#left_tree").html(data);
        sort();
        $('.sortable').sortable('refresh'); 
      },
      error: function(xhr, textStatus, errorThrown) {
        $("#save_callback").html("<span class='alert alert-error'>Erreur d'enregistrement.</span>").fadeOut("slow");
      }
    });
}

////////////////////////////////////////////////////
//////////// GESTION CLICK ETC. ////////////////////
$(document).ready(function () {	
	localSaveTree();

	sort();

	//$("ul, li").disableSelection();

	/* SAVE BUTTON */
	$('#save').click(function(event) {
	    json = "";
	    html2json("#left_tree");
    });

	/* HISTORY / BACK BUTTON */
	$('#back').click(function(event) {

		// if (lastTrees.length > 1){
	 //       var lastTree = lastTrees.pop();
	 //       $("#left_tree").replaceWith(lastTree);
	 //    }
	 //    $('.sortable').sortable({ connectWith: '.sortable' });
  //       $('.sortable').sortable('refresh'); 
    });

	/* VISIBILITY STEP BUTTONS */
	$(document).delegate(".editable-item","mouseover",function(e){
		$(this).children(".step-buttons").css("visibility","visible");
		$(this).parents().children(".step-buttons").css("visibility","hidden");
		e.stopPropagation();
	});

	$(document).delegate(".editable-item","mouseout",function(e){
		$(this).children(".step-buttons").css("visibility","hidden");
	});

	/* CLICKS STEP BUTTONS */

	// delete step
	$(document).delegate(".delete-item","click",function(e){
		localSaveTree();
		node = $(this);

		var nodes_to_delete =  new Array();

		var node_id = $(this).parent().parent().attr("node_id");
		if (node_id != ""){
			nodes_to_delete.push(node_id);
		}
		var listItems = $(this).parent().parent().find("li").each(function(){
			if($(this).attr("node_id") != ""){
				nodes_to_delete.push($(this).attr("node_id"));
			}
		});

		node.parent().parent().remove();

		$.ajax({
			type: 'POST',
			url: Routing.generate('step_ajax_delete'),
			data: {"node_ids": nodes_to_delete} ,
			error: function() { 
			},
			success: function() {
			}
		});
	});

	// addchild to step
	$(document).delegate(".add-child","click",function(e){
		localSaveTree();
		var newStep = '<li class="editable-item" node_id=""><span class="descr"><a href="#" class="parcours-item">New-step</a></span> <span class="step-buttons"> <i class="icon-plus add-child"></i><i class="icon-pencil edit-step"></i><i class="icon-trash delete-item"></i></span><ul class="sortable tree ui-sortable"></ul></li>';
		$(this).parent().siblings("ul").stop().hide().append(newStep).fadeIn(1000);
	});

	// edit step
	$(document).delegate(".edit-step","click",function(e){
		localSaveTree();
		$(".step-buttons").hide();
		$("#save").hide();
		$(this).parent().siblings(".descr").children("a").hide();
		var nodeName = $(this).parent().siblings(".descr").children("a").text();
		$(this).parent().parent().prepend('<span id="edit-step" class="input-append"><input id="edit-step-input" type="text" value="'+ nodeName +'"></input><span id="edit-step-save" class="add-on">ok</span></span>');
	});

	$(document).delegate("#edit-step-save","click",function(e){
		$(this).parent().siblings(".descr").children("a").text($("#edit-step-input").val());
		$(this).parent().siblings(".descr").children("a").show();
		$("#edit-step").remove();
		$("#left_tree").find(".step-buttons").show();
		$("#save").show();
	});

	$(".new-item").draggable({
	    connectToSortable: ".sortable",
	    helper: "clone"
	});	

});
