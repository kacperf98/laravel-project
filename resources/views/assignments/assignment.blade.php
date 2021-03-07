<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignments</title>
</head>
<body>

<h1>All Assignments</h1>

@foreach ($assignments as $assignment)
    <table>
        <tr>
            <th>{{ $assignment->body }}</th>
            <th>
                <?php
                    if($assignment->completed == true) {
                        echo "- Completed";
                    }
                    else {
                        echo "- Incomplete";
                    }
                ?>
            </th>
        </tr>
    </table>
@endforeach

</body>
</html>
