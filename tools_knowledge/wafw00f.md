# WafW00f

WafW00f is a tool used to identify and fingerprint Web Application Firewalls (WAF) protecting a website.

## Key Features
- **WAF Detection**: Identifies over 100 different WAF vendors.
- **Fingerprinting**: Uses various techniques to determine the specific WAF being used.
- **Support for Many WAFs**: Cloudflare, Incapsula, Akamai, and many more.

## Common Commands
- `wafw00f <url>`: Check a single URL for a WAF.
- `wafw00f -a <url>`: Check all possible WAFs for a given URL.
- `wafw00f -v <url>`: Verbose output.

## Best Practices
- Use WafW00f before running automated scans to see if a WAF might block or interfere with your tests.
- Knowing the type of WAF can help in choosing the right evasion techniques.
- Be aware that some WAFs might log or block multiple rapid requests.
