<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<hr>                    
        <h3>Create a Customer</h3>
          
		<form class="form-horizontal" action="cadastrar_produto.php" method="post"> 
  			<div class="form-group <?php echo !empty($nameError)?'error':'';?>">
    			<label class="control-label col-sm-3" for="descricao">Descrição</label>
    			<div class="col-sm-9">
      				<input type="text" class="form-control" id="descricao" placeholder="Informe o nome do Produto">
    			</div>
  			</div>
			<div class="form-group">
		    	<label class="control-label col-sm-3" for="quantidade">Quantidade:</label>
		    	<div class="col-sm-9"> 
		      	<input type="text" class="form-control" id="quantidade" placeholder="Entre com a quantidade total de produtos">
		    	</div>
		  	</div>
		  	<div class="form-group">
		  		<label class="control-label col-sm-3" for="preco_unit">Preço Unitário:
		  		</label>
		  		<div class="col-sm-9">
		  			<input type="text" class="form-control" id="preco_unit"name="">
		  		</div>
		  	</div>
		  	<!--div class="form-group"> 
		    	<div class="col-sm-offset-2 col-sm-10">
		      	<div class="checkbox">
		        	<label><input type="checkbox"> Remember me</label>
		      	</div>
		    	</div>
		  	</div-->
		  	<div class="form-action"> 
		    	<div class="col-sm-offset-3 col-sm-10">
		      		<button type="submit" class="btn btn-default">Submit</button>
		      		<a class="btn" href="index.php">Back</a>
		    	</div>
		  	</div>
		</form>
	</div><!--fim do container-->

</body>
</html>