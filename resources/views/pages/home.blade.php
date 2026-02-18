@extends('pages.layout.main')

@section('content')
    <div class="container-content">
        <h1>DASHBOARD</h1>

        <div class="garis"></div>

        <div class="task-activity">
            <div class="task-item">
                Total task
            </div>

            <div class="task-item">
                Pending task
            </div>

            <div class="task-item">
                Done task
            </div>
        </div>

        <div class="task-add-button">
            <button class="btn-add" type="submit">Add Task</button>
        </div>

        <div class="garis"></div>

        <div class="task-lists">
            <h3>TASK LISTS</h3>

            <div class="card">
                <div class="task-info">
                    <div class="task-title">Task Title</div>
                    <hr>

                    <div class="task-desc">
                        Task Desc: Lorem ipsum dolor sit amet.
                    </div>

                    <div class="task-due-date">
                        Date:
                    </div>
                </div>

                <div class="divider"></div>

                <div class="task-btn">
                    <form action="">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="">
                        <button type="submit">Edit</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
@endsection
