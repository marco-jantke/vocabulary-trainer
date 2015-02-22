# README

[![Build Status](https://secure.travis-ci.org/marco-jantke/vocabulary-trainer.png)](http://travis-ci.org/marco-jantke/vocabulary-trainer)

## Installation

Install the project and start the vagrant setup:

    git clone git@github.com:marco-jantke/vocabulary-trainer.git
    cd vocabulary-trainer
    vagrant up
    
Setup db and data fixtures:

    vagrant ssh
    cd /var/www/vocabulary_trainer
    app/console doctrine:schema:create
    app/console doctrine:fixtures:load
