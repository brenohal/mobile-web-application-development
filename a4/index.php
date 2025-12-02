<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Brennan O'Halloran">
	<link rel="icon" href="favicon.ico">

	<title>LIS4381 - Assignment4</title>
		<?php include_once("../css/include_css.php"); ?>
        
</head>

<body>

	<?php include_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
					<div class="page-header">
						<?php include_once("../global/header.php"); ?>	
					</div>
                    <div>
                    <h1>Assignment 4</h1>
                    <h2>Basic client side validation</h2>
                    <h3>This project uses Bootstrap client-side validation</h3>
                    </div>
                    
					<h2>Pet Stores</h2>

						<form id="add_customer_form" method="post" class="form-horizontal" action="${pageContext.request.contextPath}/customerAdmin">

						<input type="hidden" name="action" value="add_customer">

						<div class="form-group">
							<label class="col-sm-4 control-label">Name:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" maxlength="15" name="name"/>
							</div>
						</div>


						 <!-- Street -->
						 <div class="form-group">
							<label class="col-sm-4 control-label">Street:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="street" maxlength="30"/>
							</div>
						</div>
			
						<!-- City -->
						<div class="form-group">
							<label class="col-sm-4 control-label">City:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="city" maxlength="30"/>
							</div>
						</div>
			
						<!-- State -->
						<div class="form-group">
							<label class="col-sm-4 control-label">State:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="state" maxlength="2"/>
							</div>
						</div>
			
						<!-- Zip -->
						<div class="form-group">
							<label class="col-sm-4 control-label">Zip:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="zip" maxlenght="9"/>
							</div>
						</div>
			
						<!-- Phone -->
						<div class="form-group">
							<label class="col-sm-4 control-label">Phone:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="phone" maxlenght="10"/>
							</div>
						</div>

			
						
						<div class="form-group">
							<label class="col-sm-4 control-label">Email:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" maxlength="100" name="email"/>
							</div>
						</div>

						 <!-- Balance -->
						 <div class="form-group">
							<label class="col-sm-4 control-label">URL:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" maxlength="100" name="url"/>
							</div>
						</div>
			
						<!-- Total Sales -->
						<div class="form-group">
							<label class="col-sm-4 control-label">YTD Sales:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" maxlength="7" name="ytd_sales"/>
							</div>
						</div>
			
						<!-- Notes (optional) -->
						<div class="form-group">
							<label class="col-sm-4 control-label">Notes:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" maxlength="255" name="notes"/>
							</div>
						</div>
			
						
						<div class="form-group">
							<div class="col-sm-6 col-sm-offset-3">
								<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
							</div>
						</div>
					</form>

			<?php include_once "../global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php include_once("../js/include_js.php"); ?>

<script type="text/javascript">
		$(document).ready(function() {
			$('#add_customer_form').formValidation({
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
								message: 'First name is required'
							},
							stringLength: {
								min: 1,
								max: 15,
								message: 'First name no more than 15 characters'
							},
							regexp: {
								regexp: /^[a-zA-Z\-]+$/,
								message: 'First name can only contain letters and hyphens.'
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
