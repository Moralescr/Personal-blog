<!-- Footer-->
 <footer id ="footer" style="background-image: url(/img/footer.png)" class="footer">
      <div class="container">
          <div class="footer-logo">
           <p class="msg">"{!! trans('messages.sentence') !!}"</p>
          </div>
          <ul class="social-icons">
              <li>
                <a href="https://www.facebook.com/Adrianmoralesguadamuz/" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
               </li>
              <li>
                <a href="https://www.instagram.com/_morales_cr" target="_blank">
                   <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/adrianm11" target="_blank">
                   <i class="fab fa-linkedin"></i>
                </a>
              </li>
              <li><a href="mailto:moralesguadamuz@gmail.com?subject=question"><i class="fa fa-envelope" target="_blank"></i></a></li>
          </ul>
          <p style="color:white" class="copyright">
             {!! trans('messages.made') !!} ❤️ |  {!! trans('messages.copyright') !!} 
             | © <span id="copyright" > </span> Moralescr
          </p>
      </div>
  </footer>
<style>
   .footer{
      background: no-repeat;
   }
</style>
  <script>
     //Selecciona el elemento a pasarle el dato
     const copyright = document.querySelector('#copyright');
     let year = new Date().getFullYear(); //Obtiene año actual
     //Asigna contenido a elemento HTML
     copyright.textContent = `${year}`;;
  </script>
