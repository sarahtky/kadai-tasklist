@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のタスク編集ページ</h1>

<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-sd-offset-2 col-sd-8 col-lg-offset-3 col-lg-6">
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

                <div class="dropdown">
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                ステータス<span class="caret"></span>
                 </button>
                  <!-- 選択肢 -->
                  <ul class="dropdown-menu">
                    <li><a href="#">New</a></li>
                    <li><a href="#">Working</a></li>
                    <li><a href="#">Waiting</a></li>
                    <li><a href="#">Done</a></li>
                  </ul>
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            
    </div>
</div>
@endsection