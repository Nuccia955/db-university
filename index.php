<?php require_once __DIR__ . '/partials/scripts/get_departments.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
    <title>University Departments</title>
</head>
<body>
    <h1 class="my-3 text-uppercase text-center">Departments</h1>
    <main class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Website</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($departments as $department) { ?>
                <tr>
                    <td><?php echo $department['id']?></td>
                    <td><?php echo $department['name']?></td>
                    <td><?php echo $department['address']?></td>
                    <td><?php echo $department['email']?></td>
                    <td><?php echo $department['website']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>