<?php
    // Build your next great package.

namespace William0friend\AbuseipdbPhp;

class AbuseipdbPhp
{
    protected $apiKey;
    protected $baseUrl = 'https://api.abuseipdb.com/api/v2/';

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getIpAddressReport($ipAddress)
    {
        // Implement the API call to retrieve the IP address report
    }

    public function submitReport($ipAddress, $categories, $comment = null)
    {
        // Implement the API call to submit a report
    }

    // Add more methods for other API functionalities
}

