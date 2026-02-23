# SQLMap

SQLMap is an open-source penetration testing tool that automates the process of detecting and exploiting SQL injection flaws and taking over database servers.

## Key Features
- **Automatic Detection**: Finds SQL injection vulnerabilities in various parameters (GET, POST, Cookie, User-Agent, etc.).
- **Database Support**: Supports a wide range of database management systems (MySQL, PostgreSQL, Oracle, SQLite, etc.).
- **In-depth Exploitation**: Can dump entire database tables, fetch password hashes, and even execute OS commands.

## Common Commands
- `sqlmap -u "URL"`: Basic scan of a URL.
- `sqlmap -u "URL" --dbs`: List available databases.
- `sqlmap -u "URL" -D <db_name> --tables`: List tables in a specific database.
- `sqlmap -u "URL" -D <db_name> -T <table_name> --dump`: Dump data from a specific table.
- `sqlmap -r <request_file>`: Load an HTTP request from a file.

## Best Practices
- Only use on authorized targets.
- Be careful with `--os-shell` and other intrusive options.
- Use `--batch` for automated, non-interactive scans.
