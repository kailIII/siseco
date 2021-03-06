<h2>Editar Factura</h2>

{{ Form::model($factura, array('url'=> array('facturas/editar', $factura->id),'method'=>'POST')) }}
<input type="hidden" id="idestimacion" name="idestimacion" value="{{ $factura->idestimacion }}"><div class="row">
	<div class="form-group col-xs-12 col-sm-2">
		{{ Form::label('folio','Folio') }}
		<div class="controls">
			{{ Form::text('folio',null,array('class'=>'form-control','required')) }}
		</div>
	</div>

	<div class="form-group col-xs-12 col-sm-2">
		{{ Form::label('fechaexp','Fecha') }}
		<div class="controls">
			{{ Form::text('fechaexp',null,array('class'=>'form-control fecha','required')) }}
		</div>
	</div>

	<div class="row col-sm-6 col-sm-offset-3">
		<div class="form-group col-xs-12 col-sm-6 col-sm-offset-3">
			{{ Form::label('subtotal','Subtotal') }}
			<div class="controls">
				{{ Form::text('subtotal',null,array('class'=>'form-control text-right','required')) }}
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-sm-offset-3">
			{{ Form::label('amtzxant','30% Amortizacion por Anticipo') }}
			<div class="controls">
				{{ Form::text('amtzxant',null,array('class'=>'form-control text-right')) }}
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-sm-offset-3">
			{{ Form::label('supervision','1.5% Gastos de Supervision') }}
			<div class="controls">
				{{ Form::text('supervision',null,array('class'=>'form-control text-right')) }}
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-sm-offset-3">
			{{ Form::label('secodam','0.5% SECODAM') }}
			<div class="controls">
				{{ Form::text('secodam',null,array('class'=>'form-control text-right')) }}
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-sm-offset-3">
			{{ Form::label('cmic','0.2% CMIC') }}
			<div class="controls">
				{{ Form::text('cmic',null,array('class'=>'form-control text-right')) }}
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-6 col-sm-offset-3">
			{{ Form::label('liquido','Liquido') }}
			<div class="controls">
				{{ Form::text('liquido',null,array('class'=>'form-control text-right','required')) }}
			</div>
		</div>

	</div>

	<div class="row col-sm-12">
		<div class="form-group col-xs-12 col-sm-2 col-lg-1">
			{{ Form::label('finieje','Fecha de Inicio') }}
			<div class="controls">
				{{ Form::text('finieje',null,array('class'=>'form-control fecha')) }}
			</div>
		</div>

		<div class="form-group col-xs-12 col-sm-2 col-lg-1">
			{{ Form::label('ffineje','Fecha de Termino') }}
			<div class="controls">
				{{ Form::text('ffineje',null,array('class'=>'form-control fecha')) }}
			</div>
		</div>
		<div class="form-group col-xs-12 col-sm-8 col-lg-10">
			{{ Form::label('observaciones','Observaciónes') }}
			<div class="controls">
				{{ Form::textarea('observaciones',null,array('class'=>'form-control','rows'=>'3')) }}
			</div>
		</div>
	</div>


</div>
	<br>
	<div class="form-group">
		{{ Form::submit('Guardar',array('class'=>'btn btn-primary')) }}
		<a href="{{ URL::to('estimaciones/listado') }}" class="btn btn-primary">Cancelar</a>
	</div>


{{ Form::close() }}
