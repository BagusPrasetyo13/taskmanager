@extends('pages.layout.main')

@section('content')
    <div class="row-header">
        <a href="{{ route('dashboard') }}">BACK</a>
        <h2>NEW TASK</h2>
    </div>

    <div class="new-task-content">
        <form action="{{ route('add-task') }}" method="POST">
            @csrf
            <div class="input-group">
                <p>Task Title</p>
                <input type="text" name="title">
            </div>

            <div class="input-group">
                <p>Task Description</p>
                <textarea type="text" name="description"></textarea>
                <p>150/250</p>
            </div>

            <div class="input-group">
                <p>Task Due Date</p>
                <input type="date" name="due_date">
            </div>

            <button type="submit">Save</button>
        </form>
    </div>
@endsection
