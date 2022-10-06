<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     <section>
     <div class="container">
        <h2 class="text-center my-3">Project Ideas</h2>
        <table class="table table-success table-striped">
            <thead>
                <th>Project Name</th>
                <th>Project Details</th>
                <th>Project Outcome</th>
                <th>Member Details</th>
                     
            </thead>
            <tbody>
                @foreach($project_ideas as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->details }}</td>
                    <td>{{ $p->outcome }}</td>
                    <td>{{ $p->members }}</td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
     </section>
</body>
</html>