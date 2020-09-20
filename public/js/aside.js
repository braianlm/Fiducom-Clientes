 $(document).ready(function(){

    let body = $('#cuerpo');
    let a = $('a[data-widget="pushmenu"]');
    let contacto = $('#id_contacto_aside');

    a.on( "click", function() {
        if (body.hasClass('sidebar-collapse')) {
            contacto.show("fast", function(){
                $(this).css ('transition', '1000');
            });

        } else {
            contacto.hide();
        }
    });


});




