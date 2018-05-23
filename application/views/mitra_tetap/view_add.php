<?php echo form_open('mitra_tetap/add'); ?>
<section class="content">
        <div class="container-fluid">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Mitra Tetap
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form>

                                <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="nama" id="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control">
                                                <label class="form-label">Nama</label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="handpone" id="handpone" value="<?php echo $this->input->post('handpone');?>" class="form-control">
                                                <label class="form-label">No. Hp</label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="email" id="email" value="<?php echo $this->input->post('email');?>" class="form-control">
                                                <label class="form-label">Email Address</label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="address" id="address" value="<?php echo $this->input->post('address');?>" cols="10" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                    </div>

                                <div class="col-md-6">
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jambuka" id="jambuka" value="<?php echo $this->input->post('jambuka');?>"class="timepicker form-control" placeholder="Atur Jam Buka">
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="jamtutup" id="jamtutup" value="<?php echo $this->input->post('jamtutup');?>" class="timepicker form-control" placeholder="Atur Jam Tutup.">
                                        </div>
                                    </div>
                                    </div>  
                                               

                                <div class="col-md-6">
                                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" id="description" value="<?php echo $this->input->post('description');?>" cols="10" rows="3" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                    </div>

                                     <div class="col-md-6">
                                    <select required name="status" class="form-control show-tick">
                                     <option value="">Pilih Status</option>
                                        <?php 
                                    foreach($stat as $status)
                                    {
                                        $selected = ($status['mst_id_status'] == $this->input->post('status')) ? ' selected="selected"' : "";

                                        echo '<option value="'.$status['mst_id_status'].'" '.$selected.'>'.$status['mst_name_status'].'</option>';
                                    } 
                                    ?>
                                    </select>
                                </div>
                                
                                
                                <button type="submit" class="btn bg-orange waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SAVE</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
 <?php echo form_close(); ?>