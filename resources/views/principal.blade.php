<!SECTION PRINCIPAL##############################################>
  <div class="container div-principal">
    <div class="row">
      <article class="jumbotronn col-xs-12 col-sm-12 col-md-8 col-lg-8">
        @yield('section')
      </article>
      <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4 div-aside">
          <div class="col-xs-10 div-contacto">
             <a class="btn btn-block boton-azul" href="{{URL::to('contacto')}}#contenido">CONTACTO</a>
             <p class="text-center span-telefono">6164585</p>
             <p class="text-center fuente-15">
                Carrera 14 No. 86a - 15<br>
                Bogotá Colombia<br>
                educacion@altavision.com.co<br>
                www.altavision.com.co<br>
             </p>
             <a class="btn btn-block boton-azul margin-boletin" href="{{URL::to('boletin')}}#contenido"><i class="glyphicon glyphicon-envelope"></i> Boletín</a>
             <a class="btn btn-block boton-azul margin-charla" href="{{URL::to('charlas')}}#contenido"><i class="glyphicon glyphicon-comment"></i> Charlas</a>
          </div>
          <div class="col-xs-2 div-iconos">

            <a href="{{URL::to('whatsapp')}}" class="btn btn-social-icon btn-whatsapp center-block btn-lg">
              <span class="fa fa-whatsapp icon-whatsapp "></span>
            </a><br>

            <a href="https://www.facebook.com/altavisionltda/" target="_blank" class="btn btn-social-icon btn-facebook center-block btn-lg ">
              <span  class="fa fa-facebook icon-facebook"></span>
            </a><br>

            <a style="font-size:1.5em;"  href="https://twitter.com/HablemosDSalud" target="_blank" class="btn btn-social-icon btn-twitter center-block btn-lg">
              <span  class="fa fa-twitter icon-twitter"></span>
            </a><br>

            <a href="https://www.youtube.com/channel/UC6Hg_5KzRe5YKetvZc-ZEmA" target="_blank" class="btn btn-social-icon btn-youtube-play center-block btn-lg">
              <i class="fa fa-youtube-play icon-youtube" ></i>
            </a><br>

            <a href="https://plus.google.com/u/0/117567823118661042380/posts" target="_blank" class="btn btn-social-icon btn-google center-block btn-lg">
             <span class="fa fa-google icon-google-plus"></span>
            </a>

          </div>
      </aside>
    </div>
  </div>
<!FIN SECTION####################################################>
</div>
<!FOOTER#########################################################>
<footer class="miFooter gris">
  <p class="text-center">
    <a href="#contenido" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
  </p>
    <div class="row footer-info">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <a ><center><img src="{!!asset('img/icons/logo-footer.png')!!}" class="logo-footer"></center></a>
        <p>Somos experiencia, servicio y tecnología para mejorar su visión y prevenir las enfermedades visuales.
          Nos dedicamos exclusivamente a la solución de problemas oftalmológicos con
          un enfoque de alta calidad y responsabilidad para el cuidado de sus ojos.
          <label class="label-servicios">Nuestros servicios:</label></p>
        <p class="p-valoracion">
          Valoración Oftalmológica 360°. Cirugías oftalmológicas.
          Adaptación y suministro de lentes de contacto y gafas.</p>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <a  href="http://www.hablemosdesalud.com.co"><center><img src="{!!asset('img/icons/logo-HDS.png')!!}" class="logo-footer"></center></a>
        <p class="text-foo">Somos un equipo de personas que trabaja con amor, profesionalismo y
          un interés genuino por la salud de las familias colombianas.
          Educamos a nuestros pacientes a través de la entrega de información vital y la promoción
          de hábitos saludables.<br><br>
          Trabajamos con nuestras unidades de servicio bajo principios de efectividad, tecnología
          y confianza para garantizar el oportuno diagnóstico y tratamiento de las enfermedades con
          mayor impacto en la población.<br></p>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <center><label class="piedepagina_label text-center logo-footer">ENCUENTRA MÁS <br> INFORMACION EN</label></center>
        <div class="text-center">
          <a target="_blanck" href="http://altavision.com.co">www.altavision.com.co</a><hr  class="hr_piedepagina">
          <a target="_blanck" href="http://hablemosdesalud.com.co/">www.hablemosdesalud.com.co</a><hr class="hr_piedepagina">
          <a target="_blanck" href="http://glaucoma.org.co">www.glaucoma.org.co</a><hr class="hr_piedepagina">
          <a target="_blanck" href="http://examenesdiagnosticos.com.co">www.examenesdiagnosticos.com.co</a><hr class="hr_piedepagina">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <center><label class="piedepagina_label text-center logo-footer">NUESTRAS EMPRESAS ALIADAS</label></center>
        <a><center><img src="https://www.libertycolombia.com.co/Style%20Library/Imagenes/liberty.png" class="logo-footer margin-top-0"></center></a>
        <a><center><img src="http://www.foncencosud.com.co/images/logo.png" class="logo-footer margin-top-0" style="background-color:#0068b3; padding:5px; border-radius:15px;" ></center></a>
      </div>
      <div class="col-xs-12">
        <p class=" col-md-12 footer-fin text-center"><br><br>
          Alta Visión: Cr 14 No. 86a - 15 Bogotá - Colombia PBX: 6164585 Opción:5. E-mail:educacion@altavision.com.co<br> La información médica aquí descrita no remplaza una valoración oftalmológica.<br>La reproducción de texto o imagénes incluidas en este sitio web esta estrictamente prohibida.
          <br>
        </p>
      </div>
    </div>
</footer>
