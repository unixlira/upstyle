@extends('site.template')

@section('content')
<div class="container">
	<div class="register">
		<h1>Criar Conta</h1>
		  	  <form method="POST" action="cadastro.php"> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation log">
						
						<span>Login</span>
						<input type="text"  id="login" name="login"> 

						<span>Senha</span>
						<input type="password" id="senha" name="senha" >
					
						<span>Nome</span>
						<input type="text"  id="nome" name="nome"> 

					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#ao inscrever você concorda com os termos e regras da loja etc...">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Inscrever</label>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
							
						<span>Sobrenome</span>
						<input type="text" name="sobrenome" id="sobrenome">
					 
						 <span>Email</span>
						 <input type="text" name="email" id="email"> 
						 
						 <span>Cpf</span>
						 <input type="text" name="cpf" id="cpf">
							</div>
					 </div>
					 <div class="clearfix"> 
					 	
					 </div>
				</form>
				
				<div class="form">
				   <form method="POST" action="cadastro.php">
					   <input type="submit" value="CADASTRAR" name="cadastrar" id="cadastrar">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
</div>
@endsection