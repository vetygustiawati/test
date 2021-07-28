<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWD 1</title>
    <link rel="stylesheet" href="assets\vendor\bootstrap-4.6.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/style2.css">
    <link rel="stylesheet" href="assets\vendor\fortawesome\font-awesome\css\all.css" />
    <link rel="stylesheet" href="assets\vendor\datatables\datatables\media\css\jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets\vendor\datatables\datatables\media\css\dataTables.bootstrap4.min.css">
</head>

<body>
    <?php include "./_inc/header.inc" ?>
    <?php include "./_inc/sidebar.inc" ?>
    <main id="main-content">
        <div class="container">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'default';
            include "./_pages/$page.php";
            ?>
        </div>
        <?php include "./_inc/footer.inc" ?>
    </main>

    <script src="assets\vendor\jquery\jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="assets\vendor\bootstrap-4.6.0-dist\js\bootstrap.min.js"></script>
    <script src="assets\vendor\datatables\datatables\media\js\jquery.dataTables.min.js"></script>
    <script src="assets\vendor\datatables\datatables\media\js\dataTables.bootstrap4.min.js"></script>
    <script src="assets/scripts/script.js"></script>
</body>

</html>