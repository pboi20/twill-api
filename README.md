# Twill API browser

[pboi20.github.io/twill-api](https://pboi20.github.io/twill-api/)


### Initial setup

```
git clone https://github.com/pboi20/twill-api.git
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
php -S 0.0.0.0:8000 -t docs
```

Visit [localhost:8000](http://localhost:8000/) in your Web browser.
