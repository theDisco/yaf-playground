yaf-playground
==============

Testing space for yaf php extension. Installation depends on following packages installable through
packagist:

```
Twig/Twig
Respect/Data
Respect/Relational
```

Twig is used to provide layout option, Respect packages are used to provide the ORM.

Installation
============

Following php modules have to be installed:

```
pecl install yaf
pecl install intl
```

Following lines have to be added to the php.ini

```
extension=yaf.so

[yaf]
yaf.environ=production
yaf.lowcase_path=1
yaf.action_prefer=0
yaf.use_namespace=1
```

Install composer if you want to enable support for twig

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

If you want to use ResourceBundle go to the URL below, download ICU and extract it

```
http://site.icu-project.org/download
```

After that convert your bundle into res file

```
$ cd /path/to/icu/usr/local/bin
$ export LD_LIBRARY_PATH=../lib && ./genrb /path/to/resource.txt -e UTF-8 -d /path/to/application/resources
```