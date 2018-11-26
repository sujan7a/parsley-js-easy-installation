# Parsley js easy installation
Add parsley js easily on your html form with request argument

Argument list <br>
Required: true or flase <br>
Type: text, email, url, integer, digits, check <br>
Minlength: any number (leave it blank if u dont need any min length) <br>
Maxlength: any number (leave it blank if u dont need any max length) <br>

# Example
parsley(true,'text') 
it will return this 
data-parsley-required="true" (fild is required)

parsley('true','digits',10)
it will return this 
data-parsley-required="true" data-parsley-type="digits" data-parsley-minlength="10" 

parsley('true','digits',5,10)
it will return this 
data-parsley-required="true" data-parsley-type="digits" data-parsley-length="[5, 10]"

parsley('true','check',5,10)
it will return this 
data-parsley-required="true" data-parsley-check="[5, 10]"
