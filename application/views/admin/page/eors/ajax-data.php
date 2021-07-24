 <?php if ($id_ajax == 1) : ?>
 <div class="card-body">
     <div class="col-lg-12 row">
         <div class="col-lg-6">
             <div class="chart-pie pt-4 pb-2">
                 <input type="hidden" value="<?= $PTI ?>" id="PTI">
                 <input type="hidden" value="<?= $SI ?>" id="SI">
                 <input type="hidden" value="<?= $MI ?>" id="MI">
                 <input type="hidden" value="<?= $ILKOM ?>" id="Ilkom">
                 <canvas id="myPieChart"></canvas>
             </div>
             <div class="mt-4 text-center small">
                 <span class="mr-2">
                     Berdasarkan Prodi :
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-primary"></i> PTI
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-success"></i> SI
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-info"></i> MI
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-warning"></i> Ilkom
                 </span>
             </div>
         </div>
         <div class="col-lg-6">
             <div class="chart-pie pt-4 pb-2">
                 <input type="hidden" value="<?= $thn_2018 ?>" id="thn_2018">
                 <input type="hidden" value="<?= $thn_2019 ?>" id="thn_2019">
                 <input type="hidden" value="<?= $thn_2020 ?>" id="thn_2020">
                 <canvas id="myAngkatanChart"></canvas>
             </div>
             <div class="mt-4 text-center small">
                 <span class="mr-2">
                     Berdasarkan Angkatan :
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-primary"></i> <?= date('Y') - 2 ?>
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-success"></i> <?= date('Y') - 1 ?>
                 </span>
                 <span class="mr-2">
                     <i class="fas fa-circle text-info"></i> <?= date('Y') ?>
                 </span>
             </div>
         </div>
     </div>
 </div>

 <?php elseif ($id_ajax == 2) : ?>
 <p>Berdasarkan Program Studi</p>
 <div>
     <div class="chart-pie pt-4 pb-2">
         <input type="hidden" value="<?= $PTI ?>" id="PTI">
         <input type="hidden" value="<?= $SI ?>" id="SI">
         <input type="hidden" value="<?= $MI ?>" id="MI">
         <input type="hidden" value="<?= $ILKOM ?>" id="Ilkom">
         <canvas id="myPieChart"></canvas>
     </div>
     <div class="mt-4 text-center small">
         <span class="mr-2">
             Berdasarkan Prodi :
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-primary"></i> PTI
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-success"></i> SI
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-info"></i> MI
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-warning"></i> Ilkom
         </span>
     </div>

     <!-- chart bar-->
     <p class="mt-4 mb-2">Berdasarkan Angkatan</p>
     <div class="chart-pie pt-4 pb-2">
         <input type="hidden" value="<?= $thn_2018 ?>" id="thn_2018">
         <input type="hidden" value="<?= $thn_2019 ?>" id="thn_2019">
         <input type="hidden" value="<?= $thn_2020 ?>" id="thn_2020">
         <canvas id="myAngkatanChart"></canvas>
     </div>
     <div class="mt-4 text-center small">
         <span class="mr-2">
             Berdasarkan Angkatan :
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-primary"></i>
             <?= date('Y') - 2                                  ?>
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-success"></i> <?= date('Y') - 1 ?>
         </span>
         <span class="mr-2">
             <i class="fas fa-circle text-info"></i> <?= date('Y') ?>
         </span>
     </div>
 </div>
 <?php endif; ?>