<?php
  include "config.php";

  $sql="SELECT * FROM donation";
$counter = 0;
  $result=mysqli_query($conn,$sql);
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>food availability</title>
    <link href="home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  height: 70px;
}
</style>
</head>
<body>
<h4 class="display-4 text-center fw-bold text-danger p-5">Available food</h4>
<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										
										<div class="table-responsive  export-table">
											<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom" style="width:100%">
												<thead>
													<tr>
														<th class="border-bottom-0">S.no</th>
														<th class="border-bottom-0">foodname</th>
														<th class="border-bottom-0">id</th>
														<th class="border-bottom-0">quantity</th>
														<th class="border-bottom-0">address</th>
														<th class="border-bottom-0">time</th>
														<th class="border-bottom-0">avail</th>
														<th class="border-bottom-0">mobileno</th>
														<th class="border-bottom-0">msg</th>
                                                        <th class="border-bottom-0">Accept</th>
														
														
													</tr>
												</thead>
                                                <tbody>
												<?php
                                               
                   

					
				
                                                
                                                 $sql="SELECT *FROM donation";
                                                

                                                 $result=mysqli_query($conn,$sql);
												 if($result->num_rows>0) {
													while($row=$result->fetch_assoc())
													
													{
                                                        if($row['created_status']==0 ){
													  ?>
												
  
                                         <tr>
                    <td><?php echo ++$counter;?></td>
                    <td><?php echo $row['foodname'];?></td>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['quantity'];?></td>
					<td><?php echo $row['address'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['avail'];?></td>
                    <td><?php echo $row['mobileno'];?></td>
                    <td><?php echo $row['msg'];?></td>
                    <td><a class="btn btn-info" href="donation_manage.php?id=<?php echo $row["id"];?>&accept=accept">Accept</a></td>

                   
                    </tr>
                        <?php
                    }
                }
			}
                    ?>

									        	</tbody>								
												
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
                        </body>
</html>