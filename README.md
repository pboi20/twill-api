<p align='center'>
Twill API docs are now accessible at <a href="https://twill.io/docs/api/2.x/">twill.io/docs/api</a> — this repository just for testing.
</p>
<hr>

# API browser for [Twill](https://github.com/area17/twill)

Branches:
[1.1](https://pboivin.github.io/twill-api/1.1/) |
[1.2](https://pboivin.github.io/twill-api/1.2/) |
[2.x](https://pboivin.github.io/twill-api/2.x/) |
[master](https://pboivin.github.io/twill-api/master/)


### Initial setup

```
git clone https://github.com/pboivin/twill-api.git
cd twill-api
git submodule update --init
composer install
```

### Generate the documentation

```
php vendor/bin/doctum.php update config.php
```

### Access the documentation locally

```
php -S 0.0.0.0:8000 -t docs/2.x/
```

Visit [localhost:8000](http://localhost:8000/) in your Web browser.
