<!DOCTYPE html >

<html>
     <head></head>
     <style>
         th,td{
             width: 60px;
             height: 40px;
             text-align:center;
         }
         table{
             
             border-collapse:collapse;
             background-color:#a48030;         }

         
}
         </style>
      <body> 
      <?php $x=$y=$r=NULL; if (isset($_POST['operation']))
{ 
    $x = $_POST["x"]; 
    $y = $_POST["y"]; 
    switch ($_POST["operation"]) 
        { 
            case "+": $r=$x+$y; 
                break; 
            case "-": $r=$x-$y; 
                break; 
            case "*": $r=$x*$y; 
                break; 
            case "/": $y?$r=$x/$y:$r="inf"; 
                break; 
            case "c": $x=$y=$r=NULL; 
                break; 
                } 
} ?>
          
           <br/>
            <form Name="calc" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
                <table border=2>
                     <tr>
             <td colspan=9>
                 <input type=text Name="display">
                </td>
             </tr>
              <tr> 
                  <td>
                <input type=button value="0" OnClick="calc.display.value+='0'">
            </td>
             <td>
                 <input type=button value="1" OnClick="calc.display.value+='1'">
        </td>
         <td>
             <input type=button value="2" OnClick="calc.display.value+='2'">
            </td>
             <td>
                 <input type=button name="operation" value="+" OnClick="calc.display.value+='+'">
            </td> 
        </tr>
         <tr>
              <td>
                  <input type=button value="3" OnClick="calc.display.value+='3'">
            </td>
         <td>
             <input type=button value="4" OnClick="calc.display.value+='4'">
            </td> <td>
                <input type=button value="5" OnClick="calc.display.value+='5'">
            </td>
             <td>
                 <input type=button name="operation" value="-" OnClick="calc.display.value+='-'">
                </td>
             </tr>
              <tr>
                   <td>
                       <input type=button value="6" OnClick="calc.display.value+='6'">
                    </td> 
                    <td>
                        <input type=button value="7" OnClick="calc.display.value+='7'">
                    </td>
                     <td>
                         <input type=button value="8" OnClick="calc.display.value+='8'">
                        </td> 
                        <td>
                            <input type=button name="operation" value="x" OnClick="calc.display.value+='*'">
                        </td> 
                    </tr> 
                    <tr> 
                        <td>
                            <input type=button value="9" OnClick="calc.display.value+='9'">
                        </td> 
                        <td>
                            <input type=button name="operation" value="C" OnClick="calc.display.value=''">
                        </td>
                         <td>
                             <input type=button name="operation" value="=" OnClick="calc.display.value=eval(calc.display.value)">
                            </td> <td><input type=button name="operation" value="/" OnClick="calc.display.value+='/'">
                        </td>
                         </tr> 
                        </table> 
                    </form> 
                </body>
                 </html>