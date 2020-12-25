<!-- Left Assistent -->
<div class="left-assistent">
    <div id="mySidenav" class="package">
        <div class="w-100 row align-items-center justify-content-center">
            <div class="col-6">
                <button data-href="#v-pills-facial-tab" class="assistent-action-button"><img draggable="false" class="w-100" src="./images/face_icon.png" alt="Icone_de_rosto/png"><span class="d-block">Facial</span></button>
            </div>
            <div class="col-6">
                <button data-href="#v-pills-corporal-tab" class="assistent-action-button "><img draggable="false" class="w-100" src="./images/body_icon.png" alt="Icone_de_corpo/png"><span class="d-block">Corporal</span></button>
            </div>
        </div>
    </div>
    <button onclick="toogleAssistent(this)" class="btn"><i class="fas fa-caret-right"></i><i class="fas fa-caret-left" style="display: none;"></i></button>
</div>
<!-- Modal Assitent -->
<div class="modal fade" id="bookModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="booking modal-dialog">
        <div class="modal-content">
            <div class="row align-items-start">
                <div class="nav flex-column nav-pills me-4 nav-booking" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="icon-modal">
                        <img draggable="false" class="w-100" src="./images/white-butterfly-logo.png" alt="Logo_de_borboleta_branca/png">
                    </div>
                    <a class="btn-side-modal" id="v-pills-facial-tab" data-bs-toggle="pill" href="#v-pills-facial" role="tab" aria-controls="v-pills-facial" aria-selected="false" title="Facial"><img draggable="false" class="w-100" src="./images/face_icon.png" alt="Icone_de_rosto/png"></a>
                    <a class="btn-side-modal" id="v-pills-corporal-tab" data-bs-toggle="pill" href="#v-pills-corporal" role="tab" aria-controls="v-pills-corporal" aria-selected="false" title="Corporal"><img draggable="false" class="w-100" src="./images/body_icon.png" alt="Icone_de_corpo/png"></a>
                    <button type="button" class="back-site" data-bs-dismiss="modal">voltar ao site</button>
                </div>
                <div class="col tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-facial" role="tabpanel" aria-labelledby="v-pills-facial-tab">
                        <h1 class="booking-title">Facial</h1>
                        <ul class="p-0 book-list">
                            <li>
                                <label class="booking-label"><span>Micro Renovation</span><span>Micropgmen... (Fio a
                                        Fio /
                                        Shadow)</span></label>
                                <button type="button" class="camera" onclick="carouselModal.show()"><img draggable="false" class="w-100" src="./images/camera.png" alt="Camera/png"></button>
                                <button type="button" class="calendario"><img draggable="false" class="w-100" src="./images/calendario.png" alt="Camera/png"></button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="v-pills-corporal" role="tabpanel" aria-labelledby="v-pills-corporal-tab">
                        <h1 class="booking-title">Corporal</h1>
                        <ul class="p-0 book-list">
                            <li>
                                <label class="booking-label"><span>Micro Renovation</span><span>Micropgmen... (Fio a
                                        Fio /
                                        Shadow)</span></label>
                                <button type="button" class="camera" onclick="carouselModal.show()"><img draggable="false" class="w-100" src="./images/camera.png" alt="Camera/png"></button>
                                <button type="button" class="calendario"><img draggable="false" class="w-100" src="./images/calendario.png" alt="Camera/png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel -->
<div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel" aria-hidden="true">
    <div class="modal-dialog pt-5 mt-5">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carouselModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-0">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/525x370" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/525x370" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/525x370" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/525x370" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://via.placeholder.com/525x370" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toogleAssistent(element) {
        var arrows = element.getElementsByTagName("i");
        if (element.classList.contains('active') == false) {
            element.classList.toggle("active");
            arrows[0].style.display = "none";
            arrows[1].style.display = "block";
            document.getElementById("mySidenav").style.width = "240px";
        } else {
            document.getElementById("mySidenav").style.width = "0px";
            element.classList.toggle("active");
            arrows[1].style.display = "none";
            arrows[0].style.display = "block";
        }
    }
    $('[data-href]').click(function() {
        var ellement = $(this).attr('data-href')
        var pai = $(ellement).parents('#v-pills-tab')

        $(pai).find('.btn-side-modal').removeClass('active').attr('aria-selected', 'fale')

        var contentTab = $(pai).next()
        $(contentTab).find('.tab-pane').removeClass('active show')

        var active = $(ellement).attr('href')
        $(ellement).addClass('active').attr('aria-selected', 'true')
        $(active).addClass('active show')

        myModal.show()
    });
    $(document).on('click', 'a[href="#"]', function(e) {
        e.preventDefault()
    });
    var myModal = new bootstrap.Modal(document.getElementById('bookModal'))
    var carouselModal = new bootstrap.Modal(document.getElementById('carouselModal'))
    AOS.init();
</script>

</body>

</html>