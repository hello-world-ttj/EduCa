//form-validation
function validation(){

var phone           = document.getElementById('phone').value;
var location        = document.getElementById('location').value;
var city            = document.getElementById('city').value;
var txtstate        = document.getElementById('txtstate').value;
var email           = document.getElementById('email').value;
var username        = document.getElementById('username').value;
var txtpp           = document.getElementById('txtpp').value;
var txtconpasss     = document.getElementById('txtconpasss').value;
var firstname       = document.getElementById('firstname').value;
var lastname        = document.getElementById('lastname').value;
var ph              = document.getElementById('ph').value;
var mob             = document.getElementById('mob').value;
var house           = document.getElementById('house').value;
var locat           = document.getElementById('locat').value;
var txtstates       = document.getElementById('txtstates').value;
var eemail          = document.getElementById('eemail').value;


if(phone == ""){
  document.getElementById('errormsg').innerHTML = 'Phone cannot be blank !!!';
  return false;
} else if(phone.length!=10){
  document.getElementById('errormsg').innerHTML = 'Phone number should be 10 digit !!!';
  return false;
} else if(isNaN(phone)){
  document.getElementById('errormsg').innerHTML = 'Phone number should be digit !!!';
  return false;
}else if(location == ""){
  document.getElementById('errormsg').innerHTML = 'Location cannot be blank !!!';
  return false;
} else if(city == ""){
  document.getElementById('errormsg').innerHTML = 'City cannot be blank !!!';
  return false;
} else if(txtstate == ""){
  document.getElementById('errormsg').innerHTML = 'State cannot be blank !!!';
  return false;
} else if(email == ""){
  document.getElementById('errormsg').innerHTML = 'Email cannot be blank !!!';
  return false;
} else if(username == ""){
  document.getElementById('errormsg').innerHTML = 'Username cannot be blank !!!';
  return false;
} else if(txtpp == ""){
  document.getElementById('errormsg').innerHTML = 'Password cannot be blank !!!';
  return false;
} else if(txtconpasss == ""){
  document.getElementById('errormsg').innerHTML = 'Confirm Password cannot be blank !!!';
  return false;
} else if(txtpp != txtconpasss){
  document.getElementById('errormsg').innerHTML = 'Passwords are not matching !!!';
  return false;
} else if(firstname == ""){
  document.getElementById('errormsg').innerHTML = 'Firstname cannot be blank !!!';
  return false;
} else if(lastname == ""){
  document.getElementById('errormsg').innerHTML = 'Lastname cannot be blank !!!';
  return false;
} else if(ph == ""){
  document.getElementById('errormsg').innerHTML = 'Phone cannot be blank !!!';
  return false;
} else if(ph.length!=10){
  document.getElementById('errormsg').innerHTML = 'Phone number should be 10 digit !!!';
  return false;
} else if(isNaN(ph)){
  document.getElementById('errormsg').innerHTML = 'Phone number should be digit !!!';
  return false;
} else if(mob == ""){
  document.getElementById('errormsg').innerHTML = 'Mobile cannot be blank !!!';
  return false;
} else if(mob.length!=10){
  document.getElementById('errormsg').innerHTML = 'Mobile number should be 10 digit !!!';
  return false;
} else if(isNaN(mob)){
  document.getElementById('errormsg').innerHTML = 'Mobile number should be digit !!!';
  return false;
} else if(house == ""){
  document.getElementById('errormsg').innerHTML = 'House cannot be blank !!!';
  return false;
} else if(locat == ""){
  document.getElementById('errormsg').innerHTML = 'Location cannot be blank !!!';
  return false;
} else if(txtstates == ""){
  document.getElementById('errormsg').innerHTML = 'States cannot be blank !!!';
  return false;
} else if(eemail == ""){
  document.getElementById('errormsg').innerHTML = 'Email cannot be blank !!!';
  return false;
}
}



function valid(){

  var first           = document.getElementById('first').value;
  var last            = document.getElementById('last').value;
  var gender          = document.getElementById('gender').value;
  var house           = document.getElementById('house').value;
  var loc             = document.getElementById('loc').value;
  var city            = document.getElementById('city').value;
  var txtstate        = document.getElementById('txtstate').value;
  var dob             = document.getElementById('dob').value;
  var quali           = document.getElementById('quali').value;
  var mob             = document.getElementById('mob').value;
  var email           = document.getElementById('email').value;
  var username        = document.getElementById('username').value;
  var password        = document.getElementById('password').value;
  var cpass           = document.getElementById('cpass').value;



  if(first == ""){
    document.getElementById('errormsg').innerHTML = 'First name cannot be blank !!!';
    return false;
  } else if(last == ""){
    document.getElementById('errormsg').innerHTML = 'Last name cannot be blank !!!';
    return false;
  } else if(gender == ""){
    document.getElementById('errormsg').innerHTML = 'Gender cannot be blank !!!';
    return false;
  } else if(house == ""){
    document.getElementById('errormsg').innerHTML = 'House cannot be blank !!!';
    return false;
  } else if(loc == ""){
    document.getElementById('errormsg').innerHTML = 'Location cannot be blank !!!';
    return false;
  }  else if(city == ""){
    document.getElementById('errormsg').innerHTML = 'City cannot be blank !!!';
    return false;
  } else if(txtstate == ""){
    document.getElementById('errormsg').innerHTML = 'State cannot be blank !!!';
    return false;
  } else if(dob == ""){
    document.getElementById('errormsg').innerHTML = 'Date of Birth cannot be blank !!!';
    return false;
  } else if(quali == ""){
    document.getElementById('errormsg').innerHTML = 'Qualification cannot be blank !!!';
    return false;
  } else if(mob == ""){
    document.getElementById('errormsg').innerHTML = 'Mobile cannot be blank !!!';
    return false;
  } else if(mob.length!=10){
    document.getElementById('errormsg').innerHTML = 'Mobile number should be 10 digit !!!';
    return false;
  } else if(isNaN(mob)){
    document.getElementById('errormsg').innerHTML = 'Mobile number should be digit !!!';
    return false;
  } else if(email == ""){
    document.getElementById('errormsg').innerHTML = 'Email cannot be blank !!!';
    return false;
  } else if(username == ""){
    document.getElementById('errormsg').innerHTML = 'Username cannot be blank !!!';
    return false;
  } else if(password == ""){
    document.getElementById('errormsg').innerHTML = 'Password cannot be blank !!!';
    return false;
  } else if(cpass == ""){
    document.getElementById('errormsg').innerHTML = 'Confirm Password cannot be blank !!!';
    return false;
  } else if(password != cpass){
    document.getElementById('errormsg').innerHTML = 'Passwords are not matching !!!';
    return false;
  }

}



