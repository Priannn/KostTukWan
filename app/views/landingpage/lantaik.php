<style>
.mailman{
  width: 450px;
  height: 450px;
  margin-left: 40px;
  margin-top: 30px;
  margin-bottom: 30px
}
.col-left{
  margin-left: 40px;
}
.col-left h2{
  margin-top: 30px;
  font-weight: bold;
  color: #5F5F5F;
  font-size: 45px;
}
.col-left h4{
  font-weight:bold;
  color: #5F5F5F;
  font-size: 32px;
  margin-bottom: 50px;
}
.contact{
  width: 555px;
  background-color: #7400F8;
  color: white;
}
.contact-us{
  /* border: 1px solid #B2B2B2; */
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 40px;
  margin-bottom: 30px;
}
.product{
  margin-top: 30px;
  margin-bottom: 30px;
}
input{
  border-radius: 50px;
}
.ul-top {
  list-style: circle;
  padding: 0;
  display: flex;
  margin-top: 20px;
}    
.ul-top li {
  display: inline;
  margin-right: 10px;
}
.left-col h1{
  text-align: center;
}
.right-col h2{
  font-weight: bold;
  font-size: 35px;
  margin-top: 20px;
}
.right-col h3{
  font-weight: bold;
}
.right-col p{
  color: #6a6a6a;
  font-weight: 500;
  margin-top: 30px;
}
.row-first{
  margin-top: 30px;
}
.list{
  display: flex;
}
.right-list{
  margin-left: 40px;
}
.left-list,
.right-list {
list-style: none;
padding: 0;
}

.left-list li,
.right-list li {
display: flex;
align-items: center;
margin-bottom: 10px; /* Atur jarak antar elemen sesuai kebutuhan */
margin-top: 10px;
}

.left-list img,
.right-list img {

margin-right: 10px; /* Atur jarak antara gambar dan teks sesuai kebutuhan */

}

.jumbotron {
  height:640px;
}
.jumbotron .lead {
  font-size:42px;
}
.jumbotron {
  background-image: url(../img/jmb.jpeg);
  background-size: cover;
  height: 540px;
  text-align: center;
}

.jumbotron h1{
  padding-top: 160px;
}
p {
    font-weight: 800;
    color: #000;
  }
  .custom-button1 {
     background-color: #5800BC;
     color: white;
     border: none;
  }
  .custom-button2 {
     background-color: #37EBC1;
     color: white;
     border: none;
  }
  
  .icon {
    color: #5800BC;
  }
  
    </style>

