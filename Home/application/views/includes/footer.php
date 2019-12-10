<!-- js count to -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main-js.js"></script>
    <script src="<?php echo base_url();?>assets/js/aos.js"></script>
    <script src="<?php echo base_url();?>assets/js/return-to-top.js"></script>
    <script src="<?php echo base_url();?>assets/js/aos-function.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.css">
  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
 
<style type="text/css">
    .ui-autocomplete {
     z-index: 9999 !important;
}
</style>

 <script type="text/javascript">
			// $("#search").autocomplete({
			// source: function(request, response) {
			// $.ajax({ 
			// url: '<?php echo base_url(); ?>home/get_creator',
			// data: { keyword:$('#search').val()},
			// dataType: "json",
			// type: "POST",
			// success: function(data){            
			// response(data);           
			// }    
			// });
			// },
			// select: function(event, ui) { 
			// window.location.href=ui.item.url;           
			// }
			// }); 

			$("#search").autocomplete({
			source: function(request, response) {
			$.ajax({ 
			url: '<?php echo base_url(); ?>home/get_creator',
			data: { keyword:$('#search').val()},
			dataType: "json",
			type: "POST",
			success: function(data){            
			response(data);           
			}    
			});
			},
			select: function(event, ui) { 
			window.location.href=ui.item.url;           
			},
		}).autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div><b> Name </b>:" + item.first_name + " " + item.first_name + "</div><div><b> Channel : </b>"+item.name+"</div>" )
        .appendTo( ul );
    };
    
  
 </script>
</body>

</html>