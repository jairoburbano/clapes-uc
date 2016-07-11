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
<div class="wrap agenda">
    <h1 class="title"><span>Agenda próximos eventos</span></h1>
    <div class="bajada">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient
        </p>
    </div>
    <div class="agenda__container">
        <div class="agenda__year">
            2016
            <span class="none">No hay eventos disponibles</span>
        </div><!-- /.agenda__year -->
        <div class="agenda__mes">
            <h2 class="agenda__mes__text"><span>Febrero</span></h2><!-- /.agenda__mes__text -->
            <div class="agenda__group contenedor_par">
                <div class="agenda__item agenda--none">
                    <div class="agenda__text">
                        <p>
                            Pronto publicaremos un nuevo evento. <br>
                            Para recibir mayor información puedes escribir a <a href="mailto:clapesuc@uc.cl" title="contactanos">clapesuc@uc.cl</a>
                        </p>
                    </div><!-- /.agenda__text -->
                </div><!-- /.agenda__item -->
                <div class="agenda__item">
                    <div class="agenda__date">
                        08
                        <span>Ene</span>
                        <span>2016</span>
                    </div><!-- /.agenda__date -->
                    <div class="agenda__text">
                        <strong>Área Lorem</strong>
                        <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2><!-- /.sub-title -->
                        <a href="single-agenda.php" title="Seguir leyendo »" class="btn btn--border">Seguir leyendo »</a>
                    </div><!-- /.agenda__text -->
                </div><!-- /.agenda__item -->
                <div class="agenda__item">
                    <div class="agenda__date">
                        08
                        <span>Ene</span>
                        <span>2016</span>
                    </div><!-- /.agenda__date -->
                    <div class="agenda__text">
                        <strong>Área Lorem</strong>
                        <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2><!-- /.sub-title -->
                        <a href="single-agenda.php" title="Seguir leyendo »" class="btn btn--border">Seguir leyendo »</a>
                    </div><!-- /.agenda__text -->
                </div><!-- /.agenda__item -->
                <div class="agenda__item">
                    <div class="agenda__date">
                        08
                        <span>Ene</span>
                        <span>2016</span>
                    </div><!-- /.agenda__date -->
                    <div class="agenda__text">
                        <strong>Área Lorem</strong>
                        <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2><!-- /.sub-title -->
                        <a href="single-agenda.php" title="Seguir leyendo »" class="btn btn--border">Seguir leyendo »</a>
                    </div><!-- /.agenda__text -->
                </div><!-- /.agenda__item -->
            </div><!-- /.agenda__group -->
        </div><!-- /.agenda__mes -->
        <div class="agenda__mes contenedor_impar">
            <h2 class="agenda__mes__text"><span>Febrero</span></h2><!-- /.agenda__mes__text -->
            <div class="agenda__group">
                <div class="agenda__item">
                    <div class="agenda__date">
                        08
                        <span>Ene</span>
                        <span>2016</span>
                    </div><!-- /.agenda__date -->
                    <div class="agenda__text">
                        <strong>Área Lorem</strong>
                        <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2><!-- /.sub-title -->
                        <a href="single-agenda.php" title="Seguir leyendo »" class="btn btn--border">Seguir leyendo »</a>
                    </div><!-- /.agenda__text -->
                </div><!-- /.agenda__item -->
            </div><!-- /.agenda__group -->
        </div><!-- /.agenda__mes -->
        <div class="agenda__mes contenedor_par">
            <h2 class="agenda__mes__text"><span>Febrero</span></h2><!-- /.agenda__mes__text -->
            <div class="agenda__group">
                <div class="agenda__item">
                    <div class="agenda__date">
                        08
                        <span>Ene</span>
                        <span>2016</span>
                    </div><!-- /.agenda__date -->
                    <div class="agenda__text">
                        <strong>Área Lorem</strong>
                        <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</h2><!-- /.sub-title -->
                        <a href="single-agenda.php" title="Seguir leyendo »" class="btn btn--border">Seguir leyendo »</a>
                    </div><!-- /.agenda__text -->
                </div><!-- /.agenda__item -->
            </div><!-- /.agenda__group -->
        </div><!-- /.agenda__mes -->
    </div><!-- /.agenda__container -->
    <div class="agenda__anteriores">
        <a href="page-anteriores.php" title="Revisar enventos pasados" class="btn btn--border">Revisar enventos pasados</a>
    </div><!-- /.agenda__anteriores -->
</div><!--.wrap.investiacion-->
<?php include 'footer.php'; ?>