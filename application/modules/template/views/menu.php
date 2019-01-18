      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ternak Code</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?php
              if ($_SESSION['level'] == 'admin') {
                echo '
                <li><a href="'.base_url().'home">Home</a></li>
                <li><a href="'.base_url().'kriteria">Data Kriteria</a></li>
                <li><a href="'.base_url().'alternatif">Data Alternatif</a></li>
                <li><a href="'.base_url().'analisa">Analisa</a></li>
                <li><a href="'.base_url().'perhitungan">Perhitungan</a></li>
                <li><a href="'.base_url().'user">User</a></li>
                <li><a href="'.base_url().'logout">Logout</a></li>
                ';
              } else {
                echo '
                <li><a href="'.base_url().'analisa">Analisa</a></li>
                <li><a href="'.base_url().'perhitungan">Perhitungan</a></li>
                <li><a href="'.base_url().'logout">Logout</a></li>
                ';
              }
                ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>