<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		.gradient-custom {
  /* fallback for old browsers */
  background: #f093fb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}
	</style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form <span style="margin-left:40%"><button type="button" class="btn btn-success" onclick="location.href='<?php echo base_url();?>user/reports'">Reports</button></span></h3>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="sal" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Salary</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                  <select class="select form-control-lg" id="dept">
					  <?php foreach($data as $value){?>
						<option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
					   <?php } ?>

                  </select>
                  <label class="form-label select-label">Choose Department</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gen" class="gen" value="f" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gen" value="m"/>
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg multi-select" id="hob" multiple="multiple">
                    <!-- <option value="1" disabled>Choose option</option> -->
                    <option value="writting">Writting</option>
                    <option value="learning">Learning</option>
                    <option value="painting">Painting</option>
					<option value="singing">Singing</option>
					<option value="playing">Playing</option>
                  </select>
                  <label class="form-label select-label">Choose Hobbies</label>

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="button" id="btn" value="Submit" onclick="submit();"/>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
<script type="text/javascript">
	$(document).ready(function(){
    $('.multi-select').select2();
	$('#dept').select2();
	})
function submit(){
		var hob =[]
        $("#hob :selected").each(function() {
            hob.push($(this).val());
        });
	var name = $('#name').val();
	var sal = $('#sal').val();
	var dept = $('#dept :selected').val();
	var gen = $("input[name='gender']:checked").val();
	if(name !=''&& sal != '' && dept != '' && hob != '' && $("#gen:checked").length != 0){
		$.ajax({
			url: '<?php echo base_url(); ?>user/insertData',
			method: 'POST',
			data:{name:name,sal:sal,dept:dept,gen:gen,hob:hob},
			success: function(response){
				if(response == 1){
					swal({
						title: "Inserted Success fully",
						icon: "success",
						button: "ok",
						timer:2000
						});
						setTimeout(() => {
							location.reload();
						}, 3000);
				}
			}
		})
	}else{
		$.toast({
    heading: 'Error',
    text: 'An unexpected error occured while trying to show you the toast! ..Just kidding, it is just a message, toast is right in front of you.',
    icon: 'error',
	position: 'top-center',
})
	}
}

</script>
</body>
</html>