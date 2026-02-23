# dnsenum

dnsenum is a multithreaded perl script to enumerate DNS information of a domain and to discover non-contiguous ip blocks.

## Key Features
- **DNS Records**: Fetches A, NS, MX, and TXT records.
- **Zone Transfers**: Attempts to perform zone transfers from DNS servers.
- **Brute Force**: Discovers subdomains by trying names from a wordlist.
- **Google Scraping**: Finds subdomains by scraping Google search results.
- **Reverse Lookups**: Performs reverse lookups on IP ranges found.

## Common Commands
- `dnsenum <domain>`: Perform basic enumeration.
- `dnsenum --enum <domain>`: Shortcut for common enumeration options.
- `dnsenum -f <wordlist> <domain>`: Brute force subdomains using a wordlist.
- `dnsenum -p <pages> -s <max_subdomains> <domain>`: Scrape Google for subdomains.

## Best Practices
- Use a high-quality wordlist for more effective brute-forcing.
- Be cautious with large-scale scans, as they can be noisy and potentially get your IP blacklisted.
- Understand the implications of zone transfers and how they can be used for reconnaissance.
