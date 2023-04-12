        <!-- FOOTER -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- LOGO -->
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy0S6BE0SLukY4uS3ByKeqM_nnVX-Q2rX7cQ&usqp=CAU" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-3">
                                    <a href="#"><h4>Product</h4></a>
                                    <ul>
                                        <li><a href="#">Iphone</a></li>
                                       
                                    </ul>
                                </div>
                                <div class="col-xl-3">
                                    <a href="#"><h4>ABOUT product</h4></a>
                                    <ul>
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">Iphone news</a></li>
                                      
                                        
                                    </ul>
                                </div>
                                <div class="col-xl-3">
                                   
                                </div>
                                <div class="col-xl-3">
                                    <a href="#"><h4>CONTACT</h4></a>
                                    <ul>
                                        <li><a href="#">Email: storetechnology.com</a></li>
                                 
                                        <li><a href="#">Facebook: storetechnology</a></li>
                                     
                                    </ul>
                                </div>
                            </div>

                            <!-- row 2 -->
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="container-fluid" style="padding: 0;">
                                                <a href="#">
                                                    <h4>Feed Back</h4>
                                                </a>
                                                <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                                                <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                                               
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="container-fluid" style="padding: 0;">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <a href="#">
                                                    <h4>Facebook</h4>
                                                </a>
                                                <div class="dky">
                                                    <input type="email" placeholder="      Email" class="dky-input">
                                                    <button class="dky-button">Facebook</button>
                                               </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-xl-12">
                                               <div class="dky">
                                                    <input type="email" placeholder="      Email" class="dky-input">
                                                    <button class="dky-button">ĐĂNG KÝ</button>
                                               </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <a class="logogo" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                        <h1><span style="color: #fbead7; font-family: 'Pacifico', cursive; ">
                                Store Technology <i class="fas fa-bars"
                                    style="text-align: center"></i></span></h1>
                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- row copyright -->
                <div class="row">
                    <div class="col-xl-12">
                       
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script>
        var scrollSpyContentEl = document.getElementById('content')
        var scrollSpy = bootstrap.ScrollSpy.getInstance(scrollSpyContentEl) // Returns a Bootstrap scrollspy instance
    </script>

    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl, option)
        })

        var myAlert = document.getElementById('myAlert')
        var bsAlert = new bootstrap.Alert(myAlert)
        var alertNode = document.querySelector('.alert')
        var alert = bootstrap.Alert.getInstance(alertNode)
        alert.close()

        var myAlert = document.getElementById('myAlert')
        myAlert.addEventListener('closed.bs.alert', function () {

})

toast.show()
var myToastEl = document.getElementById('myToastEl')
var myToast = bootstrap.Toast.getInstance(myToastEl) // Returns a Bootstrap toast instance
var myToastEl = document.getElementById('myToastEl')
var myToast = bootstrap.Toast.getOrCreateInstance(myToastEl) // Returns a Bootstrap toast instance
toast.dispose()
var myToastEl = document.getElementById('myToast')
myToastEl.addEventListener('hidden.bs.toast', function () {
  // do something...
})
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
