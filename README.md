## Description 
Simple task for booming games
## Requirements
*    Provided you have [php Composer](https://getcomposer.org/doc/00-intro.md) installed and functional, you can run the following:
     *    $ composer.phar install
*    [RabbitMQ](https://www.rabbitmq.com/download.html) is installed and running on localhost on standard port (5672)

## Files
*    index.html - simple html form which POST a message to send.php
*    send.php - endpoint, which sends all the values from POST to RabbitMQ queue, then redirects to the sender
*    receive.php - prints out all the messages send to the queue

## Usage
runing the receiver:
*   $ php receive.php