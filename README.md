# Galeria zdjęć

- Serwis umożliwia użytkownikom dodawanie własnych zdjęć
- Zdjęcia mogą być następnie grupowane w galerie
- Jedno zdjęcie może należeć do wielu galerii
- Galerie mogą być udostępniane za pomocą linku (każda osoba posiadająca link będzie mogła otworzyć galerię)
- Galeria może być udostępniana innym użytkownikom serwisu
- Możliwe jest udostępnienie galerii, w której wyświetlane zdjęcia będą posiadały pewien znak wodny lub będą miały znacznie zredukowaną rozdzielczość
- W przypadku, kiedy dla danego użytkownika została udostępniona nowa galeria powinien otrzymać odpowiednie powiadomienie na własnym koncie
- Aplikacja powinna tworzyć miniatury zdjęć o mniejszej rozdzielczości, aby ładowanie strony było szybsze (skompresowana wersja powinna być tworzona automatycznie w momencie dodania zdjęcia)


To configure this application execute:

```bash
# Install prject dependencies
composer install

# Uses example credentials for DB and other services
cp .env.example .env

# Generates key for encryption
php artisan key:generate

# Create DB schema
php artisan migrate:fresh

# Add some example data
php artisan db:seed

# IDE helpers
php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models --write

```

To start local server:

```bash
php artisan serve
```
Regenerate datbase dump:

```bash
php artisan migrate:fresh
php artisan db:seed
mysqldump -u test test -p

