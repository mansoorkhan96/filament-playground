### Installation

Clone repo:

```
git clone
```

Install dependencies:

```
composer install
```

Copy env and generate key

```
cp .env.example .env && php artisan key:generate
```

Create Sqlite database

```
touch database/database.sqlite
```
