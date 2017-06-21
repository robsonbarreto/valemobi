    //função para validar se os campos foram preenchidos
     function validarVazios(formulario) {

        var nome = formulario.nomeMercadoria.value
        var preco = formulario.precoMercadoria.value
        var quantidade = formulario.quantidadeMercadoria.value

        /*valida se os campos estão vazios, se sim seta o indicador "ok" 
        como false sinalizando o controller que há campos não preenchidos, 
        se não seta como true indicando que não há problemas*/
        
        if (nome == "") {
          formulario.ok.value = "false"
        } else {
          formulario.ok.value = "true"
        }

        if (preco == "") {
          formulario.ok.value = "false"
        } else {
          formulario.ok.value = "true"
        }

        if (quantidade == "") {
          formulario.ok.value = "false"
        } else {
          formulario.ok.value = "true"
        }



        if (formulario.ok.value == "true") {
         
          formulario.submit()
          
        } else {
          alert("Preencha todos os campos")
        }

      }
      //função para permitir apenas numeros no campo
      function somenteNumeros(campo) {
        v = campo.value
        v = v.replace(/\D/g, "") // permite digitar apenas numero
        campo.value = v //altera o valor do campo com o valor que sofreu o replace
      }
      
      //formata o campo preço como moeda
      function moeda(z) {
        v = z.value
        v = v.replace(/\D/g, "") // permite digitar apenas numero
        v = v.replace(/(\d{1})(\d{14})$/, "$1.$2") // coloca ponto antes dos ultimos digitos
        v = v.replace(/(\d{1})(\d{11})$/, "$1.$2") // coloca ponto antes dos ultimos 11 digitos
        v = v.replace(/(\d{1})(\d{8})$/, "$1.$2") // coloca ponto antes dos ultimos 8 digitos
        v = v.replace(/(\d{1})(\d{5})$/, "$1.$2") // coloca ponto antes dos ultimos 5 digitos
        v = v.replace(/(\d{1})(\d{1,2})$/, "$1,$2") // coloca virgula antes dos ultimos 2 digitos
        z.value = v
      }