# Parsley js easy installation
Add parsley js easily on your html form with request argument

Argument list <br>
Required: true or flase <br>
Type: text, email, url, integer, digits, check <br>
Minlength: any number (leave it blank if u dont need any min length) <br>
Maxlength: any number (leave it blank if u dont need any max length) <br>

# Example
parsley(true,'text')   <br>
it will return this  <br>
data-parsley-required="true" (fild is required) <br>

parsley('true','digits',10) <br>
it will return this  <br>
data-parsley-required="true" data-parsley-type="digits" data-parsley-minlength="10"  <br>
 <br>
parsley('true','digits',5,10) <br>
it will return this  <br>
data-parsley-required="true" data-parsley-type="digits" data-parsley-length="[5, 10]" <br>
 <br>
parsley('true','check',5,10) <br>
it will return this  <br>
data-parsley-required="true" data-parsley-check="[5, 10]" <br>
<br>
You people are more smart than me, add your suggestion on it.<br>
Thanks<br>
