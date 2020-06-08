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
        <form method="POST" action="/updatesingles">
        {{csrf_field()}}
            <table>
                <tr>
                    <td>Player1</td>
                    <td><input type="text" class="form-control" name="player1" value="{{$singlesdata->player1}}" />
                        <input type="hidden" class="form-control" name="id" value="{{$singlesdata->id}}" /></td>
                </tr>
                <tr>
                    <td>Player1 Score</td>
                    <td><input type="text" class="form-control" name="player1score"
                            value="{{$singlesdata->player1score}}"></td>
                </tr>
                <tr>
                    <td>Player2</td>
                    <td><input type="text" class="form-control" name="player2" value="{{$singlesdata->player2}}"></td>
                </tr>
                <tr>
                    <td>Player2 Score</td>
                    <td><input type="text" class="form-control" name="player2score"
                            value="{{$singlesdata->player2score}}" /></td>
                </tr>
            </table>
            </br>

            <input type="submit" class="btn- btn-primary" value="UPDATE">
            &nbsp;&nbsp;<input type="button" class="btn- btn-danger" value="CANCEL">

        </form>
    </div>

</body>

</html>