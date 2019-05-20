# geometry

After cloning this repo, and cding into the "geometry" dir, install it by running
```composer install```

To run unit tests: 
```./vendor/bin/phpunit --bootstrap vendor/autoload.php tests```

To run appolication:
```php geometry```

# line vs line segment
The test requirements specified creating a "Line" rather than a "Line Segment".
Checking if 2 lines intersect is as simple as making sure they're not parallel.
Since i wasn't entirely sure if the requirements meant line or line segments, I included 2 separate versions of
the line intersecting check. Checking if a line segment intersects can be done via *lineSegmentIntersects*, while a normal line can be checked via *lineIntersects* within the Line class.

# thoughts for improvements
At first glance, there can be some minor refactors if this were a real application that needed to be maintained/extended. For instance, the *pointInCircle* and *circleIntersect* both calculate the x/y difference to it's comparee in a similar fashion. We could utilize a private utilty function to get the difference squared instead of doing the listing the operation twice for each method.

Another improvement we could do, is make getters/setters for each of the class properties such as x, y, radius, etc... This would be a better adherencing to best practices, but a redundant step for a sample application with no real world use.

# laravel framework

I've opted to not use a laravel framework for this test, mainly because of first requirement:
*"1. This should be a CLI based application - there’s no need for a web based interface"*

I looked into potentially using laravel-zero instead, however the structure for laravel-zero is not MVC, it's more driven to ease the process of creating CLI commands. I felt like creating command classes for our geometric elements would be a very hacky way to force a laravel framework into this test.

I understand that we could technically perform a single-run of a laravel application by instead of serving on a port for a web interface, instead doing:
``` php index.php ``` 

However, due to the nature  of this test, it would've been a very unecessarily heavy code base, where I would've created our geometrical element classes as Models and incorporated our in the element's Controller.