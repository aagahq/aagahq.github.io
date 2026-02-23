# dnsrecon

dnsrecon is a multithreaded tool for DNS enumeration. It can perform many types of queries and brute-forcing.

## Key Features
- **Standard Queries**: Fetches SOA, NS, MX, A, and AAAA records.
- **Zone Transfers**: Attempts AXFR zone transfers.
- **Brute Force**: Brute-forces subdomains using a wordlist.
- **Reverse Lookup**: Performs reverse lookups on IP ranges.
- **Google Scraping**: Scrapes Google for subdomains.

## Common Commands
- `dnsrecon -d <domain>`: Basic enumeration for a domain.
- `dnsrecon -d <domain> -t axfr`: Attempt a zone transfer.
- `dnsrecon -d <domain> -D <wordlist> -t brt`: Brute force subdomains using a wordlist.
- `dnsrecon -r <range>`: Perform a reverse lookup on an IP range.

## Best Practices
- Use `-t std` for a standard set of queries.
- When brute-forcing, use a well-maintained wordlist like SecLists.
- Be aware that some DNS servers may rate-limit or block repeated queries.
