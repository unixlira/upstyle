@extends('site.template')

@section('content')
<div class="container">
	<div class="check-out">
		<h1>Confirmação</h1>
    	    <table >
		  <tr>
			<th>Item</th>
			<th>Qtd</th>		
			<th>Preço</th>
			<th>Detalhes de entrega</th>
			<th>Subtotal</th>
		  </tr>
		  <tr>
			<td class="ring-in"><a href="single.php" class="at-in"><img src="images/ce.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium) </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$100.00</td>
			<td>FREE SHIPPING</td>
			<td>$100.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.php" class="at-in"><img src="images/ce1.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ) </p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$200.00</td>
			<td>FREE SHIPPING</td>
			<td>$200.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.php" class="at-in"><img src="images/ce2.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium) </p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$150.00</td>
			<td>FREE SHIPPING</td>
			<td>$150.00</td>
		  </tr>
	</table>
	<a href="#" class=" to-buy">COMPRAR</a>
	<div class="clearfix"> </div>
    </div>
</div>

@endsection