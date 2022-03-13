
    //user name validation starts
    function name_validation(){
    'use strict';
    var name_name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    var letters = /^[0-9a-zA-Z ]+$/;
    if(name_length < 4 || !name_value.match(letters))
    {
    document.getElementById('name_err').innerHTML = 'Name must be atleast 4 chracters long and alphanuric chracters only.';
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid name';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }
    //user name validation ends
    //year validation starts
    function year_validation(){
    'use strict';
    var numbers = /^([0-9]{4})+$/;
    var year_name = document.getElementById("year");
    var year_value = document.getElementById("year").value;
    var year_length = year_value.length;
    if(!year_value.match(numbers) || year_length !== 4 || year_value < 1990 || year_value > 2022)
    {
    document.getElementById('year_err').innerHTML = 'You must enter a valid year, which must be numeric and must be 4 chracters long.';
    year_name.focus();
    document.getElementById('year_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('year_err').innerHTML = 'valid year';
    document.getElementById('year_err').style.color = "#00AF33";
    }
    }
    //year validation ends
    //price validation starts
    function price_validation(){
        'use strict';
        var numbers = /^[0-9]+$/;
        var price_name = document.getElementById("price");
        var price_value = document.getElementById("price").value;
        var price_length = price_value.length;
        if(price_value < 1 )
        {
        document.getElementById('price_err').innerHTML = 'You must enter a valid price, which must be a positive number.';
        price_name.focus();
        document.getElementById('price_err').style.color = "#FF0000";
        }
        else
        {
        document.getElementById('year_err').innerHTML = 'valid price';
        document.getElementById('year_err').style.color = "#00AF33";
        }
        }
        //price validation ends
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