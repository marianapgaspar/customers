@extends('layout.site')
@section('content')
<div class="container mt-5 px-5">
	<p class="fs-3">Análises de crédito</p>
	<hr class="boder-5 pb-2"> 
	
	<div class="card table-responsive">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-9">
					<a class="btn btn-success" role="button" href="{{route('create')}}">Importar</a>
					<a class="btn btn-success" role="button" href="{{route('integrate')}}">Integrar</a>
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
					<td>{{$model->city}}</td>
					<td>{{$model->company}}</td>
					<td>{{$model->city}}</td>
					<td>{{$model->title}}</td>
					<td>{{$model->website}}</td>
				</tr>
			@endforeach
		  </tbody>
		</table>		
	</div>
	<div class="card table-responsive">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-9">
					Informações gerais
				</div>		
			</div>	
		</div>
		<table class="table table-striped table-hover table-bordered">
		  <thead>
		    <tr class="table-secondary">		
		      <th width="5%" class="text-center"  scope="col">#</th>
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
</div>
<script>
	function find(){
		window.location.href = '{{url("/")}}'+"?search="+$("#search").val();
	}
</script>
@endsection