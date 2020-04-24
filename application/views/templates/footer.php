
<div style="width: 80%; border: solid 1px #264d6c ; margin: auto; margin-bottom: 20px " ></div>



<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span id="cerrar" class="close">&times;</span>
        
<img src="assets/img/protocoloCOVID.jpeg"  >


  </div>

</div>




<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  padding-top: 20px; /* Location of the box */
  left: 0;
  top: 0;

  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


.boton{
    margin-left: 100px;
    font-size: 10px;
    padding: 0px 5px 0px 5px;
    background: #003585;
    border: none;
    color: white;
    font-weight: 700;
}

</style>




 <!-- Start Fun Factor

    ============================================= -->

       
         <div class="slider">
    <div class="slide-track">
        <div class="slide" >
           <img style="margin-left: 20px; margin-right: 20px;" src="assets/img/upart.png" />
        </div>
        <div class="slide">
            <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/sanchezLogo.jpg" alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/alpino.png" alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/delpie.png" alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/humanLogo.jpg" />
        </div>
        <div class="slide">
            <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/epiLogo.jpg"  alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/alpino.png"  alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/delpie.png"  alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/upart.png"  />
        </div>
        <div class="slide">
            <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/upart.png"  alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/alpino.png"  alt="" />
        </div>
        <div class="slide">
           <img  style="margin-left: 20px; margin-right: 20px;" src="assets/img/delpie.png"  alt="" />
        </div>
    </div>

            </div>
        
    </div>
    <!-- End Fun Factor -->



    <!-- Start Footer 
    ============================================= -->
    <footer style="margin-top: 30px">
        
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-0324c916-3f51-48b7-9fbb-144a5a27232b"></div>
            <div class="container">
                <div class="row">

                    <div class="col-md-4">


                     <h2><i class="fas fa-phone"></i> 633 528 982</h2>

                     </div>

                      <div class="col-md-4">


                         <span> Lunes - Viernes :   9.00 am - 21.00 pm  </span>
                         <br>
                        <span style="color:#FFFFFF"> FLEXIBILIDAD HORARIA </span>
                       

                     </div>
                    <div class="col-md-4">
                        <p>&copy; Copyright 2020. by<a href="#"> SimInfo </a> - ClinicaSerrano </p>
                    </div>
                </div>
            </div>
        </div>



        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
<script >
    

jQuery('.mix-item-menu button').mousedown()

</script>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("cerrar");


btn.onclick = function() {
  modal.style.display = "block";
}


window.onload = function() {

modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>