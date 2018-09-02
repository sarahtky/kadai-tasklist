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

    <h1>タスク一覧</h1>
    
        @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ STATUS_TEXT[$task->status] }}>{{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの投稿') !!}

@endsection