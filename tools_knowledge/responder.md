# Responder

Responder is a LLMNR, NBT-NS and MDNS poisoner, with built-in HTTP/SMB/MSSQL/FTP/LDAP rogue authentication servers supporting NTLMv1/NTLMv2/LMv2, Extended Security NTLMSSP and Basic HTTP authentications.

## Key Features
- **Poisoning**: Answers LLMNR, NBT-NS, and MDNS queries to redirect traffic to the attacker's machine.
- **Rogue Servers**: Acts as various servers (HTTP, SMB, etc.) to capture credentials (hashes) from victim machines.
- **Analysis**: Can analyze network traffic to identify potential targets and misconfigurations.
- **Integration**: Works well with other tools like Nmap and Metasploit.

## Common Commands
- `responder -I <interface>`: Start Responder on a specific network interface.
- `responder -I <interface> -rv`: Start Responder in analyze mode with verbose output.
- `responder -I <interface> -w`: Enable WPAD (Web Proxy Auto-Discovery) rogue proxy.
- `responder -I <interface> -F`: Force NTLM authentication (can be intrusive).

## Best Practices
- Use on internal networks where LLMNR/NBT-NS are enabled.
- Be cautious in production environments as poisoning can disrupt network services.
- Always obtain proper authorization before using Responder.
