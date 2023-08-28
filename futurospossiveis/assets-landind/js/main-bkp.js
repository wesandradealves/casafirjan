
/* Formulário Orçamento */

//mascara de cpf e telefone
$(document).ready(function(){
    $('#CPF').mask("999.999.999-99");

    $('#Telefone').mask("(99) 99999-9999");
});

//Validacao form


//valida o campo Nome Completo
$('#NomeCompleto').blur(function(){
    if( !$(this).val() ) {
        $(this).parent().addClass('error');
    } else {
    	$(this).addClass('none-ok');
        $(this).parent().removeClass('error');
    };
});

//valida o campo CPF verificando se o número digitado é válido
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000" || strCPF == "11111111111" || strCPF == "22222222222" || strCPF == "33333333333" || strCPF == "44444444444" || strCPF == "55555555555" || strCPF == "66666666666" || strCPF == "77777777777" || strCPF == "88888888888" || strCPF == "99999999999") return alert('CPF Inválido.');
     
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return alert('CPF Inválido.');
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return alert('CPF Inválido.');
    return $('#CPF').addClass('CPF-ok').parent().removeClass('error');
};

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

//chama a função de validação do campo CPF
$('#CPF').blur(function(){
	var stringcpf = $(this).val();
	var cpfclean = stringcpf.replace(/\D/g, '');
	var strCPF = cpfclean;
	TestaCPF(strCPF);
	
    if( $(this).val() != '___.___.___-__') {
    	valCpf($CPF); 		     
    }else{
    	alert('Campo CPF obrigatório.');
    };
});

//valida o campo email
$('#Email').blur(function(){
    if( !$(this).val() ) {
        //alert('Campo E-mail obrigatório.');
        $(this).parent().addClass('error');
    } else {
    	var getEmail = $(this).val();
    	if( !isEmail(getEmail)) {
			//alert('E-mail Inválido.');
            $(this).parent().addClass('error-mail');
    	} else {
	    	$(this).addClass('email-ok');
            $(this).parent().removeClass('error');
            $(this).parent().removeClass('error-mail');
	    };    	 	
    };    	
});

//valida campo Telefone
$('#Telefone').blur(function(){
    if( $(this).val() != '(__) _____-____' ) {
        $(this).addClass('Telefone-ok');
        $(this).parent().removeClass('error');
    } else {
    	//alert('Campo Celular obrigatório.');
        $(this).parent().addClass('error');
    };
});


$(document).ready(function() {
    $("#ButtonSubmit").on('click', function(){

        var NomeCompleto = $("#NomeCompleto").val();
        var CPF = $("#CPF").val();
        var Email = $("#Email").val();
        var Telefone = $("#Telefone").val();


        //verifica se todos os campos estão preenchido se sim ele registra o usuario e limpa os campos
        if($('#NomeCompleto').hasClass('none-ok')){
            if($('#CPF').hasClass('CPF-ok')){
                if($('#Email').hasClass('email-ok')){
                    if($('#Telefone').hasClass('Telefone-ok')){
                        if($('.terms').is(":checked")) {
                            
                            //requisição ajax de envio de dados do usuario para o registro no arquivo php
                            var dataString = 'NomeCompleto='+ NomeCompleto + '&CPF='+ CPF + '&Email='+ Email + '&Telefone='+ Telefone;
                            // AJAX Code To Submit Form.
                            $.ajax({
                                type: "POST",
                                url: "https://www.casafirjan.com.br/futurospossiveis/form-data.php",
                                data: dataString,
                                cache: false,
                                success: function(result) {
                                    //limpa os campos e informa cadastro relizado com sucesso
                                    alert("Cadastro Realizado Com Sucesso");
                                    $('.input-form').val('');
                                },
                                error: function() {
                                    alert("Ocorreu um erro ao enviar os dados.");
                                }
                            });
            
                        } else {
                            alert('É preciso aceitar os Termos de Uso do site.');
                            return false;
                        };					
                    } else {
                        alert('Campo Celular obrigatório.');
                        $('#Telefone').parent().addClass('error');
                        return false;
                    };
                } else {
                    alert('Campo E-mail obrigatório.');
                    $('#Email').parent().addClass('error');
                    return false;
                };
            } else {
                alert('Campo CPF obrigatório.');
                $('#CPF').parent().addClass('error');
                return false;
            };
        } else {
            alert('Campo Nome obrigatório.');
            $('#NomeCompleto').parent().addClass('error');
            return false;
        }
            
    });
});