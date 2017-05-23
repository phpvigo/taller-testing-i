<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Tester\Exception\PendingException;


/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
{
    /**
     * @Given que estoy en la página de inicio
     */
    public function queEstoyEnLaPaginaDeInicio()
    {
        $this->visitPath('/');
    }

    /**
    /**
     * @When paso el validador HTML5 de w3c
     */
    public function pasoElValidadorHtmlDeWc()
    {
        $html = $this->getSession()->getPage()->getContent();
        $validator = new \HtmlValidator\Validator();
        $validator->setParser(\HtmlValidator\Validator::PARSER_HTML5);
        $this->validation = $validator->validateDocument($html);
    }

    /**
     * @Then no hay errores de validación
     */
    public function noHayErroresDeValidacion()
    {
        $errorCount = count($this->validation->getErrors());

        if ($errorCount !== 0) {
            throw new \Exception("Se han encontrado {$errorCount} errores html:
            {$this->validation}");
        }
    }
}
