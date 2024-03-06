@extends('site.dashboard.dashboardLayout.layout')

<style>
    .user-info h4{
        margin-left: 0px;
    }
</style>

@section('nome')

<h4>Olá, {{ $cliente->nomeCliente }}</h4>

@endsection


<style>
   .selecao{
      height: 100px;
      display: flex;
      justify-content: space-around;
      padding: 0% 15%;
  }
  .list-group{
      justify-content: space-between;
      height: 100%;
      text-align: center;
      font-weight: bold;
      flex-direction: row;
  }
  .list-group-item{
      width: 400px;
      border-radius: 20px;
  }

.buttonCat {
  height: 50px;
  width: 150px;
  position: relative;
  background-color: transparent;
  cursor: pointer;
  border: 2px solid #ffffff;
  overflow: hidden;
  border-radius: 30px;
  color: gainsboro;
  transition: all 0.5s ease-in-out;
}

.btnCat-txt {
  z-index: 1;
  font-weight: 800;
  letter-spacing: 4px;
}

.type1::after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  transition: all 0.5s ease-in-out;
  background-color: #333;
  border-radius: 30px;
  visibility: hidden;
  height: 10px;
  width: 10px;
  z-index: -1;
}

.buttonCat:hover {
  box-shadow: 1px 1px 90px #acacac;
  color: #fff;
}

.type1:hover::after {
  visibility: visible;
  transform: scale(100) translateX(2px);
}

.list-group a{
    padding-right: 1%;
}

</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-cabelo').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-maquiagem').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-unhas').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-sobrancelhas').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-depilacao').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-massagem').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-rosto').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

$(document).ready(function(){
// Quando o botão de cabelo é clicado
$('#botao-barba').click(function(){
    var tipoServico = $(this).data('tipo');
    // Faça uma requisição AJAX para obter os serviços de cabelo
    $.ajax({
        url: "/servicos",
        type: "GET",
        data: {tipo: tipoServico},
        success: function(response){
            // Limpe a lista de serviços de cabelo antes de adicionar os novos
            $('#servicos').empty();

            // Adicione cada serviço de cabelo à lista
            $.each(response, function(index, servico){
                $('#servicos').append(`<div class="row p-1 pb-4 ng-scope ng-isolate-scope" ng-repeat="servico in categoria.servicos | filter:{nome:categoria.filtro}" servico="servico">
            <div class="col-7 col-sm-6">
                <span class="textoServicos__titulo ng-binding">${servico.nomeServico}</span>
                <!-- ngIf: servico.tipo==0 --><span class="textoServicos__horario ng-binding ng-scope" ng-if="servico.tipo==0">${servico.duracaoServico}</span><!-- end ngIf: servico.tipo==0 -->
                <div class="textoServicos__descricao">
                    <p ng-class="{collapse: servico.descricao.length >= 100}" class="ng-binding">${servico.descricaoServico}</p>
                    <!-- ngIf: servico.descricao.length >= 100 -->
                </div>
                <!-- ngIf: servico.tipo==1 -->
            </div>
            <div class="col-5 col-sm-6">
                <div class="row">
                    <preco-servico centralizar="false" class="col-12 col-md-6 mt-3 px-0 ng-isolate-scope" servico="servico">
                    <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 && exibeAPartirDe(servico) --><span class="textoServicos__partirde ng-scope" ng-if="servico.tipo==0 &amp;&amp; exibeAPartirDe(servico)">A partir de:</span><!-- end ngIf: servico.tipo==0 && exibeAPartirDe(servico) -->
        <div ng-class="{'d-flex justify-content-center': centralizar, 'd-flex justify-content-center justify-content-sm-start': !centralizar}" class="d-flex justify-content-center justify-content-sm-start">
            <!-- ngIf: servico.tipo==0 && exibePrecoAnterior(servico) -->
            <!-- ngIf: servico.tipo==0 --><span class="textoServicos__valor ng-binding ng-scope" ng-if="servico.tipo==0">R${servico.valorServico}</span><!-- end ngIf: servico.tipo==0 -->
            <!-- ngIf: servico.tipo==1 -->
        </div>
                </preco-servico>
                    <!-- ngIf: servico.tipo==0 --><div class="col-12 col-lg-6 ng-scope" ng-if="servico.tipo==0">
                        <a ng-href="" rel="nofollow" tks-notification="selecaoServico" tks-event-details="{servico: servico.nome}" class="card-agendamento__botao card-agendamento__botao--pequeno mt-3 ng-isolate-scope" href="">Agendar</a>
                    </div><!-- end ngIf: servico.tipo==0 -->
                    <!-- ngIf: servico.tipo==1 -->
                </div>
            </div>
        </div>`);
                // Adicione outras informações do serviço conforme necessário
            });
        },
        error: function(xhr){
            console.log(xhr.responseText); // Trate o erro aqui
        }
    });
});
});

</script>


@section('conteudo')
    <h2 style="color: gainsboro; text-align: center;padding-top:5%;">Agendamento</h2>

    <h3 style="text-align: center;color: gainsboro;font-size:15pt;padding-top:1%;">Tipo de serviço</h3>

    <section style="padding:0% 10%; margin-top:4%;" class="selecao">
        <div class="list-group" style="flex-direction: row;">
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-cabelo" data-tipo="Cabelo">Cabelos</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-maquiagem" data-tipo="Maquiagem">Maquiagens</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-unhas" data-tipo="Unhas">Unhas</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-sobrancelhas" data-tipo="Sobrancelhas">Sobrancelhas</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-depilacao" data-tipo="Depilação">Depilações</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-massagem" data-tipo="Massagem">Massagens</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-rosto" data-tipo="Rosto">Rosto</button></a>
            <a href="javascript:void" class=""><button class="buttonCat type1" id="botao-barba" data-tipo="Barba">Barba</button></a>
          </div>
    </section>

    <ul id="servicos">

    </ul>



@endsection
