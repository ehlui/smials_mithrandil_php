FROM php:7.4-apache

LABEL image4=php_beginning

LABEL version="2.0"

LABEL v2feature="host-permission-4-uploading-files-and-move"

# Add `www-data` to group `appuser`
# Better, instead of hardcoding 1000 -> script to add dockerfile elements
RUN addgroup --gid 1000 appuser; \
  adduser --uid 1000 --gid 1000 \
  adduser www-data appuser;

COPY /practising /var/www/html/

RUN chmod -R 760 /var/www/html/uploads