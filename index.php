<?php
if($_GET["submit"]=="1"){
echo "<blockquote><center><br>Thank you for your Patience & Understanding! Your response has been recorded. We will contact you soon.<br><Br></blockquote>";
}
?>
<br>
<form id="form" name="form">
<table width="100%" valign="middle">
<tr>
<td width="30%"> Full Name: </td><td width="70%"><input id="Name" name="Name" type="text"  placeholder="Full Name"></td>
</tr>
<tr>
<td> College Name: *</td><td><input id="College" name="College" type="text"  placeholder="Please write the full name of your college/institution without abbreviation."></td>
</tr>
<tr>
<td> Department: *</td><td><input id="Dept" name="Dept" type="text"  placeholder="Your field of study, department you are graduating in."></td>
</tr>
<tr>
<td> Year: *</td><td><input id="Year" name="Year" type="text" placeholder="1st / 2nd / 3rd / 4th"></td>
</tr>
<tr>
<td> College Roll No.: *</td><td><input id="Roll" name="Roll" type="text"  placeholder="Your University Roll Number"></td>
</tr>
<tr>
<td> Contact Number: *</td><td><input id="Contact" name="Contact" type="text"  placeholder="Contact in which you will be available"></td>
</tr>
<tr>
<td> Alternative Contact: *</td><td><input id="AContact" name="AContact" type="text"  placeholder="Alternative Contact Number"></td>
</tr>
<tr>
<td> Email Address: *</td><td><input id="Email" name="Email" type="text" placeholder="Your primary email address"></td>
</tr>
</table>
<br>
<div id="error" name="error" style="color:red"></div>
<br>
<ul class="elgg-menu elgg-menu-page elgg-menu-page-default" style="width:100px">
<li>
<a href="javascript:void(0);" onclick="postContactToGoogle()">Submit</a> 
</li>
</ul>
</form>

<script>
        function postContactToGoogle() {

            var name = $('#Name').val();
            var college = $('#College').val();
            var dept = $('#Dept').val();
            var year = $('#Year').val();
            var roll = $('#Roll').val();
            var contact = $('#Contact').val();
            var acontact = $('#AContact').val();
            var email = $('#Email').val();
		
		if(name == "" || college == "" || dept == "" || year == "" || roll == "" || contact == "" || acontact == "" || email == "" || code ==""){
		document.getElementById("error").innerHTML= "* All fields are required" ;
		return false;
		}
		
                $.ajax({
                    url: "https://docs.google.com/forms/d/16uZI1-kpRDXwvgo-cH5-55iwBznOJ-akQQ-IPMJ-Vuc/formResponse",
                    data: { "entry_1260283780": name, "entry_1398799115": college, "entry_1502389656": dept, "entry_926444401": year, "entry_289994478":roll, "entry_1012365506":contact, "entry_551150084":acontact, "entry_2052384173":email, "entry_396317671":code },
                    type: "POST",
                    dataType: "xml",
                    statusCode: {
                        0: function () {
                            window.location.replace("index.php?submit=1");
                        },
                        200: function () {
                            window.location.replace("index.php?submit=1");
                        }
                    }
                });
        }
</script>
