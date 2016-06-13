{% extends 'base.html' %}

{% block content %}

    <div class="col-lg-offset-2 text-center">
        <h2 class="section-heading">CONTATO</h2>
        <hr class="primary">
        <p>Para mais informações sobre o evento e como participar, envie-nos uma mensagem.</p>
    </div>
       
    <div class="row text-center">
		<div class="col-sm-6 col-sm-offset-3">
			<form  method="POST" id="contact-form" role="form">{% csrf_token %}
				<div class="form-group wow fadeInUp">
					<input type="text" id="nome" class="form-control" name="nome" placeholder="Nome" required>
				</div>

				<div class="form-group wow fadeInUp">
					<input type="email" id="email" class="form-control" name="email" placeholder="E-mail" required>
				</div>

				<div class="form-group wow fadeInUp" >
					<textarea class="form-control" id="mensagem" name="mensagem" rows="7" placeholder="Mensagem" required></textarea>
				</div>
				<button class="btn btn-primary" type="submit">Enviar</button>
			</form>
            <br>
			<?php
				if($_POST){
					$to = 'felipennunes@hotmail.com';
					$subject = 'CONTATO Blog do Felipe';
					$message = $_POST['mensagem'];
					$headers = 	$_POST['nome']. "\r\n" .
								$_POST['email']. "\r\n" ;
					if(mail($to, $subject, $message, $headers)){
						echo "Mensagem Enviada Com Sucesso!";
					}else{
						echo "Sua Mensagem Não Foi Enviada!";
					}
				}
			?>

		</div>
	</div>  
{% endblock %}