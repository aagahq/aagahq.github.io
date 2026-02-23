# WPScan

WPScan is a free, for non-commercial use, black box vulnerability scanner written for security professionals and blog maintainers to test the security of their sites.

## Key Features
- **Vulnerability Detection**: Scans WordPress installations for known security vulnerabilities.
- **Enumerate Users**: Identifies valid users on a WordPress site.
- **Plugin/Theme Detection**: Lists active plugins and themes and checks for vulnerabilities.
- **Brute Force Attacks**: Can be used to test password strength through dictionary attacks.

## Common Commands
- `wpscan --url <url>`: Basic scan of a WordPress site.
- `wpscan --url <url> --enumerate u`: Enumerate users.
- `wpscan --url <url> --enumerate p,t`: Enumerate plugins and themes.
- `wpscan --url <url> --passwords <wordlist> --usernames <user_list>`: Brute force attack.

## Best Practices
- Keep WPScan updated to ensure the latest vulnerability database is used.
- Respect the Terms of Service of the website being scanned.
- Use the scan results to secure your WordPress installation by updating plugins, themes, and using strong passwords.
