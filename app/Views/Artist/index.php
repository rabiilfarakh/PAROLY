<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mohamed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
  <body class="text-white">


  <!-- navbar -->

 <header>
    <nav class="d-flex bg-transparent mt-1 mx-auto rounded-5 justify-content-between px-5 align-items-center py-2">
       <a href="Artist" class="text-white" style="text-decoration:none">
       <di class="left d-flex align-items-center justify-content-center">
        <ion-icon class="fs-4 text-primary fw-bold" name="musical-notes-outline"></ion-icon>
        <h4 class="fw-bold"> Paroly.<span class="fw-light">for<span class="fs-5 text-primary">Artist</span></span></h4>
        </di>
       </a>

        <div class="right d-flex gap-3">
        <?php
        if(!isset($_SESSION['user'])){
          ?>
          <button class="btn btn-sm">register</button>
          <button class="btn btn-sm btn-light">login</button>
          <?php
        }
        ?>
        <a href="profile" class="text-white"><ion-icon class="fs-2"name="person-circle-outline"></ion-icon></a>
        </div>
    </nav>
 </header>


 <section class="presentation d-flex flex-column justify-content-center align-items-center text-center mb-5">
  <img src="../public/assets/img/album.png" class="w-25" alt="">
  <h3 class="text-center"><ion-icon class="text-primary" name="musical-notes-outline"></ion-icon>PAROLY<span class="fs-4">ARTIST</span></h3>
  <h2>Now anyone can discover his favourite songs's Lyrics</h2>
  <p class="w-50 text-secondary">CODE-X TEAM BROUGHT TO YOU THIS PLATFORM TO DISCOVER YOUR FAVOURITE SONG's LYRICS</p>
  <p>Available January 4,2024</p>
  <div class="twobuttons">
  <a class="btn btn-light" href="Upload">Upload your first albums</a>
  <button class="btn btn-primary">Discover more</button>
  </div>
 </section>





 <!-- modal to add songs-->

 <section class="container middle mt-5">
  <div class="d-flex justify-content-between align-items-center">
  <h1 class="fw-medium">Discover our website</h1>
  <ion-icon class="fs-2 text-primary" name="radio-outline"></ion-icon>
  </div>
  <div class="row gap-4">
    <div class="gridtop col rounded " >
    <h5 class="fw-bold mt-3">Discover Paroly with us</h5>
    <p class="text-secondary">Unlock your creativity and potential and bring ideas to life with Paroly lyrics platfrom</p>
    <img src="../public/assets/img/golden mic.png"  class="w-75" alt="">
    </div>
    <div class="gridtop col-6 rounded position-relative" >
    <img src="" alt="">
    <h3 class="position-absolute fst-italic fs-1" style="top:1rem;left:1rem">OUR TOP 4</h1>
  </div>

    <div class="gridtop col rounded"  >test</div>
  </div>
 </section>



 <section class="albums container mt-5">
 <div class="d-flex justify-content-between align-items-center">
  <h1 class="fw-medium">Albums</h1>
  <ion-icon class="fs-2 text-primary" name="musical-note-outline"></ion-icon>
  </div>
  <div class="row gap-2">
   <?php
   foreach($data['Albums'] as $album){
    ?>
    <div class="alb col-1 position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img class="w-100" style="height: 9rem;" src="data:image/jpeg;base64, <?php echo $album->__get('albumImage'); ?>" alt="Album Image">
    
    <div class="sitar">
        <h5 class="p-0 m-0 albumname"><?php echo $album->__get('albumName')?></h5>
        <p class="p-0 m-0 text-secondary artistname"><?php echo $album->__get('artistName') ?></p>
    </div>
</div>
    <?php
   }
   ?>
  </div>
 </section>


 <div class="modal fade text-primary" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-flex flex-column">
        <img id="exampleModalImage" class="w-25" src="" alt="">
        <h5 class="modal-title mx-auto" id="exampleModalLabel"></h5>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <!-- end navbar -->


<script src="../public/assets/js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>






