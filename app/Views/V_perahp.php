

       <?php 
                   
                   foreach($kriteria as $h){ 
                    if($h->crit_id=='c1'){$c1c1=$h->p1;} if($h->crit_id=='c2'){$c1c2=$h->p1;} if($h->crit_id=='c3'){$c1c3=$h->p1;} if($h->crit_id=='c4'){$c1c4=$h->p1;} if($h->crit_id=='c5'){$c1c5=$h->p1;}  if($h->crit_id=='c6'){$c1c6=$h->p1;}
                    if($h->crit_id=='c1'){$c2c1=$h->p2;} if($h->crit_id=='c2'){$c2c2=$h->p2;} if($h->crit_id=='c3'){$c2c3=$h->p2;} if($h->crit_id=='c4'){$c2c4=$h->p2;} if($h->crit_id=='c5'){$c2c5=$h->p2;}  if($h->crit_id=='c6'){$c2c6=$h->p2;}
                    if($h->crit_id=='c1'){$c3c1=$h->p3;} if($h->crit_id=='c2'){$c3c2=$h->p3;} if($h->crit_id=='c3'){$c3c3=$h->p3;} if($h->crit_id=='c4'){$c3c4=$h->p3;} if($h->crit_id=='c5'){$c3c5=$h->p3;}  if($h->crit_id=='c6'){$c3c6=$h->p3;}
                    if($h->crit_id=='c1'){$c4c1=$h->p4;} if($h->crit_id=='c2'){$c4c2=$h->p4;} if($h->crit_id=='c3'){$c4c3=$h->p4;} if($h->crit_id=='c4'){$c4c4=$h->p4;} if($h->crit_id=='c5'){$c4c5=$h->p4;}  if($h->crit_id=='c6'){$c4c6=$h->p4;}
                    if($h->crit_id=='c1'){$c5c1=$h->p5;} if($h->crit_id=='c2'){$c5c2=$h->p5;} if($h->crit_id=='c3'){$c5c3=$h->p5;} if($h->crit_id=='c4'){$c5c4=$h->p5;} if($h->crit_id=='c5'){$c5c5=$h->p5;}  if($h->crit_id=='c6'){$c5c6=$h->p5;}
                    if($h->crit_id=='c1'){$c6c1=$h->p6;} if($h->crit_id=='c2'){$c6c2=$h->p6;} if($h->crit_id=='c3'){$c6c3=$h->p6;} if($h->crit_id=='c4'){$c6c4=$h->p6;} if($h->crit_id=='c5'){$c6c5=$h->p6;}  if($h->crit_id=='c6'){$c6c6=$h->p6;}
                    
                  ?>
                  
            <?php } 
              $sumc1=($c1c1+$c1c2+$c1c3+$c1c4+$c1c5+$c1c6);
              $sumc2=($c2c1+$c2c2+$c2c3+$c2c4+$c2c5+$c2c6);
              $sumc3=($c3c1+$c3c2+$c3c3+$c3c4+$c3c5+$c3c6);
              $sumc4=($c4c1+$c4c2+$c4c3+$c4c4+$c4c5+$c4c6);
              $sumc5=($c5c1+$c5c2+$c5c3+$c5c4+$c5c5+$c5c6);
              $sumc6=($c6c1+$c6c2+$c6c3+$c6c4+$c6c5+$c6c6);
              
              $norc1c1=$c1c1/$sumc1; $norc1c2=$c1c2/$sumc1; $norc1c3=$c1c3/$sumc1; $norc1c4=$c1c4/$sumc1; $norc1c5=$c1c5/$sumc1; $norc1c6=$c1c6/$sumc1; 
              $norc2c1=$c2c1/$sumc2; $norc2c2=$c2c2/$sumc2; $norc2c3=$c2c3/$sumc2; $norc2c4=$c2c4/$sumc2; $norc2c5=$c2c5/$sumc2; $norc2c6=$c2c6/$sumc2; 
              $norc3c1=$c3c1/$sumc3; $norc3c2=$c3c2/$sumc3; $norc3c3=$c3c3/$sumc3; $norc3c4=$c3c4/$sumc3; $norc3c5=$c3c5/$sumc3; $norc3c6=$c3c6/$sumc3; 
              $norc4c1=$c4c1/$sumc4; $norc4c2=$c4c2/$sumc4; $norc4c3=$c4c3/$sumc4; $norc4c4=$c4c4/$sumc4; $norc4c5=$c4c5/$sumc4; $norc4c6=$c4c6/$sumc4; 
              $norc5c1=$c5c1/$sumc5; $norc5c2=$c5c2/$sumc5; $norc5c3=$c5c3/$sumc5; $norc5c4=$c5c4/$sumc5; $norc5c5=$c5c5/$sumc5; $norc5c6=$c5c6/$sumc5; 
              $norc6c1=$c6c1/$sumc6; $norc6c2=$c6c2/$sumc6; $norc6c3=$c6c3/$sumc6; $norc6c4=$c6c4/$sumc6; $norc6c5=$c6c5/$sumc6; $norc6c6=$c6c6/$sumc6;  

              $norsumc1=($norc1c1+$norc1c2+$norc1c3+$norc1c4+$norc1c5+$norc1c6);
              $norsumc2=($norc2c1+$norc2c2+$norc2c3+$norc2c4+$norc2c5+$norc2c6);
              $norsumc3=($norc3c1+$norc3c2+$norc3c3+$norc3c4+$norc3c5+$norc3c6);
              $norsumc4=($norc4c1+$norc4c2+$norc4c3+$norc4c4+$norc4c5+$norc4c6);
              $norsumc5=($norc5c1+$norc5c2+$norc5c3+$norc5c4+$norc5c5+$norc5c6);
              $norsumc6=($norc6c1+$norc6c2+$norc6c3+$norc6c4+$norc6c5+$norc6c6);

              $ev1=($norc1c1+$norc2c1+$norc3c1+$norc4c1+$norc5c1+$norc6c1)/6;
              $ev2=($norc1c2+$norc2c2+$norc3c2+$norc4c2+$norc5c2+$norc6c2)/6;
              $ev3=($norc1c3+$norc2c3+$norc3c3+$norc4c3+$norc5c3+$norc6c3)/6;
              $ev4=($norc1c4+$norc2c4+$norc3c4+$norc4c4+$norc5c4+$norc6c4)/6;
              $ev5=($norc1c5+$norc2c5+$norc3c5+$norc4c5+$norc5c5+$norc6c5)/6;
              $ev6=($norc1c6+$norc2c6+$norc3c6+$norc4c6+$norc5c6+$norc6c6)/6;

              $pev=($sumc1*$ev1)+($sumc2*$ev2)+($sumc3*$ev3)+($sumc4*$ev4)+($sumc5*$ev5)+($sumc6*$ev6);
              //ubah
              $nk=6;
              $rindx=1.24;
              //ubah
              $cindex=($pev-$nk)/($nk-1);
              $cratio=$cindex/$rindx;
              if($cratio<0.1){
                echo "
                <div class='alert alert-success'>
                  <h5><i class='icon fas fa-check'></i>AHP PASSED</h5>
                  Perhitungan AHP Konsisten.
                </div>";
              }else{
                echo "
                <div class='alert alert-danger'>
                  <h5><i class='icon fas fa-ban'></i>AHP FAILED</h5>
                  Perhitungan AHP Tidak Konsisten, Silahkan Lakukan Pembobotan Kriteria Yang Konsisten Pada Menu <a href=".base_url('pemahp')." >Pembobotan AHP.</a>
                </div>
                ";
              }
            
            ?>

            <!----------------------card-->

            <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header bg-dark">
                <h5 class="card-title">Matriks AHP</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table class="table table-bordered table-striped" style="text-align: center;">
                <tr>
                  <th rowspan="4">Nama Kriteria</th>
                </tr>
                <tr>
                  <td></td>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                  <th>C6</th>
                </tr>
                <tr>
                <td></td>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c1'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c2'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c3'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c4'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c5'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c6'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                </tr>
                <tr>
                
                </tr>
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c1'){echo $a->nama;}}?></td>
                  <td>C1</td>
                  <td class="table-primary"><?php echo number_format((float)$c1c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c2c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c3c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c4c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c5c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c6c1, 4, '.', ''); ?></td>
                </tr>
                <tr>
                
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c2'){echo $a->nama;}}?></td>
                  <td>C2</td>
                  <td><?php echo number_format((float)$c1c2, 4, '.', ''); ?></td>
                  <td class="table-primary"><?php echo number_format((float)$c2c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c3c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c4c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c5c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c6c2, 4, '.', ''); ?></td>
                </tr>
                <tr>
                
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c3'){echo $a->nama;}}?></td>
                  <td>C3</td>
                  <td><?php echo number_format((float)$c1c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c2c3, 4, '.', ''); ?></td>
                  <td class="table-primary"><?php echo number_format((float)$c3c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c4c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c5c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c6c3, 4, '.', ''); ?></td>
                </tr>
                <tr>
                
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c4'){echo $a->nama;}}?></td>
                  <td>C4</td>
                  <td><?php echo number_format((float)$c1c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c2c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c3c4, 4, '.', ''); ?></td>
                  <td class="table-primary"><?php echo number_format((float)$c4c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c5c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c6c4, 4, '.', ''); ?></td>
                </tr>
                <tr>
                
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c5'){echo $a->nama;}}?></td>
                  <td>C5</td>
                  <td><?php echo number_format((float)$c1c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c2c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c3c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c4c5, 4, '.', ''); ?></td>
                  <td class="table-primary"><?php echo number_format((float)$c5c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c6c5, 4, '.', ''); ?></td>
                </tr>
                <tr>
                
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c6'){echo $a->nama;}}?></td>
                  <td>C6</td>
                  <td><?php echo number_format((float)$c1c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c2c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c3c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c4c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$c5c6, 4, '.', ''); ?></td>
                  <td class="table-primary"><?php echo number_format((float)$c6c6, 4, '.', ''); ?></td>
                </tr>
                
                <tr>
                  <td colspan='9'></td>
                </tr>
                <tr>
                  <th>SUM</th>
                  <td></td>
                  <th><?php echo number_format((float)$sumc1, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$sumc2, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$sumc3, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$sumc4, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$sumc5, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$sumc6, 4, '.', ''); ?></th>
                </tr>
              </table>  

              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!----------------------card-->

        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header bg-dark">
                <h5 class="card-title">Normalisasi Matriks AHP</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table class="table table-bordered table-striped" style="text-align: center;">
                <tr>
                  <th rowspan="4">Nama Kriteria</th>
                </tr>
                <tr>
                <td></td>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                  <th>C6</th>
                </tr>
                <tr>
                <td></td>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c1'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c2'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c3'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c4'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c5'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                  <th><?php  foreach($kriteria as $a){ if($a->crit_id=='c6'){ if($a->cosben==0){ echo "COST"; }else{echo "BENEFIT";}}}?></th>
                </tr>
                <tr>
               
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c1'){echo $a->nama;}}?></td>
                  <td>C1</td>
                  <td><?php echo number_format((float)$norc1c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc2c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc3c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc4c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc5c1, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc6c1, 4, '.', ''); ?></td>
                </tr>
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c2'){echo $a->nama;}}?></td>
                  <td>C2</td>
                  <td><?php echo number_format((float)$norc1c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc2c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc3c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc4c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc5c2, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc6c2, 4, '.', ''); ?></td>
                </tr>
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c3'){echo $a->nama;}}?></td>
                  <td>C3</td>
                  <td><?php echo number_format((float)$norc1c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc2c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc3c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc4c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc5c3, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc6c3, 4, '.', ''); ?></td>
                </tr>
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c4'){echo $a->nama;}}?></td>
                  <td>C4</td>
                  <td><?php echo number_format((float)$norc1c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc2c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc3c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc4c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc5c4, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc6c4, 4, '.', ''); ?></td>
                </tr>
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c5'){echo $a->nama;}}?></td>
                  <td>C5</td>
                  <td><?php echo number_format((float)$norc1c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc2c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc3c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc4c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc5c5, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc6c5, 4, '.', ''); ?></td>
                </tr>
                <tr>
                  <td><?php foreach($kriteria as $a){  if($a->crit_id=='c6'){echo $a->nama;}}?></td>
                  <td>C6</td>
                  <td><?php echo number_format((float)$norc1c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc2c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc3c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc4c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc5c6, 4, '.', ''); ?></td>
                  <td><?php echo number_format((float)$norc6c6, 4, '.', ''); ?></td>
                </tr>
                
                  <td colspan='9'></td>
                </tr>
                <tr>
                  <th>SUM</th>
                  <td></td>
                  <th><?php echo number_format((float)$norsumc1, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$norsumc2, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$norsumc3, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$norsumc4, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$norsumc5, 4, '.', ''); ?></th>
                  <th><?php echo number_format((float)$norsumc6, 4, '.', ''); ?></th>
                </tr>
              </table>  

              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>




