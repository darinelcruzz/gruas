@extends('admin')

@section('main-content')
    <div class="row">
        <div class="col-md-10 ">
            <div class="box box-solid box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Historial de entradas</h3>
                </div>

                <div class="box-body">
                    <table class="table table-striped">
        				<thead>
        					<tr>
        				       	<th>Folio</th>
        				        <th>Descripción</th>
        				        <th>Estado</th>
        				        <th>Cliente</th>
        				    </tr>
        				</thead>
        				<tbody>
        					@foreach($entries as $entry)
        				      <tr>
        				        <td>{{ $entry->folio }}</td>
        				        <td>{{ $entry->description }}</td>
        				        <td>{{ $entry->status}}</td>
        				        <td></td>
        				      </tr>
        				    @endforeach
        				</tbody>
        			</table>
                </div>
            </div>
        </div>
    </div>
@endsection
