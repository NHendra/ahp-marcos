


<div class="card">
  <div class="card-body">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Tambah Data Alternatif
                </button>
      <div class="form-group">

     

      
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Alternatif</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('alternatif/simpan'); ?>" method="post">
                <table>
                  
                    
                      <div class="form-group">
                      <label for="exampleInputEmail1">Kode Alternatif</label>
                      <input type="text" class="form-control" name="kode" required>
                      </div>
                   
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Alternatif</label>
                      <input type="text" class="form-control" name="nama" required>
                      </div>
                    
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $a){ if($a->crit_id=='c1'){echo $a->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c1" required>
                      </div>
                   
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $a){ if($a->crit_id=='c2'){echo $a->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c2" required>
                      </div>
                  
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $a){ if($a->crit_id=='c3'){echo $a->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c3" required>
                      </div>
                   
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $a){ if($a->crit_id=='c4'){echo $a->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c4" required>
                      </div>
                  
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $a){ if($a->crit_id=='c5'){echo $a->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c5" required>
                      </div>
                  
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $a){ if($a->crit_id=='c6'){echo $a->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c6" required>
                      </div>
                  
                 
                </table>       
                <!-- /.card-body -->

            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-success">Simpan</button></form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>




  
      

      <br>
      <table id="data_pi" class="table table-bordered table-striped" style="text-align: center;">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama Alternatif</th>
                      <th><?php foreach($kriteria as $a){ if($a->crit_id=='c1'){echo $a->nama;} } ?></th>
                      <th><?php foreach($kriteria as $a){ if($a->crit_id=='c2'){echo $a->nama;} } ?></th>
                      <th><?php foreach($kriteria as $a){ if($a->crit_id=='c3'){echo $a->nama;} } ?></th>
                      <th><?php foreach($kriteria as $a){ if($a->crit_id=='c4'){echo $a->nama;} } ?></th>
                      <th><?php foreach($kriteria as $a){ if($a->crit_id=='c5'){echo $a->nama;} } ?></th>
                      <th><?php foreach($kriteria as $a){ if($a->crit_id=='c6'){echo $a->nama;} } ?></th>
                      <th>Alat</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
                    $n=1;
                   foreach($alternatif as $a){                                   
                  ?>
                      <tr>
                      <td><?php echo $n; ?></td>
                      <td><?php echo $a->kode; ?></td>
                      <td><?php echo $a->nama; ?></td>
                      <td><?php echo $a->c1; ?></td>
                      <td><?php echo $a->c2; ?></td>
                      <td><?php echo $a->c3; ?></td>
                      <td><?php echo $a->c4; ?></td>
                      <td><?php echo $a->c5; ?></td>
                      <td><?php echo $a->c6; ?></td>
                      <td>
                      <div class="btn-group">
                      


                      <a href="#" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#modal-default2<?php echo $n; ?>"><i class="fas fa-edit"></i></a>
    
        <div class="modal fade" id="modal-default2<?php echo $n; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data Alternatif <?php echo $a->nama; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('alternatif/edit/'.$a->id); ?>" method="post">
                <table>
                  
                    
                      <div class="form-group">
                      <label for="exampleInputEmail1">Kode Alternatif</label>
                      <input type="text" class="form-control" name="kode" value="<?php echo $a->kode; ?>" required>
                      </div>
                   
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nama Alternatif</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $a->nama; ?>" required>
                      </div>
                    
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $i){ if($i->crit_id=='c1'){echo $i->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c1" value="<?php echo $a->c1; ?>" required>
                      </div>
                   
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $i){ if($i->crit_id=='c2'){echo $i->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c2" value="<?php echo $a->c2; ?>" required>
                      </div>
                  
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $i){ if($i->crit_id=='c3'){echo $i->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c3" value="<?php echo $a->c3; ?>" required>
                      </div>
                   
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $i){ if($i->crit_id=='c4'){echo $i->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c4" value="<?php echo $a->c4; ?>" required>
                      </div>
                  
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $i){ if($i->crit_id=='c5'){echo $i->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c5" value="<?php echo $a->c5; ?>" required>
                      </div>
                  
                      <div class="form-group">
                      <label for="exampleInputPassword1"><?php foreach($kriteria as $i){ if($i->crit_id=='c6'){echo $i->nama;} } ?></label>
                      <input type="number" step="0.0001" class="form-control" name="c6" value="<?php echo $a->c6; ?>" required>
                      </div>
                  
                 
                </table>       
                <!-- /.card-body -->

            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-success">Simpan</button></form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>





      <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-sm<?php echo $n; ?>"><i class="fas fa-trash-alt"></i></a>


      <div class="modal fade" id="modal-sm<?php echo $n; ?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Yakin Menghapus?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> <?php echo $a->nama; ?></p>
            </div>
            <div class="modal-footer justify-content-between">
            <form action="<?php echo base_url('alternatif/delete/'.$a->id); ?>"><button type="submit" class="btn btn-danger">Hapus</button></form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->








                               
                            </div></td>
                      </tr>
                      <?php $n++; ?>           
                <?php } ?>
                    
                  </tbody>
                  </table>
                  <br>
                  <?php if(session()->getFlashdata('success')):?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif;?>
                <?php if(session()->getFlashdata('hapus')):?>
                    <div class="alert alert-warning"><?= session()->getFlashdata('hapus') ?></div>
                <?php endif;?>

      </div>
  </div>
</div>





  