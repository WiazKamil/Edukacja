<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if(!empty($_POST['name']) && !empty($_POST['geometricfigure']))
    {
        switch($_POST['geometricfigure']){
            case 'kwadrat':
                header('location: ./square.php');
                break;
            case 'prostokat':
                header('location: ./rectangle.php');
                break;
        }
        
    }
    else{
        echo "wypełnij pola";

?>
<script>
    history.back();
</script>
<?php
 
    }
    ?>