# Aircrack-ng

Aircrack-ng is a complete suite of tools to assess WiFi network security. It focuses on different areas of WiFi security: Monitoring, Attacking, Testing, and Cracking.

## Key Features
- **Monitoring**: Packet capture and export of data to text files for further processing by third party tools.
- **Attacking**: Replay attacks, deauthentication, fake access points and others via packet injection.
- **Testing**: Checking WiFi cards and driver capabilities (capture and injection).
- **Cracking**: WEP and WPA PSK (WPA 1 and 2).

## Common Commands
- `airmon-ng start <interface>`: Enable monitor mode on a wireless interface.
- `airodump-ng <interface>`: Capture packets to see nearby access points and stations.
- `aireplay-ng <options> <interface>`: Inject frames to generate traffic or deauthenticate clients.
- `aircrack-ng <file.cap>`: Crack WEP or WPA keys from a capture file.

## Best Practices
- Ensure your wireless card supports monitor mode and packet injection.
- Be aware of legal regulations regarding WiFi testing in your area.
- Use strong, complex passwords to protect your own wireless networks.
