function myFunction() {
    let text;
    if (document.getElementById("string").validity.rangeUnderflow) {
      text = "Value too small";
    } else {
      text = "the message was sent successfully";
    } 
    document.getElementById("demo").innerHTML = text;
  }