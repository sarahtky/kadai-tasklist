@extends('layouts.app')

@section('content')

@php
    define('STATUS_TEXT', [
        0 => 'New',
        1 => 'Working',
        2 => 'Waiting',
        3 => 'Done'
    ]);
@endphp

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <p>ステータス:{{STATUS_TEXT[$task->status] }}</p>
    <p>タスク:{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


@endsection