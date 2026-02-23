# Nmap (Network Mapper)

Nmap is a free and open-source network scanner. It is used to discover hosts and services on a computer network by sending packets and analyzing the responses.

## Key Features
- **Host Discovery**: Identifying hosts on a network (e.g., ping sweeps).
- **Port Scanning**: Enumerating open ports on target hosts.
- **Version Detection**: Interrogating network services on remote devices to determine application name and version number.
- **OS Detection**: Determining the operating system and hardware characteristics of network devices.
- **Scriptable interaction with the target**: Using Nmap Scripting Engine (NSE) and Lua programming language.

## Common Commands
- `nmap <target>`: Scan a single target.
- `nmap -sv <target>`: Service/version detection.
- `nmap -O <target>`: OS detection.
- `nmap -A <target>`: Aggressive scan (Includes OS detection, version detection, script scanning, and traceroute).
- `nmap -p <port> <target>`: Scan specific ports.
- `nmap -sn <target>`: Ping scan (disable port scan).

## NSE (Nmap Scripting Engine)
Nmap scripts allow for advanced discovery, vulnerability detection, and exploitation.
- `nmap --script <script_name> <target>`
- Common categories: `auth`, `broadcast`, `default`, `discovery`, `dos`, `exploit`, `external`, `fuzzer`, `intrusive`, `malware`, `safe`, `version`, `vuln`.

## Best Practices
- Always have permission before scanning a network.
- Use `-oA <filename>` to save results in all formats (normal, XML, and grepable).
- Use `-T4` for faster scans on reliable networks.
