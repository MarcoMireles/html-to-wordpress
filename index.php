<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<section id="hero" class="bg-center bg-norepeat" style="background-image: url('img/bg-hero.jpg')">
  <div class="container mx-auto px-4 h-screen relative py-12">
    <div class="flex flex-col items-center logo-principal">
      <img class="w-20" src="img/logo.png" alt="">
      <p class="text-titulo text-white text-uppercase text-2xl font-bold">El Hotel Cool</p>
      <nav class="mt-4">
        <ul class="flex ">
          <li><a href="#" class="text-contenido text-white mx-4">Inicio</a></li>
          <li><a href="#" class="text-contenido text-white mx-4">Acerca de</a></li>
          <li><a href="#" class="text-contenido text-white mx-4">Amenidades</a></li>
          <li><a href="#" class="text-contenido text-white mx-4">Galeria</a></li>
          <li><a href="#" class="text-contenido text-white mx-4">Paquetes</a></li>
        </ul>
      </nav>
    </div>
    <div class="flex flex-col h-5/6 justify-center items-center">
      <h1 class="text-titulo font-bold text-8xl text-white mb-10">El Hotel Chido</h1>
      <p class="text-contenido text-xl text-white">Aliquam aliquam lobortis diam, ac blandit magna rutrum</p>
      <a href="#" class="px-8 py-3 bg-verde mt-8 text-white text-contenido font-bold rounded-lg	">Contáctanos</a>
    </div>
  </div>
</section>


<section id="about" class="py-32">
  <div class="container mx-auto px-4">
    <div class="block text-center">
      <h2 class="text-titulo text-5xl mb-3">Acerca de</h2>
      <p class="text-contenido text-base">Vivamus tincidunt ante non eros venenatis</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 mt-12 w-4/5 mx-auto" >
      <div class="flex justify-center">
        <img src="img/about.jpg" class="img-about rounded-lg shadow-xl" alt="">
      </div>
      <div class="flex flex-col px-16 py-10">
        <p class="text-titulo text-3xl mb-10">25 años brindando un servicio de calidad</p>
        <p class="text-contenido font-bold mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur debitis dicta dolore nobis, odio optio praesentium ullam.</p>
        <p class="text-contenido">Cras tortor sem, viverra id sapien sed, sollicitudin vestibulum mauris. Integer facilisis magna non accumsan dictum. Pellentesque sed iaculis orci. Fusce fringilla risus vel odio suscipit, eget molestie tellus blandit. In quis porttitor urna. </p>
      </div>
    </div>
  </div>
</section>

<section id="amenidades" class="bg-gris py-32">
  <div class=" container mx-auto px-4">
    <div class="block text-center">
      <h2 class="text-titulo text-5xl mb-3">Amenidades</h2>
      <p class="text-contenido text-base">Proin vel nulla eu dui placerat feugiat</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-8 mt-10">
      <div class="block text-center">
        <img src="img/a1.png" class="img-amenidades" alt="">
        <p class="text-contenido">Duis felis</p>
      </div>
      <div class="block text-center">
        <img src="img/a2.png" class="img-amenidades" alt="">
        <p class="text-contenido">Integer facilisis</p>
      </div>
      <div class="block text-center">
        <img src="img/a3.png" class="img-amenidades" alt="">
        <p class="text-contenido">Convallis felis</p>
      </div>
      <div class="block text-center">
        <img src="img/a4.png" class="img-amenidades" alt="">
        <p class="text-contenido">Eugiat interdum</p>
      </div>
      <div class="block text-center">
        <img src="img/a5.png" class="img-amenidades" alt="">
        <p class="text-contenido">Praesent et turpis</p>
      </div>
      <div class="block text-center">
        <img src="img/a6.png" class="img-amenidades" alt="">
        <p class="text-contenido">Morbi vitae</p>
      </div>
      <div class="block text-center">
        <img src="img/a7.png" class="img-amenidades" alt="">
        <p class="text-contenido">Donec quis</p>
      </div>
      <div class="block text-center">
        <img src="img/a8.png" class="img-amenidades" alt="">
        <p class="text-contenido">Cras tortor</p>
      </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mx-auto gallery-amenidades mt-16">
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab1.jpg')">
        <p class="text-titulo text-3xl relative text-white">Praesent </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab2.jpg')">
        <p class="text-titulo text-3xl relative text-white">Semper </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab3.jpg')">
        <p class="text-titulo text-3xl relative text-white">Dignissim </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab4.jpg')">
        <p class="text-titulo text-3xl relative text-white">Fusce </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab5.jpg')">
        <p class="text-titulo text-3xl relative text-white">Aliquam </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab6.jpg')">
        <p class="text-titulo text-3xl relative text-white">Gravida  </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab7.jpg')">
        <p class="text-titulo text-3xl relative text-white">Porttitor  </p>
      </div>
      <div class="flex justify-center items-center bg-amenidades-gallery mx-auto" style="background-image: url('img/ab8.jpg')">
        <p class="text-titulo text-3xl relative text-white">Bibendum  </p>
      </div>
    </div>

  </div>
</section>


