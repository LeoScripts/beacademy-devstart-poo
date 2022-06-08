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

## configuração

- requisito 1 pra usar o composer e nescessario que todas as classes tenha `namespace`
- requisito 2 criar um arquide configuração do composer na raiz do projeto com o nome de `compose.json` no nosso caso aula-06
- criar um arquivo com `composer.json` com a configuração desejada
ex:
```json
{
  "autoload": {
    "psr-4": {
      "Classes\\":"/src"
    }
  }
}
```

- importar o autoload no arquivo princil ou de uso desejado 

ex: aqui importamos no index.php
```php
include 'vendor/autoload.php';
```
- executar o comando de autoload no terminal 
```bash
php composer.phar dump-autoload
```
> apos a execução ele deverar criar a pasta `vendor` na raiz do seu projeto 
>> no nosso caso o diretorio raiz e a aula-06
```diff
- ATENÇÃO 
! ningem mexe na pasta vendor

+ na pasta vendor estao todos os arquivos que o composer gerencia de codigos que nao sao sao seus, as bibliotecas instaladas
```