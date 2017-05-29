@extends('admin')

@section('main-content')

    <div class="row">
		<div class="col-md-8">
			<div class="box box-danger box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Nueva entrada</h3>
				</div>

				<!-- form start -->
				{!! Form::open(['method' => 'POST', 'route' => 'entries.store']) !!}
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
                                {!! Field::select('service', ['1' => 'Vialidad', '2' => 'Tránsito del estado', '3' => 'Aseguradoras'], null,
								['tpl' => 'templates/withicon', 'empty' => 'Servicio'],
								['icon' => 'bullhorn']) !!}
							</div>
							<div class="col-md-6">
								{!! Field::number('id', ['tpl' => 'templates/withicon'],
								['icon' => 'hashtag']) !!}
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
                                {!! Field::select('description', ['1' => 'Arrastre', '2' => 'Colisión'], null,
								['tpl' => 'templates/withicon', 'empty' => 'Tipo de servicio'],
								['icon' => 'car']) !!}
							</div>
						</div>

                        <div class="row">
							<div class="col-md-12">
								{!! Field::textarea('vehicule', ['rows' => 2]) !!}
							</div>
						</div>

                        <div class="row">
							<div class="col-md-6">
								{!! Field::number('cost',
								['tpl' => 'templates/withicon'],
								['icon' => 'dollar']) !!}
							</div>

                            <div class="col-md-6">
                                {!! Field::select('pay-method', ['1' => 'Efectivo', '2' => 'Crédito'], null,
								['tpl' => 'templates/withicon', 'empty' => 'Método de pago'],
								['icon' => 'cc-visa']) !!}
							</div>
						</div>

                        <div class="row">
							<div class="col-md-6">
                                {!! Field::select('status', ['1' => 'Pagado', '2' => 'Pendiente', '3' => 'Crédito', '4' => 'Débito', '5' => 'Facturado'], null,
								['tpl' => 'templates/withicon', 'empty' => 'Estado'],
								['icon' => 'spinner']) !!}
							</div>

                            <div class="col-md-6">
                                {!! Field::select('client-type', ['1' => 'Tipo 1', '2' => 'Tipo 2'], null,
								['tpl' => 'templates/withicon', 'empty' => 'Elegir tipo de cliente'],
								['icon' => 'diamond']) !!}
							</div>
						</div>

                        <div class="row">
                            <div class="col-md-6">
								{!! Field::number('inventory-number',
								['tpl' => 'templates/withicon'],
								['icon' => 'angle-double-up']) !!}
							</div>

                            <div class="col-md-6">
								{!! Field::number('folio',
								['tpl' => 'templates/withicon'],
								['icon' => 'pencil']) !!}
							</div>
						</div>

                        <div class="row">
							<div class="col-md-6">
								{!! Field::tel('telephone',
								['tpl' => 'templates/withicon'],
								['icon' => 'phone']) !!}
							</div>

                            <div class="col-md-6">
                                {!! Field::text('contact',
								['tpl' => 'templates/withicon'],
								['icon' => 'user']) !!}
							</div>
						</div>

                        <div class="row">
							<div class="col-md-4">
								{!! Field::time('start-time',
								['tpl' => 'templates/withicon'],
								['icon' => 'hourglass-start']) !!}
							</div>

                            <div class="col-md-4">
                                {!! Field::time('end-time',
								['tpl' => 'templates/withicon'],
								['icon' => 'hourglass-end']) !!}
							</div>

                            <div class="col-md-4">
                                {!! Field::select('driver', ['1' => 'Juan', '2' => 'Pedro'], null,
								['tpl' => 'templates/withicon', 'empty' => 'Elegir conductor'],
								['icon' => 'male']) !!}
                            </div>
						</div>

					</div>

					<div class="box-footer">
						{!! Form::submit('Agregar', ['class' => 'btn btn-danger btn-block']) !!}
					</div>
					<!-- /.box-footer -->

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection
