<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Lồng ghép HTML và PHP</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px">Thông tin sinh viên</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Point</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
        </tr>
        </thead>
        <tbody>
    <?php include_once ("students.php");//nap 1 file php vao file khac  ?>
    <?php foreach ($students as $s): //thay {} bằng { = : , } = endforeach; ?>
        <ul>
            <li><?php echo $s->name ?></li>
            <li><?php echo $s->age ?></li>
            <li><?php echo $s->point ?></li>
        </ul>
            <tr>
                <th scope="row"><?php echo $s["id"] ?></th>
                <td><?php echo $s["name"] ?></td>
                <td><?php echo $s["age"] ?></td>
                <td><?php echo $s["point"] ?></td>
                <td><?php echo $s["address"] ?></td>
                <td><?php echo $s["gender"] ?></td>
            </tr>
        <?php endforeach;//lam the nay de khỏi lẫn với bọn khác như if else.......  ?>
            </tbody>
    </table>
</div>
</body>
</html>