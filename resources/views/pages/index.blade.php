@extends('layout.site')
@section('content')
<div class="container mt-5 px-5">
	<p class="fs-3">Clientes</p>
	<hr class="boder-5 pb-2"> 
	
	<div class="card table-responsive">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-9">
					<a class="btn btn-success" role="button" onclick="showInsert()">Importar</a>
				</div>
			</div>	
		</div>
		<table class="table table-striped table-hover table-bordered">
		  <thead>
		    <tr class="table-secondary">		
		      <th scope="col">Quantidade de nomes sem sobrenome</th>
		      <th scope="col">Quantidade de nomes com sobrenome</th>
		      <th scope="col">Quantidade de e-mails válidos</th>
		      <th scope="col">Quantidade de e-mails inválidos</th>
		      <th scope="col">Quantidade de clientes com gênero</th>
		      <th scope="col">Quantidade de clientes sem gênero</th>
		    </tr>
		  </thead>
		  <tbody id="data-site">
				<tr>
					<td>{{$without_last_name}}</td>
					<td>{{$with_last_name}}</td>
					<td>{{$valid_email}}</td>
					<td>{{$invalid_email}}</td>
					<td>{{$with_gender}}</td>
					<td>{{$without_gender}}</td>
				</tr>
		  </tbody>
		</table>		
	</div>
	<hr>
	<div class="card table-responsive">
		
		<div class="card-header">
			<div class="row">
				<div class="col-sm-9">
					Tabela de clientes
				</div>		
			</div>	
		</div>
		<table class="table table-striped table-hover table-bordered">
		  <thead>
		    <tr class="table-secondary">		
		      <th scope="col">Id</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Sobrenome</th>
		      <th scope="col">Email</th>
		      <th scope="col">Gênero</th>
		      <th scope="col">Endereço de IP</th>
		      <th scope="col">Empresa</th>
		      <th scope="col">Cidade</th>
		      <th scope="col">Título</th>
		      <th scope="col">Site</th>
		    </tr>
		  </thead>
		  <tbody id="data-site">
		   	@foreach($models as $model)
				<tr>
					<td>{{$model->id}}</td>
					<td>{{$model->first_name}}</td>
					<td>{{$model->last_name}}</td>
					<td>{{$model->email}}</td>
					<td>{{$model->gender}}</td>
					<td>{{$model->ip_address}}</td>
					<td>{{$model->company}}</td>
					<td>{{$model->city}}</td>
					<td>{{$model->title}}</td>
					<td>{{$model->website}}</td>
				</tr>
			@endforeach
		  </tbody>
		</table>	
		{{$models->links('layout.pagination')}}
	</div>
	
</div>
<div class="modal fade show" id="insert-file" tabindex="-1" aria-labelledby="alert-label" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="alert-label">
				Inserir arquivo
			</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeInsert()"></button>
		</div>
		<div class="modal-body" id="modal-body">
			<form class="row needs-validation" action="{{route('create')}}" method="post" enctype="multipart/form-data">		
				@csrf  			  
				<div class="col-4 mb-3">
					<label for="file">Arquivo</label>
                    <input id="file" name="file" type="file" >
			  	</div>
				<div class="col-12 mb-3">
					<button type="submit" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<a  class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeInsert()">Fechar</a>
		</div>
		</div>
	</div>
</div>
<script>
	function find(){
		window.location.href = '{{url("/")}}'+"?search="+$("#search").val();
	}
	function showInsert(){
		$("#insert-file").show()
	}
	function closeInsert(){
		$("#insert-file").hide();
	}
</script>
@endsection