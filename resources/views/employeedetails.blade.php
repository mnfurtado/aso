@extends('layout.app')

@section('body')

<div class="card border">
    <div class="card-header">Controle de Atestados de Saúde Ocupacional (ASO)
    <a href="/novoaso/{{$employees->id}}" class="btn btn-sm btn-primary float-right">+ Exame</a>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$employees->name}}</h5>

        <p class="card-text">Data de contratação: {{$employees->hiring_date}}</p>
        <p class="card-text">Data de aniversário: {{$employees->birth_date}}</p>
        <p class="card-text">Próximo Vencimento do ASO: {{$employees->aso->aso_due_date}}</p>
        <p class="card-text">Dias faltantes: {{$employees->aso->aso_days_left}}</p>

@if(count($employees->exams)>0)

        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data do exame</th>
                    <th>Valido até</th>
                    <th>Visualizar</th>
                    <th>Apagar</th>
                </tr>
            </thead>
            <tbody>

@foreach($employees->exams as $exam)
                <tr>
                    <td>{{$exam->id}}</td>
                    <td>{{$exam->name}}</td>
                    <td>{{$exam->issuance_date}}</td>
                    <td>{{$exam->due_date}}</td>
                    <td><a href="{{$exam->file}}" target="_blank" class="btn btn-sm btn-info">Visualizar</a></td>
                    <td>
                        <form action="/rest/deleteaso/{{$exam->id}}" method="post">
                        <button type="submit" class="btn btn-sm btn-danger">x</button>
                        </form>

                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
@endif
    </div>
</div>

@endsection
