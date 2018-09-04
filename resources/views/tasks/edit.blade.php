@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
    <input type="select" class="dropdown-menu">
    {!! Form::label('status', 'ステータス:') !!}
    {!! Form::select('status', ['New', 'Working', 'Waiting', 'Done'], null, ['class' => 'field'])!!}

         <div class="form-group">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
            
    </div>
</div>
@endsection