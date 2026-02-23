# Nikto

Nikto is an Open Source (GPL) web server scanner which performs comprehensive tests against web servers for multiple items, including over 6700 potentially dangerous files/programs, checks for outdated versions of over 1250 servers, and version specific problems on over 270 servers.

## Key Features
- **Comprehensive Scanning**: Checks for dangerous files, outdated server versions, and configuration issues.
- **Vulnerability Identification**: Identifies common web vulnerabilities like XSS, SQL injection, etc. (though not its primary focus).
- **SSL Support**: Scans both HTTP and HTTPS servers.
- **Reporting**: Supports multiple output formats (text, XML, HTML, CSV).

## Common Commands
- `nikto -h <host>`: Basic scan of a host.
- `nikto -h <host> -ssl`: Scan a host using SSL.
- `nikto -h <host> -p <port>`: Scan a specific port.
- `nikto -h <host> -Cgidirs all`: Scan all CGI directories.
- `nikto -h <host> -o <output_file> -Format html`: Save results to an HTML file.

## Best Practices
- Run Nikto alongside other web scanners for comprehensive coverage.
- Regularly update Nikto's database using `-update` (though often managed by the OS package manager).
- Analyze the results carefully, as Nikto can produce false positives.
