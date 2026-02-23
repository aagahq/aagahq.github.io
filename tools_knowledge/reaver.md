# Reaver

Reaver implements a brute force attack against Wi-Fi Protected Setup (WPS) registrar PINs in order to recover WPA/WPA2 passphrases.

## Key Features
- **WPS Brute Force**: Targets the WPS PIN to recover the network's WPA/WPA2 password.
- **Automated**: Can automate the process of finding the correct PIN.
- **Pixie Dust Attack**: Supports the Pixie Dust vulnerability to quickly recover the PIN.

## Common Commands
- `reaver -i <interface> -b <bssid> -vv`: Start a standard brute-force attack on a specific access point.
- `reaver -i <interface> -b <bssid> -K`: Perform a Pixie Dust attack.

## Best Practices
- Only use on networks where you have explicit permission.
- Some newer routers have protections against WPS brute-force attacks.
- Ensure your wireless card is in monitor mode and compatible.
