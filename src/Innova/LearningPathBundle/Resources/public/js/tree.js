////////////////////////////////////////////////////
//////////// FUNCTION ////////////////////////////
/*function sort(){
	$('.sortable').sortable({
		connectWith: $('.sortable'),
		helper: "clone"
	}).disableSelection();
}*/

function parseTree(ul){
    var tags = [];
    ul.children("li").each(function(){
        var subtree = $(this).children("ul");
        if(subtree.size() > 0){
            tags.push([$(this).attr("id"), parseTree(subtree)]);
        }
        else{
            tags.push($(this).attr("id"));
        }
    });
    return tags;
}


////////////////////////////////////////////////////
//////////// GESTION CLICK ETC. ////////////////////
$(document).ready(function () {	
	$(".delete_node").click(function() {
		var nodes_to_delete =  new Array();
		var node_id = $(this).parent().attr("node_id");
		nodes_to_delete.push(node_id);
		var listItems = $(this).parent().find("li").each(function(){
		  nodes_to_delete.push($(this).attr("node_id"));
		});

		$(this).parent().remove();
		$.ajax({
			type: 'POST',
			url: 'remove_node.php',
			data: {"node_ids": nodes_to_delete} ,
			error: function() { 
			},
			success: function() {
				save_tree();
				alert("noeud supprimé");
			}
		});
	});
	
	/*$(".droppable").droppable({
		drop: function (e, ui) {

        if ($(ui.sortable)[0].id != "") {
            x = ui.helper.clone();
	        ui.helper.remove();
	        x.sortable({
	            helper: 'original',
	            containment: '#droppable'
	        });
	        x.appendTo('#droppable');
    	}

    }
	});*/
	
	//sort();

	$(".sortable").sortable({
	    stop: function(event, ui) {
	        if (ui.item.hasClass("new-item")) {
	            ui.item.removeClass("new-item");
	            ui.item.removeClass("new-item");
	            ui.item.addClass("editable-item");
	            var value = ui.item.text();
	            ui.item.html('<i class="icon-trash delete-item"></i> <i class="icon-briefcase"></i> ' + value);
	        }
	    }
	});
	$(".new-item").draggable({
	    connectToSortable: ".sortable",
	    helper: "clone"
	});
	$("ul, li").disableSelection();

/*	$('#trash').droppable({
		hoverClass: "ui-state-active",
        drop: function(event, ui) {

            $(ui.draggable).remove();
        }
    });*/

	$(".well .delete-item").click(function(){
		$(this).parent().remove();
	});

	$(".well .editable-item").mouseover(function(e){
		$(this).children(".delete-item").css("visibility","visible");
		$(this).parents().children(".delete-item").css("visibility","hidden");
		e.stopPropagation();
	});

	$(".editable-item").mouseout(function(){
		$(this).children(".delete-item").css("visibility","hidden");
	});
			
});
