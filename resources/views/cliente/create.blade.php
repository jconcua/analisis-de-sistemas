<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gymbros</title>

   
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->




   

</head>
<body>
    
<style>

@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap");
* {
  font-family: 'Nunito', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  text-decoration: none;
  outline: none;
  border: none;
  text-transform: capitalize;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

html {
  font-size: 62.5%;
  scroll-behavior: smooth;
  scroll-padding-top: 5rem;
  overflow-x: hidden;
}

html::-webkit-scrollbar {
  width: 1rem;
}

html::-webkit-scrollbar-track {
  background: #000;
}

html::-webkit-scrollbar-thumb {
  background: #f00;
}

body {
  background: #000;
}

section {
  padding: 5rem 9%;
}

.heading {
  text-align: center;
  margin-bottom: 3rem;
  position: relative;
}

.heading::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  height: .1rem;
  width: 100%;
  background: #aaa;
  z-index: -1;
}

.heading span {
  font-size: 3rem;
  color: #f00;
  background: #000;
  padding: .5rem 1.5rem;
  border: 0.1rem solid #aaa;
  border-radius: .5rem;
}

.btn {
  margin-top: 1rem;
  display: inline-block;
  padding: 1rem 2.8rem;
  padding-right: 3rem;
  background: linear-gradient(130deg, #f00 93%, transparent 90%);
  color: #fff;
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 0 9%;
  z-index: 10000;
  background: #000;
}

.header .logo {
  font-weight: bolder;
  color: #fff;
  font-size: 3rem;
}

.header .logo span {
  color: #f00;
}

.header .navbar a {
  display: inline-block;
  padding: 1.5rem 2rem;
  font-size: 1.7rem;
  color: #fff;
}

.header .navbar a:hover {
  background: #f00;
}

#menu-btn {
  font-size: 3rem;
  color: #fff;
  cursor: pointer;
  display: none;
}

.home {
  padding: 0;
  margin-top: 5rem;
}

.home .slide {
  min-height: 70vh;
  background-size: cover !important;
  background-position: center !important;
  padding: 2rem 9%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.home .slide .content {
  width: 60rem;
}

.home .slide .content span {
  font-size: 2rem;
  color: #f00;
  display: block;
}

.home .slide .content h3 {
  font-size: 5rem;
  color: #fff;
  padding: 1rem 0;
}

.swiper-pagination-bullet {
  height: 2rem;
  width: 2rem;
  background: #fff;
  border-radius: 0;
}

.swiper-pagination-bullet.swiper-pagination-bullet-active {
  background: #f00;
}

.about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 8rem;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  position: relative;
}

.about .image::before, .about .image::after {
  content: '';
  position: absolute;
  z-index: -1;
  background: #f00;
  height: 15rem;
  width: 15rem;
}

.about .image::before {
  top: 0;
  left: 0;
}

.about .image::after {
  bottom: 0;
  right: 0;
}

.about .image img {
  width: 100%;
  padding: 2rem;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.about .content span {
  font-size: 2rem;
  color: #f00;
}

.about .content .title {
  font-size: 4rem;
  color: #fff;
  margin-top: .5rem;
}

.about .content p {
  font-size: 1.5rem;
  color: #aaa;
  padding: 1rem 0;
  line-height: 2;
}

.about .content .box-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
  margin-top: 1rem;
}

.about .content .box-container .box {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 20rem;
          flex: 1 1 20rem;
}

.about .content .box-container .box h3 {
  font-size: 2rem;
  color: #fff;
}

.about .content .box-container .box h3 i {
  padding-right: 1.5rem;
  color: #f00;
}

.features .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(32rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(32rem, 1fr));
  gap: 1.5rem;
  gap: 0;
}

.features .box-container .box {
  background: #111;
}

.features .box-container .box.second {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: reverse;
      -ms-flex-flow: column-reverse;
          flex-flow: column-reverse;
}

