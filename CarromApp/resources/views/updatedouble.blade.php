<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        </br>
        </br>
        </br>
        <form method="post" action="/updatedoubles">
        {{csrf_field()}}
            <table>
                <tr>
                    <td>Team1</td>
                    <td><input type="text" class="form-control" name="team1" placeholder="Player1/Player2"
                            value="{{$doublesdata->team1}}" />
                        <input type="hidden" class="form-control" name="id" placeholder="Player1/Player2"
                            value="{{$doublesdata->id}}" /></td>
                </tr>
                <tr>
                    <td>Team1 Score</td>
                    <td><input type="text" class="form-control" name="team1score" placeholder="Team1 score"
                            value="{{$doublesdata->team1score}}">
                    </td>
                </tr>
                <tr>
                    <td>Team2</td>
                    <td><input type="text" class="form-control" name="team2" placeholder="Player1/Player2"
                            value="{{$doublesdata->team2}}">
                    </td>
                </tr>
                <tr>
                    <td>Team2 Score</td>
                    <td><input type="text" class="form-control" name="team2score" placeholder="Team2 score"
                            value="{{$doublesdata->team2score}}" /></td>
                </tr>
            </table>
            </br>

            <input type="submit" class="btn- btn-primary" value="UPDATE">
            &nbsp;&nbsp; <input type="button" class="btn- btn-danger" value="CANCEL">


        </form>
    </div>

</body>

</html>