<?php 
include 'conn.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body bgcolo="#FFEFEF">
<nav class="navbar">
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <img src="img/1_7ugSMISUo8vYf9ILG6VmuQ.png" class="img">
  <div class="namajudul">
    <font color=pink>ARKADEMY</font> COFFEE SHOP</div>
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
  <button type="button" class="add btn btn_style my-2 my-sm-0 " data-toggle="modal" data-target="#myModal">
    <font color=white>ADD</font>
  </button>
</div>
</nav>

  <!-- Modal add -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="img/close.png"></a></button>
          <h4 class="modal-title">Add Data</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="id" placeholder="id">
          </div>
          <div class="form-group">
            <select class="form-control" id="id_cashier">
              <?php 
              $sql = "SELECT * FROM cashier";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id_cashier"] ?>"><?php echo $row["name_cashier"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="id_category">
              <?php 
              $sql = "SELECT * FROM category";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id_category"] ?>"><?php echo $row["name_category"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="product">
              <?php 
              $sql = "SELECT * FROM product";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="price">
              <?php 
              $sql = "SELECT * FROM product";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["price"] ?>"><?php echo $row["price"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" href="javascript:void(0)" onclick="addRecord()" class="btn btn-warning">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal delete -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="img/close.png"></a></button>
        </div>
        <div class="modal-body">
          <center>
            <img src="img/checked.png">
            <h2>Data telah berhasil dihapus</h2>
          </center>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal edit -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><img src="img/close.png"></a></button>
          <h4 class="modal-title">Edit Data</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" id="id" placeholder="id">
          </div>
          <div class="form-group">
            <select class="form-control" id="id_cashier">
              <?php 
              $sql = "SELECT * FROM cashier";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id"] ?>"><?php echo $row["name_cashier"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="product">
              <?php 
              $sql = "SELECT * FROM product";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                                // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="category">
              <?php 
              $sql = "SELECT * FROM category";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                                    // output data of each row
                while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id"] ?>"><?php echo $row["name_category"] ?></option>
                <?php }
              } ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" class="form-control" id="ids">
          <button href="javascript:void(0)" onclick="updateRecord()" type="button" class="btn btn-warning" id="update">Edit</button>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-sm">
        <br>
        <br>
        <br>
        <div id="viewdata"></div>
      </div>
    </div>
  </div>
</body>
</html>
<script>
  $(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
    $("#update").hide();
  });
    // READ records
    function readRecords() {
      $.get("getData.php", {}, function (data, status) {
        $("#viewdata").html(data);
      });
    }

    function addRecord() {
        // get values
        var id = $("#ids").val();
        var name = $("#names").val();
        var price = $("#prices").val();
        var id_category = $("#id_categories").val();
        var id_cashier = $("#id_cashiers").val();

        // Add record
        $.post("addRecord.php", {
          id: id,
          name: name,
          price: price,
          id_category : id_category,
          id_cashier : id_cashier
        }, function (data, status) {
            // close the popup
            $("#myModal").modal("hide");
            // read records again
            readRecords();

            // clear fields from the popup
            $("#name").val("");
          });
      }
      
      function deleteUser(id) {
        var conf = confirm("Are you sure, do you really want to delete User?");
        if (conf == true) {
          $.post("deleteUser.php", {
            id: id
          },
          function (data, status) {
                // reload Users by using readRecords();
                $("#myModal2").modal("show");
                readRecords();
              });
        }
      }

      function getUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#ids").val(id);
    $.post("getUserDetails.php", {
      id: id
    },
    function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#ids").val(user.id);
            $("#names").val(user.name).change();
            $("#prices").val(user.price).change();
            $("#id_caterogies").val(user.id_category).change();
            $("#id_cashier").val(user.cashier).change();
          }
          );
    // Open modal popup
    $("#myModal3").modal("show");
    $("#update").show();
    $("#add").hide();
  }
  function updateRecord() {
        // get values
        var id = $("#ids").val();
        var name = $("#names").val();
        var price = $("#prices").val();
        var id_category = $("#id_categories").val();
        var id_cashier = $("#id_cashiers").val();
        // Add record
        $.post("updateUserDetails.php", {
          id: id,
          name: name,
          price: price,
          id_categorry: id_categorry,
          id_cashier: id_cashier
        }, function (data, status) {
            // close the popup
            $("#myModal3").modal("hide");
            // read records again
            readRecords();
            // clear fields from the popup
            $("#name").val("");
          });
      }
    </script>