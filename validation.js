
    //user name validation starts
    function name_validation(){
    'use strict';
    var name_name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    var letters = /^[0-9a-zA-Z]+$/;
    if(name_length < 4 || !name_value.match(letters))
    {
    document.getElementById('name_err').innerHTML = 'Name must be atleast 4 chracters long and alphanuric chracters only.';
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid username';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }
    //user name validation ends
    //country validation starts
    function country_validation(){
    'use strict';
    var country_name = document.getElementById("country");
    var country_value = document.getElementById("country").value;
    if(country_value === "Default" || country_value === "--")
    {
    document.getElementById('country_err').innerHTML = 'You must select a country';
    country_name.focus();
    document.getElementById('country_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('country_err').innerHTML = 'Country selected.';
    document.getElementById('country_err').style.color = "#00AF33";
    }
    }
    //country validation ends
    //zip validation starts
    function zip_validation(){
    'use strict';
    var numbers = /^[0-9]+$/;
    var zip_name = document.getElementById("zip");
    var zip_value = document.getElementById("zip").value;
    var zip_length = zip_value.length;
    if(!zip_value.match(numbers) || zip_length !== 5)
    {
    document.getElementById('zip_err').innerHTML = 'You must enter a ZIP code, which must be numeric and must be at least 5 chracters long.';
    zip_name.focus();
    document.getElementById('zip_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('zip_err').innerHTML = 'ZIP code entered';
    document.getElementById('zip_err').style.color = "#00AF33";
    }
    }
    //zip validation ends
    //email validation starts
    function email_validation(){
    'use strict';
    var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
    var email_name = document.getElementById("email");
    var email_value = document.getElementById("email").value;
    var email_length = email_value.length;
    if(!email_value.match(mailformat) || email_length === 0)
    {
    document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
    email_name.focus();
    document.getElementById('email_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('email_err').innerHTML = 'Valid email format';
    document.getElementById('email_err').style.color = "#00AF33";
    }
    }
    //email validation ends
    //gender validation starts
    function gender_validation(){
    'use strict';
    if ( (document.getElementById("msex").checked === false) && (document.getElementById("fsex").checked === false)){
    document.getElementById('gender_err').innerHTML = 'Please slect a geneder.';
    document.getElementById('gender_err').style.color = "#FF0000";
    document.getElementById("msex").checked = true;
    }
    else
    {
    document.getElementById('gender_err').innerHTML = 'Gender selected';
    document.getElementById('gender_err').style.color = "#00AF33";
    }
    }
    //gender validation ends