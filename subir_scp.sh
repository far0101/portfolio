#!/bin/bash

# Este script facilita la subida de tu portafolio usando SCP.
# Reemplaza los siguientes valores con los datos de tu servidor escolar.

USUARIO="tu_usuario"
HOST="ip_de_tu_servidor_o_dominio"
RUTA_DESTINO="/var/www/html/portafolio"

echo "Iniciando despliegue con SCP hacia $USUARIO@$HOST..."

# Excluimos la carpeta vendor, node_modules, y archivos de entorno/git
# ya que usualmente 'vendor' se instala allá (o si lo quieres llevar, quita --exclude)

rsync -avz --exclude '.git' \
           --exclude 'vendor' \
           --exclude 'node_modules' \
           --exclude '.env' \
           -e ssh ./ $USUARIO@$HOST:$RUTA_DESTINO

# Si estrictamente DEBES usar `scp` tradicional (sin rsync), puedes usar esta línea en su lugar:
# scp -r ./app ./bootstrap ./config ./database ./public ./resources ./routes ./storage artisan composer.json $USUARIO@$HOST:$RUTA_DESTINO

echo "¡Despliegue finalizado!"
