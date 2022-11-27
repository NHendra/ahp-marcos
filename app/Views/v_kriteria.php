
<div class="row">
  <div class="col-md-6">
    <div class="card card-default">
      <div class="card-header bg-dark">
        <h3 class="card-title">
        <i class="fas fa-bars"></i>
          Data Kriteria
        </h3>
     
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        
      <form action="<?php echo base_url('kriteria/edit/'); ?>" method="post">
      <br>
                  <?php if(session()->getFlashdata('success')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif;?>
                <?php if(session()->getFlashdata('hapus')):?>
                    <div class="alert alert-warning"><?= session()->getFlashdata('hapus') ?></div>
                <?php endif;?>

<table width="100%">
<tbody>
  <tr>
    <td colspan="2">
    <div class="form-group">
             <label for="exampleInputPassword1">Kriteria Pertama</label>
             
             </div>
             </td>
  </tr>

  <tr>
    <td><div class="form-group">
             <input type="text" class="form-control" name="c1" value="<?php foreach($kriteria as $a){if($a->crit_id=='c1'){echo $a->nama;}}?>" >
             </div>
    
    </td>
    <td align='center'><div class="form-group clearfix">
                      <div class="icheck-warning d-inline">
                        <input type="radio" value="0" id="radioPrimary1" name="cc1" <?php foreach($kriteria as $a){if($a->crit_id=='c1'){if($a->cosben=='0'){echo 'checked';}}}?>>
                        <label for="radioPrimary1">COST
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="1" id="radioPrimary2" name="cc1"<?php foreach($kriteria as $a){if($a->crit_id=='c1'){if($a->cosben=='1'){echo 'checked';}}}?>>
                        <label for="radioPrimary2">BENEFIT
                        </label>
                      </div>
                    </div>
    
    </td>
  </tr>
  <tr>
    <td colspan="2"><div class="form-group">
             <label for="exampleInputPassword1">Kriteria Kedua</label>
             
             </div></td>
  </tr>
  <tr>
    <td><div class="form-group">
            
             <input type="text" class="form-control" name="c2" value="<?php foreach($kriteria as $a){if($a->crit_id=='c2'){echo $a->nama;}}?>">
             </div></td>
    <td align='center'><div class="form-group clearfix">
                      <div class="icheck-warning d-inline">
                        <input type="radio" value="0" id="radioPrimary11" name="cc2" <?php foreach($kriteria as $a){if($a->crit_id=='c2'){if($a->cosben=='0'){echo 'checked';}}}?>>
                        <label for="radioPrimary11">COST
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="1" id="radioPrimary21" name="cc2"<?php foreach($kriteria as $a){if($a->crit_id=='c2'){if($a->cosben=='1'){echo 'checked';}}}?>>
                        <label for="radioPrimary21">BENEFIT
                        </label>
                      </div>
                    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div class="form-group">
             <label for="exampleInputPassword1">Kriteria Ketiga</label>
             
             </div></td>
  </tr>
  <tr>
    <td><div class="form-group">
             
             <input type="text" class="form-control" name="c3" value="<?php foreach($kriteria as $a){if($a->crit_id=='c3'){echo $a->nama;}}?>">
             </div></td>
    <td align='center'><div class="form-group clearfix">
                      <div class="icheck-warning d-inline">
                        <input type="radio" value="0" id="radioPrimary13" name="cc3" <?php foreach($kriteria as $a){if($a->crit_id=='c3'){if($a->cosben=='0'){echo 'checked';}}}?>>
                        <label for="radioPrimary13">COST
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="1" id="radioPrimary23" name="cc3"<?php foreach($kriteria as $a){if($a->crit_id=='c3'){if($a->cosben=='1'){echo 'checked';}}}?>>
                        <label for="radioPrimary23">BENEFIT
                        </label>
                      </div>
                    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div class="form-group">
             <label for="exampleInputPassword1">Kriteria Keempat</label>
             
             </div></td>
  </tr>
  <tr>
    <td><div class="form-group">
             
             <input type="text" class="form-control" name="c4" value="<?php foreach($kriteria as $a){if($a->crit_id=='c4'){echo $a->nama;}}?>">
             </div></td>
    <td align='center'><div class="form-group clearfix">
                      <div class="icheck-warning d-inline">
                        <input type="radio" value="0" id="radioPrimary14" name="cc4" <?php foreach($kriteria as $a){if($a->crit_id=='c4'){if($a->cosben=='0'){echo 'checked';}}}?>>
                        <label for="radioPrimary14">COST
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="1" id="radioPrimary24" name="cc4"<?php foreach($kriteria as $a){if($a->crit_id=='c4'){if($a->cosben=='1'){echo 'checked';}}}?>>
                        <label for="radioPrimary24">BENEFIT
                        </label>
                      </div>
                    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div class="form-group">
             <label for="exampleInputPassword1">Kriteria Kelima</label>
             </div></td>
  </tr>
  <tr>
    <td><div class="form-group">
             <input type="text" class="form-control" name="c5" value="<?php foreach($kriteria as $a){if($a->crit_id=='c5'){echo $a->nama;}}?>">
             </div></td>
    <td align='center'><div class="form-group clearfix">
                      <div class="icheck-warning d-inline">
                        <input type="radio" value="0" id="radioPrimary15" name="cc5" <?php foreach($kriteria as $a){if($a->crit_id=='c5'){if($a->cosben=='0'){echo 'checked';}}}?>>
                        <label for="radioPrimary15">COST
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="1" id="radioPrimary25" name="cc5"<?php foreach($kriteria as $a){if($a->crit_id=='c5'){if($a->cosben=='1'){echo 'checked';}}}?>>
                        <label for="radioPrimary25">BENEFIT
                        </label>
                      </div>
                    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div class="form-group">
             <label for="exampleInputPassword1">Kriteria Keenam</label>
             </div></td>
  </tr>
  <tr>
    <td><div class="form-group">
             <input type="text" class="form-control" name="c6" value="<?php foreach($kriteria as $a){if($a->crit_id=='c6'){echo $a->nama;}}?>">
             </div></td>
    <td align='center'><div class="form-group clearfix">
                      <div class="icheck-warning d-inline">
                        <input type="radio" value="0" id="radioPrimary16" name="cc6" <?php foreach($kriteria as $a){if($a->crit_id=='c6'){if($a->cosben=='0'){echo 'checked';}}}?>>
                        <label for="radioPrimary16">COST
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" value="1" id="radioPrimary26" name="cc6"<?php foreach($kriteria as $a){if($a->crit_id=='c6'){if($a->cosben=='1'){echo 'checked';}}}?>>
                        <label for="radioPrimary26">BENEFIT
                        </label>
                      </div>
                    </div></td>
  </tr>
</tbody>
</table>
       
             

             
        
             

             
         
             

             
          
             

             
        
             

             
         
             

             
        
       
         <td colspan="8"><button type="submit" class="btn btn-success">SIMPAN</button></td>
           

</tr></form>
</table>



      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->





        









        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->






  