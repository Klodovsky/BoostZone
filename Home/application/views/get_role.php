 <h1 style="text-align: center;" class="m-t-60"> Tell us, who you are? </h1>
    <div class="d-flex align-items-center position-relative">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 d-none d-md-none d-lg-flex">
                    <div class="login-page-img">
                        <img src="<?php echo base_url(); ?>assets/images/creator.png" alt="" style="margin-left: 70px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-brand btn-block btn-lg" style="margin: 0 50px;" onclick="set_role(3)">Creator</button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 d-none d-md-none d-lg-flex">
                    <div class="login-page-img">
                        <img src="<?php echo base_url(); ?>assets/images/donator.png" alt="" style="margin-left: 70px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-brand btn-block btn-lg" style="margin: 0 50px;" onclick="set_role(2)">Donator</button>

            </div>
        </div>
    </div>
    <!--  login close -->


<?php $this->load->view('includes/footer');  ?>
<script>
  
    function set_role(role){
    $.post('<?php echo base_url(); ?>get_role/set_role',{role:role},function(res){
      var obj = $.parseJSON(res);
      if(obj.status){
         window.location.href="<?php echo base_url(); ?>dashboard";
      }
    });
    return false;
  }
</script>