<!-- Modal -->
                    <!-- Page Heading -->
                    <?php if (!empty($data['lnt'])) : ?>
                     <?php foreach ($data['lnt'] as $row) : ?>
                    <div class="row">
                        <!-- kiri -->
                        <div class="col-4 border">
                                <h2 class="text-center text-dark mt-3">Lantai <?= $row['Lantai'];?></h2>
                                <img src="http://localhost/phpmvc/public/img/<?= $row['gambar_kamar']; ?>" alt="" class="img-fluid ms-1">
                        </div>
                        <!-- tengah -->
                        <div class="col-5 border ">
                            <div class="row mt-4">
                                    <ul class="d-flex mt-2 justify-content-around">
                                        <li><?= $row['luastemti']; ?>m<sup>2</sup></li>
                                        <li><?= $row['pax']; ?>Pax</li>
                                    </ul>
                                    <hr>
                            </div>
                            
                            <div class="list justify-content-center">
                                
          <ul class="left-list mt-5">
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAsdJREFUWEft1znIFVcUB/CfQRKCoMGFNFq5REEJuOHaRFHEGLQwWMQ0wQVRQQKK+xKUQBRcChtBFCyEgETUwqUQQ0RICkHcQIsUFgb3QsW4cMKdON/LvJl576UQ+Q5McWfO8r//c+ecc3t4x6THO4bHewloCzYnprci1m3L/8FQN6Ai+gdgLuZgOj5OSk9xBsfT81eruWs1ZQNxCF/UDHQO3+JOTf2W/rKpOIZ+dZ0nvbuYh9/q2NVlaDn24IOc08spPRHoYno/EZMwE6Nyui+xFAeqQNUB9BV+yTl6jo3YhVdNAgTw1Ygy8GFOZzZOlYGqAhSH9Sbi7IRcx3xcqdpp+h4s/Yxhaf0nPsOzZvZVgH7EmmQcTkbiVk0wmdpgXM0xtR0b2gEUOwkmeibjVdjdIphM/XvsTIsXGI7bRb7KGIqdrEtGcXCn4HWbgCLOBUxO9k1bTBmgo/g6OViAWHciC3E4OTiCb1pl6A+MTkZjEetOJEpCVosuYUKrgB6hdzLqg8edoEG0myiSIffQvw6gds9Ih1jfdozGM9QNKFH7LzFVhbHTVLRsXwZoBK617LGeQVPfzQBFQ7yBbThYL0Ztre+wHgEqGnUXaQZoB9biIYak37R2xBLFT9NGo4z8gE11AEXvCiC9knKMET8VBClLabNvscnYbMgT9MXfed9FDEXPir6TSczIMxoAldFelu6zmJbzFb2tyyRZBGgF9uaM7jeMrUF7zEhRxYtoz5pyVPqhyA/6McJ8lPP9H/aLAI1H9JpMTqTbRbYuo70q3Q/wSc73MuyvSlk2fi5JDTUugvkJMVIYV59MYobOZupIwa+5b6fTfJ29WozIwCCcx6Jcf/tHp53C2LjLldiXIlalu+Df6PqqHUAxpM/KuRmH39O6Md0n8WUlipxCO4A+T/VjTGImbh+ZVKW7Els7gCqddqLQDaiKvTd3loUlItFobAAAAABJRU5ErkJggg=="/><?= $row['kamarmandi']; ?></li>
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAATNJREFUWEftmLtKA0EUQE8gfkAa0wdEiIKlVUp7P0ArP8TkU7SwtrdTkj6FEEnsTZUPUEwYmJVh2NnLPFx2l5lmYR73nntmipnt0bDWaxgPrQM6BR6Ay0Qm58Ad8OGKV2VoBCyAYSKYIswXMAE2ZXFdQP8FI0KVAdkwO13Re6SpM+ANGOg4paZsIHVmXoFjI/kzsIyEKZZfANdGrK0udl302UArQEHV2ZT5cxfQvk4SI9efGNtQBtKWsiHpaHbD0AyY6lLV914o22d+kCGfBIrVZ373gKRDao9LWxxtKAP5GoidH7RlsUmr1mcgyW421B1D30BfKifx+A9w5LpTqwv3OHFCKVzlJf8GeITa3vy/wC3w5DKk+k+AK+ttJlUZMq4eii/Ap7m4dX8/QiqPWpMNSfoOeIRFJWDOk2YAAAAASUVORK5CYII="/><?= $row['lemari']; ?></li>
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAT1JREFUWEftlzFOwzAUhr8KGMoVOjKjHoHeoQsbQ4UYOATtKdqBqUtVqYeAC7CzdOoZQCAkkKW4elixX1U7biI5U6To/e/z/z87SY+WXb2W8VCAtERCDk1FsbzXNEPPVc0Q0K9QThWtqtlZoFlMTqL2SXP9UIcS8fyTqe3dWaBQZCPgplr7K/ASsDNZZNrxYBsZ8NARkWWXGYDsQCeP7BZYNbG1hKbpsXZ71M3GA7BoGMbK3wPPspcLdA28AeeZgL6AIfBu+7lAG2CcCca2WQJ3PqAdMMgMtAWufEA/wFlmINPzwgckD66cXPvRcWeoAFUxFIe0efQ69AH0terEzz+BS98umwMTuQ0TN3flvqtXx6MPSBao3y5HwKqah37Clt+gOvdVe0tkwoFWzNARicSXpFp5PIn7UkumGCn0Bz9APSWCn61nAAAAAElFTkSuQmCC"/><?= $row['sprei']; ?></li>
  </ul>
  
  <ul class="right-list mt-5">
  
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAK5JREFUWEftmFEKwzAMQ19Ptt6s283Wm5VAN0ZnGoRJSECG/AQ3UWVZpl0YLJbB8GBAtYpEDK1AWT3iDZT1jQjQE9h6oAFeQLlvXkD7ldKAuVLex7mv5ssM/T0QAPotcTq/pqH0BeoLGNDZVZ8utoYiO7ttAmsoqyHV6NR8WdStR9r8gNQSqPkyQx4d9qGs
D1lD1lBWQ6rRqfmyMXqWTfEp3bpMt+f7d0yN/uEYOgCyhIgl8jl6/gAAAABJRU5ErkJggg=="/><?= $row['jendela']; ?></li>
<li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAsdJREFUWEft1znIFVcUB/CfQRKCoMGFNFq5REEJuOHaRFHEGLQwWMQ0wQVRQQKK+xKUQBRcChtBFCyEgETUwqUQQ0RICkHcQIsUFgb3QsW4cMKdON/LvJl576UQ+Q5McWfO8r//c+ecc3t4x6THO4bHewloCzYnprci1m3L/8FQN6Ai+gdgLuZgOj5OSk9xBsfT81eruWs1ZQNxCF/UDHQO3+JOTf2W/rKpOIZ+dZ0nvbuYh9/q2NVlaDn24IOc08spPRHoYno/EZMwE6Nyui+xFAeqQNUB9BV+yTl6jo3YhVdNAgTw1Ygy8GFOZzZOlYGqAhSH9Sbi7IRcx3xcqdpp+h4s/Yxhaf0nPsOzZvZVgH7EmmQcTkbiVk0wmdpgXM0xtR0b2gEUOwkmeibjVdjdIphM/XvsTIsXGI7bRb7KGIqdrEtGcXCn4HWbgCLOBUxO9k1bTBmgo/g6OViAWHciC3E4OTiCb1pl6A+MTkZjEetOJEpCVosuYUKrgB6hdzLqg8edoEG0myiSIffQvw6gds9Ih1jfdozGM9QNKFH7LzFVhbHTVLRsXwZoBK617LGeQVPfzQBFQ7yBbThYL0Ztre+wHgEqGnUXaQZoB9biIYak37R2xBLFT9NGo4z8gE11AEXvCiC9knKMET8VBClLabNvscnYbMgT9MXfed9FDEXPir6TSczIMxoAldFelu6zmJbzFb2tyyRZBGgF9uaM7jeMrUF7zEhRxYtoz5pyVPqhyA/6McJ8lPP9H/aLAI1H9JpMTqTbRbYuo70q3Q/wSc73MuyvSlk2fi5JDTUugvkJMVIYV59MYobOZupIwa+5b6fTfJ29WozIwCCcx6Jcf/tHp53C2LjLldiXIlalu+Df6PqqHUAxpM/KuRmH39O6Md0n8WUlipxCO4A+T/VjTGImbh+ZVKW7Els7gCqddqLQDaiKvTd3loUlItFobAAAAABJRU5ErkJggg=="/><?= $row['kloset']; ?></li>
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAT1JREFUWEftlzFOwzAUhr8KGMoVOjKjHoHeoQsbQ4UYOATtKdqBqUtVqYeAC7CzdOoZQCAkkKW4elixX1U7biI5U6To/e/z/z87SY+WXb2W8VCAtERCDk1FsbzXNEPPVc0Q0K9QThWtqtlZoFlMTqL2SXP9UIcS8fyTqe3dWaBQZCPgplr7K/ASsDNZZNrxYBsZ8NARkWWXGYDsQCeP7BZYNbG1hKbpsXZ71M3GA7BoGMbK3wPPspcLdA28AeeZgL6AIfBu+7lAG2CcCca2WQJ3PqAdMMgMtAWufEA/wFlmINPzwgckD66cXPvRcWeoAFUxFIe0efQ69AH0terEzz+BS98umwMTuQ0TN3flvqtXx6MPSBao3y5HwKqah37Clt+gOvdVe0tkwoFWzNARicSXpFp5PIn7UkumGCn0Bz9APSWCn61nAAAAAElFTkSuQmCC"/><?= $row['bantal']; ?></li>
</ul>
        </div>
        <hr>
                        </div>
                        <!-- kanan -->
                        <div class="col-3 border">
                                <h3 class="mt-4 haha">Rp. <?= $row['harga']; ?>/bulan</h3>
                                <h4 class="mb-4"><?= $row['stok']; ?> kamar tersisa</h4>
                                <div class="d-flex justify-content-around mt-5">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-button1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Pesan Sekarang
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="<?= BASEURL ?>/lantai/tambahLantai" method="post">
                                            <p class="text-center">Form Pemesanan Kamar</p>
                                                <hr style="border-width: 3px">
                                            <div class="form-group mb-4">
                                                <label for="kode">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="notelp">
                                            </div>
                                            <div class="d-flex">
                                            <div class="form-group mb-4">
                                                <label for="nama">Tanggal Masuk</label>
                                                <input type="date" class="form-control" id="tmasuk">
                                            </div>
                                            <div class="form-group mb-4 ml-auto">
                                                <label for="alamat">Tanggal Keluar</label>
                                                <input type="date" class="form-control" id="tkeluar">
                                            </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="telp">Email</label>
                                                <input type="text" class="form-control" id="email">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn custom-button1 ">Pesan</button>
                                            </div>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <button class="btn custom-button2 ml-3"><a href="https://wa.me/<?= $row['no_whatsapp']; ?>">Tanya di WA</a></button>
                                </div>
                                <p class="align-content-center mt-5"><i class='bx bx-info-circle mt-4 mr-2'></i>Silahkan klik button "Tanya di WA" untuk mengetahui informasi mengenai kost ini.</p>
                                <div class="d-flex justify-content-around fs-4">
                                </div>
                        </div>
                    </div>
                    <?php endforeach; ?>    
                    <?php else : ?>
    <div class="d-flex justify-content-center">
    <img src="<?= BASEURL ?>/img/img-lantai.svg" alt="" class="w-25 mt-5 mx-auto">
    </div>
    <p class="text-center">Ga ada data wlee😜😜😜</p>

<?php endif; ?>
                    
    </div>
      <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/script.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Page level custom scripts -->
 
</body>
</html>