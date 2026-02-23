# Gobuster

Gobuster is a tool used to discover subdomains, directories and files on websites. It is written in Go and is known for its speed.

## Key Features
- **Directory/File Enumeration**: Find hidden paths on a web server.
- **DNS Subdomain Enumeration**: Identify subdomains for a given domain.
- **VHost Enumeration**: Discover virtual hosts on a target web server.
- **Support for Multiple Protocols**: Includes support for HTTP, HTTPS, S3, and more.

## Common Commands
- `gobuster dir -u <url> -w <wordlist>`: Enumerate directories.
- `gobuster dns -d <domain> -w <wordlist>`: Enumerate subdomains.
- `gobuster vhost -u <url> -w <wordlist>`: Enumerate virtual hosts.
- `gobuster dir -u <url> -w <wordlist> -x php,html,txt`: Search for specific file extensions.

## Best Practices
- Choose appropriate wordlists for the target (e.g., SecLists).
- Use the `-t` flag to adjust the number of concurrent threads for faster scanning.
- Review the results to identify potentially sensitive or overlooked areas.
