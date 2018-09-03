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

        <table class="table table-striped table-condensed">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{STATUS_TEXT[$task->status] }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model('task', ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection