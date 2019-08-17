Feature: Citas
    As a admin I want to create users.

    Scenario: Destroy User
        When I send a DELETE request to "/users/destroy" with body:
        """"
        {
            "id":"1"
        }
        """
        Then the response code should be 200
        And the JSON response should have a "message" containing "eliminado"

    Scenario: Store User
        When I send a POST request to "/users/create" with body:
        """"
        {
            "name":"luisE",
            "email":"luisE5@gmail.com",
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
            "id":"2",
            "name":"luisUpdateUpdate",
            "email":"luisUpdate2@gmail.com",
            "password":"qwerty",
            "puesto":"1"
        }
        """
        Then the response code should be 200
        And the JSON response should have a "message" containing "actualizado"