<!-- START ALERTS AND CALLOUTS -->
<div class="row">
  <div class="col-md-6">
    <div class="card card-default collapsed-card">
      <div class="card-header bg-dark">
        <h3 class="card-title">
        <i class="fas fa-bars"></i>
          Eigen Vector
        </h3>
        <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        
      <table class="table table-bordered table-striped" style="text-align: center;">

          <tr>
            <th>Nama Kriteria</th>
            <th>Nilai Kriteria</th>
          </tr>
          <tbody>
         
          <tr>
            <th><?php foreach($kriteria as $a){  if($a->crit_id=='c1'){echo $a->nama;}}?></th>
            <td><?php echo number_format((float)$ev1, 4, '.', ''); ?></td>  
          </tr>
          <tr>
            <th><?php foreach($kriteria as $a){  if($a->crit_id=='c2'){echo $a->nama;}}?></th>
            <td><?php echo number_format((float)$ev2, 4, '.', ''); ?></td>  
          </tr>
          <tr>
            <th><?php foreach($kriteria as $a){  if($a->crit_id=='c3'){echo $a->nama;}}?></th>
            <td><?php echo number_format((float)$ev3, 4, '.', ''); ?></td>  
          </tr>
          <tr>
            <th><?php foreach($kriteria as $a){  if($a->crit_id=='c4'){echo $a->nama;}}?></th>
            <td><?php echo number_format((float)$ev4, 4, '.', ''); ?></td>  
          </tr>
          <tr>
            <th><?php foreach($kriteria as $a){  if($a->crit_id=='c5'){echo $a->nama;}}?></th>
            <td><?php echo number_format((float)$ev5, 4, '.', ''); ?></td>  
          </tr>
          <tr>
            <th><?php foreach($kriteria as $a){  if($a->crit_id=='c6'){echo $a->nama;}}?></th>
            <td><?php echo number_format((float)$ev6, 4, '.', ''); ?></td>  
          </tr>
          <tr>
            <th colspan="2"></th>  
          </tr>
          <tr>
            <th>SUM</th>
            <td><?php $llt=$ev1+$ev2+$ev3+$ev4+$ev5+$ev6; echo number_format((float)$llt, 4, '.', ''); ?></td>  
          </tr>
          </tbody>
          </table>
          
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          
          

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->


  <div class="col-md-6">
    <div class="card card-default collapsed-card">
      <div class="card-header bg-dark">
        <h3 class="card-title">
        
          <i class="fas fa-check-circle"></i>
          Cek Pembobotan
          
        </h3>
        <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        
      <table class="table table-bordered table-striped" style="text-align: center;">


        <tbody>
        <tr>
          <th>PRINCIPAL EIGEN VALUE</th>
          <td><?php echo number_format((float)$pev, 4, '.', ''); ?></td>
        </tr>
        <tr>
          <th>N KRITERIA</th>
          <td><?php echo number_format((float)$nk, 4, '.', ''); ?></td>  
        </tr>
        <tr>
          <th>RANDOM INDEX</th>
          <td><?php echo number_format((float)$rindx, 4, '.', ''); ?></td>  
        </tr>
        <tr>
          <th>CONSISTENCY INDEX</th>
          <td><?php echo number_format((float)$cindex, 4, '.', ''); ?></td> 
        </tr>
        <tr>
          <th>CONSISTENCY RATIO</th>
          <td><?php echo number_format((float)$cratio, 4, '.', ''); ?></td>  
        </tr>
        <tr>
          <th>CHECKER AHP</th>
          <td <?php if($cratio<0.1){echo "class='table-success'";}else{echo "class='table-danger'";}?>><?php if($cratio<0.1){echo "PASSED";}else{echo "FAILED";}?></td>  
        </tr>
        </tbody>
        </table>

 
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<!-- END ALERTS AND CALLOUTS -->









