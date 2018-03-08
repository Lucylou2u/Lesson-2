<html>
<head>
    <title>Lesson 1</title>
    <link rel="stylesheet" href="css/skeleton.css" />

</head>

<?php 
    require "../app/Person.php";
    $id = $_GET['id'];
    $person = new Person($id);
 ?>

<body>

    <h1>Profile <?= $person->id ?></h1>

    <table class="u-full-width">
        <tbody>
        <tr>
            <th>Name</th>
            <td><?= $person->name ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?= $person->age ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= $person->gender ?></td>
        </tr>
        <tr>
            <th>Postcode</th>
            <td><?= $person->postcode ?></td>
        </tr>
        <tr>
            <th>Special Move</th>
            <td><?= $person->move ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?= $person->description ?></td>
        </tr>
        </tbody>
    </table>

</body>



</html>










