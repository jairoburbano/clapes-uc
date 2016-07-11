<?php
/**
 *
 *
 * @package		clapes-uc
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'agenda';
$subpage = '';
$type = 'page';
$title = 'Agenda';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap noticias single">
    <h1 class="title"><span>Agenda próximos eventos</span></h1>
    <div class="container--sidebar container--center">
        <div class="contenido">
            <div class="listado--top">
                <span>04 enero 2016</span>
                <span>|</span>
                <a href="#" title="Titulo">Sergio Urzúa</a>
            </div><!--.listado--top-->
            <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum congue. Nunc dignissim nulla odio, sed venenatis ex semper sollicitudin. Donec placerat mattis pharetra. Phasellus accumsan a est vitae eleifend. Donec in purus pharetra eros laoreet egestas. Proin id cursus augue. Suspendisse pellentesque lectus vel dapibus porta. Suspendisse laoreet hendrerit efficitur. Quisque felis leo, pulvinar eget luctus eu, maximus id dolor. Nunc efficitur nisi nec ante lacinia suscipit. Ut fringilla sapien eu placerat tincidunt. Proin porta bibendum erat et eleifend.
            </p>
            <p>
                Maecenas finibus faucibus massa interdum convallis. Suspendisse pellentesque magna at ante iaculis, sit amet mattis felis mollis. Nullam molestie laoreet nisl, in porta neque gravida vitae. Proin eget lorem scelerisque, viverra nisi id, porttitor justo. Nam eu congue ante. Fusce lacinia, dui rhoncus fringilla consequat, urna arcu blandit justo, ut commodo turpis lectus eget enim. Nulla viverra sagittis rutrum. Praesent semper enim nec neque scelerisque lacinia. Maecenas eu erat sapien. Suspendisse leo nunc, facilisis eu velit at, fermentum tristique quam. Sed porta interdum tellus, eu pretium nibh tincidunt at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris interdum nibh sed nunc mollis aliquet sed quis tellus. Donec eget lectus quis augue rutrum vestibulum ut a magna. Aenean congue diam et placerat interdum.
            </p>
            <p>
                Integer vel aliquam nisi, eu venenatis purus. Cras ipsum purus, eleifend ut sem luctus, condimentum interdum enim. Etiam facilisis vel justo eu efficitur. In quis tincidunt risus, aliquam rutrum felis. Morbi elit ex, maximus sed interdum eget, tempor a augue. Nullam sagittis nisi sed nisl fermentum euismod. Donec diam libero, imperdiet id nibh id, auctor blandit lectus. Duis pharetra orci ac mauris gravida ullamcorper. Proin tempor, turpis a accumsan porta, tellus nulla volutpat eros, semper ullamcorper orci ex sed sem. Sed aliquam diam in tempor suscipit. Nullam mauris metus, ornare ut tellus at, 
            </p>
            <div class="gallery">
                <div class="slider__gallery js-slider__gallery">
                    <ul class="slides">
                        <li>
                            <img src="assets/noticia021-992x450.png" alt="Lorem ipsum dolor.">
                        </li>
                        <li>
                            <img src="assets/photo-1449157291145-7efd050a4d0e.jpg" alt="Lorem ipsum dolor sit amet.">
                        </li>
                        <li>
                            <img src="assets/photo-1447678523326-1360892abab8-558x320.jpg" alt="Lorem.">
                        </li>
                    </ul><!--.slides-->
                </div><!--.js-slider-->
                <div class="gallery__content">
                    <div class="gallery__controls clearfix">
                        <div class="gallery__controls__content">
                            <div class="gallery__number">
                                <span class="current-slide"></span>/
                                <span class="total-slides"></span>
                            </div>
                            <div class="gallery__fullscreen js-fullscreen">
                                <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-fullscreen"></use></svg>
                            </div>

                            <div class="custom-controls-container"></div>
                        </div><!--.gallery__controls__content-->
                    </div><!--.gallery__controls-->
                    <div class="gallery__desc clearfix">
                        <div class="gallery__text">
                            <p></p>
                        </div><!--.galllery__text-->
                    </div><!--.galley__desc-->
                </div>
            </div>
            <div class="down--block down--columnas">
                <div class="share">
                    <p>Compartir</p>
                    <div class="share-group">
                        <a href="http://www.facebook.com" title="titulo" class="popup" target="_blank">
                            <svg><use xlink:href="#shape-icon-facebook" /></svg>
                        </a>
                        <a href="http://www.twitter.com" title="titulo" class="popup" target="_blank">
                            <svg><use xlink:href="#shape-icon-twitter" /></svg>
                        </a>
                        <a href="http://www.linkedin.com" title="titulo" class="popup" target="_blank">
                            <svg><use xlink:href="#shape-icon-linkedin" /></svg>
                        </a>
                        <a href="httl://www.gmail.com" title="titulo" class="popup" target="_blank">
                            <svg><use xlink:href="#shape-icon-mail" /></svg>
                        </a>
                    </div><!--.share-group-->
                </div><!--.share-->
            </div><!--.down--block-->
        </div><!--.contenido-->
    </div><!--.container--sidebar-->
    <div class="agenda__anteriores">
        <a href="page-anteriores.php" title="Revisar enventos" class="btn btn--border">Volver</a>
    </div><!-- /.agenda__anteriores -->
</div><!--.wrap.investiacion-->
<?php include 'footer.php'; ?>