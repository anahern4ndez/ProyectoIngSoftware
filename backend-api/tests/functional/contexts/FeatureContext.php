<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use GuzzleHttp\Client;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost:8000/api/'
        ]);
    }

    protected $client;
    protected $response;

    /**
     * @When /^I send a ([A-Z]+) request to "([^"]*)"$/
     */
    public function iSendARequestTo($method, $uri) {
        $this->response = $this->client->request($method, $uri);
    }

    /**
     * @Then /^the response code should be (\d+)$/
     */
    public function theResponseCodeShouldBe($response_code) {
        $this->assertEquals($response_code, $this->response->getStatusCode());
    }

    /**
     * @Given /^the JSON response should have a "([^"]*)" containing "([^"]*)"$/
     */
    public function theJsonResponseShouldHaveAContaining($var_name, $var_contain_val) {
        $json_data = json_decode($this->response->getBody(), true);
        $this->assertArrayHasKey($var_name, $json_data);
        $this->assertContains($var_contain_val, $json_data[$var_name]);
    }
}
