////////////////////////////////////////////////////
//////////// FUNCTION ////////////////////////////
var lastTrees = new Array();


function localSaveTree(){
//	lastTrees.push($("#left_tree").clone());
//	console.log(lastTrees);
}

////////////////////////////////////////////////////
//////////// GESTION CLICK ETC. ////////////////////
$(document).ready(function () {	
	localSaveTree();

	//$("ul, li").disableSelection();

	/* HISTORY / BACK BUTTON */

	$('#back').click(function(event) {
		if (lastTree.length > 1){
	       var lastTree = lastTrees.pop();
	      
	       $("#left_tree").replaceWith(lastTree);
	    }
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
		localSaveTree();
	});

	// addchild to step
	$(document).delegate(".add-child","click",function(e){
		var newStep = '<li class="editable-item" node_id=""><span class="descr"><a href="#" class="parcours-item">New-step</a></span> <span class="step-buttons"> <i class="icon-plus add-child"></i><i class="icon-pencil edit-step"></i><i class="icon-trash delete-item"></i></span><ul class="sortable tree ui-sortable"></ul></li>';
		$(this).parent().siblings("ul").stop().hide().append(newStep).fadeIn(1000);
		localSaveTree();
	});

	// edit step
	$(document).delegate(".edit-step","click",function(e){
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
		localSaveTree();
	});

	$(".sortable").sortable({
		connectWith: ".sortable",
		placeholder: 'ui-state-highlight',
		update: function(event, ui) {
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

	$(".new-item").draggable({
	    connectToSortable: ".sortable",
	    helper: "clone"
	});	

});
