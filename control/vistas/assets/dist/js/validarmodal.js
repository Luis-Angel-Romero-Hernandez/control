// JavaScript Validación
$('document').ready(function(){
    // Validación para campos de texto exclusivo, sin caracteres especiales ni números
    var nameregex = /^[a-zA-Z ]+$/;
    
    $.validator.addMethod("validname", function( value, element ) {
    return this.optional( element ) || nameregex.test( value );
    });
    
    // Máscara para validación de Email
    var eregex = /^([a-zA-Z0-9_.-+])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
    
    $.validator.addMethod("validemail", function( value, element ) {
    return this.optional( element ) || eregex.test( value );
    });
    
    $("#modal-gestionar-categoria").validate({
    
    rules:
    {
    txtMarca: {
    required: true
    },
    txtmodelo: {
    required: true
    },
    },
    messages:
    {
    txtMarca: {
    required: "Tu Nombre y Apellidos son Importantes"
    },
    modelo: {
    required: "Por Favor, introduzca una dirección de correo"
    },
    },
    errorPlacement : function(error, element) {
    $(element).closest('.form-group').find('.help-block').html(error.html());
    },
    highlight : function(element) {
    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
    $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    $(element).closest('.form-group').find('.help-block').html('');
    },
    
    submitHandler: function(form) {
    form.action="telefono.ajax.php";
    form.submit();
    
    alert('ok');
    }
    });
    })