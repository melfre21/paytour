@extends('layouts.app')
@section('content')
<div class="container py-5">
	<div class="row text-center">
		<div class="col-md-12 mb-3">
			<h1 class="text-white">Cadastre seu curriculo</h1>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-md-7">
			<div class="card">
				<div class="card-body p-5">
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						<strong>Importante!</strong> Todos os campos são de preenchimento obrigatórios, exceto <strong>Observações</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					@if ($errors->any())
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<p><strong>Erro:</strong> Alguns campos são de preenchimento obrigatório!</p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif

					@if ($msg = Session::get('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sucesso!</strong> {{ $msg }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif

					<form class="card-body p-2 needs-validation" action="/curriculo/store" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="nome" class="mb-0">Nome</label>
								<input type="text" class="form-control {{ $errors->any() ? 'is-invalid' : '' }}" id="inputEmail4" name="nome" placeholder="Nome Completo">
								@error('nome')
								<div class="text-danger">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="email" class="mb-0">E-mail</label>
								<input type="email" class="form-control {{ $errors->any() ? 'is-invalid' : '' }}" id="inputEmail4" name="email" placeholder="E-mail">
								@error('email')
								<div class="text-danger">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="telefone" class="mb-0">Telefone</label>
								<input type="text" class="form-control {{ $errors->any() ? 'is-invalid' : '' }}" id="inputEmail4" name="telefone" placeholder="Telefone">
								@error('telefone')
								<div class="text-danger">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="nome" class="mb-0">Cargo</label>
								<input type="text" class="form-control {{ $errors->any() ? 'is-invalid' : '' }}" id="inputEmail4" name="cargo" placeholder="Cargo">
								@error('cargo')
								<div class="text-danger">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="escolaridade" class="mb-0">Escolaridade</label>
								<select id="escolaridade" class="form-control {{ $errors->any() ? 'is-invalid' : '' }}" name="escolaridade">
									<option selected>Escolaridade...</option>
									@foreach ( $escolaridades as $escolaridade )
									<option value="{{$escolaridade->id}}">{{$escolaridade->nome}}</option>
									@endforeach
								</select>
								@error('escolaridade')
								<div class="text-danger">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="arquivo" class="mb-0">Arquivo Curriculo. (.DOC, .DOCX e .PDF)</label>
								<input type="file" id="arquivo" name="arquivo" class="form-control {{ $errors->any() ? 'is-invalid' : '' }}" accept=".pdf, .doc, .docx">
								@error('arquivo')
								<div class="text-danger">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>

						<div class="form-row mb-2">
							<div class="form-group col-md-12">
								<label for="observacao" class="mb-0">Observações</label>
								<textarea name="observacao" rows="4" cols="80" class="form-control"></textarea>
							</div>
						</div>

						<button type="submit" class="btn btn-primary btn-block">Salvar dados</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection