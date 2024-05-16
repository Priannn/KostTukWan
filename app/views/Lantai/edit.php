<h1 class="judul fw-bold ml-5 mt-5">Update Data User</h1>

<div class="home_content">
    <h1 class="judul fw-bold ml-4" style="font-family:Arial, Helvetica, sans-serif; text-align:center; margin-top:20px;">Update Data Tempat Wisata</h1>
      <form action="<?= BASEURL ?>/lantai/editTempat/<?=$data['lantai']['id_lantaia']?>" method="post" class="form-login" enctype="multipart/form-data" style="text-align: center;">
      <div class="inputBx mt-3 ml-5 mr-5">
                                <br>
                                <span></span>
                                <input type="text" class="form-control" id="nama_tempat" placeholder="Type Your Destination..." name="nama_tempat" value="<?=$data['tempatwisata']['nama_tempat']?>" style="width: 500px; height:50px; border-radius:15px;">
                            </div>
                            <div class="inputBx mt-3 ml-5 mr-5">
                                <br>
                                <span></span>
                                <input type="file" class="form-control" id="image" placeholder="Input Your Image..." name="image"style="width: 500px; height:50px;">
                            </div>
                            <div class="inputBx mt-3 ml-5 mr-5">
                                <br>
                                <span></span>
                                <input type="hidden" class="form-control" id="image" placeholder="Input Your Image..." name="old_image" value="<?=$data['tempatwisata']['image']?>">
                                <img src="http://localhost/<?= $data['tempatwisata']['image']; ?>" alt="" width="240px" style="margin-left: -260px;">
                            </div>
                            <div class="inputBx mt-3 ml-5 mr-5">
                                <br>
                                <span></span>
                                <input type="text" class="form-control" id="lokasi" placeholder="Type Your Location..." name="lokasi" value="<?=$data['tempatwisata']['lokasi']?>" required style="width: 500px; height:50px; border-radius:15px;">
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary mt-3 ml-5 mr-5" style="width: 500px; height:50px; border-radius:15px; border:skyblue; font-size:15px; font-weight: bold; background-color:skyblue;">Update</button>

                        </form>
</div>
                                        </form>