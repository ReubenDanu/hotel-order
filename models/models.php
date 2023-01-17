<?php
    require_once dirname(__FILE__) . '/../config/config.php';
    class Models{
        // prototype only
        protected $conn;
        protected $config;
        
        public function __construct($config){
            $config = $this->decryptConfig($config);
            var_dump($config);
        }

        public function decryptConfig($arrayConfig){
            $config = array();
            $methode = "";

            for($i = 0; $i < count($arrayConfig); $i++){
            
                $keyName = array_keys($arrayConfig[$i]);
            
                if($i == 0){
            
                    $methode = $arrayConfig[$i][$keyName[0]];
            
                } else {
            
                    $iv = base64_decode($arrayConfig[$i][$keyName[2]]);
                    $key = base64_decode($arrayConfig[$i][$keyName[1]]);
                    $cipherText = base64_decode($arrayConfig[$i][$keyName[0]]);
                    
                    $secret = openssl_decrypt($cipherText, $methode, $key, 0, $iv);
            
                    if(strpos($keyName[0], "port") !== false){
            
                        $secret = (int) $secret;

                    }
                    
                    $needle = "C";
                    $string_array = explode($needle, $keyName[0]);
                    $keyName = rtrim($string_array[0], " ");
                    $config[$keyName] = $secret;

                }
            }

            return $config;


        }

        public function retrieveGuests(){

        }
    }


    $test = new Models($config);


?>