<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina 1</title>
        <!-- Fonts -->
        <link href="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/css/checkoutv3.css?v41.00.091" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css">

        <style type="text/css">
         @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

      div#divContador {
        height: 59px;
        background-color: #FFD302;
        border-bottom: 1px solid #000;
        padding: 0px;
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030;
        top: 0;

      }
      div#contadorConteudo{
            height: 55px
      }
      div#contatorTexto, #contadorAcabou{
        float: left;
        height: 55px;
        font-size: 16px;
        font-weight: bold;
        line-height: 54px;
        padding-left: 10px !important;
      }
    div#contatorTempoBtn {
        /*margin-top: 12px;*/
    }



    .btn {
        padding: 9px 10px 8px;
        width: 100%;
        margin: 0;
        font-size: 22px;
        font-weight: 700;
        color: #fff;
        border: 1px solid #aeaeae;
        position: relative;
        background-image: none!important;
        cursor: pointer;
        text-decoration: none!important;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all .1s linear;
        transition: all .1s linear;
        -webkit-border-radius: 4px;
        border-radius: 4px;
    }
    button{

        font: inherit;
        -webkit-appearance: none!important;
    }

     .btn-comprar {
        width: 240px;
        float: right;
        margin-top: 5px;
        margin-right: 10px;
    }
    .btn-green, .field-color .rich-color-picker-submit {
        border-color: #568e34;
        background-color: #6cb342;
    }
    #contador {
        margin-top: 10px;
        margin-right: 74px;
        float: right;
    }
    span.contador_bloco {
        float: left;
        width: 50px;
    }
    span.contador_valor {
        background-color: #fff;
        font-size: 30px;
        width: 45px;
        margin-right: 3px;
        display: table-cell;
        text-align: center;
        font-weight: bold;
        line-height: 28px;
    }
    .contador_legenda{
        font-size: 10px;
        text-align: center;
    }


         #parcelas div {
         float: left;
         border: 0;
         margin: 0 5px;
         padding: 7px 0px;
         width: 50px;
         text-align: center;
         height: 40px;
         }
         #legenda div {
         float: left;
         font-size: 11px;
         text-align: center;
         margin: 0 5px;
         width: 50px;
         color: #ffffff;
         }
         .navbar-fixed-top {
         min-height: 50px;
         padding: 7px 0;
         }
         .navbar-fixed-top h3{
         position: relative;
         top: 15px;
         color: #ffffff;
         margin: 0;
         font-family: 'Montserrat', sans-serif;
         font-weight: bold;
         font-size: 21px;
         }
         .numero{
         font-weight: bold;
         font-size: 21px;
         color: #000;
         background: #f5f5f5;
         border-radius: 6px;
         font-family: 'Montserrat', sans-serif;
         }
         .comprar button{
         background: #00b000;
         font-weight: bold;
         width: 100%;
         color: #fff;
         font-size: 18px;
         font-family: 'Montserrat', sans-serif;
         position: relative;
         top: 2px;
         }
         .comprar button:hover{
         background: #00b040;
         font-weight: bold;
         width: 100%;
         color: #fff !important;
         font-size: 18px;
         font-family: 'Montserrat', sans-serif;
         position: relative;
         top: 2px;
         border: 0;
         }
         .navbar-fixed-top{
            /*padding: 25px 0;*/
            background: #4682B4;
            display: block;
            position: inherit;
            margin-bottom: 0px !important;
         }
         @media screen and (max-width: 767px){
         .tempo {
         width: 200px;
         height: 200px;
         margin-left: -100px;
         margin-bottom: -130px;
         margin-top: 20px;
         top: 50%;
         left: 50%;
         }
         .navbar-fixed-top{
            padding: 25px 0;
            background: #fd0001;
         }
         .navbar-fixed-top h3{
         text-align: center;
         top: 0;
         font-size: 18px;
         }
         }
         @media (min-width: 767px) and (max-width: 1023px){
         .navbar-fixed-top h3 {
         margin-bottom: 30px;
         text-align: center;
         }
         .comprar {
         right: 10%;
         bottom: 5px;
         }
         .tempo {
         left: 15%;
         }
         }
         @media (min-width: 1023px) and (max-width: 1279px){
         .navbar-fixed-top h3{
         font-size: 17px;
         }
         #parcelas div{
         width: 40px;
         }
         #legenda div{
         width: 37px;
         }
         }
      </style>
    </head>

    <body>

          <nav class="navbar navbar-default navbar-fixed-top">
             <div class="container">
                <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-7 col-gl-7">
                      <h3>PREÇO PROMOCIONAL ENCERRARÁ EM:</h3>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 tempo">
                      <div class="row">
                         <div id="parcelas">
                            <div class="numero">00</div>
                            <div class="numero">00</div>
                            <div class="numero">00</div>
                         </div>
                      </div>
                      <div class="row">
                         <div id="legenda">
                            <div>Horas</div>
                            <div>Minutos</div>
                            <div>Segundos</div>
                         </div>
                      </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 comprar">
                      <a href="#" id="btn-comprar"><button type="button" class="btn btn-sucess btn-comprar">Comprar Agora <i class="fa fa-arrow-down" aria-hidden="true"></i></button></a>
                   </div>
                </div>
             </div>
          </nav>

        <div class="container">



            <div class="row">

                <div class="col-lg-12">
                    <img class="img img-rounded" style="width:100%" alt="..." src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/checkout/img/45993/1929e4d236f868942d9ad95aba8d8b0a.png" />
                </div>

            </div>

            <br/>

            <div class="row">

                <form method="get" action="#">

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h1>1 - Dados cadastrais</h1></div>
                        <div class="panel-body">

                          <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>Nome completo</label>
                                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" class="form-control ca" maxlength="200" value="">
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" id="email" name="email" placeholder="Digite seu melhor e-mail" class="form-control ca" maxlength="200" value="">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Celular com DDD</label>
                                    <input type="text" id="telefone" name="telefone" class="form-control telefone  ca" maxlength="20" value="">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>CPF/CNPJ</label>
                                    <input type="text" id="cnpj_cpf" name="cnpj_cpf" class="form-control ca" maxlength="18" value="">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>CEP</label>
                                    <input type="text" id="cep" name="cep" class="form-control cep  ca" autocomplete="off" maxlength="9" value="">
                                </div>

                            </div>

                          </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                  <div class="panel panel-default">
                      <div class="panel-heading text-center"><h1>2 - Selecionar Pagamento</h1></div>

                      <div class="panel-body">

                        <div class="row">

                          <div class="col-md-12">

                              <div class="form-group">
                                  <label>Número do cartão</label>
                                  <input type="text" id="CreditCardNumber" autocomplete="off" name="CreditCardNumber" placeholder="Digite somente números" class=" card-image form-control" value="">
                              </div>

                          </div>

                          <div class="col-md-12">

                              <div class="form-group">
                                  <label>Seu Nome impresso no cartão</label>
                                  <input type="text" id="NameOnCard" autocomplete="off" name="NameOnCard" placeholder="Digite o nome impresso no cartão" class="form-control" maxlength="255" value="">
                              </div>

                          </div>

                          <div class="col-md-12">

                              <div class="form-group">
                                  <label>Validade</label>

                                  <div class="input-container">
                                      <select id="ExpiryDate_month" class="form-control" name="ExpiryDate_month" style=" float: left;width: 64px;">
                                          <option value="01">01 - Janeiro</option>
                                          <option value="02">02 - Fevereiro</option>
                                          <option value="03">03 - Março</option>
                                          <option value="04" selected="">04 - Abril</option>
                                          <option value="05">05 - Maio</option>
                                          <option value="06">06 - Junho</option>
                                          <option value="07">07 - Julho</option>
                                          <option value="08">08 - Agosto</option>
                                          <option value="09">09 - Setembro</option>
                                          <option value="10">10 - Outubro</option>
                                          <option value="11">11 - Novembro</option>
                                          <option value="12">12 - Dezembro</option>
                                      </select>
                                      <select id="ExpiryDate_year" class="form-control" name="ExpiryDate_year" style="float: left;width: 112px;">
                                          <option value="2018">2018</option>
                                          <option value="2019">2019</option>
                                          <option value="2020">2020</option>
                                          <option value="2021">2021</option>
                                          <option value="2022">2022</option>
                                          <option value="2023">2023</option>
                                          <option value="2024">2024</option>
                                          <option value="2025">2025</option>
                                          <option value="2026">2026</option>
                                          <option value="2027">2027</option>
                                          <option value="2028">2028</option>
                                          <option value="2029">2029</option>
                                      </select>
                                      <!-- <input type="text" maxlength="7" class="form-control" id="ExpiryDate"  name="ExpiryDate" placeholder="MM / AA"  value="
                                        "  > -->
                                    <!--   <i class="fa fa-question-circle i_card_exp" ></i>-->
                                    </div>


                              </div>

                          </div>


                          <div class="col-md-12">

                            <br/>

                              <div class="form-group">
                                  <label>Digite o CVV / Código de segurança</label>
                                  <input type="text" class="form-control" autocomplete="off" id="SecurityCode" name="SecurityCode" value="">
                              </div>

                          </div>

                          <div class="col-md-12">

                              <div class="form-group">
                                  <label>Parcelamento</label>
                                  <select class="form-control" name="parcelamento" id="parcelamento">
                                      @foreach($valor as $key => $item)
                                        <option value="{{ $key }}_{{ $item }}">{{ $key }}x de R$ {{ number_format($item, 2, ',', '.') }}</option>
                                      @endforeach
                                  </select>
                              </div>

                          </div>

                        </div>

                        <button class="btn btn-block btn-success">Comprar Agora</button>

                      </div>
                  </div>

                </div>

                </form>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/js/jquery.min.js?"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/vendor/plugins/validate/jquery.validate.min.js?"></script>
        <script src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/vendor/plugins/validate/jquery.validate.cpf_cnpj.js?"></script>
        <script src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/vendor/plugins/jquerymask/jquery.maskedinput.min.js?"></script>
        <script src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/vendor/plugins/jquerypayment/jquery.payment.js?1.00.091"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
        <script src="https://s3-sa-east-1.amazonaws.com/monetizzeappbr/js/checkout_v5_personalizado.js?e21.00.091"></script>

        <script type="text/javascript">
          var urlS3 = 'https://s3.amazonaws.com/alphamonetizze/';
        </script>

        <script>

            $("#cep").mask("99999-999");
            $("#data_nascimento").mask("99/99/9999");

              var $objTelefoneInter = $('.telefoneInter');
              $objTelefoneInter.off('focusout');
              $objTelefoneInter.on('focusout', function (event) {

                 $(this).mask("+999 (99)99999999?9");
                 var target, phone, element;
                 if(event.currentTarget){ target = event.currentTarget;} else {  target = event.srcElement; }
                 phone = target.value.replace(/\D/g, '');
                 element = $(target);
                 element.unmask();
                 if(phone.length > 12) {
                     element.mask("+999 (99)99999-999?9");
                 } else {
                     element.mask("+999 (99)9999-9999?9");
                 }
              }).focusout();

            var $objTelefone = $('.telefone');
              $objTelefone.off('focusout');
              $objTelefone.on('focusout', function (event) {

                 $(this).mask("(99)99999999?9");
                 var target, phone, element;
                 if(event.currentTarget){ target = event.currentTarget;} else {  target = event.srcElement; }
                 phone = target.value.replace(/\D/g, '');
                 element = $(target);
                 element.unmask();
                 if(phone.length > 10) {
                     element.mask("(99)99999-999?9");
                 } else {
                     element.mask("(99)9999-9999?9");
                 }
              }).focusout();

        </script>

        <script>

            var quantidade_max = '1';
            var doisc = '';
            var usandoDoisC = false;
            var maxParcelas = '12';
            var valor_unitario = '139.00';
            var valor = '139.00';
            var url_s3 = 'https://s3-sa-east-1.amazonaws.com/monetizzeappbr/';
            var parcela_padrao = '1_139.00';
            var solicitar_cpf = '1';
            var solicitar_telefone = '1';
            var solicitar_endereco = '1';
            var paypal = '0';
            var m = '1';
            var pagInter = '0';
            var usar_frete = '0';
            var split = '';

            defineValor();

            var valores = [];
            var valoresFormatado = [];
             valores[1] = '139.00';
             valoresFormatado[1] = '139,00';
             var recaptcha = false;

        </script>

        <script type="text/javascript">
           var horas = "0" + 00; ;
           var minutos = 10;
           minutos = "0" + minutos;
           var segundos = 00;
           var divs = document.querySelectorAll('#parcelas div');

           setInterval(function () {
               if (segundos == 0) {
                 segundos = 60;
                 minutos--;
                 minutos = "0" + minutos;
               }
            if (minutos >= 0 ){
              segundos--;
            }else{
              minutos = "0" + 0;
              segundos = "0" + 0;
            }
               var contador = [horas, minutos, segundos].forEach(function (parcela, i) {
                   divs[i].innerHTML = parcela;
               });

           }, 1000);

          jQuery(function($) {

            $("body").on("click", "#btn-comprar", function(e) {
              $.scrollTo('#dados_cadastrais', 500);
              $('#nome').focus();
              return false;
            });
          });
        </script>


    </body>
</html>
