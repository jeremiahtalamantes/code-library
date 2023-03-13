<?php 

/**
 * API.php | Signing/validating requests
 */

class API {

    // Properties
    private $secretKey;
  
    // Constructor
    public function __construct($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * Methods
     */

    public function signRequest($requestData)
    {
        // Sign request data with key
        $signature = hash_hmac('sha256', $requestData, $this->secretKey);

        // Return signature
        return $signature;
    }

    public function validateRequest($requestData, $requestSignature) 
    {
        // Validate data using key
        $expectedSignature = hash_hmac('sha256', $requestData, $this->secretKey);

        // Determine validation
        if ($requestSignature === $expectedSignature) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}