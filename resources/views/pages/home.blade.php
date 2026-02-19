@extends('pages.layout.main')

@section('content')
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
        <a href="{{ route('index-task') }}">Add Task</a>
    </div>

    <div class="garis"></div>

    <div class="task-lists">
        <h2>TASK LISTS</h2>

        <div class="card">
            <div class="task-info">
                <div class="task-title">Task Title</div>
                <hr>

                <div class="task-desc">
                    <span>Task Description : </span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corporis quam repellendus,
                        odit unde molestias doloribus iure eaque, possimus pariatur ex amet maxime! Consequuntur sequi
                        commodi in, eligendi ad voluptate odit recusandae tenetur doloremque corporis perspiciatis
                        obcaecati. Consequuntur ipsa quia voluptate, natus repellat tempora repellendus quibusdam
                        blanditiis ipsam eligendi non quaerat porro dolores qui perspiciatis in doloremque ipsum fuga
                        quos enim accusantium accusamus animi distinctio. Delectus voluptates accusamus facilis itaque
                        aliquam ex ratione accusantium dolore sunt dolorum. Enim reiciendis ratione fugiat consequatur
                        eaque. Reiciendis excepturi harum sapiente vel maiores similique iusto, adipisci delectus nihil
                        tempore necessitatibus, fuga aut? Quas, dolor?</p>
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
                    <button type="submit">Delete</button>
                </form>
                <form action="">
                    <button type="submit">Mark Done</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="task-info">
                <div class="task-title">Task Title</div>
                <hr>

                <div class="task-desc">
                    <span>Task Description : </span>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, ducimus!</p>
                </div>

                <div class="task-due-date">
                    <p>Date:</p> <span>30 Juli 2019</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="task-btn">
                <form action="">
                    <button type="submit">Edit</button>
                </form>
                <form action="">
                    <button type="submit">Delete</button>
                </form>
                <form action="">
                    <button type="submit">Mark Done</button>
                </form>
            </div>
        </div>

    </div>
@endsection
