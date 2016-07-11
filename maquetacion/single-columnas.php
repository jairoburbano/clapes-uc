<?php
/**
 *
 *
 * @package		clapes-uc
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'columnas';
$subpage = '';
$type = 'page';
$title = 'Columnas';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap investigacion single">
    <h1 class="title"><span>Columnas</span></h1>
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
                            <option value="default">Autor</option>
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
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt fermentum congue. Nunc dignissim nulla odio, sed venenatis ex semper sollicitudin. Donec placerat mattis pharetra. Phasellus accumsan a est vitae eleifend. Donec in purus pharetra eros laoreet egestas. Proin id cursus augue. Suspendisse pellentesque lectus vel dapibus porta. Suspendisse laoreet hendrerit efficitur. Quisque felis leo, pulvinar eget luctus eu, maximus id dolor. Nunc efficitur nisi nec ante lacinia suscipit. Ut fringilla sapien eu placerat tincidunt. Proin porta bibendum erat et eleifend.
            </p>
            <p>
                Maecenas finibus faucibus massa interdum convallis. Suspendisse pellentesque magna at ante iaculis, sit amet mattis felis mollis. Nullam molestie laoreet nisl, in porta neque gravida vitae. Proin eget lorem scelerisque, viverra nisi id, porttitor justo. Nam eu congue ante. Fusce lacinia, dui rhoncus fringilla consequat, urna arcu blandit justo, ut commodo turpis lectus eget enim. Nulla viverra sagittis rutrum. Praesent semper enim nec neque scelerisque lacinia. Maecenas eu erat sapien. Suspendisse leo nunc, facilisis eu velit at, fermentum tristique quam. Sed porta interdum tellus, eu pretium nibh tincidunt at. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris interdum nibh sed nunc mollis aliquet sed quis tellus. Donec eget lectus quis augue rutrum vestibulum ut a magna. Aenean congue diam et placerat interdum.
            </p>
            <p>
                Integer vel aliquam nisi, eu venenatis purus. Cras ipsum purus, eleifend ut sem luctus, condimentum interdum enim. Etiam facilisis vel justo eu efficitur. In quis tincidunt risus, aliquam rutrum felis. Morbi elit ex, maximus sed interdum eget, tempor a augue. Nullam sagittis nisi sed nisl fermentum euismod. Donec diam libero, imperdiet id nibh id, auctor blandit lectus. Duis pharetra orci ac mauris gravida ullamcorper. Proin tempor, turpis a accumsan porta, tellus nulla volutpat eros, semper ullamcorper orci ex sed sem. Sed aliquam diam in tempor suscipit. Nullam mauris metus, ornare ut tellus at, 
            </p>
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
            <div class="team__related">
                <div class="team__media">
                    <img src="assets/Salvador-Valdes-320x320.jpg" alt="Titulo">
                </div><!--.team__media-->
                <div class="team__content">
                    <div class="column">
                        <a href="#" title="titulo" class="team__link">@JoseValente</a>
                        <h2 class="sub-title">José Tomás Valente</h2>
                    </div><!--.column-->
                    <a href="#" title="Titulo" class="btn btn--border">Ver otras columnas del autor</a>
                </div><!--.team__content-->
            </div><!--.team__related-->
        </div><!--.contenido-->
    </div><!--.container--sidebar-->
</div><!--.wrap.investiacion-->
<?php include 'footer.php'; ?>