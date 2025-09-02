# php_class_loader
Automatic include files when classes are used.
Include only the "modules/module.php" for every file.

- test.php
-- Sample usages

- modules/module.php
-- This file must be added to automatically include other files.

- Example class files
-- modules/hello/hello.php
--- file for class "hello"

-- modules/universe/universe.php
--- file for class "universe"

-- modules/universe/planet/planet.php
--- file for class "universe\planet"
--- This file must begin with "namespace universe;"