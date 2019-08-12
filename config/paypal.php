<?php
return array(
    // set your paypal credential
    'client_id' => 'AV0R7-T4sLOoYboyfHWV10R8QWXrtj0i4xg8Upr16nUEAGOvvCRTiEQnv07DdIIuGco4ug79YX8Mnz2n',
    'secret' => 'EKcA4UYNA1vyHDLBUyChnNz3ksTDslCFMzi8ejzRRqsTiN48AMk3rdmYSAhNZc33Q97Qlq7ohmmc7b-e',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);