<section id="cta" class="bg-center bg-norepeat py-28" style="background-image: url('img/cta.jpg')">
  <div class="container mx-auto px-4">
    <div id="cta-text" class="flex relative">
      <div class="flex flex-col justify-center w-4/5 px-8">
        <h1 class="text-titulo text-white text-5xl  mb-4">Escapate a una relajante aventura</h1>
        <p class="text-contenido text-white text-xl">Habeow nemore appellantur eu usu, usu putant dadolescens consequuntur ei, mhel tempor consulatu volutptaria te. Eat dicunt qualisfque vel, eam ubique amudcius docendi ne. Debet decore rgepudiare id mei..</p>
      </div>
      <div class="flex w-1/5 text-center items-center">
        <a href="#" class="px-8 py-3 bg-verde mt-8 text-white text-contenido font-bold rounded-lg	">Contáctanos</a>
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="py-28" >
  <div class="container mx-auto px-4 overflow-x-hidden">
    <div class="block text-center">
      <h2 class="text-titulo text-5xl mb-3">Galeria</h2>
      <p class="text-contenido text-base">Vel nulla eu dui placerat feugiat</p>
    </div>
    <div class="block carousel-gallery relative">
      <!-- Swiper -->
      <div class="swiper-container galeria">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/g1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g2.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g3.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g4.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g5.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g6.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g7.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/g8.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="packages" class="pt-20 pb-40 bg-gris mx-auto">
  <div class="container mx-auto px-4">
    <div class="block text-center">
      <h2 class="text-titulo text-5xl mb-3">Paquetes</h2>
      <p class="text-contenido text-base">Placerat feugiat</p>
    </div>
    <div id="packages-grid" class="grid grid-cols-1 grid-cols-2 gap-10 mx-auto mt-12">
      <div class="flex bg-white package">
        <div class="block"><img class="img-room" src="img/ab2.jpg" alt=""></div>
        <div class="flex flex-col justify-center px-8">
          <p class="text-titulo text-2xl my-6">Habitacion sencilla</p>
          <p class="text-contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <ul class="amenidades-pack flex mt-8">
            <li class="mx-1"><img src="img/a2.png" alt=""></li>
            <li class="mx-1"><img src="img/a3.png" alt=""></li>
            <li class="mx-1"><img src="img/a4.png" alt=""></li>
            <li class="mx-1"><img src="img/a5.png" alt=""></li>
          </ul>
        </div>

      </div>
      <div class="flex bg-white package">
        <div class="block"><img class="img-room" src="img/ab2.jpg" alt=""></div>
        <div class="flex flex-col justify-center px-8">
          <p class="text-titulo text-2xl my-6">Habitacion Doble</p>
          <p class="text-contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <ul class="amenidades-pack flex mt-8">
            <li class="mx-1"><img src="img/a2.png" alt=""></li>
            <li class="mx-1"><img src="img/a3.png" alt=""></li>
            <li class="mx-1"><img src="img/a4.png" alt=""></li>
            <li class="mx-1"><img src="img/a5.png" alt=""></li>
          </ul>
        </div>

      </div>
      <div class="flex bg-white package">
        <div class="block"><img class="img-room" src="img/ab2.jpg" alt=""></div>
        <div class="flex flex-col justify-center px-8">
          <p class="text-titulo text-2xl my-6">Habitacion Cuádruple</p>
          <p class="text-contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <ul class="amenidades-pack flex mt-8">
            <li class="mx-1"><img src="img/a2.png" alt=""></li>
            <li class="mx-1"><img src="img/a3.png" alt=""></li>
            <li class="mx-1"><img src="img/a4.png" alt=""></li>
            <li class="mx-1"><img src="img/a5.png" alt=""></li>
          </ul>
        </div>

      </div>
      <div class="flex bg-white package">
        <div class="block"><img class="img-room" src="img/ab2.jpg" alt=""></div>
        <div class="flex flex-col justify-center px-8">
          <p class="text-titulo text-2xl my-6">Habitacion Lujo</p>
          <p class="text-contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <ul class="amenidades-pack flex mt-8">
            <li class="mx-1"><img src="img/a2.png" alt=""></li>
            <li class="mx-1"><img src="img/a3.png" alt=""></li>
            <li class="mx-1"><img src="img/a4.png" alt=""></li>
            <li class="mx-1"><img src="img/a5.png" alt=""></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section> 

<section id="contacto"class="py-20">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 grid-cols-2 gap-4">
      <div class="flex flex-col bg-azul px-8 py-10 forma-contacto rounded-lg">
        <p class="text-titulo text-white text-3xl mb-8">¿Tienes alguna duda?</p>
        <form class="flex flex-col" action="#">
          <input type="text" class="bg-white py-2 px-4 mb-4 rounded-sm text-lg" placeholder="Nombre*">
          <input type="mail" class="bg-white py-2 px-4 mb-4 rounded-sm text-lg" placeholder="Correo*">
          <textarea type="text" class="bg-white py-2 px-4 mb-4 rounded-sm text-lg" placeholder="Mensaje"></textarea>
          <button type="submit" class="py-3 px-4 mt-4 text-contenido text-black bg-verde mb-4 rounded-sm text-white font-bold text-2xl">Enviar</button>
        </form>
      </div>
      <div class="flex flex-col justify-center items-center">
        <p class="text-titulo text-black text-3xl mb-8 text-center">¿Tienes alguna duda?</p>
        <p class="text-contenido text-black text-2xl mb-4 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
      </div>
    </div>
  </div>
</section>

<footer class="bg-azul py-12">
  <div class="container mx-auto px-4">
    <div class="flex justify-center items-center">

      <div class="text-center">
        <img src="img/logo.png" class="w-16 mx-auto" alt="">
        <p class="text-white my-0">Hecho con ♥</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.galeria', {
        slidesPerView: 4,
        autoplay: {
            delay: 2500,
        },
        loop:true,
        spaceBetween: 30,
    });
</script>
</body>
</html>