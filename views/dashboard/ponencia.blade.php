<div class="card mb-3">
  <h4 class="card-header">Administrar ponencias</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pon-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <!--Firstname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-firstname">Nombre</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('pon-firstname', null, array('id'=>'pon-firstname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                  {!! Form::hidden('pon-id', null, array('id' => 'pon-id')) !!}
                  {!! Form::hidden('pon-insight', null, array('id' => 'pon-insight')) !!}
                </div>
              </div>
            </div>

            <!--Type -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-type">Tipo</label>
                {!! Form::select('pon-type', array('Charla' => 'Charla','Taller' => 'Taller'), null, array('id'=>'pon-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>
          </div>

          <div class="row">
            <!--Duration -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-duration">Duración</label>
                {!! Form::select('pon-duration', array('OneHour' => '1 Hora','TwoHours' => '2 Horas'), null, array('id'=>'pon-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>

            <!--Allocated Space -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-allocated-space">Espacio asignado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-map-o"></i></div>
                  </span>
                  {!! Form::text('pon-allocated-space', null, array('id'=>'pon-allocated-space', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Scheduled Hour -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-scheduled-hour">Hora y día asignado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                  </span>
                  {!! Form::text('pon-scheduled-hour', null, array('id'=>'pon-scheduled-hour', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Status -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-status">Estado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-tasks"></i></div>
                  </span>
                  {!! Form::text('pon-status', null, array('id'=>'pon-status', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <!-- Description -->
          <div class="form-group mg-hm">
            <label for="pon-description">Descripción</label>
              {!! Form::textareacustom('pon-description', 3, 500, array('class' => 'form-control')) !!}
          </div>

        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>