.features .box-container .box:hover .image img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.features .box-container .box .image {
  height: 30rem;
  width: 100%;
  overflow: hidden;
}

.features .box-container .box .image img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.features .box-container .box .content {
  padding: 2rem;
  text-align: center;
}

.features .box-container .box .content img {
  height: 9rem;
  margin-bottom: 1rem;
  -webkit-filter: invert(1);
          filter: invert(1);
}

.features .box-container .box .content h3 {
  font-size: 2rem;
  color: #f00;
}

.features .box-container .box .content p {
  line-height: 2;
  font-size: 1.5rem;
  color: #aaa;
  padding: 1rem 0;
}

.pricing {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(32rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(32rem, 1fr));
  gap: 1.5rem;
}

.pricing .information span {
  font-size: 2rem;
  color: #f00;
}

.pricing .information h3 {
  font-size: 4rem;
  padding-top: .5rem;
  color: #fff;
}

.pricing .information p {
  line-height: 2;
  padding: 1rem 0;
  font-size: 1.4rem;
  color: #aaa;
}

.pricing .information p i {
  padding-right: 1rem;
  color: #f00;
}

.pricing .plan {
  text-align: center;
  padding: 2rem;
}

.pricing .plan.basic {
  background: linear-gradient(130deg, #111 93%, transparent 90%);
}

.pricing .plan h3 {
  font-size: 2.5rem;
  margin: 1rem 0;
  color: #fff;
}

.pricing .plan .price {
  font-size: 5rem;
  font-weight: bolder;
  color: #f00;
}

.pricing .plan .price span {
  color: #fff;
  font-size: 2rem;
}

.pricing .plan .list {
  padding: 1rem 0;
}

.pricing .plan .list p {
  line-height: 2;
  padding: 1rem 0;
  font-size: 1.4rem;
  color: #aaa;
}

.pricing .plan .list p i {
  padding-right: 1rem;
  color: #f00;
}

.trainers .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(29rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(29rem, 1fr));
  gap: 1.5rem;
}

.trainers .box-container .box {
  height: 40rem;
  overflow: hidden;
  position: relative;
}

.trainers .box-container .box:hover .content {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.trainers .box-container .box img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.trainers .box-container .box .content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: #111;
  padding: 2rem;
  -webkit-transform: translateY(6.5rem);
          transform: translateY(6.5rem);
}

.trainers .box-container .box .content span {
  font-size: 1.5rem;
  color: #f00;
}

.trainers .box-container .box .content h3 {
  font-size: 2rem;
  color: #fff;
  padding-top: .5rem;
}

.trainers .box-container .box .content .share {
  padding-top: 2rem;
  margin-top: 1.5rem;
  border-top: 0.1rem solid #aaa;
}

.trainers .box-container .box .content .share a {
  font-size: 2rem;
  color: #fff;
  margin-right: 1.5rem;
}

.trainers .box-container .box .content .share a:hover {
  color: #f00;
}

.banner {
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.7)), to(rgba(0, 0, 0, 0.7))), url(../images/banner-bg.jpg) no-repeat;
  background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../images/banner-bg.jpg) no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  text-align: center;
}

.banner span {
  font-size: 2rem;
  color: #f00;
}

.banner h3 {
  padding-top: 1rem;
  color: #fff;
  text-transform: uppercase;
  font-size: 3.5rem;
}

.banner p {
  margin: 1rem auto;
  max-width: 60rem;
  font-size: 1.5rem;
  color: #aaa;
  line-height: 2;
}

