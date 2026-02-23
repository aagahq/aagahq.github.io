# tcpdump

tcpdump is a command-line packet analyzer. It allows the user to intercept and display TCP/IP and other packets being transmitted or received over a network to which the computer is attached.

## Key Features
- **Packet Capture**: Captures network traffic in real-time.
- **Filtering**: Powerful BPF (Berkeley Packet Filter) syntax to capture specific traffic.
- **Protocol Analysis**: Can decode many network protocols.
- **Output to File**: Save captures to `.pcap` files for analysis in other tools like Wireshark.

## Common Commands
- `tcpdump -i <interface>`: Capture traffic on a specific interface.
- `tcpdump -w <file.pcap>`: Save captured traffic to a file.
- `tcpdump -r <file.pcap>`: Read and display packets from a file.
- `tcpdump 'port 80'`: Capture only HTTP traffic on port 80.
- `tcpdump -X`: Display packet contents in both hex and ASCII.

## Best Practices
- Use filters to reduce the amount of captured data.
- Running as a non-root user is often possible if specific permissions are set.
- Be careful with the amount of data captured, as it can quickly fill up storage.
