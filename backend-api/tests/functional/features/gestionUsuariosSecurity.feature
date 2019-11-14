Feature: Citas
    As a admin I want to create users.

    Scenario: Store User
        When I send a POST request to "/users/create" with body:
        """"
        {
            "userP":"RandallLou",
            "id":"1003",
            "name":"PruebaBDD",
            "email":"PruebaBDD@gmail.com",
            "password":"qwerty",
            "puesto":"1"
        }
        """
        Then the response code should be 200
        And the JSON response should have a "message" containing "creado"
    
    Scenario: Update User
        When I send a PUT request to "/users/update" with body:
        """"
        {
            "userP":"RandallLou",
            "puesto":"1",
            "id":"1003",
            "name":"PruebaBDD2",
            "email":"PruebaBDD2@gmail.com",
            "password":"qwerty"
        }
        """
        Then the response code should be 200
        And the JSON response should have a "message" containing "actualizado"

    Scenario: Destroy User
        When I send a DELETE request to "/users/destroy" with body:
        """"
        {
            "userP":"RandallLou",
            "id":"1003"
        }
        """
        Then the response code should be 200
        And the JSON response should have a "message" containing "eliminado"

