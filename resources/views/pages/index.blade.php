@extends('master')

@section('description', 'Pagina Inicial')

@section('keywords', 'reformas, projetos')

@section('title', 'Página inicial')

@section('content')

<div class="container-a g-medium--full g-wide--full">
<div class="float-l g--half"><!-- conteúdo da esquerda -->
<div id="example" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#example" data-slide-to="0" class="active"></li>
    <li data-target="#example" data-slide-to="1"></li>
    <li data-target="#example" data-slide-to="2"></li>
  </ol>
 -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{{ asset('img/slider/1.jpg') }}}" alt="">
      <div class="carousel-caption">
        <h4 class="">Cabeçalho</h4>
        <p class="">M{{{ asset('/css/carousel.css') }}}ussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
      </div>
    </div>
    <div class="item">
      <img src="{{{ asset('img/slider/2.jpg') }}}" alt="">
      <div class="carousel-caption">
       <h4 class="">Cabeçalho</h4>
       <p class="">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
      </div>
    </div>
  
    <div class="item">
      <img src="{{{ asset('img/slider/3.jpg') }}}" alt="">
      <div class="carousel-caption">
       <h4 class="">Cabeçalho</h4>
       <p class="">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#example" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    
  </a>
  <a class="right carousel-control" href="#example" role="button" data-slide="next">

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>

  </a>
</div><!-- slider -->
</div>


<div class="float-r g--half g--last"><!-- conteudo da direita -->
<p class="base centered">Temos tudo o que você precisa para reformar, construir ou decorar seu ambiente.Nós entregamos os melhores resultados!</p>

  <ul>
          <li>Serviços de alta qualidade.</li>
          <li>Compromisso com o cliente.</li>
          <li>Visualização de projetos em 3D</li>
  </ul>      

 
   <div class="call-to-action centered">
       <a href="#" role="button" class="button--secondary">Garanta Já Seu Orçamento</a>
   </div>
  
</div>

</div><!-- container-a -->

<!--  -->

<div class="container-b g-medium--full g-wide--full">
  
<div class="g-wide--1 g-medium--half">

   <ul>
     <li>(21) 9999-9999</li>
     <li>(21) 9999-9999</li>
     <li>(21) 9999-9999</li>
   </ul>
   
   <p class="base">Ligue já e solicite uma visita sem compromisso.</p>
  

  <div class="social-links">
    
    <nav>
      <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Facebook</a></li>
      </ul>
    </nav>

  </div>

</div><!-- left -->

<div class="g-wide--3 g-wide--last g-medium--half g--last">

<h3>Bem vindo ao reformas e construções</h3>

<div class="imagem">
  <img src="" alt="">
</div>

<article class="p-texto">

  <h4>Pensando em reformar sua casa?</h4>
  <h4>Ou que tal construir uma casa do seu jeito?</h5>
  <p class="base">Quando se trata de reforma e construção, nós da Maxx Reformas temos tudo que você precisa, desde pequenas reformas residenciais a grandes construções.Vai construir ou reformar e quer saber como vai ficar seu ambiente?
  </p>

  <!--  -->

  <p class="base">
  Nós da Maxx reformas e construções desenhamos seu projeto em 3D para que nossos clientes possam visualizar seu ambiente pronto.</p>

</article>

</div><!-- rigth -->


</div><!-- container b -->


<!-- box serviços-->

<div class="container-c g-medium--full g-wide--full centered">
  
<div class="g--third">
  <img src="{{{ asset('img/slider/3.jpg') }}}" alt="" />
</div>

<div class="g--third">
  <img src="{{{ asset('img/slider/3.jpg') }}}" alt="" />
</div>

<div class="g--third g--last">
  <img src="{{{ asset('img/slider/3.jpg') }}}" alt="" />
</div>

<div class="g--third">
  <img src="{{{ asset('img/slider/3.jpg') }}}" alt="" />
</div>

<div class="g--third">
  <img src="{{{ asset('img/slider/3.jpg') }}}" alt="" />
</div>

<div class="g--third g--last">
  <img src="{{{ asset('img/slider/3.jpg') }}}" alt="" />
</div>



</div><!-- container c -->



<!-- form -->

<div class="container-d g-medium--full g-wide--full">

<div class="centered call-form-a">
<h3>Preencha o formulario</h3>
<p class="medium">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis</p>
</div>

<form action="" class="formulario">
<fieldset class="data-a">
<legend class="centered"></legend>
    <label for="">Nome</label>
    <input name="" placeholder="Exampple" required class="dirty input" type="text">
    <label for="">E-mail</label>
    <input name="" placeholder="Exampple" required class="dirty input" type="text">
    <label for="">Telefone</label>
    <input name="" placeholder="Exampple" required class="dirty input" type="text">
    <label for="">Assunto</label>
    <input name="" placeholder="Exampple"  class="dirty input" type="text">
    <label for="">Mensagem</label>
    <textarea placeholder="Exampple" required class="dirty input" type="text"></textarea>
  </form> 
     <button class="btn button--secondary" type="submit" id="">Enviar</button> 
</fieldset>

</div><!-- call to action -->


<style type="text/css">
  
  .input { margin-bottom: 15px}

  input.dirty:not(:focus):invalid,
  textarea.dirty:not(:focus):invalid {
        background-color: #FFD9D9;
      }

  input.dirty:not(:focus):valid, 
  textarea.dirty:not(:focus):valid {
        background-color: #D9FFD9;
      }
 
</style>


@stop


