# NBTScan

NBTScan is a program for scanning IP networks for NetBIOS name information. It sends NetBIOS status queries to each address in a supplied range and lists received information in human-readable form.

## Key Features
- **NetBIOS Scanning**: Discover NetBIOS names, MAC addresses, and logged-in users.
- **Fast and Lightweight**: Can quickly scan large IP ranges.
- **Useful for Internal Reconnaissance**: Helps identify Windows-based machines on a local network.

## Common Commands
- `nbtscan <ip_range>`: Scan a range of IP addresses (e.g., 192.168.1.0/24).
- `nbtscan -v <ip_range>`: Verbose output.
- `nbtscan -f <filename>`: Scan IP addresses listed in a file.

## Best Practices
- Primarily useful on internal networks where NetBIOS is active.
- Can be noisy on a network.
- Use the gathered information to identify potential targets for further testing.
