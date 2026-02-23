# DIRB

DIRB is a Web Content Scanner. It looks for existing (and/or hidden) Web Objects. It works by launching a dictionary based attack against a web server and analyzing the responses.

## Key Features
- **Dictionary Attack**: Uses a wordlist to find hidden directories and files.
- **Recursive Scanning**: Can automatically scan subdirectories it discovers.
- **Custom Wordlists**: Supports using custom wordlists for more targeted scans.
- **HTTP/HTTPS Support**: Works with both secure and insecure web servers.

## Common Commands
- `dirb <url>`: Basic scan using the default wordlist.
- `dirb <url> <wordlist>`: Use a specific wordlist for the scan.
- `dirb <url> -X .php,.txt`: Search for specific file extensions.
- `dirb <url> -o <output_file>`: Save the results to a file.

## Best Practices
- Start with a small, general-purpose wordlist.
- Use the `-z` flag to add a delay between requests to avoid overwhelming the server or getting blocked.
- Be aware of the impact on server logs and potential for triggering security alerts.
