@extends('main')
@section('content')
    <div class="container">
        <h2 style="text-align: center; color: green; font-weight: bold;">Add a Receipt</h2>
        {!! Form::open(['url' => '/success', 'method' => 'post', 'class' => 'form-horizontal']) !!}

        {!! Form::label('seriallbl','Serial No.') !!}
        {!! Form::text('serialNo','',['class'=>'form-control']) !!}<br>

        {!! Form::label('datelbl','Date') !!}
        {!! Form::date('date',\Carbon\Carbon::now(),['class' => 'form-control']) !!}<br>

        {!! Form::label('datlbl','Date of handling paper') !!}
        {!! Form::date('dateToHandle',\Carbon\Carbon::now(),['class' => 'form-control']) !!}<br>

        {!! Form::label('paperlbl','paper handler') !!}
        {!! Form::select('paperHndlr',['beshoy gamal' => 'Beshoy Gamal', 'christein atef' => 'Christein Atef','michael naguib'=>'Michael Naguib','maria william' => 'Maria William'],'michael naguib',['class' => 'form-control']) !!}<br>

        {!! Form::label('attendlbl','Attendance') !!}<br>
        {!! Form::label('s','please separate every name with a #',['class' => 'alert alert-info']) !!}
        {!! Form::textarea('attend','',['class' => 'form-control']) !!}<br>

        {!! Form::label('absentlbl','Absence') !!}<br>
        {!! Form::label('s','please separate every name with a #',['class' => 'alert alert-info']) !!}
        {!! Form::textarea('absent','',['class' => 'form-control']) !!}<br>

        {!! Form::label('tasklbl','Task') !!}
        {!! Form::text('task','',['class' => 'form-control']) !!}<br>

        {!! Form::label('descriptionlbl','Description') !!}
        {!! Form::textarea('description','',['class' => 'form-control']) !!}<br>

        {!! Form::label('noteslbl','Notes') !!}
        {!! Form::textarea('notes','',['class'=>'form-control']) !!}

        <br>
        {!! Form::submit('submitBtn',['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}<br>

    </div>
@endsection