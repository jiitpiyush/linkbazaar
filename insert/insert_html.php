<html>
<head>
	<title> INSERT LINKS </title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<script language='javascript' type='text/javascript' src='/js/dr_dn.js'></script>
</head>

<body style="text-align:center;margin-left:400px;">

	<form id='formname' name='formname' method='post' action=''>
		<table width='50%' border='0' cellspacing='0' cellpadding='5'>
			<tr>
				<td width='41%' align='right' valign='middle'>Table :</td>
				<td width='59%' align='left' valign='middle'>
					<input type="button" name="table" value="entertainment" onclick="dropdownlist('entertain')">
					<input type="hidden" name="tab" value="entertain">

				</td>
			</tr>
			<tr>
				<td align='right' valign='middle'>Category :</td>
				<td align='left' valign='middle'>
					<script type='text/javascript' language='JavaScript'>
						document.write('<select name=sub onchange=dropdownlist1(this.options[this.selectedIndex].value)><option>Select Sub-Category</option></select>');
						//document.write('<select name=typ ><option value= >Select Type</option></select>');
					</script>
				</td>
			</tr>
			<tr>
				<td align='right' valign='middle'>Heading:</td>
				<td align='left' valign='middle'>
					<script type='text/javascript' language='JavaScript'>
						document.write('<select name=headings><option>Select Heading</option></select>');
					</script>
				</td>
			</tr>
			<tr>
				<td align='right' valign='middle'>Link Name:</td>
				<td align='left' valign='middle'>
					<input type='text' name='link_name' placeholder='Insert Link Name' required value=''>
			</tr>
			
			<tr>
				<td align='right' valign='middle'>Link :</td>
				<td align='left' valign='middle'>
					<input type='text' name='link' placeholder='Insert Link' required value=''>
			</tr>
			<tr>
				<td align='right' valign='middle'>Link Description:</td>
				<td align='left' valign='middle'>
					<input type='text' name='ldesc' placeholder='Link Description' required value=''>
			</tr>
			<tr>
				<td align='right' valign='middle'></td>
				<td align='left' valign='middle'>
					<input type='submit' value='INSERT'>
				</td>
			</tr>
			
		</table>
	</form>
	<table>
		<tr>
			<td>
				<a href="/insert/?v=show">
					<button value="SHOW DATABASE">SHOW DATABASE</button>
				</a>
			</td>
		</tr>
	</table>
</body>

</html>