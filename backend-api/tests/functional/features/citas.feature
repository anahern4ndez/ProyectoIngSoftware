Feature: Citas
    As a doctor I want to see my apointments.

    Scenario: Get citas
        When I send a GET request to "/citas"
        Then the response code should be 200
        And the JSON response should have a "message" containing "Consulta de citas realizada con éxito."