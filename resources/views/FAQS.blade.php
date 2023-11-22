@extends('layout')
@section('title') ReKrie - FAQ'S @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<section>
<h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Frequently Asked Questions</h1>
  <p align="center"></p>
  <div align="center">
    <!--Grid column-->
      <div align="left" class="col-md-6" style="font-family: 'Balsamiq Sans', cursive;">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Q1 -->
          <div class="card p-3">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> O que é a ReKrie?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              A ReKrie é uma loja de moveis rústicos de decoração.
              </div>
            </div>

          </div>
          <!-- Q1 -->
          <!--Q2-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading2" 
                aria-controls="heading2">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> De onde surgiu o nome ReKrie?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading2" class="collapse" role="tabpanel" aria-labelledby="heading2"
              data-parent="#accordionEx">
              <div class="card-body">
               O nosso nome surgiu a partir do termo "Recriar", utilizando algo antigo, renovando-o para sua nova forma.
              </div>
            </div>

          </div>
          <!-- Q2 -->

            <!--Q3-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne3">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading3" 
                aria-controls="heading3">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> O que vocês vendem?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading3" class="collapse" role="tabpanel" aria-labelledby="heading3"
              data-parent="#accordionEx">
              <div class="card-body">
                Nós vendemos desde móveis customizados à peças já prontas, como tábuas de frios, cortar carne, mesas de centro, mesas de decoração, bancos, etc.
              </div>
            </div>

          </div>
          <!-- Q3 -->
          
           <!--Q4-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne4">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading4" 
                aria-controls="heading4">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Como vocês mantêm controle da qualidade dos produtos que vendem?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading4" class="collapse" role="tabpanel" aria-labelledby="heading4"
              data-parent="#accordionEx">
              <div class="card-body">
              Nós fazemos um acompanhando integrado ao cliente, além de termos um processo de controle de qualdiade onde acompanhamos a peça antes de entrega-la ao cliente.
              </div>
            </div>

          </div>
          <!-- Q4 -->
            <!--Q5-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne5">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading5" 
                aria-controls="heading5">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i>Como posso pedir por uma peça customizada?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading5" class="collapse" role="tabpanel" aria-labelledby="heading5"
              data-parent="#accordionEx">
              <div class="card-body">
                Só entrar em contato conosco através do e-mail ou ligue para nós!
              </div>
            </div>

          </div>
              <!--Q5-->
              
               <!--Q6-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne6">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading6" 
                aria-controls="heading6">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> As fotos são realmente dos seus produtos?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading6" class="collapse" role="tabpanel" aria-labelledby="heading6"
              data-parent="#accordionEx">
              <div class="card-body">
             Sim, tiramos as fotos antes e depois da entrega aos clientes.
              </div>
            </div>

          </div>
              <!--Q6-->
                <!--Q7-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne7">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading7" 
                aria-controls="heading7">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Posso acompanhar meu pedido após a compra?
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading7" class="collapse" role="tabpanel" aria-labelledby="heading7"
              data-parent="#accordionEx">
              <div class="card-body">
              Sim, você pode sim!
              </div>
            </div>

          </div>
              <!--Q7-->
              
               <!--Q8-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne8">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading8" 
                aria-controls="heading8">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i>Preciso pagar por taxas adicionais?
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading8" class="collapse" role="tabpanel" aria-labelledby="heading8"
              data-parent="#accordionEx">
              <div class="card-body">
             Por nós, não é necessário, porém pode aparecer uma dependendo do meio de pagamento escolhido.
              </div>
            </div>

          </div>
              <!--Q8-->
              
                <!--Q9-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne9">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading9" 
                aria-controls="heading9">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Até onde vocês entregam?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading9" class="collapse" role="tabpanel" aria-labelledby="heading9"
              data-parent="#accordionEx">
              <div class="card-body">
             Entregamos principalmente no estado do RS. Porém temos frete grátis para os arredores de teutônia.
              </div>
            </div>

          </div>
              <!--Q9-->
              
               <!--Q10-->
             <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne10">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading10" 
                aria-controls="heading10">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i>E se o produto não for o que eu esperava?
                    
                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>
              
            </div>

            <!-- Card body -->
            <div id="heading10" class="collapse" role="tabpanel" aria-labelledby="heading10"
              data-parent="#accordionEx">
              <div class="card-body">
              Entre em contato conosco que podemos conversar uma solução para isso!
              </div>
            </div>

          </div>
              <!--Q11-->
           
        </div>
        <!-- Accordion wrapper -->


      </div>
      <!--Grid column-->
      </div>

</section>
@endsection