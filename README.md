# php_class_loader

Automatic include files when classes are used.  
Include only the "modules/module.php" for every file.  

## [test.php](https://github.com/slumpmax/php_class_loader/blob/main/src/test.php)
> Sample usages

## [modules/module.php](https://github.com/slumpmax/php_class_loader/blob/main/src/modules/module.php)

> This file must be added to automatically include other files.  

## Example class files

### [modules/hello/hello.php](https://github.com/slumpmax/php_class_loader/blob/main/src/modules/hello/hello.php)

> file for class "hello"  

### [modules/universe/universe.php](https://github.com/slumpmax/php_class_loader/blob/main/src/modules/universe/universe.php)

> file for class "universe"  

### [modules/universe/planet/planet.php](https://github.com/slumpmax/php_class_loader/blob/main/src/modules/universe/planet/planet.php)

> file for class "universe\planet"  
> This file must begin with "namespace universe;"  