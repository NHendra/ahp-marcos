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

              
              
            ?>
        

        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fas fa-database"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Data Alternatif</span>
              <span class="info-box-number">
              
              <?php 
                     $total = 0;
                     foreach($alternatif as $i){ 
                       $total=$total+1
                      
                      
                    ?>
                    
              <?php } ?>
              <?php echo $total ?>
              
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon <?php if($cratio<0.1){echo'bg-green';}else{echo'bg-red';} ?>"><i class="fas fa-<?php if($cratio<0.1){echo'check';}else{echo'times';} ?>"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">AHP</span>
              <span class="info-box-number">
              <?php if($cratio<0.1){echo'PASSED';}else{echo'FAILED';} ?>
              
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        

        </div>


        <div class="card">
  <div class="card-body">

      <div class="form-group">
      <span align='center'><h1>Sistem Pendukung Keputusan Pemilihan Aplikasi Video Conference Metode AHP-MARCOS</h1></span><br>

          <table id="data_pi" class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                      <th>Kode Alternatif</th>
                      <th>Nama Alternatif</th>
                      <th><?php foreach($kriteria as $a){if($a->crit_id=='c1'){ echo $a->nama; if($a->cosben=='0'){echo ' (COST)';}else{echo ' (BENEFIT)';}}}?></th>
                      <th><?php foreach($kriteria as $a){if($a->crit_id=='c2'){ echo $a->nama; if($a->cosben=='0'){echo ' (COST)';}else{echo ' (BENEFIT)';}}}?></th>
                      <th><?php foreach($kriteria as $a){if($a->crit_id=='c3'){ echo $a->nama; if($a->cosben=='0'){echo ' (COST)';}else{echo ' (BENEFIT)';}}}?></th>
                      <th><?php foreach($kriteria as $a){if($a->crit_id=='c4'){ echo $a->nama; if($a->cosben=='0'){echo ' (COST)';}else{echo ' (BENEFIT)';}}}?></th>
                      <th><?php foreach($kriteria as $a){if($a->crit_id=='c5'){ echo $a->nama; if($a->cosben=='0'){echo ' (COST)';}else{echo ' (BENEFIT)';}}}?></th>
                      <th><?php foreach($kriteria as $a){if($a->crit_id=='c6'){ echo $a->nama; if($a->cosben=='0'){echo ' (COST)';}else{echo ' (BENEFIT)';}}}?></th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php 

                   foreach($alternatif as $a){                                   
                  ?>
                      <tr>
                      <td><?php echo $a->kode; ?></td>
                      <td><?php echo $a->nama; ?></td>
                      <td><?php echo $a->c1; ?></td>
                      <td><?php echo $a->c2; ?></td>
                      <td><?php echo $a->c3; ?></td>
                      <td><?php echo $a->c4; ?></td>
                      <td><?php echo $a->c5; ?></td>
                      <td><?php echo $a->c6; ?></td>
                      </tr>             
                <?php } ?>
                    
                  </tbody>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <?php
                      $db      = \Config\Database::connect();
                      $builder = $db->table('alternatif');
                      ?>
                    </tr>
                  <tr>
                      <td>Nilai Minimum</td>
                      <td></td>
                      <td><?php $builder->selectMin('c1'); $query = $builder->get(); foreach($query->getResult() as $row){$minc1=$row->c1;} echo $minc1; ?></td>
                      <td><?php $builder->selectMin('c2'); $query = $builder->get(); foreach($query->getResult() as $row){$minc2=$row->c2;} echo $minc2; ?></td>
                      <td><?php $builder->selectMin('c3'); $query = $builder->get(); foreach($query->getResult() as $row){$minc3=$row->c3;} echo $minc3; ?></td>
                      <td><?php $builder->selectMin('c4'); $query = $builder->get(); foreach($query->getResult() as $row){$minc4=$row->c4;} echo $minc4; ?></td>
                      <td><?php $builder->selectMin('c5'); $query = $builder->get(); foreach($query->getResult() as $row){$minc5=$row->c5;} echo $minc5; ?></td>
                      <td><?php $builder->selectMin('c6'); $query = $builder->get(); foreach($query->getResult() as $row){$minc6=$row->c6;} echo $minc6; ?></td>
                    </tr>
                    <tr>
                      <td>Nilai Maksimum</td>
                      <td></td>
                      <td><?php $builder->selectMax('c1'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc1=$row->c1;} echo $maxc1; ?></td>
                      <td><?php $builder->selectMax('c2'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc2=$row->c2;} echo $maxc2; ?></td>
                      <td><?php $builder->selectMax('c3'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc3=$row->c3;} echo $maxc3; ?></td>
                      <td><?php $builder->selectMax('c4'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc4=$row->c4;} echo $maxc4; ?></td>
                      <td><?php $builder->selectMax('c5'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc5=$row->c5;} echo $maxc5; ?></td>
                      <td><?php $builder->selectMax('c6'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc6=$row->c6;} echo $maxc6; ?></td>
                      </tr>
                  </table>
      
      </div>

  </div>
</div>









  