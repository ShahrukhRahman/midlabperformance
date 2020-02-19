<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<legend> <b>ASSIGNMENT</b></legend>
	<table border="1" width="500px">
		<tr>
			<td colspan="3"> 
				<h1><center>PERSON PROFILE</center></h1>
			</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td> 
				<input type="radio" name="gender" value="">Male 
				<input type="radio" name="gender" value="">Female
				<input type="radio" name="gender" value="">Other
			</td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>
				<input type="text" name="" value="" size="10px"/>/
				<input type="text" name="" value="" size="10px"/>/
				<input type="text" name="" value="" size="10px"/> <i>(dd/mm/yyyy)</i>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>Blood Group:</td>
			<td>
				<select>
					<option>A+</option>
					<option>B+</option>
					<option>A-</option>
				</select>
			</td>
            <td></td>
		</tr>
		<tr>
			<td>Degree:</td>
			<td>
				<input type="checkbox" name="">SSC
				<input type="checkbox" name="">HSC
				<input type="checkbox" name="">BSc.
				<input type="checkbox" name="">MSc.
			</td>
            <td></td>
		</tr>
        <tr>
            <td>Photo</td>
            <td>
            <input type="file" name="" value="Browse..."> 
            </td>
        </tr>
		<tr>
			<td></td>
			<td>
				
				<input type="submit" name="" value="Submit">
				<input type="reset" name="" value="Reset">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>