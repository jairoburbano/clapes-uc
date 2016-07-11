<?php
/**
 *
 *
 * @package		clapes-uc
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap contacto">
    <h1 class="title"><span>Contacto</span></h1>
    <div class="bajada">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient
        </p>
    </div><!--.bajada-->
    <div class="contact">
        <form action="" class="formulario contact__form">
            <div class="block--flex">
                <div class="block--half">
                    <div class="input-group">
                        <label for="name">*Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingresa tu nombre...">
                    </div><!-- /.input-group -->
                    <div class="input-group">
                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" id="phone" placeholder="Ingresa un teléfono...">
                    </div><!-- /.input-group -->
                    <div class="input-group">
                        <label for="mail">*Mail</label>
                        <input type="email" name="mail" id="mail" placeholder="Ingresa un correo válido...">
                    </div><!-- /.input-group -->
                </div><!-- /.block--half -->
                <div class="block--half">
                    <div class="input-group">
                        <label for="institucion">*Institución</label>
                        <input type="text" name="institucion" id="institucion" placeholder="Ingresa tu institución...">
                    </div><!-- /.input-group -->
                    <div class="input-group">
                        <label for="mensaje">*Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Ingresa un mensaje de al menos 8 caracteres..."></textarea>
                    </div><!-- /.input-group -->
                    <div class="send-group">
                        <input type="submit" value="Enviar" class="btn btn--border">
                    </div><!-- /.send-group -->
                </div><!-- /.block--half -->
            </div><!-- /.block--flex -->
        </form><!-- /.formulario contact__form -->
    </div><!-- /.contacto-form -->
</div><!--.wrap.contacto-->
<?php include 'footer.php'; ?>