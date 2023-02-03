<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- js -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-3.6.3.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <title>Remote Philippines</title>
</head>

<body class="container-fluid">
    <div class="row mt-5">
        <div class="col-3">
        </div>

        <div class="col-6">
            <form action="import.php" method="POST" name="csv_upload" enctype="multipart/form-data">
                <div class="form-group">
                        <input type="file" name="import">
                </div>
                <div class="form-group">
                    <button 
                    type="submit"  
                    class="btn btn-primary w-100"
                    data-loading-text="<i class='fa fa-spinner fa-spin '></i>"
                    id="import"
                    name="import_file"
                    >SUBMIT
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="col-3">
    </div>
    </div>
</body>
</html>

<script>
    $(document).ready(
        $('.btn').on('click', function(e) {
            if ($('input').val() === '') {
                e.preventDefault();
                alert('Please choose a file..');
            }
            else{
                $('.btn-primary').append('<span class="spinner-border spinner-border-sm"></span>');
            }
            
        })
    );
</script>