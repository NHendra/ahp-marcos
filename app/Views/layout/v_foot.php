
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<footer class="main-footer">
<strong>Sistem Pendukung Keputusan Pemilihan Aplikasi Video Conference Metode AHP-MARCOS &#64; 2021 - </strong> I Wayan Nanda Mahendra

    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>  1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>/template/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>/template/plugins/chart.js/Chart.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>/template/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>/template/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url() ?>/template/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>/template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>/template/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>/template/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>/template/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>/template/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url() ?>/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>/template/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>/template/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>/template/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/template/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>/template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>/template/dist/js/demo.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url() ?>/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>/template/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
                  $(function () {
                    $('#data_pi').DataTable({
                      'paging'      : true,
                      'lengthChange': true,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  $(function () {
                    $('#data_pi2').DataTable({
                      'paging'      : true,
                      'lengthChange': true,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  $(function () {
                    $('#data_pi3').DataTable({
                      'paging'      : true,
                      'lengthChange': true,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  $(function () {
                    $('#data_pi4').DataTable({
                      'paging'      : true,
                      'lengthChange': true,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  $(function () {
                    $('#data_pi5').DataTable({
                      'paging'      : true,
                      'lengthChange': true,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  $(function () {
                    $('#data_pi6').DataTable({
                      'paging'      : true,
                      'lengthChange': true,
                      'searching'   : true,
                      'ordering'    : true,
                      'info'        : true,
                      'autoWidth'   : false
                    })
                  })
                  
                  $("input[data-bootstrap-switch]").each(function(){
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                  });









                  

                  





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
                    ?>
                    //-------------
                    //- DONUT CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                    var donutData        = {
                      labels: [
                          '<?php foreach($kriteria as $a){  if($a->crit_id=='c1'){echo $a->nama;}}?>',
                          '<?php foreach($kriteria as $a){  if($a->crit_id=='c2'){echo $a->nama;}}?>',
                          '<?php foreach($kriteria as $a){  if($a->crit_id=='c3'){echo $a->nama;}}?>',
                          '<?php foreach($kriteria as $a){  if($a->crit_id=='c4'){echo $a->nama;}}?>',
                          '<?php foreach($kriteria as $a){  if($a->crit_id=='c5'){echo $a->nama;}}?>',
                          '<?php foreach($kriteria as $a){  if($a->crit_id=='c6'){echo $a->nama;}}?>',
                      ],
                      datasets: [
                        {
                          data: [<?php echo number_format((float)$ev1, 4, '.', ''); ?>,<?php echo number_format((float)$ev2, 4, '.', ''); ?>,<?php echo number_format((float)$ev3, 4, '.', ''); ?>,<?php echo number_format((float)$ev4, 4, '.', ''); ?>,<?php echo number_format((float)$ev5, 4, '.', ''); ?>,<?php echo number_format((float)$ev6, 4, '.', ''); ?>],
                          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                        }
                      ]
                    }
                    var donutOptions     = {
                      maintainAspectRatio : false,
                      responsive : true,
                    }
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    new Chart(donutChartCanvas, {
                      type: 'doughnut',
                      data: donutData,
                      options: donutOptions
                    })


















                    
                  

                </script> 

                    <?php 
                      

                      foreach($kriteria as $a){ if($a->crit_id=='c1'){ if($a->cosben==0){ $cb1=0; }else{$cb1=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c2'){ if($a->cosben==0){ $cb2=0; }else{$cb2=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c3'){ if($a->cosben==0){ $cb3=0; }else{$cb3=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c4'){ if($a->cosben==0){ $cb4=0; }else{$cb4=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c5'){ if($a->cosben==0){ $cb5=0; }else{$cb5=1;}}}
                      foreach($kriteria as $a){ if($a->crit_id=='c6'){ if($a->cosben==0){ $cb6=0; }else{$cb6=1;}}}

                      $db      = \Config\Database::connect();
                      $builder = $db->table('alternatif');
                      
                      $builder->selectMin('c1'); $query = $builder->get(); foreach($query->getResult() as $row){$minc1=$row->c1;} 
                      $builder->selectMin('c2'); $query = $builder->get(); foreach($query->getResult() as $row){$minc2=$row->c2;}  
                      $builder->selectMin('c3'); $query = $builder->get(); foreach($query->getResult() as $row){$minc3=$row->c3;}  
                      $builder->selectMin('c4'); $query = $builder->get(); foreach($query->getResult() as $row){$minc4=$row->c4;} 
                      $builder->selectMin('c5'); $query = $builder->get(); foreach($query->getResult() as $row){$minc5=$row->c5;}  
                      $builder->selectMin('c6'); $query = $builder->get(); foreach($query->getResult() as $row){$minc6=$row->c6;}  
                      $builder->selectMax('c1'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc1=$row->c1;} 
                      $builder->selectMax('c2'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc2=$row->c2;}  
                      $builder->selectMax('c3'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc3=$row->c3;}  
                      $builder->selectMax('c4'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc4=$row->c4;}  
                      $builder->selectMax('c5'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc5=$row->c5;}  
                      $builder->selectMax('c6'); $query = $builder->get(); foreach($query->getResult() as $row){$maxc6=$row->c6;}   

                      $no = 0; foreach($alternatif as $a){ 
                        
                      if($cb1==0){  number_format((float) $var1[$no]=($minc1/$a->c1)*$ev1, 4, '.', ''); }else{  number_format((float) $var1[$no]=($a->c1/$maxc1)*$ev1, 4, '.', ''); }
                      if($cb2==0){  number_format((float) $var2[$no]=($minc2/$a->c2)*$ev2, 4, '.', ''); }else{  number_format((float) $var2[$no]=($a->c2/$maxc2)*$ev2, 4, '.', ''); } 
                      if($cb3==0){  number_format((float) $var3[$no]=($minc3/$a->c3)*$ev3, 4, '.', ''); }else{  number_format((float) $var3[$no]=($a->c3/$maxc3)*$ev3, 4, '.', ''); }
                      if($cb4==0){  number_format((float) $var4[$no]=($minc4/$a->c4)*$ev4, 4, '.', ''); }else{  number_format((float) $var4[$no]=($a->c4/$maxc4)*$ev4, 4, '.', ''); }
                      if($cb5==0){  number_format((float) $var5[$no]=($minc5/$a->c5)*$ev5, 4, '.', ''); }else{  number_format((float) $var5[$no]=($a->c5/$maxc5)*$ev5, 4, '.', ''); } 
                      if($cb6==0){  number_format((float) $var6[$no]=($minc6/$a->c6)*$ev6, 4, '.', ''); }else{  number_format((float) $var6[$no]=($a->c6/$maxc6)*$ev6, 4, '.', ''); }
                       number_format((float) $summarcos[$no]=$var1[$no]+$var2[$no]+$var3[$no]+$var4[$no]+$var5[$no]+$var6[$no], 4, '.', '');
                       $no++;
                    } 
                    number_format((float) $maxsummar=max($var1)+max($var2)+max($var3)+max($var4)+max($var5)+max($var6), 4, '.', '');
                    number_format((float) $minsummar=min($var1)+min($var2)+min($var3)+min($var4)+min($var5)+min($var6), 4, '.', '');
                    
                    
                    ?>

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




                    <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                              <?php 

                          $no = 0;
                          foreach($alternatif as $a){ 
                                                            
                          ?>
                          <?php echo "'".$a->nama."',"; ?>
  
                              <?php $no++ ?>             
                          <?php } ?>
                                      ],
                            datasets: [{
                                label: 'Rangking AHP-MARCOS',
                                data: [<?php 

                                      $no = 0;
                                      foreach($alternatif as $a){ 
                                                                        
                                      ?>
                                      <?php echo number_format((float) $rankmarcos[$no], 4, '.', ''); echo ","; ?>

                                          <?php $no++ ?>             
                                      <?php } ?>
                                         ],
                                backgroundColor: 'rgba(60,141,188,0.9)',
                                borderColor: 'rgba(60,141,188,0.8)',
                                
                            }]
                        },
                        options: {
                          scales: {
                                    yAxes: [{
                                      ticks: {
                                        suggestedMin: 0.35
                                      }
                                    }]
                          }
                        }
                    });
                    </script>



</body>
</html>
