

<div class="w3-container">
  <h1 class="w3-text-teal">Welcome To GatePass Administration System</h1>
  <?php
  echo"<h3>Selamat Datang <? <b><u>$_SESSION[nama_petugas]</u></b> Anda Login Sebagai <u>$_SESSION[level]</u>.</h3>";
  ?>
  <p>&nbsp;</p>
<div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-credit-card fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading w3-badge w3-red">
                    <?php $sql = "SELECT * FROM gatepass"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
                      </p>
                    <p class="announcement-text"><strong>Gatepass</strong></p>
                  </div>
                </div>
              </div>
              <a href="media.php?module=gatepass">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
		  <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-suitcase fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading w3-badge w3-red">
                    <?php $sql = "SELECT * FROM Petugas"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
                    </p>
                    <p class="announcement-text"><strong>Petugas</strong></p>
                  </div>
                </div>
              </div>
              <a href="media.php?module=petugas">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                     <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-user-plus fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="w3-badge w3-red announcement-heading">
                    <?php $sql = "SELECT * FROM pemilik"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
                    </p>
                    <p class="announcement-text"><strong>Pemilik</strong></p>
                  </div>
                </div>
              </div>
              <a href="media.php?module=pemilik">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                     <strong>Details</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <i class="fa fa-institution fa-5x"></i>
                </div>
                <div class="col-xs-6 text-right">
                  <p class="announcement-heading w3-badge w3-red">
                  <?php $sql = "SELECT * FROM lokasi"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
                      </p>
                  <p class="announcement-text"><strong>Lokasi</strong></p>
                </div>
              </div>
            </div>
            <a href="media.php?module=lokasi">
              <div class="panel-footer announcement-bottom">
                <div class="row">
                  <div class="col-xs-6">
                   <strong>Details</strong>
                  </div>
                  <div class="col-xs-6 text-right">
                    <i class="fa fa-arrow-circle-right"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div><!-- /.row -->
<!--next row-->
<div class="row">
        
        <div class="col-lg-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <i class="fa fa-calendar fa-5x"></i>
                </div>
                <div class="col-xs-6 text-right">
                  <p class="announcement"><h1><?php $today= date("Y"); echo $today; ?></h1></p>
                  <p class="announcement-text"><strong>Year</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
<!--row ends here-->
<!--next row-->
<div class="row">
        
        <div class="col-lg-3">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <i class="fa fa-car fa-5x"></i>
                </div>
                <div class="col-xs-6 text-right">
                  <p class="announcement-heading w3-badge w3-red">
                  <?php $sql = "SELECT * FROM jenis_kendaraan"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
                  </p>
                  <p class="announcement-text"><strong>Jenis Kend.</strong></p>
                </div>
              </div>
            </div>
            <a href="media.php?module=jenis">
              <div class="panel-footer announcement-bottom">
                <div class="row">
                  <div class="col-xs-6">
                   <strong>Details</strong>
                  </div>
                  <div class="col-xs-6 text-right">
                    <i class="fa fa-arrow-circle-right"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <i class="fa fa-automobile fa-5x"></i>
                </div>
                <div class="col-xs-6 text-right">
                  <p class="announcement-heading w3-badge w3-red">
                  <?php $sql = "SELECT * FROM kendaraan"; 
                      $query = mysql_query($sql);
                      $data = array();
                      while(($row = mysql_fetch_array($query)) != null){
                           $data[] = $row; 
                      }
                      $count = count($data);
                      echo "$count";
                      ?>
                  </p>
                  <p class="announcement-text"><strong>Kendaraan</strong></p>
                </div>
              </div>
            </div>
            <a href="media.php?module=kendaraan">
              <div class="panel-footer announcement-bottom">
                <div class="row">
                  <div class="col-xs-6">
                   <strong>Details</strong>
                  </div>
                  <div class="col-xs-6 text-right">
                    <i class="fa fa-arrow-circle-right"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>