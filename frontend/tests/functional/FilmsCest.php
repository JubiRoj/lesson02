<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class FilmsCest
{
    public function checkFilms(FunctionalTester $I)
    {
        $I->amOnRoute('films');
        $I->see('Films', 'h1');
    }
}
