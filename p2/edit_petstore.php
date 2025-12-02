<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Your Name Here!">
	<link rel="icon" href="favicon.ico">

	<title>LIS4381 - Assignment4</title>
		<?php include_once("../css/include_css.php"); ?>
        
</head>

<body>

	<?php include_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
					<div class="page-header">
						<?php include_once("global/header.php"); ?>	
					</div>
                    <div>
                    <h2>Basic Server Side Validation</h2>
                    <h3>Server-side validation and prepared statements (helps prevent SQL Injection).</h3>
                    <h3>Displays user entered data, and permits users to add data.</h3>
                    <h3>See P2 to update and delete pet store data.</h3>
                    
                    </div>
                    
					<h2>Pet Stores</h2>

                        <form id="edit_petstore" method="post" class="form-horizontal" action="edit_petstore_process.php">

                    <?php
                    require_once "../global/connection.php";

                    $pst_id_v = $_POST['pst_id'];

                    $query = "SELECT * FROM petstore WHERE pst_id = :pst_id_p";

                    try 
                    {
                        $statement = $db->prepare($query);
                        $statement->bindParam(':pst_id_p', $pst_id_v);
                        $statement->execute();
                        $result = $statement->fetch();
                        while ($result != null)
                        {
                            ?>
                            <input type="hidden" name="pst_id" value="<?php echo $result['pst_id']; ?>" />
                        

                    <!-- Name -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Name:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="30"
                                name="name" placeholder="(max 30 characters)" value="<?php echo $result['pst_name']; ?>" />
                        </div>
                    </div>

                    <!-- Street -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Street:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="30"
                                name="street" placeholder="(max 30 characters)" value="<?php echo $result['pst_street']; ?>"/>
                        </div>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">City:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="30"
                                name="city" placeholder="(max 30 characters)" value="<?php echo $result['pst_city']; ?>"/>
                        </div>
                    </div>

                    <!-- State -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">State:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="2"
                                name="state" placeholder="Example: FL" value="<?php echo $result['pst_state']; ?>" />
                        </div>
                    </div>

                    <!-- Zip -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Zip:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="9"
                                name="zip" placeholder="(5 or 9 digits no dashes)" value="<?php echo $result['pst_zip']; ?>" />
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Phone:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="10"
                                name="phone" placeholder="(10 digits no other characters)" value="<?php echo $result['pst_phone']; ?>" />
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="100"
                                name="email" placeholder="Example: jdoe@aol.com" value="<?php echo $result['pst_email']; ?>" />
                        </div>
                    </div>

                    <!-- URL -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">URL:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="100"
                                name="url" placeholder="Example: www.jdoe.com" value="<?php echo $result['pst_url']; ?>"/>
                        </div>
                    </div>

                    <!-- YTD Sales -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">YTD Sales:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="11" name="ytd_sales" placeholder="Example: 100.00 (no other characters)" value="<?php echo $result['pst_ytd_sales']; ?>" />
                        </div>
                    </div>

                    <!-- Notes -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Notes:</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" maxlength="255" name="notes" value="<?php echo $result['pst_notes']; ?>" />
                        </div>
                    </div>

                    <?php
                    $result = $statement->fetch();
                        }
                    $statement->closeCursor();
                    $db = null;
                    }

                    catch (PDOException $e)
                    {
                        $error = $e->getMessage();
                        include('../global/error.php');
                    }
                    ?>
                   

                    <!-- Submit button -->
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary" name="edit" value="Edit">Update</button>
                        </div>
                    </div>

                    </form>


			<?php include_once "../global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php //include_once("../js/include_js.php"); ?>

<script type="text/javascript">
		$(document).ready(function() {
			$('#edit_petstore').formValidation({
				message: 'This value is not valid',
				icon: {
					valid: 'fa fa-check',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
				},
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: 'Name is required'
							},
							stringLength: {
								min: 1,
								max: 30,
								message: 'Name no more than 30 characters'
							},
							regexp: {
								regexp: /^[a-zA-Z\-]+$/,
								message: 'Name can only contain letters and hyphens.'
							}
						}
					},
					street: {
						validators: {
							notEmpty: {
								message: 'Street is required'
							},
							stringLength: {
								max: 30,
								message: 'Street must be no more than 30 characters'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9,\.\- ]+$/,
								message: 'Street can contain letters, numbers, commas, hyphens, periods, and spaces'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'City is required'
							},
							stringLength: {
								max: 30,
								message: 'City must be no more than 30 characters'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9\- ]+$/,
								message: 'City can contain letters, numbers, hyphens, and spaces'
							}
						}
					},
					state: {
						validators: {
							notEmpty: {
								message: 'State is required'
							},
							stringLength: {
								min: 2,
								max: 2,
							   
							},
							regexp: {
								regexp: /^[A-Za-z]{2}$/,
								message: 'State must be 2 letters only'
							}
						}
					},
					zip: {
						validators: {
							notEmpty: {
								message: 'Zip is required'
							},
							regexp: {
								regexp: /^[0-9]{5,9}$/,
								message: 'Zip must be between 5 and 9 digits'
							}
						}
					},
					phone: {
						validators: {
							notEmpty: {
								message: 'Phone is required'
							},
							regexp: {
								regexp: /^[0-9]{10}$/,
								message: 'Phone must be 10 digits (numbers only)'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'Email address is required'
							},
							stringLength: {
								max: 100,
								message: 'Email can be no more than 100 characters'
							},
							regexp: {
								regexp: /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/,
								message: 'Must include a valid email address'
							}
						}
					},
					url: {
        				validators: {
          					notEmpty: {
           					 message: 'URL is required'
         					 },
                            stringLength: {
                                max: 100,
                                message: 'URL can be no more than 100 characters'
                            },
                            // use built-in URI validator
                            uri: {
                                allowEmptyProtocol: false,
                                message: 'Must be a valid URL (e.g., https://example.com)'
                            }
                            }
                        },
                        ytd_sales: {
                            validators: {
                            notEmpty: {
                                message: 'YTD Sales is required'
                            },
                            // total length (including decimal point) ≤ 10
                            stringLength: {
                                max: 10,
                                message: 'YTD Sales must be no more than 10 characters (including decimal point)'
                            },
                            // numbers with optional single decimal point
                            regexp: {
                                regexp: /^(?:\d+|\d+\.\d+)$/,
                                message: 'YTD Sales can only contain numbers and a single decimal point (if used)'
                            }
                            }
                        },
                        notes: {
                            // optional
                            validators: {
                            stringLength: {
                                max: 255,
                                message: 'Notes must be no more than 255 characters'
                            }
                            }
                        }
                        }
                    });
                    });
                    </script>

</body>
</html>
