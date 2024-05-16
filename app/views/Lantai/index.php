<button type="button" class="btn custom-button1 ms-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<i class='bx bxs-add-to-queue'></i>Tambah Kost
</button>
<div class="mb-3"></div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Isi data kost</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL ?>/lantai/tambahLantai" method="post" enctype="multipart/form-data>
                                    <div class="row">
                                        <div class="form-group mb-4 col-4">
                                            <label for="kode">Lantai?</label>
                                            <input type="text" class="form-control" id="Lantai" name="Lantai" required>
                                        </div>
                                        <div class="form-group mb-4 col-4">
                                            <label for="kode">Lemari</label>
                                            <input type="text" class="form-control" id="lemari" name="lemari" required>
                                        </div>
                                        
                                        <div class="form-group mb-4 col-4">
                                            <label for="nama">stok</label>
                                            <input type="text" class="form-control" id="stok" name="stok" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 ml-auto col">
                                            <label for="alamat">Harganyaa</label>
                                            <input type="text" class="form-control" id="harga" name="harga" required>
                                        </div>
                                    
                                        <div class="form-group mb-4 col">
                                            <label for="telp">Nomernya?</label>
                                            <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" required>
                                        </div>
                                        <div class="form-group mb-4 col">
                                            <label for="telp">Pax</label>
                                            <input type="text" class="form-control" id="pax" name="pax" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-4 col">
                                            <label for="telp">Luas Tempat Tidur</label>
                                            <input type="text" class="form-control" id="luastemti" name="luastemti" required>
                                        </div>
                                        <div class="form-group mb-4 col">
                                            <label for="telp">Kamar Mandi</label>
                                            <input type="text" class="form-control" id="kamarmandi" name="kamarmandi" required>
                                        </div>
                                        <div class="form-group mb-4 col">
                                            <label for="telp">Sprei</label>
                                            <input type="text" class="form-control" id="sprei" name="sprei" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group mb-4 col">
                                        <label for="telp">Kloset</label>
                                        <input type="text" class="form-control" id="kloset" name="kloset" required>
                                    </div>
                                    <div class="form-group mb-4 col">
                                        <label for="telp">Jendela</label>
                                        <input type="text" class="form-control" id="jendela" name="jendela" required>
                                    </div>
                                    <div class="form-group mb-4 col">
                                        <label for="telp">Bantal</label>
                                        <input type="text" class="form-control" id="bantal" name="bantal" required>
                                    </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="telp">Import Gambar</label>
                                        <input type="file" class="form-control" id="gambar_kamar" name="gambar_kamar" required>
                                    </div>
                                    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>                   
      </div>
      
    </div>
  </div>
