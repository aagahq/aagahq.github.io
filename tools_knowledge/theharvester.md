# theHarvester

theHarvester is a tool for gathering subdomain names, e-mail addresses, and names from different public sources like search engines, PGP key servers, and the SHODAN computer database.

## Key Features
- **Information Gathering**: Collects emails, names, subdomains, IPs, and URLs from multiple public sources.
- **Support for Many Sources**: Google, Bing, Baidu, PGP Key Servers, Shodan, etc.
- **Passive and Active Reconnaissance**: Can perform passive gathering and active DNS enumeration.

## Common Commands
- `theHarvester -d <domain> -l <limit> -b <source>`: Search for information about a domain on a specific source (e.g., google, bing).
- `theHarvester -d example.com -l 500 -b google`: Search for up to 500 results on Google for example.com.
- `theHarvester -d example.com -b all`: Search across all supported sources.

## Best Practices
- Use a variety of sources to get a more comprehensive view of the target.
- Be aware of the limitations of public data sources.
- Use the results responsibly and within legal boundaries.
