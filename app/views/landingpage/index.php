<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img src="./img/logo.png" alt="logog" width="50px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/landingpage">Home</a>
              <a class="nav-link" href="<?= BASEURL ?>/landingpage/lantaik">Lantai</a>
              <li class="nav-item active">
                <a class="nav-link" href="<?= BASEURL ?>/login/logout"onclick="return confirm('Anda yakin ingin keluar?');">
                <i class='bx bx-log-out'onclick="return confirm('Anda yakin ingin keluar?');"></i>
                    <span>Log Out</span></a>
            </li>
            </div>
          </div>
        </div>
      </nav>
      <!-- End-Navbar -->

      <!-- Greeting -->
      <div class="jumbotron" id="home">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Kost Tuk Wan</h1>
            <p class="lead text-white">Kost Mewah dengan Harga Terjangkau</p>
            <p class="lead text-white">Murah, Nyaman, dan Berkualitas</p>
        </div>
      </div>
      <!-- End Greeting -->
      
      <!-- About Us -->
      <div class="about">
      <div class="row">
        <div class="col mt-5 ms-5 mb-3">
          <img src="./img/gambar-aboutus.jpg" alt="" width="500px">
        </div>
        <div class="col desc mt-5 ">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sequi aliquid accusantium! Nostrum expedita et optio iste provident praesentium inventore temporibus maiores, excepturi numquam consectetur sed, atque dolorem, ducimus soluta voluptatem doloremque quisquam. Eaque quas et earum, dolorem harum officiis soluta molestias ducimus ex doloremque architecto in ipsa enim aperiam quod reprehenderit! Inventore, facere. Velit nulla, qui placeat possimus optio non cum omnis laudantium repellat tenetur impedit repudiandae aspernatur porro quaerat ullam magnam. Qui incidunt laudantium, nisi asperiores soluta placeat numquam amet earum perferendis voluptatibus voluptas repudiandae voluptatum, vel a eligendi excepturi facilis, reprehenderit sapiente repellat non? Consequuntur odio eligendi minima laboriosam.</p>
        </div>
      </div>
      <br>
      <br>  
      </div>  
      <!-- End About Us -->

      <!-- Product -->
      <div class="product">
      <div class="row justify-content-center">
    <div class="col">
    <div class="card mx-auto" style="width: 18rem;">
            <img src="./img/kamar 2.jpeg" class="card-img-top" alt="gambar kamar kost">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col">
    <div class="card mx-auto" style="width: 18rem;">
            <img src="./img/kamar 1.jpeg" class="card-img-top" alt="gambar kamar kost">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card mx-auto" style="width: 18rem;">
            <img src="./img/kamar 3.jpeg" class="card-img-top" alt="gambar kamar kost">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>
  <br>
  <br>
  </div>
  <div class="d-flex justify-content-center">
  <a href="./landingpage/lantaik"> <button type="button" class="btn ms-5 btn-product" style="background-color: #7400F8; color: white; font-weight: 500;">Lihat Detail</button></a>
  </div>
 
      <!-- End Product -->

  <!-- Contact Us -->
  <div class="contact-us">
  <div class="row">
    <div class="col">
      <div class="col-left">
      <h2>Contact Us</h2>
      <h4>Please feel free to ask</h4>
      <form action="<?= BASEURL ?>/contactus/tambah" method="post" enctype="multipart/form-data" class="form-login" onsubmit="return validateForm()">

            <div class="mb-3">
            <input type="text" class="form-control p-3" name="nama" id="exampleFormControlInput1" placeholder="Name..." style="border-radius: 50px; background-color: #E5E5E5; font-weight:bold;" required>
            </div>
            <div class="mb-3">
            <input type="email" class="form-control p-3" name="email" id="exampleFormControlInput2" placeholder="Email..." style="border-radius: 50px; background-color: #E5E5E5; font-weight:bold;" required>
            </div>
            <div class="mb-3">
            <input type="text" class="form-control p-3" name="message" id="exampleFormControlInput3" placeholder="Message..." style="border-radius: 50px; background-color: #E5E5E5; font-weight:bold;" required>
            </div>
            <input type="submit" class="btn contact p-2" style="background-color: #7400F8; color: white; font-weight: bold;"></input>
        </form>
        </div>
    </div>
    <div class="col ms-5">
        <img class="mailman" src="./img/cu.png" alt="">
    </div>
</div>
</div>
  <!-- End Contact Us -->
  <script>
    function validateForm() {
        // You can add more complex validation logic here if needed
        var name = document.getElementById('exampleFormControlInput1').value;
        var email = document.getElementById('exampleFormControlInput2').value;
        var message = document.getElementById('exampleFormControlInput3').value;

        if (name === '' || email === '' || message === '') {
            alert('Please fill in all fields');
            return false; // Prevent the form submission
        }

        // You can customize the alert message based on your requirements
        alert('Form submitted successfully!');
        return true; // Allow the form submission
    }
</script>

</body>
</html>