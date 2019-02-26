# Iniciando o Projeto
```
cd app
composer install
```


# Utilizando Docker
```
cd docker
docker build -t jumia .
docker run -it --rm --name jumia jumia
```

# Rodando teste
```
./vendor/bin/phpunit --bootstrap ./bootstrap.php tests
```