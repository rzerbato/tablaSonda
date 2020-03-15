<?php

require 'libs/aws-autoloader.php';
date_default_timezone_set('America/New_York');

use Aws\DynamoDb\DynamoDbClient;

$client = new DynamoDbClient(array(
    'region' => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key' => 'AKIATRFAIVAU7UISO6ET',
          'secret' => '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',
          ]
        ));
        
        
        $iterator = $client->getIterator('Query', array(
            'TableName'     => 'Sonda',   
            'KeyConditions' => array(
                'Device' => array(
                    'ExpressionAttributeValues' => array(
                        array('S' => 'Sonda')
                    ),
                    'ComparisonOperator' => 'EQ'
                ),
                )
            ));
            
            $iterator = $client->getIterator('Scan', array(
                'TableName' => 'Sonda'
            ));
?>