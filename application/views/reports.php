<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <style type="text/css">

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
      <div align="center" style=""><h2>Reports</h2></div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">2nd highest earninng employee</th>
      <th scope="col">5th highest earninng employee</th>
      <th scope="col"> Avg salary by department</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $second_salary[0]['salary'] ?></th>
      <td><?php echo $avg_salary[0]['avg(salary)'] ?></td>
      <td><?php echo $fifth_high[0]['salary'] ?></td>
    </tr>
  </tbody>
</table>
</div>
      </section>

</body>
</html>