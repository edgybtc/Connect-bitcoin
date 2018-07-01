Connect-BTC
===============

A simple function for making calls to Bitcoin's API using PHP & cURL.

How to use
---------------
1. Edit out the rpc details:
     ```php
    $rpcuser='rpcusername';
    $rpcpassword='rpcpassword'; 
    $host='nodeIP';  //IP address of your node or localhost, if running locally
    $port='port';
     ```
2. Include connectbtc.php into your PHP script:

    ```php
    require_once('easybitcoin.php');
     ```
3. Create the method that you want to call.For example:
 
   ```php
    $method="getblockchaininfo";
    ```
4.Pass this string as an argument:

   ```php
   $callback=bitcoin($method);
   ```
