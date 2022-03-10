<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $coursesandteacher->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LastName') }}
            {{ Form::text('LastName', $coursesandteacher->LastName, ['class' => 'form-control' . ($errors->has('LastName') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('LastName', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DateOfBirth') }}
            {{ Form::text('DateOfBirth', $coursesandteacher->DateOfBirth, ['class' => 'form-control' . ($errors->has('DateOfBirth') ? ' is-invalid' : ''), 'placeholder' => 'Dateofbirth']) }}
            {!! $errors->first('DateOfBirth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $coursesandteacher->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cel') }}
            {{ Form::text('Cel', $coursesandteacher->Cel, ['class' => 'form-control' . ($errors->has('Cel') ? ' is-invalid' : ''), 'placeholder' => 'Cel']) }}
            {!! $errors->first('Cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Course') }}
            {{ Form::text('Course', $coursesandteacher->Course, ['class' => 'form-control' . ($errors->has('Course') ? ' is-invalid' : ''), 'placeholder' => 'Course']) }}
            {!! $errors->first('Course', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Schedule') }}
            {{ Form::text('Schedule', $coursesandteacher->Schedule, ['class' => 'form-control' . ($errors->has('Schedule') ? ' is-invalid' : ''), 'placeholder' => 'Schedule']) }}
            {!! $errors->first('Schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
