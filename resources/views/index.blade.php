<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form_validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6727bfd21f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center" class="mt-2">Form-Validation-Using-jQuery</h1>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
{{--                <th scope="col">#</th>--}}
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">action</th>

            </tr>
            </thead>
            <tbody>
            <tr>

                <td>
                    <input type="text" class="form-control" name="name" id="name">
                </td>
                <td>
                    <input type="email" class="form-control" name="emial" id="email">
                </td>
                <td>
                    <input type="number" class="form-control" name="phone" id="phone">
                </td>
                <td>
                    <a class="btn btn-success" id="add" href="#"><i class="fa-solid fa-plus"></i></a>
                    b
                    <a class="btn btn-danger" id="delete" href="#"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $("#add").click(function(){
                $("tr").append("Hello");
            });
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>
