<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use GuzzleHttp\Client;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context {
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
            'base_uri' => 'http://localhost:8000/'
        ]);

        $this->phpunit = new BaseContext;
    }

    protected $client;
    protected $response;
    protected $phpunit;

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
        $this->phpunit->assertEquals($response_code, $this->response->getStatusCode());
    }

    /**
     * @Given /^the JSON response should have a "([^"]*)" containing "([^"]*)"$/
     */
    public function theJsonResponseShouldHaveAContaining($var_name, $var_contain_val) {
        $json_data = json_decode($this->response->getBody(), true);
        $this->phpunit->assertArrayHasKey($var_name, $json_data);
        $this->phpunit->assertContains($var_contain_val, $json_data[$var_name]);
    }

    /**
     * @When /^(?:I )?send a ([A-Z]+) request to "([^"]+)" with values:$/
     */
    public function iSendARequestWithValues($method, $uri, TableNode $post) {
        $fields = [];
        foreach ($post->getRowsHash() as $key => $val) {
            // var_dump($val);
            $fields[$key] = $key;
        }

        var_dump($fields);

        $this->response = $this->client->request($method, $uri, $data);
    }

    /**
     * @When /^(?:I )?send a ([A-Z]+) request to "([^"]+)" with body:$/
     */
    public function iSendARequestWithBody($method, $uri, PyStringNode $string) {
        $data = json_decode($string, true);
        $this->response = $this->client->request($method, $uri, ['json' => $data]);
    }
}
