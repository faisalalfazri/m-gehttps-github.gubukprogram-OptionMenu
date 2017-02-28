'use strict';
  	// DATA TABLE CONTROLLER 
$(document).ready(function() {

});
/*
// Setup - add a text input to each footer cell
$('#simpletable tfoot th').each( function () {
    var title = $(this).text();
    $(this).html( '<div class="md-input-wrapper"><input type="text" class="md-form-control" placeholder="Search '+title+'" /></div>' );
});
	  // Apply the search
$("#simpletable").columns().every( function () {
    var that = this;
    $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
            that
                .search( this.value )
                .draw();
        }
    } );
});
/*()
	document.querySelector('.alert-confirm').onclick = function(){
		swal({
			title: "Are you sure?",
			text: "Your will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			closeOnConfirm: false
		},
		function(){
			swal("Deleted!", "Your imaginary file has been deleted.", "success");
		});
	};
});
*/
$('#simpletable').DataTable({
  	"processing": true,
    "serverSide": true,
    "ajax": server+"/data/crud?q=dtTable",
    "type":"post",
    error: function(res){  // error handling
    	console.log(res);
    }
});


// ALL ACTION WHEN MODAL SHOWN ARE HERE
$("#large-Modal").on('shown.bs.modal', function(e) { 
	if (typeof $(e.relatedTarget).data('request') !== 'undefined') {
		var requested = $(e.relatedTarget).data('request');
		$.ajax({
	        type: 'post',
	        contentType: 'application/json; charset=utf-8',
	        dataType:'json',
	        url: server+'/data/crud?q=search',
	        async:false,
	        data: JSON.stringify(requested),
	        success: function (result){
	        	console.log(result);
	        	// auto fill out if data found
	        	if(result.setval){ $.each(result.setval,function(id,value){ $("#"+id).val(value).addClass('md-valid'); }); }
	        	if(result.error){
		           notify("top","center","","danger","animated bounceIn","animated bounceOut","Error ! ", result.error);	        		
	        	}

        	}
    	});
    }
});
// on submit form
$('form').submit(function(event){
	event.preventDefault();
	var request=$(this).attr('request');
	var serialized=$(this).serialize();
	$.ajax({
        type: 'post',
        dataType:'json',
        url: server+'/data/crud?q='+request,
        async:false,
        data: serialized,
        success: function (result){
        	console.log(result);
        	// auto fill out if data found
        	if(result.error){
	           notify("top","center","","danger","animated bounceIn","animated bounceOut","Error ! ", result.error);	        		
        	}

    	}
	});
});
//});



