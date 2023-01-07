<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>


<div class="topnav">

<a href="create-table.php">create Table</a>
<a href="create-table-address.php">create Table Address</a>
<a href="dblink.php">dblink</a>
<a href="insert-data.php">Insert</a>
<a href="delete.php">delete row</a>
<a href="get-last-id.php">get last id, and insert last id</a>
<a href="insert-data.php">insert-data</a>
<a href="insert-multiple.php">insert-multiple-data</a>
<a href="order-by.php">list order by last name</a>
<a href="prepared.php">insert data by variable</a>
<a href="select.php">view all data</a>
<a href="update-data.php">update data</a>
<a href="where.php">whre method</a>
<a href="get-form.php">GET form</a>
<a href="post-form.php">POST form</a>
<a href="post-form-address.php">POST Address form</a>
</div>

</body>
</html>


