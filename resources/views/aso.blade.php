@extends('layout.app')

@section('body')

<div class="card border">    
    <div class="card-body">
        <h5 class="card-title">{{$companies->name}}</h5>
        
        <p>Periodicidade padrão do ASO: <b>720</b> dias</p>
        
    </div>
</div>
<br>

<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Funcionários</h5>
        
@if(count($employees)>0)
        
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Funcionário</th>
                    <th>Data de Nascimento</th>
                    <th>Data de Admissão</th>
                    <th>Validade do ASO</th>
                    <th>Dias Restantes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
@foreach($employees as $employee)
                <tr>
                    <td>{{$employee->name}} | 
                    @if($employee->aso_days_left < 90) 
                    <span class="badge badge-danger">Vencido</span>
                    @endif
                    </td>
                    <td>{{$employee->birth_date}}</td>
                    <td>{{$employee->hiring_date}}</td>
                    <td>{{$employee->aso_due_date}}</td>
                    <td>{{$employee->aso_days_left}}</td>
                    <td><a href="aso/employee/{{$employee->id}}" class="btn btn-sm btn-primary">Detalhes</a></td>
                </tr>              
@endforeach
            </tbody>
        </table>
@endif
    </div>
</div>

@endsection