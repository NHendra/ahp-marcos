

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
                  <h5><i class='icon fas fa-ban'></i> FAILED</h5>
                  Perhitungan AHP Tidak Konsisten, Silahkan Lakukan Pembobotan Kriteria Yang Konsisten.
                </div>
                ";
              }
            
            ?>


<div class="card">
  <div class="card-body">

      <div class="form-group">
      

      <?php
      $v1=9;
      $v2=7;
      $v3=5;
      $v4=3;
      $v5=1;
      $v6=0.333333;
      $v7=0.2;
      $v8=0.142857;
      $v9=0.111111;
      ?>


      <form action="<?php echo base_url(). '/pemahp/edit'; ?>" method="post">
      <table  align="center" align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th><h5>KRITERIA-A</h5></th>
          <th><h5>NILAI-A</h5></th>
          <th><h5>PEMBOBOTAN AHP</h5></th>
          <th><h5>NILAI-B</h5></th>
          <th><h5>KRITERIA-B</h5</th>
        </tr>
      </table>
      <br>
      <!--oneline slider c1c2--------------------------------------------------->
      <script>
          function sliderChange(val) {
            if (val == 1) {
              document.getElementById('sliderVal1').innerHTML = '9';
              document.getElementById('sliderVal2').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal1').innerHTML = '7';
              document.getElementById('sliderVal2').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal1').innerHTML = '5';
              document.getElementById('sliderVal2').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal1').innerHTML = '3';
              document.getElementById('sliderVal2').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal1').innerHTML = '1';
              document.getElementById('sliderVal2').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal1').innerHTML = '1/3';
              document.getElementById('sliderVal2').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal1').innerHTML = '1/5';
              document.getElementById('sliderVal2').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal1').innerHTML = '1/7';
              document.getElementById('sliderVal2').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal1').innerHTML = '1/9';
              document.getElementById('sliderVal2').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c1')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal1">
          <?php 
              foreach($kriteria as $a){ 
                if($a->crit_id=='c1'){
                  if($a->p2==$v1){
                    $c1c2 = 1;
                  }elseif($a->p2==$v2){
                    $c1c2 = 2;
                  }elseif($a->p2==$v3){
                    $c1c2 = 3;
                  }elseif($a->p2==$v4){
                    $c1c2 = 4;
                  }elseif($a->p2==$v5){
                    $c1c2 = 5;
                  }elseif($a->p2==$v6){
                    $c1c2 = 6;
                  }elseif($a->p2==$v7){
                    $c1c2 = 7;
                  }elseif($a->p2==$v8){
                    $c1c2 = 8;
                  }elseif($a->p2==$v9){
                    $c1c2 = 9;
                  }
                }
              }
                     
                    
                      
                      
                    ?>
                    

              <?php if($c1c2==1){
                echo '9';
              }else if($c1c2==2){
                echo '7';
              }else if($c1c2==3){
                echo '5';
              }else if($c1c2==4){
                echo '3';
              }else if($c1c2==5){
                echo '1';
              }else if($c1c2==6){
                echo '1/3';
              }else if($c1c2==7){
                echo '1/5';
              }else if($c1c2==8){
                echo '1/7';
              }else if($c1c2==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c1c2" value="<?php echo $c1c2; ?>" min="1" max="9" onchange="sliderChange(this.value)"></th>
          <th><output id="sliderVal2">
              <?php if($c1c2==1){
                echo '1/9';
              }else if($c1c2==2){
                echo '1/7';
              }else if($c1c2==3){
                echo '1/5';
              }else if($c1c2==4){
                echo '1/3';
              }else if($c1c2==5){
                echo '1';
              }else if($c1c2==6){
                echo '3';
              }else if($c1c2==7){
                echo '5';
              }else if($c1c2==8){
                echo '7';
              }else if($c1c2==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c2')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->

            <!--oneline slider c1c3--------------------------------------------------->
            <script>
          function sliderChange1(val) {
            if (val == 1) {
              document.getElementById('sliderVal11').innerHTML = '9';
              document.getElementById('sliderVal12').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal11').innerHTML = '7';
              document.getElementById('sliderVal12').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal11').innerHTML = '5';
              document.getElementById('sliderVal12').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal11').innerHTML = '3';
              document.getElementById('sliderVal12').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal11').innerHTML = '1';
              document.getElementById('sliderVal12').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal11').innerHTML = '1/3';
              document.getElementById('sliderVal12').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal11').innerHTML = '1/5';
              document.getElementById('sliderVal12').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal11').innerHTML = '1/7';
              document.getElementById('sliderVal12').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal11').innerHTML = '1/9';
              document.getElementById('sliderVal12').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c1')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal11">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c1'){
                        if($a->p3==$v1){
                          $c1c3 = 1;
                        }elseif($a->p3==$v2){
                          $c1c3 = 2;
                        }elseif($a->p3==$v3){
                          $c1c3 = 3;
                        }elseif($a->p3==$v4){
                          $c1c3 = 4;
                        }elseif($a->p3==$v5){
                          $c1c3 = 5;
                        }elseif($a->p3==$v6){
                          $c1c3 = 6;
                        }elseif($a->p3==$v7){
                          $c1c3 = 7;
                        }elseif($a->p3==$v8){
                          $c1c3 = 8;
                        }elseif($a->p3==$v9){
                          $c1c3 = 9;
                        }
                      }
                    }
                     
                      
                      
                    ?>
                    

              <?php if($c1c3==1){
                echo '9';
              }else if($c1c3==2){
                echo '7';
              }else if($c1c3==3){
                echo '5';
              }else if($c1c3==4){
                echo '3';
              }else if($c1c3==5){
                echo '1';
              }else if($c1c3==6){
                echo '1/3';
              }else if($c1c3==7){
                echo '1/5';
              }else if($c1c3==8){
                echo '1/7';
              }else if($c1c3==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c1c3" value="<?php echo $c1c3; ?>" min="1" max="9" onchange="sliderChange1(this.value)"></th>
          <th><output id="sliderVal12">
              <?php if($c1c3==1){
                echo '1/9';
              }else if($c1c3==2){
                echo '1/7';
              }else if($c1c3==3){
                echo '1/5';
              }else if($c1c3==4){
                echo '1/3';
              }else if($c1c3==5){
                echo '1';
              }else if($c1c3==6){
                echo '3';
              }else if($c1c3==7){
                echo '5';
              }else if($c1c3==8){
                echo '7';
              }else if($c1c3==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c3')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->

            <!--oneline slider--------------------------------------------------->
            <script>
          function sliderChange2(val) {
            if (val == 1) {
              document.getElementById('sliderVal21').innerHTML = '9';
              document.getElementById('sliderVal22').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal21').innerHTML = '7';
              document.getElementById('sliderVal22').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal21').innerHTML = '5';
              document.getElementById('sliderVal22').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal21').innerHTML = '3';
              document.getElementById('sliderVal22').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal21').innerHTML = '1';
              document.getElementById('sliderVal22').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal21').innerHTML = '1/3';
              document.getElementById('sliderVal22').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal21').innerHTML = '1/5';
              document.getElementById('sliderVal22').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal21').innerHTML = '1/7';
              document.getElementById('sliderVal22').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal21').innerHTML = '1/9';
              document.getElementById('sliderVal22').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c1')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal21">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c1'){
                        if($a->p4==$v1){
                          $c1c4 = 1;
                        }elseif($a->p4==$v2){
                          $c1c4 = 2;
                        }elseif($a->p4==$v3){
                          $c1c4 = 3;
                        }elseif($a->p4==$v4){
                          $c1c4 = 4;
                        }elseif($a->p4==$v5){
                          $c1c4 = 5;
                        }elseif($a->p4==$v6){
                          $c1c4 = 6;
                        }elseif($a->p4==$v7){
                          $c1c4 = 7;
                        }elseif($a->p4==$v8){
                          $c1c4 = 8;
                        }elseif($a->p4==$v9){
                          $c1c4 = 9;
                        }
                      }
                    }
                     
                      
                      
                    ?>
                    

              <?php if($c1c4==1){
                echo '9';
              }else if($c1c4==2){
                echo '7';
              }else if($c1c4==3){
                echo '5';
              }else if($c1c4==4){
                echo '3';
              }else if($c1c4==5){
                echo '1';
              }else if($c1c4==6){
                echo '1/3';
              }else if($c1c4==7){
                echo '1/5';
              }else if($c1c4==8){
                echo '1/7';
              }else if($c1c4==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c1c4" value="<?php echo $c1c4; ?>" min="1" max="9" onchange="sliderChange2(this.value)"></th>
          <th><output id="sliderVal22">
              <?php if($c1c4==1){
                echo '1/9';
              }else if($c1c4==2){
                echo '1/7';
              }else if($c1c4==3){
                echo '1/5';
              }else if($c1c4==4){
                echo '1/3';
              }else if($c1c4==5){
                echo '1';
              }else if($c1c4==6){
                echo '3';
              }else if($c1c4==7){
                echo '5';
              }else if($c1c4==8){
                echo '7';
              }else if($c1c4==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c4')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->

            <!--oneline slider--------------------------------------------------->
            <script>
          function sliderChange3(val) {
            if (val == 1) {
              document.getElementById('sliderVal31').innerHTML = '9';
              document.getElementById('sliderVal32').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal31').innerHTML = '7';
              document.getElementById('sliderVal32').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal31').innerHTML = '5';
              document.getElementById('sliderVal32').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal31').innerHTML = '3';
              document.getElementById('sliderVal32').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal31').innerHTML = '1';
              document.getElementById('sliderVal32').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal31').innerHTML = '1/3';
              document.getElementById('sliderVal32').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal31').innerHTML = '1/5';
              document.getElementById('sliderVal32').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal31').innerHTML = '1/7';
              document.getElementById('sliderVal32').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal31').innerHTML = '1/9';
              document.getElementById('sliderVal32').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c1')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal31">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c1'){
                        if($a->p5==$v1){
                          $c1c5 = 1;
                        }elseif($a->p5==$v2){
                          $c1c5 = 2;
                        }elseif($a->p5==$v3){
                          $c1c5 = 3;
                        }elseif($a->p5==$v4){
                          $c1c5 = 4;
                        }elseif($a->p5==$v5){
                          $c1c5 = 5;
                        }elseif($a->p5==$v6){
                          $c1c5 = 6;
                        }elseif($a->p5==$v7){
                          $c1c5 = 7;
                        }elseif($a->p5==$v8){
                          $c1c5 = 8;
                        }elseif($a->p5==$v9){
                          $c1c5 = 9;
                        }
                      }
                    }
                     
                      
                      
                    ?>
                    

              <?php if($c1c5==1){
                echo '9';
              }else if($c1c5==2){
                echo '7';
              }else if($c1c5==3){
                echo '5';
              }else if($c1c5==4){
                echo '3';
              }else if($c1c5==5){
                echo '1';
              }else if($c1c5==6){
                echo '1/3';
              }else if($c1c5==7){
                echo '1/5';
              }else if($c1c5==8){
                echo '1/7';
              }else if($c1c5==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c1c5" value="<?php echo $c1c5; ?>" min="1" max="9" onchange="sliderChange3(this.value)"></th>
          <th><output id="sliderVal32">
              <?php if($c1c5==1){
                echo '1/9';
              }else if($c1c5==2){
                echo '1/7';
              }else if($c1c5==3){
                echo '1/5';
              }else if($c1c5==4){
                echo '1/3';
              }else if($c1c5==5){
                echo '1';
              }else if($c1c5==6){
                echo '3';
              }else if($c1c5==7){
                echo '5';
              }else if($c1c5==8){
                echo '7';
              }else if($c1c5==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c5')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->

            <!--oneline slider--------------------------------------------------->
            <script>
          function sliderChange4(val) {
            if (val == 1) {
              document.getElementById('sliderVal41').innerHTML = '9';
              document.getElementById('sliderVal42').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal41').innerHTML = '7';
              document.getElementById('sliderVal42').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal41').innerHTML = '5';
              document.getElementById('sliderVal42').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal41').innerHTML = '3';
              document.getElementById('sliderVal42').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal41').innerHTML = '1';
              document.getElementById('sliderVal42').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal41').innerHTML = '1/3';
              document.getElementById('sliderVal42').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal41').innerHTML = '1/5';
              document.getElementById('sliderVal42').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal41').innerHTML = '1/7';
              document.getElementById('sliderVal42').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal41').innerHTML = '1/9';
              document.getElementById('sliderVal42').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c1')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal41">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c1'){
                        if($a->p6==$v1){
                          $c1c6 = 1;
                        }elseif($a->p6==$v2){
                          $c1c6 = 2;
                        }elseif($a->p6==$v3){
                          $c1c6 = 3;
                        }elseif($a->p6==$v4){
                          $c1c6 = 4;
                        }elseif($a->p6==$v5){
                          $c1c6 = 5;
                        }elseif($a->p6==$v6){
                          $c1c6 = 6;
                        }elseif($a->p6==$v7){
                          $c1c6 = 7;
                        }elseif($a->p6==$v8){
                          $c1c6 = 8;
                        }elseif($a->p6==$v9){
                          $c1c6 = 9;
                        }
                      }
                    }
                     
                      
                      
                    ?>
                    
           
              <?php if($c1c6==1){
                echo '9';
              }else if($c1c6==2){
                echo '7';
              }else if($c1c6==3){
                echo '5';
              }else if($c1c6==4){
                echo '3';
              }else if($c1c6==5){
                echo '1';
              }else if($c1c6==6){
                echo '1/3';
              }else if($c1c6==7){
                echo '1/5';
              }else if($c1c6==8){
                echo '1/7';
              }else if($c1c6==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c1c6" value="<?php echo $c1c6; ?>" min="1" max="9" onchange="sliderChange4(this.value)"></th>
          <th><output id="sliderVal42">
              <?php if($c1c6==1){
                echo '1/9';
              }else if($c1c6==2){
                echo '1/7';
              }else if($c1c6==3){
                echo '1/5';
              }else if($c1c6==4){
                echo '1/3';
              }else if($c1c6==5){
                echo '1';
              }else if($c1c6==6){
                echo '3';
              }else if($c1c6==7){
                echo '5';
              }else if($c1c6==8){
                echo '7';
              }else if($c1c6==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c6')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->

            
      <!--oneline slider--------------------------------------------------->
      <br>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th></th>
          <th></th>
          <th><button type="button" onclick="window.location.href = '<?php echo base_url(). '/pemahp/defc1'; ?>';" class="btn btn-primary">Kriteria <?php 
                   
                   foreach($kriteria as $a){ 
                     if($a->crit_id=='c1')
                    
                    echo $a->nama;
                    
                  ?>
                  
            <?php } ?> Default</button></th>
          <th></th>
          <th></th>
        </tr>
      </table>

      <br>
      <!--oneline slider c2c3--------------------------------------------------->
      <script>
          function sliderChange7(val) {
            if (val == 1) {
              document.getElementById('sliderVal71').innerHTML = '9';
              document.getElementById('sliderVal72').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal71').innerHTML = '7';
              document.getElementById('sliderVal72').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal71').innerHTML = '5';
              document.getElementById('sliderVal72').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal71').innerHTML = '3';
              document.getElementById('sliderVal72').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal71').innerHTML = '1';
              document.getElementById('sliderVal72').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal71').innerHTML = '1/3';
              document.getElementById('sliderVal72').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal71').innerHTML = '1/5';
              document.getElementById('sliderVal72').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal71').innerHTML = '1/7';
              document.getElementById('sliderVal72').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal71').innerHTML = '1/9';
              document.getElementById('sliderVal72').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c2')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal71">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c2'){
                        if($a->p3==$v1){
                          $c2c3 = 1;
                        }elseif($a->p3==$v2){
                          $c2c3 = 2;
                        }elseif($a->p3==$v3){
                          $c2c3 = 3;
                        }elseif($a->p3==$v4){
                          $c2c3 = 4;
                        }elseif($a->p3==$v5){
                          $c2c3 = 5;
                        }elseif($a->p3==$v6){
                          $c2c3 = 6;
                        }elseif($a->p3==$v7){
                          $c2c3 = 7;
                        }elseif($a->p3==$v8){
                          $c2c3 = 8;
                        }elseif($a->p3==$v9){
                          $c2c3 = 9;
                        }
                      }
                    }
                     
                    ?>
                    
             
              <?php if($c2c3==1){
                echo '9';
              }else if($c2c3==2){
                echo '7';
              }else if($c2c3==3){
                echo '5';
              }else if($c2c3==4){
                echo '3';
              }else if($c2c3==5){
                echo '1';
              }else if($c2c3==6){
                echo '1/3';
              }else if($c2c3==7){
                echo '1/5';
              }else if($c2c3==8){
                echo '1/7';
              }else if($c2c3==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c2c3" value="<?php echo $c2c3; ?>" min="1" max="9" onchange="sliderChange7(this.value)"></th>
          <th><output id="sliderVal72">
              <?php if($c2c3==1){
                echo '1/9';
              }else if($c2c3==2){
                echo '1/7';
              }else if($c2c3==3){
                echo '1/5';
              }else if($c2c3==4){
                echo '1/3';
              }else if($c2c3==5){
                echo '1';
              }else if($c2c3==6){
                echo '3';
              }else if($c2c3==7){
                echo '5';
              }else if($c2c3==8){
                echo '7';
              }else if($c2c3==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c3')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      <!--oneline slider c2c4--------------------------------------------------->
      <script>
          function sliderChange17(val) {
            if (val == 1) {
              document.getElementById('sliderVal171').innerHTML = '9';
              document.getElementById('sliderVal172').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal171').innerHTML = '7';
              document.getElementById('sliderVal172').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal171').innerHTML = '5';
              document.getElementById('sliderVal172').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal171').innerHTML = '3';
              document.getElementById('sliderVal172').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal171').innerHTML = '1';
              document.getElementById('sliderVal172').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal171').innerHTML = '1/3';
              document.getElementById('sliderVal172').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal171').innerHTML = '1/5';
              document.getElementById('sliderVal172').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal171').innerHTML = '1/7';
              document.getElementById('sliderVal172').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal171').innerHTML = '1/9';
              document.getElementById('sliderVal72').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c2')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal171">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c2'){
                        if($a->p4==$v1){
                          $c2c4 = 1;
                        }elseif($a->p4==$v2){
                          $c2c4 = 2;
                        }elseif($a->p4==$v3){
                          $c2c4 = 3;
                        }elseif($a->p4==$v4){
                          $c2c4 = 4;
                        }elseif($a->p4==$v5){
                          $c2c4 = 5;
                        }elseif($a->p4==$v6){
                          $c2c4 = 6;
                        }elseif($a->p4==$v7){
                          $c2c4 = 7;
                        }elseif($a->p4==$v8){
                          $c2c4 = 8;
                        }elseif($a->p4==$v9){
                          $c2c4 = 9;
                        }
                      }
                    }
                   
                      
                      
                    ?>
                    
              
              <?php if($c2c4==1){
                echo '9';
              }else if($c2c4==2){
                echo '7';
              }else if($c2c4==3){
                echo '5';
              }else if($c2c4==4){
                echo '3';
              }else if($c2c4==5){
                echo '1';
              }else if($c2c4==6){
                echo '1/3';
              }else if($c2c4==7){
                echo '1/5';
              }else if($c2c4==8){
                echo '1/7';
              }else if($c2c4==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c2c4" value="<?php echo $c2c4; ?>" min="1" max="9" onchange="sliderChange17(this.value)"></th>
          <th><output id="sliderVal172">
              <?php if($c2c4==1){
                echo '1/9';
              }else if($c2c4==2){
                echo '1/7';
              }else if($c2c4==3){
                echo '1/5';
              }else if($c2c4==4){
                echo '1/3';
              }else if($c2c4==5){
                echo '1';
              }else if($c2c4==6){
                echo '3';
              }else if($c2c4==7){
                echo '5';
              }else if($c2c4==8){
                echo '7';
              }else if($c2c4==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c4')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      <!--oneline slider c2c5--------------------------------------------------->
      <script>
          function sliderChange27(val) {
            if (val == 1) {
              document.getElementById('sliderVal271').innerHTML = '9';
              document.getElementById('sliderVal272').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal271').innerHTML = '7';
              document.getElementById('sliderVal272').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal271').innerHTML = '5';
              document.getElementById('sliderVal272').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal271').innerHTML = '3';
              document.getElementById('sliderVal272').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal271').innerHTML = '1';
              document.getElementById('sliderVal272').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal271').innerHTML = '1/3';
              document.getElementById('sliderVal272').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal271').innerHTML = '1/5';
              document.getElementById('sliderVal272').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal271').innerHTML = '1/7';
              document.getElementById('sliderVal272').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal271').innerHTML = '1/9';
              document.getElementById('sliderVal272').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c2')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal271">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c2'){
                        if($a->p5==$v1){
                          $c2c5 = 1;
                        }elseif($a->p5==$v2){
                          $c2c5 = 2;
                        }elseif($a->p5==$v3){
                          $c2c5 = 3;
                        }elseif($a->p5==$v4){
                          $c2c5 = 4;
                        }elseif($a->p5==$v5){
                          $c2c5 = 5;
                        }elseif($a->p5==$v6){
                          $c2c5 = 6;
                        }elseif($a->p5==$v7){
                          $c2c5 = 7;
                        }elseif($a->p5==$v8){
                          $c2c5 = 8;
                        }elseif($a->p5==$v9){
                          $c2c5 = 9;
                        }
                      }
                    }
                    
                      
                      
                    ?>
                    
              <?php if($c2c5==1){
                echo '9';
              }else if($c2c5==2){
                echo '7';
              }else if($c2c5==3){
                echo '5';
              }else if($c2c5==4){
                echo '3';
              }else if($c2c5==5){
                echo '1';
              }else if($c2c5==6){
                echo '1/3';
              }else if($c2c5==7){
                echo '1/5';
              }else if($c2c5==8){
                echo '1/7';
              }else if($c2c5==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c2c5" value="<?php echo $c2c5; ?>" min="1" max="9" onchange="sliderChange27(this.value)"></th>
          <th><output id="sliderVal272">
              <?php if($c2c5==1){
                echo '1/9';
              }else if($c2c5==2){
                echo '1/7';
              }else if($c2c5==3){
                echo '1/5';
              }else if($c2c5==4){
                echo '1/3';
              }else if($c2c5==5){
                echo '1';
              }else if($c2c5==6){
                echo '3';
              }else if($c2c5==7){
                echo '5';
              }else if($c2c5==8){
                echo '7';
              }else if($c2c5==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c5')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      <!--oneline slider c2c6--------------------------------------------------->
      <script>
          function sliderChange37(val) {
            if (val == 1) {
              document.getElementById('sliderVal371').innerHTML = '9';
              document.getElementById('sliderVal372').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal371').innerHTML = '7';
              document.getElementById('sliderVal372').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal371').innerHTML = '5';
              document.getElementById('sliderVal372').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal371').innerHTML = '3';
              document.getElementById('sliderVal372').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal371').innerHTML = '1';
              document.getElementById('sliderVal372').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal371').innerHTML = '1/3';
              document.getElementById('sliderVal372').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal371').innerHTML = '1/5';
              document.getElementById('sliderVal372').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal371').innerHTML = '1/7';
              document.getElementById('sliderVal372').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal371').innerHTML = '1/9';
              document.getElementById('sliderVal372').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c2')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal371">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c2'){
                        if($a->p6==$v1){
                          $c2c6 = 1;
                        }elseif($a->p6==$v2){
                          $c2c6 = 2;
                        }elseif($a->p6==$v3){
                          $c2c6 = 3;
                        }elseif($a->p6==$v4){
                          $c2c6 = 4;
                        }elseif($a->p6==$v5){
                          $c2c6 = 5;
                        }elseif($a->p6==$v6){
                          $c2c6 = 6;
                        }elseif($a->p6==$v7){
                          $c2c6 = 7;
                        }elseif($a->p6==$v8){
                          $c2c6 = 8;
                        }elseif($a->p6==$v9){
                          $c2c6 = 9;
                        }
                      }
                    }

                      
                      
                    ?>
                    
              <?php if($c2c6==1){
                echo '9';
              }else if($c2c6==2){
                echo '7';
              }else if($c2c6==3){
                echo '5';
              }else if($c2c6==4){
                echo '3';
              }else if($c2c6==5){
                echo '1';
              }else if($c2c6==6){
                echo '1/3';
              }else if($c2c6==7){
                echo '1/5';
              }else if($c2c6==8){
                echo '1/7';
              }else if($c2c6==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c2c6" value="<?php echo $c2c6; ?>" min="1" max="9" onchange="sliderChange37(this.value)"></th>
          <th><output id="sliderVal372">
              <?php if($c2c6==1){
                echo '1/9';
              }else if($c2c6==2){
                echo '1/7';
              }else if($c2c6==3){
                echo '1/5';
              }else if($c2c6==4){
                echo '1/3';
              }else if($c2c6==5){
                echo '1';
              }else if($c2c6==6){
                echo '3';
              }else if($c2c6==7){
                echo '5';
              }else if($c2c6==8){
                echo '7';
              }else if($c2c6==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c6')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      
      <!--oneline slider--------------------------------------------------->
      <br>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th></th>
          <th></th>
          <th><button type="button" onclick="window.location.href = '<?php echo base_url(). '/pemahp/defc2'; ?>';" class="btn btn-primary">Kriteria <?php 
                   
                   foreach($kriteria as $a){ 
                     if($a->crit_id=='c2')
                    
                    echo $a->nama;
                    
                  ?>
                  
            <?php } ?> Default</button></th>
          <th></th>
          <th></th>
        </tr>
      </table>
      <br>
      <!--oneline slider c3c4--------------------------------------------------->
      <script>
          function sliderChange157(val) {
            if (val == 1) {
              document.getElementById('sliderVal1571').innerHTML = '9';
              document.getElementById('sliderVal1572').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal1571').innerHTML = '7';
              document.getElementById('sliderVal1572').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal1571').innerHTML = '5';
              document.getElementById('sliderVal1572').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal1571').innerHTML = '3';
              document.getElementById('sliderVal1572').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal1571').innerHTML = '1';
              document.getElementById('sliderVal1572').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal1571').innerHTML = '1/3';
              document.getElementById('sliderVal1572').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal1571').innerHTML = '1/5';
              document.getElementById('sliderVal1572').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal1571').innerHTML = '1/7';
              document.getElementById('sliderVal1572').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal1571').innerHTML = '1/9';
              document.getElementById('sliderVal1572').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c3')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal1571">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c3'){
                        if($a->p4==$v1){
                          $c3c4 = 1;
                        }elseif($a->p4==$v2){
                          $c3c4 = 2;
                        }elseif($a->p4==$v3){
                          $c3c4 = 3;
                        }elseif($a->p4==$v4){
                          $c3c4 = 4;
                        }elseif($a->p4==$v5){
                          $c3c4 = 5;
                        }elseif($a->p4==$v6){
                          $c3c4 = 6;
                        }elseif($a->p4==$v7){
                          $c3c4 = 7;
                        }elseif($a->p4==$v8){
                          $c3c4 = 8;
                        }elseif($a->p4==$v9){
                          $c3c4 = 9;
                        }
                      }
                    }
                  
                      
                      
                    ?>
                    
              <?php if($c3c4==1){
                echo '9';
              }else if($c3c4==2){
                echo '7';
              }else if($c3c4==3){
                echo '5';
              }else if($c3c4==4){
                echo '3';
              }else if($c3c4==5){
                echo '1';
              }else if($c3c4==6){
                echo '1/3';
              }else if($c3c4==7){
                echo '1/5';
              }else if($c3c4==8){
                echo '1/7';
              }else if($c3c4==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c3c4" value="<?php echo $c3c4; ?>" min="1" max="9" onchange="sliderChange157(this.value)"></th>
          <th><output id="sliderVal1572">
              <?php if($c3c4==1){
                echo '1/9';
              }else if($c3c4==2){
                echo '1/7';
              }else if($c3c4==3){
                echo '1/5';
              }else if($c3c4==4){
                echo '1/3';
              }else if($c3c4==5){
                echo '1';
              }else if($c3c4==6){
                echo '3';
              }else if($c3c4==7){
                echo '5';
              }else if($c3c4==8){
                echo '7';
              }else if($c3c4==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c4')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      <!--oneline slider c3c5--------------------------------------------------->
      <script>
          function sliderChange1157(val) {
            if (val == 1) {
              document.getElementById('sliderVal11571').innerHTML = '9';
              document.getElementById('sliderVal11572').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal11571').innerHTML = '7';
              document.getElementById('sliderVal11572').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal11571').innerHTML = '5';
              document.getElementById('sliderVal11572').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal11571').innerHTML = '3';
              document.getElementById('sliderVal11572').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal11571').innerHTML = '1';
              document.getElementById('sliderVal11572').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal11571').innerHTML = '1/3';
              document.getElementById('sliderVal11572').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal11571').innerHTML = '1/5';
              document.getElementById('sliderVal11572').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal11571').innerHTML = '1/7';
              document.getElementById('sliderVal1572').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal11571').innerHTML = '1/9';
              document.getElementById('sliderVal11572').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c3')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal11571">
          <?php 
                      foreach($kriteria as $a){ 
                        if($a->crit_id=='c3'){
                          if($a->p5==$v1){
                            $c3c5 = 1;
                          }elseif($a->p5==$v2){
                            $c3c5 = 2;
                          }elseif($a->p5==$v3){
                            $c3c5 = 3;
                          }elseif($a->p5==$v4){
                            $c3c5 = 4;
                          }elseif($a->p5==$v5){
                            $c3c5 = 5;
                          }elseif($a->p5==$v6){
                            $c3c5 = 6;
                          }elseif($a->p5==$v7){
                            $c3c5 = 7;
                          }elseif($a->p5==$v8){
                            $c3c5 = 8;
                          }elseif($a->p5==$v9){
                            $c3c5 = 9;
                          }
                        }
                      }

                      
                      
                    ?>
                    
              <?php if($c3c5==1){
                echo '9';
              }else if($c3c5==2){
                echo '7';
              }else if($c3c5==3){
                echo '5';
              }else if($c3c5==4){
                echo '3';
              }else if($c3c5==5){
                echo '1';
              }else if($c3c5==6){
                echo '1/3';
              }else if($c3c5==7){
                echo '1/5';
              }else if($c3c5==8){
                echo '1/7';
              }else if($c3c5==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c3c5" value="<?php echo $c3c5; ?>" min="1" max="9" onchange="sliderChange1157(this.value)"></th>
          <th><output id="sliderVal11572">
              <?php if($c3c5==1){
                echo '1/9';
              }else if($c3c5==2){
                echo '1/7';
              }else if($c3c5==3){
                echo '1/5';
              }else if($c3c5==4){
                echo '1/3';
              }else if($c3c5==5){
                echo '1';
              }else if($c3c5==6){
                echo '3';
              }else if($c3c5==7){
                echo '5';
              }else if($c3c5==8){
                echo '7';
              }else if($c3c5==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c5')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      <!--oneline slider c3c6--------------------------------------------------->
      <script>
          function sliderChange2157(val) {
            if (val == 1) {
              document.getElementById('sliderVal21571').innerHTML = '9';
              document.getElementById('sliderVal21572').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal21571').innerHTML = '7';
              document.getElementById('sliderVal21572').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal21571').innerHTML = '5';
              document.getElementById('sliderVal21572').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal21571').innerHTML = '3';
              document.getElementById('sliderVal21572').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal21571').innerHTML = '1';
              document.getElementById('sliderVal21572').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal21571').innerHTML = '1/3';
              document.getElementById('sliderVal21572').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal21571').innerHTML = '1/5';
              document.getElementById('sliderVal21572').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal21571').innerHTML = '1/7';
              document.getElementById('sliderVal21572').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal21571').innerHTML = '1/9';
              document.getElementById('sliderVal21572').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c3')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal21571">
          <?php 
                      foreach($kriteria as $a){ 
                      if($a->crit_id=='c3'){
                        if($a->p6==$v1){
                          $c3c6 = 1;
                        }elseif($a->p6==$v2){
                          $c3c6 = 2;
                        }elseif($a->p6==$v3){
                          $c3c6 = 3;
                        }elseif($a->p6==$v4){
                          $c3c6 = 4;
                        }elseif($a->p6==$v5){
                          $c3c6 = 5;
                        }elseif($a->p6==$v6){
                          $c3c6 = 6;
                        }elseif($a->p6==$v7){
                          $c3c6 = 7;
                        }elseif($a->p6==$v8){
                          $c3c6 = 8;
                        }elseif($a->p6==$v9){
                          $c3c6 = 9;
                        }
                      }
                    }
                      
                      
                    ?>
                    

              <?php if($c3c6==1){
                echo '9';
              }else if($c3c6==2){
                echo '7';
              }else if($c3c6==3){
                echo '5';
              }else if($c3c6==4){
                echo '3';
              }else if($c3c6==5){
                echo '1';
              }else if($c3c6==6){
                echo '1/3';
              }else if($c3c6==7){
                echo '1/5';
              }else if($c3c6==8){
                echo '1/7';
              }else if($c3c6==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c3c6" value="<?php echo $c3c6; ?>" min="1" max="9" onchange="sliderChange2157(this.value)"></th>
          <th><output id="sliderVal21572">
              <?php if($c3c6==1){
                echo '1/9';
              }else if($c3c6==2){
                echo '1/7';
              }else if($c3c6==3){
                echo '1/5';
              }else if($c3c6==4){
                echo '1/3';
              }else if($c3c6==5){
                echo '1';
              }else if($c3c6==6){
                echo '3';
              }else if($c3c6==7){
                echo '5';
              }else if($c3c6==8){
                echo '7';
              }else if($c3c4==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c6')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      
      <!--oneline slider--------------------------------------------------->
      <br>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th></th>
          <th></th>
          <th><button type="button" onclick="window.location.href = '<?php echo base_url(). '/pemahp/defc3'; ?>';" class="btn btn-primary">Kriteria <?php 
                   
                   foreach($kriteria as $a){ 
                     if($a->crit_id=='c3')
                    
                    echo $a->nama;
                    
                  ?>
                  
            <?php } ?> Default</button></th>
          <th></th>
          <th></th>
        </tr>
      </table>
      <br>
      <!--oneline slider c4c5--------------------------------------------------->
      <script>
          function sliderChange14157(val) {
            if (val == 1) {
              document.getElementById('sliderVal141571').innerHTML = '9';
              document.getElementById('sliderVal141572').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal141571').innerHTML = '7';
              document.getElementById('sliderVal141572').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal141571').innerHTML = '5';
              document.getElementById('sliderVal141572').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal141571').innerHTML = '3';
              document.getElementById('sliderVal141572').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal141571').innerHTML = '1';
              document.getElementById('sliderVal141572').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal141571').innerHTML = '1/3';
              document.getElementById('sliderVal141572').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal141571').innerHTML = '1/5';
              document.getElementById('sliderVal141572').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal141571').innerHTML = '1/7';
              document.getElementById('sliderVal141572').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal141571').innerHTML = '1/9';
              document.getElementById('sliderVal141572').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c4')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal141571">
          <?php 
                      foreach($kriteria as $a){ 
                        if($a->crit_id=='c4'){
                          if($a->p5==$v1){
                            $c4c5 = 1;
                          }elseif($a->p5==$v2){
                            $c4c5 = 2;
                          }elseif($a->p5==$v3){
                            $c4c5 = 3;
                          }elseif($a->p5==$v4){
                            $c4c5 = 4;
                          }elseif($a->p5==$v5){
                            $c4c5 = 5;
                          }elseif($a->p5==$v6){
                            $c4c5 = 6;
                          }elseif($a->p5==$v7){
                            $c4c5 = 7;
                          }elseif($a->p5==$v8){
                            $c4c5 = 8;
                          }elseif($a->p5==$v9){
                            $c4c5 = 9;
                          }
                        }
                      }

                      
                      
                    ?>
                    
              <?php if($c4c5==1){
                echo '9';
              }else if($c4c5==2){
                echo '7';
              }else if($c4c5==3){
                echo '5';
              }else if($c4c5==4){
                echo '3';
              }else if($c4c5==5){
                echo '1';
              }else if($c4c5==6){
                echo '1/3';
              }else if($c4c5==7){
                echo '1/5';
              }else if($c4c5==8){
                echo '1/7';
              }else if($c4c5==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c4c5" value="<?php echo $c4c5; ?>" min="1" max="9" onchange="sliderChange14157(this.value)"></th>
          <th><output id="sliderVal141572">
              <?php if($c4c5==1){
                echo '1/9';
              }else if($c4c5==2){
                echo '1/7';
              }else if($c4c5==3){
                echo '1/5';
              }else if($c4c5==4){
                echo '1/3';
              }else if($c4c5==5){
                echo '1';
              }else if($c4c5==6){
                echo '3';
              }else if($c4c5==7){
                echo '5';
              }else if($c4c5==8){
                echo '7';
              }else if($c4c5==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c5')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      <!--oneline slider c4c6--------------------------------------------------->
      <script>
          function sliderChange114157(val) {
            if (val == 1) {
              document.getElementById('sliderVal1141571').innerHTML = '9';
              document.getElementById('sliderVal1141572').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal1141571').innerHTML = '7';
              document.getElementById('sliderVal1141572').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal1141571').innerHTML = '5';
              document.getElementById('sliderVal1141572').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal1141571').innerHTML = '3';
              document.getElementById('sliderVal1141572').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal1141571').innerHTML = '1';
              document.getElementById('sliderVal1141572').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal1141571').innerHTML = '1/3';
              document.getElementById('sliderVal1141572').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal1141571').innerHTML = '1/5';
              document.getElementById('sliderVal1141572').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal1141571').innerHTML = '1/7';
              document.getElementById('sliderVal1141572').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal1141571').innerHTML = '1/9';
              document.getElementById('sliderVal1141572').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c4')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal1141571">
          <?php 
                     foreach($kriteria as $a){ 
                      if($a->crit_id=='c4'){
                        if($a->p6==$v1){
                          $c4c6 = 1;
                        }elseif($a->p6==$v2){
                          $c4c6 = 2;
                        }elseif($a->p6==$v3){
                          $c4c6 = 3;
                        }elseif($a->p6==$v4){
                          $c4c6 = 4;
                        }elseif($a->p6==$v5){
                          $c4c6 = 5;
                        }elseif($a->p6==$v6){
                          $c4c6 = 6;
                        }elseif($a->p6==$v7){
                          $c4c6 = 7;
                        }elseif($a->p6==$v8){
                          $c4c6 = 8;
                        }elseif($a->p6==$v9){
                          $c4c6 = 9;
                        }
                      }
                    }
                      
                      
                    ?>
                    
              <?php if($c4c6==1){
                echo '9';
              }else if($c4c6==2){
                echo '7';
              }else if($c4c6==3){
                echo '5';
              }else if($c4c6==4){
                echo '3';
              }else if($c4c6==5){
                echo '1';
              }else if($c4c6==6){
                echo '1/3';
              }else if($c4c6==7){
                echo '1/5';
              }else if($c4c6==8){
                echo '1/7';
              }else if($c4c6==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c4c6" value="<?php echo $c4c6; ?>" min="1" max="9" onchange="sliderChange114157(this.value)"></th>
          <th><output id="sliderVal1141572">
              <?php if($c4c6==1){
                echo '1/9';
              }else if($c4c6==2){
                echo '1/7';
              }else if($c4c6==3){
                echo '1/5';
              }else if($c4c6==4){
                echo '1/3';
              }else if($c4c6==5){
                echo '1';
              }else if($c4c6==6){
                echo '3';
              }else if($c4c6==7){
                echo '5';
              }else if($c4c6==8){
                echo '7';
              }else if($c4c6==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c6')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
     
      <!--oneline slider--------------------------------------------------->
      <br>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th></th>
          <th></th>
          <th><button type="button" onclick="window.location.href = '<?php echo base_url(). '/pemahp/defc4'; ?>';" class="btn btn-primary">Kriteria <?php 
                   
                   foreach($kriteria as $a){ 
                     if($a->crit_id=='c4')
                    
                    echo $a->nama;
                    
                  ?>
                  
            <?php } ?> Default</button></th>
          <th></th>
          <th></th>
        </tr>
      </table>
      <br>
      <!--oneline slider c5c6--------------------------------------------------->
      <script>
          function sliderChange1314157(val) {
            if (val == 1) {
              document.getElementById('sliderVal13141571').innerHTML = '9';
              document.getElementById('sliderVal13141572').innerHTML = '1/9';
            }else if(val == 2){
              document.getElementById('sliderVal13141571').innerHTML = '7';
              document.getElementById('sliderVal13141572').innerHTML = '1/7';
            }else if(val == 3){
              document.getElementById('sliderVal13141571').innerHTML = '5';
              document.getElementById('sliderVal13141572').innerHTML = '1/5';
            }else if(val == 4){
              document.getElementById('sliderVal13141571').innerHTML = '3';
              document.getElementById('sliderVal13141572').innerHTML = '1/3';
            }else if(val == 5){
              document.getElementById('sliderVal13141571').innerHTML = '1';
              document.getElementById('sliderVal13141572').innerHTML = '1';
            }else if(val == 6){
              document.getElementById('sliderVal13141571').innerHTML = '1/3';
              document.getElementById('sliderVal13141572').innerHTML = '3';
            }else if(val == 7){
              document.getElementById('sliderVal13141571').innerHTML = '1/5';
              document.getElementById('sliderVal13141572').innerHTML = '5';
            }else if(val == 8){
              document.getElementById('sliderVal13141571').innerHTML = '1/7';
              document.getElementById('sliderVal13141572').innerHTML = '7';
            }else if(val == 9){
              document.getElementById('sliderVal13141571').innerHTML = '1/9';
              document.getElementById('sliderVal13141572').innerHTML = '9';
            }
          document.getElementById('sliderVal').innerHTML = val;
          }
      </script>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c5')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
          <th><output id="sliderVal13141571">
          <?php 
                    foreach($kriteria as $a){ 
                      if($a->crit_id=='c5'){
                        if($a->p6==$v1){
                          $c5c6 = 1;
                        }elseif($a->p6==$v2){
                          $c5c6 = 2;
                        }elseif($a->p6==$v3){
                          $c5c6 = 3;
                        }elseif($a->p6==$v4){
                          $c5c6 = 4;
                        }elseif($a->p6==$v5){
                          $c5c6 = 5;
                        }elseif($a->p6==$v6){
                          $c5c6 = 6;
                        }elseif($a->p6==$v7){
                          $c5c6 = 7;
                        }elseif($a->p6==$v8){
                          $c5c6 = 8;
                        }elseif($a->p6==$v9){
                          $c5c6 = 9;
                        }
                      }
                    }

                      
                      
                    ?>
                    
              <?php if($c5c6==1){
                echo '9';
              }else if($c5c6==2){
                echo '7';
              }else if($c5c6==3){
                echo '5';
              }else if($c5c6==4){
                echo '3';
              }else if($c5c6==5){
                echo '1';
              }else if($c5c6==6){
                echo '1/3';
              }else if($c5c6==7){
                echo '1/5';
              }else if($c5c6==8){
                echo '1/7';
              }else if($c5c6==9){
                echo '1/9';
              } ?>
          </output></th>
          <th><input type="range" class="custom-range" id="customRange1" name="c5c6" value="<?php echo $c5c6; ?>" min="1" max="9" onchange="sliderChange1314157(this.value)"></th>
          <th><output id="sliderVal13141572">
              <?php if($c5c6==1){
                echo '1/9';
              }else if($c5c6==2){
                echo '1/7';
              }else if($c5c6==3){
                echo '1/5';
              }else if($c5c6==4){
                echo '1/3';
              }else if($c5c6==5){
                echo '1';
              }else if($c5c6==6){
                echo '3';
              }else if($c5c6==7){
                echo '5';
              }else if($c5c6==8){
                echo '7';
              }else if($c5c6==9){
                echo '9';
              } ?>
          </output></th>
          <th>
          <?php 
                   
                     foreach($kriteria as $a){ 
                       if($a->crit_id=='c6')
                      
                      echo $a->nama;
                      
                    ?>
                    
              <?php } ?>
          </th>
        </tr>
      </table>
      <!--oneline slider--------------------------------------------------->
      
      <!--oneline slider--------------------------------------------------->
      <br>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th></th>
          <th></th>
          <th><button type="button" onclick="window.location.href = '<?php echo base_url(). '/pemahp/defc5'; ?>';" class="btn btn-primary">Kriteria <?php 
                   
                   foreach($kriteria as $a){ 
                     if($a->crit_id=='c5')
                    
                    echo $a->nama;
                    
                  ?>
                  
            <?php } ?> Default</button></th>
          <th></th>
          <th></th>
        </tr>
      </table>
      <br>
      
      <br>
      <table  align="center" style="text-align:center; undefined;table-layout: fixed; width: 796px">
      <colgroup>
      <col style="width: 212px">
      <col style="width: 66px">
      <col style="width: 290px">
      <col style="width: 74px">
      <col style="width: 154px">
      </colgroup>
        <tr>
          <th><button type="submit" class="btn btn-success">SIMPAN</button></th>
          <th></th>
          <th></th>
          <th></th>
          <th><button type="button" onclick="window.location.href = '<?php echo base_url(). '/pemahp/defall'; ?>';" class="btn btn-primary">All Kriteria Default</button></th>
        </tr>
      </table>
                   </form>
      <br>
      
      </div>

  </div>
</div>