## Better Unit Testing with Lithium

To read the article on how to [improve your lithium tests](http://www.blainesch.com/438/better-unit-testing-in-lithium/) click the link below.

[http://www.blainesch.com/438/better-unit-testing-in-lithium/](http://www.blainesch.com/438/better-unit-testing-in-lithium/)

## Installing
~~~ bash
git clone git@github.com:BlaineSch/BetterTestingWithLithium.git
cd BetterTestingWithLithium && git submodule update --init
~~~

## Running the tests

### Through your browser
Assuming you installed this in your localhost directory, just go to "/test"
~~~ bash
http://localhost/test
~~~

### Via the command line
~~~ bash
cd app
../libraries/lithium/console/li3 test tests
~~~

Output:
~~~ bash
----
Test
----

...

OK

3 / 3 passes
0 fails and 0 exceptions
~~~