@extends('site.template')

@section('content')
<div class="contact">
			<div class="container">
				<h1>Contato</h1>				
				<div class="contact-grids">
					<div class="contact-form">
							<form action="POST">
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span>Nome</span>
										<input type="text" >
										</div>
									<div class="col-md-4 in-contact">
										<span>Email</span>
										<input type="text" >
									</div>
									<div class="col-md-4 in-contact">
										<span>Telefone</span>
										<input type="text">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<div class="contact-bottom-top">
									<span>Mensagem</span>
									<textarea > </textarea>								
									</div>
								<input type="submit" value="Enviar">
							</form>
						</div>
				<div class="address">
					<div class=" address-more">
						<h2>Endereço</h2>
						<div class="col-md-4 address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<p>Av. Álvaro Ramos</p>
								
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<p>11-98977-9694</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
								<p><a href="uspstylefashion@google.com"> @upstyle.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection