<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ev Arkadaşı Arıyorum</title>

	<!--<link rel="stylesheet" type="text/css" href="lib/bootstrap/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/css/bs-override.css">
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">


	<script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Ev Arkadaşı Arıyorum.com</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Üye<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Giriş Yap</a></li>
            <li><a href="#">Panel</a></li>
            <li class="divider"></li>
            <li><a href="#">Çıkış Yap</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<!-- Arama Formlarý Bölümü -->
	<div class="container-fluid main-container">

		<h1 class="col-md-12" style="color:#FFF; text-align:center; margin-top:50px; positon:relative;">Yeni Arkadaşlarınız Sizleri Bekliyor</h1>
		
		<div style="clear:both;"></div>

		<form action="" method="POST" style="margin-top:30px; position:relative;">
			<div class="col-md-4 col-md-offset-2">

				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Evime Arkadaş Arıyorum</h3>
					</div>
					<div class="panel-body">

						<div class="col-md-6 padding-5">

							<input type="text" class="form-control" placeholder="İl" required>

						</div>

						<div class="col-md-6 padding-5">
							
							<input type="text" class="form-control" placeholder="İlçe" required>

						</div>

						<div class="col-md-6 padding-5">
							
							<input type="text" class="form-control" placeholder="Mahalle" required>

						</div>

						<div class="col-md-6 padding-5">

								<input type="text" class="form-control" placeholder="Boş Oda Sayısı" required>

						</div>


						<div class="col-md-6 padding-5">
							<select class="form-control" required>
								<option value "" disabled="disabled" required selected="selected">Cinsiyet</option>
								<option value="bay">Bay</option>
								<option value="bayan">Bayan</option>
							</select>
						</div>


						<div class="col-md-6 no-margin padding-5" required>
							<input class="btn btn-md btn-success col-md-12" type="submit" value="Kayıt Oluştur">
						</div>
					</div> <!-- pane body end -->
				</div><!-- panel end -->

			</div>

			<div class="col-md-4">

				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Yeni Evimi Arıyorum</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-6 padding-5">
							<select class="form-control" required>
								<option value "" disabled="disabled" required selected="selected">İl Seçiniz</option>
								<option value="istanbul">İstanbul</option>
								<option value="ankara">Ankara</option>
								<option value="izmir">İzmir</option>
								<option value="tokat">Tokat</option>
							</select>
						</div>

						<div class="col-md-6 padding-5">
							<select class="form-control" required>
								<option value "" disabled="disabled" required selected="selected">İlçe Seçiniz</option>
								<option value="istanbul">İstanbul</option>
								<option value="ankara">Ankara</option>
								<option value="izmir">İzmir</option>
								<option value="tokat">Tokat</option>
							</select>
						</div>

						<div class="col-md-6 padding-5">
							<select class="form-control" required>
								<option value "" disabled="disabled" required selected="selected">Mahalle Seçiniz</option>
								<option value="istanbul">İstanbul</option>
								<option value="ankara">Ankara</option>
								<option value="izmir">İzmir</option>
								<option value="tokat">Tokat</option>
							</select>
						</div>

						<div class="col-md-6 padding-5">
							<select class="form-control" required>
								<option value "" disabled="disabled" required selected="selected">Cinsiyet</option>
								<option value="bay">Bay</option>
								<option value="bayan">Bayan</option>
							</select>
						</div>


						<div class="col-md-12 no-margin padding-5" required>
							<input class="btn btn-md btn-danger col-md-12" type="submit" value="Ev Bul">
						</div>
					</div> <!-- panel body end -->
				</div>

			</div>





		</form>

		<div style="clear:both;"></div>


	</div> <!-- ana bölüm sonu -->

</body>
</html>