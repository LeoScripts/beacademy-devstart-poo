## install

```bash
# passo 1 - instaciando o repositorio
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

# passo 2 - instalando o repositorio
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

# passo 3 - instalando o composer e criando o arquivo de configuração
php composer-setup.php

# passo 4 - so pra remover o instalador pois nao sera mais necessario
php -r "unlink('composer-setup.php');"

# passo 5 - verificar instalação, vendo a versao instalada
php composer.phar --version
```