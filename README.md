## Description 
Simple task for booming games

### Ruby solution

#### Requirements
*    [RabbitMQ](https://www.rabbitmq.com/download.html) is installed and running on localhost on standard port (5672)

#### Files
*    send.rb - after running expose post endpoint at "/", which pass all the values from POST to RabbitMQ queue
*    receive.rb - prints out all the messages send to the queue

#### Usage
*   $ ruby send.rb
*   $ ruby receive.rb

### PHP Solution

#### Requirements
*    [RabbitMQ](https://www.rabbitmq.com/download.html) is installed and running on localhost on standard port (5672)
*    Provided you have [php Composer](https://getcomposer.org/doc/00-intro.md) installed and functional, you can run the following:
     *    $php composer.phar install


#### Files
*    index.html - simple html form which POST a message to send.php
*    send.php - endpoint, which sends all the values from POST to RabbitMQ queue, then redirects to the sender
*    receive.php - prints out all the messages send to the queue

#### Usage
runing the receiver:
*   $ php receive.php