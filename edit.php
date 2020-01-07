<style>
  * {
    box-sizing: border-box; 
  }
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: row;
    margin: 0;
  }
  .col-1 {
    background: #D7E8D4;
    flex: 1;
  }
  .col-2 {
    display: flex;
    flex-direction: column;
    flex: 5;
  }
  .content {
    display: flex;
    flex-direction: row;
  }
  .content > article {
    flex: 4;
    min-height: 60vh;
  }
  header, footer {
    background: rgb(230, 230, 230);
    height: 20vh;
  }
  header, footer, article, nav {
    padding: 1em;
  }
</style>
<html>
<head>	
	<title>CIST 2550 Final</title>
</head>
  <nav class="col-1">Navigation
     <ul>
<li><a href="index.php">Table Overview</a></li>
      <li><a href="add.html">Add To Table</a></li>
          <li><a href="delete.php">Remove From Table</a></li>
          <li><a href="update.php">Edit Table</a></li>
           <li><a href="rubric.php">Rubic</a></li>
    </ul>

  </nav>
  <div class="col-2">
      <header><img src="NorthGeorgiaTech.jpg" alt"ngtc" style="width:250px;height:125px;">CIST 2550 Final Project</header>

<body>
	<br/><br/>
	
	<form action="editsucceed.php" method="POST" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr> 
				<td>Artist</td>
				<td><input type="text" name="artist"></td>
			</tr>
			<tr> 
				<td>Album</td>
				<td><input type="text" name="album"></td>
			</tr>
			<tr> 
				<td>Genre</td>
				<td><input type="text" name="genre"></td>
			</tr>
			<tr> 
				<td>Format</td>
				<td><input type="text" name="format"></td>
			</tr>
			<tr> 
				<td>Label</td>
				<td><input type="text" name="label"></td>
			</tr>
			<tr> 
				<td>Producer</td>
				<td><input type="text" name="producer"></td>
			</tr>
			<tr> 
				<td>Rating</td>
				<td><input type="text" name="rating"></td>
			</tr>
			<tr> 
				<td>Release Date</td>
				<td><input type="text" name="date"></td>
			</tr>
			<tr> 
				<td>Run-time</td>
				<td><input type="text" name="run"></td>
			</tr>
			<tr> 
				<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
