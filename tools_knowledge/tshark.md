# TShark (Wireshark)

TShark is a network protocol analyzer. It lets you capture packet data from a live network, or read packets from a previously saved capture file, either printing a decoded form of those packets to the standard output or writing the packets to a file.

## Key Features
- **Live Capture**: Capture packets from any network interface.
- **Packet Dissection**: Deep inspection of hundreds of protocols.
- **Filters**: Powerful capture and display filters (BPF and Wireshark filters).
- **Statistics**: Generate various statistics from captured data.

## Common Commands
- `tshark -i <interface>`: Capture live traffic on a specific interface.
- `tshark -r <file.pcap>`: Read packets from a capture file.
- `tshark -Y "<filter>"`: Apply a display filter (e.g., `http.request`).
- `tshark -T fields -e <field1> -e <field2>`: Extract specific fields from packets.

## Best Practices
- Use capture filters (`-f`) to reduce noise during high-volume captures.
- Pipe output to other tools (like `grep` or `sort`) for further analysis.
- Respect privacy and legal boundaries when sniffing network traffic.
