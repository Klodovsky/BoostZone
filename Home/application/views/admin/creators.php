
<div class="container p-b-30 headbg-mar">
    <div class="alert  alert-success" style="display: none;">Status updated!</div>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <!-- pagecaption close -->
            <form id="creator" action="" method="post">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <h3 class="card-title"><?php echo count($creator); ?> Creators found</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 desktop-view">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Here" aria-label="search here" aria-describedby="button-addon2" name="keyword" value="<?php echo !empty($_POST['keyword'])?$_POST['keyword']:''; ?>">
                            <div class="input-group-append">
                                <button class="btn btn-brand" type="submit" id="button-addon2">Go</button>
                            </div>&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo base_url(); ?>creators/export_excel" class="btn btn-primary" ><i class="fa fa-download"></i>&nbsp; Export as Excel</a>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mobile-view">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Here" aria-label="search here" aria-describedby="button-addon2" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-brand" type="submit" >Go</button>
                            </div>&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo base_url(); ?>creators/export_excel" class="btn btn-primary" ><i class="fa fa-download"></i>    </a>
                        </div>
                    </div> -->
                </div>
            </form>
            <!-- pagecaption start -->
            <div class="card hero-slide-nineteen-table aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <form method="post" action="<?php echo base_url(); ?>creators/add_favourite">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 12px;
                    margin-bottom: -12px;">
                    <input type="checkbox" name="" id="select_all" >
                    <label for="select_all">Select all</label>
                    <button class="btn btn-brand btn-sm" type="submit">Make as Favourite</button>
                </div>
                <br>
                <div class="clearfix"></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Campaign</th>
                                <!--<th>Year</th>-->
                                <!--<th>Description</th>-->
                                <th>Credit</th>
                                <!--<th>BankName</th>-->
                                <!--<th>AccountNo</th>-->
                                <!--<th>IFSCCODE</th>-->
                                <th>Donations</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($creator)){ 
                                $i=1;
                                foreach($creator as $c):
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" value="<?php echo $c['id']; ?>" name="user_ids[]" class="check"></td>
                                        <td><a href="<?php echo base_url().'creators/view_creator/'.base64_encode($c['id']); ?>">AI0<?php echo $c['id']; ?> </a></td>
                                        <td><?php echo $c['first_name'].' '.$c['last_name'] ?></td>
                                        <td><?php echo $c['email'] ?></td>
                                        <td><?php echo $c['name'] ?></td>
                                        <!--<td><?php echo $c['year'] ?></td>-->
                                        <!--<td><?php echo $c['description'] ?></td>-->
                                        <td>
                                            <b>    $ .<?php 
                                            $where = array('creator_id' => $c['id']);
                                            $data =  $this->db->select('SUM(amount) as amount')
                                            ->get_where('payment_details',$where)
                                            ->row_array(); 
                                            echo !empty($data)?number_format($data['amount'],2):'0.00';
                                            ?></b>
                                        </td>
                                        <!--<td><?php echo $c['bank_name'] ?></td>-->
                                        <!--<td><?php echo $c['account_no'] ?></td>-->
                                        <!--<td><?php echo $c['ifsc_code'] ?></td>-->
                                        <td><a href="javascript:void(0)" class="btn btn-primary btn-sm" onclick="get_donations(<?php echo $c['id']; ?>)">Donations</a></td>
                                        <td>
                                           <select name="status" onchange="set_status(this)" id="status<?php echo $c['id']; ?>" data-user_id="<?php echo $c['id']; ?>"  >
                                               <option value="1" <?php if($c['status'] == 1){ echo 'selected="selected" '; } ?> >Active</option>
                                               <option value="2" <?php if($c['status'] == 2){ echo 'selected="selected" '; } ?>>Inactive</option>
                                           </select> 
                                       </td>

                                       <td>
                                        <!-- <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;" data-original-title="Edit User"><i class="fa fa-edit"></i></a> -->
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;" data-original-title="Delete User" onclick="delete_user(<?php echo $c['id']; ?>)" ><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach; 
                        } ?>

                    </tbody>
                </table>
            </div>
        </form>
        <!-- pagecaption close -->
    </div>
</div>
</div>
</div>

<div id="donations" class="modal custom-modal fade" role="dialog" style="z-index: 9999; margin-top: 100px;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>View Donations</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Payment Id</th>
                            <th>Amount</th>
                            <th>Donator</th>
                        </tr>
                    </thead>
                    <tbody id="ajax"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a  href="javascript:void;" id="creator_id" class="btn btn-primary btn-xs">
                    <i class="fa fa-download"></i> Export as Excel</a>
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
        function get_donations(id){
            $.post('<?php echo base_url(); ?>creators/get_donations',{id:id},function(res){
                $('#donations').modal('show');
                var obj = jQuery.parseJSON(res);
                $('#ajax').html('');
                var tr = '';
                var i = 0;
                if(obj!=''){
                    $(obj).each(function(){
                        i++;
                        tr +='<tr>'+
                        '<td>'+i+'</td>'+
                        '<td>'+this.date+'</td>'+
                        '<td>'+this.payment_id+'</td>'+
                        '<td>'+this.amount+'</td>'+
                        '<td>'+this.donator_name+'</td>'+
                        '</tr>';
                    });
                    $('#creator_id').show();
                    $('#creator_id').attr('href',obj[0]['link']);
                    $('#ajax').html(tr);
                }else{
                    $('#ajax').html('Nobody donated yet!');
                    $('#creator_id').hide();
                }
            });

        }
    </script>