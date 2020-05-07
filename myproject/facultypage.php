

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/stud.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Materials</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="jquery-3.4.1.min.js"></script>
  </head>
  
<body>

<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Successfully Logged In...!</strong>
		</div>
    


<form action="subjectupload.php " method="post">
    <!-- Example split danger button -->
    <div class="box">
               <h2> Select </h2> 
               <div class="form-group" style="margin-top:15px;">
                <div class="form-elements">
                  <div class="form-item">
                    <label>Year</label>
                    <select name="year" required>
                    <option value="0">None</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    <label>Branch</label>
                    <select  name="branch" required>
                    <option value="0">None</option>
                      <option value="CSE">CSE</option>
                      <option value="ECE">ECE</option>
                      <option value="EEE">EEE</option>
                      <option value="ECM">ECM</option>
                      <option value="IT">IT</option>
                      <option value="MECH">MECH</option>
                      <option value="CIVIL">CIVIL</option>
                    </select>
                    <label>Semester</label>
                    <select name="semester" required>
                    <option value="0">None</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      
                    </select>
                  </div>
                 </div> 
                 </div>
                
            <br>
            <button type="submit" class = "btn btn-outline-info bpad" name="submit">Submit</button>
    </div>

</form>
<div class="box">
<div class="form-elements">
<div class="form-item">
<button type="button" class = "btn btn-outline-info bpad" onclick="window.location.href='index.html'">Back to home</button>
</div> 
</div> 
</div>
    

</body>
</html>