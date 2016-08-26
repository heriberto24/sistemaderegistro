<?php
    function getMoney($amount){
        if($amount<0){
            $amount = str_replace("-", "", $amount);
            $amount = number_format($amount, 2);
            $amount = '<div style="color: red">-$'.$amount.'</div>';
        }else{
            $amount = number_format($amount, 2);
            $amount = '<div style="color: green">&nbsp;$'.$amount.'</div>';
        }
        return $amount;
    }
    
    function getBalan($transactions){
        $num = count($transactions);
        asort($transactions);
        for ($i=0; $i < $num ; $i++){
            $j = 0;
            $sum = 0;
            foreach($transactions as $transaction){
                if($j < $num-$i){
                    $sum += $transaction[0];
                }
                $j++;
            }
            $balace[$i] = $sum;
        }
        return $balace;
    }
?>

<div class="row">
    <div class="col-sm-11"><h3>Transactions</h3></div>
    <div class="col-md-1">
        <a href="<?php echo APP_URL; ?>transactions/add">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
</div>

<table class="table table-hover">
    <tr>
        <th >ID</th>
        <th >Desciption</th>
        <th >Date</th>
        <th >Amount</th>
        <th >Balance</th>
        <th >Category</th>
        <th >Actions</th>
    </tr>
    <?php
        $balace = getBalan($transactions);
    $i=0;
    foreach ($transactions as $transaction):
        $date = date_create($transaction["4"]);
    ?>
        <tr>
            <td bgcolor="#848484"><strong><?php echo $transaction["0"]; ?></strong></td>
            <td><?php echo $transaction["3"]; ?></td>
            <td><?php echo date_format($date, "d/m/y"); ?></td>
            <td><?php echo getMoney($transaction["5"]); ?></td>
            <td><?php echo getMoney($balace[$i]); ?></td>
            <td><?php echo $transaction["7"]; ?></td>
            <td>
                <a href="<?php echo APP_URL; ?>transactions/edit/<?php echo $transaction["0"]; ?>">Editar</a>
		        <a href="<?php echo APP_URL; ?>transactions/delete/?id=<?php echo $transaction["0"]; ?>">Eliminar</a>
            </td>
        </tr>
    <?php
    $i++;
    endforeach ?>
</table>


<?php //print_r($transactions) ?>