<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1 align="center" id="head">ENTER YOUR VALUBLE FEEDBACK</h1>
<form action="check_rate.php" method="post">
<table border="2" align="center" class="content-table">
	<thead>
		<th>S.NO</th>
		<th>Description</th>
		<th>5-Excellent</th>
		<th>4-very Good</th>
		<th>3-Good</th>
		<th>2-Average</th>
		<th>1-Below Average</th>
		
	</thead>
	<tbody>
		<tr>
			<td>1.</td>
			<td>The objectives of the training were defined well</td>
			<td><input type="radio" name="objectives" value="Excellent" ></td>
			<td><input type="radio" name="objectives" value="Very Good" ></td>
			<td><input type="radio" name="objectives" value="Good" ></td>
			<td><input type="radio" name="objectives" value="Average" ></td>
			<td><input type="radio" name="objectives" value="below Average" ></td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Participation was encouraged throughout the training </td>
			<td><input type="radio" name="Participation" value="Excellent" ></td>
			<td><input type="radio" name="Participation" value="Very Good" ></td>
			<td><input type="radio" name="Participation" value="Good" ></td>
			<td><input type="radio" name="Participation" value="Average" ></td>
			<td><input type="radio" name="Participation" value="below Average" ></td>
		</tr>
		<tr>
			<td>3.</td>
			<td> The topics covered were relevant and informational</td>
			<td><input type="radio" name="topic_covered" value="Excellent" ></td>
			<td><input type="radio" name="topic_covered" value="Very Good" ></td>
			<td><input type="radio" name="topic_covered" value="Good" ></td>
			<td><input type="radio" name="topic_covered" value="Average" ></td>
			<td><input type="radio" name="topic_covered" value="below Average" ></td>
		</tr>
        <tr>
			<td>4.</td>
			<td> The materials and content were well chosen and helpful</td>
			<td><input type="radio" name="materials" value="Excellent" ></td>
			<td><input type="radio" name="materials" value="Very Good" ></td>
			<td><input type="radio" name="materials" value="Good" ></td>
			<td><input type="radio" name="materials" value="Average" ></td>
			<td><input type="radio" name="materials" value="below Average" ></td>
		</tr>
		<tr>
			<td>5.</td>
			<td> The training will be helpful to my own work.</td>
			<td><input type="radio" name="helpful" value="Excellent" ></td>
			<td><input type="radio" name="helpful" value="Very Good" ></td>
			<td><input type="radio" name="helpful" value="Good" ></td>
			<td><input type="radio" name="helpful" value="Average" ></td>
			<td><input type="radio" name="helpful" value="below Average" ></td>
		</tr>
		<tr>
			<td>6.</td>
			<td> The trainer was knowledgeable about the subject matter.</td>
			<td><input type="radio" name="trainer_knowledge" value="Excellent" ></td>
			<td><input type="radio" name="trainer_knowledge" value="Very Good" ></td>
			<td><input type="radio" name="trainer_knowledge" value="Good" ></td>
			<td><input type="radio" name="trainer_knowledge" value="Average" ></td>
			<td><input type="radio" name="trainer_knowledge" value="below Average" ></td>
		</tr>
		<tr>
			<td>7.</td>
			<td> The trainer was well prepared and thorough. </td>
			<td><input type="radio" name="trainer_prepared" value="Excellent" ></td>
			<td><input type="radio" name="trainer_prepared" value="Very Good" ></td>
			<td><input type="radio" name="trainer_prepared" value="Good" ></td>
			<td><input type="radio" name="trainer_prepared" value="Average" ></td>
			<td><input type="radio" name="trainer_prepared" value="below Average" ></td>
		</tr>
		<tr>
			<td>8.</td>
			<td> The time allotted for the training was sufficient. </td>
			<td><input type="radio" name="time" value="Excellent" ></td>
			<td><input type="radio" name="time" value="Very Good" ></td>
			<td><input type="radio" name="time" value="Good" ></td>
			<td><input type="radio" name="time" value="Average" ></td>
			<td><input type="radio" name="time" value="below Average" ></td>
		</tr>
		<
		<tr>
			<td>9.</td>
			<td> The training location was well chosen. </td>
			<td><input type="radio" name="location" value="Excellent" ></td>
			<td><input type="radio" name="location" value="Very Good" ></td>
			<td><input type="radio" name="location" value="Good" ></td>
			<td><input type="radio" name="location" value="Average" ></td>
			<td><input type="radio" name="location" value="below Average" ></td>
		</tr>
	</tbody>
</table>


<div align="center">
<button id="but" > submit </button>
</div>





</body>
</html>