function staffvalid(){

  var txtname              = document.getElementById('txtname').value;
  var txtlastname          = document.getElementById('txtlastname').value;
  var txtgen               = document.getElementById('txtgen').value;
  var txthouse             = document.getElementById('txthouse').value;
  var txtloc               = document.getElementById('txtloc').value;
  var txtcity              = document.getElementById('txtcity').value;
  var txtstate             = document.getElementById('txtstate').value;
  var txtquali             = document.getElementById('txtquali').value;
  var txtphnumber          = document.getElementById('txtphnumber').value;
  var txtmobnum            = document.getElementById('txtmobnum').value;
  var txtemail             = document.getElementById('txtemail').value;
  var txtuser              = document.getElementById('txtuser').value;
  var txtPassword          = document.getElementById('txtPassword').value;
  var txtConfirmPassword   = document.getElementById('txtConfirmPassword').value;



  if(txtname == ""){
    document.getElementById('errormsg').innerHTML = 'First name cannot be blank !!!';
    return false;
  } else if(txtlastname == ""){
    document.getElementById('errormsg').innerHTML = 'Last name cannot be blank !!!';
    return false;
  } else if(txtgen == ""){
    document.getElementById('errormsg').innerHTML = 'Gender cannot be blank !!!';
    return false;
  } else if(txthouse == ""){
    document.getElementById('errormsg').innerHTML = 'House cannot be blank !!!';
    return false;
  } else if(txtloc == ""){
    document.getElementById('errormsg').innerHTML = 'Location cannot be blank !!!';
    return false;
  } else if(txtcity == ""){
    document.getElementById('errormsg').innerHTML = 'City cannot be blank !!!';
    return false;
  } else if(txtstate == ""){
    document.getElementById('errormsg').innerHTML = 'State cannot be blank !!!';
    return false;
  } else if(txtquali == ""){
    document.getElementById('errormsg').innerHTML = 'Qualification cannot be blank !!!';
    return false;
  } else if(txtphnumber == ""){
    document.getElementById('errormsg').innerHTML = 'Phone cannot be blank !!!';
    return false;
  } else if(txtphnumber.length!=10){
    document.getElementById('errormsg').innerHTML = 'Phone should be 10 digit !!!';
    return false;
  } else if(isNaN(txtphnumber)){
    document.getElementById('errormsg').innerHTML = 'Phone should be digit !!!';
    return false;
  } else if(txtmobnum == ""){
    document.getElementById('errormsg').innerHTML = 'Mobile cannot be blank !!!';
    return false;
  } else if(txtmobnum.length!=10){
    document.getElementById('errormsg').innerHTML = 'Mobile number should be 10 digit !!!';
    return false;
  } else if(isNaN(txtmobnum)){
    document.getElementById('errormsg').innerHTML = 'Mobile number should be digit !!!';
    return false;
  } else if(txtemail == ""){
    document.getElementById('errormsg').innerHTML = 'Email cannot be blank !!!';
    return false;
  } else if(txtuser == ""){
    document.getElementById('errormsg').innerHTML = 'Username cannot be blank !!!';
    return false;
  } else if(txtPassword == ""){
    document.getElementById('errormsg').innerHTML = 'Password cannot be blank !!!';
    return false;
  } else if(txtConfirmPassword == ""){
    document.getElementById('errormsg').innerHTML = 'Confirm Password cannot be blank !!!';
    return false;
  } else if(txtPassword != txtConfirmPassword){
    document.getElementById('errormsg').innerHTML = 'Passwords are not matching !!!';
    return false;
  }
}



  function validate(){
    var yourname       = document.getElementById('yourname').value;
    var email          = document.getElementById('email').value;
    var phone          = document.getElementById('phone').value;
    var message        = document.getElementById('message').value;

    if(yourname == ""){
      document.getElementById('errormsg').innerHTML = 'Name cannot be blank !!!';
      return false;
    } else if(email == ""){
      document.getElementById('errormsg').innerHTML = 'Email cannot be blank !!!';
      return false;
    } else if(phone == ""){
      document.getElementById('errormsgss').innerHTML = 'Phone cannot be blank !!!';
      return false;
    } else if(phone.length!=10){
      document.getElementById('errormsg').innerHTML = 'Phone number should be 10 digit !!!';
      return false;
    } else if(isNaN(phone)){
      document.getElementById('errormsg').innerHTML = 'Phone number should be digit !!!';
      return false;
    } else if(message == ""){
      document.getElementById('errormsg').innerHTML = 'Message cannot be blank !!!';
      return false;

    }

  }