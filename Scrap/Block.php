<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?> </title>
    <!-- CSS Links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/universal.css">
    <link rel="stylesheet" href="../src/Header.css">
    <link rel="stylesheet" href="../src/form.css">
    <link rel="stylesheet" href="../src/responsive.css">

    <!-- FontAwesome -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../src/script.js"></script>

    <style>
        .f-btn{
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
        }
        
    </style>
</head>

<body>
    <?php include('../Components/_Header.php') ?>
    <div class="container">
        <h2>Shop</h2>
        <div class="container row align-content-center align-items-center">
            <div class="col-2"><button class="f-btn"><li class="toggle"><span class="bars"></span></li><span>Filter</span></button></div>
            <div class="col-3"><p>Showing all The Products</p></div>
            <div class="col-5"></div>
            <div class="col-2">
            .<div class="form-group sort-by">
                <select name="Default Sort by" id="">
                    <option value="">Default Sort by</option>
                    <option value="">Sort By Popularity</option>
                    <option value="">Sort By Popularity</option>
                    <option value="">Sort By Popularity</option>
                    <option value="">Sort By Popularity</option>
                    <option value="">Sort By Popularity</option>
                </select>
            </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>