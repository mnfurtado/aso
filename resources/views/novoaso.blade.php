@extends('layout.app')

@section('body')

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Novo ASO para: {{$exams->name}} </h5>
        
        <form action="/rest/newaso" method="post">
            
          <input type="hidden" id="employee_id" name="employeeId" value="{{$exams->id}}">
          <input type="hidden" id="aso_provider_id" name="providerId" value="1">

          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Exame periódico...">
          </div>                    
          <div class="form-group">
            <label for="issuanceDate">Data do exame</label>
            <input type="text" class="form-control" id="issuanceDate" name="issuanceDate" placeholder="AAAA-MM-DD">
            <small class="form-text text-muted">Digite a data em que o exame foi realizado.</small>
          </div>
          <div class="form-group">
            <label for="dueDate">Data de validade</label>
            <input type="text" class="form-control" id="dueDate" name="dueDate" placeholder="AAAA-MM-DD">
          </div>
          <div class="form-group">
          <label for="file">URL do ASO</label>
          <input type="text" class="form-control" id="file" name="file" placeholder="http://...">
          </div>
          <button type="submit" class="btn btn-primary">Cadastar Exame</button>
        </form>        
    </div>
    
    <div class="card-footer">
            <a href="/aso/employee/2" class="btn btn-md btn-secondary">Voltar</a>
    </div>        

    
</div>

@endsection
