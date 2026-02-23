# enum4linux

enum4linux is a tool for enumerating information from Windows and Samba systems. It is a wrapper around the tools in the `samba` package.

## Key Features
- **User Enumeration**: Lists users on the target system.
- **Group and Member Enumeration**: Lists groups and the users in those groups.
- **Share Enumeration**: Lists available SMB shares.
- **Password Policy Retrieval**: Fetches information about password policies.

## Common Commands
- `enum4linux -U <target_ip>`: Enumerate users.
- `enum4linux -S <target_ip>`: Enumerate shares.
- `enum4linux -P <target_ip>`: Get password policy information.
- `enum4linux -a <target_ip>`: Run all enumeration checks.

## Best Practices
- Often used against older versions of Windows or misconfigured Samba servers.
- Useful for reconnaissance in internal networks.
- Note that newer versions of Windows may have these features disabled by default.
