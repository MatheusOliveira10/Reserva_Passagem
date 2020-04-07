<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
  <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js">
  </script>

  <title>Form SI 5A</title>
</head>

<body>
  <div class="ui container">
    <div class="ui pointing menu">
      <a href="/" class="active item">
        Home
      </a>
      <a href="/reserva" class="item">
        Reserva
      </a>
      <a href="/pagar" class="item">
        Pagar
      </a>
      <a href="/cancela" class="item">
        Cancelar
      </a>
      <a href="/cliente" class="item">
        Cliente
      </a>
      <div class="right menu">
        <div class="item">
          <div class="ui transparent icon input">
            <input type="text" placeholder="Search...">
            <i class="search link icon"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="ui segment">
      <form class="ui form">
        <h4 class="ui dividing header">Cadastro de Imóveis</h4>
        <div class="field">
          <div class="two fields">
            <div class="field">
              <label>Inquilino</label>
              <select class="ui fluid dropdown">
                <option value="">Selecione um estado...</option>
                <option value="1">Bruno Guimarães</option>
                <option value="2">Matheus Oliveira</option>
                <option value="3">Maurício Acconcia</option>
              </select>
            </div>
            <div class="field">
              <label>Proprietário</label>
              <select class="ui fluid dropdown">
                <option value="">Selecione um estado...</option>
                <option value="1">Bruno Guimarães</option>
                <option value="1">Matheus Oliveira</option>
                <option value="1">Maurício Acconcia</option>
              </select>
            </div>
          </div>
        </div>
        <div class="field">
          <label>Endereço</label>
          <div class="fields">
            <div class="twelve wide field">
              <input type="text" name="shipping[address]" placeholder="Rua, Avenida...">
            </div>
            <div class="four wide field">
              <input type="text" name="shipping[address-2]" placeholder="Número">
            </div>
          </div>
        </div>
        <div class="six fields">
          <div class="four wide field">
            <label>Bairro</label>
            <input type="text" name="shipping[address-2]" placeholder="Bairro">
          </div>
          <div class="four wide field">
            <label>Cidade</label>
            <input type="text" name="shipping[address-2]" placeholder="Cidade">
          </div>
          <div class="four wide field">
            <label>Estado</label>
            <select class="ui fluid dropdown">
              <option value="">Selecione um estado...</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
        </div>
        <div class="ui blue button" tabindex="0">Enviar</div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#cpf").mask("999.999.999-99");
    });
  </script>
</body>

</html>