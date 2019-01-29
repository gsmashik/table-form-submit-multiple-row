<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td contenteditable="true">ashik</td>
        <td contenteditable="true">Ashik@gmail.com</td>
        <td contenteditable="true">43</td>
     
      </tr>
      <tr>
        <td contenteditable="true">Billal</td>
        <td contenteditable="true">Billal@gmail.com</td>
        <td contenteditable="true">42</td>
      </tr>
      <tr>
        <td contenteditable="true">Ripon</td>
        <td contenteditable="true">Ripon@gmail.com</td>
        <td contenteditable="true">44</td>
      </tr>
    </tbody>
  </table>

<input type="submit" id="submit" value="submit">
<input type="text" id="serial" value="4">
  <div id="data"></div>
</div>
<script>
  $(document).ready(function () {
    $("#submit").click(function () {
      var ser = $("#serial").val();
      var table = document.getElementById("myTable");
var namess = document.getElementById("name");
var row_length = document.getElementById("myTable").rows.length;
var cell_length = document.getElementById("myTable").rows[0].cells.length;
var name = document.getElementById("myTable").rows[1].cells[0].innerHTML;
var name_array = [];
var email_array = [];
var age_array = [];
for (var index = 0; index < cell_length; index++) {

    name_array[index] = document.getElementById("myTable").rows[index+1].cells[0].innerHTML; 
    email_array[index] = document.getElementById("myTable").rows[index+1].cells[1].innerHTML; 
    age_array[index] = document.getElementById("myTable").rows[index+1].cells[2].innerHTML; 
}
$.ajax({
    url:"process.php",
    type:"POST",
    data:{name:name_array,email:email_array,age:age_array,ser:ser},
    success: function (params) {
      $("#data").html(params);
    }
});
    })
  })

</script>
</body>
</html>
