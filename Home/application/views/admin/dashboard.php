<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
<div class="container headbg-mar">
            <!-- Page Content -->
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget clearfix card-box">
                            <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                            <div class="dash-widget-info">
                                <h3><?php echo count($new_users) ?></h3>
                                <span>New users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget clearfix card-box">
                            <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                            <div class="dash-widget-info">
                                <h3><?php echo count($creators) ?></h3>
                                <span> Help-seekers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget clearfix card-box">
                            <span class="dash-widget-icon"><i class="fa fa-podcast"></i></span>
                            <div class="dash-widget-info">
                                <h3><?php echo count($influencers) ?></h3>
                                <span>Total Donators</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget clearfix card-box">
                            <span class="dash-widget-icon"><i class="fa fa-paper-plane"></i></span>
                            <div class="dash-widget-info">
                                <h3>$ <?php echo !empty($donated)?number_format($donated['amount'],2):'0.00'; ?></h3>
                                <span>Donated</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                            <div class="card-footer">
                                <h3 class="card-title mb-0">Help-seekers</h3>
                            </div>
                            <div class="card hero-slide-nineteen-table aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Campaign</th>
                                            <!--     <th>Likes</th> -->
                                                <!-- <th>Status</th> -->
                                                <th style="width:20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            foreach ($get_medias as  $c) {
                                                echo '<tr id="row_'.$c['id'].'">'.
                                                        '<td>'.$i++.'</td>'.
                                                        '<td>'.$c['first_name'].' '.$c['last_name'].'</td>'.
                                                        '<td>'.$c['email'].'</td>'.
                                                        '<td>'.$c['name'].'</td>'.
                                                        '<td>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;" data-original-title="Delete User" onclick="delete_user('.$c['id'].')"><i class="fa fa-times"></i></a>
                                                    </td>'.
                                                      '</tr>';
                                            }
                                             ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function delete_user(id){
                                    if(confirm('Are you sure to delete this user ?')){
                                    $.post('<?php echo base_url(); ?>dashboard/delete_user',{id:id},function(res){
                                        $('#row_'+id).remove();
                                    });
                                }
                                }
                            </script>
                            <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;" data-original-title="Edit User"><i class="fa fa-edit"></i></a>
                             -->
                            <div class="card-footer">
                                <a href="<?php echo base_url(); ?>creators">View all help-seekers</a>
                            </div>
                       
                    </div>
                    <div class="col-md-6">
                            <div class="card-footer">
                                <h3 class="card-title mb-0">Donators</h3>
                            </div>
                            <div class="card hero-slide-nineteen-table aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="table-responsive">  
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <!-- <th>Campaign</th>
                                                <th>Category</th>
                                                <th>Action</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $j=1;
                                            foreach ($influencers as $i) {
                                                    echo '<tr id="row_'.$i['id'].'">
                                                            <td>'.$j++.'</td>
                                                            <td>'.$i['first_name'].' '.$i['last_name'].'</td>
                                                            <td>'.$i['email'].'</td>'.
                                                            '<td>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;" data-original-title="Delete User" onclick="delete_user('.$i['id'].')"><i class="fa fa-times"></i></a>
                                                    </td>

                                                            </tr>';
                                                    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url(); ?>donators">View all Donators</a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>