Feature: MenuPrincipal
    As a Doctor I want to use menu principal.

    Scenario: Get Nombre
        When I send a GET request to "/get_nombre" with body:
        """"
        {
            "id":"1"
        }
        """
        Then the response code should be 200

    Scenario: Get Citas
        When I send a GET request to "/get_citas" with body:
        """"
        {
            "id":"1"
        }
        """
        Then the response code should be 200