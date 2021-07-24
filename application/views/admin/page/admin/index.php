 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800">Manajemen Website</h1>
     <p class="mb-4">Berikut merupakan beberapa pengaturan yang dapat dilakukan di Website E-Informatics</p>
     <!-- Kepengurusan -->
     <!-- This is the insert flash message -->
     <div class="accordion" id="ManajemenWebsite">
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#jabatan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="jabatan">
                 <h6 class="m-0 font-weight-bold text-primary">Data Jabatan</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="jabatan" data-parent="#ManajemenWebsite">
                 <div class="card-body">
                     <p>
                         <?= anchor('admin/tambah_jabatan', '<button class="btn btn-primary btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-flag"></i>
				</span><span class="text">Tambah Jabatan</span></button> ') ?>
                     </p>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableKepengurusan" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Nama Jabatan</th>
                                     <th>Dibuat Pada</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $i = 1;
                                    foreach ($jabatan as $data) : ?>
                                 <tr>
                                     <td><?= $i++ ?></td>
                                     <td><?= htmlspecialchars($data['nama_pilihan'], ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td><?= htmlspecialchars($data['create_at'], ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td>
                                         <?= anchor("admin/edit_jabatan/" . $data['id_pilihan'], ' <button class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></button>'); ?>
                                         <?= anchor("admin/hapus_jabatan/" . $data['id_pilihan'], ' <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>', array('class' => 'tombol-hapus')); ?>
                                     </td>
                                 </tr>
                                 <?php endforeach ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#kepengurusan" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="kepengurusan">
                 <h6 class="m-0 font-weight-bold text-primary">Data User Website</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="kepengurusan" data-parent="#ManajemenWebsite">
                 <div class="card-body col-12 row">
                     <p class="pr-3">
                         <?= anchor('admin/tambah_user', '<button class="btn btn-primary btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-flag"></i>
				</span><span class="text">Tambah User</span></button> ') ?> </p>
                     <p>
                         <?= anchor('admin/tambah_group', '<button class="btn btn-success btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-plus"></i>
                </span><span class="text">Tambah Level</span></button>') ?></p>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableUser" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>IP Login</th>
                                     <th>ID Email</th>
                                     <th>NIM</th>
                                     <th>Nama Lengkap</th>
                                     <th>Jabatan</th>
                                     <th>No Telp</th>
                                     <th>Level User</th>
                                     <th>Login Terakhir</th>
                                     <th>Aktivasi</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $i = 1;
                                    foreach ($users as $user) : ?>
                                 <tr>
                                     <td><?= $i++; ?></td>
                                     <td><?= htmlspecialchars($user->ip_address, ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td><?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td><?= htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td><?= htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td><?= htmlspecialchars($user->nama_pilihan, ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td><?= htmlspecialchars($user->phone, ENT_QUOTES, 'UTF-8'); ?></td>
                                     <td>
                                         <?php foreach ($user->groups as $group) : ?>
                                         <?= anchor("admin/edit_group/" . $group->id, '<button class="btn btn-warning btn-sm btn-icon-split">
                    						<span class="icon text-white-50">
                      						<i class="fas fa-edit"></i>
                    						</span>
                    						<span class="text">' . $group->name . '</span>
                  					</button>', ENT_QUOTES, 'UTF-8'); ?><br>
                                         <?php endforeach ?>
                                     </td>
                                     <td><?= htmlspecialchars(date("H:i:s d-m-Y", $user->last_login), ENT_QUOTES, 'UTF-8'); ?>
                                     </td>
                                     <td><?= ($user->active) ? anchor("auth/deactivate/" . $user->id, '<button class="btn btn-success btn-sm btn-icon-split">
                    				<span class="icon text-white-50">
                      				<i class="fas fa-check"></i>
                    				</span>
                    				<span class="text">Aktif</span>
                  					</button>') : anchor("auth/activate/" . $user->id, '<button class="btn btn-secondary btn-sm btn-icon-split">
                    				<span class="icon text-white-50">
                      				<i class="fas fa-times"></i>
                    				</span>
                    				<span class="text">Non-Aktif</span>
                  					</button>'); ?></td>
                                     <td>
                                         <?= anchor("admin/edit_user/" . $user->id, ' <button class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></button>'); ?>
                                         <?= anchor("admin/hapus_user/" . $user->id, ' <button class="btn btn-danger btn-circle btn-sm mt-2"><i class="fas fa-trash"></i></button>', array('class' => 'tombol-hapus')); ?>
                                     </td>
                                 </tr>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <div class="card shadow mb-4">
             <!-- Card Header - Accordion -->
             <a href="#landing" class="d-block card-header py-3" data-toggle="collapse" role="button"
                 aria-expanded="true" aria-controls="landing">
                 <h6 class="m-0 font-weight-bold text-primary">Data Pengaturan Landing Page</h6>
             </a>
             <!-- Card Content - Collapse -->
             <div class="collapse" id="landing" data-parent="#ManajemenWebsite">
                 <div class="ml-4 mr-4 mt-4">
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                         <i class="fas fa-info-circle "></i> Info
                         <p> Anda Hanya Dapat Menyetel Tipe Main Pada Icon/Links Sebanyak <strong>4 Icon/Links</strong>,
                             Pastikan Yang Anda Memilih Icon/Links Yang Tepat</p>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>

                     </div>
                 </div>
                 <div class="card-body">
                     <p>
                         <?= anchor('admin/tambah_landing', '<button class="btn btn-primary btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-flag"></i>
				</span><span class="text">Tambah Landing</span></button> ') ?>
                     </p>
                     <div class="table-responsive">
                         <table class="table table-bordered" id="tableLanding" width="100%" cellspacing="0">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Title</th>
                                     <th>Icon</th>
                                     <th>Href</th>
                                     <th>Tipe</th>
                                     <th>Fitur</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $i = 1;
                                    foreach ($landing as $data) : ?>
                                 <tr>
                                     <td><?= $i++ ?></td>
                                     <td><?= $data['title'] ?></td>
                                     <td>
                                         <ul>
                                             <li>Nama Icon : <?= $data['icon'] ?></li>
                                             <li> Logo Icon : <i class="<?= $data['icon'] ?>"></i></li>
                                         </ul>
                                     </td>
                                     <td><a
                                             href="<?= base_url() ?><?= $data['href'] ?>"><?= base_url() ?><?= $data['href'] ?></a>
                                     </td>
                                     <td>
                                         <?php if ($data['type'] == "main") { ?>
                                         <?= anchor('admin/set_off/' . $data['id_links'], '<button class="btn btn-success btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-check"></i>
				</span><span class="text">' . $data['type'] . '</span></button> ') ?>
                                         <?php } else { ?>
                                         <?= anchor('admin/set_main/' . $data['id_links'], '<button class="btn btn-danger btn-sm btn-icon-split"><span class="icon text-white-50"><i class="fas fa-edit"></i>
				</span><span class="text">' . $data['type'] . '</span></button> ') ?>
                                         <?php } ?>
                                     </td>
                                     <td>
                                         <?= anchor("admin/edit_landing/" . $data['id_links'], ' <button class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></button>'); ?>
                                         <?= anchor("admin/hapus_landing/" . $data['id_links'], ' <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>', array('class' => 'tombol-hapus')); ?>
                                     </td>
                                 </tr>
                                 <?php endforeach; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>