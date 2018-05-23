
<section class="content">
        <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TICKETS</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MITRA TETAP
                            </h2>
                            
                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
								<a href="<?php echo site_url('mitra_tetap/add'); ?>" class="btn bg-cyan btn-block btn-lg waves-effect">Add new</a>
							</div>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No. Handpone</th>
                                            <th>Jam Buka</th>
                                            <th>Jam Tutup</th>
                                            <th>Status</th>
                                            <th>Tools</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No. Handpone</th>
                                            <th>Jam Buka</th>
                                            <th>Jam Tutup</th>
                                            <th>Status</th>
                                            <th>Status</th>

                                        </tr>
                                    </tfoot>
                                    <?php
                                    $no = 1;
                                    foreach ($petugas as $mitra_tetap) {
                                        ?>
                                    <tbody>
                                        <tr>
											<td><?php echo $no++;?></td>
                                            <td><?php echo $mitra_tetap['mst_name'];?></td>
                                            <td><?php echo $mitra_tetap['mst_email'];?></td>
											<td><?php echo $mitra_tetap['mst_adress'];?></td>
											<td><?php echo $mitra_tetap['mst_handpone'];?></td>
											<td><?php echo $mitra_tetap['mst_time_open'];?></td>
											<td><?php echo $mitra_tetap['mst_time_closed'];?></td>
                                            <td>
                                            <!--untuk aktif -->
                                            <?php if($mitra_tetap['mst_name_status']=='Aktif'){?><span class="label bg-blue"><?php echo $mitra_tetap['mst_name_status'];?></span>

                                            <?php }else { ?>

                                            <!--untuk tidak aktif -->
                                            <span class="label bg-red"><?php echo $mitra_tetap['mst_name_status'];?></span> <?php }?>

                                            </td>




                                            <td>
                                            <a href="<?php echo site_url('mitra_tetap/edit/'.$mitra_tetap['mst_id_mitra']); ?>" class="btn btn-info btn-xs">Edit</a> 
                                        </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>