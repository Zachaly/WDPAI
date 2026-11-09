# WDPAI
Project for university course about creating websites

Reusable PHP view partials live in `public/views/components/` and are included from page views with `require`. Page content is rendered inside the shared document shell in `public/views/layout.html.php`.

## User registration

The registration form stores first name, last name, handle, email, the `password_hash()` result, and the time the terms were accepted in PostgreSQL. `App\Model\User` represents these user records, and `UserRepository` persists and looks them up through PDO. Email addresses and handles are unique without regard to case. Registration and login validate their inputs on the server and require CSRF tokens. Login accepts either a handle or email, verifies passwords with `password_verify()`, and uses a regenerated, HTTP-only session; passwords are never stored in plain text. Sign out is handled by a CSRF-protected POST request.

SQL migrations live in `database/migrations/` and are applied automatically whenever the PHP service starts. Applied migrations are recorded in `schema_migrations` and are skipped on subsequent starts. A PostgreSQL advisory lock prevents concurrent PHP containers from applying the same migration simultaneously. You can also run the migrator manually with:

```bash
docker compose run --rm php php bin/migrate.php
```

Database connection settings for PHP are stored in the root-level `config.php`, outside the public document root. Keep its database name, username, and password in sync with the PostgreSQL service settings in `docker-compose.yml`. The Compose database credentials shown there are for local development and should be changed before deployment.