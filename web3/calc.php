<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric

        $input1 = $_POST["val1"];
        $input2 = $_POST["val2"];
        $opt = $_POST["calc"];

        //echo $input1;
        //echo $input2;
        //echo $opt;


        if(is_numeric($input1) && is_numeric($input2)){
            # test if calc is not null
            if($opt != ""){
                # switch statement for value of calc
                //echo $opt;
                switch($opt){
                    case 'add':
                        $add = $input1 + $input2;
                        echo $add;
                    break;
                    case 'sub':
                        $sub = $input1 - $input2;
                        echo $sub;
                    break;
                    case 'mul':
                        $mul = $input1 * $input2;
                        echo $mul;
                    break;
                    case 'div':
                        $div = $input1 / $input2;
                        echo $div;
                    break;

                }
                //echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>