/*   VARS INIT.  */
var lastTrees = new Array();
var json = "";

////////////////////////////////////////////////////
//  Refresh sortable items after saving and moving from pattern
////////////////////////////////////////////////////
function sortableRefresh(){
	$(".sortable").sortable({
		connectWith: ".sortable",
		placeholder: "ui-state-highlight",
		opacity: 0.3,
		update: function(event, ui){
			ui.item.removeClass("ui-draggable").find("*").removeClass("ui-draggable");
			ui.item.removeClass("new-item").find("*").removeClass("new-item");
			ui.item.addClass("editable-item").find("ul").addClass("sortable");
			ui.item.addClass("sortable").find("ul").sortable({connectWith: ".sortable"});
			ui.item.find("ul").addClass("tree").sortable({connectWith: ".sortable"});
			ui.item.removeClass("cache").find("*").removeClass("cache");
			ui.item.addClass("editable-item").find("li").addClass("editable-item");
			localSaveTree();
		}
	});
	$('.sortable').sortable('refresh');
}

////////////////////////////////////////////////////
//  display a message with a certain type. Use Notify plugin.
////////////////////////////////////////////////////
function saveCallback(message,type){
	$('#save_callback').notify({
		type: type,
		message: { text: message }, 
		fadeOut: { enabled: true, delay: 3000 }
	}).show(); 
}

function localSaveTree(){
	//lastTrees.push($("#left_tree").clone());
}

////////////////////////////////////////////////////
//  Execute recursive function to generate a JSON string
//  from an HTML list.
////////////////////////////////////////////////////
function html2json(tree){
    json += '{';
    recursive($(tree).children("ul").children("li:first"));
    json += '}';
    sendJson();
}

function recursive(li){
    json += '"step":{';
    // on récupère l'id et le name
    var id = li.attr("data-node-id");
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
    else{
    // à voir s'il faut créer un tableau de children vide, null ?
    }
    json += '}';
}

function addslashes(str){
    return (str+'').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
}

////////////////////////////////////////////////////
//  Call ajax function to save tree and update view.
////////////////////////////////////////////////////
function sendJson(){
	$('#save').attr('disabled','disabled');
    $.ajax({
		url: Routing.generate('path_ajax_save'),
		type: 'POST',
		data: {json: json},
		beforeSend: function(){
			var TreeClone = $("#left_tree").clone();
		    $("#left_tree").html("<img src='"+ base_path +"bundles/innovalearningpath/img/ajax-loader.gif' /> Sauvegarde en cours.");
		},
		complete: function(){
			$('#save').removeAttr('disabled','disabled');
		},
		success: function(data, textStatus, xhr) {
			$("#left_tree").html(data);
			sortableRefresh();
			saveCallback("Le parcours a été sauvegardé", "success");

		},
		error: function(xhr, textStatus, errorThrown) {
			$("#left_tree").replaceWith(TreeClone);
			saveCallback("Problème de sauvegarde", "error");
		}
    });
}


$(document).ready(function () {	
	sortableRefresh();
	//$("ul, li").disableSelection();

	////////////////////////////////////////////////////
	//  execute saving.
	////////////////////////////////////////////////////
	$('#save').click(function(event) {
	    json = "";
	    html2json("#left_tree");
    });

	////////////////////////////////////////////////////
	//  replace tree with the last older version
	////////////////////////////////////////////////////
	$('#back').click(function(event) {
		if (lastTrees.length > 1){
	       var lastTree = lastTrees.pop();
	       $("#left_tree").replaceWith(lastTree);
	    }

	    sortableRefresh();
        $('.sortable').sortable('refresh'); 
    });

	////////////////////////////////////////////////////
	//  toggle visibility for step buttons
	////////////////////////////////////////////////////
	$(document).delegate(".editable-item","mouseover",function(e){
		$(this).children(".step-buttons").css("visibility","visible");
		$(this).parents().children(".step-buttons").css("visibility","hidden");
		e.stopPropagation();
	});

	$(document).delegate(".editable-item","mouseout",function(e){
		$(this).children(".step-buttons").css("visibility","hidden");
	});

	////////////////////////////////////////////////////
	//  Delete step
	////////////////////////////////////////////////////
	$(document).delegate(".delete-item","click",function(e){
		if (confirm("Voulez-vous vraiment supprimer ce step ?")) { 
			node = $(this);
			node.parent().parent().remove();

			var nodes_to_delete =  new Array();
			var nodeId = $(this).parent().parent().attr("data-node-id");

			if (nodeId != ""){
				nodes_to_delete.push(nodeId);
			}
			var listItems = $(this).parent().parent().find("li").each(function(){
				if($(this).attr("data-node-id") != ""){
					nodes_to_delete.push($(this).attr("data-node-id"));
				}
			});

			if (nodes_to_delete.length > 1){
				$.ajax({
					type: 'POST',
					url: Routing.generate('step_ajax_delete'),
					data: {"data-node-ids": nodes_to_delete} ,
					error: function() { 
					},
					success: function() {
					}
				});
			}
		}
	});

	////////////////////////////////////////////////////
	//  addchild to step
	////////////////////////////////////////////////////
	$(document).delegate(".add-child","click",function(e){
		localSaveTree();
		var newStep = '<li class="editable-item" data-node-id=""><span class="descr"><a href="#" class="parcours-item">New-step</a></span> <span class="step-buttons"> <i class="icon-plus add-child"></i><i class="icon-pencil edit-step"></i><i class="icon-trash delete-item"></i> <i class="icon-heart fav-item"></i></span><ul class="sortable tree ui-sortable"></ul></li>';
		$(this).parent().siblings("ul").stop().hide().append(newStep).fadeIn(1000);
	});

	////////////////////////////////////////////////////
	//  add step to favs
	////////////////////////////////////////////////////
	$(document).delegate(".fav-item","click",function(e){
        alert("Ajouté aux favoris.");
    });

	////////////////////////////////////////////////////
	//  edit step
	////////////////////////////////////////////////////
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


	////////////////////////////////////////////////////
	//  make pattern node draggable and clonable :)
	////////////////////////////////////////////////////
	$(".new-item").draggable({
	    connectToSortable: ".sortable",
	    helper: "clone"
	});	

});
