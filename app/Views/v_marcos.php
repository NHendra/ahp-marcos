

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
                <h5 class="card-title">Data Alternatif</h5>

                <div class="card-tools card-collapse">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="data_pi" class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                      <th>Kode Alternatif</th>
                      <th>(C1)</th>
                      <th>(C2)</th>
                      <th>(C3)</th>
                      <th>(C4)</th>
                      <th>(C5)</th>
                      <th>(C6)</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php 

                   foreach($alternatif as $a){                                   
                  ?>
                      <tr>
                      <td><?php echo $a->kode; ?></td>
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
                      <?php
                      $db      = \Config\Database::connect();
                      $builder = $db->table('alternatif');
                      ?>
                    </tr>
                  <tr>
                      <td>MIN</td>
                      <td><?php $builder->selectMin('c1'); $query = $builder->get(); foreach($query->getResult() as $row){$minc1=$row->c1;} echo $minc1; ?></td>
                      <td><?php $builder->selectMin('c2'); $query = $builder->get(); foreach($query->getResult() as $row){$minc2=$row->c2;} echo $minc2; ?></td>
                      <td><?php $builder->selectMin('c3'); $query = $builder->get(); foreach($query->getResult() as $row){$minc3=$row->c3;} echo $minc3; ?></td>
                      <td><?php $builder->selectMin('c4'); $query = $builder->get(); foreach($query->getResult() as $row){$minc4=$row->c4;} echo $minc4; ?></td>
                      <td><?php $builder->selectMin('c5'); $query = $builder->get(); foreach($query->getResult() as $row){$minc5=$row->c5;} echo $minc5; ?></td>
                      <td><?php $builder->selectMin('c6'); $query = $builder->get(); foreach($query->getResult() as $row){$minc6=$row->c6;} echo $minc6; ?></td>
                    </tr>
                    <tr>
                      <td>MAX</td>
                      <td><?php $builder->selectMax('c1'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc1=$row->c1;} echo $maxc1; ?></td>
                      <td><?php $builder->selectMax('c2'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc2=$row->c2;} echo $maxc2; ?></td>
                      <td><?php $builder->selectMax('c3'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc3=$row->c3;} echo $maxc3; ?></td>
                      <td><?php $builder->selectMax('c4'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc4=$row->c4;} echo $maxc4; ?></td>
                      <td><?php $builder->selectMax('c5'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc5=$row->c5;} echo $maxc5; ?></td>
                      <td><?php $builder->selectMax('c6'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc6=$row->c6;} echo $maxc6; ?></td>
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

        <?php if($cratio<0.1){ ?> 

        <!----------------------card-->

        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header bg-dark">
                <h5 class="card-title">Normalisasi MARCOS</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="data_pi2" class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                      <th>Kode Alternatif</th>
                      <th>Nama Alternatif</th>
                      <th>(C1)</th>
                      <th>(C2)</th>
                      <th>(C3)</th>
                      <th>(C4)</th>
                      <th>(C5)</th>
                      <th>(C6)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  
                      foreach($kriteria as $a){ if($a->crit_id=='c1'){ if($a->cosben==0){ $cb1=0; }else{$cb1=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c2'){ if($a->cosben==0){ $cb2=0; }else{$cb2=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c3'){ if($a->cosben==0){ $cb3=0; }else{$cb3=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c4'){ if($a->cosben==0){ $cb4=0; }else{$cb4=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c5'){ if($a->cosben==0){ $cb5=0; }else{$cb5=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c6'){ if($a->cosben==0){ $cb6=0; }else{$cb6=1;}}}
                    
                    ?>
                    <?php 
                    

                   foreach($alternatif as $a){                                   
                  ?>
                      <tr>
                      <td><?php echo $a->kode; ?></td>
                      <td><?php echo $a->nama; ?></td>
                      <td><?php if($cb1==0){ echo number_format((float) $minc1/$a->c1, 4, '.', ''); }else{ echo number_format((float) $a->c1/$maxc1, 4, '.', ''); } ?></td>
                      <td><?php if($cb2==0){ echo number_format((float) $minc2/$a->c2, 4, '.', ''); }else{ echo number_format((float) $a->c2/$maxc2, 4, '.', ''); } ?></td>
                      <td><?php if($cb3==0){ echo number_format((float) $minc3/$a->c3, 4, '.', ''); }else{ echo number_format((float) $a->c3/$maxc3, 4, '.', ''); } ?></td>
                      <td><?php if($cb4==0){ echo number_format((float) $minc4/$a->c4, 4, '.', ''); }else{ echo number_format((float) $a->c4/$maxc4, 4, '.', ''); } ?></td>
                      <td><?php if($cb5==0){ echo number_format((float) $minc5/$a->c5, 4, '.', ''); }else{ echo number_format((float) $a->c5/$maxc5, 4, '.', ''); } ?></td>
                      <td><?php if($cb6==0){ echo number_format((float) $minc6/$a->c6, 4, '.', ''); }else{ echo number_format((float) $a->c6/$maxc6, 4, '.', ''); } ?></td>
                      </tr>             
                <?php } ?>
                    
                  </tbody>
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
                <h5 class="card-title">Perhitungan AHP-MARCOS</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="data_pi3" class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                      <th>Kode Alternatif</th>
                      <th>Nama Alternatif</th>
                      <th>(C1)</th>
                      <th>(C2)</th>
                      <th>(C3)</th>
                      <th>(C4)</th>
                      <th>(C5)</th>
                      <th>(C6)</th>
                      <th>SUM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  
                      foreach($kriteria as $a){ if($a->crit_id=='c1'){ if($a->cosben==0){ $cb1=0; }else{$cb1=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c2'){ if($a->cosben==0){ $cb2=0; }else{$cb2=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c3'){ if($a->cosben==0){ $cb3=0; }else{$cb3=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c4'){ if($a->cosben==0){ $cb4=0; }else{$cb4=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c5'){ if($a->cosben==0){ $cb5=0; }else{$cb5=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c6'){ if($a->cosben==0){ $cb6=0; }else{$cb6=1;}}}
                    
                    ?>
                    <?php 
                    
                    $no = 0;
                   foreach($alternatif as $a){                                   
                  ?>
                      <tr>
                      <td><?php echo $a->kode; ?></td>
                      <td><?php echo $a->nama; ?></td>
                      <td><?php if($cb1==0){ echo number_format((float) $var1[$no]=($minc1/$a->c1)*$ev1, 4, '.', ''); }else{ echo number_format((float) $var1[$no]=($a->c1/$maxc1)*$ev1, 4, '.', ''); } ?></td>
                      <td><?php if($cb2==0){ echo number_format((float) $var2[$no]=($minc2/$a->c2)*$ev2, 4, '.', ''); }else{ echo number_format((float) $var2[$no]=($a->c2/$maxc2)*$ev2, 4, '.', ''); } ?></td>
                      <td><?php if($cb3==0){ echo number_format((float) $var3[$no]=($minc3/$a->c3)*$ev3, 4, '.', ''); }else{ echo number_format((float) $var3[$no]=($a->c3/$maxc3)*$ev3, 4, '.', ''); } ?></td>
                      <td><?php if($cb4==0){ echo number_format((float) $var4[$no]=($minc4/$a->c4)*$ev4, 4, '.', ''); }else{ echo number_format((float) $var4[$no]=($a->c4/$maxc4)*$ev4, 4, '.', ''); } ?></td>
                      <td><?php if($cb5==0){ echo number_format((float) $var5[$no]=($minc5/$a->c5)*$ev5, 4, '.', ''); }else{ echo number_format((float) $var5[$no]=($a->c5/$maxc5)*$ev5, 4, '.', ''); } ?></td>
                      <td><?php if($cb6==0){ echo number_format((float) $var6[$no]=($minc6/$a->c6)*$ev6, 4, '.', ''); }else{ echo number_format((float) $var6[$no]=($a->c6/$maxc6)*$ev6, 4, '.', ''); } ?></td>
                      <td><?php echo number_format((float) $summarcos[$no]=$var1[$no]+$var2[$no]+$var3[$no]+$var4[$no]+$var5[$no]+$var6[$no], 4, '.', '');  ?></td>
                      </tr> 
                      <?php $no++  ?>            
                <?php  } ?>
                    
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
                      <td></td>

                    </tr>
                  <tr>
                      <td>IDEAL (MAX)</td>
                      <td></td>
                      <td><?php echo number_format((float) max($var1), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) max($var2), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) max($var3), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) max($var4), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) max($var5), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) max($var6), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) $maxsummar=max($var1)+max($var2)+max($var3)+max($var4)+max($var5)+max($var6), 4, '.', ''); ?></td>
                    </tr>
                    <tr>
                      <td>ANTI IDEAL (MIN)</td>
                      <td></td>
                      <td><?php echo number_format((float) min($var1), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) min($var2), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) min($var3), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) min($var4), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) min($var5), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) min($var6), 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) $minsummar=min($var1)+min($var2)+min($var3)+min($var4)+min($var5)+min($var6), 4, '.', ''); ?></td>
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





    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-dark">
                <h5 class="card-title"> RANKING AHP-MARCOS</h5>

              </div>
              <!-- /.card-header -->
              <div class="card-body">

              <table id="data_pi4" class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Alternatif</th>
                      <th>Nama Alternatif</th>
                      <th>Ki-</th>
                      <th>Ki+</th>
                      <th>f(Ki-)</th>
                      <th>f(Ki+)</th>
                      <th>f(K_i)</th>
                      <th>Ranking</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php 

                    $no = 0;
                   foreach($alternatif as $a){ 
                                                       
                  ?>
                     

                      <?php  number_format((float) $sumkimin[$no]=$summarcos[$no]/$minsummar, 4, '.', ''); ?>
                      <?php  number_format((float) $sumkimax[$no]=$summarcos[$no]/$maxsummar, 4, '.', ''); ?>
                      <?php  number_format((float) $fkimin[$no]=$sumkimin[$no]/($sumkimin[$no]+$sumkimax[$no]), 4, '.', ''); ?>
                      <?php  number_format((float) $fkimax[$no]=$sumkimax[$no]/($sumkimin[$no]+$sumkimax[$no]), 4, '.', ''); ?>
                      <?php  number_format((float) $rankmarcos[$no]=($sumkimin[$no]+$sumkimax[$no])/(1+((1-$fkimax[$no])/$fkimax[$no])+((1-$fkimin[$no])/$fkimin[$no])), 4, '.', ''); ?>
                     
                      
                      <?php $no++ ?>             
                <?php } ?>


                <?php 

                    $no = 0;
                   foreach($alternatif as $a){ 
                                                       
                  ?>
                      <tr>
                      <td><?php echo $no+1; ?></td>
                      <td><?php echo $a->kode; ?></td>
                      <td><?php echo $a->nama; ?></td>
                      <td><?php echo number_format((float) $sumkimin[$no], 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) $sumkimax[$no], 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) $fkimin[$no], 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) $fkimax[$no], 4, '.', ''); ?></td>
                      <td><?php echo number_format((float) $rankmarcos[$no], 4, '.', ''); ?></td>
                      <td>
                      <?php
                          $values = $rankmarcos;
                          
                          $ordered_values = $values;
                          rsort($ordered_values);
                          
                          foreach ($values as $key => $value) {
                              foreach ($ordered_values as $ordered_key => $ordered_value) {
                                  if ($value === $ordered_value) {
                                      $key = $ordered_key;
                                      break;
                                  }
                              }
                              if($value==$rankmarcos[$no]){echo  ((int) $key + 1);}
                          }

                      ?>
                      </td>
                      </tr>
                      <?php $no++ ?>             
                <?php } ?>

                
                    
                  </tbody>
                  </table>
                
 

                 
              <canvas id="myChart" width="100%" height="20"></canvas>

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


        <?php } ?>