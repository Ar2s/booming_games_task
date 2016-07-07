<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use PhpAmqpLib\Message\AMQPMessage;
    
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
    
    $channel = $connection->channel();
    $channel->queue_declare('queue', false, false, false, false);
    
    
    foreach ($_POST as $param_name => $param_val) {
        #echo "Param: $param_name; Value: $param_val<br />\n";
    
        $msg = new AMQPMessage($param_val);
        $channel->basic_publish($msg, '', 'queue');
    
        #echo " [x] Sent ".$param_val."\n";
    }
    $channel->close();
    $connection->close();
    
     function Redirect($url, $permanent = false)
    {
      header('Location: ' . $url, true, $permanent ? 301 : 302);
      exit();
    }

    Redirect($_SERVER['HTTP_REFERER'], false);
?>