.review {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.review .information {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 35rem;
          flex: 1 1 35rem;
}

.review .information span {
  font-size: 2rem;
  color: #f00;
}

.review .information h3 {
  font-size: 3rem;
  color: #fff;
  padding-top: 1rem;
}

.review .information p {
  font-size: 1.5rem;
  line-height: 2;
  color: #aaa;
  padding: 1rem 0;
}

.review .review-slider {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 60rem;
          flex: 1 1 60rem;
}

.review .review-slider .slide {
  background: linear-gradient(130deg, #111 93%, transparent 90%);
  padding: 2rem 3rem;
}

.review .review-slider .slide p {
  font-size: 1.5rem;
  line-height: 2;
  color: #aaa;
}

.review .review-slider .slide .user {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 1.5rem;
}

.review .review-slider .slide .user img {
  height: 5rem;
  width: 5rem;
  -o-object-fit: cover;
     object-fit: cover;
  border-radius: 50%;
  margin-right: 1rem;
}

.review .review-slider .slide .user h3 {
  font-size: 2rem;
  color: #fff;
}

.review .review-slider .slide .user span {
  color: #f00;
  font-size: 1.5rem;
}

.review .review-slider .slide .user i {
  font-size: 5rem;
  margin-left: auto;
  margin-right: 2rem;
  color: #f00;
}

.blogs .slide {
  background: #111;
  margin-bottom: 7rem;
}

.blogs .slide:hover .image img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.blogs .slide .image {
  height: 25rem;
  width: 100%;
  overflow: hidden;
}

.blogs .slide .image img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.blogs .slide .content {
  padding: 2rem;
}

.blogs .slide .content .link {
  padding-bottom: 1.5rem;
  font-size: 1.5rem;
}

.blogs .slide .content .link a {
  color: #f00;
}

.blogs .slide .content .link a:hover {
  color: #fff;
}

.blogs .slide .content .link span {
  color: #fff;
  padding: 0 1rem;
}

.blogs .slide .content h3 {
  font-size: 2rem;
  color: #fff;
  line-height: 1.5;
}

.blogs .slide .content p {
  font-size: 1.5rem;
  color: #aaa;
  line-height: 2;
  padding: 1rem 0;
}

.footer .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 1.5rem;
}

.footer .box-container .box h3 {
  font-size: 2.2rem;
  color: #fff;
  padding: 1rem 0;
}

.footer .box-container .box .links {
  font-size: 1.5rem;
  display: block;
  color: #aaa;
  padding: 1rem 0;
}

.footer .box-container .box .links:hover {
  color: #f00;
}

.footer .box-container .box p {
  font-size: 1.5rem;
  color: #aaa;
  padding: 1rem 0;
}

.footer .box-container .box p i {
  padding-right: .5rem;
  color: #f00;
}

.footer .box-container .box .share {
  padding: 1rem 0;
}

.footer .box-container .box .share a {
  height: 4.5rem;
  width: 4.5rem;
  line-height: 4.5rem;
  font-size: 1.7rem;
  color: #fff;
  background: #111;
  border-radius: 50%;
  margin-right: .5rem;
  text-align: center;
}

.footer .box-container .box .share a:hover {
  background: #f00;
}

.footer .box-container .box form .email {
  margin-bottom: 1rem;
  width: 100%;
  background: #111;
  padding: 1.2rem;
  font-size: 1.5rem;
  color: #fff;
  text-transform: none;
}

.credit {
  font-size: 2rem;
  text-align: center;
  padding: 2rem;
  color: #fff;
  background: #111;
  line-height: 1.5;
}

.credit span {
  color: #f00;
}

@media (max-width: 991px) {
  html {
    font-size: 55%;
    scroll-padding: 7rem;
  }
  .header {
    padding: 0 2rem;
  }
  section {
    padding: 3rem 2rem;
  }
  .home .slide {
    padding: 2rem 5%;
  }
  .home .slide .content {
    width: 50rem;
  }
  .home .slide .content h3 {
    font-size: 4rem;
  }
}

@media (max-width: 768px) {
  #menu-btn {
    display: inline-block;
  }
  #menu-btn.fa-times {
    -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
  }
  .header {
    padding: 2rem;
  }
  .header .navbar {
    position: absolute;
    top: 99%;
    left: 0;
    right: 0;
    background: #000;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  }
  .header .navbar.active {
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }
  .header .navbar a {
    display: block;
    font-size: 2rem;
  }
  .about {
    gap: 3rem;
  }
  .about .image {
    margin-top: 5rem;
  }
  .about .content .title {
    font-size: 3rem;
  }
  .features .box-container .box.second {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
  }
}


