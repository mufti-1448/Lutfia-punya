<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project.php">
    <link rel="stylesheet" href="about.css">

</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>pembelian online</h3>
            <label for="fname"><i class="fa fa-user"></i> jenis kartu</label>
            <input type="text" id="fname" name="firstname" placeholder="masukan nama">
            <label for="email"><i class="fa fa-envelope"></i> EMAIL</label>
            <input type="text" id="email" name="email" placeholder="masukan email">
            <label for="adr"><i class="fa fa-address-card-o"></i> UMUR</label>
            <input type="text" id="adr" name="address" placeholder="masukan umur">
            <label for="city"><i class="fa fa-institution"></i> ALAMAT</label>
            <input type="text" id="city" name="city" placeholder="masukan alamat">
</div>
</div>


          <div class= "col-50">
            <h3>PEMBAYARAN</h3>
            <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">jenis card</label>
            <input type="text" id="cname" name="cardname" placeholder="masukan jenis card">
            <label for="ccnum"> nomer credit card </label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="masukan nomer card">
            <label for="expmonth">tanggal-bulan</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="masukan tanggal-bulan">

            <div class="row">
              <div class="col-50">
                <label for="expyear">tahun pembelian</label>
                <input type="text" id="expyear" name="expyear" placeholder="masukan tahun">
              </div>
              <div class="col-50">
                <label for="cvv">jenis leptop yang akan di beli</label>
                <input type="text" id="cvv" name="cvv" placeholder="masukan jenis leptop">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  </div>
</div>
    
</body>
</html> 