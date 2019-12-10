
    <div class="container p-b-30 headbg-mar">
        <div class="alert  alert-success" style="display: none;">Status updated!</div>
            <div class="row">
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- pagecaption close -->
                    <div class="row p-b-20">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                            <h3 class="card-title"><?php echo count($donators); ?> donators found</h3>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 text-right" style="display:none">
                                    <select name="sortby" id="sortby" class="m-t-10 text-right" style="padding: 5px;">
                                    <option>Sort by</option>
                                    <option>Money</option>
                                    <option>City</option>
                                    </select>
                                <a href="login-page.html" class="btn btn-brand btn-sm text-right" style="margin-top: -4px; margin-left:10px;">Export</a>
                            
                        </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 desktop-view">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search Here" aria-label="search here" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-brand" type="button" id="button-addon2" style="padding: 16px;">Go</button>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo base_url(); ?>donators/export_excel" class="btn btn-primary" ><i class="fa fa-download"></i>&nbsp; Export as Excel</a>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mobile-view">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search Here" aria-label="search here" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-brand" type="button" id="button-addon2" style="padding: 16px;">Go</button>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo base_url(); ?>donators/export_excel" class="btn btn-primary" ><i class="fa fa-download"></i>&nbsp; </a>
                                </div>
                            </div>



                                    
                    </div>
                    <!-- pagecaption start -->
                    <div class="card hero-slide-nineteen-table aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="table-responsive">
                            <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Reg ID</th>
                                                <th>Name</th>                                                
                                                <th>Email Address</th>
                                                <th>Phone No</th>
                                                <th>Status</th>
                                                <th>Donated</th>
                                                <th>Action</th>
                                                <!--<th>Donate to</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($donators)){ 
                                                $i=1;
                                                foreach($donators as $d):
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0)">AI0<?php echo $d['id']; ?> </a>
                                                </td>
                                                <td><?php echo $d['first_name'].' '.$d['last_name']; ?></td>
                                                <!-- <td>Youtube</td>
                                                <td>Food, Fun, Serial</td> -->
                                                <td><?php echo $d['email'] ?></td>
                                                <td><?php echo $d['mobile_no'] ?></td>

                                                <td><?php 
                                                //echo ($c['status'] == 1)?'Active':'Inactive'; 
                                                ?>
                                                   <select name="status" onchange="set_status(this)" id="status<?php echo $d['id']; ?>" data-user_id="<?php echo $d['id']; ?>"  >
                                                       <option value="1" <?php if($d['status'] == 1){ echo 'selected="selected" '; } ?> >Active</option>
                                                       <option value="2" <?php if($d['status'] == 2){ echo 'selected="selected" '; } ?>>Inactive</option>
                                                   </select> 
                                                </td>
                                                <td>
                                                    <b>    $ .<?php 
                                                        $where = array('donator_id' => $d['id']);
                                                        $data =  $this->db->select('SUM(amount) as amount')
                                                        ->get_where('payment_details',$where)
                                                        ->row_array(); 
                                                         echo !empty($data)?number_format($data['amount'],2):'0.00';
                                                        ?></b>
                                                </td>
                                                <td>
                                                    <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;" data-original-title="Edit User"><i class="fa fa-edit"></i></a> -->
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;" data-original-title="Delete User" onclick="delete_user(<?php echo $d['id']; ?>)" ><i class="fa fa-times"></i></a>
                                                </td>
                                                <!-- <td>Delhi</td> -->
                                                <!-- <td>RS 30</td>
                                                <td>Smile Settai</td> -->
                                            </tr>
                                            <?php 
                                                    endforeach; 
                                                } ?>

                                        </tbody>
                                    </table>
                        </div>
                        <!-- pagecaption close -->
                    </div>
                </div>
            </div>
        </div>


        <div id="creator-popup-view" class="modal custom-modal fade" role="dialog" style="z-index: 9999; margin-top: 100px;">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                                <form>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 dct-dashbd-01">
                                                    <div class="text-center">
                                                        <div class="dct-dash-img">
                                                             <img src="images/home/profile-picture.png" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="dct-dash-details">
                                                            <h3>Guhan</h3>
                                                            <p>admin@admin.com<br>From Delhi</p>
                                                        </div>
                                                        <div class="dct-dash-details p-t-30">
                                                            <h3>Guhan's Last 5 donates</h3>
                                                            <div class="table-responsive p-t10"> 
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Campaign</th>
                                                                            <th>Amount</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <td>Smile Settai</td>
                                                                        <td>Rs 30</td></tr>
                                                                        <tr>
                                                                        <td>Smile Settai</td>
                                                                        <td>Rs 30</td></tr>
                                                                        <tr>
                                                                        <td>Smile Settai</td>
                                                                        <td>Rs 30</td></tr>
                                                                        <tr>
                                                                        <td>Smile Settai</td>
                                                                        <td>Rs 30</td></tr>
                                                                        <tr>
                                                                        <td>Smile Settai</td>
                                                                        <td>Rs 30</td></tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            <div class="col-md-7 col-sm-6 dct-dashbd-02">
                                                <div class="form-group">
                                                    <form action="#" method="get" id="nameform">
                                                    <div class="col-md-12 m-t-10">
                                                        Select Profile Pictures<br>
                                                        <input type="file" name="profile-picture">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="Name" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="Email" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="Phone Number" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                            <input type="text" value="Address Line 1" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="Address Line 2" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="City" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="State" class="input-pay">
                                                    </div>

                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="Country" class="input-pay">
                                                    </div>

                                                    <div class="col-md-12 m-t-10">
                                                        <input type="text" value="Change Password" class="input-pay">
                                                    </div>
                                                    <div class="col-md-12 dct-dash-details p-b-10">
                                                            <button type="submit" form="nameform" value="Submit">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
    function set_status(element){
            var id = element.getAttribute('id');
        var status = $('#'+id).val();
        var user_id = element.getAttribute('data-user_id');
         $.post('<?php echo base_url(); ?>dashboard/set_status',{status:status,id:user_id},function(res){
                                       $('.alert').show();
                                       setTimeout(function() {
                                        $('.alert').hide();
                                       }, 2000);
                });

    }
                                function delete_user(id){
                                    if(confirm('Are you sure to delete this user ?')){
                                    $.post('<?php echo base_url(); ?>dashboard/delete_user',{id:id},function(res){
                                        $('#row_'+id).remove();
                                    });
                                }
                                }
                            </script>
