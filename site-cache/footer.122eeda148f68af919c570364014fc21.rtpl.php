<?php if(!class_exists('Rain\Tpl')){exit;}?>    </div><!-- Ending Container -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 All Rights Reserved
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <script src="/dist/main.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        //<![CDATA[
        $(window).on('load', function () {
            $('#preloader .inner').fadeOut();
            $('#preloader').delay(350).fadeOut('slow'); 
            $('body').delay(350).css({'overflow': 'visible'});
        })
        //]]>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.parallax');
            var instances = M.Parallax.init(elems, {
                responsiveThreshold: 0
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('.fixed-action-btn');
            let instances = M.FloatingActionButton.init(elems, {
                direction: 'top'
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('.sidenav');
            let instances = M.Sidenav.init(elems, {
                dragable: true
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('.carousel');
            let instance = M.Carousel.init(elems, {
                shift: 20
            });
        });
        M.AutoInit();

    </script>
    </body>
</html>
