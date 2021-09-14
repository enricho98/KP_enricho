function visibility3() {
    var x = document.getElementById('#password');
    if (x.type === 'password') {
      x.type = "text";
      $('#eyeShow').show();
      $('#eyeSlash').hide();
    }else {
      x.type = "password";
      $('#eyeShow').hide();
      $('#eyeSlash').show();
    }
  }
  function myFunction() {
    var x = document.getElementById("*passwordbox-id*");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }