<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		clapes-uc
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body class="<?php if($page === 'page-explica') { echo(' page-explica'); }?>">
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header">
                <div class="menu--site">
                    <div class="wrap">
                        <ul id="super" class="top-header__list clearfix">
                            <li class="menu-item">
                                <a href="#">Inicio</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">La Universidad</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a target="_blank" href="http://www.uc.cl/es/la-universidad/historia">Historia</a></li>
                                    <li class="menu-item">
                                        <a href="http://rectoria.uc.cl/" target="_blank">Rectoría</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/es/la-universidad/autoridades">Autoridades</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://secretariageneral.uc.cl">Secretaría General</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://pastoral.uc.cl">Pastoral UC</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://observatorionuevaevangelizacion.uc.cl/">Nueva Evangelización</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/es/la-universidad/organizacion">Organización</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/webpuc/site/launiversidad/autoridades/secretariageneral/pdf/reglamentos/declaraciondeprincipios.pdf">Principios UC</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/images/pdf/estatutos_generales.pdf">Estatutos UC</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/es/la-universidad/campus">Hechos y cifras</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/es/la-universidad/premios-nacionales">Premios Nacionales</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://mecesup.uc.cl/">Mecesup</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/index.php?option=com_content&amp;view=category&amp;id=1&amp;Itemid=147&amp;lang=es">Noticias UC</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www7.uc.cl/english/prospectus/">Prospectus</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Facultades</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a target="_blank" href="http://agronomia.uc.cl">Agronomía e Ingeniería Forestal</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="http://fadeu.uc.cl/" class="sf-with-ul">Arquitectura, Diseño y Estudios Urbanos</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://arquitectura.uc.cl/">Escuela de Arquitectura</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://diseno.uc.cl/">Escuela de Diseño</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.estudiosurbanos.uc.cl/">Instituto de Estudios Urbanos</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="http://artes.uc.cl/">Artes</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://escuelaarte.uc.cl/">Escuela de Arte</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://teatro.uc.cl/">Escuela de Teatro</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://musica.uc.cl/">Instituto de Música</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.bio.puc.cl/">Ciencias Biológicas</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="http://economiayadministracion.uc.cl/" class="sf-with-ul">Ciencias Económicas y Administrativas</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item current-menu-item">
                                                <a target="_blank" href="http://escueladeadministracion.uc.cl/">Escuela de Administración</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.economia.puc.cl/">Instituto de Economía</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="#">Ciencias Sociales</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://psicologia.uc.cl/">Escuela de Psicología</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www6.uc.cl/trabajosocial/site/edic/base/port/inicio.php">Escuela de Trabajo Social</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www7.uc.cl/sociologia/">Instituto de Sociología</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://comunicaciones.uc.cl">Comunicaciones</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/derecho/">Derecho</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/educacion/">Educación</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="#" class="sf-with-ul">Filosofía</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://estetica.uc.cl/">Instituto de Estética</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://filosofia.uc.cl/">Instituto de Filosofía</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="http://fisica.uc.cl/" class="sf-with-ul">Física</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.astro.puc.cl:8080/astropuc">Instituto de Astrofisica</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www2.fis.puc.cl/">Instituto de Fisica</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="http://www.uc.cl/historiageografiaycienciapolitica/" class="sf-with-ul">Historia, Geografía y Ciencia Política</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://historia.uc.cl/">Instituto de Historia</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://geografia.uc.cl/">Instituto de Geografía</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.cienciapolitica.uc.cl/">Instituto de Ciencia Política</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Ingeniería</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.uc.cl/construc_civil/site/edic/base/port/inicio.html">Escuela de Construcción Civil</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.ing.puc.cl/">Escuela de Ingeniería</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.uc.cl/letras/">Letras</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.mat.puc.cl/">Matemáticas</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a target="_blank" href="http://facultadmedicina.uc.cl/" class="sf-with-ul">Medicina</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a target="_blank" href="http://www.uc.cl/enfermeria/">Escuela de Enfermería</a>
                                            </li>
                                            <li class="menu-item">
                                                <a target="_blank" href="http://medicina.uc.cl/">Escuela de Medicina</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://www.quimica.uc.cl/">Química</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://teologia.uc.cl">Facultad de Teología</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://college.uc.cl/">College</a>
                                    </li>
                                    <li class="menu-item">
                                        <a target="_blank" href="http://villarrica.uc.cl/">Campus Villarrica</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="#">Organización vinculadas</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Bibliotecas</a>
                            </li>
                        </ul>
                    </div><!--.wrap-->
                </div><!--menu--sites-->
                <div class="menu--top wrap">
                    <a class="menu__logo" href="index.php" title="Centro latinoameticano de politicas economicas y sociales">
                        <img src="img/logo.svg" alt="Logo CLapes UC">
                    </a><!--.menu__logo-->
                    <div class="menu__icon js-menu">
                        <svg><use xlink:href="#shape-icon-menu" /></svg>
                    </div><!--.menu__icon-->
                </div><!--.menu--top-->
                <div class="menu--bottom">
                    <div class="menu__search">
                        <form action="page-result.php" class="search-form">
                            <div class="input-group">
                                <input type="text" placeholder="Buscar en el sitio" name="search">
                            </div><!--.input-group-->
                            <div class="search-group">
                                <input type="submit" value=" ">
                                <svg><use xlink:href="#shape-icon-lupa" /></svg>
                            </div><!--.search-group-->
                        </form><!--.search-form-->
                        <p class="menu__newsletter">
                            <svg><use xlink:href="#shape-icon-mail" /></svg>
                            <span>Newsletter</span>
                        </p><!--.menu__newsletter-->
                        <img src="img/logo-uc.svg" alt="Logo universidad catolica" class="logo-uc">
                    </div><!--.menu__search-->
                    <ul class="menu__nav">
                        <li class="menu__nav__item">
                            <a href="page-somos.php" title="Quiénes Somos" class="<?php if ( $page == 'quienes-somos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Quiénes Somos
                            </a>
                        </li><!--.menu__nav__item-->
                        <li class="menu__nav__item">
                            <a href="page-investigacion.php" title="Investigación" class="<?php if ( $page == 'investigaciones' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Investigación
                            </a>
                        </li><!--.menu__nav__item-->
                        <li class="menu__nav__item">
                            <a href="page-columnas.php" title="Columnas" class="<?php if ( $page == 'columnas' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Columnas
                            </a>
                        </li><!--.menu__nav__item-->
                        <li class="menu__nav__item">
                            <a href="page-noticias.php" title="Noticias" class="<?php if ( $page == 'noticias' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Noticias
                            </a>
                        </li><!--.menu__nav__item-->
                        <li class="menu__nav__item">
                            <a href="page-videos.php" title="Videos" class="<?php if ( $page == 'videos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Videos
                            </a>
                        </li><!--.menu__nav__item-->
                        <li class="menu__nav__item">
                            <a href="page-agenda.php" title="Agenda" class="<?php if ( $page == 'agenda' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Agenda
                            </a>
                        </li><!--.menu__nav__item-->
                        <li class="menu__nav__item">
                            <a href="page-contacto.php" title="Contacto" class="<?php if ( $page == 'contacto' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                Contacto
                            </a>
                        </li><!--.menu__nav__item-->
                    </ul><!--.menu__nav-->
                </div><!--.menu--bottom-->
            </header><!--.header-->