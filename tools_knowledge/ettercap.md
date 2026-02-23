# Ettercap

Ettercap is a comprehensive suite for man-in-the-middle attacks. It features sniffing of live connections, content filtering on the fly and many other interesting tricks. It supports active and passive dissection of many protocols and includes many features for network and host analysis.

## Key Features
- **MITM Attacks**: Supports ARP poisoning, ICMP redirection, and port stealing.
- **Packet Sniffing**: Captures and analyzes network traffic in real-time.
- **Protocol Dissection**: Decodes numerous network protocols, including encrypted ones (via SSL MITM).
- **Plugins**: Extendable functionality through a plugin system.

## Common Commands
- `ettercap -T -M arp:remote /<gateway_ip>// /<target_ip>//`: Perform a text-based ARP poisoning attack.
- `ettercap -C`: Start the curses-based GUI.
- `ettercap -G`: Start the GTK+ based GUI.
- `ettercap -T -r <file.pcap>`: Read and analyze a pcap file in text mode.

## Best Practices
- Only use on networks where you have explicit permission.
- Be aware of the potential for disrupting network traffic during MITM attacks.
- Familiarize yourself with the various sniffing and attack modes to choose the best one for your scenario.
