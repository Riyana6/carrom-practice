<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Scoreboard</h1>
            <div class="row">
                <div class="col-md-12">

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <form method="POST" action="/saveTask">
                        {{csrf_field()}}
                        <table>
                            <tr>
                                <td>Player1</td>
                                <td><input type="text" class="form-control" name="player1" /></td>
                                <td>Player1 Score</td>
                                <td><input type="text" class="form-control" name="player1score"></td>
                            </tr>
                            <tr>
                                <td>Player2</td>
                                <td><input type="text" class="form-control" name="player2"></td>
                                <td>Player2 Score</td>
                                <td><input type="text" class="form-control" name="player2score" /></td>
                            </tr>
                        </table>
                        </br>
                        <input type="submit" class="btn- btn-primary" value="SAVE">
                        <input type="button" class="btn- btn-warning" value="CLEAR">
                    </form>

                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Date/Time</th>
                        <th>Player1</th>
                        <th>Player2</th>
                        <th>Player1 Score</th>
                        <th>Player2 Score</th>
                        <th>Winner</th>



                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>

                            <td>
                                @if($task->iscompleted)
                                <button class="btn btn-success">Completed</button>
                                @else
                                <button class="btn btn-warning">Not Completed</button>
                                @endif
                            </td>

                            <td>
                                @if(!$task->iscompleted)

                                <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                                @else
                                <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not
                                    Conpleted</a>
                                @endif
                                <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>