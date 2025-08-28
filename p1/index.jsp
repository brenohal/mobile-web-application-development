<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
      "Time-stamp: <Thursday, 2-20-25, 17:39:11 Eastern Standard Time>"
      Adjust or remove as needed.
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
    <meta name="author" content="Brennan O'Halloran">
    <link rel="icon" href="../favicon.ico">

    <!-- Update the title to reflect your course and project -->
    <title>LIS4368 - Project 1</title>

    <!-- Include your CSS (Bootstrap, Font Awesome, etc.) -->
    <%@ include file="/css/include_css.jsp" %>
</head>
<body>

<!-- Optional: display application path if needed -->
<%-- = request.getContextPath() --%>

<!-- Navigation bar include -->
<%@ include file="/global/nav.jsp" %>

<div class="container">
    <div class="starter-template">
        <div class="page-header">
     
            <h1>Project 1</h1> 
            <h3>Basic client-side validation</h3>
            <p class="lead">This project uses client-side validation, and regular expressions.</p>
            (Table: customer)
   

        </div>

        <!-- BEGIN: Customer Form -->
        <form id="add_customer_form" method="post" class="form-horizontal" action="#">
            
            <!-- FName -->
            <div class="form-group">
                <label class="col-sm-4 control-label">FName:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="fname" maxlength="15" />
                </div>
            </div>

            <!-- LName -->
            <div class="form-group">
                <label class="col-sm-4 control-label">LName:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="lname" maxlength="30" />
                </div>
            </div>     

            <!-- Street -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Street:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="street" maxlength="30" />
                </div>
            </div>

            <!-- City -->
            <div class="form-group">
                <label class="col-sm-4 control-label">City:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="city" maxlength="30" />
                </div>
            </div>

            <!-- State -->
            <div class="form-group">
                <label class="col-sm-4 control-label">State:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="state" maxlength="2" />
                </div>
            </div>

            <!-- Zip -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Zip:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="zip" />
                </div>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Phone:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="phone" />
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Email:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="email" maxlength="100" />
                </div>
            </div>

            <!-- Balance -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Balance:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="balance" />
                </div>
            </div>

            <!-- Total Sales -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Total Sales:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="tsales" />
                </div>
            </div>

            <!-- Notes (optional) -->
            <div class="form-group">
                <label class="col-sm-4 control-label">Notes:</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" maxlength="255" name="notes" />
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
                </div>
            </div>
        </form>
        <!-- END: Customer Form -->

        <!-- Global footer include -->
        <%@ include file="/global/footer.jsp" %>
    </div> <!-- end starter-template -->
</div> <!-- end container -->

<!-- Include your JS (jQuery, Bootstrap, FormValidation plugin, etc.) -->
<%@ include file="/js/include_js.jsp" %>

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
                fname: {
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
                lname: {
                    validators: {
                        notEmpty: {
                            message: 'Last name is required'
                        },
                        stringLength: {
                            min: 1,
                            max: 30,
                            message: 'Last name no more than 30 characters'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\-]+$/,
                            message: 'Last name can only contain letters and hyphens'
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
                balance: {
                    validators: {
                        notEmpty: {
                            message: 'Balance is required'
                        },
                        // Example: up to 6 total digits, allowing 2 decimals
                        regexp: {
                            regexp: /^\d{1,6}(\.\d{1,2})?$/,
                            message: 'Balance must be up to 6 digits, with up to 2 decimals'
                        }
                    }
                },
                tsales: {
                    validators: {
                        notEmpty: {
                            message: 'Total Sales is required'
                        },
                        regexp: {
                            regexp: /^\d{1,6}(\.\d{1,2})?$/,
                            message: 'Total Sales must be up to 6 digits, with up to 2 decimals'
                        }
                    }
                },
                notes: {
                    // Not required
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
