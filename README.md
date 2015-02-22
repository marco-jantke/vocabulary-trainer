# README

[![Build Status](https://secure.travis-ci.org/marco-jantke/vocabulary-trainer.png)](http://travis-ci.org/marco-jantke/vocabulary-trainer)

## Installation

Install the project, ssh into the machine and prepare the project:

    git clone git@github.com:marco-jantke/vocabulary-trainer.git
    cd vocabulary-trainer
    vagrant up
    vagrant ssh
    cd /var/www/vocabulary_trainer
    composer install
    app/console doctrine:schema:create
    app/console doctrine:fixtures:load
    
    
Execute the tests from the root directory in the machine:
  
    bin/phpunit
