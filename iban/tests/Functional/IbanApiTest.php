<?php

namespace Tests;

class IbanApiTest extends TestCase
{
    /**
     * Test for the api response
     * 
     * @return void
     */
    public function testShouldReturnSuccessResponse()
    {
        $this->json('GET', 'validateIban/AD1400080001001234567890')
                ->seeJson([
                    "iban"=> "AD1400080001001234567890",
                    "success" => true,
                    "message" => "Valid IBAN provided for Andorra",
                    "country" => "Andorra"
                ])
                ->assertResponseOk();
    }
}
