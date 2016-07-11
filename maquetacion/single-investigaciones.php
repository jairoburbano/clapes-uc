<?php
/**
 *
 *
 * @package		clapes-uc
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'investigaciones';
$subpage = '';
$type = 'page';
$title = 'Investigacion';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap investigacion single">
    <h1 class="title"><span>Investigacion</span></h1>
    <div class="bajada">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient
        </p>
    </div>
    <div class="container--sidebar">
        <aside class="sidebar">
            <form action="">
                <div class="accordeon">
                    <div class="style-select">
                        <select>
                            <option value="default">Tipo de investigación</option>
                            <option value="one">one</option>
                            <option value="two">two</option>
                        </select>
                    </div><!--.style-select-->
                    <div class="style-select">
                        <select>
                            <option value="default">Área de investigación</option>
                            <option value="one">one</option>
                            <option value="two">two</option>
                        </select>
                    </div><!--.style-select-->
                    <div class="form">
                        <div class="input-group">
                            <input type="text" placeholder="Buscar...">
                        </div><!--.input-group-->
                        <div class="send-group">
                            <input type="submit" value="Buscar" class="btn btn--border">
                        </div><!--.send-group-->
                    </div><!-- /.form -->
                </div><!--.accordeon-->
            </form>
        </aside>
        <div class="contenido">
            <div class="listado--top">
                <span>04 enero 2016</span>
                <span>|</span>
                <a href="#" title="Titulo">Documentos de Trabajo</a>
                <span>|</span>
                <a href="#" title="Titulo">Políticas Sociales</a>
            </div><!--.listado--top-->
            <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2>
            <img src="assets/IMG_1060.jpg" alt="Titulo">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum congue. Nunc dignissim nulla odio, sed venenatis ex semper sollicitudin. Donec placerat mattis pharetra. Phasellus accumsan a est vitae eleifend. Donec in purus pharetra eros laoreet egestas. Proin id cursus augue. Suspendisse pellentesque lectus vel dapibus porta. Suspendisse laoreet hendrerit efficitur. Quisque felis leo, pulvinar eget luctus eu, maximus id dolor. Nunc efficitur nisi nec ante lacinia suscipit. Ut fringilla sapien eu placerat tincidunt. Proin porta bibendum erat et eleifend.
            </p>
            <p>
                Maecenas finibus faucibus massa interdum convallis. Suspendisse pellentesque magna at ante iaculis, sit amet mattis felis mollis. Nullam molestie laoreet nisl, in porta neque gravida vitae. Proin eget lorem scelerisque, viverra nisi id, porttitor justo. Nam eu congue ante. Fusce lacinia, dui rhoncus fringilla consequat, urna arcu blandit justo, ut commodo turpis lectus eget enim. Nulla viverra sagittis rutrum. Praesent semper enim nec neque scelerisque lacinia. Maecenas eu erat sapien. Suspendisse leo nunc, facilisis eu velit at, fermentum tristique quam. Sed porta interdum tellus, eu pretium nibh tincidunt at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris interdum nibh sed nunc mollis aliquet sed quis tellus. Donec eget lectus quis augue rutrum vestibulum ut a magna. Aenean congue diam et placerat interdum.
            </p>
            <p>
                Integer vel aliquam nisi, eu venenatis purus. Cras ipsum purus, eleifend ut sem luctus, condimentum interdum enim. Etiam facilisis vel justo eu efficitur. In quis tincidunt risus, aliquam rutrum felis. Morbi elit ex, maximus sed interdum eget, tempor a augue. Nullam sagittis nisi sed nisl fermentum euismod. Donec diam libero, imperdiet id nibh id, auctor blandit lectus. Duis pharetra orci ac mauris gravida ullamcorper. Proin tempor, turpis a accumsan porta, tellus nulla volutpat eros, semper ullamcorper orci ex sed sem. Sed aliquam diam in tempor suscipit. Nullam mauris metus, ornare ut tellus at, 
            </p>
            <ul>
                <li>asdasd</li>
                <li>wqeqeqw</li>
                <li>dfgdfgd
                    <ol>
                        <li>asdasd</li>
                        <li>wqeqeqw</li>
                        <li>dfgdfgd</li>
                        <li>ghjghjgh</li>
                        <li>xcvxvx</li>
                    </ol>
                </li>
                <li>ghjghjgh</li>
                <li>xcvxvx
                    <ul>
                        <li>asdasd</li>
                        <li>wqeqeqw</li>
                        <li>dfgdfgd</li>
                        <li>ghjghjgh</li>
                        <li>xcvxvx</li>
                    </ul>
                </li>
            </ul>
            <ol>
                <li>asdasd</li>
                <li>wqeqeqw
                    <ul>
                        <li>asdasd</li>
                        <li>wqeqeqw</li>
                        <li>dfgdfgd</li>
                        <li>ghjghjgh</li>
                        <li>xcvxvx</li>
                    </ul>
                </li>
                <li>dfgdfgd</li>
                <li>ghjghjgh</li>
                <li>xcvxvx
                    <ol>
                        <li>asdasd</li>
                        <li>wqeqeqw</li>
                        <li>dfgdfgd</li>
                        <li>ghjghjgh</li>
                        <li>xcvxvx</li>
                    </ol>
                </li>
            </ol>
            <button class="open-it btn--border">Ver Mapa</button>
            <div class="lightbox__info">
                <div class="lightbox__content">
                    <div class="info__close"><svg><use xlink:href="#shape-cerrar" /></svg></div><!-- /.info__close -->
                    <iframe width="500" height="300" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col14+from+1kFUCsOfVy7WDMU0GhKniTL63Hjvy_OkMqt517gb8&amp;viz=MAP&amp;h=false&amp;lat=16.1996614633605&amp;lng=-27.7734375&amp;t=1&amp;z=2&amp;l=col14&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>
                </div><!-- /.lightbox__content -->
            </div><!-- /.lightbox__info -->
            <img src="assets/noticia021-992x450.png" alt="Titulo">
            <div class="down--block">
                <div class="downloads">
                    <a href="#" title="descargar" download>
                        <svg><use xlink:href="#shape-icon-excel" /></svg>
                        <span>Descargar</span>
                    </a>
                    <a href="#" title="descargar" download>
                        <svg><use xlink:href="#shape-icon-reader" /></svg>
                        <span>Descargar</span>
                    </a>
                </div><!--.downloads-->
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
</div><!--.wrap.investiacion-->
<?php include 'footer.php'; ?>