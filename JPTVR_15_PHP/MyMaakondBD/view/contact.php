<!-- Заголовок title -->
<?php $title = 'Контакт'; ?>

<?php ob_start() ?>
<h2>Контакт </h2>
<article>	
   	<h3>Ida-Virumaa Kutsehariduskeskus</h3>
	<p >
    <br>
    <b>Aadress:</b> Kutse 13, 41533 Jõhvi, Ida-Virumaa<br>
 <b>Telefon:</b> 332 0381<br>
 <b>E-post:</b> info@ivkhk.ee<br>

 	</p>
        
        <?php 
            if ( !isset($_GET['message'])) {
        ?>
<!-- Form of messages -->

<h3>Сообщение</h3>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="send_contact" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus>
					</div>
					<div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
                                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7" name="message"></textarea>                   
                    </div>
            
                    <button type="button" id="submit" name="send" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div>

<?php
    }
    elseif (isset($_GET['message']) && $_GET['message'] == 'send') {
        echo "<h3>Отправка сообщения</h3>";
        echo "<p>Сообщение отправлено</p>";
        echo "<hr><p><a href=\"contact\">Написать сообщение</a></p>";
    } elseif (isset($_GET['message']) && $_GET['message'] == 'error') {
        echo "<h3>Ошибка отправка сообщения</h3>";
        echo "<p>Заполните корректно форму</p>";
        echo "<hr><p><a href=\"contact\">Написать сообщение</a></p>";
    } else {
        echo "<h3>Отправка сообщения</h3>";
        echo "<p>Заполните корректно форму</p>";
        echo "<hr><p><a href=\"contact\">Написать сообщение</a></p>";
    }
?>
</article>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";