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
            <h1>Double Matches</h1>
            <div class="row">
                <div class="col-md-12">

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach

                    <form method="POST" action="/savedoubles">
                    {{csrf_field()}}
                        <table>
                            <tr>
                                <td>Team1</td>
                                <td><input type="text" class="form-control" name="team1" placeholder="Player1/Player2" /></td>
                            </tr>
                            <tr>
                                <td>Team1 Score</td>
                                <td><input type="text" class="form-control" name="team1score" placeholder="Team1 score" ></td>
                            </tr>
                            <tr>
                                <td>Team2</td>
                                <td><input type="text" class="form-control" name="team2" placeholder="Player1/Player2"></td>
                            </tr>
                            <tr>
                                <td>Team2 Score</td>
                                <td><input type="text" class="form-control" name="team2score" placeholder="Team2 score" /></td>
                            </tr>
                        </table>
                        </br>

                        <input type="submit" class="btn- btn-primary" value="SAVE">
                        <input type="button" class="btn- btn-warning" value="CLEAR">
                    </form>
                    </br>
                    <table class="table table-dark">
                        
                        <th>Date/Time</th>
                        <th>Team1</th>
                        <th>Team2</th>
                        <th>Team1 Score</th>
                        <th>Team2 Score</th>
                        <th>Winner</th>
                        <th>Action</th>


                        @foreach($doubles as $doubles)
                        <tr>
                            
                            <td>{{$doubles->created_at}}</td>
                            <td>{{$doubles->team1}}</td>
                            <td>{{$doubles->team2}}</td>
                            <td>{{$doubles->team1score}}</td>
                            <td>{{$doubles->team2score}}</td>
                            <td>{{$doubles->winner}}</td>


                            <td>

                                <a href="" class="btn btn-warning">Delete</a>
                                <a href="" class="btn btn-success">Update</a>

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