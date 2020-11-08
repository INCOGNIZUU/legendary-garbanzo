<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric

        $input1 = $_POST["val1"];
        $input2 = $_POST["val2"];
        $opt = $_POST["calc"];

        if(is_numeric($input1) && is_numeric($input2)){
            # test if calc is not null
            if($opt != ""){
                # switch statement for value of calc
                switch($opt){
                    case 'add':
                        $result = $input1 + $input2;
                    break;
                    case 'sub':
                        $result = $input1 - $input2;
                    break;
                    case 'mul':
                        $result = $input1 * $input2;
                    break;
                    case 'div':
                        $result = $input1 / $input2;
                    break;

                }
                echo "Calculation result:" . $result;
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>