$(function() {

	// Atribui evento e função para limpeza dos campos
	$('#busca').on('input', limpaCampos);

	// Dispara o Autocomplete a partir do segundo caracter
	$( "#busca" ).autocomplete({
		minLength: 2,
		source: function( request, response ) {
			$.ajax({
				url: "consultacliente.php",
				dataType: "json",
				data: {
					acao: 'autocomplete',
					parametro: $('#busca').val()
				},
				success: function(data) {
					response(data);
				}
			});
		},
		focus: function( event, ui ) {
			$("#busca").val( ui.item.nome );
			carregarDados();
			return false;
		},
		select: function( event, ui ) {
			$("#busca").val( ui.item.nome );
			return false;
		}
	})
		.autocomplete( "instance" )._renderItem = function( ul, item ) {
		return $( "<li>" )
			.append( "<a><b>" + item.nome + "</b></a><br>" )
			.appendTo( ul );
	};

	function carregarDados(){
		var busca = $('#busca').val();

		if(busca != "" && busca.length >= 2){
			$.ajax({
				url: "consultacliente.php",
				dataType: "json",
				data: {
					acao: 'consulta',
					parametro: $('#busca').val()
				},
				success: function( data ) {
					$('#id').val(data[0].id);
					$('#nome').val(data[0].nome);
				}
			});
		}
	}

	// Função para limpar os campos caso a busca esteja vazia
	function limpaCampos(){
		var busca = $('#busca').val();

		if(busca == ""){
			$('#id').val('');
			$('#nome').val('')

		}
	}
});