/*----Style - form subscription-------*/

form#form-subscription {
  color: #fff;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.container-items {
  width: 100%;
  display: grid;
}
.container-items label {
  font-size: 12px;
  color: #9fa2a5;
}
.container-items input {
  border-radius: 5px;
  padding: 5px;
  min-height: 10px;
  height: 100%;
  width: 100%;
}
/*----End - Style - form subscription-------*/

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
}
/*# sourceMappingURL=style.css.map */


/*Style btn subscribe */



#btn_submit{
  min-height: 40px;
  width: 80%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: red;
  color: #fff;
  padding: 0 5px;
  border: 1px solid #000;
  border-radius: 20px 0;
  margin-top: 15px;
  cursor: pointer;
}


    
</style>



<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>gym</span>BROS </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">inicio</a>
        <a href="#about">sobre</a>
        <a href="#features">Caracteristicas</a>
        <a href="#pricing">precio</a>
        <a href="#trainers">Entrenadores</a>
        <a href="#blogs">blogs</a>
    </nav>

</header>

<!-- header section ends     -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(/proyecto/images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>lo mejor para ser fit</span>
                    <h3>SOLO TU PUEDES PONER TUS OBSTACULOS</h3>
                    <a href="#" class="btn">INICIAR</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(/proyecto/images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <span>lo mejor para ser fit</span>
                    <h3>SOLO TU PUEDES PONER TUS OBSTACULOS</h3>
                    <a href="#" class="btn">INICIAR</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(/proyecto/images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>lo mejor para ser fit</span>
                    <h3>SOLO TU PUEDES PONER TUS OBSTACULOS</h3>
                    <a href="#" class="btn">INICIAR</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="/proyecto/images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>Sobre nosotros </span>
        <h3 class="title">todos los dias con disponibilidad</h3>
        <p>Nosotros somos una empresa dispuesta a brindarte un servicio
            unico y exclusivo, somos del gobierno de Guatemala, pudes suscribirte
            y disfrutar de nuestro servicio gratis 
        </p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>buenas instalaciones</h3>
                <p>Ofrecemos de nuestras mejores maquinas para hacer ejercicio</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>instructores</h3>
                <p>contacta a nuestros instructores, estaran para brindarte toda la atencion posible

                </p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>estrategias</h3>
                <p>Encuentra en nuestra aplicacion las mejores dietas y rutinas</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>Trabajo</h3>
                <p>si estas dispuesto tendras el cuerpo que siempre has soñado en meses</p>
            </div>
        </div>
       
    </div>

</section>

<!-- about section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>Caracteristicas</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="/proyecto/images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="/proyecto/images/icon-1.png" alt="">
                <h3>Trabaja tus brazos</h3>
                <p>Las mejores rutinas </p>
            
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="/proyecto/images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="/proyecto/images/icon-2.png" alt="">
                <h3>gym for men</h3>
                <p>El entrenador Renato perez estara a cargo de los caballeros y supervisor</p>
                <a href="https://www.facebook.com/cesar.renato.1694" class="btn">Perfil</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/proyecto/images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="/proyecto/images/icon-3.png" alt="">
                <h3>gym for women</h3>
                <p>El entrenador Antonio Garcia estara a cargo del entreno de las dams y encargado en el area de soporte</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>Planes </span>
        <h3>Nuestros planes de pago  </h3>
        <p>son de 0 nuestro gym es publico solo debes de registrarte</p>
        <p> <i class="fas fa-check"></i> cardio ejercicio </p>
        <p> <i class="fas fa-check"></i> ejercicio pierna  </p>
        <p> <i class="fas fa-check"></i> planes de dieta  </p>
        <p> <i class="fas fa-check"></i> Resultados  </p>
        <a href="https://play.google.com/store/apps?gl=us" class="btn">descarga nuestra app</a>
    </div>

    <div class="plan basic">
        <h3>Atencion </h3>
        <div class="price"><span>Asigna</span>Tu<span>instructor</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> Personal </p>
        <p> <i class="fas fa-check"></i> cardio ejercicio </p>
        <p> <i class="fas fa-check"></i> rutinas </p>
        <p> <i class="fas fa-check"></i> pregunta por las dietas  </p>
        <p> <i class="fas fa-check"></i> Resultados </p>
       </div>
       <a href="#blogs" class="btn">subscribete</a>
    </div>

    

</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="/proyecto/images/1antonioentrenador.jpeg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>antonio garcia </h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    
                </div>
            </div>
        </div>

        <div class="box">
            <img src="/proyecto/images/trainer-2.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="/proyecto/images/2 CONCUA FOTO.jpeg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>CONCUA</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="/proyecto/images/3 RENATO FOTO.jpeg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>RENATO</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- trainers section ends -->

<!-- banner section starts  -->

<section class="banner">

    <span>Decarga nuestra app</span>
    <h3>Gratis</h3>
    <p>Disponible para todos los dispositivos, unete a nuestro equipo de "Gym bros" </p>
    <a href="https://play.google.com/store/apps?gl=us" class="btn">click</a>

</section>

<!-- banner section ends -->

<!-- review section starts  -->

<section class="review">

    <div class="information">
        <span>testimonios</span>
        <h3>que dicen nuestros clientes</h3>
        <p>mira aqui algunos de los testimonios de nuestros clientyes satisfechos de nuestras instalaciones publicas, cuando quieras visitanos</p>
        <a href="#" class="btn">leer mas </a>
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>siempre habia querido un cuerpo tonificado y alfin gracias a gymbros pude realizar mmi sueño</p>
                <div class="user">
                    <img src="/proyecto/images/2 CONCUA FOTO.jpeg" alt="">
                    <div class="info">
                        <h3>jose concua</h3>
                        <span>diseño</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>siempre habia querido un cuerpo tonificado y alfin gracias a gymbros pude realizar mmi sueño</p>
                <div class="user">
                    <img src="/proyecto/images/3 RENATO FOTO.jpeg" alt="">
                    <div class="info">
                        <h3>renato perez</h3>
                        <span>diseño</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>siempre habia querido un cuerpo tonificado y alfin gracias a gymbros pude realizar mi sueño</p>
                <div class="user">
                    <img src="/proyecto/images/1antonioentrenador.jpeg" alt="">
                    <div class="info">
                        <h3>Antonio</h3>
                        <span>diseño</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>siempre habia querido un cuerpo tonificado y alfin gracias a gymbros pude realizar mmi sueño</p>
                <div class="user">
                    <img src="/proyecto/images/pic-4.png" alt="">
                    <div class="info">
                        <h3>arlyne</h3>
                        <span>diseño</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>Antonio Posts</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="/proyecto/images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">para usuarios</a> <span>|</span> <a href="#">20 marzo, 2022</a> </div>
                    <h3>la mejor forma de cumplir tus metas es la dedicacion</h3>
                    <p>¿Necesitas un cuerpo tonificado?</p>
                    <a href="#" class="btn">Leer mas </a>
                </div>
            </div>
            
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="/proyecto/images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">20 marzo, 2022</a> </div>
                    <h3>la mejor forma de cumplir tus metas es la dedicacion</h3>
                    <p>¿Necesitas un cuerpo tonificado?</p>
                    <a href="#" class="btn">leer mas</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="/proyecto/images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">20 marzo, 2022</a> </div>
                    <h3>la mejor forma de cumplir tus metas es la dedicacion</h3>
                    <p>¿Necesitas un cuerpo tonificado?</p>
                    <a href="#" class="btn">leer mas </a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="/proyecto/images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">20 marzo, 2022</a> </div>
                    <h3>la mejor forma de cumplir tus metas es la dedicacion</h3>
                    <p>¿Necesitas un cuerpo tonificado?</p>
                    <a href="#" class="btn">leer mas </a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="/proyecto/images/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">20 marzo, 2022</a> </div>
                    <h3>la mejor forma de cumplir tus metas es la dedicacion</h3>
                    <p>¿Necesitas un cuerpo tonificado?</p>
                    <a href="#" class="btn">leer mas </a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>selecciona los link</h3>
            <a class="links" href="#home">inicio</a>
            <a class="links" href="#about">sobre</a>
            <a class="links" href="#features">features</a>
            <a class="links" href="#pricing">precios</a>
            <a class="links" href="#trainers">entrenador</a>
            <a class="links" href="#blogs">blogs</a>
        </div>

        <div class="box">
            <h3>horario de apertura </h3>
            <p> lunes : <i> 7:00am - 10:30pm </i> </p>
            <p> martes : <i> 7:00am - 10:30pm </i> </p>
            <p> miercoles : <i> 7:00am - 10:30pm </i> </p>
            <p> viernes : <i> 7:00am - 10:30pm </i> </p>
            <p> sabado : <i> 7:00am - 10:30pm </i> </p>
            <p> domingo : <i> cerrado </i> </p>
        </div>

        <div class="box">
            <h3>atencion al cliente</h3>
            <p> <i class="fas fa-phone"></i> +502 47441886 </p>
            <p> <i class="fas fa-phone"></i> +502 42234610 </p>
            <p> <i class="fas fa-envelope"></i> antoinegeo13@gmail.com </p>
            <p> <i class="fas fa-map"></i> guatemala, santa rosa </p>
            <div class="share">
                <a href="https://www.facebook.com/Gymbros-109775495188815" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
               
               
            </div>
        </div>

        <div class="box">

            
            <h3>subscribete</h3>
            <p>Suscribete antes que sea tarde</p>

            <form action="{{url('/cliente')}}" method="post">
@csrf  
                <div class="container-items">
                    <label for="mail" class="LABELCORREO title-items title-item-mail">Nombre:</label>            
                    <input type="nombre" id="mail" name="nombre">
                </div>
                <div class="container-items">
                    <label for="firstName" class="LABELCORREO title-items title-item-name">Correo:</label>            
                    <input type="text" id="firstName" name="mail">
                </div>
                <div class="container-items">
                    <label for="lastName" class="LABELCORREO title-items title-item-lname">Fecha de Nacimiento:</label>            
                    <input type="text" id="lastName" name="fechaNacimiento" value="">
                </div>
                <div class="container-items">
                    <label for="phone" class="LABELCORREO title-items title-item-phone">Genero:</label>            
                    <input type="text" id="phone" name="sexo" value="">
                </div>
                <div class="container-items">
                    <label for="phone" class="LABELCORREO title-items title-item-phone">Telefono:</label>            
                    <input type="text" id="phone" name="telefono" value="">
                </div>

                
                <div id="btn_submit">   <input type="submit" value="Guardar datos" style="background-color: red; " ></div>

                
</form>
        </div>
<!--
    Correo 
Nombre 
Apellido 
Telefono

-->>
    </div>

</section>

<div class="credit"> creado <span>hermanos del gym y asociados</span> | has tus reservaciones </div>

<!-- footer section ends -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="./config.js"></script>

<!--Jquery para enviar data - No fetch xd-->>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- custom js file link  -->


<script src="js/script.js"></script>

</body>
</html>
<br>
<br>

<!--
<form action="{{url('/cliente')}}" method="post">
@csrf    
 Nombre   
 <input type="text" name="nombre">
 <br>
 
 mail  
 <input type="text" name="mail">
 <br>

 Fecha de nacimiento 
 <input type="text" name="fechaNacimiento">
 <br>

 sexo  
 <input type="text" name="sexo">
 <br>
 
 telefono  
 <input type="text" name="telefono">
 <br>



 <input type="submit" value="Guardar datos">
</form>
