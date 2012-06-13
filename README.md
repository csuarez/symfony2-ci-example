# Symfony2 Continuous Integration Example

## Content

This is a simple example configuration of a Symfony2 project for continuous integration. The repository includes:

* A valid Ant build.xml file (`build.xml`). It executes:
    * PHP syntax checking.
    * PHPUnit tests.
    * Test coverage analysis using Clover.
    * Generation of PHPDoc documentation.
    * phpcpd analysis.
    * PHP Depend analysis.
    * PHP Mess Detector analysis.
    * phploc analysis.
    * PHP Code Sniffer analysis.
    * Generation of PHP Code Browser reports.

* A Travis CI configuration file (it only checks PHP syntax). (`.travis.yml`)
* A Jenkins configuration file (`contrib/jenkins/config.xml`)

## Try it!
In order to test the build file, you have to install:

* PHPDocumentor 2
* phpunit
* phpcpd
* PHP Depend
* PHP Mess Detector
* PHP Code Sniffer
* PHP Code Browser
* phploc
* Ant

You can get installation instructions at the following URLs:

* [PHPDocumentor 2](http://www.phpdoc.org/)
* [Ant](http://ant.apache.org/)
* [All the PHP analysis/test stuff](http://jenkins-php.org/)

After the installation, you can test the build executing the help of the `build.xml` at the project root:

`ant info`

## Travis CI Build Status
[![Build Status](https://secure.travis-ci.org/csuarez/symfony2-ci-example.png)](http://travis-ci.org/csuarez/symfony2-ci-example)
