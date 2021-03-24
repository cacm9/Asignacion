</div>
</div>
</div>
</div>
<!--            FIN DEL CONTENT-->

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../public/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../assets/images/browser/ie.png" alt="">
                    <div>IE (11 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->


<!-- Required Js -->
<script src="../public/assets/js/vendor-all.min.js"></script>
<script src="../public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../public/assets/js/pcoded.min.js"></script>

<!-- datatable Js -->
<script src="../public/assets/plugins/data-tables/js/datatables.min.js"></script>
<!--Plugin para cargar Imagenes-->
<!-- Cargar Imagenes-->
<script src="../public/assets/plugins/dropify/dist/js/dropify.min.js"></script>
<!--Plugin para validar formularios-->
<script src="../public/assets/js/validation.js"></script>
<!-- Sweet-Alert  -->
<script src="../public/assets/plugins/sweetalert/js/sweetalert.min.js"></script>
<!--<script src="../public/assets/plugins/sweetalert/js/jquery.sweet-alert.custom.js"></script>-->
<!-- bootstrap-tagsinput-latest Js -->
<!-- select2 Js -->
<script src="../public/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- multi-select Js -->
<script src="../public/assets/plugins/multi-select/js/jquery.quicksearch.js"></script>
<script src="../public/assets/plugins/multi-select/js/jquery.multi-select.js"></script>
<!--<script src="../../../../cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>-->
<script src="../public/assets/plugins/bootstrap-tagsinput-latest/js/bootstrap-tagsinput.min.js"></script>
<!-- multi-select Js -->
<script src="../public/assets/plugins/multi-select/js/jquery.quicksearch.js"></script>
<script src="../public/assets/plugins/multi-select/js/jquery.multi-select.js"></script>

<script>
    // FUNCION PARA SELECIONAR EL MENU NAV
    $(function() {
        var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
        var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.pcoded-navbar li a').each(function() { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;

            if (activePage === linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
    });

    // Funcion para la validacion de formularios
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
</script>

<!--FUNCION PARA VALIDAR INPUT-->
<script>
    $(function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    });
</script>

<!--FUNCION PARA CARGAR DROPIFY-->
<script>
    // funciones para cargar las imagenes
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify');
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        });

    });
</script>
</body>

<!-- Mirrored from html.codedthemes.com/datta-able/bootstrap/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Dec 2018 16:38:47 GMT -->

</html>