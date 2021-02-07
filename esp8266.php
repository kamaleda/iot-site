$LED=$_POST["state"]
//create a variable that will receive the led state

$Write="<p>LED Status: ". $LED;

//create an HTML file to display data
file_put_contents('led.html',$Write);
