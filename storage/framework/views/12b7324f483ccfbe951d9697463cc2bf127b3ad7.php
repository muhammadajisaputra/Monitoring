<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Monitoring
        <small>Tabung Gas LPG</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>STATUS</th>
                  <th>Tanggal/Waktu</th>
                </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexKey => $DataJadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                  <td><?php echo e($indexKey+1); ?></td>
                  <td>
                    <?php if($DataJadwal->status): ?>
                      Tutup
                    <?php else: ?>
                      Buka
                    <?php endif; ?>
                  </td>
                  <td> <?php echo e($DataJadwal->created_at); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.adminlte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>