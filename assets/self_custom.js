var server="http://localhost/theme";
$(function(){
	// put custom jquery function which used in almost all pages here
	// Changing language in any page
	$("li.lang").click(function(){
		var varlang=$(this).attr('value');
		$.post(window.location, {lang: varlang}, function(data, textStatus, xhr) {
			location.reload();
		});
	});
});
/*
function call_modal(page,request,posted){
    $.ajax({
        type: 'post',
        url: page,
        data: 'request='+request+"&posted="+posted,
        success: function (result){
            $(".modal-dialog").html('').html(result);
        }
    });
}
*/
//Welcome Message (not for login page)
function notify_welcome(message, type) {
    $.growl({
        message: message
    }, {
        type: type,
        allow_dismiss: false,
        label: 'Cancel',
        className: 'btn-xs btn-inverse',
        placement: {
            from: 'bottom',
            align: 'right'
        },
        delay: 2500,
        animate: {
            enter: 'animated fadeInRight',
            exit: 'animated fadeOutRight'
        },
        offset: {
            x: 30,
            y: 30
        }
    });
};
 
function notify(from, align, icon, type, animIn, animOut,title,content){
        $.growl({
            icon: icon,
            title: title,
            message: content,
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };