@extends('layout')
@section('title') ReKrie - Contatos @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<style>
    #body
    {
        background:#f2f2f2;
    }
    @media (max-width: 768px)
    { 
          .contactwidth
        {
            width:100%;
        }
    }
     @media (min-width: 768px)
    { 
        .contactwidth
        {
            width:60%;
        }
    }
</style>
<!-- ======= Contact Section Starts Here ======= --> 
 
<section id="contact" class="contact">
    <div class="container contactwidth"  >

      <div class="section-title">
      
        <h2>Contatos</h2> 
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div align="left" class="info">
            <div class="address" >
              <i class="fas fa-map-marker-alt"></i>
                <h4>Localização:</h4>
                <p>  Teutônia - RS</p>
              </div>

              <div class="email">
              <i class="fas fa-envelope"></i>
                <h4>Email:</h4>
                <p>henrique.gewehr@universo.univates.br</p>
              </div>

              <div class="phone">
              <i class="fas fa-phone"></i>
                <h4>Call:</h4>
                <p>Celular: telefone aqui<br>
Fixo: número fixo aqui</p>
              </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d412.8581208194774!2d77.6434072228083!3d14.605726057235447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sADI%20Foundation%2C%20%233%20Akuthotapalli%2C%20SKU%2C%20Anantapur%20-515003!5e1!3m2!1sen!2sin!4v1617198303303!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="send-email" method="post" role="form" class="php-email-form">
              @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Seu Nome</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="No minimo 4 letras" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Seu Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Coloque um email valido" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Assunto</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="no minimo de 8 letras." />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Mensagem</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="escreva algo para nos"></textarea>
              <div class="validate"></div>
            </div>
             
            <div class="text-center"><button type="submit">Enviar Email</button></div>
          </form>
        </div>

      </div>

    </div>
</section>

<!-- ======= Contact Section Ends Here ======= --> 

  
   @if (session('status'))

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
@endif

@if($errors->any())

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
@endif


 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Sucesso</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>{{session('status')}} </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Fechar</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
 
 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Email não enviado </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
             
           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p>@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Fechar</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->
 
@endsection