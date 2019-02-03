<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Boostrap 4 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.css">

    </head>
    <body>
        <div class="container" style="margin: 0px 300px">
        <div class="card">
                <div class="card-body">  
        <form id="myForm"  style="margin: 40px 20px">
              
                    <div class="form-group">
                    <label >Email address</label>
                    <input type="email" name="myemail" class="form-control" placeholder="Enter email">
                    
                    </div>
                    <div class="form-group">
                    <label >Password</label>
                    <input type="password" name="mypassword" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" id="loginBtn" class="btn btn-primary">Submit</button>
               
        </form>
        </div>
            </div>
        </div>
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(function() {
                // loginBtn clicked
                $('#loginBtn').on('click', function() {
                    // codes when btn is clicked
                    var formData = $('#myForm').serializeArray();
                    // POST Our Data to laravel Controller
                    $.post('{{url("processMyForm")}}', formData, function(res) {
                        // Data returned from server
                    });
                });    
            });
        </script>
    </body>
</html>
