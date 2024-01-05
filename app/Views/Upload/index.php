<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= APP_URL ?>public/assets/css/artist.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Custom styles here */
        /* Ensure the drop-zone has a minimum height for display */
        .drop-zone {
            min-height: 200px;
            /* Adjust the minimum height as needed */
        }
    </style>
</head>

<body>
<header>
    <nav class="d-flex justify-content-between px-5 align-items-center py-2">
        <div class="middle">
            <a href="">PAROLY</a>
        </div>
        <div class="right d-flex gap-3">
            <button class="btn btn-dark"><a style="text-decoration:none" href="Artist">Artist</a></button>
            <a href="profile  "><ion-icon class="fs-2" name="person-circle-outline"></ion-icon></a>
        </div>
    </nav>
</header>

<section class="d-md-flex px-5 gap-3"> <!-- Use d-md-flex to apply flexbox for medium and larger screens -->
    <div class="top d-flex flex-column justify-content-center">
        <form id="uploadForm" method="POST" enctype="multipart/form-data">
            <div class="drop-zone bg-dark d-flex justify-content-center align-items-center">
                <div class="drop-zone__prompt text-white d-flex flex-column align-items-center justify-content-center">
                    <ion-icon style="font-size:5rem" name="cloud-upload-outline"></ion-icon>
                    <span class="text-white">Drop your album cover</span>
                </div>
            </div>
            <input type="file" name="myFile" class="drop-zone__input" id="myFileInput" multiple>
        </form>
        <div class="top-right w-100 d-flex flex-column py-1 text-white">
            <h2><span class="top-right-text"></span></h2>
            <label for="">Album</label>
            <input type="text" required class="albumname bg-light" style="border:none;border-radius:5px" placeholder="album name ....">
        </div>
    </div>

    <div class="ALLRIGHT position-relative text-white  w-100 bg-dark mt-md-0 mt-3" style="border-radius:10px;height:22.5rem">
        <div class="top w-100 d-flex justify-content-between px-3">
            <div class="artist d-flex flex-column w-25">
                <label for="">Artist name</label>
                <input type="text" required class="artistname" placeholder="Artist name ...">
            </div>

            <div class="addmu d-flex flex-column">
                <label for="">songname</label>
                <div class="d-flex">
                    <input type="text" required class="songnameinput" placeholder="songname">
                    <ion-icon type="button" class="fs-2 songnameadd" name="add-circle-outline"></ion-icon>
                    <select class="styles" name="styles" id="">
                        <?php
                        foreach ($data['STYLES'] as $style) {
                            ?>
                            <option value="<?php echo $style["styleId"]?>"><?=$style["styleName"] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>


        <table class="table border-top border-light mt-3 table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Music</th>
                <th scope="col">Artist</th>
            </tr>
            </thead>
            <tbody class="tablebody">

            <button class="log">LOG</button>



            </tbody>
        </table>

        <button class="btn btn-light position-absolute btn-last" style="bottom:1rem;right:1rem">SEND</button>
    </div>
</section>

<script src="<?= APP_URL ?>public/assets/js/Upload.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>