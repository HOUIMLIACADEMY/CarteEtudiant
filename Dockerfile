# Utiliser une image de base PHP avec Apache
FROM php:8.0-apache

# Copier tous les fichiers du répertoire courant vers le dossier racine du serveur web
COPY . /var/www/html/

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli

# Donner les permissions correctes au dossier
RUN chown -R www-data:www-data /var/www/html
