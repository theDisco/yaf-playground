yaf-playground
==============

Testing space for yaf php extension

Installation
============

```
pecl install yaf
```

```
extension=yaf.so

[yaf]
yaf.environ=production
yaf.lowcase_path=1
yaf.action_prefer=0
yaf.use_namespace=1
```

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

TODO
====

* Integrate some lightweight ORM