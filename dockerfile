# Use a imagem oficial do PHP como base
FROM php:7.4-apache

# Copie os arquivos do seu projeto para o diretório /var/www/html no contêiner
COPY . /var/www/html

# Exponha a porta 80 para o Apache
EXPOSE 80