</div>
                    <!-- Page Heading -->
                    <?php if (!empty($data['lnt'])) : ?>
                     <?php foreach ($data['lnt'] as $row) : ?>
                    <div class="row">
                        <!-- kiri -->
                        <div class="col-3 border">
                                <h2 class="text-center text-dark mt-3">Lantai <?= $row['Lantai'];?></h2>
                                <img src="http://localhost/phpmvc/public/img/<?= $row['gambar_kamar']; ?>" alt="" class="img-fluid">
                        </div>
                        <!-- tengah -->
                        <div class="col-5 border ">
                            <div class="row mt-4">
                                    <ul class="d-flex mt-2 ml-4">
                                        <li><?= $row['luastemti']; ?>m<sup>2</sup></li>
                                        <li class="ml-5"><?= $row['pax']; ?>Pax</li>
                                    </ul>
                            </div>
                            
                            <div class="list">
                                
          <ul class="left-list mt-3">
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAsdJREFUWEft1znIFVcUB/CfQRKCoMGFNFq5REEJuOHaRFHEGLQwWMQ0wQVRQQKK+xKUQBRcChtBFCyEgETUwqUQQ0RICkHcQIsUFgb3QsW4cMKdON/LvJl576UQ+Q5McWfO8r//c+ecc3t4x6THO4bHewloCzYnprci1m3L/8FQN6Ai+gdgLuZgOj5OSk9xBsfT81eruWs1ZQNxCF/UDHQO3+JOTf2W/rKpOIZ+dZ0nvbuYh9/q2NVlaDn24IOc08spPRHoYno/EZMwE6Nyui+xFAeqQNUB9BV+yTl6jo3YhVdNAgTw1Ygy8GFOZzZOlYGqAhSH9Sbi7IRcx3xcqdpp+h4s/Yxhaf0nPsOzZvZVgH7EmmQcTkbiVk0wmdpgXM0xtR0b2gEUOwkmeibjVdjdIphM/XvsTIsXGI7bRb7KGIqdrEtGcXCn4HWbgCLOBUxO9k1bTBmgo/g6OViAWHciC3E4OTiCb1pl6A+MTkZjEetOJEpCVosuYUKrgB6hdzLqg8edoEG0myiSIffQvw6gds9Ih1jfdozGM9QNKFH7LzFVhbHTVLRsXwZoBK617LGeQVPfzQBFQ7yBbThYL0Ztre+wHgEqGnUXaQZoB9biIYak37R2xBLFT9NGo4z8gE11AEXvCiC9knKMET8VBClLabNvscnYbMgT9MXfed9FDEXPir6TSczIMxoAldFelu6zmJbzFb2tyyRZBGgF9uaM7jeMrUF7zEhRxYtoz5pyVPqhyA/6McJ8lPP9H/aLAI1H9JpMTqTbRbYuo70q3Q/wSc73MuyvSlk2fi5JDTUugvkJMVIYV59MYobOZupIwa+5b6fTfJ29WozIwCCcx6Jcf/tHp53C2LjLldiXIlalu+Df6PqqHUAxpM/KuRmH39O6Md0n8WUlipxCO4A+T/VjTGImbh+ZVKW7Els7gCqddqLQDaiKvTd3loUlItFobAAAAABJRU5ErkJggg=="/><?= $row['kamarmandi']; ?></li>
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAATNJREFUWEftmLtKA0EUQE8gfkAa0wdEiIKlVUp7P0ArP8TkU7SwtrdTkj6FEEnsTZUPUEwYmJVh2NnLPFx2l5lmYR73nntmipnt0bDWaxgPrQM6BR6Ay0Qm58Ad8OGKV2VoBCyAYSKYIswXMAE2ZXFdQP8FI0KVAdkwO13Re6SpM+ANGOg4paZsIHVmXoFjI/kzsIyEKZZfANdGrK0udl302UArQEHV2ZT5cxfQvk4SI9efGNtQBtKWsiHpaHbD0AyY6lLV914o22d+kCGfBIrVZ373gKRDao9LWxxtKAP5GoidH7RlsUmr1mcgyW421B1D30BfKifx+A9w5LpTqwv3OHFCKVzlJf8GeITa3vy/wC3w5DKk+k+AK+ttJlUZMq4eii/Ap7m4dX8/QiqPWpMNSfoOeIRFJWDOk2YAAAAASUVORK5CYII="/><?= $row['lemari']; ?></li>
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAT1JREFUWEftlzFOwzAUhr8KGMoVOjKjHoHeoQsbQ4UYOATtKdqBqUtVqYeAC7CzdOoZQCAkkKW4elixX1U7biI5U6To/e/z/z87SY+WXb2W8VCAtERCDk1FsbzXNEPPVc0Q0K9QThWtqtlZoFlMTqL2SXP9UIcS8fyTqe3dWaBQZCPgplr7K/ASsDNZZNrxYBsZ8NARkWWXGYDsQCeP7BZYNbG1hKbpsXZ71M3GA7BoGMbK3wPPspcLdA28AeeZgL6AIfBu+7lAG2CcCca2WQJ3PqAdMMgMtAWufEA/wFlmINPzwgckD66cXPvRcWeoAFUxFIe0efQ69AH0terEzz+BS98umwMTuQ0TN3flvqtXx6MPSBao3y5HwKqah37Clt+gOvdVe0tkwoFWzNARicSXpFp5PIn7UkumGCn0Bz9APSWCn61nAAAAAElFTkSuQmCC"/><?= $row['sprei']; ?></li>
  </ul>
  
  <ul class="right-list mt-3">
  
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAK5JREFUWEftmFEKwzAMQ19Ptt6s283Wm5VAN0ZnGoRJSECG/AQ3UWVZpl0YLJbB8GBAtYpEDK1AWT3iDZT1jQjQE9h6oAFeQLlvXkD7ldKAuVLex7mv5ssM/T0QAPotcTq/pqH0BeoLGNDZVZ8utoYiO7ttAmsoqyHV6NR8WdStR9r8gNQSqPkyQx4d9qGs
D1lD1lBWQ6rRqfmyMXqWTfEp3bpMt+f7d0yN/uEYOgCyhIgl8jl6/gAAAABJRU5ErkJggg=="/><?= $row['jendela']; ?></li>
<li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAsdJREFUWEft1znIFVcUB/CfQRKCoMGFNFq5REEJuOHaRFHEGLQwWMQ0wQVRQQKK+xKUQBRcChtBFCyEgETUwqUQQ0RICkHcQIsUFgb3QsW4cMKdON/LvJl576UQ+Q5McWfO8r//c+ecc3t4x6THO4bHewloCzYnprci1m3L/8FQN6Ai+gdgLuZgOj5OSk9xBsfT81eruWs1ZQNxCF/UDHQO3+JOTf2W/rKpOIZ+dZ0nvbuYh9/q2NVlaDn24IOc08spPRHoYno/EZMwE6Nyui+xFAeqQNUB9BV+yTl6jo3YhVdNAgTw1Ygy8GFOZzZOlYGqAhSH9Sbi7IRcx3xcqdpp+h4s/Yxhaf0nPsOzZvZVgH7EmmQcTkbiVk0wmdpgXM0xtR0b2gEUOwkmeibjVdjdIphM/XvsTIsXGI7bRb7KGIqdrEtGcXCn4HWbgCLOBUxO9k1bTBmgo/g6OViAWHciC3E4OTiCb1pl6A+MTkZjEetOJEpCVosuYUKrgB6hdzLqg8edoEG0myiSIffQvw6gds9Ih1jfdozGM9QNKFH7LzFVhbHTVLRsXwZoBK617LGeQVPfzQBFQ7yBbThYL0Ztre+wHgEqGnUXaQZoB9biIYak37R2xBLFT9NGo4z8gE11AEXvCiC9knKMET8VBClLabNvscnYbMgT9MXfed9FDEXPir6TSczIMxoAldFelu6zmJbzFb2tyyRZBGgF9uaM7jeMrUF7zEhRxYtoz5pyVPqhyA/6McJ8lPP9H/aLAI1H9JpMTqTbRbYuo70q3Q/wSc73MuyvSlk2fi5JDTUugvkJMVIYV59MYobOZupIwa+5b6fTfJ29WozIwCCcx6Jcf/tHp53C2LjLldiXIlalu+Df6PqqHUAxpM/KuRmH39O6Md0n8WUlipxCO4A+T/VjTGImbh+ZVKW7Els7gCqddqLQDaiKvTd3loUlItFobAAAAABJRU5ErkJggg=="/><?= $row['kloset']; ?></li>
  <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAT1JREFUWEftlzFOwzAUhr8KGMoVOjKjHoHeoQsbQ4UYOATtKdqBqUtVqYeAC7CzdOoZQCAkkKW4elixX1U7biI5U6To/e/z/z87SY+WXb2W8VCAtERCDk1FsbzXNEPPVc0Q0K9QThWtqtlZoFlMTqL2SXP9UIcS8fyTqe3dWaBQZCPgplr7K/ASsDNZZNrxYBsZ8NARkWWXGYDsQCeP7BZYNbG1hKbpsXZ71M3GA7BoGMbK3wPPspcLdA28AeeZgL6AIfBu+7lAG2CcCca2WQJ3PqAdMMgMtAWufEA/wFlmINPzwgckD66cXPvRcWeoAFUxFIe0efQ69AH0terEzz+BS98umwMTuQ0TN3flvqtXx6MPSBao3y5HwKqah37Clt+gOvdVe0tkwoFWzNARicSXpFp5PIn7UkumGCn0Bz9APSWCn61nAAAAAElFTkSuQmCC"/><?= $row['bantal']; ?></li>
</ul>

        </div>
                        </div>
                        <!-- kanan -->
                        <div class="col-4 border">
                                <h3 class="mt-4">Rp. <?= $row['harga']; ?>/bulan</h3>
                                <h4><?= $row['stok']; ?> kamar tersisa</h4>
                                <div class="d-flex justify-content-center mt-4">
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
                                <p class="align-content-center"><i class='bx bx-info-circle mt-4 mr-2'></i>Silahkan klik button "Tanya di WA" untuk mengetahui informasi mengenai kost ini.</p>
                                <div class="d-flex justify-content-around fs-4">
                                     <a href="<?= BASEURL ?>/lantai/delete/<?= $row['id_lantai'] ?>" onclick="return confirm('Yakin ingin dihapus dek😏👿💀?');">
                                    <i class='bx bxs-trash'></i></a>
                                    <a href="<?= BASEURL ?>/lantai/editTempat/<?= $row['id_lantai'] ?>">
    <i class='bx bxs-edit'></i>
</a>

</a>

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
                    <br>
                        <!-- Content Column -->
                       
    </div>
    