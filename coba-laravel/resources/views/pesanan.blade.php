<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-fluid {
  background-color: #97a3a8;
  padding: 40px 20px 15px 20px;
  border: 1px solid #9eb5c1;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.keranjang {
  background-color: #c7ece9;
  padding: 5px 20px 15px 20px;
  border: 1px solid #0d0e0e;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #90dfed;
  color: rgb(5, 5, 5);
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #0d0e0e;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #4d6cd2;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Detail Pesanan</h2>
<div class="row">
  <div class="col-75">
    <div class="container-fluid">
      <form action="/action_page.php">
        <div class="mb-10">
          <label for="formFile" class="form-label">Upload Desain </label>
          <input class="form-control" type="file" id="formFile">
        </div>
        <br>
        <br>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Catatan Pesanan" id="floatingTextarea"></textarea>
          <label for="floatingTextarea"></label>
        </div>
  </div>
  <h3>Data Pemesanan</h3>
        <div class="row">
          <div class="col-75">
            <div class="btn-group">
            </div>
            <label for="city"><i class="fa fa-institution"></i> Nama</label>
            <input type="text" id="city" name="Nama" placeholder="piw piw">
            <label for="email"><i class="fa fa-address-card-o"></i> Alamat</label>
            <input type="text" id="email" name="alamat" placeholder="Jalan Paingan">
            <label for="adr"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="adr" name="alamat" placeholder="Elvira@example.com">
            <label for="city"><i class="fa fa-number"></i>Nomor Telepon</label>
            <input type="text" id="city" name="kodepos" placeholder="0897793528">
            </div>
        
  <div class="col-25">
    <div class="keranjang">
      <h4>Keranjang <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p>Undangan<span class="price">200.000</span></p>
      <p>Poster<span class="price">50.000</span></p>
      <p>Stiker<span class="price">250.000</span></p>
      <p>Amplop<span class="price">400.000</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>800.000</b></span></p>
      <input type="submit" value="Submit Pesanan" class="btn">
    </div>
  </div>
</div>
</body>
</html>
