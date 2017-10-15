
function testSubmit()
{
  var x = document.forms["myForm"]["input1"];
  var y = document.forms["myForm"]["input2"];
  if(x.value =="" || y.value=="")
  {
    return false;
  }
  return true;
}


function submitForm()
{
  if(testSubmit())
  {
    document.forms["myForm"].reset(); //and then reset the form values
  }
}