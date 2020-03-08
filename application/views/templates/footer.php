
    <footer class="site-footer site-bg-dark site-section" style="padding: 10px 0px 0px 0px">
   


  <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.3728264689735!2d-0.4836822441622265!3d38.34658193042249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6237b21c9215e5%3A0xb0928f9066b080b1!2sMes%C3%B3n%20de%20Labradores%2C%20Alicante!5e1!3m2!1ses!2ses!4v1571228327064!5m2!1ses!2ses"
     width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>

     <!--    <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Chefs</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Foods</a></li>
                    <li><a href="#" class="py-2 d-block">Drinks</a></li>
                    <li><a href="#" class="py-2 d-block">Breakfast</a></li>
                    <li><a href="#" class="py-2 d-block">Brunch</a></li>
                    <li><a href="#" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div> -->
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Mesón Labradores | <a href="https://siminfo.com" target="_blank">SIMINFO</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
    
    </footer>

    
    

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
            
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Formulario de reserva</h1>  
                <form action="<?= base_url('reserva') ?>" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">Nombre</label>
                      <input type="text" class="form-control" name="nombre" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" id="m_lname">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" name="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">¿Para cuantos comensales?</label>
                      <select name="personas" id="m_people" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10 o mas</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Teléfono</label>
                      <input name="telefono" type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">¿Que día?</label>
                      <input name="dia" type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Elije una hora</label>
                      <input name="hora" type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">¿Tienes alguna petición?</label>
                      <textarea name="mensaje" class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reservar ahora">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.timepicker.min.js"></script>
    
    <script src="assets/js/jquery.animateNumber.min.js"></script>
 
    <!-- <script >
      

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 43.5293101, lng: -5.6773233},
          zoom: 13
        });




      }

    </script>




        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaSV8SKFhIo4ycoTTVmnkGMziCYnvaiAc&callback=initMap">
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaSV8SKFhIo4ycoTTVmnkGMziCYnvaiAc&callback=initMap"></script>
<script src="assets/js/google-map.js"></script>
 -->
    <script src="assets/js/main.js"></script>

    
  </body>
</html>

>
   
